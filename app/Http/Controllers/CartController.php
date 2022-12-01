<?php

namespace App\Http\Controllers;

use App\Http\Services\RentService;
use App\Http\Services\PakaianService;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getCartData()
    {
        $id_user = Auth::id();
        $getTable = new RentService();
        $pakaianDetail = new PakaianService();

        $rentData = $getTable->getCartData($id_user, 'cart');
        $total_price = 0;
        foreach ($rentData as $data) {
            $total_price += $data->total_harga;
            $pakaianData = $pakaianDetail->getDetail($data->item_id);
            $data->size = $pakaianData[0]->size;
            $img = json_decode($pakaianData[0]->img);
            $data->name = $pakaianData[0]->name;
            $data->img = $img[4];
            $data->color = $pakaianData[0]->color;

            $s_date = $data->start_date;
            $s_date = explode(" ", $s_date);

            $e_date = $data->end_date;
            $e_date = explode(" ", $e_date);

            $data->start_date = $s_date[0];
            $data->end_date = $e_date[0];
        }

        // return ($rentData);
        return view('cart')->with(["rentData" => $rentData])->with('totalPrice', $total_price);
        //return view
    }

    public function getCartDetail($id)
    {
        $getTable = new RentService();
        $rentDetail = $getTable->getDetail($id);
        return view('detail_penyewaan')->with(['rentDetail' => $rentDetail]);
        //return view

    }

    public function insertCart($id)
    {
        $rentService = new RentService();
        $pakaianData = new PakaianService();
        $pakaianDetail = $pakaianData->getDetail($id);

        $id_user = Auth::id();
        $s_date = Request()->start_time;
        $e_date = Request()->end_time;

        $datetime1 = new DateTime($s_date);
        $datetime2 = new DateTime($e_date);

        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');

        if ($days == 0) {
            $days += 1;
        }

        $harga = $pakaianDetail[0]->harga;

        $total_price = (float)$harga * (float)($days);

        $data = [
            'user_id' => $id_user,
            'item_id' => $id,
            'harga' =>  $total_price,
            'qty' => 1,
            'status' => 'cart',
            'start_time' => Request()->start_time,
            'end_time' => Request()->end_time,

        ];
        // return ($data);
        $rentService->insertData($data);
        return redirect('/cart'); //temp return, ganti ke keranjang klo udah jadi 
    }

    public function updateCart($id)
    {
        $getTable = new RentService();
        $cart = $getTable->getDetail($id);
        $pakaianData = new PakaianService();
        $pakaianDetail = $pakaianData->getDetail($cart->item_id);

        $s_date = $cart->start_date;
        $e_date = $cart->end_date;

        $datetime1 = new DateTime($s_date);
        $datetime2 = new DateTime($e_date);

        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');

        if ($days == 0) {
            $days += 1;
        }
        $harga = $pakaianDetail[0]->harga;

        $initial_price = (float)$harga * (float)($days);
        $stock = $pakaianDetail[0]->stock;
        if ($cart->qty + 1 <= $stock) {
            $requestData = [
                'qty' => $cart->qty + 1,
                'total_harga' => $cart->total_harga + $initial_price
            ];
            $getTable->updateData($id, $requestData);
        }

        return redirect('/cart');
    }

    public function subtractCart($id)
    {
        $getTable = new RentService();
        $cart = $getTable->getDetail($id);
        $pakaianData = new PakaianService();
        $pakaianDetail = $pakaianData->getDetail($cart->item_id);

        $s_date = $cart->start_date;
        $e_date = $cart->end_date;

        $datetime1 = new DateTime($s_date);
        $datetime2 = new DateTime($e_date);

        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');

        if ($days == 0) {
            $days += 1;
        }
        $harga = $pakaianDetail[0]->harga;

        $initial_price = (float)$harga * (float)($days);

        if ($cart->qty - 1 == 0) {
            $getTable->deleteData($id);
        } else {
            $requestData = [
                'qty' => $cart->qty - 1,
                'total_harga' => $cart->total_harga - $initial_price
            ];

            $getTable->updateData($id, $requestData);
        }
        return redirect('/cart');
    }

    public function deleteCart($id)
    {
        $getTable = new RentService();
        $getTable->deleteData($id);
        return redirect('/cart');
        //return view
    }
}

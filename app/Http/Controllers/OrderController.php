<?php

namespace App\Http\Controllers;

use App\Http\Services\RentService;
use App\Http\Services\PakaianService;
use App\Http\Controllers\ProfileController;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
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
    public function getAllOrder()
    {
        $getTable = new RentService();
        $rentData = $getTable->getAllOrder();
        return view('admin.order')->with(['rentData' => $rentData]);
    }
    public function getOrderData()
    {
        $id_user = Auth::id();
        $getTable = new RentService();
        $pakaianDetail = new PakaianService();

        $user = new ProfileController();
        $rentData = $getTable->getOrderData($id_user);
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
            $data->address = json_decode($data->address);
        }

        // return ($rentData);
        return view('order_status')->with(["rentData" => $rentData])->with('totalPrice', $total_price);
        //return view
    }

    public function getOrderDetailAdmin($id)
    {

        $getTable = new RentService();
        $rentDetail = $getTable->getOrderDetail($id);

        $user = new ProfileController();
        $userData = $user->getUser($rentDetail->user_id);

        $s_date = $rentDetail->start_date;
        $s_date = explode(" ", $s_date);

        $e_date = $rentDetail->end_date;
        $e_date = explode(" ", $e_date);

        $u_date = $rentDetail->updated_at;
        $u_date = explode(" ", $u_date);

        $rentDetail->updated_at = $u_date[0];
        $rentDetail->start_date = $s_date[0];
        $rentDetail->end_date = $e_date[0];
        $rentDetail->address = json_decode($rentDetail->address);

        // return ($rentDetail);
        return view('admin.detail_order')->with(['order' => $rentDetail]);
    }

    public function getOrderDetail($id)
    {
        $id_user = Auth::id();

        $user = new ProfileController();

        $getTable = new RentService();
        $rentDetail = $getTable->getOrderDetail($id);

        $s_date = $rentDetail->start_date;
        $s_date = explode(" ", $s_date);

        $e_date = $rentDetail->end_date;
        $e_date = explode(" ", $e_date);

        $u_date = $rentDetail->updated_at;
        $u_date = explode(" ", $u_date);

        $rentDetail->updated_at = $u_date[0];
        $rentDetail->start_date = $s_date[0];
        $rentDetail->end_date = $e_date[0];
        $rentDetail->address = json_decode($rentDetail->address);

        if ($rentDetail->status == 'process') {
            $rentDetail->w = 25;
        } elseif ($rentDetail->status == 'sent') {
            $rentDetail->w = 46;
        } elseif ($rentDetail->status == 'received') {
            $rentDetail->w = 69;
        } elseif ($rentDetail->status == 'received_back') {
            $rentDetail->w = 100;
        } else {
            $rentDetail->w = 4;
        }
        // return ($rentDetail);
        return view('detail_order')->with(['rentDetail' => $rentDetail]);
        //return view
    }

    public function insertOrder()
    {
        $id_user = Auth::id();
        $getTable = new RentService();

        $rentData = $getTable->getCartData($id_user, 'cart');
        foreach ($rentData as $data) {
            $req = [
                'status' => 'process',
                'updated_at' => Carbon::now()->toDateTimeString(),
            ];
            $getTable->updateData($data->id, $req);
        }
        return redirect('/order_finish');
    }

    public function orderFinish()
    {
        return view('order_finish');
    }

    public function viewEdit($id)
    {
        $getTable = new RentService();
        $rentDetail = $getTable->getOrderDetail($id);
        // return ($rentDetail);
        return view('admin.edit_order')->with(['order' => $rentDetail]);
    }

    public function updateStatus($id)
    {
        $getTable = new RentService();

        $req = [
            'status' => Request()->status,
            'updated_at' => Carbon::now()->toDateTimeString(),
        ];
        $getTable->updateData($id, $req);
        return redirect('/admin/order');
    }
}

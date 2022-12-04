<?php

namespace App\Http\Controllers;

use App\Http\Services\RentService;
use App\Http\Services\PakaianService;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
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
    public function getCheckoutData()
    {
        $id_user = Auth::id();
        $getTable = new RentService();
        $pakaianDetail = new PakaianService();

        $rentData = $getTable->getCartData($id_user, 'cart');
        $total_price = 0;
        foreach ($rentData as $data) {
            $rentData->deposit = $data->total_harga * 30 / 100;
            $total_price += $data->total_harga;
        }

        // return ($rentData);
        return view('checkout_first')->with(["rentData" => $rentData])->with('totalPrice', $total_price);
        //return view
    }

    public function updateAddress()
    {
        $id_user = Auth::id();
        $getTable = new RentService();

        $rentData = $getTable->getCartData($id_user, 'cart');
        $total_price = 0;
        foreach ($rentData as $data) {
            $rentData->deposit = $data->total_harga * 30 / 100;
            $total_price += $data->total_harga;
            $req = [
                'address' => json_encode(Request()->address),
                'name' => Request()->name,
            ];
            $getTable->updateData($data->id, $req);
        }
        // return ($rentData);
        return view('payment')->with(["rentData" => $rentData])->with('totalPrice', $total_price);
    }

    public function getReview()
    {
        $id_user = Auth::id();
        $getTable = new RentService();

        $rentData = $getTable->getCartData($id_user, 'cart');
        $total_price = 0;
        foreach ($rentData as $data) {
            $rentData->deposit = $data->total_harga * 30 / 100;
            $total_price += $data->total_harga;
            $data->address = json_decode($data->address);
        }
        // return ($rentData);
        return view('review')->with(["rentData" => $rentData])->with('totalPrice', $total_price);
    }
}

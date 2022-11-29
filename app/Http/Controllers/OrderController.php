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
    public function getOrderData()
    {
        $id_user = Auth::id();
        $getTable = new RentService();
        $pakaianDetail = new PakaianService();

        $rentData = $getTable->getCartData($id_user,'process');
        $total_price = 0;
        
        // return($rentData);
        return view('order_status')->with(["rentData" => $rentData])->with('totalPrice', $total_price);
        //return view
    }

    public function getOrderDetail($id)
    {
        $getTable = new RentService();
        $rentDetail = $getTable->getDetail($id);
        return view('detail_penyewaan')->with(['rentDetail' => $rentDetail]);
        //return view
    }

    public function insertOrder()
    {
        $id_user = Auth::id();
        $getTable = new RentService();
        $pakaianDetail = new PakaianService();
        $user = new ProfileController();
        $user_table = $user->getUser($id_user);
        $user_name = $user_table->name;

        $rentData = $getTable->getCartData($id_user, 'cart');
        $total_price = 0;
        foreach ($rentData as $data) {
            $data->address = Request()->address;
            $data->status = 'process';
            $getTable->updateData($data->id, $data);
        }
    }

}

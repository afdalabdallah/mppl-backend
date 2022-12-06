<?php

namespace App\Http\Controllers;

use App\Http\Services\RentService;
use App\Http\Services\PakaianService;
use App\Http\Controllers\ProfileController;
use App\Http\Services\PengembalianService;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class PengembalianController extends Controller
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
    public function getAllPengembalian()
    {
        $getTable = new PengembalianService();
        $pengembalianData = $getTable->getAllPengembalian();
        return view('admin.return')->with(['pengembalianData' => $pengembalianData]);
    }
    public function getPengembalian()
    {
        $id_user = Auth::id();
        $getTable = new PengembalianService();
        $pakaianDetail = new PakaianService();
        $rentService = new RentService();

        $pengembalianData = $getTable->getPengembalianData($id_user);

        foreach ($pengembalianData as $data) {
            $order_id = $data->order_id;
            $rentData = $rentService->getOrderDetail($order_id);

            $pakaianData = $pakaianDetail->getDetail($rentData->item_id);

            $img = json_decode($pakaianData[0]->img);
            $data->name = $pakaianData[0]->name;
            $data->img = $img[4];
            $data->color = $pakaianData[0]->color;

            $s_date = $data->created_at;
            $s_date = explode(" ", $s_date);
            $data->created_at = $s_date[0];
            $data->deposit = $rentData->deposit;
            $data->rejectedMsg = '';
        }

        // return ($pengembalianData);
        return view('pengembalian')->with(["pengembalianData" => $pengembalianData]);
        //return view
    }

    public function getPengembalianDetail($id)
    {
        $getTable = new PengembalianService();
        $pakaianDetail = new PakaianService();
        $rentService = new RentService();

        $pengembalianData = $getTable->getPengembalianDetail($id);

        $order_id = $pengembalianData->order_id;
        $rentData = $rentService->getOrderDetail($order_id);

        $pakaianData = $pakaianDetail->getDetail($rentData->item_id);

        $img = json_decode($pakaianData[0]->img);
        $pengembalianData->item_name = $pakaianData[0]->name;
        $pengembalianData->img = $img[4];
        $pengembalianData->color = $pakaianData[0]->color;

        $s_date = $pengembalianData->created_at;
        $s_date = explode(" ", $s_date);
        $pengembalianData->created_at = $s_date[0];
        $pengembalianData->deposit = $rentData->deposit;

        // return ($pengembalianData);
        return view('pengembalian_detail')->with(["pengembalianData" => $pengembalianData]);
        //return view
        //return view
    }

    public function getDetailAdminPengembalian($id)
    {
        $getTable = new PengembalianService();
        $pakaianDetail = new PakaianService();
        $rentService = new RentService();

        $pengembalianData = $getTable->getPengembalianDetail($id);

        $order_id = $pengembalianData->order_id;
        $rentData = $rentService->getOrderDetail($order_id);

        $pakaianData = $pakaianDetail->getDetail($rentData->item_id);

        $img = json_decode($pakaianData[0]->img);
        $pengembalianData->name = $pakaianData[0]->name;
        $pengembalianData->img = $img[4];
        $pengembalianData->color = $pakaianData[0]->color;

        $s_date = $pengembalianData->created_at;
        $s_date = explode(" ", $s_date);
        $pengembalianData->created_at = $s_date[0];
        $pengembalianData->deposit = $rentData->deposit;

        // return ($pengembalianData);
        return view('admin.detail_return')->with(["pengembalianData" => $pengembalianData]);
    }

    public function insertPengembalian()
    {
        $id_user = Auth::id();
        $service = new PengembalianService();
        $rent = new RentService();
        $rent_data = $rent->getOrderDetail(Request()->order_id);
        if ($rent_data == null) {
            return view('/pengembalian_form')->with(['errorMsg' => 'Order ID not found !']);
        } else if ($rent_data->status != "received") {
            return view('/pengembalian_form')->with(['errorMsg' => 'Item is not yet received by customer !']);
        }
        $service->insertData(Request());

        return redirect('/pengembalian');
    }

    public function deletePengembalian($id)
    {
        $service = new PengembalianService();
        $service->updateData($id, ['status' => 'rejected']);
        return redirect('/admin/return');
    }

    public function viewEdit($id)
    {
        $getTable = new PengembalianService();
        $pengembalianDetail = $getTable->getPengembalianDetail($id);
        // return ($rentDetail);
        return view('admin.edit_return')->with(['data' => $pengembalianDetail]);
    }

    public function viewReject($id)
    {
        $getTable = new PengembalianService();
        $pengembalianDetail = $getTable->getPengembalianDetail($id);
        // return ($rentDetail);
        return view('admin.reject_return')->with(['data' => $pengembalianDetail]);
    }

    public function viewForm()
    {
        return view('pengembalian_form')->with(['errorMsg' => '']);
    }

    public function viewEditForm()
    {
        return view('pengembalian_form_edit')->with(['errorMsg' => '']);
    }

    public function updateStatus($id)
    {
        $getTable = new PengembalianService();
        $order = new RentService();
        $data = $getTable->getPengembalianDetail($id);

        if (Request()->status == null) {
            Request()->status = 'rejected';
        }
        if (Request()->status == 'received') {
            $order->updateData($data->order_id, ['status' => 'received_back']);
        }
        $req = [
            'status' => Request()->status,
            'rejected_msg' => Request()->reject_msg,
            'updated_at' => Carbon::now()->toDateTimeString(),
        ];
        $getTable->updateData($id, $req);
        return redirect('/admin/return');
    }

    public function updatePengembalian()
    {
        $id_user = Auth::id();
        $service = new PengembalianService();
        $rent = new RentService();
        $rent_data = $rent->getOrderDetail(Request()->order_id);
        if ($rent_data == null) {
            return view('/pengembalian_form')->with(['errorMsg' => 'Order ID not found !']);
        } else if ($rent_data->status != "rejected") {
            return view('/pengembalian_form')->with(['errorMsg' => 'Item is not rejected !']);
        }
        $service->updateData(Request()->id, Request());

        return redirect('/pengembalian');
    }
}

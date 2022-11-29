<?php

namespace App\Http\Services;

use Carbon\Carbon;
use Illuminate\Http\Request;
use DateTime;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use DB;

class RentService
{
    public static function getOrderData($id_user)
    {
        $tableData = DB::table('penyewaan')
            ->where('penyewaan.user_id', $id_user)
            ->where('penyewaan.status', '!=', 'cart');
        $tableData = $tableData->get();
        return ($tableData);
    }

    public static function getOrderDetail($id)
    {
        $tableData = DB::table('penyewaan')
            ->where('penyewaan.id', $id)
            ->where('penyewaan.status', '!=', 'cart');
        $tableData = $tableData->get()->first();
        return ($tableData);
    }

    public static function getCartData($id_user, $status)
    {
        $tableData = DB::table('penyewaan')
            ->where('penyewaan.user_id', $id_user)
            ->where('penyewaan.status', $status);
        $tableData = $tableData->get();
        return ($tableData);
    }

    public static function getDetail($id)
    {
        $tableData = DB::table('penyewaan')
            ->where('penyewaan.id', $id);
        $tableData = $tableData->get()->first();
        return ($tableData);
    }

    public static function insertData($requestData)
    {
        $table = DB::table('penyewaan');
        $id = IdGenerator::generate([
            'table' => 'penyewaan',
            'length' => 5,
            'prefix' => 'R'
        ]);

        $rows = $table->count();
        $data = [];
        $total_harga = 0;

        $data = [
            'id' => $id,
            'user_id' => $requestData['user_id'],
            'item_id' => $requestData['item_id'],
            'qty' => $requestData['qty'],
            'total_harga' => $requestData['harga'],
            'status' => $requestData['status'],
            'start_date' => $requestData['start_time'],
            'end_date' => $requestData['end_time'],
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ];
        $table->insert($data);
    }

    public static function updateData($id, $requestData)
    {

        DB::table('penyewaan')->where('id', $id)->update($requestData);
    }

    public static function deleteData($id)
    {
        DB::table('penyewaan')->where('id', $id)->delete();
    }
}

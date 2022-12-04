<?php

namespace App\Http\Services;

use Carbon\Carbon;
use Illuminate\Http\Request;
use DateTime;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use DB;
use Illuminate\Support\Facades\Auth;

class PengembalianService
{
    public static function getAllPengembalian()
    {
        $tableData = DB::table('pengembalian')
            ->where('pengembalian.status', '!=', 'complete');
        $tableData = $tableData->get();
        return ($tableData);
    }
    public static function getPengembalianData($id_user)
    {
        $tableData = DB::table('pengembalian')
            ->where('user_id', $id_user);
        $tableData = $tableData->get();
        return ($tableData);
    }

    public static function getPengembalianDetail($id)
    {
        $tableData = DB::table('pengembalian')
            ->where('pengembalian.id', $id);
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
        $table = DB::table('pengembalian');
        $id = IdGenerator::generate([
            'table' => 'pengembalian',
            'length' => 5,
            'prefix' => 'A'
        ]);

        $rows = $table->count();
        $data = [];
        $total_harga = 0;

        $data = [
            'id' => $id,
            'order_id' => $requestData['order_id'],
            'user_id' => Auth::id(),
            'name' => $requestData['name'],
            'address' => $requestData['address'],
            'no_telp' => $requestData['no_telp'],
            'bank' => $requestData['bank'],
            'nomor_bank' => $requestData['nomor_bank'],
            'no_resi' => $requestData['no_resi'],
            'foto_resi' => $requestData['foto_resi'],
            'foto_paket' => $requestData['foto_paket'],
            'note' => $requestData['note'],
            'status' => 'process',
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

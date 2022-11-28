<?php

namespace App\Http\Services;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use DB;

class PakaianService
{
    public static function getData()
    {
        $tableData = DB::table('pakaian');
        $tableData = $tableData->get();
        return ($tableData);
    }

    public static function getCategory($category)
    {
        $tableData = DB::table('pakaian')->where('category', $category);
        $tableData = $tableData->get();
        return ($tableData);
    }

    public static function getSize($size)
    {
        $tableData = DB::table('pakaian')->where('size', $size);
        $tableData = $tableData->get();
        return ($tableData);
    }

    public static function getHarga($harga)
    {
        $tableData = DB::table('pakaian')->where('harga', '<=', $harga);
        $tableData = $tableData->get();
        return ($tableData);
    }

    public static function getDetail($id)
    {
        $tableData = DB::table('pakaian')->where('id', $id);
        $tableData = $tableData->get();
        return ($tableData);
    }

    public static function insertData($requestData)
    {
        $table = DB::table('pakaian');
        $id = IdGenerator::generate([
            'table' => 'pakaian',
            'length' => 5,
            'prefix' => 'P'
        ]);

        $data = [
            'id' => $id,
            'name' => $requestData['name'],
            'description' => $requestData['description'],
            'color' => $requestData['color'],
            'model_height' => $requestData['model_height'],
            'size' => $requestData['size'],
            'merek' => $requestData['merek'],
            'category' => $requestData['category'],
            'stock' => $requestData['stock'],
            'harga' => $requestData['harga'],
            'img' => json_encode($requestData['img']),
        ];

        $table->insert($data);
    }

    public static function updateData($id, $requestData)
    {
        DB::table('pakaian')->where('id', '=', $id)->update($requestData);
    }

    public static function deleteData($id)
    {
        DB::table('pakaian')->where('id', '=', $id)->delete();
    }
}

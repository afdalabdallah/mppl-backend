<?php

namespace App\Http\Services;

use Carbon\Carbon;
use Illuminate\Http\Request;
use DateTime;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use DB;

class RentService
{
    public static function getData($id_user)
    {

        $tableData = DB::table('rents')
            ->join('building', 'building.id', '=', 'rents.building_id')
            ->select('building.name', 'building.price', 'rents.*')
            ->where('rents.user_id', $id_user);
        $tableData = $tableData->get();
        return ($tableData);
    }

    public static function getDetail($id)
    {
        $tableData = DB::table('rents')
            ->join('building', 'building.id', '=', 'rents.building_id')
            ->select('rents.*', 'building.area', 'building.name', 'building.price', 'building.address')
            ->where('rents.id', $id);
        $tableData = $tableData->get()->first();
        return ($tableData);
    }

    public static function insertData($requestData)
    {
        $table = DB::table('rents');
        $id = IdGenerator::generate([
            'table' => 'rents',
            'length' => 5,
            'prefix' => 'R'
        ]);

        $s_date = $requestData['start_time'];
        $e_date = $requestData['end_time'];

        $datetime1 = new DateTime($s_date);
        $datetime2 = new DateTime($e_date);

        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');

        if ($days == 0) {
            $days += 1;
        }

        $total_price = (float)$requestData['price'] * (float)($days);


        $data = [
            'id' => $id,
            'user_id' => $requestData['user_id'],
            'building_id' => $requestData['building_id'],
            'total_price' => $total_price,
            'start_time' => $requestData['start_time'],
            'end_time' => $requestData['end_time'],
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ];
        $table->insert($data);
    }

    public static function updateData($id, $requestData)
    {
        $s_date = $requestData['start_time'];
        $e_date = $requestData['end_time'];

        $datetime1 = new DateTime($s_date);
        $datetime2 = new DateTime($e_date);

        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');

        if ($days == 0) {
            $days += 1;
        }

        $total_price = (float)$requestData['total_price'] * (float)($days);

        $requestData['total_price'] = $total_price;

        DB::table('rents')->where('id', $id)->update($requestData);
    }

    public static function deleteData($id)
    {
        DB::table('rents')->where('id', $id)->delete();
    }
}

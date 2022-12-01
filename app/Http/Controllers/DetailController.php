<?php

namespace App\Http\Controllers;

use App\Http\Services\PakaianService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Carbon\Carbon;

class DetailController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function viewDetail($id)
    {
        $pakaianTable = new PakaianService();
        $item = $pakaianTable->getDetail($id);
        $item[0]->img = json_decode($item[0]->img);
        $date = Carbon::now();
        $mindate = $date->add(7, 'day')->toDateString();
        $maxdate = $date->add(14, 'day')->toDateString();
        $maxdate_sewa = $date->addMonth(3)->toDateString();
        return view('item')->with(["detailItem" => $item[0]])
            ->with(['min_date' => $mindate, 'max_date' => $maxdate, 'max_date_sewa' => $maxdate_sewa, 'dateError' => false, 'dateErrorMsg' => "Haloe"]);
    }
}

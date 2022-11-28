<?php

namespace App\Http\Controllers;

use App\Http\Services\PakaianService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

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
        return view('item')->with(["detailItem" => $item[0]]);
        // return ($item);
    }
}

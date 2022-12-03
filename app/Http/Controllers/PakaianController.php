<?php

namespace App\Http\Controllers;

use App\Http\Services\PakaianService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PakaianController extends Controller
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
    public function viewCreate()
    {
        return view('admin.create');
    }
    public function insertPakaian()
    {
        $pakaian = new PakaianService();
        $pakaian->insertData(Request());
        return redirect('/admin/insert');
    }

    public function getPakaianData($b_id)
    {
        $getTable = new PakaianService();
        $pakaianData = $getTable->getDetail($b_id);
        return view('detail_gedung')->with(["pakaianData" => $pakaianData]);
    }

    public function UpdatePakaianData($b_id)
    {
        $getTable = new PakaianService();
        $pakaianData = $getTable->getDetail($b_id);
        return view('update')->with(["pakaianData" => $pakaianData]);
    }
}

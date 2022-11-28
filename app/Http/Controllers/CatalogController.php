<?php

namespace App\Http\Controllers;

use App\Http\Services\PakaianService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CatalogController extends Controller
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
    public function viewCatalog($category)
    {
        $pakaianTable = new PakaianService();
        $pakaianCatalog = $pakaianTable->getCategory($category);
        foreach ($pakaianCatalog as $item) {
            $item->img = json_decode($item->img);
        }
        return view('catalog')->with(["pakaianCatalog" => $pakaianCatalog]);
        // return ($pakaianCatalog);
    }
}

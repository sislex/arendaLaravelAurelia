<?php

namespace App\Http\Controllers\Catalog;
use App\Http\Controllers\Controller;
use App\Good;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $items = Good::where('id', '=', '1')->get();

        return view('index/index');
    }
}

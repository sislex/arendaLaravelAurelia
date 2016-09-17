<?php

namespace App\Http\Controllers;

use App\Good;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Good::where('id', '=', '1')->get();

        return view('index/index');
    }
}

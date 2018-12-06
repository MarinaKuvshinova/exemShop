<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('home');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.index', ['page'=>'Index']);
    }
    public function product()
    {
        return view('home.product', ['page'=>'Product']);
    }
    public function catalog()
    {
        return view('home.category', ['page'=>'Catalog']);
    }


}

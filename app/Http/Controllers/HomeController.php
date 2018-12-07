<?php

namespace App\Http\Controllers;

use App\Category;
use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $categories = Category::all();
        return view('home.index', ['page'=>'Index', 'categories'=>$categories]);
    }
    public function product()
    {
        $categories = Category::all();
        return view('home.product', ['page'=>'Product', 'categories'=>$categories]);
    }
    public function catalog($categoryName)
    {
        $categories = Category::all();
        $categoryId = DB::table('categories')->where('categoryName', $categoryName)->value('id');
        $items = DB::table('items')->where('categoryId', $categoryId)->paginate(1);

//        $name = $request::url();
//        $name = $request->route()->getName();

       // $items = Item::where('categoryName','=', $categoryName)->get();

        return view('home.category', ['page'=>'Catalog', 'categories'=>$categories, 'name'=>$categoryName, 'items'=>$items]);
    }
    public function contact()
    {
        $categories = Category::all();
        return view('home.contact', ['page'=>'Contact', 'categories'=>$categories]);
    }





}

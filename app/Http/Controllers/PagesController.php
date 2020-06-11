<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class PagesController extends Controller
{
    //
    public function index()
    {
    	return view('index');
    }
    public function welcome()
    {
    	return view('welcome');
    }

    public function products()
    {
        $data['products'] = Product::orderBy('id','desc')->get();
    	return view('product.index',$data);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Product;
use App\ProductImage;

class AdminPagesController extends Controller
{
    //
    public function index()
    {
    	# code...
    	return view('backend.pages.index');
    }
}

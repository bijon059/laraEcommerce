<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use Symfony\Component\Console\Output\NullOutput;

class CategoriesController extends Controller
{
    public function index()
    {
        $data['categories']=Category::orderBy('id','desc')->get();
        return view('admin.categories.index',$data);
    }

    public function create()
    {
        $parent_category = Category::orderBy('name','asc')->where('parent_id',NULL)->get();

    	return view('admin.categories.create',compact('parent_category'));
    }
}

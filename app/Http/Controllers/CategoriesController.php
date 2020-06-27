<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

class CategoriesController extends Controller
{
    public function index()
    {
        $data['categories']=Category::orderBy('id','desc')->get();
        $parent_category = Category::orderBy('name','asc')->where('parent_id',NULL)->get();
        return view('admin.categories.index',$data,compact('parent_category'));
    }

    public function create()
    {
        $parent_category = Category::orderBy('name','asc')->where('parent_id',NULL)->get();

    	return view('admin.categories.create',compact('parent_category'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',

        ]);

        $category = new Category();

        $category->name = $request->name;

        $category->description = $request->description;

        $category->parent_id = $request->parent_id;

        $category->save();

        return redirect()->route('admin.category.index');
    }

    public function edit($id)
    {
        $data['category']=Category::find($id);
        $parent_category = Category::orderBy('name','asc')->where('parent_id',NULL)->get();
    	return view('admin.categories.edit',$data,compact('parent_category'));
    }

    # Edit Product
    public function update(Request $request, $id)
    {
        $category = Category::find($id);

        $category->name = $request->name;

        $category->description = $request->description;

        $category->parent_id = $request->parent_id;

        $category->save();


        return redirect()->route('admin.category.index');
    }

    # Delete Product
    public function delete($id)
    {
        $category=Category::find($id);
        if (!is_null($category)) {
            $category->delete();
        }
        session()->flash('success','Category has been Deleted !!');
        return back();
    }
}

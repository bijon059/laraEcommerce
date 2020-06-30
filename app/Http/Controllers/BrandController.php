<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class BrandController extends Controller
{
    //
    public function index()
    {
        $data['brands']=Brand::orderBy('id','desc')->get();
        return view('admin.brands.index',$data);
    }

    public function create()
    {
    	return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',

        ]);

        $category = new Brand();

        $category->name = $request->name;

        $category->description = $request->description;

        $category->save();

        return redirect()->route('admin.brand.index');
    }

    public function edit($id)
    {
        $data['brand']=Brand::find($id);
    	return view('admin.brands.edit',$data);
    }

    # Edit Brand
    public function update(Request $request, $id)
    {
        $brand = Brand::find($id);

        $brand->name = $request->name;

        $brand->description = $request->description;

        $brand->save();


        return redirect()->route('admin.brand.index');
    }

    # Delete Brand
    public function delete($id)
    {
        $brand=Brand::find($id);
        if (!is_null($brand)) {
            $brand->delete();
        }
        session()->flash('success','Brand has been Deleted !!');
        return back();
    }


}

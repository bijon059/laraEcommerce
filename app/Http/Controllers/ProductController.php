<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Product;
use App\ProductImage;
use App\Category;
use App\Brand;

class ProductController extends Controller
{
    //
    public function list()
    {
        $data['products'] = Product::orderBy('id','desc')->get();
        $data['categories'] = Category::all();
        $data['brand'] = Brand::all();
        // dd($data['category']);
    	return view('backend.product.product',$data);
    }

    // Category wise products
    public function catPro(Request $request)
    {
        // dd(request()->route('id'));
        $data['products'] = Product::where('category_id',request()->route('id'))->orderBy('id','desc')->get();
        $data['categories'] = Category::all();
        $data['brand'] = Brand::all();
    	return view('backend.product.categoriedProduct',$data);
    }

    # Product CreatePage
    public function create()
    {
        $category=Category::orderBy('name','asc')->get();
        $brand=Brand::orderBy('name','asc')->get();
    	return view('admin.product.create',compact('category','brand'));
    }

    # Save Product
    public function store(Request $request)
    {
        $product = new Product;

        $product->title = $request->title;

        $product->description = $request->description;

        $product->price = $request->price;

        $product->quantity = $request->quantity;

        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->admin_id = 1;
        $product->status = 1;
        $product->slug = Str::slug($product->title);

        $product->save();

        if(count($request->product_image)>0)
        {
            foreach ($request->product_image as $image) {
                $img = Str::random(12).'.'.$image->getClientOriginalExtension();
                $location = public_path('images/product/');
                $success = $image->move($location,$img);

                $product_image = new ProductImage;
                $product_image->product_id = $product->id;
                $product_image->image =$img;
                $product_image->save();
            }
        }

        return redirect()->route('admin.product.list');
    }

    # Product EditPage
    public function edit($id)
    {
        $data['product'] = Product::find($id);
        $category=Category::orderBy('name','asc')->get();
        $brand=Brand::orderBy('name','asc')->get();
    	return view('admin.product.edit',$data,compact('category','brand'));
    }

    # Edit Product
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $product->title = $request->title;

        $product->category_id = $request->category_id;

        $product->brand_id = $request->brand_id;

        $product->description = $request->description;

        $product->price = $request->price;

        $product->quantity = $request->quantity;

        $product->slug = Str::slug($product->title);

        $product->save();

        if(count($request->product_image)>1)
        {
            foreach ($request->product_image as $image) {
                $img = Str::random(12).'.'.$image->getClientOriginalExtension();
                $location = public_path('images/product/');
                $success = $image->move($location,$img);

                $product_image = new ProductImage;
                $product_image->product_id = $product->id;
                $product_image->image =$img;
                $product_image->save();
            }
        }

        return redirect()->route('admin.product.list');
    }


    # Delete Product
    public function delete($id)
    {
        $product=Product::find($id);
        if (!is_null($product)) {
            $product->delete();
        }
        session()->flash('success','Product has been Deleted !!');
        return back();
    }

    #SEARCH PRODUCT

    public function search()
    {
    	return view('admin.product.search');
    }

    public function autocomplete(Request $request)
    {
        if($request->ajax()) {

            $data = Product::where('title', 'LIKE', $request->title.'%')
                ->get();

            $output = '';

            if (count($data)>0) {

                $output = '<ul class="list-group" style="display: block; position: absolute; z-index: 1">';

                foreach ($data as $row){

                    $output .= '<li class="list-group-item">'.$row->title.'</li>';
                }

                $output .= '</ul>';
            }
            else {

                $output .= '<li class="list-group-item">'.'No results'.'</li>';
            }

            return $output;
        }
    }

    public function searchResult(Request $request)
    {
        if($request->ajax()) {
            $data = Product::where('title', 'LIKE', $request->title.'%')
                ->get();

            $output = '';

            if (count($data)>0) {



                foreach ($data as $row){
                    $output .= '<tr>';
                    $output .= '<td>'.$row->title.'</td>';
                    $output .= '<td>'.$row->price.'</td>';
                    $output .= '<td>'.$row->quantity.'</td>';
                    $output .= '</tr>';
                }


            }
            else {

                $output .= '<li class="list-group-item">'.'No results'.'</li>';
            }

            return $output;

        }
    }
}

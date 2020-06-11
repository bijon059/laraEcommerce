@extends('admin.layout.master')

@section('content')


<div class="card">
    <div class="card-header">
        <h4> Edit Product </h4>
    </div>
    <div class="card-body">

        <form class="forms-sample" id="form" action=" {{ route('admin.product.update',$product->id) }} " method="post"
            enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group" id="ccs">
                <label for="exampleInputName">Title</label>
                <input type="text" class="form-control" name="title" id="title" value="{{$product->title}}">
                <p><span class="error"></span></p>
            </div>

            <div class="form-group">
                <label for="exampleInputName1">Price</label>
                <input type="number" class="form-control" name="price" id="exampleInputName1" value="{{$product->price}}">
            </div>
            <div class="form-group">
                <label for="exampleInputName1">Quantity</label>
                <input type="number" class="form-control" name="quantity" id="quantity" value="{{$product->quantity}}">
            </div>

            <div class="form-group">
                <label for="exampleTextarea1">Description</label>
                <textarea name="description" class="form-control" id="exampleTextarea1" type="text" rows="2">{{$product->description}}</textarea>
            </div>

            <div class="form-group ">
                <label for="product_image">Product Image</label>
                <input name="product_image[]"  type="hidden">
                @php
                $i=1;
                @endphp
                @foreach ($product->images as $image)
                @if ($i>0)
                <img class="card-img-top featured-img" style="display: block; height: 150px; width: 150px;"
                    src="{{ asset('images/Product/'.$image->image) }}" alt="Card image">
                @endif
                @php
                $i--;
                @endphp
                @endforeach
                <div id="dinamic">
                    <div class="row">
                        <div class="col-md-6">
                            <p>Wand To Add More Image</p>
                        </div>
                        <div class="col-md-3">
                            <a id="add" href="#" class="fa fa-plus-square fa-1x" style="margin-top:10px;"> Add Image
                                Field </a>
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-success mr-2">Update Product</button>

        </form>
    </div>
</div>

@endsection



@section('js')

<script src=" {{ asset('js/addProduct.js') }}" type="text/javascript" charset="utf-8" async defer></script>

@endsection()

{{--
                      <div class="form-group">
                        <label for="exampleInputEmail3">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-info" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">City</label>
                        <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
                      </div> --}}

@extends('admin.layout.master')

@section('content')


<div class="card">
    <div class="card-header">
        <h4> Edit Brand </h4>
    </div>
    <div class="card-body">

        <form class="forms-sample" id="form" action=" {{ route('admin.brand.update',$brand->id) }} " method="post"
            enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleInputName">Brand Name</label>
                <input type="text" class="form-control" name="name" id="title" value="{{$brand->name}}">
                <p><span class="error"></span></p>
            </div>

            <div class="form-group">
                <label for="exampleTextarea1">Description</label>
                <textarea name="description" class="form-control" id="exampleTextarea1" type="text" rows="2">{{$brand->description}}</textarea>
            </div>

            <button type="submit" class="btn btn-success mr-2">Update Product</button>

        </form>
    </div>
</div>

@endsection



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

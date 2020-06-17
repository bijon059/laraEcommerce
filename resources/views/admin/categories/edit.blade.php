@extends('admin.layout.master')

@section('content')


<div class="card">
    <div class="card-header">
        <h4> Edit Category </h4>
    </div>
    <div class="card-body">

        <form class="forms-sample" id="form" action=" {{ route('admin.category.update',$category->id) }} " method="post"
            enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleInputName">Category Name</label>
                <input type="text" class="form-control" name="name" id="title" value="{{$category->name}}">
                <p><span class="error"></span></p>
            </div>

            <div class="form-group">
                <label for="exampleTextarea1">Parent Category </label>
                @if($category->parent_id == Null )
                <select class="form-control" name="parent_id">
                    <option style="font-size: 14px" value="">Select Parent Category</option>
                    @foreach ($parent_category as $item)
                    <option style="font-size: 14px" value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
                 @else
                 <select class="form-control" name="parent_id">
                    <option style="font-size: 14px" value="{{$category->parent_id}}">{{$category->parent->name}}</option>
                    @foreach ($parent_category as $item)
                    <option style="font-size: 14px" value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
                @endif

            </div>

            <div class="form-group">
                <label for="exampleTextarea1">Description</label>
                <textarea name="description" class="form-control" id="exampleTextarea1" type="text" rows="2">{{$category->description}}</textarea>
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

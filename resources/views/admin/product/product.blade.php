@extends('admin.layout.master')

@section('content')


<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <table class="col-md-12" style="">
                <th>
                    <h3 class="card-title" style="font-size: 20px;">Product List</h3>
                </th>
                <th style="padding-bottom: 15px;">
                    <button class="btn btn-success btn-sm float-right" id="right" data-toggle="modal"
                        data-target="#myModal">
                        <i class="fa fa-plus-square-o "></i> Add Product
                    </button>
                </th>
            </table>
            @include('admin.partials.message')
            <table class="table table-bordered" id="product">
                <thead>
                    <tr>
                        <th> Title </th>
                        <th> Price </th>
                        <th> Quantity </th>
                        <th> Image</th>
                        <th> Action </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>

                        <td> {{ $product->title }} </td>
                        <td>
                            {{ $product->price }}
                        </td>
                        <td> {{ $product->quantity }} </td>
                        <td> @php
                            $i=1;
                            @endphp
                            @foreach ($product->images as $image)
                            @if ($i>0)
                            <img class="card-img-top featured-img" style="display: block; height: 50px; width: 50px;"
                                src="{{ asset('images/Product/'.$image->image) }}" alt="Card image">
                            @endif
                            @php
                            $i--;
                            @endphp
                            @endforeach
                        </td>
                        <td>
                        <a class="btn btn-primary" href="{{route('admin.product.edit',$product->id)}}"><i class="fa fa-edit"></i></a>
                            <!-- Delete Modal Calling  -->
                            <a class="btn btn-danger" href="#deleteModal{{$product->id}}" data-toggle="modal"
                                data-target=""><i class="fa fa-trash"></i></a>

                            <!--Delete Product Modal content-->

                            <div class="modal fade" id="deleteModal{{$product->id}}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action=" {!! route('admin.product.delete',$product->id) !!} " method="post">
                                                {{ csrf_field() }}
                                                <p>Are You Sure You Want To Delete This ? <button type="submit" class="btn btn-danger">Confirm</button>  </p>

                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Delete Product Modal Close-->
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>

<!-- Add Product Modal content-->
<div class="container">
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Add Product Modal content-->
            <div class="modal-content">
                <div class="card">
                    <div class="card-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3>Add Product</h3>

                    </div>
                    <div class="card-body">

                        <form class="forms-sample" id="form" action=" {{ route('admin.product.store') }} " method="post"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group" id="ccs">
                                <label for="exampleInputName">Title</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                                <p><span class="error"></span></p>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName1">Price</label>
                                <input type="number" class="form-control" name="price" id="exampleInputName1"
                                    placeholder="Price">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Quantity</label>
                                <input type="number" class="form-control" name="quantity" id="quantity"
                                    placeholder="Quantity">
                            </div>

                            <div class="form-group">
                                <label for="exampleTextarea1">Category </label>
                                <select class="form-control" name="category_id">
                                    <option style="font-size: 14px" value="">Select Category</option>
                                    @foreach ($category as $item)
                                    <option style="font-size: 14px" value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleTextarea1">Description</label>
                                <textarea name="description" class="form-control" id="exampleTextarea1" type="text"
                                    rows="2"></textarea>
                            </div>

                            <div class="form-group ">
                                <label for="product_image">Product Image</label>
                                <div id="dinamic">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="file" class="form-control" name="product_image[]">
                                        </div>
                                        <div class="col-md-4">
                                            <a id="add" href="#" class="fa fa-plus-square fa-1x"
                                                style="margin-top:10px;"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <button type="submit" class="btn btn-success mr-2">Add Product</button>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Add Product Modal Close-->



@endsection



@section('js')
<script>
    $(document).ready( function () {
    $('#product').DataTable({
        "ordering": false
    });
} );
</script>
<script src=" {{ asset('js/addProduct.js') }}" type="text/javascript" charset="utf-8" async defer></script>

@endsection()

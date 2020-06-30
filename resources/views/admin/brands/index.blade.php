@extends('admin.layout.master')

@section('content')


<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <table class="col-md-12" style="">
                <th>
                    <h3 class="card-title" style="font-size: 20px;">Brand List</h3>
                </th>
                <th style="padding-bottom: 15px;">
                    <button class="btn btn-success btn-sm float-right" id="right" data-toggle="modal"
                        data-target="#myModal">
                        <i class="fa fa-plus-square-o "></i> Add Brand
                    </button>
                </th>
            </table>
            @include('admin.partials.message')
            <table class="table table-bordered" id="product">
                <thead>
                    <tr>
                        <th> Brand Title </th>
                        <th> Action </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($brands as $brand)
                    <tr>

                        <td> {{ $brand->name }} </td>

                        <td>
                            <!-- Edit Modal Calling  -->
                        <a class="btn btn-primary"  href="{{route('admin.brand.edit',$brand->id)}}"><i class="fa fa-edit"></i></a>



                            <!-- Delete Modal Calling  -->
                            <a class="btn btn-danger" href="#deleteModal{{$brand->id}}" data-toggle="modal"
                                data-target=""><i class="fa fa-trash"></i></a>

                            <!--Delete brand Modal content-->

                            <div class="modal fade" id="deleteModal{{$brand->id}}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Delete Brand</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action=" {!! route('admin.brand.delete',$brand->id) !!} " method="post">
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

                            <!-- Delete brand Modal Close-->

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
                        <h3>Add Brand</h3>

                    </div>
                    <div class="card-body">
                        <form class="forms-sample" id="form" action=" {{ route('admin.brand.store') }} " method="post"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group" id="ccs">
                                <label for="exampleInputName">Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Brand Name">
                                <p><span class="error"></span></p>
                            </div>

                            <div class="form-group">
                                <label for="exampleTextarea1">Description</label>
                                <textarea name="description" class="form-control" id="exampleTextarea1" type="text" rows="2"></textarea>
                            </div>

                            <div class="form-group ">
                                <label for="image">Brand Image</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success mr-2">Add Brand</button>

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

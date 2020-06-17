@extends('admin.layout.master')

@section('content')


<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <table class="col-md-12" style="">
                <th>
                    <h3 class="card-title" style="font-size: 20px;">Category List</h3>
                </th>
                <th style="padding-bottom: 15px;">
                    <button class="btn btn-success btn-sm float-right" id="right" data-toggle="modal"
                        data-target="#myModal">
                        <i class="fa fa-plus-square-o "></i> Add Category
                    </button>
                </th>
            </table>
            @include('admin.partials.message')
            <table class="table table-bordered" id="product">
                <thead>
                    <tr>
                        <th> Category Title </th>
                        <th> Parent Category</th>
                        <th> Action </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>

                        <td> {{ $category->name }} </td>
                        <td>
                            @if($category->parent_id == Null )
                                Primary Category
                            @else
                            {{ $category->parent->name }}
                            @endif
                        </td>

                        <td>
                            <!-- Edit Modal Calling  -->
                        <a class="btn btn-primary"  href="{{route('admin.category.edit',$category->id)}}"><i class="fa fa-edit"></i></a>



                            <!-- Delete Modal Calling  -->
                            <a class="btn btn-danger" href="#deleteModal{{$category->id}}" data-toggle="modal"
                                data-target=""><i class="fa fa-trash"></i></a>

                            <!--Delete category Modal content-->

                            <div class="modal fade" id="deleteModal{{$category->id}}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Delete Category</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action=" {!! route('admin.category.delete',$category->id) !!} " method="post">
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

                            <!-- Delete category Modal Close-->

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
                        <h3>Add Category</h3>

                    </div>
                    <div class="card-body">
                        <form class="forms-sample" id="form" action=" {{ route('admin.category.store') }} " method="post"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group" id="ccs">
                                <label for="exampleInputName">Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Title">
                                <p><span class="error"></span></p>
                            </div>

                            <div class="form-group">
                                <label for="exampleTextarea1">Parent Category </label>
                                <select class="form-control" name="parent_id">
                                    <option style="font-size: 14px" value="">Select Parent Category</option>
                                    @foreach ($parent_category as $item)
                                    <option style="font-size: 14px" value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleTextarea1">Description</label>
                                <textarea name="description" class="form-control" id="exampleTextarea1" type="text" rows="2"></textarea>
                            </div>

                            <div class="form-group ">
                                <label for="image">Category Image</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success mr-2">Add Category</button>

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

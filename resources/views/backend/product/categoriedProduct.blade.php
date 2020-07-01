@extends('backend.layout.master')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Product List</h2>
            </div>
            <div class="card-body">
                <p class="mb-5">All The Product Are In Descending Order</p>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Category</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td scope="row">{{ $product->title }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>
                                @if($product->category_id == '1' )
                                Primary Category
                                @else
                                {{ $product->category->name }}</p>
                                @endif
                            </td>
                            <td>
                                @if($product->brand_id == Null )
                                    Not Selected
                                @else
                               </p>
                                @endif
                            </td>
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
</div>
@endsection

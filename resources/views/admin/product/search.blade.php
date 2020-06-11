@extends('admin.layout.master')

@section('content')


<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Type a Product name</label>
                        <input type="text" name="title" id="title" placeholder="Enter Product name" class="form-control">
                        <div id="product_list"></div>
                    </div>
                </div>
                <div class="col-lg-3">

                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                <table class="table table-bordered" id="product">
                    <thead>
                        <tr>
                            <th> Title </th>
                            <th> Price </th>
                            <th> Quantity </th>
                        </tr>
                    </thead>
                    <tbody id="serach_Result">

                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
</div>

@endsection



@section('js')
<script type="text/javascript">
    $(document).ready(function () {

        $('#title').on('keyup',function() {
            var query = $(this).val();
            $.ajax({

                url:"{{ route('autocomplete') }}",

                type:"GET",

                data:{'title':query},

                success:function (data) {

                    $('#product_list').html(data);
                }
            })
            // end of ajax call
        });


        $(document).on('click', 'li', function(){

            var value = $(this).text();
            $('#title').val(value);
            var qu =$('#title').val();
            $('#product_list').html("");
            $.ajaxSetup({
			headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		    });

            $.ajax({
			'url':"{{ route('searchResult') }}",
			'type':'get',
			'dataType':'text',
			data:{'title':qu},
			success:function(data)
			{

				//console.log(data);

				$("#serach_Result").empty();
				$("#serach_Result").html(data);
			}
		    });
        });
    });
</script>
@endsection()

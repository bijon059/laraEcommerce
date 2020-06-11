@extends('layouts/master')
@section('content')
{{--Sidebar + Content Start--}}

		<div class="container margin-top-20">
			<div class="row">
				<div class="col-md-4">
					@include('partials.product_sidebar')
				</div>

				<div class="col-md-8">
					<div class="widget">
						<h3>Featured Product</h3>
						<div class="row">

						<div class="col-md-3">
							<div class="card" style="">
							  <img class="card-img-top featured-img" src="{{ asset('images/Product/'.'samsung-a8.jpg') }}" alt="Card image">
							  <div class="card-body">
							    <h4 class="card-title">Samsung A8</h4>
							    <p class="card-text">15000 /-</p>
							    <a href="#" class="btn btn-outline-primary">Add to Cart</a>
							  </div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="card" style="">
							  <img class="card-img-top featured-img" src="{{ asset('images/Product/'.'samsung-a8.jpg') }}" alt="Card image">
							  <div class="card-body">
							    <h4 class="card-title">Samsung A8</h4>
							    <p class="card-text">15000 /-</p>
							    <a href="#" class="btn btn-outline-primary">Add to Cart</a>
							  </div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="card" style="">
							  <img class="card-img-top featured-img" src="{{ asset('images/Product/'.'samsung-a8.jpg') }}" alt="Card image">
							  <div class="card-body">
							    <h4 class="card-title">Samsung A8</h4>
							    <p class="card-text">15000 /-</p>
							    <a href="#" class="btn btn-outline-primary">Add to Cart</a>
							  </div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="card" style="">
							  <img class="card-img-top featured-img" src="{{ asset('images/Product/'.'samsung-a8.jpg') }}" alt="Card image">
							  <div class="card-body">
							    <h4 class="card-title">Samsung A8</h4>
							    <p class="card-text">15000 /-</p>
							    <a href="#" class="btn btn-outline-primary">Add to Cart</a>
							  </div>
							</div>
						</div>


						</div>
						
					</div>
				</div>
				
			</div>
		</div>


		{{--Sidebar + Content End--}}

		@endsection
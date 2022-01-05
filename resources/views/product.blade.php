@extends('layouts.header')

@section('content')





		

		<div class="colorlib-product">
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
						<h2>All Products</h2>
					</div>
				</div>
				
				<div class="row">
					@foreach($posts as $pro)
					<div class="col-lg-4 mb-4 text-center">
						
						<div class="product-entry border">
							<a href="{{route('single.product',$pro->id)}}" class="prod-img">
								<img src="{{asset('uploads/'. $pro->image)}}" style="width:100px; height:100px">
							</a>
							<div class="desc">
								<h2><a href="#">{{$pro->name}}</a></h2>
								<span class="price">{{$pro->price}}</span>
							</div>
							<p><a href="{{route('single.product',$pro->id)}}" class="btn btn-primary btn-lg">Product Details</a></p>
						</div>
						
					</div>
							@endforeach
					</div>
			
				
			</div>
			
		</div>
		


@endsection


<style>
ul.pagination {
    display: inline-block;
    padding: 0;
    margin: 0;
}
ul.pagination li {display: inline;}
ul.pagination li a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
}
ul.pagination li a.active {
    background-color: brown;
    color: white;
}
ul.pagination li a:hover:not(.active) {background-color: lightpink;}
</style>

 
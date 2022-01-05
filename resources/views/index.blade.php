@extends('layouts.header')

@section('content')




<h1 align="center">VIEWS	
		@foreach ($projects as $project)
			{{ $project->views }}
		@endforeach
</h1>



		<div class="colorlib-product">
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
						<h2>Best Sellers</h2>
					</div>
				</div>
				
				
				<div class="row">
					@foreach($product as $products)
					<div class="col-lg-4 mb-4 text-center">
						
						<div class="product-entry border">
							<a href="#" class="prod-img">
								<img src="{{asset('uploads/'. $products->image)}}" style="width:150px; height:100px">
							</a>
							<div class="desc">
								<h2><a href="#">{{$products->name}}</a></h2>
								<span class="price">{{$products->price}}</span>
							</div>
						</div>
						
					</div>
							@endforeach
					</div>
			
				<div class="row">
					<div class="col-md-12 text-center">
						<p><a href="{{route('product')}}" class="btn btn-primary btn-lg">See All Products</a></p>
					</div>
					
				</div>
			</div>
		</div>
		@endsection

 
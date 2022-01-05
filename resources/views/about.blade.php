
@extends('layouts.header')

@section('content')

<style type="text/css">
	.colorlib-about{
		border: #a8d7ce solid;
		background-color: #88C8BC;
		color: white;

	}
	
</style>
	

		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<h2 align="center"><b>About</b></h2>
					</div>
				</div>
			</div>
		</div>


		<div class="colorlib-about">
			<div class="container">
				<div class="row row-pb-lg">
					@foreach($about as $abouts)
					<div class="col-sm-6 mb-3">
						<div class="video colorlib-video" >
							
							<img src="{{asset('uploads/'. $abouts->image)}}"style="width:500px; height:500px">
							<div class="overlay"></div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="about-wrap">
							<h2>{{$abouts->name}}</h2>
							<p>{{$abouts->description}}</p>
							
						</div>
						
					</div>
				</div>
				@endforeach
			</div>
			


@endsection

	
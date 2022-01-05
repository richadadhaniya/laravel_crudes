
@extends('layouts.header')

@section('content')
<div class="bg-light py-3">
     <div class="container">
       <div class="row">
         <div class="col-md-12 mb-0"> </div>
       </div>
     </div>
   </div>

   <div class="site-section">
     <div class="container">
       <div class="row">
         <div class="col-md-5 mr-auto">
           <div class="border text-center">
             @foreach($product as $products)
             <img src="{{asset('uploads/'. $products->image)}}" alt="Image" class="img-fluid p-5">
           </div>
         </div>
         <div class="col-md-6">
           <h2 class="text-black">{{$products->name}}</h2>
           <p>{{$products->description}}</p>

           

           <p><strong class="text-primary h4">{{$products->price}}</strong></p>

           @endforeach
           
          
           <p><a href="{{ route('add.to.cart', $product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a></p>
           	</div>

           
            
@endsection
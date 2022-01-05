<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Product;
use App\Counter;


class IndexController extends Controller
{
    public function view()
    {
    	 $slider=Slider::get();
        $product=Product::get()->take(3); 
        $projects=Counter::latest()->paginate(5);
        Counter::increment('views');
        return view('index',compact('slider','product','projects'));
    }
    
     
}

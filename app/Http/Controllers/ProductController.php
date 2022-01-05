<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product; 
use App\Category;
class ProductController extends Controller
{
    public function product()
    {  
        $posts=Product::get(); 
        return view('product',compact('posts'));
    
    }
}

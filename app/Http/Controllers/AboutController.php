<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class AboutController extends Controller
{
    public function about()
    {  
        $about=About::get(); 
        return view('about',compact('about'));
    
    }
}

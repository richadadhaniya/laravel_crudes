<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Map;

class MapController extends Controller
{
     public function viewmap()
    {  
        $contact=Map::get(); 
        return view('contact',compact('contact'));
    
    }
}

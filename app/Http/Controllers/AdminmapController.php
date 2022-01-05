<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Map;

class AdminmapController extends Controller
{
    public function admin_map()
    {
        $map=Map::get();
        
        return view('admin_map',compact('map'));
    }
    public function edit_map(Request $request ,$id)
    {
        $map=Map::where('id',$id)->first();
        
        return view('editmap',compact('map'));
    }
    public function update_map(Request $request)
    {
    	$map =Map::find($request->id);
    	$map->map =$request->input('map');
    	      
        
        
        
        {
        	$id = $request->id;
            $update = [  
            'map'=>$request->map,
             
           
        
     ];
        Map::where('id', $id)->update($update);
        return redirect()->route('admin.map')->with('success', 'Map Updated Successfully!');

          
        }
        $map->save();
        return redirect()->route('admin.map')->with('success', 'Map Updated Successfully!');
    }
}

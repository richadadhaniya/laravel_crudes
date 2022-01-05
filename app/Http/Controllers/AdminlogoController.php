<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logo;

class AdminlogoController extends Controller
{
	 public function adminlogo()
    {
        $logo=Logo::get();
        
        return view('admin_logo',compact('logo'));
    }
    public function edit_logo(Request $request ,$id)
    {
        $logo=Logo::where('id',$id)->first();
        
        return view('editlogo',compact('logo'));
    }
    public function update_logo(Request $request)
    {
         
        $logo =Logo::find($request->id);
         
        

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/uploads'), $imageName);
            $logo->image = $imageName;
        }
        else
        {
            $id = $request->id;
            $update = [  
            
           
     ];
     $file   = $request->file("image");
        if ($request->hasfile("image")) {
        $file->move("/upload", $file->getClientOriginalName());
        $update['image'] = $file->getClientOriginalName();
        }

       Logo::where('id', $id)->update($update);
        return redirect()->route('admin.logo')->with('success', 'Logo Updated Successfully!');


            return $request;
            $logo->image = '';
        }
        $logo->save();
        return redirect()->route('admin.logo')->with('success', 'Logo Updated Successfully!');

    }
    
}

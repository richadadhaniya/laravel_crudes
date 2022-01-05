<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class AdminaboutController extends Controller
{
     public function about()
   {
   	$about= About::get();
   	return view('admin_about',compact('about'));
   }
   	public function editabout(Request $request ,$id)
   	{
   		$abouts=About::where('id',$id)->first();
        return view('editabout',compact('abouts'));
   	}
   	public function updateabout(Request $request)
    {
    	$about =About::find($request->id);
    	$about->name =$request->input('name');      
        $about->description =$request->input('description');
        
        // dd($request);
    	if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/uploads'), $imageName);
            $about->image = $imageName;
        }
        else
        {
        	$id = $request->id;
            $update = [  
            'name'=>$request->name,
           'description'=>$request->description,
        
     ];
     $file   = $request->file("image");
        if ($request->hasfile("image")) {
        $file->move("/upload", $file->getClientOriginalName());
        $update['image'] = $file->getClientOriginalName();
        }

       Product::where('id', $id)->update($update);
        return redirect()->route('admin.about')->with('success', 'Information Updated Successfully!');

           return $request;
            $about->image = '';
        }
        $about->save();
        return redirect()->route('admin.about')->with('success', 'About Updated Successfully!');
        
        

    }


}

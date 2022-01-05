<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;

class AdminsliderController extends Controller
{
    public function adminslider()
    {
        $slider=Slider::get();
        
        return view('admin_slider',compact('slider'));
    }
     public function add_slider()
    {
        $slider= Slider::get();
        return view('addslider',compact('slider'));
    }
    public function store_slider(Request $request)
    { 
          
        
        $slider = new Slider();
       $slider->name =$request->input('name');      
        $slider->description =$request->input('description');
        
       
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/uploads'), $imageName);
            $slider->image = $imageName;
        }
        else
        {
            return $request;
            $slider->image = '';
        }
        $slider->save();
        return redirect()->route("admin.slider")->with('success', 'Slider Inserted Successfully!');
    }
     public function edit_slider(Request $request ,$id)
    {
        $slider=Slider::where('id',$id)->first();
        
        return view('editslider',compact('slider'));
    }
    public function update_slider(Request $request)
    {
         
        $slider =Slider::find($request->id);
         $slider->name =$request->input('name');
       $slider->description =$request->input('description');
      
        

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/uploads'), $imageName);
            $slider->image = $imageName;
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

       Slider::where('id', $id)->update($update);
        return redirect()->route('admin.slider')->with('success', 'Slider Updated Successfully!');


            return $request;
            $slider->image = '';
        }
        $slider->save();
        return redirect()->route('admin.slider')->with('success', 'Slider Updated Successfully!');

    }
    public function delete_slider($id)
    {
        Slider::where('id',$id)->delete();
        return redirect()->route('admin.slider')->with('Slider Deleted successfully!');
    }
}

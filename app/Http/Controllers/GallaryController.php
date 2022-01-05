<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallary;
use App\Product;

class GallaryController extends Controller
{
     public function gallary()
    {
        $gallary=Gallary::get();
        
        return view('admingallary',compact('gallary'));
    }

     public function add_gallary()
    {
        $gallary= Gallary::get();
        return view('add_gallary',compact('gallary'));
    }
    public function store_gallary(Request $request)
    { 
          
        
        $gallary = new Gallary();
       
        
       
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/uploads'), $imageName);
            $gallary->image = $imageName;
        }
        else
        {
            return $request;
            $gallary->image = '';
        }
        $gallary->save();
        return redirect()->route("admin.gallary")->with('success', 'gallary Inserted Successfully!');
    }
    public function editgallary(Request $request ,$id)
    {
        $gallary=Gallary::where('id',$id)->first();
        
        return view('edit_galary',compact('gallary'));
    }
    public function updategallary(Request $request)
    {
         
        $gallary =Gallary::find($request->id);
         
        

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/uploads'), $imageName);
            $gallary->image = $imageName;
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

       Gallary::where('id', $id)->update($update);
        return redirect()->route('admin.gallary')->with('success', 'Gallary Updated Successfully!');


            return $request;
            $gallary->image = '';
        }
        $gallary->save();
        return redirect()->route('admin.gallary')->with('success', 'Gallary Updated Successfully!');

    }
    public function delete_gallary($id)
    {
        Gallary::where('id',$id)->delete();
        return redirect()->route('admin.gallary')->with('gallary Deleted successfully!');
    }
    public function gallarycat($id)
   {
       $gallary=Product::where('cname',$id)->get();
      return view('gallary',compact('gallary'));
   }
}

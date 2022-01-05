<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Socialmedia;

class AdminsocialmediaController extends Controller
{
	public function admin_socialmedia()
    {
        $socialmedia=Socialmedia::get();
        
        return view('admin_socialmedia',compact('socialmedia'));
    }
    public function edit_socialmedia(Request $request ,$id)
    {
        $socialmedia=Socialmedia::where('id',$id)->first();
        
        return view('editsocialmedia',compact('socialmedia'));
    }
    	public function update_socialmedia(Request $request)
    {
    	$socialmedia =Socialmedia::find($request->id);
    	$socialmedia->instagram =$request->input('socialmedia');
    	$socialmedia->facebook =$request->input('socialmedia');
    	$socialmedia->twitter =$request->input('socialmedia');      
        
        
        
        {
        	$id = $request->id;
            $update = [  
            'instagram'=>$request->instagram,
             'facebook'=>$request->facebook,
              'twitter'=>$request->twitter,
           
        
     ];
        Socialmedia::where('id', $id)->update($update);
        return redirect()->route('admin.socialmedia')->with('success', 'Socialmesia Updated Successfully!');

          
        }
        $category->save();
        return redirect()->route('admin.socialmedia')->with('success', 'Socialmedia Updated Successfully!');
    }
        
    
}

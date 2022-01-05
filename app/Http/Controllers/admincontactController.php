<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class admincontactController extends Controller
{
	 public function admincontact()
    {
        $contact=Contact::get();
        
        return view('admincontact',compact('contact'));
    }
    public function edit_contact(Request $request ,$id)
   	{
   		$contacts=Contact::where('id',$id)->first();
        return view('editcontact',compact('contacts'));
   	}
   	public function updatecontact(Request $request)
    {
    	$contact =Contact::find($request->id);
    	$contact->address =$request->input('address');
    	$contact->phone =$request->input('phone');
    	$contact->email =$request->input('email');      
        
        
        
        {
        	$id = $request->id;
            $update = [  
            'address'=>$request->address,
            'phone'=>$request->phone,
            'email'=>$request->email,
           
        
     ];
        Contact::where('id', $id)->update($update);
        return redirect()->route('admin.contact')->with('success', 'Contact Updated Successfully!');

          
        }
        $contact->save();
        return redirect()->route('admin.contact')->with('success', 'Contact Updated Successfully!');
        
        

    }
    
}

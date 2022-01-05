<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Query;

class ContactControler extends Controller
{
     public function contacts()
    {
        $contact=Contact::get();
        $map=Contact::get();
        
        return view('contact',compact('contact','map'));
        
    }
    public function viewcontact(Request $request)
    { 
          
        
        $contact = new Query();
       $contact->firstname =$request->input('firstname');      
        $contact->lastname =$request->input('lastname');
         $contact->email =$request->input('email');      
        $contact->subject =$request->input('subject');
         $contact->message =$request->input('message');      
        
        $contact->save();
        return redirect()->route("contacts")->with('success', 'Message Send Successfully!');
    }
    
    
}

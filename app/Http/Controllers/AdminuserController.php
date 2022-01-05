<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Auth;
use Hash;


class AdminuserController extends Controller
{
	
     public function edituser()
  {
    $user=DB::table('users')->get();
    return view('admin_editpassword',compact('user'));
  }
   	
     public function updateuser(Request $request)
  { 
   
    $user=Hash::make($request->password);
    DB::table('users')->where('id',$request->id)->update(['email'=>$request->email,'password'=>$user]);
    return redirect()->route('edit.user')->with('success', 'User Name And Password Updated Successfully!');
  }
    
}

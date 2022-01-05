<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class AdmincategoryController extends Controller
{
	 public function category()
   {
   	$category= Category::get();
   	return view('admin_category',compact('category'));
   }
   public function add_category()
    {
        return view('addcategory');
    }
     public function store_category(Request $request)
    { 
        $category = new Category();
        $category->cname =$request->input('cname');      
        $category->save();
        return redirect()->route("admin.category")->with('success', 'Category Inserted Successfully!');
    }
    public function editcategory(Request $request ,$id)
   	{
   		$categorys=Category::where('id',$id)->first();
        return view('editcategory',compact('categorys'));
   	}
   	public function updatecategory(Request $request)
    {
    	$category =Category::find($request->id);
    	$category->cname =$request->input('cname');      
        
        
        
        {
        	$id = $request->id;
            $update = [  
            'cname'=>$request->cname,
           
        
     ];
        Category::where('id', $id)->update($update);
        return redirect()->route('admin.category')->with('success', 'Category Updated Successfully!');

          
        }
        $category->save();
        return redirect()->route('admin.category')->with('success', 'Category Updated Successfully!');
        
        

    }
     public function delete_category($id)
    {
        Category::where('id',$id)->delete();
        return redirect()->route('admin.category')->with('Product Deleted successfully!');
    }
   
}

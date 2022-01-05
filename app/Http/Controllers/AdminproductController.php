<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class AdminproductController extends Controller
{
     public function adminproduct()
    {
        $product=Product::get();
        
        return view('admin_product',compact('product'));
    }
    public function add_product()
    {
        $category= Category::get();
        return view('addproduct',compact('category'));
    }
    public function store_product(Request $request)
    { 
          
        
        $product = new Product();
        $product->pname =$request->input('pname');      
        $product->description =$request->input('description');
        $product->price =$request->input('price'); 
        $product->cname =$request->input('cname'); 
       
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/uploads'), $imageName);
            $product->image = $imageName;
        }
        else
        {
            return $request;
            $product->image = '';
        }
        $product->save();
        return redirect()->route("admin.product")->with('success', 'Product Inserted Successfully!');
    }
    public function edit_product(Request $request ,$id)
    {
        $product=Product::where('id',$id)->first();
        $category= Category::get();
        return view('editproduct',compact('product','category'));
    }
    public function update_product(Request $request)
    {
         
        $product =Product::find($request->id);
         $product->pname =$request->input('pname');
       $product->description =$request->input('description');
       $product->price =$request->input('price');
       $product->cname =$request->input('cname');
        

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/uploads'), $imageName);
            $product->image = $imageName;
        }
        else
        {
            $id = $request->id;
            $update = [  
            'pname'=>$request->pname,
           'description'=>$request->description,
           'price'=>$request->price,
           'cname'=>$request->cname,
           
     ];
     $file   = $request->file("image");
        if ($request->hasfile("image")) {
        $file->move("/upload", $file->getClientOriginalName());
        $update['image'] = $file->getClientOriginalName();
        }

       Product::where('id', $id)->update($update);
        return redirect()->route('admin.product')->with('success', 'Product Updated Successfully!');


            return $request;
            $product->image = '';
        }
        $product->save();
        return redirect()->route('admin.product')->with('success', 'Product Updated Successfully!');

    }
    public function delete_product($id)
    {
        Product::where('id',$id)->delete();
        return redirect()->route('admin.product')->with('Product Deleted successfully!');
    }

}

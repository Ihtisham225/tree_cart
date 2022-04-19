<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    //Storing products in data base
    public function storeProduct(Request $req)
    {
        
        $req->validate(
            [
                'name' => 'required|max:255',
                'price' => 'required|integer|max:100000',
                'qty' => 'required|min:1',
                'category' => 'required|max:255',
                'discription' => 'required|max:255',
                'image' => 'required|mimes:jpg,png,jpeg'
            ]
        );

        $product = new Product();
        $product->user_id = $req->user_id;
        $product->pd_name = $req->name;
        $product->pd_price = $req->price;
        $product->pd_quantity = $req->qty;
        $product->category = $req->category;
        $product->pd_discription = $req->discription;
        
        //first image
        if ($req->hasfile('image'))
        {
            $file = $req->image;
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . 'first.' . $extension;
            $file->move('product/', $filename);
            
            $product->pd_image_path = $filename;
        } 
        else 
        {
            $product->pd_image_path = '';
        }


        //second image
        if ($req->hasfile('image2'))
        {
            $file2 = $req->image2;
            $extension = $file2->getClientOriginalExtension(); // getting image extension
            $file2name = time() . 'second.' . $extension;
            $file2->move('product/', $file2name);
            
            $product->pd_image2_path = $file2name;
        } 
        else 
        {
            $product->pd_image2_path = '';
        }

        //third image
        if ($req->hasfile('image3'))
        {
            $file3 = $req->image3;
            $extension = $file3->getClientOriginalExtension(); // getting image extension
            $file3name = time() . 'third.' . $extension;
            $file3->move('product/', $file3name);
            
            $product->pd_image3_path = $file3name;
        } 
        else 
        {
            $product->pd_image3_path = '';
        }
        

        if($product->save()){
            return redirect('/dashboard')->with('success', $req->name.' Added Successfully!');
        }
        else {
            return redirect()->back()->with('error', 'please provide valid information');
        }
    }


    //showing all products in home
    public function showAllProduct()
    {
        $products = Product::simplePaginate(30);
        return view('custom.home', ["products"=>$products]);
    }
    

    //Showing those products who are added by that specific user in dashboard
    public function showUserProduct()
    {
        $user = Auth::user();
        $products = Product::where('user_id', $user->id)->orderBy('id', 'desc')->get();

        return view('dashboard', ["products"=>$products]);
    }

    //Adding new product
    public function newProduct()
    {
        return view('custom.new_product');
    }


    //Product details for user for editing
    public function productDetail($id)
    {
        $id = Product::find($id);
       return view('custom.edit_product', ["item"=>$id]);
    }


    //Editing or updating a product
    public function editProduct(Request $req)
    {
        $req->validate(
            [
                'name' => 'required|max:255',
                'price' => 'required|integer|max:100000',
                'qty' => 'required|min:1',
                'category' => 'required|max:255',
                'discription' => 'required|max:255',
            ]
        );
        $id = $req->item_id;
        $product = Product::find($id);
        $product->pd_name = $req->name;
        $product->pd_price = $req->price;
        $product->pd_quantity = $req->qty;
        $product->category = $req->category;
        $product->pd_discription = $req->discription;
        

        //first image
        if ($req->hasfile('image'))
        {
            $file = $req->image;
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . 'first.' . $extension;
            $file->move('product/', $filename);
            
            $product->pd_image_path = $filename;
        }

        //second image
        if ($req->hasfile('image2'))
        {
            $file2 = $req->image2;
            $extension = $file2->getClientOriginalExtension(); // getting image extension
            $file2name = time() . 'second.' . $extension;
            $file2->move('product/', $filename);
            
            $product->pd_image2_path = $file2name;
        }


        //third image
        if ($req->hasfile('image3'))
        {
            $file3 = $req->image3;
            $extension = $file3->getClientOriginalExtension(); // getting image extension
            $file3name = time() . 'third.' . $extension;
            $file3->move('product/', $file3name);
            
            $product->pd_image3_path = $file3name;
        }
        



        if($product->save()){
            return redirect('/dashboard')->with('success', $req->name.' Updated Successfully!');
        }
        else {
            return redirect()->back()->with('error', 'please provide valid information');
        }
    }

    //Delete a product
    public function deleteProduct($id)
    {
        $product = Product::find($id);
        
        if($product->delete()){
            return redirect('/dashboard')->with('success', 'Product Deleted Successfully!');
        }
        else{
            return redirect('/dashboard')->with('error', 'Product Not Deleted!');
        }
        
    }



    //Searching a product
    public function searchProduct(Request $req)
    {
        $search = $req->search;
        $products = Product::where('pd_name', 'LIKE', '%'.$search.'%')->get();

        return view('custom.search', ["products"=>$products]);
    }
}

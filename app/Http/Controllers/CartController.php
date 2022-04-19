<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function myCart(Request $req)
    {
        $name = $req->name;
        $price = $req->price;
        $qty = $req->qty;
        $id = $req->id;
       
        $products = array();
        
        if(session()->has('products') && count(session()->get('products')) > 0 )
        {
            $products = session()->get('products');
        }
        else
        {
            $products = array();
        }

        $product = array(
            'id' => $id,
            'name'=> $name, 
            'price' => $price, 
            'qty'=> $qty
        );

        $products[$id] = $product;


        Session(
            [
                "products" => $products
            ]
        );
        return view('custom.cart');
    }

    //Function for updating quantity of a product
    public function updateProduct(Request $req)
    {
        $product = session()->get('products');
        $product[$req->id]['qty'] = $req->quantity;
        
        session()->put("products", $product);
        return redirect('/cart');
    }
    
    
    //function for deleting one item from cart

    public function deleteItem($id)
    {
        $product = session()->get('products');
        unset($product[$id]);
        session()->put("products", $product);
        return redirect('/cart');
    }

    //Fucntion for clearing cart
    public function clearCart()
    {
        session()->forget('products');
        return redirect('/cart');
    }

    //Function for checkout and payment
    public function checkOut($price)
    {
        return view('custom.checkout', ["price"=>$price]);
    }
}

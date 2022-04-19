<?php

namespace App\Http\Controllers;

use App\Mail\FeedbackReceived;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Mail;

class ItemDetailController extends Controller
{

    //this function shows the detail of the specific item or product
   public function itemDetail($id)
   {
       $id = Product::find($id);
       return view('custom.item_detail', ["item"=>$id]);
   }

   //this function is for validating form of contact page
    public function feedback(Request $req)
    {
        $validated = $req->validate(
            [
                'name' => 'required|max:255',
                'email' => 'required',
                'subject' => 'required',
                'message' => 'required'
            ]
            );
            
            $subject = $req->subject;
            $message = $req->message;
            $name = $req->name;
            
            
            //mail details
            $details = [
                "title" => $subject,
                "body" => $message,
            ];


            Mail::to('uihtisham0@gmail.com')->send(new FeedbackReceived($details));

            return view('custom.gratitude', ["name" => $name]);
    }

    public function placeOrder(Request $req)
    {
        $name = $req->name;
        return view('custom/customer_gratitude',["name" => $name]);
    }
}

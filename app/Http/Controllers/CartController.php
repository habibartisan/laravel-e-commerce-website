<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use DB;
use Illuminate\Support\Facades\Redirect;
use vendor\project\StatusTest;

class CartController extends Controller
{
    public function view_card(){

        return view('add_to_cart');
    }

    public function add_to_cart(Request $request){


        $qty=$request->qty;
        $product_id=$request->product_id;
        $product_info=DB::table('products')
                      ->where('product_id',$product_id)
                      ->first();

        $data['qty']=$qty;
        $data['id']=$product_info->product_id;
        $data['name']=$product_info->product_name;
        $data['price']=$product_info->product_price;
        $data['options']['image']=$product_info->product_image;

        $add=Cart::add($data);
        if($add){
            return view('add_to_cart');
        }else{
            return Redirect()->back();
        }
    }

    public function update(Request $request)
    {
       $qty=$request->qty;
       $rowId=$request->rowId;

      Cart::update($rowId,$qty);
      return view('add_to_cart');
    }

    public function cart_delete($rowId){
        $remove=Cart::remove($rowId);
        if ($remove) {
            return view('add_to_cart');
        }else{
            return view('add_to_cart');
        }
    }

}

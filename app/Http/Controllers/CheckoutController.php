<?php

namespace App\Http\Controllers;
use App\Customer;
use DB;
use Cart;
use Session;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function cus_login(){
        return view('login');
    }

    public function customer_register(Request $request){
        /*$customer=new Customer();
        $customer->customer_name=$request->customer_name;
        $customer->customer_email=$request->customer_email;
        $customer->mobile_number=$request->mobile_number;
        $customer->password=md5($request->password);
        $customer->save();
        return view('checkout');*/

        $data=array();
        $data['customer_name']=$request->customer_name;
        $data['customer_email']=$request->customer_email;
        $data['mobile_number']=$request->mobile_number;
        $data['password']=md5($request->password);

           $customer_id=DB::table('customers')
                        ->insertGetId($data);

           Session::put('id',$customer_id);
           Session::put('customer_name',$request->customer_name);

           return view('checkout');
    }

    public function customer_login(Request $request){
        $customer_email=$request->customer_email;
        $password=md5($request->password);

        $result=DB::table('customers')
                ->where('customer_email',$customer_email)
                ->where('password',$password)
                ->first();
        if($result){
            Session::put('id',$request->id);
            return view('checkout');
        }else{
            return redirect()->back();
        }
    }

    public function customer_logout(){
        Session::flush();
        return view('welcome');
    }

    public function shipping_details(Request $request){
         $data=array();
         $data['shipping_email']=$request->shipping_email;
         $data['shipping_first']=$request->shipping_first;
         $data['shipping_last']=$request->shipping_last;
         $data['shipping_address']=$request->shipping_address;
         $data['shipping_mobile']=$request->shipping_mobile;
         $data['shipping_city']=$request->shipping_city;

         $shopping_id=DB::table('shippings')
                      ->insertGetId($data);
         Session::put('shipping_id',$shopping_id);

         return view('payment');
    }


    //payment method
    public function payment_getway(Request $request){
      $payment_method=$request->payment_method;

      $pdata=array();
      $pdata['payment_method']=$payment_method;
      $pdata['payment_status']='pending';
      $payment_id=DB::table('payments')
                  ->insertGetId($pdata);

      $odata=array();
        $odata['customer_id']=Session::get('id');
        $odata['shipping_id']=Session::get('shipping_id');
        $odata['payment_id']=$payment_id;
        $odata['order_total']=120;
        $odata['order_status']='pending';
        $odata_id=DB::table('orders')
            ->insertGetId($odata);

      $contents=Cart::content();
      $oddata=array();
      foreach ($contents as $cont){
          $oddata['order_id']=$odata_id;
          $oddata['product_id']=$cont->id;
          $oddata['product_name']=$cont->name;
          $oddata['product_price']=$cont->price;
          $oddata['product_status_quantity']=$cont->qty;
          DB::table('order_details')
              ->insert($oddata);
      }

      if($payment_method == 'handcash'){
          echo "Successfully done by handcash";
          return redirect()->back();
      }elseif($payment_method=='dabitcart'){
           echo "dabitcart";
      }elseif($payment_method=='bkash'){
          echo "bkash";
      }else{
          echo "Not Selected you'r payment method";
      }

    }
}

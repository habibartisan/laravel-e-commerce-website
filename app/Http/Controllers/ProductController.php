<?php

namespace App\Http\Controllers;
use App\Product;
use DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('admin.product.addproduct');
    }

    public function insert_product(Request $request){

         $product=new Product();
         $product->product_name=$request->product_name;
         $product->category_id=$request->category_id;
         $product->manufactures_id=$request->manufactures_id;
         $product->product_short_description=$request->product_short_description;
         $product->product_long_description=$request->product_long_description;
         $product->product_price=$request->product_price;
         $product->product_size=$request->product_size;
         $product->product_color=$request->product_color;
         $product->product_status=$request->product_status;
         $image = $request->file('product_image');

        if ($image) {
            $image_name = str_random(10);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/product/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            if ($success) {
                $product->product_image = $image_url;
                $employee = $product->save();
                if ($employee) {
                    return Redirect()->back()->with('mesage',"You'r product insert successFully");
                } else {
                    return Redirect()->back()->with('messg',"please check you'r input file");
                }

            } else {

                return Redirect()->back();

            }
        } else {
            return Redirect()->back();
        }
    }

    public function show_product(){
        //$Product=Product::all();
        $Product=DB::table('products')
            ->join('categories','products.category_id','categories.category_id')
            ->join('manufactures','products.manufactures_id','manufactures.manufactures_id')
            ->get();

        return view('admin.product.showall',compact('Product'));
    }


    public function unactiveproduct($product_id){
        Product::where('product_id',$product_id)->update(['product_status'=>0]);
        if($update == true){
            return redirect()->back();
        }

    }

    public function activeproduct($product_id){
        $update=Product::where('product_id',$product_id)->update(['product_status'=>1]);
        if($update){
            return redirect()->back();
        }

    }
}

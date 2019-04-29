<?php

namespace App\Http\Controllers;
use App\Category;
use DB;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('admin.category.addCategory');
    }
    public function showall(){
        $Category=Category::all();
        return view('admin.category.showall',compact('Category'));
    }
    public function insert_category(Request $request){

        $this->validate($request,[
            'cat_name' => 'required',
            'cat_description' => 'required',
        ]);

        $category = new Category();
        $category->cat_name = $request->cat_name;
        $category->cat_description = $request->cat_description;
        $category->public_status =$request->public_status;
        $category->save();
        return redirect()->route('showall_category')->with('successMsg','Category Successfully Saved');

    }

    public function unactive($category_id){
        $update=Category::where('category_id',$category_id)->update(['public_status'=>1]);
        if($update){
            return redirect()->back();
        }

    }

    public function active($category_id){
        $update=Category::where('category_id',$category_id)->update(['public_status'=>0]);
        if($update){
            return redirect()->back();
        }

    }











    //Show by category id

    public function cat_by_show($category_id){
        $category_by_product=DB::table('products')
            ->join('categories','products.category_id','categories.category_id')
            ->join('manufactures','products.manufactures_id','manufactures.manufactures_id')
            ->where('categories.category_id',$category_id)
            ->limit(8)
            ->get();
        return view('category_by_product',compact('category_by_product'));
    }


    //product details view

    public function view_product_detail($product_id){
        $product_details=DB::table('products')
            ->join('categories','products.category_id','categories.category_id')
            ->join('manufactures','products.manufactures_id','manufactures.manufactures_id')
            ->where('products.product_id',$product_id)
            ->where('products.product_status',1)
            ->first();
      return view('product_detail',compact('product_details'));
    }
}

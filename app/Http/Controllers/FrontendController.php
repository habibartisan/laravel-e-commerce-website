<?php

namespace App\Http\Controllers;
use App\Category;
use DB;
use App\Product;
use Illuminate\Http\Request;

class frontendController extends Controller
{
    public function index(){
        return view('welcome');
    }

    /*public function produc_show(){

        $Product=DB::table('products')
            ->join('categories','products.category_id','categories.category_id')
            ->join('manufactures','products.manufactures_id','manufactures.manufactures_id')
            ->get();

        return view('welcome',compact('Product'));
    }*/
}

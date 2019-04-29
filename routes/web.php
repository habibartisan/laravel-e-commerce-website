<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

/*Route::get('/home', 'HomeController@index')->name('home')*/;

//Admin------------------------

Route::get('dashboard',function (){
    return view('admin.dashboard');
});
//frontend-------------------------------
Route::get('home','FrontendController@index')->name('homepage');
Route::get('category','FrontendController@cat')->name('cat');



Route::get('addcategory', 'CategoryController@index')->name('add_category');
Route::post('insertcategory', 'CategoryController@insert_category')->name('insert_cat');
Route::get('showallcategory', 'CategoryController@showall')->name('showall_category');
Route::get('unactive/{category_id}', 'CategoryController@unactive')->name('unactive');
Route::get('active/{category_id}', 'CategoryController@active')->name('active');

//manufactures
Route::get('addmanufactures', 'ManufactureController@index')->name('add_Manufacture');
Route::post('insertmanufactures', 'ManufactureController@insert_Manufacture')->name('insert_Manufacture');
Route::get('showallmanufactures', 'ManufactureController@showall')->name('show_Manufacture');
Route::get('show/{manu_id}','ManufactureController@show')->name('show');
Route::get('hei/{manu_id}', 'ManufactureController@hei')->name('hei');

//product
Route::get('addproduct', 'ProductController@index')->name('add_product');
Route::post('insert_product', 'ProductController@insert_product')->name('insert_product');
Route::get('show_product', 'ProductController@show_product')->name('show_product');
Route::get('unactiveproduct/{product_id}','ProductController@unactiveproduct')->name('unactiveproduct');
Route::get('activeproduct/{product_id}','ProductController@activeproduct')->name('activeproduct');


//Category by show
Route::get('cat_by_show/{category_id}','CategoryController@cat_by_show')->name('cat_by_show');

//product details
Route::get('view_product_detail/{product_id}','CategoryController@view_product_detail')->name('view_product_detail');

//Add to cart option
Route::get('view_card','CartController@view_card')->name('view_card');
Route::post('add_to_cart','CartController@add_to_cart')->name('add_to_cart');
Route::post('/update_cart', 'CartController@update');
Route::get('/cart_delete/{rowId}', 'CartController@cart_delete');

//login
Route::get('cus_login','CheckoutController@cus_login')->name('cus_login');


//Customer Registration+Login
Route::post('customer_register','CheckoutController@customer_register')->name('customer_register');
Route::post('customer_login','CheckoutController@customer_login')->name('customer_login');
Route::get('customer_logout','CheckoutController@customer_logout')->name('customer_logout');

//Shipping Details Registration
Route::post('shipping_details','CheckoutController@shipping_details')->name('shipping_details');

//payment method
Route::post('payment_getway','CheckoutController@payment_getway')->name('payment_getway');
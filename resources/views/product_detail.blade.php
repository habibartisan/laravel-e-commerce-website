@extends('layouts.frontend.app')

@section('title','')

@push('css')
@endpush



@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Category</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->

                            @php
                                $Category= App\Category::where('public_status',1)->get();
                            @endphp

                            <div class="panel panel-default">
                                @foreach($Category as $Categor)
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="{{route('cat_by_show',$Categor->category_id)}}">{{$Categor->cat_name}}</a></h4>
                                    </div>
                                @endforeach
                            </div>

                        </div><!--/category-products-->

                        <div class="brands_products"><!--brands_products-->
                            <h2>Brands</h2>

                            @php
                                $Manufacture= App\Manufacture::where('manufactures_status',1)->get();
                            @endphp

                            <div class="brands-name">
                                @foreach($Manufacture as $Manuf)
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="#"> <span class="pull-right"></span>{{$Manuf ->manufactures_name }}</a></li>
                                    </ul>
                                @endforeach
                            </div>

                        </div><!--/brands_products-->

                        <div class="price-range"><!--price-range-->
                            <h2>Price Range</h2>
                            <div class="well text-center">
                                <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                                <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
                            </div>
                        </div><!--/price-range-->

                        <div class="shipping text-center"><!--shipping-->
                            <img src="{{ asset('frontend')}}/images/home/shipping.jpg" alt="" />
                        </div><!--/shipping-->

                    </div>
                </div>
                <div class="col-sm-9 padding-right">
                    <div class="product-details"><!--product-details-->
                        <div class="col-sm-5">
                            <div class="view-product" style="margin-top: 100px">
                                <img src="{{url($product_details->product_image)}}" alt="" />
                                <h3>{{$product_details->product_name}}</h3>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="product-information"><!--/product-information-->
                                <h2></h2>
                                <p></p>
                                <img src="images/product-details/rating.png" alt="" />
                                <span>
									<span>Tk {{$product_details->product_price}}</span>
                                    <form action="{{route('add_to_cart')}}" method="post">
                                        @csrf
                                        <label>Quantity:</label>
                                        <input type="text" name="qty" value="1" />
                                        <input type="hidden" name="product_id" value="{{$product_details->product_id}}">
                                        <button type="submit" class="btn btn-fefault cart">
                                            <i class="fa fa-shopping-cart"></i>
                                            Add to cart
                                        </button>
                                    </form>
								</span>
                                <p><b>Availability:</b> In Stock</p>
                                <p><b>Size</b> {{$product_details->product_size}}</p>
                                <p><b>Color</b> {{$product_details->product_color}}</p>
                                <p><b>Short Description</b> {{$product_details->product_short_description}}</p>
                                <p><b>Long Description</b> {{$product_details->product_long_description}}</p>
                                <p><b>Brand:</b> E-SHOPPER</p>
                                <a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
                            </div><!--/product-information-->
                        </div>
                    </div><!--/product-details-->
                </div>

        </div>
    </section>
@endsection

@push('js')
@endpush
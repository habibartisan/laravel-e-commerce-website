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
                   <h style="font-size: 40px">Select you'r Payment Mathod</h>
                    <form action="{{route('payment_getway')}}" method="post">
                        @csrf
                        <input type="radio" name="payment_method" value="handcash" class="form-check"> Hand Cash<br>
                        <input type="radio" name="payment_method" value="dabitcart" class="form-check"> Dadit Cart<br>
                        <input type="radio" name="payment_method" value="bkash" class="form-check"> B-kash<br>
                        <input type="submit" class="btn btn-warning">
                    </form>

                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')
@endpush
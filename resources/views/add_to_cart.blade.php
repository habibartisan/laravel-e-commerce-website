@extends('layouts.frontend.app')

@section('title','')

@push('css')
@endpush

@section('content')
    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Shopping Cart</li>
                </ol>
            </div>
            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                    <tr class="cart_menu">
                        <td class="image">Item</td>
                        <td class="description"></td>
                        <td class="price">Price</td>
                        <td class="quantity">Quantity</td>
                        <td class="total">Total</td>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $cart_prod =Cart::content()
                    @endphp
                    @foreach($cart_prod as $prod)
                        <tr>
                            <td class="cart_product">
                                <a href=""><img src="{{URL::to($prod->options->image) }}" alt="" height="100px"></a>
                            </td>
                            <td class="cart_description">
                                <h4><a href="">{{$prod->name}}</a></h4>
                                <p>{{--Web ID: 1089772--}}</p>
                            </td>
                            <td class="cart_price">
                                <p>{{$prod->price}}</p>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <form action="{{ url ('/update_cart') }}" method="post">
                                       @csrf
                                                <input type="number" name="qty" value="{{ $prod->qty }}" style="width:80px;" >
                                                <input type="hidden" name="rowId" value="{{$prod->rowId}}">
                                                <button type="submit" class="btn btn-sm btn-success " style="margin-top: -2px;">+</button>

                                    </form>
                                </div>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price">{{$prod->price*$prod->qty}}</p>
                            </td>
                            <td class="cart_delete">
                                <a class="cart_quantity_delete" href="{{ url('cart_delete',$prod->rowId) }}"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section> <!--/#cart_items-->

    <section id="do_action">
        <div class="container">
           <div class="col-sm-8">
                        <div class="total_area">
                            <ul>
                                <li>Cart Sub Total <span>{{Cart::subtotal()}}</span></li>
                                <li>Eco Tax <span>{{Cart::tax()}}</span></li>
                                <li>Shipping Cost <span>Free</span></li>
                                <li>Total <span>{{Cart::total()}}</span></li>
                            </ul>
                            <a class="btn btn-default update" href="">Update</a>
                            <a class="btn btn-default check_out" href="{{route('cus_login')}}">Check Out</a>
                        </div>
                    </div>
        </div>
    </section>
@endsection

@push('js')
@endpush
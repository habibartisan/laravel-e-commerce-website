@extends('layouts.frontend.app')

@section('title','')

@push('css')
@endpush

@section('content')
    <section id="form"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="login-form"><!--login form-->
                        <h2>Login to your account</h2>
                        <form action="{{route('customer_login')}}" method="post">
                            @csrf
                            <input type="email" placeholder="E-mail" name="customer_email"/>
                            <input type="password" placeholder="Password" name="password"/>
                            <span>
								<input type="checkbox" class="checkbox">
								Keep me signed in
							</span>
                            <button type="submit" class="btn btn-default">Login</button>
                        </form>
                    </div><!--/login form-->
                </div>
                <div class="col-sm-1">
                    <h2 class="or">OR</h2>
                </div>
                <div class="col-sm-4">
                    <div class="signup-form"><!--sign up form-->
                        <h2>New User Signup!</h2>
                        <form action="{{route('customer_register')}}" method="post">
                            @csrf
                            <input type="text" placeholder="Name" name="customer_name"/>
                            <input type="email" placeholder="Email Address" name="customer_email"/>
                            <input type="password" placeholder="Password" name="password"/>
                            <input type="number" placeholder="Mobile Number" name="mobile_number"/>
                            <button type="submit" class="btn btn-default">Signup</button>
                        </form>
                    </div><!--/sign up form-->
                </div>
            </div>
        </div>
    </section><!--/form-->
@endsection

@push('js')
@endpush
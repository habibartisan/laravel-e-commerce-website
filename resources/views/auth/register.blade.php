<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bootstrapmaster.com/live/metro/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:57:00 GMT -->
<head>
    
    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>Metro Admin Template - Metro UI Style Bootstrap Admin Template</title>
    <meta name="description" content="Metro Admin Template.">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <!-- end: Meta -->
    
    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end: Mobile Specific -->
    
    <!-- start: CSS -->
    <link id="bootstrap-style" href="{{ asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('backend/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
    <link id="base-style" href="{{ asset('backend/css/style.css')}}" rel="stylesheet">
    <link id="base-style-responsive" href="{{ asset('backend/css/style-responsive.css')}}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
    <!-- end: CSS -->
    

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <link id="ie-style" href="css/ie.css" rel="stylesheet">
    <![endif]-->
    
    <!--[if IE 9]>
        <link id="ie9style" href="css/ie9.css" rel="stylesheet">
    <![endif]-->
        
    <!-- start: Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- end: Favicon -->
    
            <style type="text/css">
            body { background: url(img/bg-login.jpg) !important; }
        </style>
        
        
        
</head>

<body>
        <div class="container-fluid-full">
        <div class="row-fluid">
                    
            <div class="row-fluid">
                <div class="login-box">
                    <div class="icons">
                        <a href="index.html"><i class="halflings-icon home"></i></a>
                        <a href="#"><i class="halflings-icon cog"></i></a>
                    </div>
                    <h2>Login to your account</h2>
                     <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <fieldset>
                            
                            <div class="input-prepend" title="Username">
                                <span class="add-on"><i class="halflings-icon user"></i></span>
                                 <input id="name" type="text" class="input-large span10 form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="user-name" required autocomplete="name" autofocus>

                                 @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="clearfix"></div>

                            <div class="input-prepend" title="Password">
                                <span class="add-on"><i class="halflings-icon lock"></i></span>
                                  <input id="email" type="email" class="input-large span10 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="E-mail" required autocomplete="email">

                               @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                               
                            </div>
                            <div class="clearfix"></div>     

                                <div class="input-prepend" title="Password">
                                <span class="add-on"><i class="halflings-icon lock"></i></span>
                                  <input id="password" type="password" class="input-large span10  form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="passwords" required autocomplete="new-password">

                              @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                               
                            </div>
                            <div class="clearfix"></div>   

                            <div class="input-prepend" title="Password">
                                <span class="add-on"><i class="halflings-icon lock"></i></span>
                                   <input id="password-confirm" type="password" class="input-large span10 form-control" name="password_confirmation" placeholder="password_confirmation" required autocomplete="new-password">

                              @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                               
                            </div>
                            <div class="clearfix"></div>
                       

                            <div class="button-login">  
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                            <div class="clearfix"></div>
                    </form>   
                </div><!--/span-->
            </div><!--/row-->
            

    </div><!--/.fluid-container-->
    
        </div><!--/fluid-row-->
    
    <!-- start: JavaScript-->>

        <script src="{{ asset('backend/js/jquery-1.9.1.min.js')}}"></script>
    <script src="{{ asset('backend/js/jquery-migrate-1.0.0.min.js')}}"></script>
    
        <script src="{{ asset('backend/js/jquery-ui-1.10.0.custom.min.js')}}"></script>
    
        <script src="{{ asset('backend/js/jquery.ui.touch-punch.js')}}"></script>
    
        <script src="{{ asset('backend/js/modernizr.js')}}"></script>
    
        <script src="{{ asset('backend/js/bootstrap.min.js')}}"></script>
    
        <script src="{{ asset('backend/js/jquery.cookie.js')}}"></script>
    
        <script src='{{ asset('backend/js/fullcalendar.min.js')}}'></script>
    
        <script src='{{ asset('backend/js/jquery.dataTables.min.js')}}'></script>

        <script src="{{ asset('backend/js/excanvas.js')}}"></script>
       <script src="{{ asset('backend/js/jquery.flot.js')}}"></script>
       <script src="{{ asset('backend/js/jquery.flot.pie.js')}}"></script>
       <script src="{{ asset('backend/js/jquery.flot.stack.js')}}"></script>
       <script src="{{ asset('backend/js/jquery.flot.resize.min.js')}}"></script>
    
        <script src="{{ asset('backend/js/jquery.chosen.min.js')}}"></script>
    
        <script src="{{ asset('backend/js/jquery.uniform.min.js')}}"></script>
        
        <script src="{{ asset('backend/js/jquery.cleditor.min.js')}}"></script>
    
        <script src="{{ asset('backend/js/jquery.noty.js')}}"></script>
    
        <script src="{{ asset('backend/js/jquery.elfinder.min.js')}}"></script>
    
        <script src="{{ asset('backend/js/jquery.raty.min.js')}}"></script>
    
        <script src="{{ asset('backend/js/jquery.iphone.toggle.js')}}"></script>
    
        <script src="{{ asset('backend/js/jquery.uploadify-3.1.min.js')}}"></script>
    
        <script src="{{ asset('backend/js/jquery.gritter.min.js')}}"></script>
    
        <script src="{{ asset('backend/js/jquery.imagesloaded.js')}}"></script>
    
        <script src="{{ asset('backend/js/jquery.masonry.min.js')}}"></script>
    
        <script src="{{ asset('backend/js/jquery.knob.modified.js')}}"></script>
    
        <script src="{{ asset('backend/js/jquery.sparkline.min.js')}}"></script>
    
        <script src="{{ asset('backend/js/counter.js')}}"></script>
    
        <script src="{{ asset('backend/js/retina.js')}}"></script>

        <script src="{{ asset('backend/js/custom.js')}}"></script>
    <!-- end: JavaScript-->
    
</body>

<!-- Mirrored from bootstrapmaster.com/live/metro/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:57:01 GMT -->
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- start: CSS -->
    <link id="bootstrap-style" href="{{ asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link id="bootstrap-style" href="{{ asset('backend/font/fontawesome-all.css')}}" rel="stylesheet">
    <link href="{{ asset('backend/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
    <link id="base-style" href="{{ asset('backend/css/style.css')}}" rel="stylesheet">
    <link id="base-style-responsive" href="{{ asset('backend/css/style-responsive.css')}}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
    <!-- end: CSS -->
    <!-- start: Favicon -->
    <link rel="shortcut icon" href="{{asset('backend/img/favicon.ico')}}">
    <!-- end: Favicon -->
</head>
<body>
<!-- start: Header -->
  @include('layouts.backend.partiol.header')

<!-- start: Header -->

<div class="container-fluid-full">
  <div class="row-fluid">

</div>
    @include('layouts.backend.partiol.navber')
           @yield('content')

            <!-- end: Content -->
        </div><!--/#content.span10-->
    </div><!--/fluid-row-->
<div class="clearfix"></div>

@include('layouts.backend.partiol.footer')

<!-- start: JavaScript-->

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

<script src="{{ asset('backend/js/jquery.raty.min.j')}}s"></script>

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

<!-- Mirrored from bootstrapmaster.com/live/metro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:56:47 GMT -->
</html>

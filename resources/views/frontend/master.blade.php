<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="{{asset('frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('frontend/assets/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('frontend/assets/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{asset('frontend/asset/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('frontend/assets/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('frontend/assets/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('frontend/assets/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('frontend/assets/images/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->

<body>
    
@include('frontend.partials.header')

@yield('content')
	
@include('frontend.partials.footer')
	

  
    <script src="{{asset('frontend/assets/js/jquery.js')}}"></script>
	<script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('frontend/assets/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('frontend/assets/js/price-range.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>
</body>
</html>
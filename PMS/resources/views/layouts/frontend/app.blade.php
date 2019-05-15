<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PMS</title>
	
    <!-- css -->
    <link href="{{asset('assets/frontend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/frontend/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/plugins/cubeportfolio/css/cubeportfolio.min.css')}}">
	<link href="{{asset('assets/frontend/css/nivo-lightbox.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/frontend/css/nivo-lightbox-theme/default/default.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/frontend/css/owl.carousel.css')}}" rel="stylesheet" media="screen" />
    <link href="{{asset('assets/frontend/css/owl.theme.css')}}" rel="stylesheet" media="screen" />
	<link href="{{asset('assets/frontend/css/animate.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/frontend/css/style.css')}}" rel="stylesheet">

	<!-- boxed bg -->
	<link id="bodybg" href="{{asset('assets/frontend/bodybg/bg1.css')}}" rel="stylesheet" type="text/css" />
	<!-- template skin -->
	<link id="t-colors" href="{{asset('assets/frontend/color/default.css')}}" rel="stylesheet">
	@stack('css')




</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

<div id="wrapper">
	
@include('layouts.frontend.partial.header')

@yield('content')

@include('layouts.frontend.partial.footer')
</div>

	


<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

	<!-- Core JavaScript Files -->
    <script src="{{asset('assets/frontend/js/jquery.min.js')}}"></script>	 
    <script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery.easing.min.js')}}"></script>
	<script src="{{asset('assets/frontend/js/wow.min.js')}}"></script>
	<script src="{{asset('assets/frontend/js/jquery.scrollTo.js')}}"></script>
	<script src="{{asset('assets/frontend/js/jquery.appear.js')}}"></script>
	<script src="{{asset('assets/frontend/js/stellar.js')}}"></script>
	<script src="{{asset('assets/frontend/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js')}}"></script>
	<script src="{{asset('assets/frontend/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('assets/frontend/js/nivo-lightbox.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/custom.js')}}"></script>
@stack('js')

    





</body>

</html>

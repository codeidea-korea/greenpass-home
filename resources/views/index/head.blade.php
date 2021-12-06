@php
$mAgent = array("iPhone", "iPod", "Android", "Blackberry", "Opera Mini", "Windows ce", "Nokia", "sony" );
$chkMobile = false;
for($i=0; $i<sizeof($mAgent); $i++){
    if(stripos( $_SERVER['HTTP_USER_AGENT'], $mAgent[$i] )){
        $chkMobile = true;
        break;
    }
}

function get_url($url) {
	$url .= "?ver=".date("Ymdhis",filemtime($url)); 
    return $url;
}
@endphp

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv='X-UA-Compatible' content='IE=10;'/>
	<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, user-scalable=yes, target-densitydpi=medium-dpi">
	<title>greenpass</title>
	<link rel="apple-touch-icon" href="{{ asset('img/favorite/favorite_mobile.png')}}" />
	<link href="{{ asset('css/iconfont/greenpass-icon/style.css') }}" rel='stylesheet' type='text/css'>
	<link href="{{ asset('css/animate.css') }}" rel='stylesheet' type='text/css'>
	<link href="{{ asset('js/magnific-popup/magnific-popup.css')}}" rel="stylesheet">
	<link href="{{ asset('js/swiper/swiper.min.css')}}"  rel='stylesheet' type='text/css'>
	<link href="{{ asset('css/root.css')}}" rel='stylesheet' type='text/css'>
	@php
	if($chkMobile) {
		@endphp
		<link href="{{ asset('js/form/myform_mobile.css')}}" rel="stylesheet" type="text/css">
		<link href="{{ asset('css/mobile.css')}}" rel="stylesheet" type="text/css">
		@php
	} else {
		@endphp
		<link href="{{ asset('js/form/myform.css')}}" rel="stylesheet" type="text/css">
		<link href="{{ asset('css/style.css')}}" rel="stylesheet" type="text/css">
		@php
	}
	@endphp
	<!--<script src='{{ asset('js/jquery.min.js')}}' type='text/javascript'></script>-->
	<script src="{{ asset('js/jquery-3.6.0.min.js')}}"></script>
	<script src="{{ asset('js/wow/wow.js')}}"></script>
	<script src="{{ asset('js/easing.js')}}"></script>
	<script src="{{ asset('js/magnific-popup/jquery.magnific-popup.js')}}"></script>
	<script src="{{ asset('js/swiper/swiper.min.js')}}"></script>
	<script src="{{ asset('js/form/myform.js')}}"></script>
	<script src="{{ asset('js/myScript.js')}}"></script>
	@php
	if($chkMobile) {
		@endphp
		<script src="{{ asset('js/myScript_mobile.js')}}"></script>
		@php
	} else {
		@endphp
		<script src="{{ asset('js/myScript_pc.js')}}"></script>
		@php
	}
	@endphp
</head>
<body>


<div id="page-wrapper">

	<header id="header">
		<div class="headerContainer">
			<div class="header-top">
				<a href="/" class="top-logo">
				@php
				if($chkMobile) {
					echo '<img src="/img/logo_mobile.png"></a>';
				} else {
					echo '<img src="/img/logo.png"></a>';
				}
				@endphp
				@php
				if($chkMobile) {
					echo '<a href="#" class="downloader"></a>';
					echo '<span class="openner"></span>';
				}
				@endphp
			</div>
			
			<div class="inner">
				@php
				if($chkMobile) {
					echo '<span class="closer"></span>';
					echo '<img src="/img/header-inner-logo.png" class="inner-logo">';
				}
				@endphp

				<nav class="nav">
					<ul>
						<li class="@php echo $page_title=='index'?'active':''; @endphp"><a href="/" >HOME</a></li>
						<li class="@php echo $page_title=='about'?'active':''; @endphp"><a href="#">ABOUT</a></li>
						<li class="@php echo $page_title=='customer'?'active':''; @endphp"><a href="#">CUSTOMER</a></li>
						<li class="@php echo $page_title=='contect'?'active':''; @endphp"><a href="#">CONTECT</a></li>
					</ul>
				</nav>
				
				<div class="lang">
					<span class="lang-btn">한국어</span>
					<ul class="langContainer">
						<li><a href="#">Tiếng Việt</a></li>
						<li><a href="#">English</a></li>
						<li><a href="#">ไทย</a></li>
						<li class="active"><a href="#">한국어</a></li>
					</ul>
				</div>

			</div>
		</div>
	</header>

	<div id="wrapper">
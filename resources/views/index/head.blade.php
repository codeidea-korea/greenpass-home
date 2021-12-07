@php
$mAgent = array("iPhone", "iPod", "Android", "Blackberry", "Opera Mini", "Windows ce", "Nokia", "sony" );
$chkMobile = false;

if(isset($_GET['view_type'])) {
	$viewType = $_GET['view_type'];
	if($viewType == 'mobile') $chkMobile = true;
}

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
	<!--<script src='{{ asset('js/jquery.min.js')}}' type='text/javascript'></script>-->
	<script src="{{ asset('js/jquery-3.6.0.min.js')}}"></script>
	<script src="{{ asset('js/wow/wow.js')}}"></script>
	<script src="{{ asset('js/easing.js')}}"></script>
	<script src="{{ asset('js/magnific-popup/jquery.magnific-popup.js')}}"></script>
	<script src="{{ asset('js/swiper/swiper.min.js')}}"></script>
	<script src="{{ asset('js/form/myform.js')}}"></script>
	<script src="{{ asset('js/myScript.js')}}"></script>
	<script>
	var device;
      if($(window).width()<1000){// 모바일 UI
         device = 'mobile';
      }else{// PC UI
         device = 'pc';
      }
      $(window).resize(function(){
         if($(window).width()<1000){// 모바일 UI
            location.reload();
         }else{// PC UI
         }
      });
	  $(document).ready(function(){
         if(device=='mobile'){// 모바일 UI
            $('.pc_view').hide();
            $('.mobile_view').show();
         }else{// PC UI
            $('.pc_view').show();
            $('.mobile_view').hide();
         }
      });
   </script>
</head>
<body>


<script>
      if(device=='mobile'){// 모바일 UI
         document.write( '<link href="/js/form/myform_mobile.css" rel="stylesheet" type="text/css">');
         document.write( '<link href="/css/mobile.css" rel="stylesheet" type="text/css">');
      }else{// PC UI
         document.write( '<link href="/js/form/myform.css" rel="stylesheet" type="text/css">');
         document.write( '<link href="/css/style.css" rel="stylesheet" type="text/css">');
	  }
   </script>
   <script src="/js/myScript_mobile.js"></script>
   <script src="/js/myScript_pc.js"></script>
<div id="page-wrapper">

	<header id="header">
		<div class="headerContainer">
			<div class="header-top">
				<a href="/" class="top-logo">
					<script>
						if(device=='mobile'){// 모바일 UI
							document.write( '<img class="mobile_view" src="/img/logo_mobile.png">');
							document.write( '<a href="#" class="downloader"></a>');
							document.write( '<span class="openner"></span>');
						}else{// PC UI
							document.write( '<img class="pc_view" src="/img/logo.png">');
						}
					</script>
				</a>
			</div>
			
			<div class="inner">
				<script>
					if(device=='mobile'){// 모바일 UI
						document.write( '<span class="closer"></span>');
						document.write( '<img src="/img/header-inner-logo.png" class="inner-logo">');
					}
				</script>

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
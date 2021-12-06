<?php include_once('./lib/common.lib.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv='X-UA-Compatible' content='IE=10;'/>
	<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, user-scalable=yes, target-densitydpi=medium-dpi">
	<title>greenpass</title>
	<link rel="apple-touch-icon" href="img/favorite/favorite_mobile.png" />
	<link href="<?=get_url('./css/iconfont/greenpass-icon/style.css')?>" rel='stylesheet' type='text/css'>
	<link href="<?=get_url('./css/animate.css')?>" rel='stylesheet' type='text/css'>
	<link href="<?=get_url('js/magnific-popup/magnific-popup.css')?>" rel="stylesheet">
	<link href="<?=get_url('js/swiper/swiper.min.css')?>"  rel='stylesheet' type='text/css'>
	<link href="<?=get_url('./css/root.css')?>" rel='stylesheet' type='text/css'>
	<?php if($chkMobile) {
		echo '<link href="'.get_url('./js/form/myform_mobile.css').'" rel="stylesheet" type="text/css">';
		echo '<link href="'.get_url('./css/mobile.css').'" rel="stylesheet" type="text/css">';
	} else {
		echo '<link href="'.get_url('./js/form/myform.css').'" rel="stylesheet" type="text/css">';
		echo '<link href="'.get_url('./css/style.css').'" rel="stylesheet" type="text/css">';
	} ?>	
	<!--<script src='./js/jquery.min.js' type='text/javascript'></script>-->
	<script src='<?=get_url('./js/jquery-3.6.0.min.js')?>'></script>
	<script src='<?=get_url('./js/wow/wow.js')?>'></script>
	<script src='<?=get_url('./js/easing.js')?>'></script>
	<script src="<?=get_url('js/magnific-popup/jquery.magnific-popup.js')?>"></script>
	<script src="<?=get_url('js/swiper/swiper.min.js')?>"></script>
	<script src='<?=get_url('./js/form/myform.js')?>'></script>
	<script src='<?=get_url('./js/myScript.js')?>'></script>
	<?php if($chkMobile) {
		echo '<script src="'.get_url('./js/myScript_mobile.js').'"></script>';
	} else {
		echo '<script src="'.get_url('./js/myScript_pc.js').'"></script>';
	} ?>
</head>
<body>


<div id="page-wrapper">

	<header id="header">
		<div class="headerContainer">
			<div class="header-top">
				<a href="index.php" class="top-logo"><img src="./img/<?=!$chkMobile?'logo.png':'logo_mobile.png'?>"></a>
				<?php if($chkMobile) {
					echo '<a href="#" class="downloader"></a>';
					echo '<span class="openner"></span>';
				} ?>
			</div>
			
			<div class="inner">
				<?php if($chkMobile) echo '<span class="closer"></span>'; ?>

				<?php if($chkMobile) echo '<img src="./img/header-inner-logo.png" class="inner-logo">'; ?>

				<nav class="nav">
					<ul>
						<li class="<?=$page_title=='index'?'active':''?>"><a href="index.php" >HOME</a></li>
						<li class="<?=$page_title=='about'?'active':''?>"><a href="#">ABOUT</a></li>
						<li class="<?=$page_title=='customer'?'active':''?>"><a href="#">CUSTOMER</a></li>
						<li class="<?=$page_title=='contect'?'active':''?>"><a href="#">CONTECT</a></li>
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
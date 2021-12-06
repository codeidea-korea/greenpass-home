@include('index.head')

<style>
body{background:#fff;}
#header, footer{display:none;}
.container{font-size:15px;}
.page-link .btn{cursor:pointer;padding:0 15px;max-width:100%;height:32px;font-size:inherit;font-weight:normal;color:#fff;text-align:left;background:#474e67;border-radius:3px;transition:all .2s ease-in-out;	white-space:nowrap;text-overflow:ellipsis;position:relative;display:inline-flex;align-items:center;justify-content:center;}.page-link .btn:hover{background:#474e67;}.page-link .btn.icon{background:#FEA737}.page-link li{margin:10px 0;font-size:12px;}.page-link li a:after{content:""attr(href)"";font-size:11px;color:#fffa6c;font-weight:300;margin-left:10px;display:inline-block;}.page-link li a:hover{}.page-link li a.tt{margin-top:20px;}.page-link li a.popup-inline{background:#4365e2;}.page-link li a.popup-inline:hover{background:#254ad6;}.page-link li a.change{background:#ff4b4b;}.page-link li a.not{background:#b0b0b0;}.page-link li a .num{position:absolute;left:-30px;top:50%;margin-top:-10px;background:#0046e4;color:#fff;font-size:10px;font-weight:bold;min-width:20px;padding:0px 5px 0 5px;height:18px;border-radius:15px;display:inline-flex;align-items:center;justify-content:center;}
span.label{display:inline-flex;align-items:center;font-size:15px;font-weight:600;}
span.label + span.label{margin-left:20px;}
span.label:before{content:'';display:inline-block;width:7px;height:7px;margin-right:0.5em;border-radius:2px;}
span.label.not:before{background:#b0b0b0;}
span.label.popup:before{background:#4365e2;}
span.label.change:before{background:#ff4b4b;}
<?php if(!$chkMobile) { ?>
.ulContainer{display:flex;align-items:flex-start;}
<?php } else { ?>
.ulContainer ul{}
<?php } ?>
</style>


<div class="container" style="max-width:1600px;padding:100px 15px 40px 15px;">
	<!--<div class="mt50">
		<span class="label not">미완료</span>
		<span class="label popup">팝업</span>
		<span class="label change">수정/추가</span>
	</div>-->
	<ul class="page-link mb20">
		<li><a href="/css/iconfont/greenpass-icon/" target="_blank" class="btn icon">아이콘</a></li>
	</ul>

	<div class="ulContainer">
		<ul class="page-link">
			<li><a href="/" target="_blank" class="btn ">메인 페이지</a></li>
		</ul>
	</div>

	<div class="mt100"></div>
</div>


@include('index.pop_page01')
@include('index.footer')
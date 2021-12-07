@php
$page_title = 'index';
$mAgent = array("iPhone", "iPod", "Android", "Blackberry", "Opera Mini", "Windows ce", "Nokia", "sony" );
$chkMobile = false;
@endphp

@include('index.head')

<section class="main-top">
	<div class="container @php echo !$chkMobile?'flex flex-middle':''; @endphp">
		<div class="left wow fadeInRight" data-wow-duration="1s" data-wow-delay="0s">
			<script>
				if(device!='mobile'){// 모바일 UI
					document.write( '<img src="/img/img-logo.png">');
				}
			</script>
			<p class="gmarket-bold text-shadow fs59 fsm38 mt30">일상으로 돌아가는<br>가장 빠른 인증</p>
			<p>1초면 끝! 여러 명 동시 출입인증<br>GPS, NFC 기반 전자출입명부 그린패스</p>
			<div class="mt40 mtm15 flex flex-middle btnSet">
				<a href="#"><img src="{{ asset('img/btn_app01.png')}}"></a>
				<a href="#" class="ml20 mlm10"><img src="{{ asset('img/btn_app02.png')}}"></a>
			</div>
		</div>
		<div class="right wow fadeInLeft mtm40" data-wow-duration="1s" data-wow-delay="0.2s">
			<img src="{{ asset('img/img01.png')}}">
		</div>
		<div class="today-pannel">
			<div class="flex flex-middle">
				<span class="tag">TODAY</span>
				<span class="counter">3,252</span>
			</div>
			<div class="copy">
				<p class="gmarket-bold fs54 fsm30">Greenpass Zone</p>
				<p class="gmarket fs27 mt10 mtm5">일상으로 돌아가는 가장 빠른 인증</p>
			</div>
		</div>
	</div>
	
</section>

<section class="main-bl01" style="background:#F0F9F4;">
	<div class="container flex flex-middle mt300 mb250 mtm110 mbm80">
		<div class="img wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
			<img src="{{ asset('img/img02.png')}}">
		</div>
		<div class="right">
			<div class="title-label">왜 그린패스 인가요??</div>
			<ul class="why-greenpass">
				<li>
					<div class="icon_img"><img src="{{ asset('img/icon01.png')}}"></div>
					<div class="content">
						<p class="subject">간편한 1초 인증</p>
						<p class="con">GPS, NFC 기능탑재로<br>빠르고 정확한 방문인증</p>
					</div>
				</li>
				<li>
					<div class="icon_img"><img src="{{ asset('img/icon02.png')}}"></div>
					<div class="content">
						<p class="subject">신속한 방역대응</p>
						<p class="con">24시 관제시스템으로<br>빠른 역학조사 가능</p>
					</div>
				</li>
				<li>
					<div class="icon_img"><img src="{{ asset('img/icon03.png')}}"></div>
					<div class="content">
						<p class="subject">저렴한 유지비용</p>
						<p class="con">사업장 내 전기세,<br>추가 핸드폰 설치 불필요</p>
					</div>
				</li>
			</ul>
			<ul class="greenpass-list">
				<script>
					if(device=='mobile'){// 모바일 UI
						document.write( '<li class="wow fadeInScale" data-wow-duration="1s" data-wow-delay="0s">');
					}else{
						document.write( '<li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">');
					}
				</script>
					<img src="{{ asset('img/store01.png')}}">
					<div class="text">
						<p class="subject">스타벅스<sub>(양평점)</sub></p>
						<p class="date">2021.07.18</p>
					</div>
					<span class="tag">인증완료</span>
				</li>
				<script>
					if(device=='mobile'){// 모바일 UI
						document.write( '<li class="wow fadeInScale" data-wow-duration="1s" data-wow-delay="0.2s">');
					}else{
						document.write( '<li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">');
					}
				</script>
					<img src="{{ asset('img/store02.png')}}">
					<div class="text">
						<p class="subject">맥도날드<sub>(안양비산DT점)</sub></p>
						<p class="date">2021.07.16</p>
					</div>
					<span class="tag">인증완료</span>
				</li>
			</ul>
		</div>
	</div>
</section>


<section class="main-bl02" style="background:#F8F9FB;">
	<div class="container tcenter mt180 mb180 mtm100 mbm130">		
		<img src="{{ asset('img/img03.png')}}">
		<img src="{{ asset('img/img04.png')}}" class="layer-img01 wow fadeInScale" data-wow-duration="1s" data-wow-delay="0s">
		<img src="{{ asset('img/img05.png')}}" class="layer-img02 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
		<img src="{{ asset('img/img06.png')}}" class="layer-img03 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.4s">
		<img src="{{ asset('img/img07.png')}}" class="layer-img04 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.6s">
		<img src="{{ asset('img/img08.png')}}" class="layer-img05 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s">
	</div>
</section>

<section class="main-bl03" style="background:#E6F2F2;">
	<div class="container tcenter mt200 mb200 mtm80 mbm80">
		<h2 class="gmarket-bold fs59 fsm25 mb40 mbm20">BRAND VIDEO</h2>
		<div>
			<video src="{{ asset('video/greenpass_video.mp4')}}" class="video" controls  poster="{{ asset('video/greenpass_video.png')}}" style="width:100%;">﻿</video>
		</div>
	</div>
</section>

<section class="main-bl04" style="background:#F0F9F4;">
	<div class="container mt200 mb200 mtm80 mbm80">
		<h2 class="gmarket-bold fs59 fsm25 mb40 mbm20 tcenter">그린패스로 정부, 소상공인,<br>시민들의 짐을 덜어드립니다</h2>
		<ul>
			<li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
				<div class="thumb"><img src="{{ asset('img/icon04.png')}}"></div>
				<div class="con">
					<p class="subject">간편한 1초 인증</p>
					<p class="sub">선<span class="malgun">(先)</span>인증, 동시 인증 가능 빠른 출입인증으로 가게 회전율 상승효과!</p>
				</div>
			</li>
			<li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
				<div class="thumb"><img src="{{ asset('img/icon05.png')}}"></div>
				<div class="con">
					<p class="subject">설치에서 관리까지~ <br class="mobile-only">합리적인 비용!</p>
					<p class="sub">서버 관제로 데이터관리, 역학조사 비용 절감<br>가입비 무료, 추가 핸드폰 개통 불필요</p>
				</div>
			</li>
			<li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
				<div class="thumb"><img src="{{ asset('img/icon06.png')}}"></div>
				<div class="con">
					<p class="subject">높은 인식률로 1초 인증!</p>
					<p class="sub">디지털 약자인 노년층, 외국인도 쉽게 이용 백신인증까지 한번에</p>
				</div>
			</li>
			<li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
				<div class="thumb"><img src="{{ asset('img/icon07.png')}}"></div>
				<div class="con">
					<p class="subject">개인정보 안심!</p>
					<p class="sub">생년월일, 핸드폰번호로 간편 가입 2주 후 개인정보 자동폐기 처리</p>
				</div>
			</li>
		</ul>
	</div>
</section>

<section class="main-bl05" style="background:#F6F9FC;">
	<div class="container tcenter mt200 mb200 mtm80 mbm80">
		<h2 class="gmarket-bold fs59 fsm25 mb40 mbm20">협력업체</h2>
		<ul class="companySet">
			<li><img src="{{ asset('img/company01.png')}}"></li>
			<li><img src="{{ asset('img/company02.png')}}"></li>
			<li><img src="{{ asset('img/company03.png')}}"></li>
			<li><img src="{{ asset('img/company04.png')}}"></li>
			<li><img src="{{ asset('img/company05.png')}}"></li>
			<li><img src="{{ asset('img/company06.png')}}"></li>
		</ul>
	</div>
</section>


<section class="main-bl06" style="background:#F8F8F8;">
	<div class="container mt200 mb200 mtm70 mbm80">
		<h2 class="gmarket-bold fs59 fsm25 mb40 mbm20 tcenter">Q&A</h2>
		<ul class="toggle-qna">
			<li>
				<div class="qnaSubject">전체 출입기록은 어디서 확인하나요?</div>
				<div class="qnaContainer">
					<div class="bubbleBox">
						그린패스는 관리자 페이지를 따로 제공해드려 간편하게 자료를 확인할 수 있습니다.
					</div>
				</div>
			</li>
			<li>
				<div class="qnaSubject">QR코드와의 차이점은 무엇인가요?</div>
				<div class="qnaContainer" style="display:none;">
					<div class="bubbleBox">
						QR코드는 한 번에 한 명씩 코드를 찍어야 하는 불편함이 있지만, 그린패스 출입인증 서비스는 동시에 여러 명이 출입 여부를 손쉽게 인증할 수 있습니다.
					</div>
				</div>
			</li>
			<li>
				<div class="qnaSubject">방문자는 출입기록 여부를 어떻게 확인할 수 있나요?</div>
				<div class="qnaContainer" style="display:none;">
					<div class="bubbleBox">
						어플리케이션에서 출입기록 내역을 바로 확인할 수 있습니다.
					</div>
				</div>
			</li>
			<li>
				<div class="qnaSubject">출입기록은 언제까지 보관되나요?</div>
				<div class="qnaContainer" style="display:none;">
					<div class="bubbleBox">
						출입기록은 4주 후에 자동으로 폐기됩니다.
					</div>
				</div>
			</li>
			<li>
				<div class="qnaSubject">사업장에 별도의 핸드폰을 설치해서 사용하게 되나요?</div>
				<div class="qnaContainer" style="display:none;">
					<div class="bubbleBox">
						아닙니다. 매장 내 별도의 핸드폰 거치가 필요하지 않습니다.  각 방문객들의 핸드폰에서 그린패스 어플리케이션을 실행한 뒤 매장 내에서 그린패스 어플로 출입인증을 받게 됩니다.
					</div>
				</div>
			</li>
			<li>
				<div class="qnaSubject">방문객이 출입인증을 할 때 부과되는 요금은 얼마인가요?</div>
				<div class="qnaContainer" style="display:none;">
					<div class="bubbleBox">
						출입인증시 별도의 추가 요금은 없으나 어플 실행시 발생되는 데이터가 필요하지만, 방문객이 데이터무제한 요금제를 사용중일 경우 요금에 대한 부담이 없습니다.
					</div>
				</div>
			</li>
			<li>
				<div class="qnaSubject">방문자 출입 명부는 어떻게 확인하나요?</div>
				<div class="qnaContainer" style="display:none;">
					<div class="bubbleBox">
						그린패스 존 가맹점 등록이 완료되면 방문자 출입 명부가 기록되는 관리자 페이지에 접속하실 수 있도록 관리자 계정 정보를 보내드립니다. PC, 휴대폰, 태블릿 등의 스마트 기기로 관리자 페이지에 접속하시면 확인이 가능합니다.
					</div>
				</div>
			</li>
			<li>
				<div class="qnaSubject">방문자 출입 명부(관리자 페이지)에 기록되는 개인 정보는 무엇인가요?</div>
				<div class="qnaContainer" style="display:none;">
					<div class="bubbleBox">
						방문 일시와 방문자의 전화번호가 기록됩니다.
					</div>
				</div>
			</li>
			<li>
				<div class="qnaSubject">배너나 안내 표지판을 주문 제작해주시나요?</div>
				<div class="qnaContainer" style="display:none;">
					<div class="bubbleBox">
						개별 도안을 이용한 주문제작은 하지 않고 있으며, 지정된 템플릿의 4가지 안내 이미지 파일과 AI 파일을 제공해드리고 있습니다. 배너의 경우 AI 파일을 배너 제작 업체에 맡겨 제작하시면 됩니다.
					</div>
				</div>
			</li>
		</ul>
	</div>
</section>

<script>
	if(device=='mobile'){// 모바일 UI
		document.write( '<section class="main-bl07" style="background:url(\'/img/main-bl07-bg-mobile.png\') no-repeat center / cover;">');
	}else{
		document.write( '<section class="main-bl07" style="background:url(\'/img/main-bl07-bg.png\') no-repeat center / cover;">');
	}
</script>

	<div class="container mt200 mb200">
		<h2 class="gmarket-bold fs59 mb10 fsm25 mbm10">1초면 끝! 출입인증<br>통합 솔루션 그린패스</h2>
		<p style="line-height:1.3em">빠르고 정확한 출입인증 통합 솔루션 그린패스<br>정부, 소상공인, 시민들의 짐을 덜어드립니다.</p>
	</div>
<script>
	document.write( '</section>');
</script>


@include('index.footer')
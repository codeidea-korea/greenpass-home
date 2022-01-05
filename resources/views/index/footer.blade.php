	
	</div>

	<footer>
		<div class="container">
			<div class="footer-top">
				<img src="{{ asset('img/logo-footer.png')}}">
				<div class="fmenu ml50 mlm20">
					<a href="/terms/usage">이용약관</a> | 
					<a href="/terms/privacy">개인정보처리방침</a>
				</div>				
			</div>
			<div class="footer-body">
				<span>(주)그린패스코리아 |  대표 장준원</span><br>
				<span>주소. 서울특별시 마포구 연남로 3길 18-9, 1층ㅣ</span><span>대표전화. 1588-6306ㅣ사업자등록번호. 225-87-02345</span><br>
				<span>COPYRIGHT © 주식회사 그린패스코리아 ALL RIGHTS RESERVED.</span>
			</div>
			<div class="snsSet">
				<a href="https://www.instagram.com/greenpasskorea/" class="insta">insta</a>
				<a href="https://www.youtube.com/channel/UCSaI-ha5rLMDlIt4U7ZZhhQ" class="youtube">youtube</a>
				<a href="https://www.facebook.com/greenpasskorea/" class="naver">facebook</a>
				<a href="#" class="facebook">naver</a>
			</div>
		</div>
	</footer>

</div>



<!-- https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.6/lottie.min.js -->
<script src="{{ asset('js/bodymovin/lottie.min.js')}}"></script>
<script src="{{ asset('js/bodymovin/svgAnimation.js')}}"></script>

<script>
wow = new WOW({
	animateClass: 'animated',
	offset:100,
	live:true,
	callback:wowCallback
	/*callback:function(box) {
	}*/
});
wow.init();
</script>

</body>
</html>
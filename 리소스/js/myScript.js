
function wowCallback() {
}

//동영상 리사이즈
function resizeVideo() {
	$("iframe").each(function(){
		if( /^https?:\/\/www.youtube.com\/embed\//g.test($(this).attr("src")) ) {
			$(this).css("width","100%");
			$(this).css("height",Math.ceil( parseInt($(this).css("width")) * 480 / 850 ) + "px");
		}
		if( /^https?:\/\/player.vimeo.com\/video\//g.test($(this).attr("src")) ) {
			$(this).css("width","100%");
			$(this).css("height",Math.ceil( parseInt($(this).css("width")) * 450 / 800 ) + "px");
		}
	});	
}

// 리사이즈 이벤트 후처리
$(window).resize(function() {
	if(this.resizeTO) clearTimeout(this.resizeTO);
	this.resizeTO = setTimeout(function() {
		$(this).trigger('resizeEnd');
	}, 100);
});


function toggleClass(opener, closer, target, classname) {
	var classname = classname ? classname : 'open';
	if(opener == closer) {		
		$(opener).click(function() {
			$(target).toggleClass(classname);
		});
		$('.body-area').click(function() {
			$(target).removeClass(classname);
		});
	} else {
		$(opener).click(function() {
			$(target).addClass(classname);
		});
		$(closer).click(function() {
			$(target).removeClass(classname);
		});
		$('.body-area').click(function() {
			$(target).removeClass(classname);
		});
	}
}


//엘리먼트 온ㆍ오프 //match값은 ,구분 여러개 가능
function matchOnOff(elm, match, target, standard) {
	var val = $(elm).val();
	var arrMatch = match.split(",");
	if(standard == "hide") {
		$(target).show();
		for(var i in arrMatch) {
			if(val == arrMatch[i]) {
				$(target).hide();			
			}
		}
		$(elm).change(function (){
			var val = $(this).val();
			$(target).show();
			for(var i in arrMatch) {
				if(val == arrMatch[i]) {		
					$(target).hide();		
				}
			}
		});
	} else {
		$(target).hide();
		for(var i in arrMatch) {
			if(val == arrMatch[i]) {		
				$(target).show();	
			}
		}
		$(elm).change(function (){
			var val = $(this).val();
			$(target).hide();
			for(var i in arrMatch) {
				if(val == arrMatch[i]) {		
					$(target).show();	
				}
			}
		});
	}
}


$(document).ready(function() {
	
	//동영상 리사이즈
	resizeVideo();	
	$(window).resize(function(){
		resizeVideo();
	});
		
	//최소 높이 사이즈
	$('.screen-min-height').each(function() {
		$(this).css({'min-height':$(window).height()});
	});
	setInterval(function() {
		$('.screen-min-height').each(function() {
			if($(this).height() < $(window).height()) {
				$(this).css({'min-height':$(window).height()});
			}
		});
	}, 100);

	$('#header .openner').click(function() {
		$('#header .inner').animate({"right": "0"}, 460, 'easeInOutExpo').addClass('open');
		$('#page-cover').fadeIn(300);
		$('html').addClass('scrollDisable');
	});
	$('#header .closer').click(function() {
		$('#header .inner').animate({"right": "-100%"}, 380, 'easeInOutExpo').removeClass('open');
		$('#page-cover').fadeOut(300);
		$('html').removeClass('scrollDisable');
	});

	
	//언어셋 토글
	$('#header .lang').click(function(event){
		$(this).parent().find('.langContainer').toggleClass('open');
	});


	//qna 슬라이드 토글
	$('.qnaSubject').click(function() {
		$('.qnaSubject').not($(this)).parent().find('.qnaContainer').slideUp(400, 'easeInOutExpo');
		$('.qnaSubject').not($(this)).parent().removeClass('open');
		$(this).parent().find('.qnaContainer').slideToggle(400, 'easeInOutExpo', function() {
		});
		$(this).parent().toggleClass('open');
	});


	//팝업 
	$('.popWin').click(function(event){
		var href = $(this).attr('href'),
		winWidth = $(this).attr('data-width'),
		winHeight = $(this).attr('data-height'),
		board = $(this).attr('title'),
		data_top = $(this).attr('data-top'),
		data_left = $(this).attr('data-left');

		if(typeof data_top !== typeof undefined && data_top !== false && data_top)
			var top = $(this).attr('data-top');
		else
			var top = Math.ceil((window.screen.height - winHeight)/2);
		
		if(typeof data_left !== typeof undefined && data_left !== false && data_left)
			var left = $(this).attr('data-left');
		else
			var left = Math.ceil((window.screen.width - winWidth)/2);

		window.open(href,board,'width='+winWidth+',height='+winHeight+',top='+top+',left='+left+',scrollbars=yes, toolbar=no, menubar=no, location=no, statusbar=no, status=no, resizable=yes');
		event.preventDefault();
	});

	
	//레이어 팝업
	$('.popup-inline:not(.inside)').magnificPopup({
		type: 'inline',
		fixedContentPos: false,
		fixedBgPos: true,
		closeOnContentClick: false, 
        closeOnBgClick: true,
		overflowY: 'auto',
		closeBtnInside: false,
		preloader: false,
		midClick: true,
		removalDelay: 300,
		mainClass: 'my-mfp-zoom-in'
	});
	$(document).on('click', '.popClose', function (e) {
		e.preventDefault();
		$.magnificPopup.close();
	});
	$('.myClick').click();


});


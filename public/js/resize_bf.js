$(document).ready(function() {
	var prevDevice = localStorage.getItem('view_type');
	var device = 'pc';

	if($(window).width() < 1000){// 모바일 UI
		device = 'mobile';
	}
	$(window).resize(function(){
		if($(window).width() < 1000){// 모바일 UI
			device = 'mobile';
		}else{// PC UI
			device = 'pc';
		}

		if(prevDevice != device) {
			localStorage.setItem('view_type', device);

			var reloadUrl = window.location.href;
			if(window.location.href.indexOf('?') > 0) {
				reloadUrl = window.location.href.substring(0, window.location.href.indexOf('?'));
			}
			window.location = reloadUrl + '?view_type=' + device;
		}
	});
});
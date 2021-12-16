$(document).ready(function() {

	if( $(window).scrollTop() >= 200 ) {
		$("#header").addClass('scroll');
	}
	$(window).scroll(function() {
		if( $(this).scrollTop() >= 200 ) {
			$("#header").addClass('scroll');
		} else {
			$("#header").removeClass('scroll');
		}
	});


});
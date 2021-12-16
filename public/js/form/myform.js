
$(document).ready(function(){
	
	//checkbox
	$('input[type="checkbox"]').each(function() {
		if($(this).hasClass('toggle-light')) {
			var label_on = $(this).attr('data-on'),
				label_off = $(this).attr('data-off');
			$(this).removeClass('toggle-light');
			$(this).wrap('<label class="toggle-light"></label>');
			$(this).after('<span></span><span class="labelOn">' + label_on + '</span><span class="labelOff">' + label_off + '</span>');
		} else {
			if($(this).parent()[0].tagName == 'LABEL') {
				$(this).parent().addClass('checkbox-wrap');
				if($(this).next('span').length == 0) $(this).after('<span></span>');
			} else {
				var label = typeof $(this).attr('data-label') !== typeof undefined && $(this).attr('data-label') !== '' ? $(this).attr('data-label') : '';
				$(this).wrap('<label class="checkbox-wrap"></label>');
				$(this).after('<span></span>' + label);
				if(!label) $(this).parent('.checkbox-wrap').addClass('no-label');
			}
			var thisClass = typeof $(this).attr('data-class') !== typeof undefined && $(this).attr('data-class') !== '' ? $(this).attr('data-class') : '';
			$(this).parent('.checkbox-wrap').addClass(thisClass);
		}
	});

	//radio
	$('input[type="radio"]').each(function() {
		if($(this).parent()[0].tagName == 'LABEL') {
			$(this).parent().addClass('radio-wrap');
			if($(this).next('span').length == 0) $(this).after('<span></span>');
		} else {
			var label = typeof $(this).attr('data-label') !== typeof undefined && $(this).attr('data-label') !== '' ? $(this).attr('data-label') : '';
			if($(this).hasClass('radio-btn')) {
				$(this).wrap('<label class="radio-btn"></label>');
				$(this).removeClass('radio-btn');
				$(this).after('<span>' + label + '</span>');			
			} else {			
				$(this).wrap('<label class="radio-wrap"></label>');
				$(this).after('<span></span>' + label);
			}
			var thisClass = typeof $(this).attr('data-class') !== typeof undefined && $(this).attr('data-class') !== '' ? $(this).attr('data-class') : '';
			$(this).parent('.radio-wrap').addClass(thisClass);
		}
	});

});
import $ from 'jquery';

$('.navigation[data-sticky]').on('sticky.zf.stuckto:top', function(){
		$(this).addClass('navigation_scroll');
	}).on('sticky.zf.unstuckfrom:top', function(){
		$(this).removeClass('navigation_scroll');
	});
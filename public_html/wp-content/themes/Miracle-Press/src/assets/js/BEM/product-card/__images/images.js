import $ from 'jquery';

var resize_image = function(){
	$('.product-card__image').each(function(index,element){
		var width = $(element).width();
		var height = width / 1.45;
		$(element).height(height);
	});
}

$(document).ready(resize_image);
$(window).on('resize', resize_image);
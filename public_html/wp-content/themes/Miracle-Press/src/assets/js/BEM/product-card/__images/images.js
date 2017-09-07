import $ from 'jquery';

var resize_image = function(){
	$('.product-card__image').each(function(index,element){
		
		var width = $(element).width();
		var height = width / 1.45;
		$(element).height(height);
		
		if( $.browser.msie ){
			var image = $(element).find('img').attr('src');
			var title = $(element).find('img').attr('title');
			if( image != undefined ){
				$(element).css( 'background-image', 'url(' + image + ')' ).attr('title', title);
			}else{
				$image = $(element).find('img').attr('data-src');
				if( image != undefined ){
					$(element).css( 'background-image', 'url(' + image + ')' ).attr('title', title);
				}
			}
			$(element).find('img').remove();
		}
	});
}

$(document).ready(resize_image);
$(window).on('resize', resize_image);
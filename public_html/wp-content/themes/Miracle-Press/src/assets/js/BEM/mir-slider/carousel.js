import $ from 'jquery';

$(document).ready(function(){
	
	$('.mir-slider .slide .slide__owl-carousel-slider').each(function(index, item){
		$(item).owlCarousel({
			loop:true,
			margin:10,
			stagePadding: 0,
			nav:true,
			dots:false,
			lazyLoad:true,
			navText: ['<i class="miracle-icon-left-chevron"></i>','<i class="miracle-icon-right-chevron"></i>'],
			responsive:{
				500:{
					items:1
				},
				800:{
					items:3
				},
				1000:{
					items:5
				}
			}
		});

		var h = $(item).width() / 5 - 10;
		$(item).find('.item').height(h);

		if( $.browser.msie ){
			$(item).find('.item').each(function(i, elem){
				var image = $(elem).find('img').attr('src');
				var title = $(elem).find('img').attr('title');
				if( image != undefined ){
					$(elem).css({
						'background-image'    : 'url(' + image + ')',
						'background-repeat'   : 'no-repeat',
						'background-size'     : 'cover',
						'background-position' : 'center center'
					}).attr('title', title);
				}else{
					var image = $(elem).find('img').attr('data-src');
					$(elem).css({
						'background-image'    : 'url(' + image + ')',
						'background-repeat'   : 'no-repeat',
						'background-size'     : 'cover',
						'background-position' : 'center center'
					}).attr('title', title);					
				}
				$(elem).find('img').remove();
			});
		}

	});

});

var height_owl_item = function(){
	$('.mir-slider .slide .slide__owl-carousel-slider').each(function(index, item){
		var h = $(item).width() / 5 - 10;
		$(item).find('.item').height(h);
	});
}

$(window).on( 'resize', height_owl_item );
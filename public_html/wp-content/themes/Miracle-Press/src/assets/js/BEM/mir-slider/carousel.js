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
				0:{
					items:1
				},
				800:{
					items:2
				},
				1000:{
					items:5
				}
			}
		});

		var h = $(item).width() / 5 - 10;
		$(item).find('.item').height(h);

	});

});

var height_owl_item = function(){
	$('.mir-slider .slide .slide__owl-carousel-slider').each(function(index, item){
		var h = $(item).width() / 5 - 10;
		$(item).find('.item').height(h);
	});
}

$(window).on( 'resize', height_owl_item );
import $ from 'jquery';

var init_mir_slider = function(){
	if( $('.mir-slider').length > 0 ){
		$('.mir-slider').find('.slide').each(function(index,element){
			var title = $(element).find('.slide__title').text();
			$(element).data('title', title);
			$(element).find('.slide__title').remove();
			if( index == 0 ){
				$(element).css({
								'position'   : 'relative',
								'top'        : '0',
								'transition' : 'transform 0.6s ease-in-out 0s'
							});
				var title = $(element).data('title');
				$('.slider-nav__title').text(title);
			}else{
				var t = 'translateX(' + ( 100 * index ) + '% )';
				$(element).css({
								'position'   : 'absolute',
								'top'        : '7rem',
								'transform'  : t
							});
				setTimeout( function(){
					$(element).css({
									'transition' : 'transform 0.6s ease-in-out 0s'
								});
				}, 600);
			}
		});

		$('.mir-slider').data({
							'position' : 1,
							'slides'   : $('.mir-slider').find('.slide').length
						});
	}
}

var next_slide = function(){
	var bollean = $('.slider-nav__button-next').attr('disabled');
	if( bollean != 'disabled' ){
		var p = $('.mir-slider').data('position');
		var slides = $('.mir-slider').data('slides');
		$('.mir-slider').find('.slide').each(function(index,element){
			if( index == p ){
				$(element).css({
					'position'  : 'relative',
					'top'       : 0,
					'transform' : 'translateX(0%)'
				});
				if( p == (slides-1) ){
					$('.slider-nav__button-next').attr('disabled','disabled');
				}else if( p == 1 ){
					$('.slider-nav__button-prev').removeAttr('disabled');
				}

				var title = $(element).data('title');
				$('.slider-nav__title').fadeOut( 300, function(){
					$('.slider-nav__title').text(title);
					$('.slider-nav__title').fadeIn(300);
				});

			}else{
				var t = 'translateX(' + ( 100 * ( index - p ) ) + '% )';
				$(element).css({
					'position'  : 'absolute',
					'top'       : '7rem',
					'transform' : t
				});
			}
		});

		$('.mir-slider').data({
							'position' : (p+1),
							'slides'   : $('.mir-slider').find('.slide').length
						});
	}
}

var prev_slide = function(){
	var bollean = $('.slider-nav__button-prev').attr('disabled');
	if( bollean != 'disabled' ){
		var p = $('.mir-slider').data('position');
		var slides = $('.mir-slider').data('slides');
		$('.mir-slider').find('.slide').each(function(index,element){
			if( index == (p-2) ){
				$(element).css({
					'position'  : 'relative',
					'top'       : 0,
					'transform' : 'translateX(0%)'
				});
				if( p == 2 ){
					$('.slider-nav__button-prev').attr('disabled','disabled');
				}else if( p == slides ){
					$('.slider-nav__button-next').removeAttr('disabled');
				}

				var title = $(element).data('title');
				$('.slider-nav__title').fadeOut( 300, function(){
					$('.slider-nav__title').text(title);
					$('.slider-nav__title').fadeIn(300);
				});

			}else{
				var t = 'translateX(' + ( 100 * ( 2 + index - p ) ) + '% )';
				$(element).css({
					'position'  : 'absolute',
					'top'       : '7rem',
					'transform' : t
				});
			}
		});

		$('.mir-slider').data({
							'position' : (p-1),
							'slides'   : $('.mir-slider').find('.slide').length
						});
	}
}

$(document).ready( init_mir_slider );
$('.slider-nav__button-next').bind( 'click', next_slide );
$('.slider-nav__button-prev').bind( 'click', prev_slide );
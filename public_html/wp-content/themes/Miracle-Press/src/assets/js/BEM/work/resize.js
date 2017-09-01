import $ from 'jquery';

;(function(window, document, undefined) {
	$.fn.workResize = function(){

		var card = $('.work-card');

		var width = card.first().width();
		var max_height = width / 1.2857;
		card.each(function(index, element){
			var height = $(element).find('.work-card__bg').css('height','auto').height();
			max_height = ( height > max_height ) ? height : max_height;
			$(element).find('.work-card__bg').css('height','100%');
		});
		card.height(max_height);
		card.each(function(index, element){
			var height = $(element).find('.work-card__title').outerHeight() + $(element).find('.work-card__content').outerHeight() + $(element).find('.work-card__bottom-info').outerHeight();
			var m = ( max_height - height ) / 2;
			$(element).find('.work-card__bg .work-card__content').css('margin-bottom',m).css('margin-top',m);
			$(element).find('.work-card__bg').css('height','100%');
		});

		return this;
	}
})(window, document);

$(document).ready(function(){
	$('.works').workResize();
});

$(window).on('resize', function(){
	$('.works').workResize();
});
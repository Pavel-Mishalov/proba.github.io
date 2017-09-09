import $ from 'jquery';

;(function(window, document, undefined) {
	$.fn.productCardImageResize = function(){

		var card = this.find('.post-card');

		var width = card.first().width();
		var height = width / 1.4344;
		this.find('.post-card__image').each(function(index, element){
			$(element).css('height',height);
			if( $.browser.msie ){
				var src = $(element).find('img').attr('src');
				$(element).find('img').remove();
				$(element).css( 'background-image', 'url('+src+')' );
			}
		});

		var title_height = 0;
		this.find('.post-card__title').css('height','auto');
		this.find('.archive-post__post-card').each(function(index, item){
			var h = $(item).find('.post-card__title').height();
			title_height = ( h > title_height ) ? h : title_height;
		});

		this.find('.post-card__title').height( title_height );

		var description_height = 0;
		this.find('.post-card__description').height('height','auto');
		this.find('.archive-post__post-card').each(function(index, item){
			var h = $(item).find('.post-card__description').height();
			description_height = ( h > description_height ) ? h : description_height;
		});

		this.find('.post-card__description').height( description_height );

		return this;
	}
})(window, document);

$(document).ready(function(){
	$('.archive-post').productCardImageResize();
});

$(window).on('resize', function(){
	$('.archive-post').productCardImageResize();
});
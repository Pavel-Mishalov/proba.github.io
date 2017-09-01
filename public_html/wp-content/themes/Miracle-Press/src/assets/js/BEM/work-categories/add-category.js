import $ from 'jquery';

var cat_click = function(){
	if( ! $(this).hasClass('work-categories__item_active') ){
		$(this).parent().find('.work-categories__item_active').removeClass('work-categories__item_active');
		$(this).addClass('work-categories__item_active');
	}
}

$('.work-categories .work-categories__item').on( 'click', cat_click );
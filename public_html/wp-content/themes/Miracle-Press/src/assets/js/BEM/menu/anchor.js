import $ from 'jquery';

var toggle_mobile_menu = function(event){
	event.preventDefault();
	var href = $(this).attr('href');
	if( href != undefined && href != '#' ){
		$('html, body').animate({scrollTop: ( $(href).offset().top - 50 )}, 1500);
	}
}

$('.menu__link_anchor').on('click', toggle_mobile_menu);
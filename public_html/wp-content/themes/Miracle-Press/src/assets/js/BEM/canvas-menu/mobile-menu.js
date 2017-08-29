import $ from 'jquery';

var toggle_mobile_menu = function(event){
	event.preventDefault();
	var href = $(this).attr('href');
	$('.canvas-menu').toggleClass('canvas-menu_animation-show canvas-menu_animation-hide');
	if( href != undefined ){
		$('html, body').animate({scrollTop: ( $(href).offset().top - 50 )}, 1500);
	}
}

$('.nav-mobile__icon').on('click', toggle_mobile_menu);
$('.canvas-menu__close-button').on('click', toggle_mobile_menu);
$('.canvas-menu__link').on('click', toggle_mobile_menu);
import $ from 'jquery';

var on_center = function(){
	var m = parseFloat( $('.after-navigation__button').css('margin-left') );
	var w_after_nav = $('.after-navigation').width();
	var w_text_logo = $('.after-navigation__text-logo').outerWidth();
	var w_requer    = $('.after-navigation__requer').outerWidth();
	var w_cont_head = $('.after-navigation__contacts-header').outerWidth();
	var w_button    = $('.after-navigation__button').outerWidth() + m;
	if( ( w_cont_head + w_button + 62 ) < ( ( w_after_nav - w_requer - 50 ) / 2 ) ){
		var width = ( w_after_nav - w_requer ) / 2 - w_text_logo + 31;
		$('.after-navigation__requer').css('margin-left', width);
	}else if( ( w_text_logo + w_requer + w_cont_head + w_button ) < w_after_nav ){
		var width = ( w_after_nav - w_text_logo - w_requer - w_cont_head - w_button  ) / 2;
		$('.after-navigation__requer').css('margin-left',width);
	}

	setTimeout( function(){}, 10 );
}

$(document).ready( on_center );
$(window).on('resize', on_center ); 
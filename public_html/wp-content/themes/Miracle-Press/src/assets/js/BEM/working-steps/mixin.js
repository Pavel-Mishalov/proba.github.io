import $ from 'jquery';

var resize_block = function(){

	var w_comp_info = $('.working-steps').width();
	var count_step = $('.working-steps .working-steps__step-work').length;

	if( $('body').width() > 1024 ){
		var width = w_comp_info / count_step - count_step;
	}else{
		var width = w_comp_info / 3 - 3;
	}

	$('.working-steps .working-steps__step-work').width( width );

	setTimeout( function(){}, 10 );
}

$(document).ready( resize_block );
$(window).on('resize', resize_block ); 
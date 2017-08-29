import $ from 'jquery';

var resize_block = function(){

	var w_comp_info = $('.working-steps').width();
	var count_step = $('.working-steps .working-steps__step-work').length;

	if( $('body').width() > 950 ){
		if( count_step < 7 ){
			var width = w_comp_info / count_step - count_step;
			$('.working-steps .working-steps__step-work').width( width );
		}else{
			var width = w_comp_info / 6 - count_step;
			$('.working-steps .working-steps__step-work').width( width );			
		}
	}

	setTimeout( function(){}, 10 );
}

$(document).ready( resize_block );
$(window).on('resize', resize_block );

var rem_calc = function(){
	var body = $('body').width();
	if( body < 1200 ){
		var rem = body * 3 / 950 + 6.25;
		$('html').css('font-size', rem + 'px');
	}
}

$(document).ready( rem_calc );
$(window).on('resize', rem_calc );
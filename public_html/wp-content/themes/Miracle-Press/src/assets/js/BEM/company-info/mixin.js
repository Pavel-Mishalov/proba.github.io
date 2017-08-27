import $ from 'jquery';

var resize_block = function(){

	var w_comp_info = $('.company-info').width();
	var count_card = $('.company-info .company-info__info-card').length;

	if( $('body').width() > 1024 ){
		var width = w_comp_info / count_card - 3;
	}else{
		var width = w_comp_info / 3 - 3;
	}

	$('.company-info .company-info__info-card').width( width );

	setTimeout( function(){}, 10 );
}

$(document).ready( resize_block );
$(window).on('resize', resize_block ); 
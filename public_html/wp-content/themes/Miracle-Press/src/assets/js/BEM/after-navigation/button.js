import $ from 'jquery';

var open_call_requer_modal = function(event){
	event.preventDefault();
	$('.modal').addClass('modal_show');
	$('.modal').data('open', 'call-requer');
	$('.modal__call-requer').addClass('modal__call-requer_show').focus();
}

var close_call_requer_modal = function(event){
	event.preventDefault();
	$('.modal').removeClass('modal_show');
	var modal = $('.modal').data('open');
	$('.modal__' + modal).removeClass('modal__' + modal + '_show');
}

var onfocus_call_requer_modal = function(event){
	if ( $(event.target).hasClass('modal_show') ){

		var modal = $('.modal').data('open');
		var container = $('.modal__' + modal);
		$('.modal').removeClass('modal_show');
		$('.modal__' + modal).removeClass('modal__' + modal + '_show');

	}
}

$('.after-navigation__button').on( 'click', open_call_requer_modal );
$('.step-work__content a:not([href^="tel"])').on( 'click', open_call_requer_modal );
$('.call-requer__close-button').on( 'click', close_call_requer_modal );
$('.modal').bind('click', onfocus_call_requer_modal);
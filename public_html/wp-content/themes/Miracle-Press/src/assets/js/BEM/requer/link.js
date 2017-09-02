import $ from 'jquery';

var open_tech_requerement_modal = function(event){
	event.preventDefault();
	$('.modal').addClass('modal_show');
	$('.modal').data('open', 'tech-requerement');
	$('.modal__tech-requerement').addClass('modal__tech-requerement_show').focus();
}

var close_tech_requerement_modal = function(event){
	event.preventDefault();
	$('.modal').removeClass('modal_show');
	var modal = $('.modal').data('open');
	$('.modal__' + modal).removeClass('modal__' + modal + '_show');
}

var onfocus_tech_requerement_modal = function(event){
	var modal = $('.modal').data('open');
	var container = $('.modal__' + modal);

	if (container.has(event.target).length === 0){

		$('.modal').removeClass('modal_show');
		$('.modal__' + modal).removeClass('modal__' + modal + '_show');

	}
}

$('.requer__link').on( 'click', open_tech_requerement_modal );
$('.tech-requerement__close-button').on( 'click', close_tech_requerement_modal );
$('.modal').bind('click', onfocus_tech_requerement_modal);
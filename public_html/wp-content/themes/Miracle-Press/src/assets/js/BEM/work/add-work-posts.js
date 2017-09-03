import $ from 'jquery';

var add_work_click = function(){

	var cat_obj = $('.work__work-categories .work-categories__item_active');
	var category = ( cat_obj.text() == 'Все' ) ? 'all' : cat_obj.text();
	var offset = $('.works .work-card').length;
	$.ajax({
		method: "POST",
		url: ajax.url,
		data: {
			"cat"     : category,
			"offset"  : offset,
			"action"  : 'miracle_add_new_work',
			"page"    : ajax.i,
			"nonce"   : ajax.nonce
		},
		success: add_work_success,
		beforeSend: add_work_before,
		error: add_work_error
	});
}

$('.work__button').on( 'click', add_work_click );

var add_work_success = function(data){
	var html = $( data );
	$('.works').append( html );
	$('.works').workResize();
	if( html.length != 3 ){
		$('.work__button').removeAttr('disabled');
		$('.work__button').fadeOut();
	}else{
		$('.work__button').removeAttr('disabled');
	}
	console.log( html.length );
}

var add_work_before = function(){
	$('.work__button').attr('disabled', 'disabled');
}

var add_work_error = function(){
	console.log('Sorry. The request has not passed, maybe you violated the rules of using the site');
}
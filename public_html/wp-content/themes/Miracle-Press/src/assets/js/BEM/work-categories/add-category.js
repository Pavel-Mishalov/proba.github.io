import $ from 'jquery';

var cat_click = function(){
	if( ! $(this).hasClass('work-categories__item_active') ){
		$(this).parent().find('.work-categories__item_active').removeClass('work-categories__item_active');
		$(this).addClass('work-categories__item_active');
		var category = ( $(this).text() == 'Все' ) ? 'all' : $(this).text();
		$.ajax({
			method: "POST",
			url: ajax.url,
			data: {
				"cat"     : category,
				"action"  : 'miracle_add_work_cat',
				"page"    : ajax.i,
				"nonce"   : ajax.nonce
			},
			success: work_cat_success,
			beforeSend: work_cat_before,
			error: work_cat_error
		});
	}
}

$('.work-categories .work-categories__item').on( 'click', cat_click );



var work_cat_success = function(data){
	$('.works').fadeOut(300, function(){
		$('.works').html( data );
		$('.works').fadeIn(300, function(){
			$('.works').workResize();
			$('.works').removeClass('work__works_before-work-ajax');
		});
	});
	if( $(data).length != 6 ){
		$('.work__button').fadeOut();
	}else{
		$('.work__button').fadeIn();
	}
}

var work_cat_before = function(){
	$('.works').addClass('work__works_before-work-ajax');
}

var work_cat_error = function(){
	console.log('Sorry. The request has not passed, maybe you violated the rules of using the site');
}
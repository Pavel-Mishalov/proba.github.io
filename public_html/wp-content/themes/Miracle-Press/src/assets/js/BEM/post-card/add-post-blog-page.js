import $ from 'jquery';

var add_post_blog_page = function(){

	var offset = $('.archive-post .post-card').length;
	var options = {
			"offset"  : offset,
			"action"  : 'miracle_add_new_post_cart_in_blog',
			"nonce"   : ajax.nonce
		};
	if( $('.page-content__button').attr('data-cat') != undefined ){
		options.category = $('.page-content__button').attr('data-cat');
	}
	if( $('.page-content__button').attr('data-tag') != undefined ){
		options.tag = $('.page-content__button').attr('data-tag');
	}
	if( $('.page-content__button').attr('data-search') != undefined ){
		options.search = $('.page-content__title').text();
	}
	$.ajax({
		method: "POST",
		url: ajax.url,
		data: options,
		success: add_post_blog_page_success,
		beforeSend: add_post_blog_page_before,
		error: add_post_blog_page_error
	});
}

$('.page-content__button').on( 'click', add_post_blog_page );

var add_post_blog_page_success = function(data){
	var html = $( data );
	$('.archive-post').append( html );

	if( $.browser.msie ){
		if( ( $('body').width() < 1100 && $('body').width() > 900 ) || ( $('body').width() < 700 ) ){
		
			$('.archive-post').find('.archive-post__post-card').each(function(index,item){
				var row = ( index - index % 2 ) / 2 + 1;
				$(item).attr( 'style', '-ms-grid-row: ' + row );
			});
		
		}else if( $('body').width() < 400 ){
		
			$('.archive-post').find('.archive-post__post-card').each(function(index,item){
				$(item).attr( 'style', '-ms-grid-row: ' + index );
			});
		
		}else{
		
			$('.archive-post').find('.archive-post__post-card').each(function(index,item){
				var row = ( index - index % 3 ) / 3 + 1;
				$(item).attr( 'style', '-ms-grid-row: ' + row );
			});
		
		}
	}

	$('.archive-post').productCardImageResize();
	if( html.length != 3 ){
		$('.page-content__button').removeAttr('disabled');
		$('.page-content__button').fadeOut();
	}else{
		$('.page-content__button').removeAttr('disabled');
	}
	$('.archive-post').css('filter', 'grayscale(0%)');
	setTimeout( function(){ $('.archive-post').removeAttr('style'); }, 400 );
}

var add_post_blog_page_before = function(){
	$('.page-content__button').attr('disabled', 'disabled');
	$('.archive-post').css({
		'transition' : 'filter 0.3s ease-out 0s',
		'filter'     : 'grayscale(100%)'
	});
}

var add_post_blog_page_error = function(){
	console.log('Sorry. The request has not passed, maybe you violated the rules of using the site');
}

var on_ready = function(){
	if( $('.page-content__button').length > 0 && $('.page-content__button').attr('data-page') != 'post' ){
		var posts = $('.archive-post .post-card').length;
		if( posts <= 5 ){
			$('.page-content__button').hide();
			if( $('.page-content__button').attr('data-search') != undefined && posts == 0 ){
				var s = $('.page-content__title').text();
				$('.page-content__title').text( 'Просим прошения по запросу: "' + s +'" ничего не найдено.');
			}
		}
	}
}

$(document).ready( on_ready );
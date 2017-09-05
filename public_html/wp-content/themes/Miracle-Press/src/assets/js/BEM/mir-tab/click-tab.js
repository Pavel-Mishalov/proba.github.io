import $ from 'jquery';

var init_tab = function(){
	if( $('.mir-tabs').length > 0 ){
		$('.mir-tabs').find('.mir-tab').each(function(index,item){
			$(item).data('active', false);
			var h = $(item).find('.mir-tab__question').outerHeight();
			var ih = $(item).find('.mir-tab__icon').height();
			var iw = $(item).find('.mir-tab__icon').width();
			var pv = ( h - ih - 2 ) / 2;
			var ph = ( h - iw - 1 ) / 2;
			$(item).find('.mir-tab__icon').css('padding', pv + 'px ' + ph + 'px' );
			$(item).find('.mir-tab__question').css( 'width', 'calc( 100% - 2px - ' + h + 'px )' );
		});
	}
}

$(document).ready( init_tab );

var click_tab = function(){
	var tab = this;
	$(this).find('.mir-tab__answer').slideToggle(300);
	$(this).find('.mir-tab__icon').find('i').toggleClass('miracle-icon-chevron-down miracle-icon-up-chevron');
	if( $(this).data('active') ){
		$(this).data('active',false);
	}else{
		$(this).data('active',true);
	}
}

$('.mir-tab').on( 'click', click_tab );
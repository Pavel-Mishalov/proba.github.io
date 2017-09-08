import $ from 'jquery';

var toggle_post = function(){
	$(this).toggleClass('nav-tab__link_active');
	$(this).find('.nav-tab__icon').toggleClass('miracle-icon-up-chevron miracle-icon-chevron-down');
	$(this).parent().find('.nav-tab__posts').slideToggle(400, function(){
		$(this).parent().find('.nav-tab__posts').toggleClass('nav-tab__posts_active').removeAttr('style')
	});
}

$('.nav-tab__link').on('click', toggle_post);
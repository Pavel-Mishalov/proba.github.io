import $ from 'jquery';

var open_product_modal = function(event){
	event.preventDefault();
	$('.modal').addClass('modal_show');
	$('.modal').data('open', 'product-modal');
	var product_card = $(this).parent().attr('data-category');
	var position = $(this).attr('data-position');
	$('.modal__product-modal[data-category="' + product_card +'"] .menu__link').removeClass('menu__link_active');
	$('.modal__product-modal[data-category="' + product_card +'"] .menu__link:eq('+position+')').addClass('menu__link_active');
	$('.modal__product-modal[data-category="' + product_card +'"] .product-modal__slide').hide();
	$('.modal__product-modal[data-category="' + product_card +'"] .product-modal__slide:eq('+position+')').show();


	$('.modal').data('category', product_card);
	$('.modal').data('product', position);
	$('.modal__product-modal[data-category="' + product_card +'"]').addClass('modal__product-modal_show').focus();
}

var click_product = function(event){
	event.preventDefault();
	if( ! $(this).hasClass('menu__link_active') ){
		var next = $(this).attr('data-id');
		var cat = $('.modal').data('category');
		var position = $('.modal').data('product');
		$('.modal__product-modal[data-category="' + cat +'"] .menu__link').removeClass('menu__link_active');
		$(this).addClass('menu__link_active');

		$('.modal__product-modal[data-category="' + cat +'"] .product-modal__slide:eq('+position+')').fadeOut(
			400,
			function(){
				$('.modal__product-modal[data-category="' + cat +'"] .product-modal__slide:eq('+next+')').fadeIn(400);
			}
		);
		$('.modal').data('product', next);
	}
}

var click_other_product = function(){
	var cat = $('.modal').data('category');
	var next = $(this).attr('data-category');
	var position = 0;
	$('.modal__product-modal[data-category="' + cat +'"]').fadeOut(400,
		function(){
			$('.modal__product-modal[data-category="' + cat +'"]').removeClass('modal__product-modal_show');
			$('.modal__product-modal[data-category="' + cat +'"]').removeAttr('style');
			$('.modal__product-modal[data-category="' + next +'"] .menu__link').removeClass('menu__link_active');
			$('.modal__product-modal[data-category="' + next +'"] .menu__link:eq('+position+')').addClass('menu__link_active');
			$('.modal__product-modal[data-category="' + next +'"] .product-modal__slide').hide();
			$('.modal__product-modal[data-category="' + next +'"] .product-modal__slide:eq('+position+')').show();

			$('.modal').data('category', next);
			$('.modal').data('product', position);
			$('.modal__product-modal[data-category="' + next +'"]').fadeIn(400,
				function(){
					$('.modal__product-modal[data-category="' + next +'"]').addClass('modal__product-modal_show').focus();
					$('.modal__product-modal[data-category="' + next +'"]').removeAttr('style');
				});
		});
}

$('.product-card__direction').on( 'click', open_product_modal );
$('.modal__product-modal .menu__link').on( 'click', click_product );
$('.modal__product-modal .other-product__link button').on( 'click', click_other_product );
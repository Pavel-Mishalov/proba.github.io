<?php

function miracle_get_menu_item( $bem_block ){
	$html = '';
	if( is_page_template( 'pagetemplates/main.php' ) ):
		$items = get_field( 'miracle-main-menu' );
		foreach ( $items as $item ):
			$name = $item['name'];
			$select = $item['anchor'];
			$class = '';
			switch ( $select ) {
				case 'simple':
					$link = $item['simple'];
					break;
					
				case 'anchor':
					$link = $item['section'];
					$class = ( $bem_block == 'menu' ) ? 'menu__link_anchor' : '';
					break;
					
				case 'page':
					$link = $item['page'];
					break;
					
				case 'post':
					$link = $item['post'];
					break;
				
				default:
					$link = '';
					break;
			}
			$block = file_get_contents( get_template_directory() . '/views_support/block/menu/menu-item.php' );
			$block = str_replace( '<% link %>', $link, $block );
			$block = str_replace( '<% class %>', $class, $block );
			$block = str_replace( '<% name %>', $name, $block );
			$block = str_replace( '<% bem_block %>', $bem_block, $block );
			$html .= $block;

		endforeach;
	endif;

	return $html;
}

function miracle_get_company_info(){
	$html = '';
	if( is_page_template( 'pagetemplates/main.php' ) ):
		$items = get_field( 'miracle-main-page-header-company-info' );
		foreach ( $items as $item ):
			$icon    = ( $item['icommon'] ) ? $item['icon_icommon'] : 'fa ' . $item['icon_fa'];
			$title   = $item['title'];
			$content = $item['content'];
			$content = str_replace( '<color>', '<span class="info-card__content_text-yellow">', $content );
			$content = str_replace( '</color>', '</span>', $content );

			$block = file_get_contents( get_template_directory() . '/views_support/block/company-info/info-card.php' );
			$block = str_replace( '<% icon %>', $icon, $block );
			$block = str_replace( '<% title %>', $title, $block );
			$block = str_replace( '<% content %>', $content, $block );

			$html .= $block;
		endforeach;
	endif;
	return $html;
}

function miracle_get_header_form(){
	$html = '';
	$html .= file_get_contents( get_template_directory() . '/views_support/block/contact-form-7/header-form.php' );
	return $html;
}

function miracle_get_cost_calculation_form(){
	$html = '';
	$html .= file_get_contents( get_template_directory() . '/views_support/block/contact-form-7/cost-calculation-form.php' );
	return $html;
}

function miracle_get_company_working_steps(){
	$html = '';
	if( is_page_template( 'pagetemplates/main.php' ) ):
		$items = get_field( 'miracle-main-page-how-work-steps' );
		foreach ( $items as $item ):
			$icon    = $item['icon'];
			$title   = $item['title'];
			$class   = ( next($items) ) ? '' : 'step-work_last-item';
			$content = $item['content'];
			$content = str_replace( '<modal>', '<a href="#">', $content );
			$content = str_replace( '</modal>', '</a>', $content );
			$content = str_replace( '<telephone>', '<a href="callto:+74955644445">+7 (495) 564 44 45</a>', $content );

			$block = file_get_contents( get_template_directory() . '/views_support/block/company-steps/step-card.php' );
			$block = str_replace( '<% icon %>', $icon, $block );
			$block = str_replace( '<% title %>', $title, $block );
			$block = str_replace( '<% content %>', $content, $block );
			$block = str_replace( '<% class %>', $class, $block );

			$html .= $block;
		endforeach;
	endif;
	return $html;
}

function miracle_get_delivery_info(){
	$html = '';
	if( is_page_template( 'pagetemplates/main.php' ) ):
		$title = get_field( 'miracle-main-page-delivery-delivery-table-title' );
		$rate  = miracle_get_delivery_rate();
		$html  = file_get_contents( get_template_directory() . '/views_support/block/cash/delivery.php' );
		$html  = str_replace( '<% title %>', $title, $html );
		$html  = str_replace( '<% rate %>', $rate, $html );
	endif;
	return $html;
}

function miracle_get_delivery_rate(){
	$html = '';
	if( is_page_template( 'pagetemplates/main.php' ) ):
		$rates = get_field( 'miracle-main-page-delivery-delivery-rate' );
		foreach ( $rates as $rate ):
			$region   = $rate['region'];
			$cost     = $rate['price'];
			$max_cost = $rate['max-cost'] . ' <span>бесплатно!</span>';
			$block    = file_get_contents( get_template_directory() . '/views_support/block/cash/rate/delivery.php' );
			$block    = str_replace( '<% region %>', $region, $block );
			$block    = str_replace( '<% cost %>', $cost, $block );
			$block    = str_replace( '<% max_cost %>', $max_cost, $block );
			$html .= $block;
		endforeach;
	endif;
	return $html;
}

function miracle_get_order_info(){
	$html = '';
	if( is_page_template( 'pagetemplates/main.php' ) ):
		$title = get_field( 'miracle-main-page-delivery-cash-table-title' );
		$rate  = miracle_get_order_rate();
		$html  = file_get_contents( get_template_directory() . '/views_support/block/cash/order.php' );
		$html  = str_replace( '<% title %>', $title, $html );
		$html  = str_replace( '<% rate %>', $rate, $html );
	endif;
	return $html;
}

function miracle_get_order_rate(){
	$html = '';
	if( is_page_template( 'pagetemplates/main.php' ) ):
		$rates = get_field( 'miracle-main-page-delivery-cash-rate' );
		foreach ( $rates as $rate ):
			$rate   = $rate['rate'];
			$block  = file_get_contents( get_template_directory() . '/views_support/block/cash/rate/order.php' );
			$block  = str_replace( '<% rate %>', $rate, $block );
			$html  .= $block;
		endforeach;
	endif;
	return $html;
}
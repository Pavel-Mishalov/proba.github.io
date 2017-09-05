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

function miracle_get_modal_form(){
	$html = '';
	$html .= file_get_contents( get_template_directory() . '/views_support/block/contact-form-7/modal-form.php' );
	return $html;
}

function miracle_get_company_working_steps(){
	$html = '';
	if( is_page_template( 'pagetemplates/main.php' ) ):
		$items = get_field( 'miracle-main-page-how-work-steps' );
		foreach ( $items as $item ):
			$icon    = ( $item['icommon'] ) ? $item['icon_icommon'] : 'fa ' . $item['icon_fa'];
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

function miracle_get_work_category(){
	$html = '';
	$active_project = array();
	if( is_page_template( 'pagetemplates/main.php' ) ):
		$projects = get_field( 'miracle-main-page-work-posts' );
		foreach ( $projects as $project ):
			$category = get_field( 'project-cat', $project->ID )->term_id;
			if( !in_array( $category, $active_project) ):
				array_push( $active_project, $category );
				$name  = get_field( 'project-cat', $project->ID )->name;
				$block = file_get_contents( get_template_directory() . '/views_support/block/work-card/category.php' );
				$block = str_replace( '<% term_id %>', $category, $block);
				$block = str_replace( '<% name %>', $name, $block);
				$html  .= $block;
			endif;
		endforeach;
	endif;
	return $html;
}

function miracle_get_work_cards( $count_card = 6, $cat = 'all', $page_id = 0, $offset = 0 ){
	$html = '';
	if( $cat == 'all' ):
		$projects = ( $page_id > 0 ) ? get_field( 'miracle-main-page-work-posts', $page_id ) : get_field( 'miracle-main-page-work-posts' );
		$count = count( $projects );
		$count = ( $count >= $count_card ) ? $count_card : $count;

		$iterator = 0;
		$post_pos = 1;
		foreach ( $projects as $project ) {
			if( $post_pos > $offset ){
				if( $iterator < $count ):
					$title   = $project->post_title;
					$content = get_field( 'miracle-project-post-content', $project->ID );
					$image   = get_the_post_thumbnail_url( $project->ID, 'full' );
					$data    = get_field( 'miracle-project-post-time', $project->ID );
					$cost    = get_field( 'miracle-project-post-cost', $project->ID );
					$block   = file_get_contents( get_template_directory() . '/views_support/block/work-card/work-card.php' );
					$block   = str_replace( '<% title %>', $title . $category, $block );
					$block   = str_replace( '<% content %>', $content, $block );
					$block   = str_replace( '<% image %>', $image, $block );
					$block   = str_replace( '<% data %>', $data, $block );
					$block   = str_replace( '<% cost %>', $cost, $block );

					$html   .= $block;
				else:
					break;
				endif;
				$iterator++;
			}
			$post_pos++;
		}
	else:
		$projects = ( $page_id > 0 ) ? get_field( 'miracle-main-page-work-posts', $page_id ) : get_field( 'miracle-main-page-work-posts' );
		$count = count( $projects );
		$count = ( $count >= $count_card ) ? $count_card : $count;

		$iterator = 0;
		$post_pos = 1;
		foreach ( $projects as $project ) {
			if( $iterator < $count ):
				$category = get_field( 'project-cat', $project->ID )->name;
				if( $category == $cat ):
					if( $post_pos > $offset ){
						$title   = $project->post_title;
						$content = get_field( 'miracle-project-post-content', $project->ID );
						$image   = get_the_post_thumbnail_url( $project->ID, 'full' );
						$data    = get_field( 'miracle-project-post-time', $project->ID );
						$cost    = get_field( 'miracle-project-post-cost', $project->ID );
						$block   = file_get_contents( get_template_directory() . '/views_support/block/work-card/work-card.php' );
						$block   = str_replace( '<% title %>', $title, $block );
						$block   = str_replace( '<% content %>', $content, $block );
						$block   = str_replace( '<% image %>', $image, $block );
						$block   = str_replace( '<% data %>', $data, $block );
						$block   = str_replace( '<% cost %>', $cost, $block );

						$html   .= $block;
						$iterator++;
					}
					$post_pos++;
				endif;
			endif;
		}
	endif;
	return $html;
}

function miracle_get_modal( $views = '' ){
	$html = '';
	$file = get_template_directory() . '/views_support/block/modal/' . $views . '/' . $views . '.php';

	if( file_exists( $file ) ):

		switch ( $views ) {
			case 'tech-requerement':
				$block   = file_get_contents( $file );
				$title   = get_field( 'miracle-modal-tech-requerment-title', 'option' );
				$section = miracle_get_tech_requerment_sections();
				$block   = str_replace( '<% title %>', $title, $block );
				$block   = str_replace( '<% sections %>', $section, $block );
				$html   .= $block;
				break;
			
			case 'call-requer':
				$block   = file_get_contents( $file );
				$form    = miracle_get_modal_form();
				$block   = str_replace( '<% form %>', $form, $block );
				$html   .= $block;
				break;

			default:
				break;
		}

	endif;

	return $html;
}

function miracle_get_tech_requerment_sections(){
	$html = '';
	$file = get_template_directory().'/views_support/block/modal/tech-requerement/all-sections.php';
	$sections = get_field( 'miracle-modal-tech-requerment-section', 'option' );
	foreach( $sections as $section ):
		$block = file_get_contents( $file );
		$title = $section['title'];
		$requerements = miracle_get_tech_section_requerements( $section['requerement'] );
		$block = str_replace( '<% title %>', $title, $block );
		$block = str_replace( '<% requerements %>', $requerements, $block );
		$html .= $block;
	endforeach;

	return $html;
}

function miracle_get_tech_section_requerements( $section = array() ){
	$html = '';
	$file = get_template_directory().'/views_support/block/modal/tech-requerement/requer.php';
	if( count( $section ) > 1 ){
		$html .= '<ul class="tech-requerement__section-requerement section-requerement">';
		foreach( $section as $requerement ){
			$html .= '<li>';
			$block = file_get_contents( $file );
			$name = $requerement['name'];
			$content = $requerement['content'];
			$block = str_replace( '<% name %>', $name, $block );
			$block = str_replace( '<% content %>', $content, $block );
			$html .= $block . '</li>';
		}
		$html .= '</ul>';
	}else{
		$block = file_get_contents( $file );
		$name = $section[0]['name'];
		$content = $section[0]['content'];
		$block = str_replace( '<% name %>', $name, $block );
		$block = str_replace( '<% content %>', $content, $block );
		$html .= $block;
	}
	return $html;
}

function miracle_get_product_cards(){
	$html = '';
	$file = get_template_directory().'/views_support/block/product-card/product-card.php';
	$direction_file = get_template_directory().'/views_support/block/product-card/direction.php';
	$active_product = array();
	if( is_page_template( 'pagetemplates/main.php' ) ):
		$products = get_field( 'miracle-main-page-price-list-product-posts' );
		foreach ( $products as $product ):
			$category = get_field( 'miracle-product-post-category', $product->ID );
			if( !in_array( $category, $active_product) ):
				array_push( $active_product, $category );
			endif;
		endforeach;

		foreach( $active_product as $cat ):
			$block = file_get_contents( $file );
			$image = get_field( 'miracle-product-category-image', $cat );
			$name  = $cat->name;
			$direction = '';
			$event = true;
			foreach ( $products as $product ):
				$category = get_field( 'miracle-product-post-category', $product->ID )->term_id;
				if( $cat->term_id == $category ):
					$direction_name = $product->post_title;
					$direction_class = ( $event ) ? 'product-card__direction_bg-gray' : '';
					$event = !$event;
					$direction_block = file_get_contents( $direction_file );
					$direction_block = str_replace( '<% class %>', $direction_class, $direction_block );
					$direction_block = str_replace( '<% name %>', $direction_name, $direction_block );
					$direction .= $direction_block;
				endif;
			endforeach;
			$block = str_replace( '<% name %>', $name, $block );
			$block = str_replace( '<% image %>', $image, $block );
			$block = str_replace( '<% direction %>', $direction, $block );
			$html .= $block;
		endforeach;
	endif;
	return $html;
}

function miracle_get_mir_slider_slides(){
	$html = '';
	$file = get_template_directory().'/views_support/block/mir-slider/slide.php';
	$feedbacks = get_field( 'miracle-main-page-feedback-posts' );

	foreach( $feedbacks as $feedback ):
		$block   = file_get_contents( $file );
		$autor   = get_field( 'miracle-post-feedback-autor', $feedback->ID );
		$content = get_field( 'miracle-post-feedback-about', $feedback->ID );
		$work    = miracle_get_mir_slider_work_info( $feedback->ID );
		$video   = get_field( 'miracle-post-feedback-youtube-video', $feedback->ID );
		$items   = miracle_get_mir_slider_carousel( $feedback->ID );

		$block = str_replace( '<% autor %>', $autor, $block );
		$block = str_replace( '<% content %>', $content, $block );
		$block = str_replace( '<% work %>', $work, $block );
		$block = str_replace( '<% video %>', $video, $block );
		$block = str_replace( '<% items %>', $items, $block );

		$html .= $block;
	endforeach;

	return $html;
}

function miracle_get_mir_slider_work_info( $id ){
	$html  = '';
	$file  = get_template_directory().'/views_support/block/mir-slider/work-info.php';
	$infos = get_field( 'miracle-post-feedback-work-description', $id );

	$bollean = false;
	$first   = true;
	foreach ( $infos as $info ):
		$block   = file_get_contents( $file );
		$class   = ( $first )   ? 'slide__content-attr_first ' : '';
		$class   = ( $bollean ) ? $class . 'slide__content-attr_even' : $class;
		$bollean = !$bollean;  $first = false;
		$title   = $info['title'];
		$content = $info['content'];

		$block = str_replace( '<% title %>', $title, $block );
		$block = str_replace( '<% content %>', $content, $block );
		$block = str_replace( '<% class %>', $class, $block );

		$html   .= $block;
	endforeach;
	
	return $html;
}

function miracle_get_mir_slider_carousel( $id ){
	$html   = '';
	$file   = get_template_directory().'/views_support/block/mir-slider/carousel-item.php';
	$images = get_field( 'miracle-post-feedback-work-photo', $id );

	foreach ( $images as $image ):
		$block   = file_get_contents( $file );
		$src     = $image['url'];
		$alt     = $image['alt'];
		$title   = $image['caption'];

		$block = str_replace( '<% src %>', $src, $block );
		$block = str_replace( '<% title %>', $title, $block );
		$block = str_replace( '<% alt %>', $alt, $block );

		$html   .= $block;
	endforeach;
	
	return $html;
}

function miracle_get_question_tabs(){
	$html = '';
	$file = get_template_directory().'/views_support/block/question/tab.php';
	$questions = get_field( 'miracle-main-page-question-blocks' );

	$bollean = true;
	foreach( $questions as $question ):
		$block    = file_get_contents( $file );
		$class    = ( $bollean ) ? 'mir-tab_margin-right' : '';
		$bollean  = !$bollean;
		$quest    = $question['question'];
		$answer   = $question['answer'];

		$block = str_replace( '<% class %>', $class, $block );
		$block = str_replace( '<% question %>', $quest, $block );
		$block = str_replace( '<% answer %>', $answer, $block );

		$html   .= $block;
	endforeach;

	return $html;
}
<?php
	
	define( 'THEME', get_template_directory() );
	get_header();
	global $post;
	$cat = get_the_category($post->ID)[0];

	$post_thumbnail_id = get_post_thumbnail_id( $post->ID );
	$image_title       = get_post( $post_thumbnail_id )->post_title;
	$image = wp_get_attachment_image( $post_thumbnail_id, 'full', false, array( 'title'=>$image_title ) );

	$data = get_the_date( 'd.m.Y', $post->ID );

	$blog_link = get_post_type_archive_link('post');
?>
<div class="page-bg">
	<section class="miracle-page">
		<div class="miracle-page__sidebar sidebar">
			<?php get_sidebar(); ?>
		</div>
		<div class="miracle-page__breadcrumbs breadcrumbs">
			<?= miracle_get_post_breadcrumbs( $cat->name, get_category_link( $cat ), $post->post_title ) ?>
		</div>
		<div class="miracle-page__page-content">
			<h2 class="page-content__title page-content__title_uppercase"><?= $post->post_title ?></h2>
			<div class="post">
				<div class="post__image">
					<?= $image ?>
				</div>
				<div class="post__post-content">
					<?= $post->post_content ?>
				</div>
				<div class="post-card">
					<div class="post-card__bottom">
						<p class="post-card__date">
							<i class="post-card__date-icon miracle-icon-calendar"></i>
							<?= $data ?>
						</p>
						<div class="social-icons">
							Поделиться: 
								<?php
									if ( function_exists('dynamic_sidebar') ){
										dynamic_sidebar('social-icon');
									}
								?>
              			</div>
					</div>
				</div>
			</div>
			<a href="<?= $blog_link ?>" class="page-content__button button" data-page="post">
				Вернуться к списку статей
			</a>
			<!-- <div class="category-nav">
				<h4 class="category-nav__title">Наши услуги</h4>
				<ul>
					<li>Услуга 1</li>
					<li>Услуга 2</li>
					<li>Услуга 3</li>
					<li>Услуга 4</li>
					<li>Услуга 5</li>
					<li>Услуга 6</li>
					<li>Услуга 7</li>
					<li>Услуга 8</li>
				</ul>
			</div> -->
		</div>
	</section>
	<?php
		$image     = 'http://press.pro/wp-content/uploads/2017/08/1.jpg';
		$attachment = 'fixed';

		include( get_template_directory() . '/views_support/main/form-query.php' );
	?>

	<?php comments_template(''); ?>

</div>


<?php
	$posttags = get_the_tags( $wp_query->post->ID );
	$other_posts = get_posts( array( 'orderby'=>'rand', 'numberposts'=>12 ) );
?>
<div>
	<?php if( count( $posttags ) > 0 ): ?>
	<div class="tags">
		<h3 class="tags__title">Теги:</h3>
		<?php
			$iterator = 1;
			foreach( $posttags as $tag ):
				$after_tag = ( $iterator == count($posttags) ) ? '.':',';
				$iterator++;
		?>
			<a href="<?= get_tag_link( $tag->term_id ) ?>" class="tags__link"><?= $tag->name ?></a><?= $after_tag ?> 
		<?php
			endforeach;
		?>
	</div>
	<?php endif; ?>

	<div class="simple-posts" style="max-width: 117rem; margin: 0 auto;">
		<div class="simple-posts__category-nav category-nav">
			<h4 class="category-nav__title">Похожие статьи</h4>
			<ul class="category-nav__simple-posts">

				<?php
					foreach( $other_posts as $other_post ):
				?>
				<li class="category-nav__simple-posts-item">
					<a href="<?= get_post_permalink( $other_post->ID ) ?>" class="category-nav__simple-posts-link">
						<i class="miracle-icon-arrow-right"></i><?= $other_post->post_title ?>
					</a>
				</li>
				<?php
					endforeach;
				?>

			</ul>
		</div>
	</div>

</div>

<?php
	get_footer();
?>
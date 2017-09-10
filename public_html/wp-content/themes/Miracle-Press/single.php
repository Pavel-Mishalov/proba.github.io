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
						<div class="social-icons">Поделиться: Место под иконки</div>
					</div>
				</div>
			</div>
			<a href="<?= $blog_link ?>" class="page-content__button button" data-page="post">
				Вернуться к списку статей
			</a>
			<div class="category-nav">
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
			</div>
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
	get_footer();
?>
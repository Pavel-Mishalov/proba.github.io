<?php
	
	define( 'THEME', get_template_directory() );
	get_header();
	global $category;
	$cat= get_category( get_query_var('cat') );
?>
<div class="page-bg">
	<section class="miracle-page">
		<div class="miracle-page__sidebar sidebar">
			<?php get_sidebar(); ?>
		</div>
		<div class="miracle-page__breadcrumbs breadcrumbs">
			<?= miracle_get_breadcrumbs( $cat->name ) ?>
		</div>
		<div class="miracle-page__page-content">
			<h2 class="page-content__title"><?= $cat->name ?></h2>
			<div class="archive-post">
				<?= miracle_get_post_cards( 6, 0, $cat->slug ) ?>
			</div>
			<button class="page-content__button button" data-cat="<?= $cat->slug ?>">Показать больше статей</button>
		</div>
	</section>
</div>
<?php
	get_footer();
?>
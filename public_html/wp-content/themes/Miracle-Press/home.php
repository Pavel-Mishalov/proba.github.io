<?php
	
	define( 'THEME', get_template_directory() );
	get_header();

?>
<div class="page-bg">
	<section class="miracle-page">
		<div class="miracle-page__sidebar sidebar">
			<?php get_sidebar(); ?>
		</div>
		<div class="miracle-page__breadcrumbs breadcrumbs">
			<?= miracle_get_breadcrumbs() ?>
		</div>
		<div class="miracle-page__page-content">
			<h2 class="page-content__title">НАШ БЛОГ</h2>
			<div class="archive-post">
				<?= miracle_get_post_cards() ?>
			</div>
			<button class="page-content__button button" data-page="blog">Показать больше статей</button>
		</div>
	</section>
</div>
<?php
	get_footer();
?>
<?php
	
	define( 'THEME', get_template_directory() );
	get_header();
	$search_string = get_query_var('s');
?>
<div class="page-bg">
	<section class="miracle-page">
		<div class="miracle-page__sidebar sidebar">
			<?php get_sidebar(); ?>
		</div>
		<div class="miracle-page__breadcrumbs breadcrumbs">
			<?= miracle_get_breadcrumbs( 'поиск' ) ?>
		</div>
		<div class="miracle-page__page-content">
			<h2 class="page-content__title"><?= $search_string ?></h2>
			<div class="archive-post">
				<?= miracle_get_post_cards( 6, 0, false, false, $search_string ) ?>
			</div>
			<button class="page-content__button button" data-search="true">Показать больше статей</button>
		</div>
	</section>
</div>
<?php
	get_footer();
?>
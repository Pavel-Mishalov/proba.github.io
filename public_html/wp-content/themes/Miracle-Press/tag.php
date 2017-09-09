<?php
	
	define( 'THEME', get_template_directory() );
	get_header();
	$tag_slug = get_query_var('tag');
	$tag = get_term_by( 'slug', $tag_slug, 'post_tag' );
?>
<div class="page-bg">
	<section class="miracle-page">
		<div class="miracle-page__sidebar sidebar">
			<?php get_sidebar(); ?>
		</div>
		<div class="miracle-page__breadcrumbs breadcrumbs">
			<?= miracle_get_breadcrumbs( $tag->name ) ?>
		</div>
		<div class="miracle-page__page-content">
			<h2 class="page-content__title"><?= $tag->name ?></h2>
			<div class="archive-post">
				<?= miracle_get_post_cards( 6, 0, false, $tag_slug ) ?>
			</div>
			<button class="page-content__button button" data-tag="<?= $tag_slug ?>">Показать больше статей</button>
		</div>
	</section>
</div>
<?php
	get_footer();
?>
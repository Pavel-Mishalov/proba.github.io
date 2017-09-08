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
			
		</div>
		<div class="miracle-page__page-content">
			
		</div>
	</section>
</div>
<?php
	get_footer();
?>
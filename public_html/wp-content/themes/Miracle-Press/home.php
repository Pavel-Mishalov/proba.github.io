<?php
	
	define( 'THEME', get_template_directory() );
	get_header();

?>
	<section class="main-blog">
		<div class="sidebar">
			
		</div>
		<div class="breadcrumbs">
			
		</div>
		<div class="blog-posts">
			
		</div>
	</section>
	<style>
		.main-blog{
			height: 40rem;
			background: yellow;
			max-width: 114rem;
			margin: 0 auto;
			display: grid;
			grid-gap: 1rem 3rem;
			grid-template: auto 1fr / 1fr 3fr;
		}
		.sidebar{
			grid-column-start: 1;
			grid-column-end: 2;
			grid-row-start: 1;
			grid-row-end: 3;
			background-color: red;
		}
		.breadcrumbs{
			grid-column-start: 2;
			grid-column-end: 5;
			grid-row-start: 1;
			background-color: blue;
			grid-row-end: 2;
			height: 10px;
		}
		.blog-posts{
			grid-column-start: 2;
			grid-column-end: 5;
			grid-row-start: 2;
			background-color: aqua;
			grid-row-end: 3;
		}
	</style>
<?php
	get_footer();
?>
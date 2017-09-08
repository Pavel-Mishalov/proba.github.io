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
		.main-blog {
  height: 40rem;
  background: yellow;
  max-width: 114rem;
  margin: 0 auto;
  display: -ms-grid;
  display: grid;
  grid-gap: 1rem 3rem;
  grid-template: auto 1fr / 1fr 3fr;
  -ms-grid-columns: 1fr 3fr;
  -ms-grid-rows: auto 1fr;
}

.sidebar {
  -ms-grid-column: 1;
      grid-column-start: 1;
  grid-column-end: 2;
  -ms-grid-row: 1;
      grid-row-start: 1;
  grid-row-end: 3;
  background-color: red; }

.breadcrumbs {
  -ms-grid-column: 2;
      grid-column-start: 2;
  grid-column-end: 5;
  -ms-grid-row: 1;
      grid-row-start: 1;
  background-color: blue;
  grid-row-end: 2;
  height: 10px; }

.blog-posts {
  -ms-grid-column: 2;
      grid-column-start: 2;
  grid-column-end: 5;
  -ms-grid-row: 2;
      grid-row-start: 2;
  background-color: aqua;
  grid-row-end: 3; }
	</style>
<?php
	get_footer();
?>
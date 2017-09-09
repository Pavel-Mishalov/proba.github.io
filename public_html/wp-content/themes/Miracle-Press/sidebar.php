<div class="category-nav">
	<h4 class="category-nav__title">Темы статей</h4>
	<ul class="category-nav__nav-tab nav-tab">
		<?= miracle_get_category_tabs_item( get_query_var('category_name') ) ?>
	</ul>
</div>

<div class="category-nav">
	<h4 class="category-nav__title">Поиск по статьям</h4>
	<?php get_search_form(); ?>
</div>

<div class="category-nav category-nav_paddings">
	<?= miracle_get_subs_form() ?>
</div>
<div class="category-nav">
	<h4 class="category-nav__title">Темы статей</h4>
	<ul class="category-nav__nav-tab nav-tab">

	<?php for($i=5;$i>0;$i--): ?>
		<li class="nav-tab__category">
			<p class="nav-tab__link">
				Основные требования к макете<i class="miracle-icon-chevron-down nav-tab__icon"></i>
			</p>
			<ul class="nav-tab__posts">
				<li class="nav-tab__post-item">
					<a href="#" class="nav-tab__post-link">Статья 1</a>
				</li>
				<li class="nav-tab__post-item">
					<a href="#" class="nav-tab__post-link">Статья 2</a>
				</li>
				<li class="nav-tab__post-item">
					<a href="#" class="nav-tab__post-link">Статья 3</a>
				</li>
				<li class="nav-tab__post-item">
					<a href="#" class="nav-tab__post-link">Статья 4</a>
				</li>
			</ul>
		</li>
	<?php endfor; ?>

	</ul>
</div>

<div class="category-nav">
	<h4 class="category-nav__title">Поиск по статьям</h4>

	<?php get_search_form(); ?>
</div>

<div class="category-nav category-nav_paddings">
	
	<?= miracle_get_subs_form() ?>

</div>
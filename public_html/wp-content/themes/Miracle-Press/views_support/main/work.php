<div id="work" class="work">

	<div class="work__section-title section-title">
		<h3 class="section-title__title"><?= $title ?></h3>
	</div>

	<div class="work__work-categories work-categories">
		<button class="work-categories__item work-categories__item_active">Все</button>
		<?= miracle_get_work_category() ?>
	</div>

	<div class="work__works works">
		<?= miracle_get_work_cards(6) ?>
	</div>

	<button class="work__button button">Показать еще</button>

</div>
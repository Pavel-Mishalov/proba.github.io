<div id="work" class="work">

	<div class="work__section-title section-title">
		<h3 class="section-title__title"><?= $title ?></h3>
	</div>

	<div class="work__work-categories work-categories">
		<button class="work-categories__item">Все</button>
		<button class="work-categories__item">Широкоформатная печать</button>
		<button class="work-categories__item work-categories__item_active">Интерьерная печать</button>
		<button class="work-categories__item">Офсетная печать</button>
		<button class="work-categories__item">Плоттерная резка</button>
		<button class="work-categories__item">Шелкография</button>
		<button class="work-categories__item">Фрезировка</button>
		<button class="work-categories__item">Фото и видеосъемка</button>
		<button class="work-categories__item">Услуги по монтажу</button>
	</div>

	<div class="work__works works">
		<?= miracle_get_work_cards() ?>
	</div>

	<button class="work__button button">Показать еще</button>

</div>
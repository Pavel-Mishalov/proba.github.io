<div id="feedback" class="feedback">
	<div class="feedback__section-title section-title">
		<h3 class="section-title__title"><?= $title ?></h3>
	</div>

	<div class="feedback__mir-slider mir-slider">
		<div class="mir-slider__slider-nav slider-nav">
			<button class="slider-nav__button-prev" disabled="disabled"><i class="miracle-icon-left-duble-chevron"></i> Предыдущий отзыв</button>
			<button class="slider-nav__button-next">Следующий отзыв <i class="miracle-icon-left-double-chevron"></i></button>
			<p class="slider-nav__title"></p>
		</div>

		<?= miracle_get_mir_slider_slides() ?>
	
	</div>

</div>
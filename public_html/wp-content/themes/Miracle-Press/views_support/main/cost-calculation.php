<div id="cost-calculation" class="cost-calculation" style="background-image: url('<?= $image ?>'); background-attachment: <?= $atch ?>;">

	<div class="cost-calculation__wrap-form wrap-form">
		<div class="wrap-form__form-title form-title">
			<h3 class="form-title__title">Получите расчет стоимости - Это бесплатно!</h3>
			<p class="form-title__subtitle">Все поля со знаком <span class="form-title__subtitle_color">*</span> обязательны для заполнения</p>
		</div>
		<div class="wrap-form__form form">
			<?= miracle_get_cost_calculation_form() ?>
		</div>
	</div>

</div>
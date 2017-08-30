<div id="header" class="first-screen" style="background-image: url('<?= $image ?>'); background-attachment: <?= $atch ?>;">
	<div class="first-screen__header-title header-title">
		<h1 class="header-title__title"><?= $title ?></h1>
		<h3 class="header-title__subtitle"><?= $subtitle ?></h3>
	</div>

	<div class="first-screen__company-info company-info">
		<?= miracle_get_company_info() ?>
	</div>

	<div class="first-screen__wrap-form wrap-form">
		<div class="wrap-form__form-title form-title">
			<h3 class="form-title__title">Получите расчет стоимости - Это бесплатно!</h3>
			<p class="form-title__subtitle">Все поля со знаком <span class="form-title__subtitle_color">*</span> обязательны для заполнения</p>
		</div>
		<div class="wrap-form__form form">
			<?= miracle_get_header_form() ?>
		</div>
	</div>
</div>
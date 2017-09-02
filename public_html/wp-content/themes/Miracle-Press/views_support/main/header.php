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

<div class="modal">
	<div class="modal__tech-requerement tech-requerement">
	
		<div class="tech-requerement__section-title section-title">
			<h3 class="section-title__title">Технические требования к макетам</h3>
		</div>

		<h4 class="tech-requerement__section">
			Для печати принимаются:
		</h4>

		<ul class="tech-requerement__section-requerement section-requerement">
			<li>
				<p class="section-requerement__title">Изображение в векторных форматах CDR.</p>
				<p class="section-requerement__content">
					Все шрифты должны быть переведены в кривые. Если макет предоставляется в масштабе 1:10, то для обводок должна быть установлена опция "масштабировать" ("сохранять пропорции"). Для изображений со светлыми полями необходимо сделать по периметру обводку черного цвета шириной в один пиксель. Цветовое пространство - <span>CMYK</span>.
				</p>
			</li>
			<li>
				<p class="section-requerement__title">Принимаются так же:</p>
				<p class="section-requerement__content">
					Растровые изображения в форматах <span>PDF, JPEG, TIFF</span> в натуральный размер (1:1),
					с объединенными млоями, без дополнительных альфа-каналов (channels) и путей (paths). Шрифты растрированые. Цветовое пространство - <span>CMYK</span>. Разрешение - не менее <span>300 dpi</span> (для форматов A3 и меньше), <span>72-200 dpi</span> (для форматов крупнее, чем A3)
				</p>
			</li>
		</ul>

		<h4 class="tech-requerement__section">
			Для резки фигур и букв из пенопласта, пластика, пленки
		</h4>

		<p class="section-requerement__content">
			Векторные файлы в форматах <span>PDF, CDR (до X4)</span> в кривых, с замкнутыми контурам, размер 1:1.
		</p>

		<i class="tech-requerement__close-button miracle-icon-cancel"></i>

	</div>
</div>
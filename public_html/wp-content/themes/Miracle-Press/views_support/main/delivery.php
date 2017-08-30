<div id="delivery" class="delivery">

	<div class="delivery__section-title section-title">
		<h3 class="section-title__title"><?= $title ?></h3>
		<p class="section-title__subtitle section-title__subtitle_width-color">
			<?= $subtitle ?>
		</p>
	</div>

	<div class="delivery__cash cash">
		<?= miracle_get_delivery_info() ?>
		<?= miracle_get_order_info() ?>		
	</div>

</div>
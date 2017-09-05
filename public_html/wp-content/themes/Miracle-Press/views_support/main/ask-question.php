<div
	id="ask-question"
	class="ask-question"
	style="
		background-image: url('<?= $image ?>');
		background-attachment: <?= $attachment ?>">

	<div class="ask-question__wrap-form wrap-form">
		<div class="wrap-form__form-title form-title">
			<h3 class="form-title__title">У вас остались вопросы?</h3>
			<p class="form-title__subtitle">Задайте их нам и мы с радостью ответим на них</p>
		</div>
		<div class="wrap-form__form form">
			<?= miracle_get_ask_question_form() ?>
		</div>
	</div>

</div>
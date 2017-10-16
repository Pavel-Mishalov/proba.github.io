<?php
$var = <<<EOT
<form action="#">
	<div class="input input_width-expanded">
		<label for="aaa" class="input__label">Введите Вашe имя:</label>
		<input id="aaa" class="input__text-input" placeholder="Иванов Иван" type="text">
	</div>
	<div class="input input_width-expanded">
		<label for="aaa3" class="input__label">Введите Ваш телефон:</label>
		<input id="aaa3" class="input__text-input" placeholder="+7 (123) 456 789 44" type="text">
	</div>
	<div class="input input_width-expanded">
		<label for="aaa31" class="input__label">Укажите удобное время для звонка:</label>
		<input id="aaa31" class="input__text-input" placeholder="Например 16:00" type="text">
	</div>
	<div class="input input_submit-expanded">
		<input id="bbb14" class="input__submit" value="Перезвоните мне" type="submit">
		<p class="input__text-help">Когда вы заполняете телефон и другие данные, Вы автоматически соглашаетесь с <a href="javascript:void(0)" class="input__text-help_link">правилами обработки персональных данных</a></p>
	</div>
</form>
EOT;

return $var;
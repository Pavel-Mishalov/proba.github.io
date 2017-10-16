<?php
$form = <<<EOT
<form action="javascript:void(0)">

	<div class="form__display">

		<div class="input input_width-medium input_padding-right">
			<label for="aaa3" class="input__label">Введите Ваш телефон:<span class="input__label_color">*</span></label>
			<input id="aaa3" class="input__text-input" type="text" placeholder="+7 (123) 456 789 44">
			<p class="input__text-help">Чтобы мы могли связаться с Вами в течении <span class="input__text-help_color">15 минут</span></p>
		</div>

		<div class="input input_width-medium input_padding-right">
			<label for="ccc3" class="input__label">Введите Ваш email:</label>
			<input id="ccc3" class="input__text-input" type="email" placeholder="Vashapochta@mail.ru">
			<p class="input__text-help">Отправить на него смету.</p>
		</div>

		<div class="input input_width-big">
			<label for="bbb3" class="input__label"></label>
			<input id="bbb3" class="input__submit input__submit_yellow" type="submit" value="Хочу получить расчет стоимости">
			<p class="input__text-help">Когда вы заполняете телефон и другие данные, Вы автоматически соглашаетесь с <a href="javascript:void(0)" class="input__text-help_link">правилами обработки персональных данных</a></p>
		</div>

	</div>

	<div class="form__edition edition">

		<div class="expanded-button">
			<button class="expanded-button__button">Свернуть</button>
		</div>
	
		<div class="edition__form-title form-title">
			<h3 class="form-title__title">Дополнительная информация</h3>
			<p class="form-title__subtitle">Если на какой то пункт, затрудняетеся ответить, то просто оставьте его пустым.</p>
		</div>

		<div class="edition__textarea textarea">
			<label for="ccc4" class="textarea__label">Описание задачи:</label>
			<textarea id="ccc4" class="textarea__text-input" placeholder="Нужно напечатать рекламную продукцию к открытию магазина (визитки, буклеты), а так же сделать световую вывеску"></textarea>
		</div>

		<div class="edition__input edition__input_padding-right input">
			<label for="bbb5" class="input__label">Вид услуги:</label>
			<input id="bbb5" class="input__text-input" type="text" placeholder="Визитки банер">
		</div>

		<div class="edition__input edition__input_padding-right input">
			<label for="bbb6" class="input__label">Материал:</label>
			<input id="bbb6" class="input__text-input" type="text" placeholder="Пленка соакал / бумага 300 гр">
		</div>

		<div class="edition__input edition__input_padding-right input">
			<label for="bbb7" class="input__label">Количество (тираж, метраж):</label>
			<input id="bbb7" class="input__text-input" type="text" placeholder="10 000шт/ 100м2">
		</div>

		<div class="edition__input input">
			<label for="bbb8" class="input__label">Размер (формат):</label>
			<input id="bbb8" class="input__text-input" type="text" placeholder="1000 мм х 7000 мм / 10см х 15см">
		</div>

		<div class="edition__input edition__input_padding-right input">
			<label for="bbb9" class="input__label">Сроки:</label>
			<input id="bbb9" class="input__text-input" type="text" placeholder="к 10.07 / 3 дня">
		</div>

		<div class="edition__input edition__input_padding-right input">
			<label for="bbb10" class="input__label">Доставка/самовывоз/монтаж:</label>
			<input id="bbb10" class="input__text-input" type="text" placeholder="Напишите, что вампотребуется">
		</div>

		<div class="edition__input edition__input_padding-right input">
			<label for="bbb11" class="input__label">Способ оплаты:</label>
			<input id="bbb11" class="input__text-input" type="text" placeholder="Наличными / безналичный расчет">
		</div>

		<div class="edition__input input">
			<label for="bbb12" class="input__label">Прикрепите файлы: фото или проект:</label>
			<input id="bbb12" class="input__file-input" type="file" placeholder="Файл">
			<button class="input__file-input">Файл не выбран</button>
		</div>

		<div class="edition__textarea edition__textarea_small-margin textarea">
			<label for="ccc13" class="textarea__label">Дополнительная информация:</label>
			<textarea id="ccc13" class="textarea__text-input" placeholder="Нужен выезд специалиста для замера вывески"></textarea>
		</div>

		<div class="input input_submit-center">
			<label for="bbb14" class="input__label"></label>
			<input id="bbb14" class="input__submit" type="submit" value="Хочу получить расчет стоимости">
			<p class="input__text-help">Когда вы заполняете телефон и другие данные, Вы автоматически соглашаетесь с <a href="javascript:void(0)" class="input__text-help_link">правилами обработки персональных данных</a></p>
		</div>
	
	</div>

</form>
EOT;

return $form;
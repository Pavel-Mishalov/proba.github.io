<div class="comment-form">
	
	<div class="comment-form__wrap-form wrap-form">
		<div class="wrap-form__form-title form-title">
			<h3 class="form-title__title">Написать комментарий</h3>
		</div>

		<div class="wrap-form__form form">
			<form action="/wp-comments-post.php" method="post">

				<div class="form__display">

					<div class="input input_margin-right">
						<label for="c2cc" class="input__label">Введите Ваше имя:</label>
						<input id="c2cc" class="input__text-input" name="author" type="text" value="" aria-describedby="email-notes" required="required" placeholder="Иванов Иван">
					</div>

					<div class="input">
						<label for="c5cc" class="input__label">Введите Ваш email:</label>
						<input id="c5cc" class="input__text-input" name="email" type="email" value="" aria-describedby="email-notes" aria-required='true' required="required" placeholder="Vashapochta@mail.ru">
					</div>
				
				</div>

				<div class="textarea textarea_margin-top">
					<label for="cwecc4" class="textarea__label">Ваш комментарий:</label>
					<textarea id="cwecc4" class="textarea__text-input" name="comment" aria-describedby="email-notes" required="required" rows="3" placeholder="Комментарий"></textarea>
				</div>

				<div style="padding-top: 2rem;display: flex;flex-wrap: wrap;align-items: center;">
					<script src='https://www.google.com/recaptcha/api.js'></script>
					<div class="g-recaptcha" data-sitekey="6LcL2CsUAAAAAB9QSG1sqkRMOgDSoHqaRlNN4ACs"></div>
					
					<div class="input input_submit-center" style="margin: 0 0 0 26%">
						<input class="input__submit" type="submit" value="Опубликовать">
						<p class="input__text-help">
							Когда вы заполняете телефон и другие данные, Вы автоматически соглашаетесь с 
							<a href="javascript:void(0)" class="input__text-help_link">правилами обработки персональных данных</a>
						</p>
					</div>
				</div>

			<input type='hidden' name='comment_post_ID' value='<?= get_queried_object_id() ?>'/>
			<input type='hidden' name='comment_parent' value='0' />
			</form>
		</div>
	</div>

<?php
	$post = get_post(get_queried_object_id());
	$comments_count = $post->comment_count;
	if( $comments_count > 0 ) :
		$post_id = get_queried_object_id();
		$comquery = new WP_Comment_Query( array( 'post_id'=>$post_id ) );
		foreach( $comquery->comments as $comment ):
			$autor     = $comment->comment_author;
			$date_day  = get_comment_date( 'd.m.Y', $comment->comment_ID );
			$date_time = get_comment_date( 'G:i', $comment->comment_ID );
			$comment   = $comment->comment_content;
?>
<div class="comment">
	<div class="comment__head">
		<p class="comment__author"><?= $autor ?></p>
		<p class="comment__date">
			<i class="miracle-icon-calendar"></i>
			<?= $date_day ?>
			<span><?= $date_time ?></span>
		</p>
	</div>
	<div class="comment__body">
		<p><?= $comment ?></p>
	</div>
</div>

<?php
		endforeach;
	endif;
?>
</div>
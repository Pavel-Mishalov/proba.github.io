<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" style="padding: 1.5rem">
	<div class="form__display">
		<div class="input">
			<label for="the_search" class="input__label">Что искать:</label>
			<input id="the_search" class="input__text-input"  type="search" name="s" value="<?php echo get_search_query(); ?>" placeholder="Слово или фраза">
		</div>
	</div>
</form>
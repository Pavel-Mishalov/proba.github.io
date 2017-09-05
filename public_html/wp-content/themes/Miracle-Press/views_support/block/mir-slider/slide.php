<div class="mis-slider__slide slide">
	<p class="slide__title"><% autor %></p>
	
	<div class="slide__content">
		
		<h3 class="slide__content-title">О клиенте:</h3>
		
		<p class="slide__content-description">
			<% content %>
		</p>

		<% work %>

	</div>

	<div class="slide__video">
		<div class="owl-carousel owl-theme feedback-carousel">
			<div class="item-video">
				<a class="owl-video" href="<% video %>"></a>
			</div>
		</div>
	</div>

	<div class="slide__owl">
		<h3 class="slide__owl-title">Фотографии работы</h3>
		<div class="slide__owl-carousel" style="padding: 0 60px">
			<div class="owl-carousel owl-theme slide__owl-carousel-slider">
				<% items %>
			</div>
		</div>
	</div>
</div>
	<body <?php body_class($class); ?>>
		<!--[if lt IE 7]>
			<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->

<header id="top-section">


	<div class="canvas-menu canvas-menu_animation-hide">
		<ul>
			<?= miracle_get_menu_item( 'canvas-menu' ); ?>
		</ul>
		<i class="canvas-menu__close-button miracle-icon-cancel"></i>
	</div>

	
	<div class="nav-mobile__sticky-container sticky-container" data-sticky-container>
		<div class="nav-mobile nav-mobile_scroll sticky" data-sticky data-margin-top="0" data-sticky-on="small">
			<i class="nav-mobile__icon"></i>
			<div class="nav-mobile__text-logo text-logo">
				<h1 class="text-logo__header">Плакатоф</h1>
				<p class="text-logo__subheader">Типография полного цикла</p>
			</div>
		</div>
	</div>

	<div class="navigation__sticky-container sticky-container" data-sticky-container>
		<div class="navigation sticky" data-sticky data-margin-top="0" data-sticky-on="small">
			<ul class="navigation__menu menu">
				<?= miracle_get_menu_item( 'menu' ); ?>
				<li class="menu__item menu__item_last"><a href="mailto:Info@plakatof.ru" class="menu__email">Info@plakatof.ru</a></li>
			</ul>
		</div>
	</div>

	<div class="after-navigation">
		<div class="after-navigation__text-logo text-logo">
			<h1 class="text-logo__header">Плакатоф</h1>
			<p class="text-logo__subheader">Типография полного цикла</p>
		</div>

		<button class="after-navigation__button button">Перезвоните мне</button>

		<div class="after-navigation__contacts-header contacts-header">
			<h3 class="contacts-header__phone">+7 (495) 454-44-43</h3>
			<p class="contacts-header__schedule">Пн-Пт с 10:00 до 19:00</p>
		</div>

		<div class="after-navigation__requer requer">
			<i class="requer__icon miracle-icon-symbol"></i>
			<a href="#" class="requer__link">
				<span class="requer__header">Технические</span><br>
				<span class="requer__subheader">Требования к макетам</span>
			</a>
		</div>	
	</div>
</header>
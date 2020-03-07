<?php
	/**
		* Template name: Продвижение
	*/
 ?>


<?php get_header(); ?>

<body class="no-scroll seo">

	<header class="header header--page">
		<div class="container header__container">

			<div class="row header__row">
				<div class="line col-lg-4">
				</div>
			</div>

			<div class="row">

				<div class="header__line col-lg-4">
					<a href="<?php echo get_home_url(); ?>" class="header__logo logo">
						<b>FLEX</b>
						<br>
						<span class="title-line">design</span>
					</a>

					<button class="hamburger" type="button">
						<span class="hamburger__box">
							<span class="hamburger__item"></span>
						</span>
					</button>

					<div class="header__language--responsive header__language">
						<?php dynamic_sidebar( 'top-area' ); ?>
					</div>
					
					<p class="header--page__text">unique projects of flax design</p>
					<p class="header--page__title title-line">
						жизнь
						<br>идей
						<b>
							<br>life
							<br>of
							<br>ideas
						</b>
					</p>

				</div>

				<div class="header__line col-lg-4 order-lg-1 order-md-12">
					<nav class="nav">
						<?php 
							wp_nav_menu( array(
								'menu'=>'menu',
								'menu_class'=>'menu',
							    'theme_location'=>'menu1',
							) );
						?>
					</nav>

					<div class="header__next">
						<a href="#top">скроль вниз<span class="header__next_title-line title-line"></span></a>
					</div>
				</div>

				<div class="header__line col-lg-4 order-lg-12 order-md-1">
					<div class="header__language">
						<?php dynamic_sidebar( 'top-area' ); ?>
					</div>

					<div class="header--page__block-title">
						<p class="header--page__sub-title">услуги & цены</p>
						<h1>продвижение<br> <span>сайтов</span></h1>
					</div>

					<span>flex-design web production</span>
				</div>

			</div>
		</div>
	</header>

	<main class="main">
			
		<section class="seo-plan section" id="top">
			<div class="container">

				<div class="seo-plan__container">

					<p class="sub-title">теперь о бизнесе</p>
					<h2>наши проекты решают <br>ряд бизнес задач</h2>

					<div class="site-plan__list">

						<div class="seo-plan__item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/seo-icon1.svg" alt="" width="38" height="38">
							<h3>ПРОДВИЖЕНИЕ <br>САЙТА</h3>
							<p>в ТОП поисковых систем с <br>помощью уникальных <br>статей</p>
						</div>
						
						<div class="seo-plan__item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/seo-icon2.svg" alt="" width="37" height="37">
							<h3>составление <br>семантического <br>ядра, </h3>
							<p>на основе которого <br>строится поисковый <br>механизм</p>
						</div>

						<div class="seo-plan__item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/seo-icon3.svg" alt="" width="37" height="37">
							<h3>Бесплатная <br>установка </h3>
							<p>и настройка SEO <br> сервиса и описание <br>главных страниц </p>
						</div>

						<div class="seo-plan__item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/seo-icon4.svg" alt="" width="37" height="37">
							<h3>полная <br> оптимизация </h3>
							<p>Вашего сайта</p>
						</div>
						<div class="decoration decoration--reverse-bottom"></div>

					</div>

					<div class="decoration"></div>

				</div>
			</div>
		</section>

		<section class="seo-price section section--dark">
			<div class="container">
				<div class="seo-price__container">

					<div class="seo-price__list">
						<div class="seo-price__item">
							<h3>эконом</h3>
							<p>привлечения потенциальных клиентов с поисковых систем. Чтобы продвижение сайтов происходило быстро и эффективно веб студия FlexDesign предлагает различные инструменты в комплексе для решения задач.описания одного товара или услуги </p>
							<span class="seo-price__price"><span>от</span>  30 <span>usd/мес</span></span>
						</div>
						<div class="seo-price__item">
							<h3>стандарт</h3>
							<p>Для раскрутки сайтов наша команда предлагает различные инструменты, чтобы предоставить комплексный подход и сэкономить время клиента. Выполнение поисковой оптимизации сайтов — гарантия повышения целевого трафика для Вашего сайта</p>
							<span class="seo-price__price"><span>от</span> 100 <span>usd/мес</span></span>
						</div>
						<div class="seo-price__item">
							<h3>Премиум</h3>
							<p>Продвижение сайтов в интернете — современный и быстрый способ получения клиентов и повышения продаж для Вашей компании. Наша команда использует различные доступные инструменты и предоставляет комплексный подход для экономии времени клиента</p>
							<span class="seo-price__price"><span>от</span> 150 <span>usd/мес</span></span>
						</div>
					</div>

					<div class="seo-price__link">
						<h3>
							<span></span>
							<span></span>
							<a href="<?php echo get_home_url(); ?>/site" class="link">Создание сайтов<span></span></a>
						</h3>
						<h3 class="site-work__item_click">
							<span></span>
							<span></span>
							<a href="#contacts" class="link">Заказать услугу<span></span></a>
						</h3>
					</div>

				</div>
			</div>
		</section>

		<?php get_template_part( 'parts/form' ); ?>

<?php get_footer(); ?>
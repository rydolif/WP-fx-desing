<?php
	/**
		* Template name: Дизайн EN
	*/
 ?>


<?php get_header(); ?>

<body class="design">

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
								'menu'=>'menu-en',
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
						<h1>дизайн</h1>
					</div>

					<span>flex-design web production</span>
				</div>

			</div>
		</div>
	</header>

	<main class="main">

		<section class="site-plan section" id="top">
			<div class="container">

				<div class="site-plan__container">

					<p class="about__sub-title sub-title">мы создаем сайты</p>
					<h2>работы над <br>веб-проектом</h2>

					<div class="site-plan__list">
						<div class="site-plan__item">
							<div class="site-plan__item_number">01</div>
							<h3>Анализ информации</h3>
							<p>
								Фирменное оформление дизайна 
								<br>начинается с тщательного анализа рода
								<br>деятельности фирмы ее целевой аудитории
								<br>и соответствующей области рынка.
							</p>
						</div>
						<div class="site-plan__item">
							<div class="site-plan__item_number">02</div>
							<h3>Подбор графического <br>решения</h3>
							<p>
								Дизайн  должен быть выдержан в одной 
								<br>стилистике для целостного восприятия 
								<br>Вашего проекта. Цветовую гамму и шрифты, 
								<br> которые будут использоваться, дизайнер 
								<br>подберет с учетом специфики Вашей 
								<br>компании.
							</p>
						</div>						
						<div class="site-plan__item">
							<div class="site-plan__item_number">03</div>
							<h3>Разработка дизайн-макета</h3>
							<p>
								Профессионалы с учетом пожеланий 
								<br>найдут оптимальное решение именно для
								<br>Вашего бизнеса. Команда веб студии
								<br>FlexDesign представит оригинальный,
								<br>стильный и современный дизайн, который
								<br>поможет в развитии Вашей компании.
							</p>
						</div>

						<div class="decoration decoration--reverse-bottom"></div>

					</div>

					<div class="decoration"></div>

				</div>
			</div>
		</section>

		<section class="site-work design-work section section--dark">
			<div class="container">

				<div class="site-work__container">

					<div class="design-work__list site-work__list">
						
						<div class="design-work__item site-work__item">
							<div>
								<div class="site-work__item_dekor"></div>
								<h3>Разработка <br>Логотипа  <span class="title-line"></span></h3>
								<p>Логотип — яркий и узнаваемый графический элемент, представляющий род Вашей деятельности визуальными образами. Разработка логотипа профессионалами поможет создать хороший имидж Вашей компании</p>
								<div class="site-work__item_price"><span>ОТ</span> 50 <span>usd</span></div>
							</div>
						</div>

						<div class="design-work__item site-work__item">
							<div>
								<div class="site-work__item_dekor"></div>
								<h3>Фирменный <br>Cтиль <span class="title-line"></span></h3>
								<p>Фирменный стиль — это визуальная идентификации Вашей Компании. Наша команда поможет создать уникальный фирменный стиль, который выделит Вашу фирму и ее продукцию среди многообразия других</p>
								<div class="site-work__item_price"><span>ОТ</span> 200 <span>usd</span></div>
							</div>
						</div>

						<div class="design-work__item site-work__item">
							<div>
								<div class="site-work__item_dekor"></div>
								<h3>Банер <span class="title-line"></span></h3>
								<p>Баннер — один из эффективных видов интернет-рекламы для продвижения Ваших товаров или услуг. Мы создадим баннер, который визуально привлечет и заинтересует потенциальных клиентов и будет соответствовать имиджу компании, которую он представляет </p>
								<div class="site-work__item_price"><span>от</span> 100 <span>usd</span></div>
							</div>
						</div>

					</div>


					<div class="seo-price__link">
						<h3>
							<span></span>
							<span></span>
							<a href="<?php echo get_home_url(); ?>/site-en" class="link">создание САЙТОВ<span></span></a>
						</h3>
						<h3>
							<span></span>
							<span></span>
							<a href="#contacts" class="link">ПРОДВИЖЕНИЕ САЙТОВ <span></span></a>
						</h3>
					</div>
				</div>


			</div>
		</section>

		<section class="section section--dark">
			<div class="container">

				<div class="portfolio">

					<p class="portfolio__sub-title sub-title">портфолио реализованных дизайнов</p>
					<h2>Получите гарантированый <br>результат <span class="portfolio__title-line title-line"></span></h2>

					<div class="portfolio__slider swiper-container">

						<div class="swiper-wrapper">
							<a href="#" class="portfolio__slider_slide swiper-slide">
								<img src="<?php echo get_template_directory_uri(); ?>/img/slide1.jpg" alt="">
								<p>studio minimal <span class="title-line"></span></p>
							</a>
							<a href="#" class="portfolio__slider_slide swiper-slide">
								<img src="<?php echo get_template_directory_uri(); ?>/img/slide2.jpg" alt="">
								<p>studio minimal <span class="title-line"></span></p>
							</a>
							<a href="#" class="portfolio__slider_slide swiper-slide">
								<img src="<?php echo get_template_directory_uri(); ?>/img/slide3.jpg" alt="">
								<p>studio minimal <span class="title-line"></span></p>
							</a>
							<a href="#" class="portfolio__slider_slide swiper-slide">
								<img src="<?php echo get_template_directory_uri(); ?>/img/slide1.jpg" alt="">
								<p>studio minimal <span class="title-line"></span></p>
							</a>
							<a href="#" class="portfolio__slider_slide swiper-slide">
								<img src="<?php echo get_template_directory_uri(); ?>/img/slide2.jpg" alt="">
								<p>studio minimal <span class="title-line"></span></p>
							</a>
							<a href="#" class="portfolio__slider_slide swiper-slide">
								<img src="<?php echo get_template_directory_uri(); ?>/img/slide3.jpg" alt="">
								<p>studio minimal <span class="title-line"></span></p>
							</a>
						</div>
					
						<div class="swiper-button-prev"> <span class="portfolio__prev title-line"></span> назад</div>
						<div class="swiper-button-next"> <span class="portfolio__next title-line"></span> далее</div>

					</div>
				</div>

			</div>
		</section>

		<?php get_template_part( 'parts-en/form' ); ?>


<?php get_footer(); ?>
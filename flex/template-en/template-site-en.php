<?php
	/**
		* Template name: Создание сайтов EN
	*/
 ?>


<?php get_header(); ?>
<body class="site">

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
						<h1>создание<br> <span>сайтов</span></h1>
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
					<h2>соответствующие <br>задачам вашего <br>бизнеса</h2>

					<div class="site-plan__list">
						<div class="site-plan__item">
							<div class="site-plan__item_number">01</div>
							<h3>индивидуальный дизайн</h3>
							<p>Подчеркнем личность вашего бренда с
								<br>помощью уникального дизайна. Мы
								<br>сочетаем простоту и визуальную
								<br>привлекательность. Клиенты оценят
								<br>по достоинству.</p>
						</div>
						<div class="site-plan__item">
							<div class="site-plan__item_number">02</div>
							<h3>современные технологии</h3>
							<p>Используем инновационные технологии для создания современных, масштабируемых и высокопроизводительных интерфейсных активов, для всех браузеров и устройств.</p>
						</div>						
						<div class="site-plan__item">
							<div class="site-plan__item_number">03</div>
							<h3>функциональность</h3>
							<p>Разрабатываем сайты, которые работают быстрее и обеспечивают отличную работу пользователей на любых устройствах: мобильных телефонах, планшетах или персональных компьютерах.</p>
						</div>

						<div class="decoration decoration--reverse-bottom"></div>

					</div>

					<div class="decoration"></div>

				</div>
			</div>
		</section>

		<section class="site-work section section--dark">
			<div class="container">

				<div class="site-work__container">

					<div class="site-work__list">
						
						<div class="site-work__item">
							<div>
								<div class="site-work__item_dekor"></div>
								<h3>Сайт Визитка <br> <span>(Landing page)</span> <span class="title-line"></span></h3>
								<p>Одностраничный сайт, в первую очередь подходит для быстрого стартапа. Очень удобный для описания одного товара или услуги. </p>
								<div class="site-work__item_price"><span>ОТ</span> 100 <span>usd</span></div>
							</div>
						</div>

						<div class="site-work__item">
							<div>
								<div class="site-work__item_dekor"></div>
								<h3>Корпоративные <br> <span>сайты</span> <span class="title-line"></span></h3>
								<p>Эффективный бизнес сайт который продает. Формирует образ солидной компании в Ваших посетителей и превращает в потенциальных клиентов. </p>
								<div class="site-work__item_price"><span>ОТ</span> 200 <span>usd</span></div>
							</div>
						</div>

						<div class="site-work__item">
							<div>
								<div class="site-work__item_dekor"></div>
								<h3>Интернет- <br>магазин <span class="title-line"></span></h3>
								<p>Платформа для продажи любых товаров через интернет. Даст Вам высокую конверсию, а соответственно и прибыль, не заставит себя ждать! </p>
								<div class="site-work__item_price"><span>от</span> 300 <span>usd</span></div>
							</div>
						</div>

						<div class="site-work__item">
							<div>
								<div class="site-work__item_dekor"></div>
								<h3>Сайт <br>Каталог <span class="title-line"></span></h3>
								<p>Представляет собой электронную витрину, размещенную в сети Интернет. Позволяет разместить широкий перечень наименований, разделив их на необходимые категории. </p>
								<div class="site-work__item_price"><span>от</span> 150 <span>usd</span></div>
							</div>
						</div>

						<div class="site-work__item">
							<div>
								<div class="site-work__item_dekor"></div>
								<h3>Wow-сайты</h3>
								<p>Обожаем выходить за рамки креатива, дизайна и разработки. Так рождаются WOW-сайты, которые запоминаются надолго.</p>
								<div class="site-work__item_price"><span>от</span> 400 <span>usd</span></div>
							</div>
						</div>

						<div class="site-work__item">
							<h3>
								<span></span>
								<a href="<?php echo get_home_url(); ?>/seo-en" class="link">ПРОДВИЖЕНИЕ САЙТОВ <span></span></a>
							</h3>
							<h3 class="site-work__item_click">
								<span></span>
								<a href="#contacts" class="link">Заказать услугу<span></span></a>
							</h3>
						</div>
					</div>

				</div>
			</div>
		</section>

		<section class="section section--dark">
			<div class="container">

				<div class="portfolio">

					<p class="portfolio__sub-title sub-title">портфолио реализованных сайтов</p>
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
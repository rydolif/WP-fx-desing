<?php
	/**
		* Template name: Главная EN
	*/
 ?>


<?php get_header(); ?>

	<header class="header">
		<div class="container header__container">

			<div class="row header__row">
				<div class="line col-lg-4">
				</div>
				<div class="line col-lg-4">
				</div>
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

					<h1>WEB <br><span class="header__title-line title-line">студия</span></h1>

					<p class="header__sub-title">
						мы<br>
						умеем<br>
						делать<br>
						красивые<br>
						сайты
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
					<span>flex-design web production</span>
				</div>

			</div>
		</div>
	</header>

	<main class="main">
		
		<section class="about section">
			<div class="container">


				<div class="about__container"  id="top">
					<div class="about__container_item">
						<p class="about__sub-title sub-title">о нас</p>
						<h2>Flex-design – ТВОРИМ <br>БУДУЩЕЕ СЕЙЧАС.</h2>
						<div class="about__text">
							<p>
								Объединяя творчество и цифровые знания мы помогаем компаниям создать digital решения для того, чтобы добиться вовлеченности и результата. Доверьтесь нам и вы будете впечатлены.
							</p>
						</div>
					</div>

					<div class="about__container_item about__container_item--img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/about-img.jpg" alt="">
					</div>

					<div class="decoration"></div>
				</div>

				<div class="about__container"  id="professionalism">
					<div class="about__container_item">
						<p class="about__sub-title sub-title">мы–фанаты веба</p>
						<h2>ПРОФЕССИОНАЛИЗМ<br><span>НАЧИНАЯ С ПЕРВОГО КОНТАКТА И ДО ЗАВЕРШЕНИЯ ПРОЕКТА</span></h2>
						<div class="about__text">
							<p>
								Мы прекрасно понимаем, каким должен быть интернет-продукт и как этого добиться. Мы объединяем цифровое мастерство с новаторским мышлением, чтобы реализовать все ваши идеи и пожелания. Мы предлагаем исключительный уровень сервиса и стремимся стать долгосрочными партнерами.
							</p>
						</div>
					</div>

					<div class="about__container_item about__container_item--img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/about-img2.jpg" alt="">
					</div>

					<div class="decoration decoration--reverse"></div>
					<div class="decoration decoration--bottom"></div>
				</div>
			</div>
		</section>

		<section class="section section--dark">
			<div class="container">

				<div class="portfolio" id="price">

					<p class="sub-title">наше портфолио</p>
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

				<div class="act">

					<p class="sub-title">переходим к действиям</p>
					<h2>давайте реализируем вашу идею! <br> <span>вам понравится и захочется еще.</span></h2>

					<div class="act__container">

						<div class="act__info">
							<div class="act__info_link">
								<span>E-mail</span>
								<a href="mailto:flexdesign.sales@gmail.com">flexdesign.sales@gmail.com</a>
							</div>
							<div class="act__info_link act__info_link--tel">
								<span>Phone</span>
								<a href="tel:+380635170960" class="">+380 63 517 09 60</a>
							</div>
						</div>

						<div class="act__block">
							<span class="act__hr"></span>
							<div class="act__block_line">
								<a href="<?php echo get_home_url(); ?>/site-en" class="link">Создание сайтов</a>
								<a href="<?php echo get_home_url(); ?>/design-en" class="link">Дизайн</a>
							</div>
							<span class="act__hr"></span>
						</div>

					</div>

				</div>

			</div>
		</section>

		<?php get_template_part( 'parts-en/form' ); ?>

<?php get_footer(); ?>
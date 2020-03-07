<?php get_header(); ?>
	
<body class="no-scroll ">

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
					<div></div>
					<div class="header__next">
						<a href="#top">скроль вниз<span class="header__next_title-line title-line"></span></a>
					</div>
				</div>

				<div class="header__line col-lg-4 order-lg-12 order-md-1">
					<nav class="nav">
						<?php 
							wp_nav_menu( array(
								'menu'=>'menu',
								'menu_class'=>'menu',
							    'theme_location'=>'menu1',
							) );
						?>
					</nav>
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
								Мы обьеденяем креатив и digital знания, мы решительны, настойчивы, трудолюбивы, все  для того, чтобы добиться  лучшего результата. Доверьтесь нам и вы оцените по достоинтсву нашу работу.
							</p>
						</div>
					</div>

					<div class="about__container_item about__container_item--img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-img.jpg" alt="">
					</div>

					<div class="decoration"></div>
				</div>

				<div class="about__container"  id="professionalism">
					<div class="about__container_item">
						<p class="about__sub-title sub-title">мы–фанаты веба</p>
						<h2>ПРОФЕССИОНАЛИЗМ <br><span>НАЧИНАЯ С ПЕРВОГО КОНТАКТА И ДО ЗАВЕРШЕНИЯ ПРОЕКТА</span></h2>
						<div class="about__text">
							<p>
								Мы видим цель и четко знаем  как ее добиться. Мы верим в свои силы и всегда по максимуму используем возможности для роста. Мы предлагаем исключительный уровень сервиса и стремимся стать долгосрочными партнерами.
							</p>
						</div>
					</div>

					<div class="about__container_item about__container_item--img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-img2.jpg" alt="">
					</div>

					<div class="decoration decoration--reverse"></div>
					<div class="decoration decoration--bottom"></div>
				</div>
			</div>
		</section>

		<?php get_template_part( 'parts/portfolio' ); ?>

		<?php get_template_part( 'parts/act' ); ?>

		<?php get_template_part( 'parts/form' ); ?>

<?php get_footer(); ?>
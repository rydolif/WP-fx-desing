<?php
	/**
		* Template name: О нас
	*/
 ?>


<?php get_header(); ?>

<body class="no-scroll about">

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
						<h1>о нас</h1>
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

					<p class="about__sub-title sub-title">мы четко видим результат</p>
					<h2>наша цель <br>и миссия</h2>

					<div class="site-plan__list">
						<div class="site-plan__item">
							<div class="site-plan__item_number">01</div>
							<h3>Качество</h3>
							<p>
								Качество - это основа стратегии развития и процветания нашего агентства. Ваш проект может быть небольшим, сложным или совершенно сумасшедшим, мы в любом случае реализуем его на высшем уровне.
							</p>
						</div>
						<div class="site-plan__item">
							<div class="site-plan__item_number">02</div>
							<h3>правильное построение <br> процесса</h3>
							<p>
								Соединяем стратегический веб-маркетинг и креатив. Задаем стандарты на рынке веб-разработки, создавая эталонные продукты.
							</p>
						</div>						
						<div class="site-plan__item">
							<div class="site-plan__item_number">03</div>
							<h3>работаем на результат</h3>
							<p>
								Мы не создаем проблем – мы решаем их. И если Вы не хотите думать – думаем за Вас. Целая команда опытных разработчиков, дизайнеров и копирайтеров готова взять на себя проект от его задумки до продвижения, погрузиться в него с головой, выучить наизусть вашего клиента и сделать ваш бизнес прибыльным
							</p>
						</div>

						<div class="decoration decoration--reverse-bottom"></div>

					</div>

					<div class="decoration"></div>

				</div>
			</div>
		</section>

		<section class="about-statistics section section--dark">
			<div class="container">

				<div class="about-statistics__container">

					<p class="sub-title">вы можете смело довериться нам</p>					
					<h2>опыт и достижения</h2>

					<div class="about-statistics__list">

						<div class="about-statistics__item">
							<h3 class="title-line">117</h3>
							<p>готовых проектов в копилке опыта</p>
						</div>

						<div class="about-statistics__item">
							<h3 class="title-line">3</h3>
							<p>года работы</p>
						</div>
						
						<div class="about-statistics__item">
							<h3 class="title-line">92</h3>
							<p>довольных клиентов </p>
						</div>
											
						<div class="about-statistics__item">
							<h3 class="title-line">25</h3>
							<p>повторный заказ</p>
						</div>
					</div>

				</div>

			</div>
		</section>

		<?php get_template_part( 'parts/portfolio' ); ?>

		<?php get_template_part( 'parts/act' ); ?>

		<?php get_template_part( 'parts/form' ); ?>

<?php get_footer(); ?>
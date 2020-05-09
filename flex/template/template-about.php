<?php
	/**
		* Template name: О нас
	*/
 ?>


<?php get_header(); ?>

<body class="no-scroll about">

	<header class="header header--page"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<div class="container header__container">

			<div class="row header__row">
				<div class="line col-lg-4">
				</div>
			</div>

			<div class="row">

				<div class="header__line col-lg-4">
					<a href="<?php echo get_home_url(); ?>" class="header__logo logo">
						<b>FX</b>
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
						<a href="#top">scroll down<span class="header__next_title-line title-line"></span></a>
					</div>
				</div>

				<div class="header__line col-lg-4 order-lg-12 order-md-1">
					<div class="header__language">
						<?php dynamic_sidebar( 'top-area' ); ?>
					</div>

					<div class="header--page__block-title">
						<p class="header--page__sub-title">Price & Services</p>
						<h1>about us</h1>
					</div>

					<span>fx-design web production</span>
				</div>

			</div>
		</div>
	</header>

	<main class="main">
		
		<section class="site-plan section" id="top">
			<div class="container">

				<div class="site-plan__container">

					<p class="about__sub-title sub-title wow bounceInUp" data-wow-duration="2s">we know the result</p>
					<h2 class="wow bounceInUp" data-wow-duration="2s">our goal <br>and mission</h2>

					<div class="site-plan__list">
						<div class="site-plan__item wow bounceInUp" data-wow-duration="2s">
							<div class="site-plan__item_number">01</div>
							<h3>Quality</h3>
							<p>
							Quality is an essential elment of our business development strategy. Your project might be small, complicated and even completely crazy / out of the box/, but we will deliver the result with the highest quality. 
							</p>
						</div>
						<div class="site-plan__item wow bounceInUp" data-wow-duration="2.2s">
							<div class="site-plan__item_number">02</div>
							<h3>clear process <br> structure</h3>
							<p>
								We combine strategic web - marketing with creative design. We set up the standarts on the web-development market by creating benchmark product. 
							</p>
						</div>						
						<div class="site-plan__item wow bounceInUp" data-wow-duration="2.4s">
							<div class="site-plan__item_number">03</div>
							<h3>result matters</h3>
							<p>
								We are not afraid of problems, we just solve them. If you don't like creative thinking, we will do this for you. A team of skilled web-developers, designers and copywriters is ready to take care your project from the concept creation till the promotion. We are ready to dive deep into it, to learn the client needs by heart  and to make  its business profitable.
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

					<p class="sub-title wow bounceInUp" data-wow-duration="2s">Trust and give it to us</p>					
					<h2 class="wow bounceInUp" data-wow-duration="2s">expertise and achievements</h2>

					<div class="about-statistics__list">

						<div class="about-statistics__item">
							<h3 class="title-line">217</h3>
							<p>accomplished projects</p>
						</div>

						<div class="about-statistics__item">
							<h3 class="title-line">5</h3>
							<p>years of work</p>
						</div>
						
						<div class="about-statistics__item">
							<h3 class="title-line">172</h3>
							<p>Happy clients </p>
						</div>
											
						<div class="about-statistics__item">
							<h3 class="title-line">45</h3>
							<p>renewed requests</p>
						</div>
					</div>

				</div>

			</div>
		</section>

		<?php get_template_part( 'parts/portfolio' ); ?>

		<?php get_template_part( 'parts/act' ); ?>

		<?php get_template_part( 'parts/form' ); ?>

<?php get_footer(); ?>
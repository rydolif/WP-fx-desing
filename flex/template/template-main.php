<?php
	/* Template name: Главная */
?>


<?php get_header(); ?>
	
<body class="no-scroll ">

	<header class="header"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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

					<h1>WEB <br><span class="header__title-line title-line">studio</span></h1>

					<p class="header__sub-title">
						We<br>
						design<br>
						beatiful<br>
						website<br>
						
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
						<a href="#top">scroll dowm<span class="header__next_title-line title-line"></span></a>
					</div>
				</div>

				<div class="header__line col-lg-4 order-lg-12 order-md-1">
					<div></div>
					<span>fx-design web production</span>
				</div>

			</div>
		</div>
	</header>

	<main class="main">
		
		<section class="about section">
			<div class="container">

				<div class="about__container"  id="top">
					<div class="about__container_item">
						<p class="about__sub-title sub-title wow bounceInUp" data-wow-duration="2s">о нас</p>
						<h2 class="wow bounceInUp" data-wow-duration="2s">Fx-design – WE CREATE  <br>THE FUTURE NOW.</h2>
						<div class="about__text">
							<p>
								We combine creativity with digital knowledge. We are decisive and persistent. We work hard to reach the best result. Trust us and you will appreciate the delivered product. 
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
						<p class="about__sub-title sub-title wow bounceInUp" data-wow-duration="2s">we are the web fanatics</p>
						<h2 class="wow bounceInUp" data-wow-duration="2s">PROFESSIONALISM <br><span>STARTING FROM THE FIRST CONTACT UNTIL THE FINAL RESULT </span></h2>
						<div class="about__text">
							<p>
								We know the goal and we know how to reach it. We rely on our energy and we always strive to grow up to the maximum. Our service is impeccable and we urge to become a reliable long term business partner.
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
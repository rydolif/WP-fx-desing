<?php
	/**
		* Template name: Дизайн
	*/
 ?>


<?php get_header(); ?>

<body class="no-scroll design">

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
						<p class="header--page__sub-title">Price & Service</p>
						<h1>Design</h1>
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

					<p class="about__sub-title sub-title wow bounceInUp" data-wow-duration="2s">We create websites</p>
					<h2 class="wow bounceInUp" data-wow-duration="2s">How do we work on <br>our web projects</h2>

					<div class="site-plan__list">
						<div class="site-plan__item wow bounceInUp" data-wow-duration="2s">
							<div class="site-plan__item_number">01</div>
							<h3>Analysis and screening</h3>
							<p>
								Before we start with the website design we do the market studies, we learn the target audience, its needs and interests.
							</p>
						</div>
						<div class="site-plan__item wow bounceInUp" data-wow-duration="2.2s">
							<div class="site-plan__item_number">02</div>
							<h3>Graphics selection</h3>
							<p>
								The website design us customised and has individual character. We create content, craphics and colors taking into account the specifics of your company and market segment you are operating in. To create the holistic website perception we use one style.
							</p>
						</div>						
						<div class="site-plan__item wow bounceInUp" data-wow-duration="2.4s">
							<div class="site-plan__item_number">03</div>
							<h3>Development of the design layout </h3>
							<p>
							To find an optimal solution for  your bussines we will consider all your wishes and comments. We will make a stylish, up-to-date and unique websites design which  will help your company to grow and will bring you closer to your target audience.
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
						
						<div class="design-work__item site-work__item wow bounceInUp" data-wow-duration="2s">
							<div>
								<div class="site-work__item_dekor"></div>
								<h3>Logo <br>Creation  <span class="title-line"></span></h3>
								<p>Logo - a unique and recognisable element, describing your activites using visual images. A logo developed by proffessionals will created your company images.</p>
								<div class="site-work__item_price"><span>from</span> 50 <span>eur</span></div>
							</div>
						</div>

						<div class="design-work__item site-work__item wow bounceInUp" data-wow-duration="2.2s">
							<div>
								<div class="site-work__item_dekor"></div>
								<h3>Brand <br>identity <span class="title-line"></span></h3>
								<p>Brand identity - a visual identification of your company. Our team hepls to create a unique brand identity that differentiates your organisation and your product from others</p>
								<div class="site-work__item_price"><span>from</span> 250 <span>eur</span></div>
							</div>
						</div>

						<div class="design-work__item site-work__item wow bounceInUp" data-wow-duration="2.4s">
							<div>
								<div class="site-work__item_dekor"></div>
								<h3>Banner <span class="title-line"></span></h3>
								<p>Banner - one of the effective online advertising tools to promote your products and services. We create visually attractive banners that trigger your potential customers interest and will fully reflect your company image </p>
								<div class="site-work__item_price"><span>from</span> 150 <span>eur</span></div>
							</div>
						</div>

					</div>


					<div class="seo-price__link">
						<h3>
							<span></span>
							<span></span>
							<a href="<?php echo get_home_url(); ?>/site" class="link">Websites design<span></span></a>
						</h3>
						<h3 class="site-work__item_click">
							<span></span>
							<span></span>
							<a href="#contacts" class="link">Order now <span></span></a>
						</h3>
					</div>
				</div>


			</div>
		</section>

		<?php get_template_part( 'parts/portfolio' ); ?>

		<?php get_template_part( 'parts/form' ); ?>

<?php get_footer(); ?>
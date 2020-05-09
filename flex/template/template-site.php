<?php
	/**
		* Template name: Создание сайтов 
	*/
 ?>


<?php get_header(); ?>

<body class="no-scroll site">

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
						<a href="#top">scroll dowm<span class="header__next_title-line title-line"></span></a>
					</div>
				</div>

				<div class="header__line col-lg-4 order-lg-12 order-md-1">
					<div class="header__language">
						<?php dynamic_sidebar( 'top-area' ); ?>
					</div>

					<div class="header--page__block-title">
						<p class="header--page__sub-title">price & service</p>
						<h1>Website<br> <span>creation</span></h1>
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

					<p class="about__sub-title sub-title wow bounceInUp" data-wow-duration="2s">We design websites</p>
					<h2 class="wow bounceInUp" data-wow-duration="2s">wich reflect <br>the goals of your<br>organisation</h2>

					<div class="site-plan__list">
						<div class="site-plan__item wow bounceInUp" data-wow-duration="2s">
							<div class="site-plan__item_number">01</div>
							<h3>individual design</h3>
							<p>
								We will highlight your individual style with visual content. We prefer simplicity and relevancy and rely on your idea. Your customers will be impressed.
							</p>
						</div>
						<div class="site-plan__item wow bounceInUp" data-wow-duration="2.2s">
							<div class="site-plan__item_number">02</div>
							<h3>Cutting edge technoogies </h3>
							<p>
								We use the newest technologies to create highly effective interfaces that can be adapted for each browser and application. 
							</p>
						</div>						
						<div class="site-plan__item wow bounceInUp" data-wow-duration="2.4s">
							<div class="site-plan__item_number">03</div>
							<h3>functional</h3>
							<p>
							Our product are user frendliy and deliver hight quality on all devises: mobile phones, tablets and PCs.
							</p>
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
						
						<div class="site-work__item wow bounceInUp" data-wow-duration="2s">
							<div>
								<div class="site-work__item_dekor"></div>
								<h3>Business website <br> <span>(Landing page)</span> <span class="title-line"></span></h3>
								<p>
								A small website consisting of one web-page that contains compressed information about either an organisation or an individual, product, secrvices, prices and contact data. A landing page is suitable for a fust start.
								</p>
								<div class="site-work__item_price"><span>from</span> 200 <span>eur</span></div>
							</div>
						</div>

						<div class="site-work__item wow bounceInUp" data-wow-duration="2.2s">
							<div>
								<div class="site-work__item_dekor"></div>
								<h3>Corporate <br> <span>website</span> <span class="title-line"></span></h3>
								<p>
									Company website representation on Internet. Effective business site that sells 
								</p>
								<div class="site-work__item_price"><span>from</span> 300 <span>eur</span></div>
							</div>
						</div>

						<div class="site-work__item wow bounceInUp" data-wow-duration="2.4s">
							<div>
								<div class="site-work__item_dekor"></div>
								<h3>Webshop <span class="title-line"></span></h3>
								<p>
									Platform to sell any products online aiming for hight conversion and profitability.
								</p>
								<div class="site-work__item_price"><span>from</span> 500 <span>eur</span></div>
							</div>
						</div>

						<div class="site-work__item wow bounceInUp" data-wow-duration="2s">
							<div>
								<div class="site-work__item_dekor"></div>
								<h3>Product <br>catalogue website <span class="title-line"></span></h3>
								<p>
								Website with a catalogue of products with product description product images and articles. It aims to show potential customers the product assortiment.
								</p>
								<div class="site-work__item_price"><span>from</span> 150 <span>usd</span></div>
							</div>
						</div>

						<div class="site-work__item wow bounceInUp" data-wow-duration="2.2s">
							<div>
								<div class="site-work__item_dekor"></div>
								<h3>Wow-websites</h3>
								<p>
									We dont want to comply with the expectations. We want to suprise you. In such a way we create WOW websites which you will remember. A websites with an individual design and functionalites. Rationally created but with the potentional of a star. 
									<br>
									
								</p>
								<div class="site-work__item_price"><span>from</span> 600 <span>eur</span></div>
							</div>
						</div>

						<div class="site-work__item wow bounceInUp" data-wow-duration="2.4s">
							<h3>
								<span></span>
								<a href="<?php echo get_home_url(); ?>/seo" class="link">PROMOTION WEBSITE <span></span></a>
							</h3>
							<h3 class="site-work__item_click">
								<span></span>
								<a href="#contacts" class="link">Oeder now<span></span></a>
							</h3>
						</div>
					</div>

				</div>
			</div>
		</section>

		<?php get_template_part( 'parts/portfolio' ); ?>

		<?php get_template_part( 'parts/form' ); ?>

<?php get_footer(); ?>
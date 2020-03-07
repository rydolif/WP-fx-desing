<?php
	/**
		* Template name: Главная PL
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

					<h1>WEB <br><span class="header__title-line title-line">Studio</span></h1>

					<p class="header__sub-title">   
						Potrafimy<br>
						tworzyć<br>
						piękne<br>
						strony
					</p>
				</div>

				<div class="header__line col-lg-4 order-lg-1 order-md-12">
					<nav class="nav">
						<?php 
							wp_nav_menu( array(
								'menu'=>'menu-pl',
								'menu_class'=>'menu',
							    'theme_location'=>'menu1',
							) );
						?>
					</nav>

					<div class="header__next">
						<a href="#top">Skroluj niżej<span class="header__next_title-line title-line"></span></a>
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
						<p class="about__sub-title sub-title">O NAS</p>
						<h2>Flex-design – Tworzymy <br>przyszłość teraz.</h2>
						<div class="about__text">
							<p>
								Łączymy kreatywność i wiedzę techniczną, pomagamy naszym klientom stworzyć idealne rozwiązanie dla osiągniecia ich celów. Zaufaj nam i będziesz pod wrażeniem. 
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
						<p class="about__sub-title sub-title">Jesteśmy web-fanami</p>
						<h2>PROFESJONALIZM<br><span>zaczynając od pierwszego kontaktu i do samej finalizacji projektu</span></h2>
						<div class="about__text">
							<p>
								Dobrze wiemy, jak Internet-produkt musi wyglądać i jak go zrealizować. Nasz zespół łączy w sobie  umiejętności cyfrowe z innowatorskim myśleniem, żeby móc zrealizować wszystkie Wasze pomysły i idee. Oferujemy usługi na wyjątkowym poziomie i dążymy do stałej współpracy.
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

		<?php get_template_part( 'parts-pl/portfolio' ); ?>


		<section class="section section--dark">
			<div class="container">
				<div class="act">

					<p class="sub-title">Przechodzimy do działania</p>
					<h2>Zrealizujmy Wasz pomysł! <br> <span>Spodoba Wam się – będziecie chcieli więcej.</span></h2>

					<div class="act__container">

						<div class="act__info">
							<div class="act__info_link">
								<span>E-mail</span>
								<a href="mailto:flexdesign.sales@gmail.com">flexdesign.sales@gmail.com</a>
							</div>
							<div class="act__info_link act__info_link--tel">
								<span>Phone</span>
								<a href="tel:+48575471857">+485 75 471 857</a>
							</div>
						</div>

						<div class="act__block">
							<span class="act__hr"></span>
							<div class="act__block_line">
								<a href="<?php echo get_home_url(); ?>/site-pl" class="link">Stworzenie stron internetowych</a>
								<a href="<?php echo get_home_url(); ?>/design-pl" class="link">Projektowanie </a>
							</div>
							<span class="act__hr"></span>
						</div>

					</div>

				</div>
			</div>
		</section>

		<?php get_template_part( 'parts-pl/form' ); ?>


<?php get_footer('pl'); ?>
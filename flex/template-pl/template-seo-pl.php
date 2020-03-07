<?php
	/**
		* Template name: Продвижение PL
	*/
 ?>


<?php get_header(); ?>

<body class="seo">

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
						Życie
						<br>pomysłów
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

					<div class="header--page__block-title">
						<p class="header--page__sub-title">Usługi & Cennik</p>
						<h1>Pozycjonowanie <br> <span>stron</span></h1>
					</div>

					<span>flex-design web production</span>
				</div>

			</div>
		</div>
	</header>

	<main class="main">
			
		<section class="seo-plan section" id="top">
			<div class="container">

				<div class="seo-plan__container">

					<p class="sub-title">Teraz o biznesie</p>
					<h2>Nasze projekty realizują <br>wiele zadań  biznesowych</h2>

					<div class="site-plan__list">

						<div class="seo-plan__item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/seo-icon1.svg" alt="" width="38" height="38">
							<h3>Promowanie <br>strony</h3>
							<p>W najlepszych wyszukiwarkach <br>za pomocą unikatowych <br>artykułów</p>
						</div>
						
						<div class="seo-plan__item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/seo-icon2.svg" alt="" width="37" height="37">
							<h3>Kompilacja <br>jądra <br>semantycznego, </h3>
							<p>Na którym bazuje <br>się mechanizm <br>wyszukiwania</p>
						</div>

						<div class="seo-plan__item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/seo-icon3.svg" alt="" width="37" height="37">
							<h3>Bezpłatna <br>instalacja </h3>
							<p>I ustawienie SEO  <br> serwisu, opisy  <br>stron głównych </p>
						</div>

						<div class="seo-plan__item">
							<img src="<?php echo get_template_directory_uri(); ?>/img/seo-icon4.svg" alt="" width="37" height="37">
							<h3>Całościowa <br> optymalizacja </h3>
							<p>Waszej strony internetowej</p>
						</div>
						<div class="decoration decoration--reverse-bottom"></div>

					</div>

					<div class="decoration"></div>

				</div>
			</div>
		</section>

		<section class="seo-price section section--dark">
			<div class="container">

				<div class="seo-price__container">

					<div class="seo-price__list">
						<div class="seo-price__item">
							<h3>Ekonom</h3>
							<p>Zachęcanie klientów z wyszukiwarek. Żeby promowanie strony było szybkie i efektywne My proponujemy różnorodne narzędzie do rozwiązywania problemów, opisu jednego towaru bądź usługi. </p>
							<span class="seo-price__price"><span>od</span>  30 <span>usd/Mies</span></span>
						</div>
						<div class="seo-price__item">
							<h3>Standard</h3>
							<p>Dla promowanie strony nasz team proponuje różnorodne narzędzia do kompleksowego podejścia i zaoszczędzania czasu klienta. Przeprowadzenie optymalizacji w wyszukiwarce strony – gwarancja podwyższenia trafika dla Waszej strony.</p>
							<span class="seo-price__price"><span>od</span> 100 <span>usd/Mies</span></span>
						</div>
						<div class="seo-price__item">
							<h3>Premium</h3>
							<p>Promowanie stron w Internecie – współczesny i szybki sposób na pozyskiwanie klientów i zwiększenia sprzedaży w firmie. Używamy różnych narzędzi  i nadaje kompleksowe podejście dla oszczędzenia czasu klienta. </p>
							<span class="seo-price__price"><span>od</span> 150 <span>usd/Mies</span></span>
						</div>
					</div>

					<div class="seo-price__link">
						<h3>
							<span></span>
							<span></span>
							<a href="<?php echo get_home_url(); ?>/site-pl" class="link">Tworzenie stron<span></span></a>
						</h3>
						<h3 class="site-work__item_click">
							<span></span>
							<span></span>
							<a href="#contacts" class="link">Zrobić Zamówienie<span></span></a>
						</h3>
					</div>

				</div>
			</div>
		</section>
		
		<?php get_template_part( 'parts-pl/form' ); ?>

<?php get_footer("pl"); ?>
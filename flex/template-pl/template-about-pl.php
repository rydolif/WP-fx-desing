<?php
	/**
		* Template name: О нас PL
	*/
 ?>


<?php get_header(); ?>

<body class="about">

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
						
						<h1>O NAS</h1>
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

					<p class="about__sub-title sub-title">Dobrze widzimy wynik</p>
					<h2>Nasz cel  <br>i Nasza Misja</h2>

					<div class="site-plan__list">
						<div class="site-plan__item">
							<div class="site-plan__item_number">01</div>
							<h3>Jakość</h3>
							<p>
								Jakość jest bazowym elementem 
								<br>strategii rozwoju Naszej firmy. 
								<br>Wasz projekt może być mały,
								<br>wielki i ciężki albo szalony. W bądź 
								<br>jakim przypadku zrealizujemy go na wysokim poziomie.
							</p>
						</div>
						<div class="site-plan__item">
							<div class="site-plan__item_number">02</div>
							<h3>Prawidłowe kreowanie <br> ciągłości procesu</h3>
							<p>
								Łączymy strategiczny 
								<br>Internet-marketing i kreatywność.
								<br>Wprowadzamy nowe standardy na rynku 
								<br>projektowania, stwarzamy produkt-etalon. 
							</p>
						</div>						
						<div class="site-plan__item">
							<div class="site-plan__item_number">03</div>
							<h3>Działamy dla wyników</h3>
							<p>
								Nie stwarzamy problemów – tylko załatwiamy je! Jeśli nie 
								chcesz się zastanawiać – zastanowimy się za 
								Was. Cały Nasz team 
								doświadczonych projektantów i copywriterów weźmie na siebie 
								cały projekt i wszystkie pomysły 
								na promowanie, zanurzy się w 
								robotę i zrobi Wasz biznes 
								dochodowym.
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

					<p class="sub-title">Śmiało możesz nam zaufać</p>					
					<h2>Doświadczenie i osiągnięcia</h2>

					<div class="about-statistics__list">

						<div class="about-statistics__item">
							<h3 class="title-line">117</h3>
							<p>Gotowych projektów</p>
						</div>

						<div class="about-statistics__item">
							<h3 class="title-line">3</h3>
							<p>Lata pracy</p>
						</div>
						
						<div class="about-statistics__item">
							<h3 class="title-line">92</h3>
							<p>Zadowolonych klientów </p>
						</div>
											
						<div class="about-statistics__item">
							<h3 class="title-line">25</h3>
							<p>Zamówienie powtórne</p>
						</div>
					</div>

				</div>

			</div>
		</section>

		<?php get_template_part( 'parts-pl/portfolio' ); ?>

		<?php get_template_part( 'parts-pl/form' ); ?>

<?php get_footer("pl"); ?>
<?php
	/**
		* Template name: Дизайн PL
	*/
 ?>


<?php get_header(); ?>

<body class="design">

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
						<h1>projekt</h1>
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

					<p class="about__sub-title sub-title">Stwarzamy strony internetowe</p>
					<h2>Prace nad  <br>projektami</h2>

					<div class="site-plan__list">
						<div class="site-plan__item">
							<div class="site-plan__item_number">01</div>
							<h3>Analiza informacji</h3>
							<p>
								Praca nad projektem zaczyna się  
								<br>od analizy rodzaju działalności 
								<br>firmy i jej odbiorców celowych i 
								<br>odpowiedniego obszaru rynku. 
							</p>
						</div>
						<div class="site-plan__item">
							<div class="site-plan__item_number">02</div>
							<h3>Dobór rozwiązań  <br>graficznych</h3>
							<p>
								Projekt musi zostać wytrzymany w jednolitej  
								<br>stylistyce dla całościowego harmonicznego 
								<br>postrzegania projektu. Kolorystyka i czcionki,  
								<br>które zostaną wykorzystane , projektant 
								<br>dobiera ze względu na specyfikacje Waszej
								<br>firmy.
							</p>
						</div>						<div class="site-plan__item">
							<div class="site-plan__item_number">03</div>
							<h3>Stworzenie makiety</h3>
							<p>
								Profesjonaliści zgodnie z 
								<br>życzeniami znajdą optymalne rozwiązanie 
								<br>specjalnie dla Waszej firmy.
								<br>Team FlexDesign zaprezentuje oryginalny, stylowy i 
								<br>współczesny projekt, Który będzie  rozwoju 
								<br>pomocny dla Waszej marki.
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
						
						<div class="design-work__item site-work__item">
							<div>
								<div class="site-work__item_dekor"></div>
								<h3>Projektowanie  <br>logo  <span class="title-line"></span></h3>
								<p>Logotyp - ważny rozpoznawalny element graficzny, reprezentujący rodzaj działalności Waszej firmy. Projektowanie logo przez specjalistów pomoże w pozycjonowaniu firmy na rynku</p>
								<div class="site-work__item_price"><span>od</span> 50 <span>usd</span></div>
							</div>
						</div>

						<div class="design-work__item site-work__item">
							<div>
								<div class="site-work__item_dekor"></div>
								<h3>Tożsamość <br>marki <span class="title-line"></span></h3>
								<p>Tożsamość marki - identyfikacja wizualna Waszej firmy. Nasz zespół pomoże w stworzeniu unikatowego firmowego stylu, który wyróżni Waszą firmę/markę i jej produkt na tle innych </p>
								<div class="site-work__item_price"><span>od</span> 200 <span>usd</span></div>
							</div>
						</div>

						<div class="design-work__item site-work__item">
							<div>
								<div class="site-work__item_dekor"></div>
								<h3>Baner <span class="title-line"></span></h3>
								<p>Baner - jeden z najbardziej efektywnych rodzajów Internet-reklamy do promowania produktów i usług. Stworzymy baner, który będzie przeciągał wzrok i zachęci potencjalnego klienta, będzie spójny z wizerunkiem Waszej marki. </p>
								<div class="site-work__item_price"><span>od</span> 100 <span>usd</span></div>
							</div>
						</div>

					</div>


					<div class="seo-price__link">
						<h3>
							<span></span>
							<span></span>
							<a href="<?php echo get_home_url(); ?>/site-pl" class="link">Stworzenie stron internetowych<span></span></a>
						</h3>
						<h3>
							<span></span>
							<span></span>
							<a href="#contacts" class="link">pozycjonowanie stron <span></span></a>
						</h3>
					</div>
				</div>


			</div>
		</section>

		<?php get_template_part( 'parts-pl/portfolio' ); ?>

		<?php get_template_part( 'parts-pl/form' ); ?>

<?php get_footer("pl"); ?>
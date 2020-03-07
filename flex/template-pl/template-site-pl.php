<?php
	/**
		* Template name: Создание сайтов PL
	*/
 ?>


<?php get_header(); ?>
<body class="site">

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
						<h1>Stworzenie <br> <span>stron internetowych</span></h1>
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
					<h2>Spełniające <br>zadania Waszego <br>biznesu</h2>

					<div class="site-plan__list">
						<div class="site-plan__item">
							<div class="site-plan__item_number">01</div>
							<h3>Indywidualne projektowanie</h3>
							<p>Podkreślimy tożsamość 
								Twojej/Waszej marki za
								pomocą unikalnego 
								projektu. Połączymy minimalizm i 
								atrakcyjność. Klienci to docenią.</p>
						</div>
						<div class="site-plan__item">
							<div class="site-plan__item_number">02</div>
							<h3>Współczesne technologie</h3>
							<p>Wykorzystujemy  dla stworzenia nowoczesnych, skalowanych i wydajnych zasobów interfejsu dla wszystkich przeglądarek i urządzeń</p>
						</div>						
						<div class="site-plan__item">
							<div class="site-plan__item_number">03</div>
							<h3>Funkcjonalność</h3>
							<p>Stwarzamy strony internetowe, które działają szybciej i zapewniają komfortową pracę użytkowników wszystkich urządzeń: telefonów komórkowych, tabletów czy komputerów</p>
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
						
						<div class="site-work__item">
							<div>
								<div class="site-work__item_dekor"></div>
								<h3>Strona-wizytówka <br> <span>(Landing page)</span> <span class="title-line"></span></h3>
								<p>Jednostronna strona internetowa, w pierwszej kolejności pasuje dla szybkiego startupu. Bardzo wygodna do opisu jednego towaru czy usługi. </p>
								<div class="site-work__item_price"><span>od</span> 100 <span>usd</span></div>
							</div>
						</div>

						<div class="site-work__item">
							<div>
								<div class="site-work__item_dekor"></div>
								<h3>Strony  <br> <span>korporacyjne</span> <span class="title-line"></span></h3>
								<p>Efektywna biznes-strona internetowa która przede wszystkim sprzedaje. Formuje wizerunek porządnej firmy w oczach Waszych użytkowników i robi z nich klientów  </p>
								<div class="site-work__item_price"><span>od</span> 200 <span>usd</span></div>
							</div>
						</div>

						<div class="site-work__item">
							<div>
								<div class="site-work__item_dekor"></div>
								<h3>Sklep  <br>internetowy <span class="title-line"></span></h3>
								<p>Platforma do sprzedaży jakichkolwiek towarów i usług przez Internet. Gwarantuje wysokie zyski i wielką konwersję. </p>
								<div class="site-work__item_price"><span>od</span> 300 <span>usd</span></div>
							</div>
						</div>

						<div class="site-work__item">
							<div>
								<div class="site-work__item_dekor"></div>
								<h3>Strona <br>Katalog <span class="title-line"></span></h3>
								<p>Jest to witryna zamieszczona w Internecie. Pozwoli na wstawienie wielkiej listy produktów i podział ich na kategorie. </p>
								<div class="site-work__item_price"><span>od</span> 150 <span>usd</span></div>
							</div>
						</div>

						<div class="site-work__item">
							<div>
								<div class="site-work__item_dekor"></div>
								<h3>Efekt WOW</h3>
								<p>Lubimy przekraczać granice kreatywności w stwarzaniu i projektowaniu. W taki sposób pojawiają się strony z efektem WOW, które zostają się w pamięci na zawsze.</p>
								<div class="site-work__item_price"><span>od</span> 400 <span>usd</span></div>
							</div>
						</div>

						<div class="site-work__item">
							<h3>
								<span></span>
								<a href="<?php echo get_home_url(); ?>/seo-pl" class="link">Promowanie stron internetowych <span></span></a>
							</h3>
							<h3 class="site-work__item_click">
								<span></span>
								<a href="#contacts" class="link">Zrobić Zamówienie<span></span></a>
							</h3>
						</div>
					</div>

				</div>
			</div>
		</section>

		<?php get_template_part( 'parts-pl/portfolio' ); ?>

		<?php get_template_part( 'parts-pl/form' ); ?>
		
<?php get_footer("pl"); ?>
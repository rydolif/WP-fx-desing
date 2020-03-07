<?php
	/**
		* Template name: Создание сайтов 
	*/
 ?>


<?php get_header(); ?>

<body class="no-scroll site">

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
						<h1>создание<br> <span>сайтов</span></h1>
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

					<p class="about__sub-title sub-title">мы создаем сайты</p>
					<h2>соответствующие <br>задачам вашего <br>бизнеса</h2>

					<div class="site-plan__list">
						<div class="site-plan__item">
							<div class="site-plan__item_number">01</div>
							<h3>индивидуальный дизайн</h3>
							<p>
								Мы подчеркнем Вашу индивидуальность  с помощью визуального контента. В работе мы сочетаем простоту и лаконичность  , сохраняя при этом cуть и идею . Клиенты будут впечатлены.
							</p>
						</div>
						<div class="site-plan__item">
							<div class="site-plan__item_number">02</div>
							<h3>современные технологии</h3>
							<p>
								Используем новейшие технологии для создания современных и  высокопродуктивных интерфейсов, адаптируемых под любые браузеры и устройства.
							</p>
						</div>						
						<div class="site-plan__item">
							<div class="site-plan__item_number">03</div>
							<h3>функциональность</h3>
							<p>
								Наш продукт  работает качественно и быстро  обеспечивает отличную восприимчивость пользователей на любых устройствах: мобильных телефонах, планшетах или персональных компьютерах.
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
						
						<div class="site-work__item">
							<div>
								<div class="site-work__item_dekor"></div>
								<h3>Сайт Визитка <br> <span>(Landing page)</span> <span class="title-line"></span></h3>
								<p>
									Небольшой сайт, как правило, состоящий из одной веб-страниц и содержащий основную информацию об организации, частном лице, компании, товарах или услугах, прейскуранты, контактные данные. Подходит для быстрого старта.
								</p>
								<div class="site-work__item_price"><span>ОТ</span> 100 <span>usd</span></div>
							</div>
						</div>

						<div class="site-work__item">
							<div>
								<div class="site-work__item_dekor"></div>
								<h3>Корпоративные <br> <span>сайты</span> <span class="title-line"></span></h3>
								<p>
									Сайт компании, ее официальное виртуальное представительство в интернете. Эфективный бизнес сайт ,который продает
								</p>
								<div class="site-work__item_price"><span>ОТ</span> 200 <span>usd</span></div>
							</div>
						</div>

						<div class="site-work__item">
							<div>
								<div class="site-work__item_dekor"></div>
								<h3>Интернет- <br>магазин <span class="title-line"></span></h3>
								<p>
									Платформа для продажи любых товаров через интернет. Даст Вам высокую конверсию, а соответственно и прибыль, не заставит себя ждать!
								</p>
								<div class="site-work__item_price"><span>от</span> 300 <span>usd</span></div>
							</div>
						</div>

						<div class="site-work__item">
							<div>
								<div class="site-work__item_dekor"></div>
								<h3>Сайт <br>Каталог <span class="title-line"></span></h3>
								<p>
									Сайт в котором представлен перечень товаров с подробным описанием, подкрепленным фотографиями и статьями. Предназначается для ознакомления потенциальных клиентов с ассортиментом товаров из каталога.
								</p>
								<div class="site-work__item_price"><span>от</span> 150 <span>usd</span></div>
							</div>
						</div>

						<div class="site-work__item">
							<div>
								<div class="site-work__item_dekor"></div>
								<h3>Wow-сайты</h3>
								<p>
									Нам мало просто соответствовать ожиданиям. Мы хотим удивлять!Так рождаются WOW-сайты, которые запоминаются надолго.
									<br>
									Сайт с индивидуальным дизайном и функционалом. Рационально оформленный проект станет визитной карточкой владельца и подчеркнет его статус.
								</p>
								<div class="site-work__item_price"><span>от</span> 400 <span>usd</span></div>
							</div>
						</div>

						<div class="site-work__item">
							<h3>
								<span></span>
								<a href="<?php echo get_home_url(); ?>/seo" class="link">ПРОДВИЖЕНИЕ САЙТОВ <span></span></a>
							</h3>
							<h3 class="site-work__item_click">
								<span></span>
								<a href="#contacts" class="link">Заказать услугу<span></span></a>
							</h3>
						</div>
					</div>

				</div>
			</div>
		</section>

		<?php get_template_part( 'parts/portfolio' ); ?>

		<?php get_template_part( 'parts/form' ); ?>

<?php get_footer(); ?>
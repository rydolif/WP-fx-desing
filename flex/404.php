<?php
	get_header();
?>

<body class="no-scroll about">

	<header class="error-404 header header--page"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
					</nav>
					<div class="header__next">
				</div>
				</div>

				<div class="header__line col-lg-4 order-lg-12 order-md-1">
					<div class="header__language">
					</div>

					<div class="header--page__block-title">
						<h2><?php esc_html_e( 'Unfortunately! This page could not be found.', 'schoolstudy' ); ?></h2>

						<a href="<?php echo get_home_url(); ?>" class="btn link">Go back to the main</a>

					</div>

					<span>fx-design web production</span>
				</div>

			</div>
		</div>
	</header>


<?php
	get_footer();

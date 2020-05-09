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
		
		<section class="about policy section">
			<div class="container">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
				<?php endif; ?>

			</div>
		</section>

		<?php get_template_part( 'parts/form' ); ?>

<?php get_footer(); ?>
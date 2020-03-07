

<section class="section section--dark">
	<div class="container">

		<div class="portfolio" id="price">

			<p class="sub-title">наше портфолио</p>
			<h2>Получите гарантированый <br>результат <span class="portfolio__title-line title-line"></span></h2>

			<div class="portfolio__slider swiper-container">

				<div class="swiper-wrapper">
					<?php if( have_rows('list', 'option') ): ?>
						<?php while( have_rows('list', 'option') ): the_row(); 
							$big = get_sub_field('big');
							$min = get_sub_field('min');
							$name = get_sub_field('name');
						?>

							<a href="<?php echo $big; ?>" class="portfolio__slider_slide swiper-slide" data-fancybox="gallery">
								<img src="<?php echo $min; ?>" alt="">
								<p><?php echo $name; ?><span class="title-line"></span></p>
							</a>

						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			
				<div class="swiper-button-prev"> <span class="portfolio__prev title-line"></span> назад</div>
				<div class="swiper-button-next"> <span class="portfolio__next title-line"></span> далее</div>

			</div>
		</div>

	</div>
</section>
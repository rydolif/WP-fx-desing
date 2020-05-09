

<section class="section section--dark">
	<div class="container">

		<div class="portfolio" id="price">

			<p class="sub-title wow bounceInUp" data-wow-duration="2s">our portfolio</p>
			<h2 class="wow bounceInUp" data-wow-duration="2s">You will get the guaranted<br>result <span class="portfolio__title-line title-line"></span></h2>

			<div class="portfolio__slider swiper-container">

				<div class="swiper-wrapper">
					<?php if( have_rows('list', 'option') ): ?>
						<?php while( have_rows('list', 'option') ): the_row(); 
							$big = get_sub_field('big');
							$min = get_sub_field('min');
							$name = get_sub_field('name');
							$text = get_sub_field('text');
						?>

							<a href="<?php echo $big; ?>" class="portfolio__slider_slide swiper-slide" data-fancybox="gallery">
								<img src="<?php echo $min; ?>" alt="">
								<div>
									<h3><?php echo $name; ?></h3>
									<p><?php echo $text; ?></p>
								</div>
							</a>

						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			
				<div class="swiper-button-prev"> <span class="portfolio__prev title-line"></span> previous</div>
				<div class="swiper-button-next"> <span class="portfolio__next title-line"></span> next</div>

			</div>
		</div>

	</div>
</section>
<!DOCTYPE html>
<html lang="ru">

<head>
	<title><?php wp_title(""); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">
	<meta name="theme-color" content="#000">
	<meta name='freelancehunt' content='7148179d394240c' />

</head>

<?php wp_head(); ?>

	<div id="preloader">
		<div id="ctn-preloader" class="ctn-preloader">
			<div class="animation-preloader">
				<div class="spinner"></div>
				<div class="txt-loading">
					<span data-text-preloader="F" class="letters-loading">
						F
					</span>
					<span data-text-preloader="L" class="letters-loading">
						L
					</span>
					<span data-text-preloader="E" class="letters-loading">
						E
					</span>
					<span data-text-preloader="X" class="letters-loading">
						X
					</span>
				</div>
			</div>	
			<div class="loader-section section-left"></div>
			<div class="loader-section section-right"></div>
		</div>
	</div>
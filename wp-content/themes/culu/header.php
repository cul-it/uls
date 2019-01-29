<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package culu
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<!-- Emergency Banner -->
	<script src="//embanner.univcomm.cornell.edu/OWC-emergency-banner.js" type="text/javascript"></script>
</head>

<body <?php body_class(); ?>>

<!--<div id="page" class="site">-->

	<!--<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'culu' ); ?></a>-->

	<!-- header -->
	<header>
		<!-- logo -->
    <a class="logo-cul" href="https://www.library.cornell.edu/"><img src="<?php echo get_template_directory_uri(); ?>/images/branding/cul-logo.svg" alt="Cornell University Library logo"></a>
		<!-- /logo -->
		<!-- nav -->

		<nav class="user-tools">
			<ul>
				<li><a href="#">My Account</a></li>
				<li><a href="#">Search</a></li>
			</ul>
		</nav>
  </header>
	<!-- header -->


	<!-- header -->

	<!-- Declare variables for hero images -->
	<!-- Use Kirki to handle customizer -->

	<?php $image_hero_large = get_theme_mod( 'image_setting_url_hero_large', '' ); ?>
	<?php $image_hero_medium = get_theme_mod( 'image_setting_url_hero_medium', '' ); ?>
	<?php $image_hero_small = get_theme_mod( 'image_setting_url_hero_small', '' ); ?>

	<!-- Not ideal below - REFACTOR -->
	<style>

	.hero__content {

		background:
			url('<?php echo THEME_IMG_PATH;?>/hero/hero-home-top.svg') no-repeat center -20px,
			url('<?php echo THEME_IMG_PATH;?>/hero/hero-home-bottom.svg') no-repeat center 200px,
			url('<?php echo get_domain_path( $image_hero_small );?>') no-repeat center -50px;

		}

	@media only screen and (min-width: 640px) {
		.hero__content {
			background:
				url('<?php echo THEME_IMG_PATH;?>/hero/hero-home-top.svg') no-repeat center 0,
				url('<?php echo THEME_IMG_PATH;?>/hero/hero-home-bottom.svg') no-repeat center 210px,
				url('<?php echo get_domain_path( $image_hero_medium );?>') no-repeat -600px -100px;
			}
	}

	@media only screen and (min-width: 768px) {
	.hero__content {
			background:
				url('<?php echo THEME_IMG_PATH;?>/hero/hero-home-top.svg') no-repeat center -20px,
				url('<?php echo THEME_IMG_PATH;?>/hero/hero-home-bottom.svg') no-repeat center 200px,
				url('<?php echo get_domain_path( $image_hero_medium );?>') no-repeat center center;
		}
	}

	@media only screen and (min-width: 1440px) {
		.hero__content {
			background:
				url('<?php echo THEME_IMG_PATH;?>/hero/hero-home-top.svg') no-repeat center -120px,
				url('<?php echo THEME_IMG_PATH;?>/hero/hero-home-bottom.svg') no-repeat center 290px,
				url('<?php echo get_domain_path( $image_hero_large );?>') no-repeat center center;
		}

	}

	@media only screen and (min-width: 1600px) {
		.hero__content {
			background:
				url('<?php echo THEME_IMG_PATH;?>/hero/hero-home-top.svg') no-repeat center 0,
				url('<?php echo THEME_IMG_PATH;?>/hero/hero-home-bottom.svg') no-repeat center 340px,
				url('<?php echo get_domain_path( $image_hero_large );?>') no-repeat center center;
		}
	}

	</style>

	<?php //echo file_get_contents("wp-content/themes/unitlibrary/img/hero-home-top.svg"); ?>

	<?php //echo file_get_contents("hero-home-top.svg"); ?>

	<section class="hero__content">

			<div class="all-libraries">
				<a href="https://www.library.cornell.edu/" title="Cornell University Library"><i class="fa fa-arrow-left"></i> ALL LIBRARIES</a>
			</div>

			<div class="college">

	      <?php $college_label = get_theme_mod( 'college_label', '' ); ?>
	      <?php $college_link = get_theme_mod( 'college_link', '' );?>

	      <a href="<?php echo $college_link ?>"><?php echo $college_label ?></a>

			</div>

			<div class="subheader">

				<h1><a href="/"><?php echo get_bloginfo( 'name' ); ?></a></h1>

				<time><i class="fa fa-clock-o" aria-hidden="true"></i>

					<?php echo do_shortcode('[libcal_status_now]') ?>
					<?php echo do_shortcode('[libcal_hours_today]') ?>

				/ <a class="full-hours" href="https://www.library.cornell.edu/libraries/vet">Full Hours</a></time>

				<ul>
					<li><a href="https://www.library.cornell.edu/ask/email"><span class="fa fa-envelope-o"></span></a></li>
					<li><a href="tel:607-253-3510"><i class="fa fa-phone" aria-hidden title="Call Vet Library"></i></a></li>
					<li><a href="https://www.google.com/maps/dir/''/vet+library+cornell+location/@42.4447442,-76.4658848,338a,35y,39.29t/data=!3m1!1e3!4m8!4m7!1m0!1m5!1m1!1s0x89d081f877bfffff:0xe67944fb1a4aff17!2m2!1d-76.4658424!2d42.4474921"><span class="fa fa-map-marker" aria-hidden title="Vet Library Location"></span></a></li>
				</ul>
			</div>

		</section>

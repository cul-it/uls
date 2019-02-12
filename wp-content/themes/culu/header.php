<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and header content
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

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

	<!-- Emergency Banner -->
	<script src="//embanner.univcomm.cornell.edu/OWC-emergency-banner.js" type="text/javascript"></script>
</head>

<body <?php body_class(); ?>>

<!--<div id="page" class="site">-->

	<!--<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'culu' ); ?></a>-->

	<!-- header -->

	<header>
		<!-- logo -->
		<div class="banding">
			<a class="logo-cul" href="https://www.library.cornell.edu/"><img src="<?php echo get_template_directory_uri(); ?>/images/branding/cul-logo.svg" alt="Cornell University Library logo"></a>
			<!-- /logo -->
		</div>

		<!-- nav -->

		<nav class="user-tools">
			<ul>
				<!--<li><a href="#"><i class="fas fa-bars"></i></a></li>-->
				<li><a href="#"><i class="fas fa-user"></i></a></li>
				<li><a href="#"><i class="fas fa-search"></i></a></li>
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
			url('<?php echo THEME_IMG_PATH;?>/hero/hero-home-top.svg') no-repeat center -120px,
			url('<?php echo THEME_IMG_PATH;?>/hero/hero-home-bottom.svg') no-repeat -150px 220px,
			url('<?php echo get_domain_path( $image_hero_small );?>') no-repeat center -50px;

		}

	@media only screen and (min-width: 640px) {
		.hero__content {

			background:
				url('<?php echo THEME_IMG_PATH;?>/hero/hero-home-top.svg') no-repeat center -120px,
				url('<?php echo THEME_IMG_PATH;?>/hero/hero-home-bottom.svg') no-repeat -140px 210px,
				url('<?php echo get_domain_path( $image_hero_medium );?>') no-repeat -600px -100px;
			}
	}

	@media only screen and (min-width: 768px) {
	.hero__content {

			background:
				url('<?php echo THEME_IMG_PATH;?>/hero/hero-home-top.svg') no-repeat center -120px,
				url('<?php echo THEME_IMG_PATH;?>/hero/hero-home-bottom.svg') no-repeat -120px 200px,
				url('<?php echo get_domain_path( $image_hero_medium );?>') no-repeat center center;
		}
	}

	@media only screen and (min-width: 1440px) {
		.hero__content {

			background:
				url('<?php echo THEME_IMG_PATH;?>/hero/hero-home-top.svg') no-repeat center -120px,
				url('<?php echo THEME_IMG_PATH;?>/hero/hero-home-bottom.svg') no-repeat -120px 220px,
				url('<?php echo get_domain_path( $image_hero_large );?>') no-repeat center center;
		}

	}

	@media only screen and (min-width: 1600px) {
		.hero__content {
			background:
				url('<?php echo THEME_IMG_PATH;?>/hero/hero-home-top.svg') no-repeat center -100px,
				url('<?php echo THEME_IMG_PATH;?>/hero/hero-home-bottom.svg') no-repeat -120px 300px,
				url('<?php echo get_domain_path( $image_hero_large );?>') no-repeat center center;
		}
	}


	</style>

	<?php //echo file_get_contents("wp-content/themes/unitlibrary/img/hero-home-top.svg"); ?>

	<?php //echo file_get_contents("hero-home-top.svg"); ?>

	<section class="

		<?php
			if ( is_front_page()  ) {
				echo "hero__content";
			} else {
				echo "hero__content interior-pages";
			}
		 ?>
	">
	<div class="all-libraries">
		<a href="https://www.library.cornell.edu/" title="Cornell University Library"><i class="fa fa-arrow-left"></i> ALL LIBRARIES</a> | <span><a href="#">Cornell Library Hours</a></span> | <span><a href="#">Ask a Librarian</span></a>
	</div>

	<div class="college">

    <?php $college_label = get_theme_mod( 'college_label', '' ); ?>
    <?php $college_link = get_theme_mod( 'college_link', '' );?>

    <a href="<?php echo $college_link ?>"><?php echo $college_label ?></a>

	</div>

	<div class="subheader">

		<h1><a href="/"><?php echo get_bloginfo( 'name' ); ?></a></h1>

		<time><i class="fa fa-clock-o" aria-hidden="true"></i>

			<span class="libcal-status-now"><?php echo do_shortcode('[libcal_status_now]') ?></span>
			<span class="libcal-hours-today"> <?php echo do_shortcode('[libcal_hours_today]') ?> </span>

		- <a class="full-hours" href="#">Full Hours</a> /</time>

		<ul class="header-contact">
			<li><a href="https://www.library.cornell.edu/ask/email"><span class="fas fa-envelope"></span></a></li>
			<!--<li><a href=""><i class="fas fa-phone-square" aria-hidden title=""></i></a></li>-->
			<li><a href=""><span class="fas fa-map-marker-alt" aria-hidden title="Vet Library Location"></span></a></li>
		</ul>
	</div>
</section>

<nav id="site-navigation" class="main-navigation">
	<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php //esc_html_e( 'Menu', 'culu' ); ?><i class="fas fa-bars"></i></button>
	<?php
	wp_nav_menu( array(
		'theme_location' => 'primary',
		'menu_id'        => 'primary-menu'
	) );
	?>
</nav><!-- #site-navigation -->

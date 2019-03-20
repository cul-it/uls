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

	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/images/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<?php wp_head(); ?>

	<!-- Emergency Banner -->
	<script src="//embanner.univcomm.cornell.edu/OWC-emergency-banner.js" type="text/javascript"></script>
</head>

<body <?php body_class(); ?>>

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'culu' ); ?></a>

	<!-- header -->
	<header class="branding" aria-label="Branding header">
		<!-- logo -->
		<div class="banding">

			<a class="logo-cul" href="https://www.library.cornell.edu/" title="Cornell University Library website"><img src="<?php echo get_template_directory_uri(); ?>/images/branding/cul-logo.svg" alt="Cornell University Library logo"></a>

			<!-- /logo -->
		</div>

		<!-- nav -->
		<nav class="user-tools" aria-label="My account and Search navigation">

			<ul>
				<!--<li><a href="#"><i class="fas fa-bars"></i></a></li>-->
				<li><a href="https://www.library.cornell.edu/myacct" title="My account"><span class="fa fa-user-o" aria-hidden="true" aria-label="My account"></span></a></li>
				<li><a href="#user-tool-search" class="icon-search" title="Search"><span class="fa fa-search" aria-hidden="true" aria-label="Search"></span></a></li>
			</ul>

		</nav>

  </header>

	<!-- search -->
		<form class="user-tool-search" role="search" method="get" action="/">

			<div class="search-field">

				<label for="search">Search</label>
				<input type="search" id="search" value="" name="s">

				<div class="search-filter" role="radiogroup" aria-label="search-filter">

					<input type="radio" name="search-type" id="catalog" value="catalog" checked />
					<label for="catalog">Catalog</label>
					<input class="site-search" type="radio" name="search-type" id="site" value="site" />
					<label for="site">This site</label>

				</div>
			</div>

			<button class="btn-submit" type="submit">Search</button>
			<button class="btn-close-search">Close</button>

		</form>

	<!-- header -->

	<!-- Declare variables for theme options-->
	<!-- Use Kirki to handle customizer -->
	<?php
		$image_hero_large = get_theme_mod( 'image_setting_url_hero_large', '' );
		$image_hero_medium = get_theme_mod( 'image_setting_url_hero_medium', '' );
		$image_hero_small = get_theme_mod( 'image_setting_url_hero_small', '' );
		$full_hours_label = get_theme_mod( 'full_hours_label', '' );
		$google_map_label = get_theme_mod( 'google_map_label', '' );
	 ?>

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

	<section class="

		<?php
			if ( is_front_page() ) {
				echo "hero__content";
			} else {
				echo "hero__content interior-pages";
			}
		 ?>
	" aria-label="Hero header">

	<div class="all-libraries">

		<a href="https://www.library.cornell.edu/"><span class="fa fa-arrow-left" aria-hidden="true"></span> ALL LIBRARIES</a> | <span><a href="https://www.library.cornell.edu/libraries">Hours</a></span> | <span><a href="https://www.library.cornell.edu/ask/email">Ask a Librarian</span></a>

	</div>

	<div class="college">

    <?php
			$college_label = get_theme_mod( 'college_label', '' );
	    $college_link = get_theme_mod( 'college_link', '' );
		?>

    <a href="<?php echo $college_link ?>"><?php echo $college_label ?></a>

	</div>

	<div class="subheader">

		<h1><a href="/"><?php echo get_bloginfo( 'name' ); ?></a></h1>

		<time>

			<span class="fa fa-clock-o icon-time" aria-hidden="true"></span>
			<span class="libcal-status-now"><?php echo do_shortcode('[libcal_status_now]') ?></span>
			<span class="libcal-hours-today"> <?php echo do_shortcode('[libcal_hours_today]') ?> </span>

			- <a class="full-hours" href="<?php echo $full_hours_label ?>">Full Hours</a> /
		</time>

			<ul class="header-contact">

				<li><a href="https://www.library.cornell.edu/ask/email" title="Contact us"><span class="fa fa-envelope" aria-hidden="true" aria-label="Contact us"></span></a></li>
				<!--<li><a href=""><i class="fas fa-phone-square" aria-hidden title=""></i></a></li>-->
				<li><a href="<?php echo $google_map_label ?>" title="Library location"><span class="fa fa-map-marker" aria-hidden="true" aria-label="Library Location"></span></a></li>

			</ul>

	</div>

</section>

<!-- #site-navigation -->
<nav id="site-navigation" class="main-navigation" aria-label="main navigation">

	<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" title="Main Navigation" <?php //esc_html_e( 'Menu', 'culu' ); ?>><span class="fa fa-bars" aria-hidden="true"><span class="screen-reader-text">Main Navigation</span></span></button>
	<?php
	wp_nav_menu( array(
		'theme_location' => 'primary',
		'menu_id'        => 'primary-menu'
	) );
	?>

</nav><!-- #site-navigation -->

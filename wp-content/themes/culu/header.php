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

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'culu' ); ?></a>
	<!-- header -->
	<header>
		<!-- logo -->
    <a class="logo-cul" href="https://www.library.cornell.edu/"><img src="<?php echo get_template_directory_uri(); ?>/images/branding/cul-logo.svg" alt="Cornell University Library logo"></a>
		<!-- /logo -->
		<!-- nav -->

		<nav class="user-tools" aria-labelledby="user-tools">
			<ul id="user-tools" >
				<li><a href="#">My Account</a></li>
				<li><a href="#">Search</a></li>
			</ul>
		</nav>
  </header>
	<!-- header -->

<?php
/**
 * The template for displaying single staff post
 * Template Name: Staff
 * Template Post Type: post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package culu
 */

get_header();
?>

<main id="main-content" class="page-interior">

	<?php

	while ( have_posts() ) :

		the_post();

		?>

		<section class="staff-profile" aria-label="Staff profile">


			  <img class="staff-photo" src="<?php the_field('photo');?>" alt="">



				<h2><?php echo the_field('first_name'); echo the_field('last_name'); ?></h2>
				<h3><?php echo the_field('title'); ?></h3>


				<p><a href="mailto:<?php echo the_field('email');?>"><?php echo the_field('email');?></a></p>


				<p>Phone: <?php the_field('phone');?></p>

				<p><a href="#" class="btn-graphic"><?php echo the_field('consultation'); ?>Book a Consultation</a></p>

			</div>

		</section>

		<?php

		the_post_navigation();


		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'culu' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			'<span class="edit-link">',
			'</span>'
		);


	endwhile; // End of the loop.

	?>

</main><!-- #main -->

<?php

//get_sidebar();
get_footer();

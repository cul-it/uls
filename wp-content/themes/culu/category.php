<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package culu
 */

get_header();
?>

<main id="main-content" class="page-interior">

  <?php

    $category = get_the_category();
    $theCategory = $category[0]->cat_name;


  if ( $theCategory == 'Astronomy Core Books') {
    get_template_part('loop-core-books');
    echo $theCategory;

  }

  ?>

    <?php get_template_part('pagination'); ?>

		</main><!-- #main -->

<?php

get_footer();

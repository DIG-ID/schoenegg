<?php
/**
 * Template Name: Offers Template
 */

get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		do_action( 'before_main_content' );
			get_template_part( 'template-parts/modules/gallery-slider' );
			get_template_part( 'template-parts/pages/offers/intro' );
		do_action( 'after_main_content' );
	endwhile;
endif;
get_footer();

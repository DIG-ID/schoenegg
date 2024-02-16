<?php
/**
 * Template Name: Restaurant Template
 */

get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		do_action( 'before_main_content' );
			do_action( 'before_post_content' );
				get_template_part( 'template-parts/modules/gallery-slider' );
				get_template_part( 'template-parts/pages/restaurant/intro' );
				get_template_part( 'template-parts/modules/section-impressions' );
			do_action( 'after_post_content' );
		do_action( 'after_main_content' );
	endwhile;
endif;
get_footer();

<?php
/**
 * Template Name: Contact Template
 */

get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		do_action( 'before_main_content' );
			do_action( 'before_post_content' );
				get_template_part( 'template-parts/modules/gallery-slider' );
				get_template_part( 'template-parts/pages/contact/location' );
				get_template_part( 'template-parts/pages/contact/arrival' );
				get_template_part( 'template-parts/pages/contact/contact' );
			do_action( 'after_post_content' );
		do_action( 'after_main_content' );
	endwhile;
endif;
get_footer();

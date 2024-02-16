<?php
/**
 * Template Name: Wengen Template
 */

get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		do_action( 'before_main_content' );
			get_template_part( 'template-parts/modules/gallery-slider' );
			get_template_part( 'template-parts/pages/wengen/intro' );
			get_template_part( 'template-parts/pages/wengen/loop' );
		do_action( 'after_main_content' );
	endwhile;
endif;
get_footer();

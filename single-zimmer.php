<?php
get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		do_action( 'before_main_content' );
			do_action( 'before_post_content' );
				get_template_part( 'template-parts/modules/gallery-slider' );
				get_template_part( 'template-parts/posts/zimmer/content' );
				get_template_part( 'template-parts/posts/post-navigation' );
				get_template_part( 'template-parts/modules/loop-relaxation' );
			do_action( 'after_post_content' );
		do_action( 'after_main_content' );
	endwhile;
endif;
get_footer();

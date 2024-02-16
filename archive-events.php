<?php
get_header();
do_action( 'before_main_content' );
get_template_part( 'template-parts/archives/events/gallery' );
get_template_part( 'template-parts/archives/events/intro' );
get_template_part( 'template-parts/modules/loop-events' );
//get_template_part( 'template-parts/modules/' );
do_action( 'after_main_content' );
get_footer();

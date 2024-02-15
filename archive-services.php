<?php
get_header();
do_action( 'before_main_content' );
get_template_part( 'template-parts/archives/services/intro' );
get_template_part( 'template-parts/modules/loop-wellbeing' );
get_template_part( 'template-parts/modules/loop-relaxation' );
do_action( 'after_main_content' );
get_footer();

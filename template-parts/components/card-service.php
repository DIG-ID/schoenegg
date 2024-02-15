<article id="post-<?php the_ID(); ?>" <?php post_class( 'card card--service col-span-1 md:col-span-4' ); ?>>
	<?php
	if ( has_post_thumbnail() ) :
		the_post_thumbnail( 'full', array( 'class' => 'w-full max-w-full object-cover' ) );
	endif;
	?>
	<h3 class="title__card title__card--no-hover py-6"><?php the_title(); ?></h3>
	<div class="text__area">
		<?php the_content(); ?>
	</div>
</article>

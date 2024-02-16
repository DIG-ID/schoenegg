<article id="post-<?php the_ID(); ?>" <?php post_class( 'card card--zimmer w-full lg:w-1/3 px-4 mb-4' ); ?>>
	<a href="<?php the_permalink(); ?>">
		<?php
		if ( has_post_thumbnail() ) :
			the_post_thumbnail( 'full', array( 'class' => 'max-w-full object-cover mb-8' ) );
		endif;
		?>
		<h2 class="title__card mb-4"><?php the_title(); ?></h2>
	</a>
</article>
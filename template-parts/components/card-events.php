<article id="post-<?php the_ID(); ?>" <?php post_class( 'hs-grid card card--events my-36' ); ?>>
	<div class="col-span-1 md:col-span-6">
		<?php
		if ( has_post_thumbnail() ) :
			the_post_thumbnail( 'full', array( 'class' => 'w-full max-w-full object-cover' ) );
		endif;
		?>
	</div>
	<div class="col-span-1 md:col-span-4">
		<?php
		$event_date = get_field( 'date' );
		if ( $event_date ) :
			echo '<p class="text__description">' . $event_date . '</p>';
		endif;
		?>
		<h2 class="title__card title__card--no-hover mb-8"><?php the_title(); ?></h2>
		<div class="text__area">
			<?php the_content(); ?>
		</div>
	</div>
</article>
<hr class="hs-container hs-divider">
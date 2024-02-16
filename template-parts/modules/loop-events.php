<section class="section-events">
	<div class="hs-container">
		<?php
		$events_args = array(
			'post_type'      => 'events',
			'posts_per_page' => -1,
			'post_status'    => 'publish',
			'orderby'        => 'date',
			'order'          => 'DESC',
		);
		$events_query = new WP_Query( $events_args );
		if ( $events_query->have_posts() ) :
			while ( $events_query->have_posts() ) :
				$events_query->the_post();
				get_template_part( 'template-parts/components/card-events' );
			endwhile;
			wp_reset_postdata();
		endif;
		?>
	</div>
</section>

<section class="section-services-relaxation py-36">
	<div class="hs-container">
		<div class="hs-grid">
			<div class="col-span-1 md:col-span-12">
				<?php
				$my_term    = 'erholung';
				$mytax      = 'dienstart';
				$myterm_obj = get_term_by( 'slug', $my_term, $mytax );
				if ( $myterm_obj && ! is_wp_error( $myterm_obj ) ) :
					echo '<h2 class="title__section">' . esc_html(  $myterm_obj->name ) . '</h2>';
				endif;
				?>
			</div>
		</div>
		<div class="hs-grid">
			<?php
			$tax_args = array(
				'post_type'      => 'services',
				'posts_per_page' => -1,
				'post_status'    => 'publish',
				'orderby'        => 'date',
				'order'          => 'DESC',
				'tax_query'      => array(
					array(
						array(
							'taxonomy' => $mytax,
							'field'    => 'slug',
							'terms'    => $my_term,
						),
					),
				),
			);
			$tax_query = new WP_Query( $tax_args );
			if ( $tax_query->have_posts() ) :
				while ( $tax_query->have_posts() ) :
					$tax_query->the_post();
					get_template_part( 'template-parts/components/card-service' );
				endwhile;
				wp_reset_postdata();
			endif;
			?>
		</div>
	</div>
</section>

<section class="section-rooms-filters pt-8">
	<div class="hs-container">
		<div class="hs-grid">
			<div class="col-span-12">
				<?php
				$type_terms = get_terms(
					array(
						'taxonomy'   => 'zimmertyp',
						'hide_empty' => true,
					)
				);
				if ( $type_terms ) :
					echo '<div class="zimmer-filters filter-button-group">';
					echo '<button class="button is-checked mb-3 sm:mb-0 w-full sm:w-auto" data-filter="*">' . esc_html__( 'Alles', 'hs' ) . '</button>';
					foreach ( $type_terms as $type_term ) :
						//var_dump($info);
						echo '<button class="button mb-3 sm:mb-0 w-full sm:w-auto" data-filter=".' . esc_attr( $type_term->taxonomy ) . '-' . esc_attr( $type_term->slug ) . '">' . esc_html( $type_term->name ) . '</button>';
					endforeach;
					echo '</div>';
				endif;
				?>
			</div>
		</div>
	</div>
</section>
<section class="section-rooms pb-16">
	<div class="hs-container">
		<div class="grid-rooms -mx-4">
			<?php
			$rooms_query_args = array(
				'post_type'   => 'zimmer',
				'post_status' => 'publish',
				'order'       => 'ASC',
				'orderbr'     => 'date',
			);
			$rooms_query = new WP_Query( $rooms_query_args );
			if ( $rooms_query->have_posts() ) :
				while ( $rooms_query->have_posts() ) :
					$rooms_query->the_post();
					get_template_part( 'template-parts/components/card-rooms' );
				endwhile;
			endif;
			wp_reset_postdata();
			?>
		</div>
	</div>
</section>
<div class="hs-container">
	<hr class="hs-container hs-divider">
</div>


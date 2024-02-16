<section class="section-rooms-filters pt-8">
	<div class="hs-container">
		<div class="hs-grid">
			<div class="col-span-8">
				<?php
				$type_terms = get_terms(
					array(
						'taxonomy'   => 'zimmertyp',
						'hide_empty' => true,
					)
				);
				if ( $type_terms ) :
					echo '<div class="zimmer-filters filter-button-group">';
					echo '<button class="button is-checked" data-filter="*">' . esc_html__( 'Alles', 'hs' ) . '</button>';
					foreach ( $type_terms as $type_term ) :
						//var_dump($info);
						echo '<button class="button" data-filter=".' . esc_attr( $type_term->taxonomy ) . '-' . esc_attr( $type_term->slug ) . '">' . esc_html( $type_term->name ) . '</button>';
					endforeach;
					echo '</div>';
				endif;
				?>
			</div>
		</div>
	</div>
</section>
<section class="section-rooms pb-16">
	<div class="hs-container lg:!px-0">
		<div class="grid-rooms -mx-4">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/components/card-rooms' );
				endwhile;
			endif;
			?>
		</div>
	</div>
</section>
<hr class="hs-container hs-divider">

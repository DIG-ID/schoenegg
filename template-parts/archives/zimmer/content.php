<section class="section-rooms pt-28 pb-16">
	<div class="hs-container lg:!px-0">
		<div class="hs-grid">
			<div class="col-span-1 md:col-span-12">
				<h2 class="title__page"><?php the_field( 'archives_zimmer_title', 'options' ); ?></h2>
				<p class="text__description"><?php the_field( 'archives_zimmer_description', 'options' ); ?></p>
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
		<div class="grid-rooms -mx-4">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					?>
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
					<?php
				endwhile;
			endif;
			?>
		</div>
	</div>
</section>
<hr class="hs-container hs-divider">
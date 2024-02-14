<section class="section-post-content mb-16">
	<div class="hs-container lg:!px-8 xl:!px-0">
		<div class="hs-grid">
			<div class="col-span-1 md:col-span-8">
				<h1 class="title__section--rooms"><?php the_title(); ?></h1>
				<div class="text__area mb-10"><?php the_content(); ?></div>
				<div class="zimmer-buttons flex flex-col gap-y-4 md:flex-row md:gap-x-4 lg:gap-x-8 mb-8 md:mb-0">
					<button class="btn__primary"><?php esc_html_e( 'Zimmer Buchen', 'hs' ); ?></button>
					<a class="btn__secondary" href="<?php echo esc_url( get_post_type_archive_link( 'zimmer' ) ); ?>"><?php esc_html_e( 'Übersicht', 'hs' ); ?></a>
				</div>
			</div>
			<div class="col-span-1 md:col-span-2 md:col-start-10">
				<div class="zimmer-information">
					<h2><?php esc_html_e( 'Informationen', 'hs' ); ?></h2>
					<?php
					$zimmer_info = get_the_terms( get_the_ID(), 'informationen' );
					if ( $zimmer_info && ! is_wp_error( $zimmer_info ) ) :
						echo '<ul>';
						foreach ( $zimmer_info as $info ) :
							echo '<li>' . esc_html( $info->name ) . '</li> ';
						endforeach;
						echo '</ul>';
					endif;
					?>
				</div>
			</div>
		</div>
	</div>
</section>
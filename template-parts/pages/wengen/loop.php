<section class="section-wengen py-16 lg:py-36">
	<div class="hs-container">
		<div class="hs-grid">
			<?php
			if ( have_rows( 'content' ) ) :
				while ( have_rows( 'content' ) ) :
					the_row();
					$wimage = get_sub_field( 'image' );
					$wlink   = get_sub_field( 'link' );
					?>
					<article class="card card--wengen col-span-1 md:col-span-6 mb-16">
						<?php
						if ( $wimage ) :
							echo wp_get_attachment_image( $wimage, 'full', false, array( 'class' => 'max-w-full object-cover' ) );
						endif;
						?>
						<h2 class="title__card title__card--no-hover py-6"><?php the_sub_field( 'title' ); ?></h2>
						<p class="text__description mb-6"><?php the_sub_field( 'text' ); ?></p>
						<?php
						if ( $wlink ) :
							$link_url    = $wlink['url'];
							$link_title  = $wlink['title'];
							$link_target = $wlink['target'] ? $wlink['target'] : '_self';
							?>
							<a class="btn__secondary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
							<?php
						endif;
						?>
					</article>
					<?php
				endwhile;
			endif
			?>
		</div>
	</div>
</section>

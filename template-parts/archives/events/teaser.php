<section class="section-teaser py-36">
	<div class="hs-container">
		<div class="hs-grid">
			<div class="col-span-1 md:col-span-10 md:col-start-2">
				<?php
				$image = get_field( 'archives_events_teaser_image', 'options' );
				if ( $image ) :
					echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full object-cover mb-6' ) );
				endif;
				?>
				<h3 class="title__section !mb-6"><?php the_field( 'archives_events_teaser_title', 'options' ); ?></h3>
				<div class="text__area mb-10"><?php the_field( 'archives_events_teaser_text', 'options' ); ?></div>
				<?php
				$link = get_field( 'archives_events_teaser_link', 'options' );
				if ( $link ) :
					$link_url    = $link['url'];
					$link_title  = $link['title'];
					$link_target = $link['target'] ? $link['target'] : '_self';
					?>
					<a class="btn__secondary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					<?php
				endif;
				?>
			</div>
		</div>
	</div>
</section>
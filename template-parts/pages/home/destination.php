<section class="section-destination py-36">
	<div class="hs-container">
		<div class="hs-grid">
			<div class="col-span-1 md:col-span-5">
				<h3 class="title__section--subtitle"><?php the_field( 'destination_subtitle' ); ?></h3>
				<h2 class="title__section"><?php the_field( 'destination_title' ); ?></h2>
				<div class="text__area mb-10"><?php the_field( 'destination_text' ); ?></div>
				<?php
				$link = get_field( 'destination_button' );
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
			<div class="col-span-1 md:col-span-7">
				<?php
				$iframe = get_field( 'destination_iframe' );
				// Define allowed HTML tags and attributes for wp_kses.
				$allowed_html = array(
					'iframe' => array(
						'src'                   => true,
						'width'                 => true,
						'height'                => true,
						'frameborder'           => true,
						'marginheight'          => true,
						'marginwidth'           => true,
						'scrolling'             => true,
						'allowfullscreen'       => true,
						'webkitallowfullscreen' => true,
						'mozallowfullscreen'    => true,
						'oallowfullscreen'      => true,
						'msallowfullscreen'     => true,
						'style'                 => true,
					),
				);
				$sanitized_code = wp_kses( $iframe, $allowed_html );
				if ( $sanitized_code ) :
					echo $sanitized_code;
				endif;
				?>
			</div>
		</div>
	</div>
</section>
<hr class="hs-container hs-divider">
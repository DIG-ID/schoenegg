<section class="section-destination py-16 lg:py-36">
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
					// The webcam (Roundshot) sets Google Analytics cookies, so Cookiebot only loads it after statistics consent.
					// data-no-lazy keeps WP Rocket from rewriting the iframe, which would bypass the Cookiebot block.
					$sanitized_code = preg_replace( '/<iframe\b([^>]*?)\ssrc=/i', '<iframe class="cookieconsent-optin-statistics" data-cookieconsent="statistics" data-no-lazy="1"$1 data-cookieblock-src=', $sanitized_code );
					echo $sanitized_code;
					?>
					<div class="cookieconsent-optout-statistics" style="display:flex; flex-direction:column; align-items:center; justify-content:center; gap:20px; min-height:300px; padding:30px; text-align:center; background:#f5f5f5;">
						<p><?php esc_html_e( 'Um die Live-Webcam anzusehen, akzeptieren Sie bitte die Statistik-Cookies.', 'hs' ); ?></p>
						<a class="btn__secondary" style="width:auto; max-width:100%; white-space:normal; line-height:1.4; padding-top:.6rem; padding-bottom:.6rem;" href="javascript:Cookiebot.renew()"><?php esc_html_e( 'Cookie-Einstellungen ändern', 'hs' ); ?></a>
					</div>
					<?php
				endif;
				?>
			</div>
		</div>
	</div>
</section>
<div class="hs-container">
	<hr class="hs-container hs-divider">
</div>

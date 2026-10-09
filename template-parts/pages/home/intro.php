<section class="section-intro py-16 lg:py-36">
	<div class="hs-container">
		<div class="hs-grid">
			<div class="col-span-1 md:col-span-8">
				<h1 class="title__section"><?php the_field( 'intro_title' ); ?></h1>
				<div class="text__area"><?php the_field( 'intro_text' ); ?></div>
			</div>
			<div class="col-span-1 md:col-span-3 md:col-start-10">
				<div class="mb-10">
					<?php $tripadvisor = get_field( 'intro_tripadvisor' );
					echo $tripadvisor; ?>
				</div>
				<div class="">
					<?php
					$iframe = get_field( 'intro_trustyou' );
					// The TrustYou seal is a third-party iframe, so Cookiebot only loads it after marketing consent.
					// data-no-lazy keeps WP Rocket from rewriting the iframe, which would bypass the Cookiebot block.
					$iframe = preg_replace( '/<iframe\b([^>]*?)\ssrc=/i', '<iframe class="cookieconsent-optin-marketing" data-cookieconsent="marketing" data-no-lazy="1"$1 data-cookieblock-src=', (string) $iframe );
					echo $iframe; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="hs-container">
	<hr class="hs-container hs-divider">
</div>

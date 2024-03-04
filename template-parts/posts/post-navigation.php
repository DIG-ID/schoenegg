<section class="section-posts-navigation py-6 hidden invisible lg:block lg:visible">
	<div class="hs-container">
		<?php
		// Previous/next post navigation.
		the_post_navigation(
			array(
				'next_text' => '<p class="meta-nav">' . esc_html__( 'Nächstes Zimmer →', 'hs' ) . '</p>',
				'prev_text' => '<p class="meta-nav">' . esc_html__( '← Letztes Zimmer', 'hs' ) . '</p>',
			)
		);
		?>
	</div>
</section>
<div class="hs-container">
	<hr class="hs-container hs-divider">
</div>

<section class="section-hosts py-36">
	<div class="hs-container">
		<div class="hs-grid">
			<div class="col-span-1 md:col-span-5">
				<h3 class="title__section--subtitle"><?php the_field( 'hosts_subtitle' ); ?></h3>
				<h2 class="title__section"><?php the_field( 'hosts_title' ); ?></h2>
				<div class="text__area"><?php the_field( 'hosts_text' ); ?></div>
			</div>
			<div class="col-span-1 md:col-span-7">
				<?php
				$image = get_field( 'hosts_image' );
				if ( $image ) :
					echo wp_get_attachment_image( $image, 'full' );
				endif;
				?>
			</div>
		</div>
	</div>
</section>
<hr class="hs-container hs-divider">

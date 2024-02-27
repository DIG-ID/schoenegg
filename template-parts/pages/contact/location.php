<section class="section-location py-16 lg:py-36">
	<div class="hs-container">
		<div class="hs-grid">
			<div class="col-span-1 md:col-span-12">
				<h1 class="title__section"><?php the_field( 'location_title' ); ?></h1>
				<div class="text__area mb-8"><?php the_field( 'location_text' ); ?></div>
				<?php
				$image = get_field( 'location_image' );
				if ( $image ) :
					echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full object-cover my-6' ) );
				endif;
				?>
            </div>
        </div>
    </div>
</section>
<hr class="hs-container hs-divider">
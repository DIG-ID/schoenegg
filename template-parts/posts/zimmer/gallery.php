<section class="section-gallery-hero h-[85svh] bg-slate-50 mb-12 overflow-hidden">
	<div class="swiper galleryHeroSwiper h-full">
		<div class="swiper-wrapper h-full">
			<?php
			$gallery = get_field( 'gallery' );
			if ( $gallery ) :
				foreach ( $gallery as $image ) :
					echo '<div class="swiper-slide h-full">' . wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full h-full max-w-full object-cover' ) ) . '</div>';
				endforeach;
			endif;
			?>
		</div>
		<div class="swiper-button-next"></div>
		<div class="swiper-button-prev"></div>
	</div>
</section>
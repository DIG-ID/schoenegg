<section class="section-gallery-hero lg:h-[75svh] bg-slate-50 lg:mb-12 overflow-hidden">
	<div class="swiper galleryHeroSwiper h-full">
		<div class="swiper-wrapper h-full">
			<?php
			$gallery = get_field( 'gallery' );
			if ( $gallery ) :
				foreach ( $gallery as $image ) :
					echo '<div class="swiper-slide h-full hidden lg:block">' . wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full h-full max-w-full object-cover' ) ) . '</div>';
					echo '<div class="swiper-slide h-full block lg:hidden">' . wp_get_attachment_image( $image, 'image-square', false, array( 'class' => 'w-full max-w-full object-cover' ) ) . '</div>';
				endforeach;
			endif;
			?>
		</div>
		<div class="swiper-button-next"></div>
		<div class="swiper-button-prev"></div>
	</div>
</section>

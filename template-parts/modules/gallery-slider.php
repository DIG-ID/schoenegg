<section class="section-gallery-hero lg:h-[75svh] bg-slate-50 lg:mb-12 overflow-hidden">
	<div class="swiper galleryHeroSwiper h-full hidden lg:block">
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
	
	<div class="swiper galleryHeroSwiperLow h-full block lg:hidden">
		<div class="swiper-wrapper h-full">
			<?php
			$gallery = get_field( 'gallery' );
			if ( $gallery ) :
				foreach ( $gallery as $image ) :
					echo '<div class="swiper-slide h-full">' . wp_get_attachment_image( $image, 'image-square', false, array( 'class' => 'w-full max-w-full object-cover' ) ) . '</div>';
				endforeach;
			endif;
			?>
		</div>
		<div class="swiper-button-next"></div>
		<div class="swiper-button-prev"></div>
	</div>
</section>

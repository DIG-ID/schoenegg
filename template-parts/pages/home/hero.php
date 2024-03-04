<section class="section-hero h-[87svh] lg:h-svh bg-darker-grey overflow-hidden">
	<?php
	if ( have_rows( 'hero_items' ) ) :
		?>
		<div class="swiper heroSwiper h-[87svh] lg:h-svh">
			<div class="swiper-wrapper">
				<?php
				while ( have_rows( 'hero_items' ) ) :
					the_row();
					$himage = get_sub_field( 'image' );
					?>
					<div class="swiper-slide relative">
						<?php
						if ( $himage ) :
							echo wp_get_attachment_image( $himage, 'full', false, array( 'class' => 'w-full h-full object-cover' ) );
						endif;
						?>
						<div class="slider-content absolute left-16 bottom-16 right-16 md:w-2/5 md:right-auto">
							<p class="hero-swiper-subtitle text-white text-sm font-walsheimedium uppercase mb-1 opacity-0"><?php the_sub_field( 'subtitle' ); ?></p>
							<h2 class="hero-swiper-title text-white text-3xl md:text-[44px] md:leading-[54px] font-lyon tracking-[0.75px] mb-2 opacity-0"><?php the_sub_field( 'title' ); ?></h2>
							<?php
							$hlink = get_sub_field( 'link' );
							if ( $hlink ) :
								$link_url    = $hlink['url'];
								$link_title  = $hlink['title'];
								$link_target = $hlink['target'] ? $hlink['target'] : '_self';
								?>
									<a class="hero-swiper-btn opacity-0" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
								<?php
							endif;
							?>
						</div>
					</div>
					<?php
				endwhile;
				?>
			</div>
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
			<div class="swiper-pagination"></div>
		</div>
		<?php
	endif;
	?>
</section>

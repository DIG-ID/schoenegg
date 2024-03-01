<section class="section-testimonials py-16 lg:py-36">
	<div class="hs-container">
		<div class="hs-grid">
			<div class="col-span-1 md:col-span-12">
				<div class="swiper testimonialsSwiper">
					<div class="swiper-wrapper">
						<?php
						$testi_args = array(
							'post_type'      => 'testimonials',
							'posts_per_page' => -1,
							'post_status'    => 'publish',
							'orderby'        => 'date',
							'order'          => 'ASC',
						);
						$testi_query = new WP_Query( $testi_args );
						if ( $testi_query->have_posts() ) :
							while ( $testi_query->have_posts() ) :
								$testi_query->the_post();
								?>
								<div class="swiper-slide">
									<blockquote id="post-<?php the_ID(); ?>" <?php post_class( 'card card--testimonial' ); ?>>
										<h2 class="title__section text-center"><?php the_title(); ?></h2>
										<p class="text__description text-center"><span class="text-6xl">"</span><?php the_field( 'text' ); ?>"</p>
									</blockquote>
								</div>
								<?php
							endwhile;
							wp_reset_postdata();
						endif;
						?>
					</div>
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
				</div>
			</div>
		</div>
	</div>
</section>
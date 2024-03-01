<section class="section-testimonials py-16 lg:py-36">
	<div class="hs-container">
		<div class="hs-grid justify-center">
			<div class="col-span-1 md:col-span-10 md:col-start-2">
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
										<p class="text__description text-center mb-6"><span class="font-handwriting text-2xl">"</span><?php the_field( 'text' ); ?><span class="font-handwriting text-2xl">"</span></p>
										<footer class="text-center"><?php the_field( 'author' ); ?> - <cite><?php the_field( 'website' ); ?></cite></footer>
									</blockquote>
								</div>
								<?php
							endwhile;
							wp_reset_postdata();
						endif;
						?>
					</div>
					<div class="testimonials-navigation flex justify-center items-center gap-4 mt-6">
						<div class="swiper-button-prev testimonial-button-prev"></div>
						<div class="swiper-button-next testimonial-button-next"></div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>
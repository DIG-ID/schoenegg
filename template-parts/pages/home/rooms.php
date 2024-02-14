<section class="section-rooms py-36">
	<div class="hs-container">
		<div class="hs-grid">
			<div class="col-span-1 md:col-span-12">
				<h2 class="title__section"><?php the_field( 'zimmer_title' ); ?></h2>
				<div class="text__area"><?php the_field( 'zimmer_text' ); ?></div>
			</div>
			<div class="col-span-1 md:col-span-12">
				<div class="swiper roomsSwiper">
					<div class="swiper-wrapper">
						<?php
						$rooms_args = array(
							'post_type'      => 'zimmer',
							'posts_per_page' => -1,
							'post_status'    => 'publish',
							'orderby'        => 'date',
							'order'          => 'ASC',
						);
						$rooms_query = new WP_Query( $rooms_args );
						if ( $rooms_query->have_posts() ) :
							while ( $rooms_query->have_posts() ) :
								$rooms_query->the_post();
								//get_template_part( 'template-parts/components/card' );
								?>
								<div class="swiper-slide">
									<article id="post-<?php the_ID(); ?>" <?php post_class( 'card card--zimmer' ); ?>>
										<a href="<?php the_permalink(); ?>">
											<?php
											if ( has_post_thumbnail() ) :
												the_post_thumbnail( 'full', array( 'class' => 'w-full max-w-full object-cover mb-6' ) );
											endif;
											?>
											<h3 class="title__card"><?php the_title(); ?></h3>
										</a>
									</aritcle>
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
<hr class="hs-container hs-divider">
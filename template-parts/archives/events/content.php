<section class="section-events pt-28 pb-16">
	<div class="hs-container lg:!px-0">
		<div class="hs-grid">
			<div class="col-span-1 md:col-span-12">
				<h2 class="title__page"><?php the_field( 'archives_events_title', 'options' ); ?></h2>
				<p class="text__description"><?php the_field( 'archives_events_description', 'options' ); ?></p>
			</div>
		</div>
		<div class="grid-events -mx-4">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					?>
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'card card--event w-full lg:w-1/3 px-4 mb-4' ); ?>>
						<a href="<?php the_permalink(); ?>">
							<?php
							if ( has_post_thumbnail() ) :
								the_post_thumbnail( 'full', array( 'class' => 'max-w-full object-cover mb-8' ) );
							endif;
							?>
							<h2 class="title__card mb-4"><?php the_title(); ?></h2>
						</a>
					</article>
					<?php
				endwhile;
			endif;
			?>
		</div>
	</div>
</section>
<hr class="hs-container hs-divider">
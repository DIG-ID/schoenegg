<section class="section-your-info py-16 lg:py-36">
	<div class="hs-container ">
		<div class="hs-grid">
			<div class="col-span-1 md:col-span-6">
				<h2 class="title__page !mb-12"><?php the_field( 'content_form_title' ); ?></h2>
				<?php echo do_shortcode( get_field( 'content_contact_form_shortcode' ) ); ?>
			</div>
		</div>
	</div>
</section>

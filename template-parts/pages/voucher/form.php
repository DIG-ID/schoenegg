<section class="section-your-info py-36">
	<div class="hs-container ">
		<div class="hs-grid">
			<div class="col-span-1 md:col-span-8">
				<h2 class="title__page"><?php the_field( 'content_form_title' ); ?></h2>
				<div class="text__description"><?php echo do_shortcode( get_field( 'content_contact_form_shortcode' ) ); ?></div>
			</div>
		</div>
	</div>
</section>

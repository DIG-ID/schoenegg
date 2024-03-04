<section class="section-contacts py-16 lg:py-36">
	<div class="hs-container">
		<div class="hs-grid">
			<div class="col-span-1 md:col-span-12">
				<h1 class="title__section"><?php the_field( 'contacts_title' ); ?></h1>
			</div>
			<div class="col-span-1 md:col-span-5">
				<div class="text__area"><?php the_field( 'contacts_address' ); ?></div>
				<div class="text__area"><p><?php esc_html_e( 'Tel: ', 'hs' ) ?><a class="!no-underline !text-[#737373]" href="tel:<?php the_field( 'contacts_phone' ); ?>"><?php the_field( 'contacts_phone' ); ?></a></p></div>
				<div class="text__area"><p><?php esc_html_e( 'Fax: ', 'hs' ) ?><?php the_field( 'contacts_fax' ); ?></p></div>
				<div class="text__area mb-8"><p><a class="!no-underline !text-[#737373]" href="mailto:<?php the_field( 'contacts_e-mail' ); ?>"><?php the_field( 'contacts_e-mail' ); ?></a></p></div>
				<div class="text__area"><p><b><?php esc_html_e( 'Ihr Gastgeber', 'hs' ) ?></b><br><?php the_field( 'contacts_host_name' ); ?></p></div>
            </div>
			<div class="col-span-1 md:col-span-7">
				<?php echo do_shortcode( get_field( 'contacts_form_shortcode' ) ); ?>
            </div>
        </div>
    </div>
</section>
<div class="hs-container">
	<hr class="hs-container hs-divider">
</div>

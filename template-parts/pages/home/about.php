<section class="section-about py-16 lg:py-36">
	<div class="hs-container">
		<div class="hs-grid">
			<div class="col-span-1 md:col-span-5">
				<h3 class="title__section--subtitle"><?php the_field( 'about_subtitle' ); ?></h3>
				<h2 class="title__section"><?php the_field( 'about_title' ); ?></h2>
				<div class="text__area mb-10"><?php the_field( 'about_text' ); ?></div>
				<?php
				$link = get_field( 'about_button' );
				if ( $link ) :
					$link_url    = $link['url'];
					$link_title  = $link['title'];
					$link_target = $link['target'] ? $link['target'] : '_self';
					?>
					<a class="btn__secondary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					<?php
				endif;
				?>
			</div>
			<div class="col-span-1 md:col-span-7">
				<?php
				$image = get_field( 'about_image' );
				if ( $image ) :
					echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full object-cover' ) );
				endif;
				?>
			</div>
		</div>
	</div>
</section>
<div class="hs-container">
	<hr class="hs-container hs-divider">
</div>


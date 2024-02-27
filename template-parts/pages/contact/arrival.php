<section class="section-arrival py-16 lg:py-36">
	<div class="hs-container">
		<div class="hs-grid">
			<div class="col-span-1 md:col-span-12">
				<h1 class="title__section"><?php the_field( 'arrival_title' ); ?></h1>
				<div class="text__area mb-8"><?php the_field( 'arrival_text' ); ?></div>
				<?php
				$link = get_field( 'arrival_reservation' );
				if ( $link ) :
					$link_url    = $link['url'];
					$link_title  = $link['title'];
					$link_target = $link['target'] ? $link['target'] : '_self';
					?>
					<p class="text__area mb-14">
                        <a class="!no-underline !text-[#737373] font-bold" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php esc_html_e( '→ ', 'hs' ) ?><?php echo esc_html( $link_title ); ?></a>
                    </p>
					<?php
				endif;
				?>
            </div>
        </div>
    </div>
    <div class="w-full min-h-[450px] px-4">
        <?php
        $location = get_field( 'arrival_map' );
        if ( $location ) :
            ?>
            <div class="acf-map mb-14 md:mb-20 xl:mb-0 h-[450px]" data-zoom="16">
                <div class="marker" data-lat="<?php echo esc_attr( $location['lat'] ); ?>" data-lng="<?php echo esc_attr( $location['lng'] ); ?>"></div>
            </div>
            <?php
        endif;
        ?>
    </div>
</section>
<hr class="hs-container hs-divider">
<section class="section-intro py-36">
	<div class="hs-container">
		<div class="hs-grid">
			<div class="col-span-1 md:col-span-8">
                <h3 class="title__section--subtitle"><?php the_title(); ?></h3>
				<h1 class="title__section"><?php the_field( 'intro_title' ); ?></h1>
				<div class="text__area mb-8"><?php the_field( 'intro_text' ); ?></div>
                <div class="text__area mb-8"><?php the_field( 'intro_contact' ); ?></div>
                <div class="flex flex-wrap max-w-[650px]">
                    <?php
                    $backCta = get_field('intro_button');
                    if ($backCta) :
                        $backCta_url = $backCta['url'];
                        $backCta_title = $backCta['title'];
                        $backCta_target = $backCta['target'] ? $backCta['target'] : '_self';
                    ?>
                        <a class="btn__secondary !normal-case mb-5 mr-12 !w-64 block" href="<?php echo esc_url($backCta_url); ?>" target="<?php echo esc_attr($backCta_target); ?>"><?php echo esc_html($backCta_title); ?></a>
                    <?php
                    endif;
                    ?>
                </div>
			</div>
			<div class="col-span-1 md:col-span-3 md:col-start-10">
				<div class="mb-10">
                <?php 
                $restaurantLogo = get_field('intro_logo');
                $size = 'full';
                $classes = 'w-[172px] border border-gold';
                if( $restaurantLogo ) {
                    echo wp_get_attachment_image( $restaurantLogo, $size, false, array('class' => $classes) );
                } ?>
				</div>
			</div>
		</div>
	</div>
</section>
<hr class="hs-container hs-divider">

<section class="section-intro py-16 lg:py-36">
	<div class="hs-container">
		<div class="hs-grid">
			<div class="col-span-1 md:col-span-8">
				<h1 class="title__section"><?php the_title(); ?></h1>
				<div class="text__area mb-8"><?php the_field( 'intro_text' ); ?></div>
                <div class="text__area mb-8"><?php the_field( 'intro_opening_hours' ); ?></div>
                <div class="flex flex-wrap max-w-[650px]">
                    <?php if (have_rows('intro_menus')) :
                        $count = 0; // Counter to keep track of the number of buttons
                        while (have_rows('intro_menus')) : the_row(); ?>
                            <?php
                            $menusCta = get_sub_field('button');
                            if ($menusCta) :
                                $menusCta_url = $menusCta['url'];
                                $menusCta_title = $menusCta['title'];
                                $menusCta_target = $menusCta['target'] ? $menusCta['target'] : '_self';
                            ?>
                                <a class="btn__secondary !normal-case mb-5 mr-12 !w-64 block" href="<?php echo esc_url($menusCta_url); ?>" target="<?php echo esc_attr($menusCta_target); ?>"><?php echo esc_html($menusCta_title); ?></a>
                            <?php
                                $count++;
                                // If the count is divisible by 2, add a line break to create a new row
                                if ($count % 2 == 0) {
                                    echo '<br class="lg:hidden">'; // Hide line break on larger screens
                                }
                            endif;
                            ?>
                        <?php endwhile;
                    endif; ?>
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

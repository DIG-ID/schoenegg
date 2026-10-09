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
			<div class="col-span-1 md:col-span-3 md:col-start-10 flex sm:block md:flex flex-col justify-between items-center">
				<div class="mb-10 mr-1">
                <?php 
                $restaurantLogo = get_field('intro_logo');
                $size = 'full';
                $classes = 'w-[172px] border border-gold';
                if( $restaurantLogo ) {
                    echo wp_get_attachment_image( $restaurantLogo, $size, false, array('class' => $classes) );
                } ?>
				</div>
                <div>
                <?php
                $table_reservation_script = get_field('intro_table_reservation_script');
                if ($table_reservation_script) {
                    // OpenTable widget: Cookiebot only runs the script after marketing consent.
                    // nowprocket keeps WP Rocket from rewriting the tag, which would bypass the Cookiebot block.
                    $table_reservation_script = preg_replace_callback(
                        '/<script\b[^>]*>/i',
                        function ( $m ) {
                            $tag = preg_replace( '/\stype=(["\'])[^"\']*\1/i', '', $m[0] );
                            return preg_replace( '/^<script\b/i', '<script type="text/plain" data-cookieconsent="marketing" nowprocket', $tag );
                        },
                        $table_reservation_script
                    );
                    echo $table_reservation_script;
                    ?>
                    <div class="cookieconsent-optout-marketing" style="display:flex; flex-direction:column; align-items:center; justify-content:center; gap:20px; padding:30px; text-align:center; background:#f5f5f5;">
                        <p><?php esc_html_e( 'Um online einen Tisch zu reservieren, akzeptieren Sie bitte die Marketing-Cookies.', 'hs' ); ?></p>
                        <a class="btn__secondary" style="width:auto; max-width:100%; white-space:normal; line-height:1.4; padding-top:.6rem; padding-bottom:.6rem;" href="javascript:Cookiebot.renew()"><?php esc_html_e( 'Reservierung laden', 'hs' ); ?></a>
                        <p><?php esc_html_e( 'Oder reservieren Sie telefonisch unter', 'hs' ); ?> <a href="tel:+41338553422">+41 33 855 34 22</a>.</p>
                    </div>
                    <?php
                }
                ?>
                </div>
			</div>
		</div>
	</div>
</section>
<div class="hs-container">
	<hr class="hs-container hs-divider">
</div>


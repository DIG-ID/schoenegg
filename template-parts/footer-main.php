<footer class="footer-main lg:pl-64 py-14 bg-darker-grey text-light-grey">
	<div class="hs-container">
		<div class="hs-grid">
			<div class="col-span-1 md:col-span-6 lg:col-span-3">
				<div class="footer-text__area">
					<p class="text-white !mb-5"><?php esc_html_e( 'Kontakt', 'hs' ) ?></p>
					<p><?php the_field( 'footer_address', 'options' ); ?></p>
					<p><?php esc_html_e( 'Tel: ', 'hs' ) ?><a class="no-underline" href="tel:<?php the_field( 'footer_phone', 'options' ); ?>"><?php the_field( 'footer_phone', 'options' ); ?></a></p>
					<a class="no-underline" href="mailto:<?php the_field( 'footer_e-mail', 'options' ); ?>"><?php the_field( 'footer_e-mail', 'options' ); ?></a>
				</div>
			</div>
			<div class="col-span-1 md:col-span-6 lg:col-span-3">
				<div class="footer-text__area">
					<p class="!text-white !mb-5"><?php esc_html_e( 'Links', 'hs' ) ?></p>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-footer',
							'container'      => false,
							'menu_class'     => 'footer-menu-nav',
							'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'fallback_cb'    => '__return_false',
						)
					);
					?>
				</div>
			</div>
			<div class="col-span-1 md:col-span-6 lg:col-span-3">
				<div class="footer-text__area">
					<p class="!text-white !mb-5"><?php esc_html_e( 'Partner', 'hs' ) ?></p>
					<ul>
						<?php
						if( have_rows( 'footer_partner_logos', 'options' ) ):
							while( have_rows( 'footer_partner_logos', 'options' ) ) : the_row(); ?>
							<li>
								<a class="no-underline" href="<?php the_sub_field( 'link' ); ?>" target="_blank"><?php the_sub_field( 'title' ); ?></a>
							</li>
							<?php endwhile;
						endif; ?>
					</ul>
				</div>
			</div>
			<div class="col-span-1 md:col-span-6 lg:col-span-3 grid grid-cols-1 md:grid-cols-2">
				<div class="col-span-1 md:col-span-2 flex items-center justify-start lg:justify-end mt-9 md:mt-0">
					<img src="/wp-content/uploads/PRIX-BIENVENU-2018_Top100_DE.png" alt="award logo" title="award logo">
				</div>
				<div class="col-span-1 md:col-span-2 flex justify-start lg:justify-end items-baseline">
					<?php
					if( have_rows( 'footer_partner_logos', 'options' ) ):
						while( have_rows( 'footer_partner_logos', 'options' ) ) : the_row(); ?>
							<a href="<?php the_sub_field( 'link' ); ?>" target="_blank">
								<?php
								$image = get_sub_field( 'image' );
								if ( $image ) :
									echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'w-full object-cover my-6' ) );
								endif;
								?>
							</a>
						<?php endwhile;
					endif; ?>
				</div>
			</div>
		</div>
	</div>
</footer>
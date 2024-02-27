<header id="header-main" class="header-main fixed w-full left-0 top-0 lg:bottom-0 lg:w-auto lg:min-w-64 lg:max-w-64 bg-white lg:border-r lg:border-r-gold transition-all duration-500 ease-in-out border-b border-b-gold lg:border-b-0 z-10" itemscope itemtype="http://schema.org/WebSite">
	<nav class="navigation-main relative flex w-full justify-between items-center h-16 lg:h-auto px-8 sm:px-11 lg:flex-col lg:justify-start lg:items-start lg:py-12 lg:px-8 " role="navigation" aria-label="<?php esc_attr_e( 'main navigation', 'az' ); ?>">
		<div class="site-branding lg:mb-11">
			<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url" class="navbar-brand custom-logo-link hidden invisible lg:inline-block lg:visible"><?php do_action( 'theme_logo' ); ?></a>
			<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url" class="navbar-brand custom-logo-link custom-logo-link--mobile block lg:hidden lg:invisible max-w-48"><?php do_action( 'theme_logo_mobile' ); ?></a>
		</div>
		<hr class="hs-divider hidden invisible lg:block lg:visible">
		<div class="menu-wrapper absolute w-full top-16 left-0 h-svh lg:h-auto px-8 sm:px-11 lg:px-0 lg:relative lg:top-auto lg:left-auto lg-w-auto hidden bg-white lg:block">
			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'main-menu',
					'menu_id'         => 'main-menu',
					'container_class' => '',
					'menu_class'      => 'main-menu-top-level',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'fallback_cb'     => '__return_false',
				)
			);
			do_action( 'wpml_add_language_selector' );
			?>
		</div>
		<hr class="hs-divider hidden invisible lg:block lg:visible">
		<div class="menu-extras">
			<?php do_action( 'socials' ); ?>
			<hr class="hs-divider">
			<div class="menu-extras--sc flex items-baseline">
				<?php get_template_part( 'template-parts/components/openweather' ); ?>
			</div>
			<div class="menu-extras--links">
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'main-menu-extras',
						'menu_id'         => 'main-menu-extras',
						'container_class' => '',
						'menu_class'      => 'main-menu-top-level--extras',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'fallback_cb'     => '__return_false',
					)
				);
				?>
			</div>
			<div class="menu-extras--sister-property">
				<figure class="w-full flex flex-col justify-center">
					<figcaption class="font-walsheimthin text-xs leading-5 tracking-wider text-left"><?php the_field( 'navigation_sister_property_text', 'options' ); ?></figcaption>
					<?php
					$sp_img = get_field( 'navigation_sister_property_image', 'options' );
					$sp_url = get_field( 'navigation_sister_property_url', 'options' );
					if ( $sp_img ) :
						echo '<a href="' . esc_url( $sp_url ) . '" target="_blank" >' . wp_get_attachment_image( $sp_img, 'full', false, array( 'class' => 'max-w-full mx-auto object-cover' ) ) . '</a>';
					endif;
					?>
				</figure>
			</div>
		</div>
		<button class="mobile-menu-toggle">
			<span class="bars">
				<span class="bar"></span>
				<span class="bar"></span>
				<span class="bar"></span>
			</span>
		</button>
	</nav>

</header>

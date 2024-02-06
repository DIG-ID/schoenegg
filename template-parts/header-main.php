<header id="header-main" class="header-main fixed w-full left-0 top-0 lg:bottom-0 lg:w-auto lg:min-w-64 lg:max-w-64 bg-white lg:border-r lg:border-r-gold transition-all duration-500 ease-in-out" itemscope itemtype="http://schema.org/WebSite">
	<nav class="navigation-main relative flex w-full justify-between items-center h-16 lg:h-auto px-8 sm:px-11 lg:flex-col lg:py-12 lg:px-8 " role="navigation" aria-label="<?php esc_attr_e( 'main navigation', 'az' ); ?>">
		<div class="site-branding">
			<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url" class="navbar-brand custom-logo-link hidden invisible lg:inline-block lg:visible"><?php do_action( 'theme_logo' ); ?></a>
			<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url" class="navbar-brand custom-logo-link custom-logo-link--mobile block lg:hidden lg:invisible max-w-48"><?php do_action( 'theme_logo_mobile' ); ?></a>
		</div>
		<div class="menu-wrapper absolute w-full top-16 left-0 lg:relative lg:top-auto lg:left-auto lg-w-auto hidden bg-white lg:block">
			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'main-right',
					'menu_id'         => 'menu-main-menu-right',
					'container_class' => 'menu-right  hidden invisible lg:block lg:visible',
					'menu_class'      => 'main-menu-top-level main-menu-top-level--right',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'fallback_cb'     => '__return_false',
				)
			);
			do_action( 'wpml_add_language_selector' );
			?>
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

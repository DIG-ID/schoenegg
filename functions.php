<?php
/**
 * Setup theme
 */
function hs_theme_setup() {

	register_nav_menus(
		array(
			'main-menu'        => __( 'Main Menu', 'hs' ),
			'main-menu-extras' => __( 'Main Menu Extras', 'hs' ),
			'menu-footer'      => __( 'Menu Footer', 'hs' ),
		)
	);

	add_theme_support( 'menus' );

	add_theme_support( 'custom-logo' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

	// Update thumbnail size.
	update_option( 'thumbnail_size_w', 737 );
	update_option( 'thumbnail_size_h', 200 );
	update_option( 'thumbnail_crop', true );

	// Update medium size.
	update_option( 'medium_size_w', 956 );
	update_option( 'medium_size_h', 500 );

	// Update large size.
	update_option( 'large_size_w', 1920 );
	update_option( 'large_size_h', 800 );

	//add_image_size( 'main-header-image', 1594, 436, array( 'center', 'center' ) );

	//set_post_thumbnail_size( 500, 350, 'center', 'center' );

	//add_image_size( 'gallery-full', 1024, false );

	//add_image_size( 'mega-link-thumbnail', 1000, 500, array( 'center', 'center' ) );

}

add_action( 'after_setup_theme', 'hs_theme_setup' );

/**
 * Register our sidebars and widgetized areas.
 */
function hs_theme_footer_widgets_init() {

	register_sidebar(
		array(
			'name'          => 'Footer',
			'id'            => 'footer',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		),
	);

	register_sidebar(
		array(
			'name'          => 'Floating Language Switcher',
			'id'            => 'floating_ls',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		)
	);

}

add_action( 'widgets_init', 'hs_theme_footer_widgets_init' );

if ( ! function_exists( 'hs_get_font_face_styles' ) ) :

	/**
	 * Get font face styles.
	 * Called by functions dig_theme_enqueue_styles() and twentytwentytwo_editor_styles() above.
	 */
	function hs_get_font_face_styles() {

		return "
			@font-face {
				font-family: 'WalsheimThin';
				src: url('" . esc_url( get_template_directory_uri() ) . "/assets/fonts/GT-Walsheim/GT-Walsheim-Thin.woff') format('woff');
				font-style: normal;
				font-weight: 100;
			}

			@font-face {
				font-family: 'WalsheimLight';
				src: url('" . esc_url( get_template_directory_uri() ) . "/assets/fonts/GT-Walsheim/GT-Walsheim-Light.woff') format('woff');
				font-style: normal;
				font-weight: 300;
			}

			@font-face {
				font-family: 'WalsheimMedium';
				src: url('" . esc_url( get_template_directory_uri() ) . "/assets/fonts/GT-Walsheim/GT-Walsheim-Medium.woff') format('woff');
				font-style: normal;
				font-weight: 500;
			}

			@font-face {
				font-family: 'LyonTextSemibold';
				src: url('" . esc_url( get_template_directory_uri() ) . "/assets/fonts/LyonText/LyonText-Semibold.woff') format('woff');
				font-weight: 600;
				font-style: normal;
			}

			@font-face {
				font-family: 'LucidaHandwriting';
				src: url('" . esc_url( get_template_directory_uri() ) . "/assets/fonts/Lucida-Handwriting/LHANDW.ttf') format('truetype');
				font-weight: normal;
				font-style: normal;
			}
		";

	}

endif;

if ( ! function_exists( 'hs_preload_webfonts' ) ) :

	/**
	 * Preloads the main web font to improve performance.
	 */
	function hs__preload_webfonts() {
		?>
		<link rel="preload" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/fonts/GT-Walsheim/GT-Walsheim-Thin.woff" as="font" type="font/woff" crossorigin>
		<link rel="preload" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/fonts/GT-Walsheim/GT-Walsheim-Light.woff" as="font" type="font/woff" crossorigin>
		<link rel="preload" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/fonts/GT-Walsheim/GT-Walsheim-Medium.woff" as="font" type="font/woff" crossorigin>
		<link rel="preload" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/fonts/LyonText/LyonText-Semibold.woff" as="font" type="font/woff" crossorigin>
		<link rel="preload" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/fonts/Lucida-Handwriting/LHANDW.ttf" as="font" type="font/ttf" crossorigin>
		<?php
	}

endif;

add_action( 'wp_head', 'hs__preload_webfonts' );


/**
 * Enqueue styles and scripts
 */
function hs_theme_enqueue_styles() {

	//Get the theme data
	$the_theme     = wp_get_theme();
	$theme_version = $the_theme->get( 'Version' );

	// Register Theme main style.
	wp_register_style( 'theme-styles', get_template_directory_uri() . '/dist/css/main.css', array(), $theme_version );

	// Add styles inline.
	wp_add_inline_style( 'theme-styles', hs_get_font_face_styles() );

	// Enqueue theme stylesheet.
	wp_enqueue_style( 'theme-styles' );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'theme-scripts', get_stylesheet_directory_uri() . '/dist/js/main.js', array( 'jquery' ), $theme_version, false );

	if ( is_page_template( 'page-templates/page-contact.php' ) ) :
		wp_enqueue_script( 'google-map-api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCB2RShyxiN7xPsQy1QI_SbqXXjW5p08S0&loading=async&callback=Function.prototype', array(), $theme_version, true );
		wp_enqueue_script( 'google-map-settings', get_stylesheet_directory_uri() . '/assets/js/google-maps.js', array( 'jquery' ), $theme_version, true );
	endif;

	/*if ( is_home() ) :
		wp_enqueue_script( 'blog-ajax', get_template_directory_uri() . '/dist/js/blog-ajax.js', array( 'jquery' ), $theme_version, true );
		wp_localize_script( 'blog-ajax', 'blog_ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
	endif;*/
}

add_action( 'wp_enqueue_scripts', 'hs_theme_enqueue_styles' );

//Google Map Init
function hs_theme_google_map_init() {
	if ( is_admin() ) :
		acf_update_setting( 'google_api_key', 'AIzaSyCB2RShyxiN7xPsQy1QI_SbqXXjW5p08S0' );
	endif;
}
add_action( 'acf/init', 'hs_theme_google_map_init' );

//openweathermap api connection
$icon_mapping = array(
	'01d' => esc_url( get_template_directory_uri() . '/assets/weather/sun.svg' ),
	'02d' => esc_url( get_template_directory_uri() . '/assets/weather/cloud-sun.svg' ),
	'03d' => esc_url( get_template_directory_uri() . '/assets/weather/cloud-sun.svg' ),
	'04d' => esc_url( get_template_directory_uri() . '/assets/weather/cloud-sun.svg' ),
	'09d' => esc_url( get_template_directory_uri() . '/assets/weather/drizzle.svg' ),
	'10d' => esc_url( get_template_directory_uri() . '/assets/weather/rain.svg' ),
	'11d' => esc_url( get_template_directory_uri() . '/assets/weather/lightning.svg' ),
	'13d' => esc_url( get_template_directory_uri() . '/assets/weather/snow.svg' ),
	'50d' => esc_url( get_template_directory_uri() . '/assets/weather/fog.svg' ),
);
function get_weather_data( $location, $api_key ) {
	$url = "http://api.openweathermap.org/data/2.5/weather?q=$location&appid=$api_key&units=metric";
	$response = wp_remote_get( $url );
	if ( is_wp_error( $response ) ) {
		return false;
	}
	$body = wp_remote_retrieve_body( $response );
	return json_decode( $body, true );
}

// Google maps
function my_acf_init() {
	acf_update_setting( 'google_api_key', 'AIzaSyCB2RShyxiN7xPsQy1QI_SbqXXjW5p08S0' );
}

/*if ( is_page_template( 'page-templates/page-contact.php' ) || is_admin() ) :
	add_action( 'acf/init', 'my_acf_init' );
endif;*/

/**
 * Remove <p> Tag From Contact Form 7.
 */
add_filter( 'wpcf7_autop_or_not', '__return_false' );

/**
 * Lowers the metabox priority to 'core' for Yoast SEO's metabox.
 *
 * @param string $priority The current priority.
 *
 * @return string $priority The potentially altered priority.
 */
function hs_theme_lower_yoast_metabox_priority( $priority ) {
	return 'core';
}

add_filter( 'wpseo_metabox_prio', 'hs_theme_lower_yoast_metabox_priority' );


// Theme custom template tags.
require get_template_directory() . '/inc/theme-template-tags.php';

// The theme admin settings.
require get_template_directory() . '/inc/theme-admin-settings.php';

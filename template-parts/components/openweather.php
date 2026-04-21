<?php
global $icon_mapping;

$api_key = get_field( 'navigation_weather_api_key', 'options' );

if ( $api_key ) :
	$location     = get_field( 'navigation_weather_location_name', 'options' );
	$weather_data = get_weather_data( $location, $api_key );

	if ( $weather_data ) :
		$icon_code   = $weather_data['weather'][0]['icon'] ?? '';
		$temperature = $weather_data['main']['temp'] ?? null;

		if ( isset( $icon_mapping[ $icon_code ] ) ) {
			echo '<img class="w-7" src="' . esc_url( $icon_mapping[ $icon_code ] ) . '" alt="' . esc_attr__( 'Weather icon', 'hs' ) . '">';
		} elseif ( $icon_code ) {
			$default_icon_url = 'https://openweathermap.org/img/wn/' . rawurlencode( $icon_code ) . '.png';
			echo '<img class="w-7" src="' . esc_url( $default_icon_url ) . '" alt="' . esc_attr__( 'Weather icon', 'hs' ) . '">';
		}

		if ( $temperature !== null ) {
			echo '<p class="ml-4 text-sm"><span class="font-walsheimthin">' . esc_html( round( $temperature ) ) . '</span> <span class="font-lyon">°C</span></p>';
		}
	endif;
endif;
?>

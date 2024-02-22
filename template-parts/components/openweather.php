<?php
    global $icon_mapping;
    $api_key = get_field( 'navigation_weather_api_key', 'options' );
    if ($api_key) :
        $location = get_field( 'navigation_weather_location_name', 'options' );
        $weather_data = get_weather_data($location, $api_key);

        if ($weather_data) {
            $icon_code = $weather_data['weather'][0]['icon'];
            $temperature = $weather_data['main']['temp'];
        };

        $cache_key = 'weather_data_' . sanitize_title($location);
        $weather_data = get_transient($cache_key);

        // Cache for 1 hour
        if (!$weather_data) {
            $weather_data = get_weather_data($location, $api_key);
            set_transient($cache_key, $weather_data, HOUR_IN_SECONDS);
        }
        //Display
        if (!$weather_data) {
            echo "Failed to retrieve weather data.";
        } else {
            if (isset($icon_mapping[$icon_code])) {
                $custom_icon = $icon_mapping[$icon_code];
                echo "<img class=\"w-7\" src='$custom_icon' alt='Weather Icon'>";
            } else {
                // Fallback to OpenWeatherMap's default icon
                $default_icon_url = "http://openweathermap.org/img/wn/$icon_code.png";
                echo "<img class=\"w-7\" src='$default_icon_url' alt='Weather Icon'>";
            }
            echo "<p class=\"ml-4 text-sm\"><span class=\"font-walsheimthin\">" . round($temperature) . "</span> <span class=\"font-lyon\">°C</span></p>";
        }
    endif;
?>
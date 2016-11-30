<?php
add_action( 'thim_logo', 'thim_logo', 1 );
// logo
if ( !function_exists( 'thim_logo' ) ) :
	function thim_logo() {
		global $thim_options_data;

		$thim_logo_src = get_template_directory_uri().'/images/logo.png';

 		if ( isset( $thim_options_data['thim_logo'] ) && $thim_options_data['thim_logo'] <> '' ) {
			$thim_logo     = $thim_options_data['thim_logo'];
			$thim_logo_src = $thim_logo; // For the default value
			if ( is_numeric( $thim_logo ) ) {
				$logo_attachment = wp_get_attachment_image_src( $thim_logo, 'full' );
				if( $logo_attachment ) {
					$thim_logo_src = $logo_attachment[0];
				}else{
					$thim_logo_src = get_template_directory_uri().'/images/logo.png';
				}
			}
			$site_title     = esc_attr( get_bloginfo( 'name', 'display' ) );
			echo '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . ' - ' . esc_attr( get_bloginfo( 'description' ) ) . '" rel="home" class="no-sticky-logo no-mobile-logo"><img src="' . $thim_logo_src . '" alt="' . $site_title . '" /></a>';
		} else {
			$site_title     = esc_attr( get_bloginfo( 'name', 'display' ) );
			echo '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . ' - ' . esc_attr( get_bloginfo( 'description' ) ) . '" rel="home" class="no-sticky-logo no-mobile-logo"><img src="' . $thim_logo_src . '" alt="' . $site_title . '" /></a>';
		}
	}
endif;


add_action( 'thim_mobile_logo', 'thim_mobile_logo', 1 );
// logo
if ( !function_exists( 'thim_mobile_logo' ) ) :
	function thim_mobile_logo() {
		global $thim_options_data;

		$thim_logo_src = get_template_directory_uri().'/images/sticky-logo.png';

		$thim_mobile_logo     = isset($thim_options_data['thim_mobile_logo']) ? $thim_options_data['thim_mobile_logo'] : '';

		if ( is_numeric( $thim_mobile_logo ) ) {
			$logo_attachment = wp_get_attachment_image_src( $thim_mobile_logo, 'full' );
			if( $logo_attachment ) {
				$thim_logo_src = $logo_attachment[0];
			}
		}

		$site_title     = esc_attr( get_bloginfo( 'name', 'display' ) );
		echo '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . ' - ' . esc_attr( get_bloginfo( 'description' ) ) . '" rel="home" class="mobile-logo"><img src="' . $thim_logo_src . '" alt="' . $site_title . '" /></a>';

	}
endif;


add_action( 'thim_sticky_logo', 'thim_sticky_logo', 1 );

// get sticky logo
if ( !function_exists( 'thim_sticky_logo' ) ) :
	function thim_sticky_logo() {
		global $thim_options_data;
		if ( isset( $thim_options_data['thim_sticky_logo'] ) && $thim_options_data['thim_sticky_logo'] <> '' ) {
			$thim_logo_stick_logo     = $thim_options_data['thim_sticky_logo'];
 			$thim_logo_stick_logo_src = $thim_logo_stick_logo; // For the default value
			if ( is_numeric( $thim_logo_stick_logo ) ) {
				$logo_attachment          = wp_get_attachment_image_src( $thim_logo_stick_logo, 'full' );
				if( $logo_attachment ) {
					$thim_logo_stick_logo_src = $logo_attachment[0];
				}else{
					$thim_logo_stick_logo_src = get_template_directory_uri().'/images/sticky-logo.png';
				}
			}
			$site_title     = esc_attr( get_bloginfo( 'name', 'display' ) );
			echo '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . ' - ' . esc_attr( get_bloginfo( 'description' ) ) . '" rel="home" class="sticky-logo no-mobile-logo">
					<img src="' . $thim_logo_stick_logo_src . '" alt="' . $site_title . '" /></a>';
		} elseif ( isset( $thim_options_data['thim_logo'] ) && $thim_options_data['thim_logo'] <> '' ) {
			$thim_logo     = $thim_options_data['thim_logo'];
			$thim_logo_src = $thim_logo; // For the default value
			if ( is_numeric( $thim_logo ) ) {
				$logo_attachment = wp_get_attachment_image_src( $thim_logo, 'full' );
				if( $logo_attachment ) {
					$thim_logo_src = $logo_attachment[0];
				}else{
					$thim_logo_src = get_template_directory_uri().'/images/logo.png';
				}
			}
			$site_title     = esc_attr( get_bloginfo( 'name', 'display' ) );
			echo '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . ' - ' . esc_attr( get_bloginfo( 'description' ) ) . '" rel="home" class="sticky-logo no-mobile-logo">
				<img src="' . $thim_logo_src . '" alt="' . $site_title . '" /></a>';
		}
		if ( isset($thim_options_data['thim_sticky_logo']) && $thim_options_data['thim_sticky_logo'] == '' && isset($thim_options_data['thim_logo']) && $thim_options_data['thim_logo'] == '' ) {
			echo '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . ' - ' . esc_attr( get_bloginfo( 'description' ) ) . '" rel="home" class="sticky-logo no-mobile-logo">
			' . esc_attr( get_bloginfo( 'name' ) ) . '</a>';;
		}
	}
endif; // thim_sticky_logo


add_action( 'thim_preload_image', 'thim_preload_image', 1 );
// logo
if ( !function_exists( 'thim_preload_image' ) ) :
	function thim_preload_image() {
		global $thim_options_data;
		$thim_preload_image     = isset($thim_options_data['thim_preload_image']) ? $thim_options_data['thim_preload_image'] : '';
		$thim_logo_src = $thim_preload_image; // For the default value
		if ( is_numeric( $thim_preload_image ) ) {
			$logo_attachment = wp_get_attachment_image_src( $thim_preload_image, 'full' );
			if( $logo_attachment ) {
				$thim_logo_src = $logo_attachment[0];
			}else{
				$thim_logo_src = get_template_directory_uri().'/images/logo.png';
			}
		}
		$site_title     = esc_attr( get_bloginfo( 'name', 'display' ) );
		echo '<img src="' . $thim_logo_src . '" alt="' . $site_title . '" />';
	}
endif;
<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package thim
 */
?><!DOCTYPE html>
<?php
global $thim_options_data;
?>
<html <?php language_attributes(); ?><?php
if ( isset( $thim_options_data['thim_rtl_support'] ) && $thim_options_data['thim_rtl_support'] == '1' ) {
	echo " dir=\"rtl\"";
} ?>
	>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php esc_url( bloginfo( 'pingback_url' ) ); ?>">
	<?php
	$custom_sticky = $class_header = '';
	if ( isset( $thim_options_data['thim_rtl_support'] ) && $thim_options_data['thim_rtl_support'] == '1' ) {
		$class_header .= 'rtl';
	}
	if ( isset( $thim_options_data['thim_config_att_sticky'] ) && $thim_options_data['thim_config_att_sticky'] == 'sticky_custom' ) {
		$custom_sticky .= ' bg-custom-sticky';
	}
	if ( isset( $thim_options_data['thim_header_sticky'] ) && $thim_options_data['thim_header_sticky'] == 1 ) {
		$custom_sticky .= ' sticky-header';
	}
	if ( isset( $thim_options_data['thim_header_position'] ) ) {
		$custom_sticky .= ' ' . $thim_options_data['thim_header_position'];
		$class_header .= ' wrapper-' . $thim_options_data['thim_header_position'];
	}
	
	$header_style = isset($thim_options_data['thim_header_style']) ? $thim_options_data['thim_header_style'] : ' header_v1';
	$custom_sticky .= ' '.$header_style ;
	$class_header .= ' wrapper-'.$header_style ;

	if ( isset( $thim_options_data['thim_box_layout'] ) && $thim_options_data['thim_box_layout'] =='boxed' ) {
		$class_boxed = 'boxed-area';
	}else{
		$class_boxed = '';
	}

	wp_head();
	?>
</head>

<body <?php body_class( $class_header ); ?>>
<?php if ( isset( $thim_options_data['thim_preload'] )) { ?> 
	<div id="preload">
		<div class="loading-inner">
		<?php if ( $thim_options_data['thim_preload'] == '1' || $thim_options_data['thim_preload'] === 'true' ) { ?>
					<div class="loading loading-1"></div>
					<div class="loading loading-2"></div>
					<div class="loading loading-3"></div>
					<div class="loading loading-4"></div>
					<div class="loading loading-5"></div>
					<div class="loading loading-6"></div>
					<div class="loading loading-7"></div>
					<div class="loading loading-8"></div>
					<div class="loading loading-9"></div>
		<?php } else if ( $thim_options_data['thim_preload'] === 'image') { 
			do_action('thim_preload_image');
		} ?>
		</div>
	</div>
<?php } ?>
<div id="wrapper-container" class="wrapper-container">
	<div class="content-pusher <?php echo esc_attr($class_boxed); ?>">
		<header id="masthead" class="site-header affix-top<?php echo esc_attr( $custom_sticky ); ?>">
			<?php
			// Drawer
			if ( isset( $thim_options_data['thim_show_drawer'] ) && $thim_options_data['thim_show_drawer'] == '1' && is_active_sidebar( 'drawer_top' ) ) {
				get_template_part( 'inc/header/drawer' );
			}
			
			if (isset($thim_options_data['thim_header_style']) && 'header_v2' === $thim_options_data['thim_header_style'] ) {
				get_template_part( 'inc/header/header_v2' );
			}else{
				get_template_part( 'inc/header/header_v1' );
			}
			
			?>
		</header>
		<div id="main-content">

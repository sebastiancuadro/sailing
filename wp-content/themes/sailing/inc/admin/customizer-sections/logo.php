<?php
/*
 * Creating a logo Options
 */
$logo = $titan->createThemeCustomizerSection( array(
	'name'     => 'title_tagline',
	'position' => 1,
) );

$logo->createOption( array(
	'name'    => esc_html__( 'Header Logo',  'sailing' ),
	'id'      => 'logo',
	'type'    => 'upload',
	'desc'    => esc_html__( 'Upload your logo',  'sailing' ),
	'default' => get_template_directory_uri( 'template_directory' ) . '/images/logo.png',
) );

$logo->createOption( array(
	'name' => esc_html__( 'Sticky Logo',  'sailing' ),
	'id'   => 'sticky_logo',
	'type' => 'upload',
	'desc' => esc_html__( 'Upload your sticky logo',  'sailing' ),
	'default' => get_template_directory_uri( 'template_directory' ) . '/images/sticky-logo.png',
) );

$logo->createOption( array(
	'name' => esc_html__( 'Mobile Logo',  'sailing' ),
	'id'   => 'mobile_logo',
	'type' => 'upload',
	'desc' => esc_html__( 'Upload your mobile logo',  'sailing' ),
	'default' => get_template_directory_uri( 'template_directory' ) . '/images/sticky-logo.png',
) );

$logo->createOption( array(
	'name'    => esc_html__( 'Width Logo',  'sailing' ),
	'id'      => 'width_logo',
	'type'    => 'number',
	'default' => '135',
	'max'     => '1024',
	'min'     => '0',
	'step'    => '1',
	'desc'    => 'width logo (px)'
) );

/**
 * Support favicon for WordPress < 4.3
 */
if ( !function_exists( 'wp_site_icon' ) ) {
	$logo->createOption( array(
		'name'    => esc_html__( 'Favicon',  'sailing' ),
		'id'      => 'favicon',
		'type'    => 'upload',
		'desc'    => esc_html__( 'Upload your favicon',  'sailing' ),
		'default' => get_template_directory_uri() . '/images/favicon.png',
	) );
}
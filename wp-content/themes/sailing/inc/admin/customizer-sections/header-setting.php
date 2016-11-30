<?php
$header->addSubSection( array(
	'name'     => esc_html__( 'Header', 'sailing' ),
	'id'       => 'display_header_settings',
	'position' => 2,
) );

$header->createOption( array(
	'name'    => esc_html__( 'Select a Layout', 'sailing' ),
	'id'      => 'header_style',
	'type'    => 'radio-image',
	'options' => array(
		'header_v1' 	=> get_template_directory_uri( 'template_directory' ) . '/images/admin/header/header_v1.jpg',
		'header_v2' 	=> get_template_directory_uri( 'template_directory' ) . '/images/admin/header/header_v2.jpg',
	),
	'default' => 'header_v1',
) );


$header->createOption( array(
	'name'    => esc_html__( 'Header Position',  'sailing' ),
	'id'      => 'header_position',
	'type'    => 'select',
	'options' => array(
		'header_default' => esc_html__( 'Default',  'sailing' ),
		'header_overlay' => esc_html__( 'Overlay',  'sailing' ),
	),
	'default' => 'header_overlay',
) );


$header->createOption( array(
	'name'    => esc_html__( 'Background color',  'sailing' ),
	'id'      => 'header_bg_color',
	'default' => '',
	'type'    => 'color-opacity'
) );

$header->createOption( array(
	'name'    => esc_html__( 'Text color',  'sailing' ),
	'id'      => 'header_text_color',
	'default' => '#fff',
	'type'    => 'color-opacity'
) );

$header->createOption( array(
	'name'    => esc_html__( 'Text Hover color',  'sailing' ),
	'id'      => 'header_text_color_hover',
	'default' => '#fff',
	'type'    => 'color-opacity'
) );

$header->createOption( array(
	'name'    => esc_html__( 'Font Size',  'sailing' ),
	'id'      => 'header_font_size',
	'default' => '13px',
	'type'    => 'select',
	'options' => $font_sizes
) );

$header->createOption( array(
	'name'    => esc_html__( 'Font Weight',  'sailing' ),
	'id'      => 'header_font_weight',
	'default' => '700',
	'type'    => 'select',
	'options' => array( 'bold'   => 'Bold',
	                    'normal' => 'Normal',
	                    '100'    => '100',
	                    '200'    => '200',
	                    '300'    => '300',
	                    '400'    => '400',
	                    '500'    => '500',
	                    '600'    => '600',
	                    '700'    => '700',
	                    '800'    => '800',
	                    '900'    => '900'
	),
) );
<?php

// header Options
$header->addSubSection( array(
	'name'     => esc_html__( 'Sticky Menu', 'sailing' ),
	'id'       => 'display_header_menu',
	'position' => 14,
) );

$header->createOption( array(
	'name' => esc_html__( 'Sticky Menu on scroll', 'sailing' ),
	'desc' => esc_html__( 'Check to enable a fixed header when scrolling, uncheck to disable.', 'sailing' ),
	'id'   => 'header_sticky',
	'type' => 'checkbox',
	'default' => true,
) );

$header->createOption( array(
	'name'    => esc_html__( 'Config Sticky Menu?', 'sailing' ),
	'desc'    => '',
	'id'      => 'config_att_sticky',
	'options' => array( 'sticky_same'   => 'The same with main menu',
						'sticky_custom' => 'Custom'
	),
	'type'    => 'select',
	'default' => 'sticky_custom'
) );

$header->createOption( array(
	'name'    => esc_html__( 'Sticky Background color', 'sailing' ),
	'desc'    => esc_html__( 'Pick a background color for main menu', 'sailing' ),
	'id'      => 'sticky_bg_main_menu_color',
	'default' => '#fff',
	'type'    => 'color-opacity'
) );

$header->createOption( array(
	'name'    => esc_html__( 'Text color', 'sailing' ),
	'desc'    => esc_html__( 'Pick a text color for main menu', 'sailing' ),
	'id'      => 'sticky_main_menu_text_color',
	'default' => '#2a2a2a',
	'type'    => 'color-opacity'
) );

$header->createOption( array(
	'name'    => esc_html__( 'Text Hover color', 'sailing' ),
	'desc'    => esc_html__( 'Pick a text hover color for main menu', 'sailing' ),
	'id'      => 'sticky_main_menu_text_hover_color',
	'default' => '#2a2a2a',
	'type'    => 'color-opacity'
) );
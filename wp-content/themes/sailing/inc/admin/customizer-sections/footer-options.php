<?php

$footer->addSubSection( array(
	'name'     => esc_html__( 'Footer',  'sailing' ),
	'id'       => 'display_footer',
	'position' => 10,
) );

$footer->createOption( array(
	'name'    => esc_html__( 'Background footer images',  'sailing' ),
	'id'      => 'footer_background_img',
	'type'    => 'upload',
	'desc'    => esc_html__( 'Upload your background',  'sailing' ),
) );
$footer->createOption( array(
	'name'        => esc_html__( 'Text Color',  'sailing' ),
	'id'          => 'footer_text_font_color',
	'type'        => 'color-opacity',
	'default'     => '#fff',
) );

$footer->createOption( array(
	'name'        => esc_html__( 'Title & Link Color',  'sailing' ),
	'id'          => 'footer_link_color',
	'type'        => 'color-opacity',
	'default'     => '#fff',
) );

$footer->createOption( array(
	'name'        => esc_html__( 'Background Color',  'sailing' ),
	'id'          => 'footer_bg_color',
	'type'        => 'color-opacity',
	'default'     => '#111111',
) );


$footer->createOption( array(
	'name'        => esc_html__( 'Line Color',  'sailing' ),
	'id'          => 'footer_line_color',
	'type'        => 'color-opacity',
	'default'     => '#eee',
) );

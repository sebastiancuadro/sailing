<?php

$typography = $titan->createThimCustomizerSection( array(
	'name'     =>  esc_html__( 'Typography', 'sailing' ),
	'position' => 7,
	'id'       => 'typography'
) );

$typography->addSubSection( array(
	'name'     => esc_html__( 'Body', 'sailing' ),
	'id'       => 'typography_font_body',
	'position' => 1,
) );
$typography->createOption( array(
	'name'                => esc_html__( 'Select Font', 'sailing' ),
	'id'                  => 'font_body',
	'type'                => 'font-color',
	'show_font_family'    => true,
	'show_font_weight'    => true,
	'show_font_style'     => false,
	'show_font_size'      => true,
	'show_line_height'    => true,
	'show_letter_spacing' => false,
	'show_text_transform' => false,
	'show_font_variant'   => false,
	'show_text_shadow'    => false,
	'default'             => array(
		'font-family'   => 'Roboto',
		'font-weight'   => 'normal',
		'color-opacity' => '#5a5a5a',
		'line-height'   => '1.6em',
		'font-size'     => '15px'
	)
) );
$typography->addSubSection( array(
	'name'     => esc_html__( 'Font Sub Title', 'sailing' ),
	'id'       => 'typography_font_title',
	'position' => 2,
) );


$typography->createOption( array(
	'name'                => esc_html__( 'Select Font', 'sailing' ),
	'id'                  => 'font_title',
	'type'                => 'font-color',
	'show_font_family'    => true,
	'show_color'          => true,
	'show_font_weight'    => true,
	'show_font_style'     => false,
	'show_font_size'      => false,
	'show_line_height'    => false,
	'show_letter_spacing' => false,
	'show_text_transform' => false,
	'show_font_variant'   => false,
	'show_text_shadow'    => false,
	'default'             => array(
		'font-family' => 'Crimson Text',
		'font-weight' => '600',
		'color-opacity' => '#2a2a2a',
	)
) );

$typography->addSubSection( array(
	'name'     => esc_html__( 'H1', 'sailing' ),
	'id'       => 'typography_font_h1',
	'position' => 3,
) );
$typography->createOption( array(
	'name'                => esc_html__( 'Select Font', 'sailing' ),
	'id'                  => 'font_h1',
	'type'                => 'font-color',
	'show_font_family'    => false,
	'show_font_weight'    => true,
	'show_font_style'     => true,
	'show_font_size'      => true,
	'show_line_height'    => true,
	'show_text_transform' => true,
	'show_letter_spacing' => false,
	'show_font_variant'   => false,
	'show_text_shadow'    => false,
	'default'             => array(
		'font-family'    => 'Crimson Text',
		'font-weight'    => '600',
		'color-opacity'  => '#2a2a2a',
		'font-style'     => 'normal',
		'line-height'    => '1.3em',
		'text-transform' => 'none',
		'font-size'      => '30px'
	)
) );

$typography->addSubSection( array(
	'name'     => esc_html__( 'H2', 'sailing' ),
	'id'       => 'typography_font_h2',
	'position' => 4,
) );

$typography->createOption( array(
	'name'                => esc_html__( 'Select Font', 'sailing' ),
	'id'                  => 'font_h2',
	'type'                => 'font-color',
	'show_font_family'    => false,
	'show_font_weight'    => true,
	'show_font_style'     => true,
	'show_font_size'      => true,
	'show_line_height'    => true,
	'show_letter_spacing' => false,
	'show_text_transform' => true,
	'show_font_variant'   => false,
	'show_text_shadow'    => false,
	'default'             => array(
		'font-family'    => 'Crimson Text',
		'font-weight'    => '600',
		'color-opacity'  => '#2a2a2a',
		'font-style'     => 'normal',
		'line-height'    => '1.2em',
		'text-transform' => 'none',
		'font-size'      => '26px'
	)
) );

$typography->addSubSection( array(
	'name'     => esc_html__( 'H3', 'sailing' ),
	'id'       => 'typography_font_h3',
	'position' => 5,
) );

$typography->createOption( array(
	'name'                => esc_html__( 'Select Font', 'sailing' ),
	'id'                  => 'font_h3',
	'type'                => 'font-color',
	'show_font_family'    => false,
	'show_font_size'      => true,
	'show_font_weight'    => true,
	'show_font_style'     => true,
	'show_line_height'    => true,
	'show_letter_spacing' => false,
	'show_text_transform' => true,
	'show_font_variant'   => false,
	'show_text_shadow'    => false,
	'default'             => array(
		'font-family'    => 'Crimson Text',
		'font-weight'    => '600',
		'color-opacity'  => '#2a2a2a',
		'font-style'     => 'normal',
		'line-height'    => '1.2em',
		'text-transform' => 'none',
		'font-size'      => '24px'
	)
) );

$typography->addSubSection( array(
	'name'     => esc_html__( 'H4', 'sailing' ),
	'id'       => 'typography_font_h4',
	'position' => 6,
) );

$typography->createOption( array(
	'name'                => esc_html__( 'Select Font', 'sailing' ),
	'id'                  => 'font_h4',
	'type'                => 'font-color',
	'show_font_family'    => false,
	'show_font_size'      => true,
	'show_font_weight'    => true,
	'show_font_style'     => true,
	'show_line_height'    => true,
	'show_letter_spacing' => false,
	'show_text_transform' => true,
	'show_font_variant'   => false,
	'show_text_shadow'    => false,
	'default'             => array(
		'font-family'    => 'Crimson Text',
		'font-weight'    => '600',
		'color-opacity'  => '#2a2a2a',
		'font-style'     => 'normal',
		'line-height'    => '1.2em',
		'text-transform' => 'capitalize',
		'font-size'      => '20px'
	),
) );

$typography->addSubSection( array(
	'name'     => esc_html__( 'H5', 'sailing' ),
	'id'       => 'typography_font_h5',
	'position' => 7,
) );

$typography->createOption( array(
	'name'                => esc_html__( 'Select Font', 'sailing' ),
	'id'                  => 'font_h5',
	'type'                => 'font-color',
	'show_font_family'    => false,
	'show_font_weight'    => true,
	'show_font_style'     => true,
	'show_line_height'    => true,
	'show_font_size'      => true,
	'show_letter_spacing' => false,
	'show_text_transform' => true,
	'show_font_variant'   => false,
	'show_text_shadow'    => false,
	'default'             => array(
		'font-family'    => 'Crimson Text',
		'font-weight'    => '600',
		'color-opacity'  => '#2a2a2a',
		'font-style'     => 'normal',
		'line-height'    => '1.2em',
		'text-transform' => 'none',
		'font-size'      => '20px'
	)
) );

$typography->addSubSection( array(
	'name'     => esc_html__( 'H6', 'sailing' ),
	'id'       => 'typography_font_h6',
	'position' => 8,
) );

$typography->createOption( array(
	'name'                => esc_html__( 'Select Font', 'sailing' ),
	'id'                  => 'font_h6',
	'type'                => 'font-color',
	'show_font_family'    => false,
	'show_font_weight'    => true,
	'show_font_size'      => true,
	'show_font_style'     => true,
	'show_line_height'    => true,
	'show_letter_spacing' => false,
	'show_text_transform' => true,
	'show_font_variant'   => false,
	'show_text_shadow'    => false,
	'default'             => array(
		'font-family'    => 'Crimson Text',
		'font-weight'    => '600',
		'color-opacity'  => '#2a2a2a',
		'font-style'     => 'normal',
		'line-height'    => '1.2em',
		'text-transform' => 'none',
		'font-size'      => '18px'
	)
) );

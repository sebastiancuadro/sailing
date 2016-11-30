<?php
class Heading_Widget extends Thim_Widget {
	function __construct() {
		parent::__construct(
			'heading',
			esc_attr__( 'Thim: Heading', 'sailing' ),
			array(
				'description'   => esc_attr__( 'Add heading text', 'sailing' ),
				'help'          => '',
				'panels_groups' => array( 'thim_widget_group' )
			),
			array(),
			array(

				'title'               => array(
					'type'    => 'text',
					'label'   => esc_attr__( 'Heading Text', 'sailing' ),
					'default' => esc_attr__( "Default value", "sailing" )
				),
				'line'                => array(
					'type'    => 'checkbox',
					'label'   => esc_attr__( 'Show Separator', 'sailing' ),
				),
				'textcolor'           => array(
					'type'    => 'color',
					'label'   => esc_attr__( 'Text Heading color', 'sailing' ),
					'default' => '',
				),
				'size'                => array(
					"type"    => "select",
					"label"   => esc_attr__( "Size Heading", "sailing" ),
					"options" => array(
						"h2" => esc_attr__( "h2", "sailing" ),
						"h3" => esc_attr__( "h3", "sailing" ),
						"h4" => esc_attr__( "h4", "sailing" ),
						"h5" => esc_attr__( "h5", "sailing" ),
						"h6" => esc_attr__( "h6", "sailing" )
					),
					"default" => "h3"
				),
				'font_heading'        => array(
					"type"          => "select",
					"label"         => esc_attr__( "Font Heading", "sailing" ),
					"default"       => "default",
					"options"       => array(
						"default" => esc_attr__( "Default", "sailing" ),
						"custom"  => esc_attr__( "Custom", "sailing" )
					),
					"description"   => esc_attr__( "Select Font heading.", "sailing" ),
					'state_emitter' => array(
						'callback' => 'select',
						'args'     => array( 'font_heading_type' )
					)
				),
				'custom_font_heading' => array(
					'type'          => 'section',
					'label'         => esc_attr__( 'Custom Font Heading', 'sailing' ),
					'hide'          => true,
					'state_handler' => array(
						'font_heading_type[custom]'  => array( 'show' ),
						'font_heading_type[default]' => array( 'hide' ),
					),
					'fields'        => array(
						'custom_font_size'   => array(
							"type"        => "number",
							"label"       => esc_attr__( "Font Size", "sailing" ),
							"suffix"      => "px",
							"default"     => "14",
							"description" => esc_attr__( "custom font size", "sailing" ),
							"class"       => "color-mini",
						),
						'custom_font_weight' => array(
							"type"        => "select",
							"label"       => esc_attr__( "Custom Font Weight", "sailing" ),
							"options"     => array(
								"normal" => esc_attr__( "Normal", "sailing" ),
								"bold"   => esc_attr__( "Bold", "sailing" ),
								"100"    => esc_attr__( "100", "sailing" ),
								"200"    => esc_attr__( "200", "sailing" ),
								"300"    => esc_attr__( "300", "sailing" ),
								"400"    => esc_attr__( "400", "sailing" ),
								"500"    => esc_attr__( "500", "sailing" ),
								"600"    => esc_attr__( "600", "sailing" ),
								"700"    => esc_attr__( "700", "sailing" ),
								"800"    => esc_attr__( "800", "sailing" ),
								"900"    => esc_attr__( "900", "sailing" )
							),
							"description" => esc_attr__( "Select Custom Font Weight", "sailing" ),
							"class"       => "color-mini",
						),
						'custom_font_style'  => array(
							"type"        => "select",
							"label"       => esc_attr__( "Custom Font Style", "sailing" ),
							"options"     => array(
								"inherit" => esc_attr__( "inherit", "sailing" ),
								"initial" => esc_attr__( "initial", "sailing" ),
								"italic"  => esc_attr__( "italic", "sailing" ),
								"normal"  => esc_attr__( "normal", "sailing" ),
								"oblique" => esc_attr__( "oblique", "sailing" )
							),
							"description" => esc_attr__( "Select Custom Font Style", "sailing" ),
							"class"       => "color-mini",
						),
					),
				),
				'sub-title'           => array(
					'type'    => 'text',
					'label'   => esc_attr__( 'Sub Heading', 'sailing' ),
					'default' => ''
				),
				'css_animation'       => array(
					"type"    => "select",
					"label"   => esc_attr__( "CSS Animation", "sailing" ),
					"options" => array(
						""              => esc_attr__( "No", "sailing" ),
						"top-to-bottom" => esc_attr__( "Top to bottom", "sailing" ),
						"bottom-to-top" => esc_attr__( "Bottom to top", "sailing" ),
						"left-to-right" => esc_attr__( "Left to right", "sailing" ),
						"right-to-left" => esc_attr__( "Right to left", "sailing" ),
						"appear"        => esc_attr__( "Appear from center", "sailing" )
					),
				),
			),
			TP_THEME_DIR . 'inc/widgets/heading/'
		);
	}

	/**
	 * Initialize the CTA widget
	 */

	function get_template_name( $instance ) {
		return 'base';
	}

	function get_style_name( $instance ) {
		return false;
	}
}

function thim_heading_register_widget() {
	register_widget( 'Heading_Widget' );
}

add_action( 'widgets_init', 'thim_heading_register_widget' );
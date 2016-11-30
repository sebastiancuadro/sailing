<?php

class Gallery_Images_Widget extends Thim_Widget {

	function __construct() {

		parent::__construct(
			'gallery-images',
			esc_attr__( 'Thim: Gallery Images', 'sailing' ),
			array(
				'description' => esc_attr__( 'Add gallery image', 'sailing' ),
				'help'        => '',
				'panels_groups' => array('thim_widget_group')
			),
			array(),
			array(
				'image'         => array(
					'type'        => 'multimedia',
					'label'       => esc_attr__( 'Image', 'sailing' ),
					'description' => esc_attr__( 'Select image from media library.', 'sailing' )
				),

				'image_size'    => array(
					'type'        => 'text',
					'label'       => esc_attr__( 'Image size', 'sailing' ),
					'description' => esc_attr__( 'Enter image size. Example: "thumbnail", "medium", "large", "full"', 'sailing' )
				),
				'image_link'    => array(
					'type'        => 'text',
					'label'       => esc_attr__( 'Image Link', 'sailing' ),
					'description' => esc_attr__( 'Enter URL if you want this image to have a link. These links are separated by comma (Ex: #,#,#,#)', 'sailing' )
				),
				'link_target'   => array(
					"type"    => "select",
					"label"   => esc_attr__( "Link Target", "sailing" ),
					"options" => array(
						"_self"  => esc_attr__( "Same window", "sailing" ),
						"_blank" => esc_attr__( "New window", "sailing" ),
					),
				),
				'gallery_layout'   => array(
					"type"    => "select",
					"label"   => esc_attr__( "Gallery Layout", "sailing" ),
					"options" => array(
						"default"  => esc_attr__( "Default", "sailing" ),
						"slider" => esc_attr__( "Slider", "sailing" ),
					),
				),

				'css_animation' => array(
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
			TP_THEME_DIR . 'inc/widgets/gallery-images/'
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


function thim_gallery_images_widget() {
	register_widget( 'Gallery_Images_Widget' );
}

add_action( 'widgets_init', 'thim_gallery_images_widget' );
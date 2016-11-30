<?php

class Thim_Search_Room_Widget extends Thim_Widget {
	function __construct() {
		parent::__construct(
			'search-room',
			esc_attr__( 'Thim: Search Room', 'sailing' ),
			array(
				'description'   => esc_attr__( 'Show search room widget', 'sailing' ),
				'help'          => '',
				'panels_groups' => array( 'thim_widget_group' ),

			),
			array(),
			array(
				'title'        => array(
					'type'    => 'text',
					'label'   => esc_attr__( 'Title', 'sailing' ),
					'default' => esc_attr__( 'Your Reservation', 'sailing' )
				),
				'show_label'         => array(
					'type'    => 'checkbox',
					'label'   => esc_attr__( 'Show Label Input', 'sailing' ),
 				),
				'background_color' => array(
					'type'    => 'color',
					'label'   => esc_attr__( 'Background color', 'sailing' ),
					'default' => '',
				),
				'background_image' => array(
					'type'  => 'media',
 					'label' => esc_attr__( 'Background Image', 'sailing' ),
					'description'  => esc_attr__( 'Select background image for widget', 'sailing' )
				),
			),
			TP_THEME_DIR . 'inc/widgets/search-room/'
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

function thim_search_room_register_widget() {
	register_widget( 'Thim_Search_Room_Widget' );
}

add_action( 'widgets_init', 'thim_search_room_register_widget' );
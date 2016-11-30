<?php

class Thim_Google_Map_Widget extends Thim_Widget {
	function __construct() {
		parent::__construct(
			'google-map',
			esc_attr__( 'Thim: Google Maps', 'sailing' ),
			array(
				'description'   => esc_attr__( 'A Google Maps widget.', 'sailing' ),
				'help'          => '',
				'panels_groups' => array( 'thim_widget_group' )
			),
			array(),
			array(
				'title'      => array(
					'type'  => 'text',
					'label' => esc_attr__( 'Title', 'sailing' ),
				),
				'display_by' => array(
					'type'          => 'select',
					'label'         => esc_html__( 'Get Map By', 'sailing' ),
					'options'       => array(
						'address'  => esc_html__( 'Address', 'sailing' ),
						'location' => esc_html__( 'Coordinates', 'sailing' ),
					),
					'default'       => 'address',
					'state_emitter' => array(
						'callback' => 'select',
						'args'     => array( 'display_by' )
					),
				),
				'location'   => array(
					'type'          => 'section',
					'label'         => esc_html__( 'Coordinates', 'sailing' ),
					'hide'          => true,
					"class"         => "clear-both",
					'state_handler' => array(
						'display_by[address]'  => array( 'hide' ),
						'display_by[location]' => array( 'show' ),
					),
					'fields'        => array(
						'lat' => array(
							'type'    => 'text',
							'label'   => esc_html__( 'Lat', 'sailing' ),
							'default' => '41.868626',
						),
						'lng' => array(
							'type'    => 'text',
							'label'   => esc_html__( 'Lng', 'sailing' ),
							'default' => '-74.104301',
						),
					),
				),

				'map_center' => array(
					'type'          => 'textarea',
					'rows'          => 2,
					'label'         => esc_attr__( 'Map center', 'sailing' ),
					'description'   => esc_attr__( 'The name of a place, town, city, or even a country. Can be an exact address too.', 'sailing' ),
					'state_handler' => array(
						'display_by[address]'  => array( 'show' ),
						'display_by[location]' => array( 'hide' ),
					),
				),

				'settings' => array(
					'type'        => 'section',
					'label'       => esc_attr__( 'Settings', 'sailing' ),
					'hide'        => false,
					'description' => esc_attr__( 'Set map display options.', 'sailing' ),
					'fields'      => array(
						'height'      => array(
							'type'    => 'text',
							'default' => 480,
							'label'   => esc_attr__( 'Height', 'sailing' )
						),
						'zoom'        => array(
							'type'        => 'slider',
							'label'       => esc_attr__( 'Zoom level', 'sailing' ),
							'description' => esc_attr__( 'A value from 0 (the world) to 21 (street level).', 'sailing' ),
							'min'         => 0,
							'max'         => 21,
							'default'     => 12,
							'integer'     => true,

						),
						'scroll_zoom' => array(
							'type'        => 'checkbox',
							'default'     => true,
							'state_name'  => 'interactive',
							'label'       => esc_attr__( 'Scroll to zoom', 'sailing' ),
							'description' => esc_attr__( 'Allow scrolling over the map to zoom in or out.', 'sailing' )
						),
						'draggable'   => array(
							'type'        => 'checkbox',
							'default'     => true,
							'state_name'  => 'interactive',
							'label'       => esc_attr__( 'Draggable', 'sailing' ),
							'description' => esc_attr__( 'Allow dragging the map to move it around.', 'sailing' )
						)
					)
				),
				'markers'  => array(
					'type'        => 'section',
					'label'       => esc_attr__( 'Markers', 'sailing' ),
					'hide'        => true,
					'description' => esc_attr__( 'Use markers to identify points of interest on the map.', 'sailing' ),
					'fields'      => array(
						'marker_at_center' => array(
							'type'    => 'checkbox',
							'default' => true,
							'label'   => esc_attr__( 'Show marker at map center', 'sailing' )
						),
						'marker_icon'      => array(
							'type'        => 'media',
							'default'     => '',
							'label'       => esc_attr__( 'Marker Icon', 'sailing' ),
							'description' => esc_attr__( 'Replaces the default map marker with your own image.', 'sailing' )
						),
						'marker_positions' => array(
							'type'      => 'repeater',
							'label'     => esc_attr__( 'Marker positions', 'sailing' ),
							'item_name' => esc_attr__( 'Marker', 'sailing' ),
							'fields'    => array(
								'place' => array(
									'type'  => 'textarea',
									'rows'  => 2,
									'label' => esc_attr__( 'Place', 'sailing' )
								)
							)
						)
					)
				),
			)
		);
	}

	function enqueue_frontend_scripts() {
		wp_enqueue_script( 'thim-google-map', TP_THEME_URI . 'inc/widgets/google-map/js/js-google-map.js', array( 'jquery' ), true );
	}

	function get_template_name( $instance ) {
		return 'base';
	}

	function get_style_name( $instance ) {
		return false;
	}

	function get_template_variables( $instance, $args ) {
		$settings = $instance['settings'];
		$markers  = $instance['markers'];
		$mrkr_src = wp_get_attachment_image_src( $instance['markers']['marker_icon'] );
		{
			return array(
				'map_id'   => md5( $instance['map_center'] ),
				'height'   => $settings['height'],
				'map_data' => array(
					'display_by'       => ( isset( $instance['display_by'] ) && $instance['display_by'] != 'address' ) ? $instance['display_by'] : 'address',
					'lat'              => isset( $instance['location']['lat'] ) ? $instance['location']['lat'] : 41.956750,
					'lng'              => isset( $instance['location']['lng'] ) ? $instance['location']['lng'] : - 74.545448,
					'address'          => $instance['map_center'],
					'zoom'             => $settings['zoom'],
					'scroll-zoom'      => $settings['scroll_zoom'],
					'draggable'        => $settings['draggable'],
					'marker-icon'      => ! empty( $mrkr_src ) ? $mrkr_src[0] : '',
					//	'markers-draggable' => isset( $markers['markers_draggable'] ) ? $markers['markers_draggable'] : '',
					'marker-at-center' => $markers['marker_at_center'],
					'marker-positions' => isset( $markers['marker_positions'] ) ? json_encode( $markers['marker_positions'] ) : '',
				)
			);
		}
	}
}

//
function thim_google_map_widget() {
	register_widget( 'Thim_Google_Map_Widget' );
}

add_action( 'widgets_init', 'thim_google_map_widget' );
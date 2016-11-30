<?php
class Thim_Video_Widget extends Thim_Widget {

	function __construct() {

		parent::__construct(
			'video',
			esc_attr__( 'Thim: Video', 'sailing' ),
			array(
				'description' => esc_attr__( 'A video player widget.', 'sailing' ),
				'help'        => '',
				'panels_groups' => array('thim_widget_group')
			),
			array(),
			array(
				'title'     => array(
					'type'  => 'text',
					'label' => esc_attr__( 'Title', 'sailing' )
				),
				'desc'     => array(
					'type'  => 'text',
					'label' => esc_attr__( 'Description', 'sailing' )
				),
				'self_poster'     => array(
					'type'          => 'media',
					'label'         => esc_attr__( 'Select cover image', 'sailing' ),
					'default'       => '',
					'library'       => 'image',
				),
				'external_video'  => array(
					'type'          => 'text',
					'sanitize'      => 'url',
					'label'         => esc_attr__( 'Video URL', 'sailing' ),
				)
			)
		);
	}
	function get_template_name($instance) {
		return 'default';
	}

	function get_style_name($instance) {
		return false;
	}
 }

function thim_video_register_widget() {
	register_widget( 'Thim_Video_Widget' );
}
add_action( 'widgets_init', 'thim_video_register_widget' );
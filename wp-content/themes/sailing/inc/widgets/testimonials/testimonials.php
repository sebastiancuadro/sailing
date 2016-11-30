<?php
if ( class_exists( 'THIM_Testimonials' ) ) {
	class Testimonials_Widget extends Thim_Widget {
		function __construct() {
			parent::__construct(
				'testimonials',
				esc_attr__( 'Thim: Testimonials',  'sailing' ),
				array(
					'description'   => esc_attr__( '',  'sailing' ),
					'help'          => '',
					'panels_groups' => array( 'thim_widget_group' ),
					'panels_icon'   => 'dashicons dashicons-welcome-learn-more'
				),
				array(),
				array(
					'heading_group' => array(
						'type'   => 'section',
						'label'  => esc_attr__( 'Heading',  'sailing' ),
						'hide'   => true,
						'fields' => array(
							'title'               => array(
								'type'                  => 'text',
								'label'                 => esc_attr__( 'Heading Text',  'sailing' ),
								'default'               => esc_attr__( 'Testimonials', 'sailing' ),
								'allow_html_formatting' => true
							),
						),
					),

					'number'        => array(
						'type'    => 'number',
						'label'   => esc_attr__( 'Number Posts',  'sailing' ),
						'default' => '4'
					),

				),
				TP_THEME_DIR . 'inc/widgets/testimonials/'
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

	function thim_testimonials_register_widget() {
		register_widget( 'Testimonials_Widget' );
	}

	add_action( 'widgets_init', 'thim_testimonials_register_widget' );
}
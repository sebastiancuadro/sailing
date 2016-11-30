<?php

class Thim_List_Post_Widget extends Thim_Widget {
	function __construct() {
		$list_image_size = $this->get_image_sizes();
		$image_size = array();
		$image_size['none'] = esc_attr__('No Image', 'sailing');
		if(is_array($list_image_size) && !empty($list_image_size)){
			foreach( $list_image_size as $key=>$value){
				if($value['width'] && $value['height']){
					$image_size[$key] = $value['width'].'x'.$value['height']; 
				}else{
					$image_size[$key] = $key;
				}
			}
		}
		parent::__construct(
			'list-post',
			esc_attr__( 'Thim: Display Posts', 'sailing' ),
			array(
				'description'   => esc_attr__( 'Show Post', 'sailing' ),
				'help'          => '',
				'panels_groups' => array( 'thim_widget_group' ),

			),
			array(),
			array(
				'title'        => array(
					'type'    => 'text',
					'label'   => esc_attr__( 'Title', 'sailing' ),
					'default' => esc_attr__( 'From Blog', 'sailing' )
				),
				'cat_id' => array(
					'type' 		=> 'select',
					'label'		=> esc_attr__('Select Categories', 'sailing'),
					'default'	=> 'none',
					'options'	=> $this->get_categories()
				),
				'image_size' => array(
					'type'    => 'select',
					'label'   => esc_attr__( 'Select Image Size', 'sailing' ),
					'default' => 'none',
					'options' => $image_size,
				),
				'show_description' =>array(
					'type'		=> 'radio',
					'label'		=> esc_attr__('Show Description', 'sailing'),
					'default'	=> 'yes',
					'options'	=> array(
						'no' => esc_attr__('No', 'sailing'),
						'yes' => esc_attr__('Yes', 'sailing'),
					)
				),
				'number_posts' => array(
					'type'    => 'number',
					'label'   => esc_attr__( 'Number Post', 'sailing' ),
					'default' => '4'
				),
				'orderby'      => array(
					'type'		=> 'select',
					'label'		=> 	__( 'Order by', 'sailing' ),
					'options' => array(
						'popular' => esc_attr__( 'Popular', 'sailing' ),
						'recent'  => esc_attr__( 'Recent', 'sailing' ),
						'title'   => esc_attr__( 'Title', 'sailing' ),
						'random'  => esc_attr__( 'Random', 'sailing' ),
					),
				),
				'order'        => array(
					'type'    => 'select',
					'label'   => esc_attr__( 'Order by', 'sailing' ),
					'options' => array(
						'asc'  => esc_attr__( 'ASC', 'sailing' ),
						'desc' => esc_attr__( 'DESC', 'sailing' )
					),
				),
				'link'        => array(
					'type'    => 'text',
					'label'   => esc_attr__( 'Link All Post', 'sailing' ),
 				),
				'text_link'        => array(
					'type'    => 'text',
					'label'   => esc_attr__( 'Text Link', 'sailing' ),
 				),
 				'style'      => array(
					'type'    => 'select',
					'label'   => esc_attr__( 'Style', 'sailing' ),
					'options' => array(
						''			=> esc_attr__( 'No Style', 'sailing' ),
						'homepage' 	=> esc_attr__( 'Home Page', 'sailing' ),
						'sidebar'  	=> esc_attr__( 'Sidebar', 'sailing' ),
					),
				),
			),
			TP_THEME_DIR . 'inc/widgets/list-post/'
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
	
	// list image size
    function get_image_sizes( $size = '' ) {

        global $_wp_additional_image_sizes;

        $sizes = array();
        $get_intermediate_image_sizes = get_intermediate_image_sizes();

        // Create the full array with sizes and crop info
        foreach( $get_intermediate_image_sizes as $_size ) {

                if ( in_array( $_size, array( 'thumbnail', 'medium', 'large' ) ) ) {

                        $sizes[ $_size ]['width'] = get_option( $_size . '_size_w' );
                        $sizes[ $_size ]['height'] = get_option( $_size . '_size_h' );
                        $sizes[ $_size ]['crop'] = (bool) get_option( $_size . '_crop' );

                } elseif ( isset( $_wp_additional_image_sizes[ $_size ] ) ) {

                        $sizes[ $_size ] = array(
                                'width' => $_wp_additional_image_sizes[ $_size ]['width'],
                                'height' => $_wp_additional_image_sizes[ $_size ]['height'],
                                'crop' =>  $_wp_additional_image_sizes[ $_size ]['crop']
                        );

                }

        }

        // Get only 1 size if found
        if ( $size ) {

                if( isset( $sizes[ $size ] ) ) {
                        return $sizes[ $size ];
                } else {
                        return false;
                }

        }

        return $sizes;
    }

	// Get list category
    function get_categories(){
    	$args = array(
		  'orderby' 	=> 'id',
		  'parent' 		=> 0
		 );
		$items = array();
		$items['all'] = 'All';
		$categories = get_categories( $args );
		if (isset($categories)) {
			foreach ($categories as $key => $cat) {
				$items[$cat -> cat_ID] = $cat -> cat_name;
				$childrens = get_term_children($cat->term_id, $cat->taxonomy);
				if ($childrens){
					foreach ($childrens as $key => $children) {
						$child = get_term_by( 'id', $children, $cat->taxonomy);
						$items[$child->term_id] = '--'.$child->name;

					}
				}
			}
		}
		return $items;
    }
}

function thim_list_post_register_widget() {
	register_widget( 'Thim_List_Post_Widget' );
}

add_action( 'widgets_init', 'thim_list_post_register_widget' );
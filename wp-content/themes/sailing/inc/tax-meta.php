<?php
if ( is_admin() ) {
	/*
	   * prefix of meta keys, optional
	   */
	$prefix = 'thim_';
	/*
	   * configure your meta box
	   */
	$config = array(
		'id'             => 'category_meta_box',
		// meta box id, unique per meta box
		'title'          => 'Category Meta Box',
		// meta box title
		'pages'          => array( 'category' ),
		// taxonomy name, accept categories, post_tag and custom taxonomies
		'context'        => 'normal',
		// where the meta box appear: normal (default), advanced, side; optional
		'fields'         => array(),
		// list of meta fields (can be added by field arrays)
		'local_images'   => false,
		// Use local or hosted images (meta box images for add/remove)
		'use_with_theme' => false
		//change path if used with theme set to true, false for a plugin or anything else for a custom path(default false).
	);

	$my_meta          = new Tax_Meta_Class( $config );
	/*
   * Add fields to your meta box
   */
	$my_meta->addSelect( $prefix . 'layout', array(
		''              => 'Using in Theme Option',
		'full-content'    => 'No Sidebar',
		'sidebar-left'  => 'Left Sidebar',
		'sidebar-right' => 'Right Sidebar'
	),array( 'name' => esc_html__( 'Custom Layout ', 'sailing' ), 'std' => array( '' ) ) );

	$my_meta->addSelect( $prefix . 'custom_heading', array(
		''       => 'Using in Theme Option',
		'custom' => 'Custom',
	),array( 'name' => esc_html__( 'Custom Heading ', 'sailing' ), 'std' => array( '' ) ) );

	$my_meta->addImage( $prefix . 'archive_top_image', array( 'name' => esc_html__( 'Background images Heading', 'sailing' ) ) );
	$my_meta->addColor( $prefix . 'archive_cate_heading_bg_color', array( 'name' => esc_html__( 'Background Color Heading', 'sailing' ) ) );
	$my_meta->addColor( $prefix . 'archive_cate_heading_text_color', array( 'name' => esc_html__( 'Text Color Heading', 'sailing' ) ) );
	$my_meta->addCheckbox( $prefix . 'archive_cate_hide_title', array( 'name' => esc_html__( 'Hide Title', 'sailing' ) ) );
	$my_meta->Finish();
}

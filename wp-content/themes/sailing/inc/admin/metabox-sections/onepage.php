<?php
$onepage                = $titan->createMetaBox( array(
	'name'      => esc_html__( 'Select Menu One Page', 'sailing' ),
	'id'        => 'menu_onepage',
	'post_type' => array( 'page' ),
) );
$menus                  = get_terms( 'nav_menu', array( 'hide_empty' => false ) );
$menu_select['default'] = 'Default Menu';
foreach ( $menus as $menu ) {
	$menu_select[$menu->term_id] = $menu->name;
}
$onepage->createOption( array(
	'name'    => esc_html__( 'Select Menu', 'sailing' ),
	'id'      => 'select_menu_one_page',
	'type'    => 'select',
	'options' => $menu_select
) );

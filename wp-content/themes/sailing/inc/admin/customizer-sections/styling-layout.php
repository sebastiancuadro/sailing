<?php
$styling->addSubSection( array(
	'name'     => esc_html__('Layout', 'sailing') ,
	'id'       => 'styling_layout',
	'position' => 10,
) );
$styling->createOption( array(
	'name'    => esc_html__('Select a layout', 'sailing') ,
	'id'      => 'box_layout',
	'type'    => 'select',
	'options' => array(
		'boxed' => 'Boxed',
		'wide'  => 'Wide',
	),
	'default' 		=> 'wide',
) );

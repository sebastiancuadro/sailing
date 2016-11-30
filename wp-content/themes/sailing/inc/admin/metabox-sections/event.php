<?php
$event = $titan->createMetaBox( array(
	'name'      => esc_html__( 'Event Options', 'sailing' ),
	'id'        => 'event-options',
	'post_type' => array( 'post' ),
) );

$event->createOption( array(
	'name' => esc_html__( 'Use Page Event', 'sailing' ),
	'id'   => 'use_event',
	'type' => 'checkbox',
	'desc' => ' '
) );

$event->createOption( array(
	'name'    => esc_html__( 'Desc', 'sailing' ),
	'id'      => 'desc',
	'type'    => 'text',
	'default' => '',
) );

$event->createOption( array(
	'name'    => esc_html__( 'Start Date', 'sailing' ),
	'id'      => 'start_date',
	'type'    => 'date',
	'desc'    => esc_html__( 'Choose a date', 'sailing' ),
	'default' => '',
) );

$event->createOption( array(
	'name'    => esc_html__( 'End Date', 'sailing' ),
	'id'      => 'end_date',
	'type'    => 'date',
	'desc'    => esc_html__( 'Choose a date', 'sailing' ),
	'default' => '',
) );



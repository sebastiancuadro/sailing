<?php
$link       = 'http://video.online-convert.com/convert-to-mp4';
$copy_right = 'http://www.thimpress.com';

$comingsoon = $titan->createMetaBox( array(
	'name'      => esc_html__( 'Coming Soon Mode Options', 'sailing' ),
	'id'        => 'coming-soon-mode-options',
	'post_type' => array( 'page' ),
) );

$comingsoon->createOption( array(
	'name' => esc_html__( 'Logo Page', 'sailing' ),
	'id'   => 'coming_soon_logo',
	'type' => 'upload',
	'desc' => esc_html__( 'Upload your logo', 'sailing' )
) );

$comingsoon->createOption( array(
	'name'    => esc_html__( 'Cover Color', 'sailing' ),
	'id'      => 'cover_color',
	'type'    => 'select',
	'options' => array(
		'black'  => esc_html__( 'Black', 'sailing' ),
		'blue'   => esc_html__( 'Blue', 'sailing' ),
		'green'  => esc_html__( 'Green', 'sailing' ),
		'orange' => esc_html__( 'Orange', 'sailing' ),
		'red'    => esc_html__( 'Red', 'sailing' ),
	),
	'default' => 'black',
) );

$comingsoon->createOption( array(
	'name' => esc_html__( 'Background video', 'sailing' ),
	'type' => 'heading',
) );

$comingsoon->createOption( array(
	'name' => 'link video ogg/webm',
	'id'   => 'link_ogg',
	'type' => 'text',
) );

$comingsoon->createOption( array(
	'name' => 'link video mp4',
	'id'   => 'link_mp4',
	'type' => 'text',
	'desc' => esc_html__( "Select an uploaded video in mp4 format. Other formats, such as webm and ogv will work in some browsers. You can use an online service such as <a href='http://video.online-convert.com/convert-to-mp4' target='_blank'>online-convert.com</a> to convert your videos to mp4.", "sailing" ),
) );


$comingsoon->createOption( array(
	'name' => esc_html__( 'Text Color', 'sailing' ),
	'id'   => 'text_color',
	'type' => 'color',
) );


$comingsoon->createOption( array(
	'name'    => esc_html__( 'Date Option', 'sailing' ),
	'id'      => 'coming_soon_date',
	'type'    => 'date',
	'desc'    => esc_html__( 'Choose a date', 'sailing' ),
	'default' => '',
) );


$comingsoon->createOption( array(
	'name'    => esc_html__( 'Title From', 'sailing' ),
	'id'      => 'title_form',
	'type'    => 'text',
	'default' => esc_html__( 'Register now and be among the first to know more.', 'sailing' )
) );

$comingsoon->createOption( array(
	'name' => esc_html__( 'ShortCode Form', 'sailing' ),
	'id'   => 'form_mail_letter',
	'type' => 'text',
) );

$comingsoon->createOption( array(
	'name'    => esc_html__( 'Copyright Text', 'sailing' ),
	'id'      => 'text_copyright',
	'type'    => 'text',
	'default' => 'Powered By <a href="' . $copy_right . '">ThimPress</a>adot &copy; 2015',
) );
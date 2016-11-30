<?php

defined( 'DS' ) OR define( 'DS', DIRECTORY_SEPARATOR );

$demo_datas_dir = TP_THEME_DIR . 'inc' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'data';
$demo_image = get_template_directory_uri().'/inc/admin/data/';

$demo_datas = array(

	'home-1' => array( 
		'data_dir' 		=> $demo_datas_dir . DS . 'home-1', 
		'thumbnail_url' => $demo_image.'/home-1/thumbnail.jpg', 
		'title' 		=> 'Home 1',
		'demo_url'      => 'http://sailing.thimpress.com/demo-2/', 
	),

	'home-2' => array( 
		'data_dir' 		=> $demo_datas_dir . DS . 'home-2', 
		'thumbnail_url' => $demo_image.'/home-2/thumbnail.jpg', 
		'title' 		=> 'Home 2',
		'demo_url'      => 'http://sailing.thimpress.com/', 
	),

	'home-3' => array( 
		'data_dir' 		=> $demo_datas_dir . DS . 'home-3', 
		'thumbnail_url' => $demo_image.'/home-3/thumbnail.jpg', 
		'title' 		=> 'Home 3',
		'demo_url'      => 'http://sailing.thimpress.com/demo-3/', 
	),

	'home-4' => array( 
		'data_dir' 		=> $demo_datas_dir . DS . 'home-4', 
		'thumbnail_url' => $demo_image.'/home-4/thumbnail.jpg', 
		'title' 		=> 'Home 4',
		'demo_url'      => 'http://sailing.thimpress.com/demo-4/', 
	),

	'home-5' => array( 
		'data_dir' 		=> $demo_datas_dir . DS . 'home-5', 
		'thumbnail_url' => $demo_image.'/home-5/thumbnail.jpg', 
		'title' 		=> 'Home 5',
		'demo_url'      => 'http://sailing.thimpress.com/demo-7/', 
	),

	'home-6' => array( 
		'data_dir' 		=> $demo_datas_dir . DS . 'home-6-bg-video', 
		'thumbnail_url' => $demo_image.'/home-6-bg-video/thumbnail.jpg', 
		'title' 		=> 'Home 6 - Background Video',
		'demo_url'      => 'http://sailing.thimpress.com/demo-5/', 
	),

	'home-7' => array( 
		'data_dir' 		=> $demo_datas_dir . DS . 'home-7-rtl', 
		'thumbnail_url' => $demo_image.'/home-7-rtl/thumbnail.jpg', 
		'title' 		=> 'Home 7 - RTL',
		'demo_url'      => 'http://sailing.thimpress.com/demo-6/', 
	),

);
<?php
$url = TP_THEME_URI . 'images/admin/layout/';

$hotelbooking = $titan->createThimCustomizerSection( array(
	'name'     => esc_html__('Hotel Booking', 'sailing') ,
	'position' => 6,
	'id'       => 'hotelbooking',
) );
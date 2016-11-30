<?php
$url = TP_THEME_URI . 'images/admin/layout/';

$display = $titan->createThimCustomizerSection( array(
	'name'     => esc_html__('Display', 'sailing'),
	'position' => 5,
	'id'       => 'display',
) );
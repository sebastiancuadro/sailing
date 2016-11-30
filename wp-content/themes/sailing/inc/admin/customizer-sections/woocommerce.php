<?php
$url = TP_THEME_URI . 'images/admin/layout/';
$woocommerce = $titan->createThimCustomizerSection( array(
	'name'     => esc_html__('WooCommerce', 'sailing') ,
	'position' => 5,
 	'id'       => 'woocommerce',
) );
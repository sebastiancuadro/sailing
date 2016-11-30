<?php
$woocommerce->addSubSection(array(
    'name' => esc_html__('Sharing', 'sailing'),
    'id' => 'woo_share',
    'position' => 3,
));


$woocommerce->createOption(array(
    'name' => esc_html__('Facebook', 'sailing'),
    'id' => 'woo_sharing_facebook',
    'type' => 'checkbox',
    'desc' => esc_html__('Show the facebook sharing option in product.', 'sailing'),
    'default' => true,
));

$woocommerce->createOption(array(
    'name' => esc_html__('Twitter', 'sailing'),
    'id' => 'woo_sharing_twitter',
    'type' => 'checkbox',
    'desc' => esc_html__('Show the twitter sharing option in product.', 'sailing'),
    'default' => true,
));


$woocommerce->createOption(array(
    'name' => esc_html__('Google Plus', 'sailing'),
    'id' => 'woo_sharing_google',
    'type' => 'checkbox',
    'desc' => esc_html__('Show the g+ sharing option in product.', 'sailing'),
    'default' => true,
));

$woocommerce->createOption(array(
    'name' => esc_html__('Pinterest', 'sailing'),
    'id' => 'woo_sharing_pinterest',
    'type' => 'checkbox',
    'desc' => esc_html__('Show the pinterest sharing option in product.', 'sailing'),
    'default' => true,
));


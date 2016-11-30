<?php
$hotelbooking->addSubSection(array(
    'name' => esc_html__('Sharing', 'sailing'),
    'id' => 'hb_share',
    'position' => 3,
));


$hotelbooking->createOption(array(
    'name' => esc_html__('Facebook', 'sailing'),
    'id' => 'hb_share_facebook',
    'type' => 'checkbox',
    'desc' => esc_html__('Show the facebook sharing option in product.', 'sailing'),
    'default' => true,
));

$hotelbooking->createOption(array(
    'name' => esc_html__('Twitter', 'sailing'),
    'id' => 'hb_share_twitter',
    'type' => 'checkbox',
    'desc' => esc_html__('Show the twitter sharing option in product.', 'sailing'),
    'default' => true,
));


$hotelbooking->createOption(array(
    'name' => esc_html__('Google Plus', 'sailing'),
    'id' => 'hb_share_google',
    'type' => 'checkbox',
    'desc' => esc_html__('Show the g+ sharing option in product.', 'sailing'),
    'default' => true,
));

$hotelbooking->createOption(array(
    'name' => esc_html__('Pinterest', 'sailing'),
    'id' => 'hb_share_pinterest',
    'type' => 'checkbox',
    'desc' => esc_html__('Show the pinterest sharing option in product.', 'sailing'),
    'default' => true,
));


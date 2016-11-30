<?php
$display->addSubSection(array(
    'name' => esc_html__('Sharing', 'sailing'),
    'id' => 'share_archive',
    'position' => 3,
));


$display->createOption(array(
    'name' => esc_html__('Facebook', 'sailing'),
    'id' => 'archive_sharing_facebook',
    'type' => 'checkbox',
    'desc' => esc_html__('Show the facebook sharing option in product.', 'sailing'),
    'default' => true,
));

$display->createOption(array(
    'name' => esc_html__('Twitter', 'sailing'),
    'id' => 'archive_sharing_twitter',
    'type' => 'checkbox',
    'desc' => esc_html__('Show the twitter sharing option in product.', 'sailing'),
    'default' => true,
));


$display->createOption(array(
    'name' => esc_html__('Google Plus', 'sailing'),
    'id' => 'archive_sharing_google',
    'type' => 'checkbox',
    'desc' => esc_html__('Show the g+ sharing option in product.', 'sailing'),
    'default' => true,
));

$display->createOption(array(
    'name' => esc_html__('Pinterest', 'sailing'),
    'id' => 'archive_sharing_pinterest',
    'type' => 'checkbox',
    'desc' => esc_html__('Show the pinterest sharing option in product.', 'sailing'),
    'default' => true,
));


<?php
$woocommerce->addSubSection(array(
    'name' => esc_html__('Product Page', 'sailing'),
    'id' => 'woo_single',
    'position' => 2,
));


$woocommerce->createOption(array(
    'name' => esc_html__('Select Layout Default', 'sailing'),
    'id' => 'woo_single_layout',
    'type' => 'radio-image',
    'options' => array(
        'full-content' => $url . 'body-full.png',
        'sidebar-left' => $url . 'sidebar-left.png',
        'sidebar-right' => $url . 'sidebar-right.png'
    ),
    'default' => 'full-content'
));


$woocommerce->createOption(array(
    'name' => esc_html__('Hide Title', 'sailing'),
    'id' => 'woo_single_hide_title',
    'type' => 'checkbox',
    'desc' => esc_html__('Hide/show', 'sailing'),
    'default' => false,
));

$woocommerce->createOption(array(
    'name' => esc_html__('Top Image', 'sailing'),
    'id' => 'woo_single_top_image',
    'type' => 'upload',
    'desc' => esc_html__('Enter URL or Upload an top image file for header', 'sailing'),
    'default' => get_template_directory_uri('template_directory') . '/images/bg-blog.jpg',
    'livepreview' => ''
));

$woocommerce->createOption(array(
    'name' => esc_html__('Background Heading Color', 'sailing'),
    'id' => 'woo_single_heading_bg_color',
    'type' => 'color-opacity',
    'livepreview' => ''
));

$woocommerce->createOption(array(
    'name' => esc_html__('Text Color Heading', 'sailing'),
    'id' => 'woo_single_heading_text_color',
    'type' => 'color-opacity',
    'default' => '#fff',
));

$woocommerce->createOption(array(
    'name' => esc_html__('Sub Title', 'sailing'),
    'id' => 'woo_single_sub_title',
    'type' => 'text',
    'default' => '',
));
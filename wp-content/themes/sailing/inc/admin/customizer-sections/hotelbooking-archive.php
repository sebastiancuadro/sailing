<?php
/*
 * Archive Hotel Boking Setting
 */
$hotelbooking->addSubSection(array(
    'name' => esc_html__('Archive', 'sailing'),
    'id' => 'hb_archive',
    'position' => 1,
));


$hotelbooking->createOption(array(
    'name' => esc_html__('Archive Layout', 'sailing'),
    'id' => 'hb_cate_layout',
    'type' => 'radio-image',
    'options' => array(
        'full-content' => $url . 'body-full.png',
        'sidebar-left' => $url . 'sidebar-left.png',
        'sidebar-right' => $url . 'sidebar-right.png'
    ),
    'default' => 'full-content'
));

$hotelbooking->createOption(array(
    'name' => esc_html__('Hide Title', 'sailing'),
    'id' => 'hb_cate_hide_title',
    'type' => 'checkbox',
    'desc' => esc_html__('Hide/show', 'sailing'),
    'default' => false,
));

$hotelbooking->createOption(array(
    'name' => esc_html__('Hotel Booking Title', 'sailing'),
    'id' => 'hb_cate_custom_title',
    'type' => 'text',
    'default' => 'Sailing Hotel',
));

$hotelbooking->createOption(array(
    'name' => esc_html__('Top Image', 'sailing'),
    'id' => 'hb_cate_top_image',
    'type' => 'upload',
    'desc' => esc_html__('Enter URL or Upload an top image file for header', 'sailing'),
    'default' => get_template_directory_uri('template_directory') . '/images/bg-blog.jpg',
    'livepreview' => ''
));

$hotelbooking->createOption(array(
    'name' => esc_html__('Background Heading Color', 'sailing'),
    'id' => 'hb_cate_heading_bg_color',
    'type' => 'color-opacity',
    'livepreview' => ''
));

$hotelbooking->createOption(array(
    'name' => esc_html__('Text Color Heading', 'sailing'),
    'id' => 'hb_cate_heading_text_color',
    'type' => 'color-opacity',
    'default' => '#fff',
));

$hotelbooking->createOption(array(
    'name' => esc_html__('Sub Title', 'sailing'),
    'id' => 'hb_cate_sub_title',
    'type' => 'text',
    'default' => '',
));

<?php
/*
 * Single Hotel Booking Display Settings
 */
$hotelbooking->addSubSection(array(
    'name' => esc_html__('Single', 'sailing'),
    'id' => 'hb_single',
    'position' => 2,
));


$hotelbooking->createOption(array(
    'name' => esc_html__('Single Layout', 'sailing'),
    'id' => 'hb_single_layout',
    'type' => 'radio-image',
    'options' => array(
        'full-content' => $url . 'body-full.png',
        'sidebar-left' => $url . 'sidebar-left.png',
        'sidebar-right' => $url . 'sidebar-right.png'
    ),
    'default' => 'sidebar-right'
));

$hotelbooking->createOption(array(
    'name' => esc_html__('Hide Title', 'sailing'),
    'id' => 'hb_single_hide_title',
    'type' => 'checkbox',
    'desc' => esc_html__('Hide/show', 'sailing'),
    'default' => false,
));

$hotelbooking->createOption(array(
    'name' => esc_html__('Single Room Title', 'sailing'),
    'id' => 'hb_single_custom_title',
    'type' => 'text',
    'default' => 'Sailing Hotel',
));

$hotelbooking->createOption(array(
    'name' => esc_html__('Top Image', 'sailing'),
    'id' => 'hb_single_top_image',
    'type' => 'upload',
    'desc' => esc_html__('Enter URL or Upload an top image file for header', 'sailing'),
    'default' => get_template_directory_uri('template_directory') . '/images/bg-blog.jpg',
    'livepreview' => ''
));

$hotelbooking->createOption(array(
    'name' => esc_html__('Background Heading Color', 'sailing'),
    'id' => 'hb_single_heading_bg_color',
    'type' => 'color-opacity',
    'livepreview' => ''
));

$hotelbooking->createOption(array(
    'name' => esc_html__('Text Color Heading', 'sailing'),
    'id' => 'hb_single_heading_text_color',
    'type' => 'color-opacity',
    'default' => '#fff',
));

$hotelbooking->createOption(array(
    'name' => esc_html__('Sub Title', 'sailing'),
    'id' => 'hb_single_sub_title',
    'type' => 'text',
    'default' => '',
));


$hotelbooking->createOption(array(
    'name' => esc_html__('Hide Description', 'sailing'),
    'id' => 'hb_single_hide_desc',
    'type' => 'checkbox',
    'desc' => esc_html__('Hide/show', 'sailing'),
    'default' => false,
));

$hotelbooking->createOption(array(
    'name' => esc_html__('Hide Additional Information', 'sailing'),
    'id' => 'hb_single_hide_info',
    'type' => 'checkbox',
    'desc' => esc_html__('Hide/show', 'sailing'),
    'default' => false,
));

$hotelbooking->createOption(array(
    'name' => esc_html__('Hide Reviews', 'sailing'),
    'id' => 'hb_single_hide_reviews',
    'type' => 'checkbox',
    'desc' => esc_html__('Hide/show', 'sailing'),
    'default' => false,
));
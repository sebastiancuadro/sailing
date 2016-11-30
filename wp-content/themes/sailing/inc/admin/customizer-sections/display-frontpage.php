<?php
/*
 * Front page displays settings: Posts page
 */
$display->addSubSection(array(
    'name' => esc_html__('Frontpage', 'sailing'),
    'id' => 'display_frontpage',
    'position' => 1,
));

$display->createOption(array(
    'name' => esc_html__('Front Page Layout', 'sailing'),
    'id' => 'front_page_cate_layout',
    'type' => 'radio-image',
    'options' => array(
        'full-content' => $url . 'body-full.png',
        'sidebar-left' => $url . 'sidebar-left.png',
        'sidebar-right' => $url . 'sidebar-right.png'
    ),
    'default' => 'sidebar-right'
));

$display->createOption(array(
    'name' => esc_html__('Hide Title', 'sailing'),
    'id' => 'front_page_hide_title',
    'type' => 'checkbox',
    'desc' => esc_html__('Hide/show', 'sailing'),
    'default' => false,
));

$display->createOption(array(
    'name' => esc_html__('Top Image', 'sailing'),
    'id' => 'front_page_top_image',
    'type' => 'upload',
    'desc' => esc_html__('Enter URL or Upload an top image file for header', 'sailing'),
    'default' => get_template_directory_uri('template_directory') . '/images/bg-blog.jpg',
    'livepreview' => ''
));

$display->createOption(array(
    'name' => esc_html__('Background Heading Color', 'sailing'),
    'id' => 'front_page_heading_bg_color',
    'type' => 'color-opacity',
    'livepreview' => ''
));

$display->createOption(array(
    'name' => esc_html__('Text Color Heading', 'sailing'),
    'id' => 'front_page_heading_text_color',
    'type' => 'color-opacity',
    'default' => '#fff',
));

$display->createOption(array(
    'name' => esc_html__('Custom Title', 'sailing'),
    'id' => 'front_page_custom_title',
    'type' => 'text',
    'default' => '',
));
$display->createOption(array(
    'name' => esc_html__('Sub Title', 'sailing'),
    'id' => 'front_page_sub_title',
    'type' => 'text',
    'default' => '',
));

<?php
/*
 * Post and Page Display Settings
 */
$display->addSubSection(array(
    'name' => 'Post & Page',
    'id' => 'display_postpage',
    'position' => 3,
));

$display->createOption(array(
    'name' => 'Single & Page Layout',
    'id' => 'archive_single_layout',
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
    'id' => 'archive_single_hide_title',
    'type' => 'checkbox',
    'desc' => esc_html__('Hide/show', 'sailing'),
    'default' => false,
));

$display->createOption(array(
    'name' => esc_html__('Top Image', 'sailing'),
    'id' => 'archive_single_top_image',
    'type' => 'upload',
    'desc' => esc_html__('Enter URL or Upload an top image file for header', 'sailing'),
    'default' => get_template_directory_uri('template_directory') . '/images/bg-blog.jpg',
    'livepreview' => ''
));

$display->createOption(array(
    'name' => esc_html__('Background Heading Color', 'sailing'),
    'id' => 'archive_single_heading_bg_color',
    'type' => 'color-opacity',
    'livepreview' => ''
));

$display->createOption(array(
    'name' => esc_html__('Text Color Heading', 'sailing'),
    'id' => 'archive_single_heading_text_color',
    'type' => 'color-opacity',
    'default' => '#fff',
));
$display->createOption(array(
    'name' => esc_html__('Sub Title', 'sailing'),
    'id' => 'archive_single_sub_title',
    'type' => 'text',
    'default' => '',
));

$display->createOption(array(
    'name' => esc_html__('Show category', 'sailing'),
    'id' => 'single_show_category',
    'type' => 'checkbox',
    'desc' => esc_html__('Show/hide', 'sailing'),
    'default' => false,
));

$display->createOption(array(
    'name' => esc_html__('Show Date', 'sailing'),
    'id' => 'single_show_date',
    'type' => 'checkbox',
    'desc' => esc_html__('Show/hide', 'sailing'),
    'default' => true,
));

$display->createOption(array(
    'name' => esc_html__('Show Author', 'sailing'),
    'id' => 'single_show_author',
    'type' => 'checkbox',
    'desc' => esc_html__('Show/hide', 'sailing'),
    'default' => true,
));
$display->createOption(array(
    'name' => esc_html__('Show Comment', 'sailing'),
    'id' => 'single_show_comment',
    'type' => 'checkbox',
    'desc' => esc_html__('Show/hide', 'sailing'),
    'default' => true,
));
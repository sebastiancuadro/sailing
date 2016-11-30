<?php
/*
 * Post and Page Display Settings
 */
$display->addSubSection(array(
    'name' => esc_html__('Archive', 'sailing'),
    'id' => 'display_archive',
    'position' => 2,
));


$display->createOption(array(
    'name' => esc_html__('Archive Layout', 'sailing'),
    'id' => 'archive_cate_layout',
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
    'id' => 'archive_cate_hide_title',
    'type' => 'checkbox',
    'desc' => esc_html__('Hide/show', 'sailing'),
    'default' => false,
));

$display->createOption(array(
    'name' => esc_html__('Top Image', 'sailing'),
    'id' => 'archive_cate_top_image',
    'type' => 'upload',
    'desc' => esc_html__('Enter URL or Upload an top image file for header', 'sailing'),
    'default' => get_template_directory_uri('template_directory') . '/images/bg-blog.jpg',
    'livepreview' => ''
));

$display->createOption(array(
    'name' => esc_html__('Background Heading Color', 'sailing'),
    'id' => 'archive_cate_heading_bg_color',
    'type' => 'color-opacity',
    'livepreview' => ''
));

$display->createOption(array(
    'name' => esc_html__('Text Color Heading', 'sailing'),
    'id' => 'archive_cate_heading_text_color',
    'type' => 'color-opacity',
    'default' => '#fff',
));

$display->createOption(array(
    'name' => esc_html__('Sub Title', 'sailing'),
    'id' => 'archive_cate_sub_title',
    'type' => 'text',
    'default' => '',
));

$display->createOption(array(
    'name' => esc_html__('Excerpt Length', 'sailing'),
    'id' => 'archive_excerpt_length',
    'type' => 'number',
    'desc' => esc_html__('Enter the number of words you want to cut from the content to be the excerpt of search and archive and portfolio page.', 'sailing'),
    'default' => '20',
    'max' => '100',
    'min' => '10',
));

$display->createOption(array(
    'name' => esc_html__('Show Read more', 'sailing'),
    'id' => 'show_read_more',
    'type' => 'checkbox',
    'desc' => esc_html__('Show/hide', 'sailing'),
    'default' => false,
));

$display->createOption(array(
    'name' => esc_html__('Show category', 'sailing'),
    'id' => 'show_category',
    'type' => 'checkbox',
    'desc' => esc_html__('Show/hide', 'sailing'),
    'default' => true,
));

$display->createOption(array(
    'name' => esc_html__('Show Author', 'sailing'),
    'id' => 'show_author',
    'type' => 'checkbox',
    'desc' => esc_html__('Show/hide', 'sailing'),
    'default' => true,
));

$display->createOption(array(
    'name' => esc_html__('Show Comment', 'sailing'),
    'id' => 'show_comment',
    'type' => 'checkbox',
    'desc' => esc_html__('Show/hide', 'sailing'),
    'default' => true,
));

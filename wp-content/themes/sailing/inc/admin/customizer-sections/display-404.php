<?php
/*
 * Post and Page Display Settings
 */
$display->addSubSection(array(
    'name' => esc_html__('Page 404', 'sailing'),
    'id' => 'display_page_404',
    'position' => 6,
    'desc' => esc_html__('It just works with header option: Overlay', 'sailing')
));

$display->createOption(array(
    'name' => esc_html__('Top Image', 'sailing'),
    'id' => '404_top_image',
    'type' => 'upload',
    'desc' => esc_html__('Enter URL or Upload an top image file for header', 'sailing'),
    'livepreview' => ''
));

$display->createOption(array(
    'name' => esc_html__('Background Top Heading Color', 'sailing'),
    'id' => '404_heading_bg_color',
    'type' => 'color-opacity',
    'default' => '#181818',
    'livepreview' => ''
));

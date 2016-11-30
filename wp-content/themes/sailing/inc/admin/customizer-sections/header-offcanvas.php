<?php

// Right Drawer Options
$header->addSubSection(array(
    'name' => esc_html__('Offcanvas Sidebar', 'sailing'),
    'id' => 'display_right_drawer',
    'position' => 16,
));

$header->createOption(array(
    'name' => esc_html__('Show or Hide', 'sailing'),
    'id' => 'show_offcanvas_sidebar',
    'type' => 'checkbox',
    'desc' => esc_html__('Show/hide', 'sailing'),
    'default' => false,
));

$header->createOption(array(
    'name' => esc_html__('Background color', 'sailing'),
    'id' => 'bg_offcanvas_sidebar_color',
    'type' => 'color-opacity',
    'default' => '#141414',
    'livepreview' => '$(".slider_sidebar").css("background-color", value);'
));

$header->createOption(array(
    'name' => esc_html__('Text Color', 'sailing'),
    'id' => 'offcanvas_sidebar_text_color',
    'type' => 'color-opacity',
    'default' => '#a9a9a9',
    'livepreview' => '$(".slider_sidebar,.slider_sidebar .widget-title,caption").css("color", value)'
));

$header->createOption(array(
    'name' => esc_html__('Link Color', 'sailing'),
    'id' => 'offcanvas_sidebar_link_color',
    'type' => 'color-opacity',
    'default' => '#ffffff',
    'livepreview' => '$(".slider_sidebar a").css("color", value)'
));

$header->createOption(array(
    'name' => esc_html__('Icon', 'sailing'),
    'id' => 'icon_offcanvas_sidebar',
    'type' => 'text',
    'default' => 'fa-bars',
    'desc' => "Enter <a href=\"http://fontawesome.io/icons/\" target=\"_blank\" >FontAwesome</a> icon name. For example: fa-bars, fa-user",
));


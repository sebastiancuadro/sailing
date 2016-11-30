<?php

// main menu

$header->addSubSection(array(
    'name' => esc_html__('Mobile Menu', 'sailing'),
    'id' => 'display_mobile_menu',
    'position' => 15,
));


$header->createOption(array(
    'name' => esc_html__('Background color', 'sailing'),
    'desc' => esc_html__('Pick a background color for main menu', 'sailing'),
    'id' => 'bg_mobile_menu_color',
    'default' => '#222222',
    'type' => 'color-opacity'
));


$header->createOption(array(
    'name' => esc_html__('Text color', 'sailing'),
    'desc' => esc_html__('Pick a text color for main menu', 'sailing'),
    'id' => 'mobile_menu_text_color',
    'default' => '#d8d8d8',
    'type' => 'color-opacity'
));


$header->createOption(array(
    'name' => esc_html__('Text Hover color', 'sailing'),
    'desc' => esc_html__('Pick a text hover color for main menu', 'sailing'),
    'id' => 'mobile_menu_text_hover_color',
    'default' => '#ffb606',
    'type' => 'color-opacity'
));
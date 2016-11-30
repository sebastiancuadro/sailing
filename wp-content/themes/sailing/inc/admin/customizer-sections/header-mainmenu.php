<?php
// main menu
$header->addSubSection(array(
    'name' => esc_html__('Main Menu', 'sailing'),
    'id' => 'display_main_menu',
    'position' => 5,
));

$header->createOption(array(
    'name' => esc_html__('Background color', 'sailing'),
    'desc' => esc_html__('Pick a background color for main menu', 'sailing'),
    'id' => 'bg_main_menu_color',
    'default' => '',
    'type' => 'color-opacity'
));

$header->createOption(array(
    'name' => esc_html__('Text color', 'sailing'),
    'desc' => esc_html__('Pick a text color for main menu', 'sailing'),
    'id' => 'main_menu_text_color',
    'default' => '#fff',
    'type' => 'color-opacity'
));

$header->createOption(array(
    'name' => esc_html__('Text Hover color', 'sailing'),
    'desc' => esc_html__('Pick a text hover color for main menu', 'sailing'),
    'id' => 'main_menu_text_hover_color',
    'default' => '#fff',
    'type' => 'color-opacity'
));

$header->createOption(array(
    'name' => esc_html__('Font Size', 'sailing'),
    'desc' => esc_html__('Default is 13', 'sailing'),
    'id' => 'font_size_main_menu',
    'default' => '13px',
    'type' => 'select',
    'options' => $font_sizes
));

$header->createOption(array(
    'name' => esc_html__('Font Weight', 'sailing'),
    'desc' => esc_html__('Default bold', 'sailing'),
    'id' => 'font_weight_main_menu',
    'default' => '700',
    'type' => 'select',
    'options' => array('bold' => 'Bold',
        'normal' => 'Normal',
        '100' => '100',
        '200' => '200',
        '300' => '300',
        '400' => '400',
        '500' => '500',
        '600' => '600',
        '700' => '700',
        '800' => '800',
        '900' => '900'
    ),
));
<?php
// main menu

$header->addSubSection(array(
    'name' => esc_html__('Sub Menu', 'sailing'),
    'id' => 'display_sub_menu',
    'position' => 6,
));

$header->createOption(array(
    'name' => esc_html__('Background color', 'sailing'),
    'desc' => esc_html__('Pick a background color for sub menu', 'sailing'),
    'id' => 'sub_menu_bg_color',
    'default' => '#fff',
    'type' => 'color-opacity',
    'livepreview' => "$('#main_menu li .sub-menu').css('background-color', value);
                                        $('#main_menu ul.navbar-nav>li.menu-item-has-children>ul.sub-menu').css('border-top-color', value)"
));

$header->createOption(array(
    'name' => esc_html__('Color Border Bottom', 'sailing'),
    'id' => 'sub_menu_border_color',
    'default' => '#ddd',
    'type' => 'color-opacity'
));

$header->createOption(array(
    'name' => esc_html__('Text color', 'sailing'),
    'desc' => esc_html__('Pick a text color for sub menu', 'sailing'),
    'id' => 'sub_menu_text_color',
    'default' => '#666666',
    'type' => 'color-opacity',
    'livepreview' => "$('#main_menu li .sub-menu li a').css('color', value);"
));
$header->createOption(array(
    'name' => esc_html__('Text color hover', 'sailing'),
    'desc' => esc_html__('Pick a text color hover for sub menu', 'sailing'),
    'id' => 'sub_menu_text_color_hover',
    'default' => '#ffb606',
    'type' => 'color-opacity'
));
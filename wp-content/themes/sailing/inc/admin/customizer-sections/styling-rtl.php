<?php
$styling->addSubSection(array(
    'name' => esc_html__('RTL Support & Preload', 'sailing'),
    'id' => 'styling_rtl',
    'position' => 14,
));

$styling->createOption(array(
    'name' => esc_html__('RTL Support', 'sailing'),
    'id' => 'rtl_support',
    'type' => 'checkbox',
    'desc' => esc_html__('Enable/Disable', 'sailing'),
    'default' => false,
));

$styling->createOption(array(
    'name' => esc_html__('Import Demo Data', 'sailing'),
    'id' => 'enable_import_demo',
    'type' => 'checkbox',
    'desc' => esc_html__('Enable/Disable', 'sailing'),
    'default' => true,
));


$styling->createOption(array(
    'name' => esc_html__('Preload', 'sailing'),
    'id' => 'preload',
    'type' => 'select',
    'default' => true,
    'options' => array(
        true => esc_html__('CSS 3', 'sailing'),
        'image' => esc_html__('Image', 'sailing'),
        false => esc_html__('No', 'sailing'),
    )
));


$styling->createOption(array(
    'name' => esc_html__('Preload Image', 'sailing'),
    'id' => 'preload_image',
    'type' => 'upload',
    'default' => get_template_directory_uri('template_directory') . '/images/preload.gif',
));


$styling->createOption(array(
    'name' => esc_html__('Preload Background', 'sailing'),
    'id' => 'preload_bg_color',
    'type' => 'color-opacity',
    'default' => '#ffb606',
));


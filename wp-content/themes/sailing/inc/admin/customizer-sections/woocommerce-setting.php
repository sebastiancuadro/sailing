<?php
$woocommerce->addSubSection(array(
    'name' => esc_html__('Setting', 'sailing'),
    'id' => 'woo_setting',
    'position' => 3,
));

$woocommerce->createOption(array(
    'name' => esc_html__('Column', 'sailing'),
    'id' => 'woo_product_column',
    'type' => 'select',
    'options' => array(
        '3' => '3',
        '4' => '4',
    ),
    'default' => '4'
));
$woocommerce->createOption(array(
    'name' => esc_html__('Number of Products per Page', 'sailing'),
    'id' => 'woo_product_per_page',
    'type' => 'number',
    'desc' => esc_html__('Insert the number of posts to display per page.', 'sailing'),
    'default' => '8',
    'max' => '100',
));
$woocommerce->createOption(array(
    'name' => esc_html__('Show QuickView in products list', 'sailing'),
    'id' => 'woo_set_show_qv',
    'type' => 'checkbox',
    'default' => true,
));

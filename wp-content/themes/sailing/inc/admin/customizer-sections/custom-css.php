<?php
$custom_css = $titan->createThimCustomizerSection(array(
    'name' => esc_html__('Custom CSS', 'sailing'),
    'position' => 100,
));

/*
 * Archive Display Settings
 */
$custom_css->createOption(array(
    'name' => esc_html__('Custom CSS', 'sailing'),
    'id' => 'custom_css',
    'type' => 'textarea',
    'desc' => esc_html__('Put your additional CSS rules here', 'sailing'),
    'is_code' => true,
));

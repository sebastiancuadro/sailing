<?php
$footer->addSubSection(array(
    'name' => esc_html__('Copyright Options', 'sailing'),
    'id' => 'display_copyright',
    'position' => 12,
));

$footer->createOption(array(
    'name' => esc_html__('Back To Top', 'sailing'),
    'id' => 'show_to_top',
    'type' => 'checkbox',
    'des' => esc_html__('Show or hide back to top', 'sailing'),
    'default' => true,
));

$footer->createOption(array(
    'name' => esc_html__('Text Color', 'sailing'),
    'id' => 'copyright_text_color',
    'type' => 'color-opacity',
    'default' => '#5a5a5a',
    'livepreview' => '$("#powered").css("color", value);'
));

$copy_right = 'http://www.thimpress.com';
$footer->createOption(array(
    'name' => esc_html__('Copyright Text', 'sailing'),
    'id' => 'copyright_text',
    'type' => 'textarea',
    'default' => 'Designed by <a href="' . esc_url($copy_right) . '">ThimPress.</a> Powered by WordPress.',
    'livepreview' => '$("#powered").html(function(){return "<p>"+ value + "</p>";})'
));
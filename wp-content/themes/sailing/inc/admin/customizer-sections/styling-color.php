<?php
$styling->addSubSection(array(
    'name' => esc_html__('Background Color & Text Color', 'sailing'),
    'id' => 'styling_color',
    'position' => 13,
));


$styling->createOption(array(
    'name' => esc_html__('Body Background Color', 'sailing'),
    'id' => 'body_bg_color',
    'type' => 'color-opacity',
    'default' => '#ffffff',
    'livepreview' => '$("body").css("background-color", value);'
));

$styling->createOption(array(
    'name' => esc_html__('Theme Primary Color', 'sailing'),
    'id' => 'body_primary_color',
    'type' => 'color-opacity',
    'default' => '#ffb606',
    'livepreview' => '
		$("a").css("background-color", value);
 	'
));


<?php
$header->addSubSection(array(
    'name' => esc_html__('Toolbar', 'sailing'),
    'id' => 'display_top_header',
    'position' => 3,
));


$header->createOption(array(
    'name' => esc_html__('Show or Hide Toolbar', 'sailing'),
    'id' => 'topbar_show',
    'type' => 'checkbox',
    'desc' => esc_html__('Show/hide', 'sailing'),
    'default' => true,
    'livepreview' => '
		if(value == false){
			$("#masthead .top-header").css("display", "none");
		}else{
			$("#masthead .top-header").css("display", "block");
		}
	'

));

$header->createOption(array(
    'name' => esc_html__('Font Size', 'sailing'),
    'id' => 'font_size_top_header',
    'type' => 'select',
    'options' => $font_sizes,
    'default' => '13px',
    'livepreview' => '$("#masthead .top-header .top-left, #masthead .top-header .top-right").css("fontSize", value);'
));

<?php

$title = $background_color = $background_image = '';
$show_label = false;
if($instance['title'] <> ''){
	$title = $instance['title'];
}
if($instance['background_color'] <> ''){
	$background_color = $instance['background_color'];
}
if($instance['background_image'] <> ''){
	$background_image = wp_get_attachment_image_src($instance['background_image'],'');
	$background_image = $background_image[0];
}
if($instance['show_label'] <> ''){
	$show_label = $instance['show_label'];
}

if(class_exists('TP_Hotel_Booking')) {
	if( !function_exists('hb_get_page_permalink') ){
		require(plugins_url().'/tp-hotel-booking/includes/hb-functions.php');
	}
}else{
	return;
}

$search = hb_get_page_permalink( 'search' );
$style = 'position: relative;';
$style_overlay = 'position: absolute; top: 0; right: 0; bottom: 0; left: 0;';
if($background_color <> ''){
	$style_overlay .= ' background-color:'.$background_color.'; opacity: 0.8; filter: alpha(opacity=80);';
}
if($background_image <> ''){
	$style .= ' background-image: url('.$background_image.');';
	$style .= ' background-repeat: no-repeat; background-position: center center; background-size: cover; ';
}
echo '<div class="widget-content" style="'.$style.'">';
	echo '<div class="background" style="'.$style_overlay.'"></div>';
	echo '<div class="content" style="position: relative;">';
	if($title <> ''){
		echo '<div class="wrapper-line-heading">';
		echo '<h3 class="heading__primary">'.esc_attr($title).'</h3>';
		echo '<span class="line-heading"><span></span></span>';
		echo '</div>';
	}
		echo do_shortcode('[hotel_booking search_page="' . esc_url($search) . '" show_title="" show_label="'.esc_attr($show_label).'"]'); 
	echo '</div>';
echo '</div>';

?>
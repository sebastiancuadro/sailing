<?php
$thim_animation = $html = $layout = '';
$number = 4;
if ( $instance['number'] <> '' ) {
	$number = $instance['number'];
}

$testomonial_args = array(
	'post_type'      => 'testimonials',
	'posts_per_page' => $number
);

$lop_testimonial = new WP_Query( $testomonial_args );
$css             = $content_css = $title_css = $regency_css = '';


if ( $instance['heading_group']['title'] ) {
	echo '<div class="widget-box-title">';
	echo ent2ncr( $args['before_title'] .$instance['heading_group']['title'] . $args['after_title'] );
	echo '</div>';
}
if ( $lop_testimonial->have_posts() ) {
	$html .= '<div class="sc-testimonials">';
	while ( $lop_testimonial->have_posts() ): $lop_testimonial->the_post();
		$html .= '<div class="item_testimonial">';
		$web_link        = get_post_meta( get_the_ID(), 'website_url', true );
		$before_web_link = $after_web_link = '';
		if ( $web_link <> '' ) {
			$before_web_link = '<a href="' . $web_link . '">';
			$after_web_link  = "</a>";
		}
		$regency = get_post_meta( get_the_ID(), 'regency', true );
		$html .= '<div class="testimonial_content">';
		$html .= get_the_content();
		$html .= '</div>';
		$html .= '<div class="testimonial-footer">';
		if ( has_post_thumbnail() ) {
			$html .= '<div class="avatar-testimonial">';
			$html .= thim_feature_image(get_post_thumbnail_id(), 80, 80 );
			$html .= '</div>';
		}
		$html .= '<div class="title-regency">';
		$html .= '<h6> ' . $before_web_link . the_title( ' ', ' ', false ) . $after_web_link . ' </h6>';
		if ( $regency <> '' ) {
			$html .= '<div class="regency">' . $regency . '</div>';
		}
		$html .= '</div>';
		$html .= '</div>';
		$html .= '</div>';
	endwhile;
	$html .= '</div>';
}
wp_reset_postdata();
echo ent2ncr( $html );
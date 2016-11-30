<?php
function thim_hex2rgb( $hex ) {
	$hex = str_replace( "#", "", $hex );
	if ( strlen( $hex ) == 3 ) {
		$r = hexdec( substr( $hex, 0, 1 ) . substr( $hex, 0, 1 ) );
		$g = hexdec( substr( $hex, 1, 1 ) . substr( $hex, 1, 1 ) );
		$b = hexdec( substr( $hex, 2, 1 ) . substr( $hex, 2, 1 ) );
	} else {
		$r = hexdec( substr( $hex, 0, 2 ) );
		$g = hexdec( substr( $hex, 2, 2 ) );
		$b = hexdec( substr( $hex, 4, 2 ) );
	}
	$rgb = array( $r, $g, $b );

	return $rgb; // returns an array with the rgb values
}

function thim_getExtraClass( $el_class ) {
	$output = '';
	if ( $el_class != '' ) {
		$output = " " . str_replace( ".", "", $el_class );
	}

	return $output;
}

function thim_getCSSAnimation( $css_animation ) {
	$output = '';
	if ( $css_animation != '' ) {
		$output = ' wpb_animate_when_almost_visible wpb_' . $css_animation;
	}

	return $output;
}

function thim_excerpt( $limit ) {
	$content = get_the_excerpt();
	$content = apply_filters( 'the_content', $content );
	$content = str_replace( ']]>', ']]&gt;', $content );
	$content = explode( ' ', $content, $limit );
	array_pop( $content );
	$content = implode( " ", $content );

	return $content;
}

/************ List Comment ***************/
if ( ! function_exists( 'thim_comment' ) ) {
	function thim_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment;
		//extract( $args, EXTR_SKIP );
		if ( 'div' == $args['style'] ) {
			$tag       = 'div';
			$add_below = 'comment';
		} else {
			$tag       = 'li';
			$add_below = 'div-comment';
		}
		?>
		<<?php echo ent2ncr( $tag . ' ' ) ?><?php comment_class( 'description_comment' ) ?> id="comment-<?php comment_ID() ?>">
		<div class="wrapper-comment">
			<?php
			if ( $args['avatar_size'] != 0 ) {
				echo '<div class="avatar">';
				echo get_avatar( $comment, $args['avatar_size'] );
				echo '</div>';
			}
			?>
			<div class="comment-right">
				<?php if ( $comment->comment_approved == '0' ) : ?>
					<em class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'sailing' ) ?></em>
				<?php endif; ?>

				<div class="comment-extra-info">
					<div
							class="author"><span class="author-name"><?php echo get_comment_author_link(); ?></span></div>
					<div class="date" itemprop="commentTime">
						<?php printf( get_comment_date(), get_comment_time() ) ?></div>
					<?php edit_comment_link( esc_html__( 'Edit', 'sailing' ), '', '' ); ?>

					<?php comment_reply_link( array_merge( $args, array(
							'add_below' => $add_below,
							'depth'     => $depth,
							'max_depth' => $args['max_depth']
					) ) ) ?>
				</div>

				<div class="content-comment">
					<?php comment_text() ?>
				</div>
			</div>
		</div>
		<?php
	}
}
/************end list comment************/
/********************************************************************
 * Get image attach
 ********************************************************************/

function thim_feature_image( $attachment_id, $width = null, $height = null, $alt = null, $title = null ) {

	$src = wp_get_attachment_image_src( $attachment_id, 'full' );
	$style = '';
	if ( ! $src ) {
		// Get demo image
		global $wpdb;
		$attachment_id = $wpdb->get_col(
			$wpdb->prepare(
				"SELECT p.ID FROM $wpdb->posts AS p INNER JOIN $wpdb->postmeta AS pm ON p.ID = pm.post_id
				WHERE 	pm.meta_key = %s
				AND 	pm.meta_value LIKE %s",
				'_wp_attached_file',
				'%demo_image.jpg'
			)
		);

		if ( empty( $attachment_id[0] ) ) {
			return;
		}

		$attachment_id = $attachment_id[0];
		$src           = wp_get_attachment_image_src( $attachment_id, 'full' );

	}

	if ( $width && $height ) {

		if ( $src[1] >= $width || $src[2] >= $height ) {

			$crop = ( $src[1] >= $width && $src[2] >= $height ) ? true : false;

			$src[0] = aq_resize( $src[0], $width, $height, $crop );

		}

		$style = ' width="'.$width.'" height="'.$height.'"';
	}

	if ( ! $alt ) {
		$alt = get_the_title( $attachment_id );
	}

	if ( ! $title ) {
		$title = get_the_title( $attachment_id );
	}

	return '<img src="' . esc_url( $src[0] ) . '" alt="' . esc_attr( $alt ) . '" title="' . esc_attr( $title ) . '" '.$style.'>';

}

#remove field in Display settings
require TP_THEME_DIR . 'inc/wrapper-before-after.php';

add_filter( 'thim_mtb_setting_after_created', 'thim_mtb_setting_after_created', 10, 2 );
function thim_mtb_setting_after_created( $mtb_setting ) {
	$mtb_setting->removeOption( array( 6, 11 ) );

	$settings = array(
		'name' => esc_html__( 'No Padding Content', 'sailing' ),
		'id'   => 'mtb_no_padding',
		'type' => 'checkbox',
		'desc' => ' ',
	);

	$mtb_setting->insertOptionBefore( $settings, 15 );

	return $mtb_setting;
}

//thim_excerpt_length
function thim_excerpt_length() {
	global $thim_options_data;
	if ( isset( $thim_options_data['thim_archive_excerpt_length'] ) ) {
		$length = $thim_options_data['thim_archive_excerpt_length'];
	} else {
		$length = '50';
	}

	return $length;
}

add_filter( 'excerpt_length', 'thim_excerpt_length', 999 );
function thim_wp_new_excerpt( $text ) {
	if ( $text == '' ) {
		$text           = get_the_content( '' );
		$text           = strip_shortcodes( $text );
		$text           = apply_filters( 'the_content', $text );
		$text           = str_replace( ']]>', ']]>', $text );
		$text           = strip_tags( $text );
		$text           = nl2br( $text );
		$excerpt_length = apply_filters( 'excerpt_length', 55 );
		$words          = explode( ' ', $text, $excerpt_length + 1 );
		if ( count( $words ) > $excerpt_length ) {
			array_pop( $words );
			array_push( $words, '' );
			$text = implode( ' ', $words );
		}
	}

	return $text;
}

remove_filter( 'get_the_excerpt', 'wp_trim_excerpt' );
add_filter( 'get_the_excerpt', 'thim_wp_new_excerpt' );

function thim_post_share() {
	global $thim_options_data;

	if ( ( isset( $thim_options_data['thim_archive_sharing_facebook'] ) && $thim_options_data['thim_archive_sharing_facebook'] == 1 ) ||
	     ( isset( $thim_options_data['thim_archive_sharing_twitter'] ) && $thim_options_data['thim_archive_sharing_twitter'] == 1 ) ||
	     ( isset( $thim_options_data['thim_archive_sharing_pinterest'] ) && $thim_options_data['thim_archive_sharing_pinterest'] ) == 1 ||
	     ( isset( $thim_options_data['thim_archive_sharing_google'] ) && $thim_options_data['thim_archive_sharing_google'] ) == 1
	) {
		echo '<ul class="social-share">';
		if ( $thim_options_data['thim_archive_sharing_facebook'] == 1 ) {
			//echo '<li><a target="_blank" class="facebook" href="' . esc_url( 'https://www.facebook.com/sharer.php?s=100&amp;p[title]=' . get_the_title() . '&amp;p[url]=' . urlencode( get_permalink() ) . '&amp;p[images][0]=' . urlencode( wp_get_attachment_url( get_post_thumbnail_id() ) ) ) . '" title="' . esc_html__( 'Facebook', 'sailing' ) . '"><i class="fa fa-facebook"></i></a></li>';
			echo '<li><a target="_blank" class="facebook"  href="https://www.facebook.com/sharer.php?u=' . urlencode(get_permalink()) . '" title="' . esc_attr__('Facebook', 'sailing') . '"><i class="fa fa-facebook"></i></a></li>';
		}
		if ( $thim_options_data['thim_archive_sharing_twitter'] == 1 ) {
			echo '<li><a target="_blank" class="twitter" href="' . esc_url( 'https://twitter.com/share?url=' . urlencode( get_permalink() ) . '&amp;text=' . esc_attr( get_the_title() ) ) . '" title="' . esc_html__( 'Twitter', 'sailing' ) . '"><i class="fa fa-twitter"></i></a></li>';
		}
		if ( $thim_options_data['thim_archive_sharing_google'] == 1 ) {
			echo '<li><a target="_blank" class="googleplus" href="' . esc_url( 'https://plus.google.com/share?url=' . urlencode( get_permalink() ) . '&amp;title=' . esc_attr( get_the_title() ) ) . '" title="' . esc_html__( 'Google Plus', 'sailing' ) . '" onclick=\'javascript:window.open(this.href, "", "menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600");return false;\'><i class="fa fa-google"></i></a></li>';
		}
		if ( $thim_options_data['thim_archive_sharing_pinterest'] == 1 ) {
			echo '<li><a target="_blank" class="pinterest" href="' . esc_url( 'http://pinterest.com/pin/create/button/?url=' . urlencode( get_permalink() ) . '&amp;description=' . get_the_excerpt() . '&media=' . urlencode( wp_get_attachment_url( get_post_thumbnail_id() ) ) ) . '" onclick="window.open(this.href); return false;" title="' . esc_html__( 'Pinterest', 'sailing' ) . '"><i class="fa fa-pinterest"></i></a></li>';
		}

		echo '</ul>';
	}

}

add_action( 'thim_social_share', 'thim_post_share' );

add_filter( 'wp_nav_menu_args', 'thim_select_main_menu' );
function thim_select_main_menu( $args ) {
	global $post;
	if ( $post ) {
		if ( get_post_meta( $post->ID, 'thim_select_menu_one_page', true ) != 'default' && ( $args['theme_location'] == 'primary' ) ) {
			$menu         = get_post_meta( $post->ID, 'thim_select_menu_one_page', true );
			$args['menu'] = $menu;
		}
	}

	return $args;
}

add_filter( 'wpcf7_support_html5_fallback', '__return_true' );

/**
 * Get google font
 *
 * @param $query
 *
 * @return string
 */
function thim_google_font_family( $query ) {
	$font_url = add_query_arg( 'family', urlencode( $query ), "//fonts.googleapis.com/css" );

	return $font_url;
}


function thim_ssl_secure_url( $sources ) {
	$scheme = parse_url(site_url(), PHP_URL_SCHEME);
	if( 'https' == $scheme ) {
		if (stripos($sources, 'http://') === 0) {
			$sources = 'https' . substr($sources, 4);
		}
		return $sources;
	}

	return $sources;
}
function thim_ssl_secure_image_srcset( $sources ) {
	$scheme = parse_url(site_url(), PHP_URL_SCHEME);
	if( 'https' == $scheme ) {
		foreach ( $sources as &$source ) {
			if (stripos($source['url'], 'http://') === 0) {
				$source['url'] = 'https' . substr($source['url'], 4);
			}
		}
		return $sources;
	}

	return $sources;
}
//add_filter('script_loader_src', 'thim_ssl_secure_url');
//add_filter('style_loader_src', 'thim_ssl_secure_url');
add_filter( 'wp_calculate_image_srcset', 'thim_ssl_secure_image_srcset' );
add_filter( 'wp_get_attachment_url', 'thim_ssl_secure_url', 1000 );
add_filter( 'image_widget_image_url', 'thim_ssl_secure_url' );


/**
 * Change default comment fields
 *
 * @param $field
 *
 * @return string
 */
function thim_new_comment_fields( $fields ) {
	$commenter = wp_get_current_commenter();
	$req       = get_option( 'require_name_email' );
	$aria_req  = ( $req ? 'aria-required=true' : '' );

	$fields = array(
			'author' => '<p class="comment-form-author">' . '<input placeholder="' . esc_attr__( 'Name', 'sailing' ) . ( $req ? ' *' : '' ) . '" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" ' . $aria_req . ' /></p>',
			'email'  => '<p class="comment-form-email">' . '<input placeholder="' . esc_attr__( 'Email', 'sailing' ) . ( $req ? ' *' : '' ) . '" id="email" name="email" type="text" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30" ' . $aria_req . ' /></p>',
			'url'    => '<p class="comment-form-url">' . '<input placeholder="' . esc_attr__( 'Website', 'sailing' ) . '" id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></p>',
	);

	return $fields;
}

add_filter( 'comment_form_default_fields', 'thim_new_comment_fields', 1 );



// Custom loading image for contact form 7
add_filter('wpcf7_ajax_loader', 'thim_wpcf7_ajax_loader');
function thim_wpcf7_ajax_loader () {
 return  TP_THEME_URI.'images/loading.gif';
}


function thim_remove_script_version( $src ){
	$parts = explode( '?ver', $src );
        return $parts[0];
}
//add_filter( 'script_loader_src', 'thim_remove_script_version', 15, 1 );
//add_filter( 'style_loader_src', 'thim_remove_script_version', 15, 1 );
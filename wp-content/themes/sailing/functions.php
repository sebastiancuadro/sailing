<?php
/**
 * thim functions and definitions
 *
 * @package thim
 */
/**
 * Set the content width based on the theme's design and stylesheet.
 */
define( 'TP_THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'TP_THEME_URI', trailingslashit( get_template_directory_uri() ) );
define( 'TP_THEME_VERSION', '1.9.8');
 
if ( !isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( !function_exists( 'thim_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function thim_setup() {

		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on thim, use a find and replace
		 * to change 'sailing' to the name of your theme in all the template files
		 */
		load_theme_textdomain( 'sailing', get_stylesheet_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'woocommerce' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 */
		add_theme_support( 'post-thumbnails' );
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary Menu', 'sailing' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
		) );

		/*
		 * Enable support for Post Formats.
		 * See http://codex.wordpress.org/Post_Formats
		 */
		add_theme_support( 'post-formats', array(
			'aside', 'image', 'video', 'quote', 'link', 'gallery', 'audio'
		) );

		add_theme_support( "title-tag" );
		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'thim_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );
	}

endif; // thim_setup
add_action( 'after_setup_theme', 'thim_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */

function thim_widgets_init() {
	global $thim_options_data;
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'sailing' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title"><span>',
		'after_title'   => '</span></h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Toolbar', 'sailing' ),
		'id'            => 'toolbar',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	if ( isset( $thim_options_data['thim_header_style'] ) && $thim_options_data['thim_header_style'] == 'header_v2' ) {
		register_sidebar( array(
			'name'          => esc_html__( 'Logo Left', 'sailing' ),
			'id'            => 'logo_left',
			'description'   => 'Display widgets in left of logo, using with header layout 02',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );

		register_sidebar( array(
			'name'          => esc_html__( 'Logo Right', 'sailing' ),
			'id'            => 'logo_right',
			'description'   => 'Display widgets in right of logo, using with header layout 02',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}else{
		register_sidebar( array(
			'name'          => 'Menu Right',
			'id'            => 'menu_right',
			'description'   => esc_html__( 'Menu Right', 'sailing' ),
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget'  => '</li>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		) );
	}
	

	register_sidebar( array(
		'name'          => esc_html__( 'Offcanvas Sidebar', 'sailing' ),
		'id'            => 'offcanvas_sidebar',
		'description'   => 'Offcanvas Sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Main Bottom', 'sailing' ),
		'id'            => 'main-bottom',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer', 'sailing' ),
		'id'            => 'footer',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}

add_action( 'widgets_init', 'thim_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function thim_scripts() {
	global $current_blog;
	global $thim_options_data;

	wp_enqueue_style('thim-css-style', TP_THEME_URI . 'assets/css/custom-style.css', array(), TP_THEME_VERSION);

    if (is_multisite()) {
        if (file_exists(TP_THEME_DIR . 'style-' . $current_blog->blog_id . '.css')) {
            wp_enqueue_style('thim-style', get_template_directory_uri() . '/style-' . $current_blog->blog_id . '.css', array(), TP_THEME_VERSION);
        } else {
            wp_enqueue_style('thim-style', get_stylesheet_uri(), array(), TP_THEME_VERSION);
        }
    } else {
        wp_enqueue_style('thim-style', get_stylesheet_uri(), array(), TP_THEME_VERSION);
    }

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_script( 'thim-main', TP_THEME_URI . 'assets/js/main.min.js', array(), '', true );

	if ( WP_DEBUG ) {
		wp_enqueue_script( 'thim-custom-script', TP_THEME_URI . 'assets/js/custom-script.js', array( 'jquery', 'thim-main' ), '', true );
	} else {
		wp_enqueue_script( 'thim-custom-script', TP_THEME_URI . 'assets/js/custom-script.min.js', array( 'jquery', 'thim-main' ), '', true );
	}

	//Load file rtl.css
	if ( isset( $thim_options_data['thim_rtl_support'] ) && $thim_options_data['thim_rtl_support'] == '1' ) {
		wp_enqueue_style( 'thim-css-rtl', TP_THEME_URI . 'rtl.css', array() );
	}
}

add_action( 'wp_enqueue_scripts', 'thim_scripts' );

function thim_custom_admin_scripts() {
	wp_enqueue_style( 'thim-custom-admin', TP_THEME_URI . 'assets/css/custom-admin.css', array() );
}

add_action( 'admin_enqueue_scripts', 'thim_custom_admin_scripts' );

// Require library
require TP_THEME_DIR . 'inc/libs/class-tgm-plugin-activation.php';
require TP_THEME_DIR . 'inc/libs/theme-wrapper.php';
require TP_THEME_DIR . 'inc/libs/tax-meta-class/Tax-meta-class.php';
require TP_THEME_DIR . 'inc/libs/custom-export.php';

// Require plugins
if ( is_admin() && current_user_can( 'manage_options' ) ) {
	require TP_THEME_DIR . 'inc/admin/plugins-require.php';
}

// require
require TP_THEME_DIR . 'inc/custom-functions.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

require TP_THEME_DIR . 'inc/aq_resizer.php';

/**
 * Customizer additions.
 */
require TP_THEME_DIR . 'inc/header/logo.php';


include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

if ( is_plugin_active( 'thim-framework/tp-framework.php' ) ) {

	require TP_THEME_DIR . 'inc/admin/customize-options.php';

	require TP_THEME_DIR . 'inc/widgets/widgets.php';

	require TP_THEME_DIR . 'inc/tax-meta.php';
}

if ( class_exists( 'WooCommerce' ) ) {
	// Woocomerce
//	WC_Post_types::register_taxonomies();
	require get_template_directory() . '/woocommerce/woocommerce.php';
}

//pannel Widget Group
function thim_widget_group( $tabs ) {
	$tabs[] = array(
		'title'  => esc_html__( 'Thim Widget', 'sailing' ),
		'filter' => array(
			'groups' => array( 'thim_widget_group' )
		)
	);
	return $tabs;
}

add_filter( 'siteorigin_panels_widget_dialog_tabs', 'thim_widget_group', 19 );

function thim_row_style_fields( $fields ) {
	$fields['parallax'] = array(
		'name'        => esc_html__( 'Parallax', 'sailing' ),
		'type'        => 'checkbox',
		'group'       => 'design',
		'description' => esc_html__( 'If enabled, the background image will have a parallax effect.', 'sailing' ),
		'priority'    => 8,
	);
	return $fields;
}

add_filter( 'siteorigin_panels_row_style_fields', 'thim_row_style_fields' );

function thim_row_style_attributes( $attributes, $args ) {
	if ( !empty( $args['parallax'] ) ) {
		array_push( $attributes['class'], 'article__parallax' );
	}

	if ( !empty( $args['row_stretch'] ) && $args['row_stretch'] == 'full-stretched' ) {
		array_push( $attributes['class'], 'thim-fix-stretched' );
	}
	return $attributes;
}

add_filter( 'siteorigin_panels_row_style_attributes', 'thim_row_style_attributes', 10, 2 );


add_action( 'init', 'thim_add_excerpts_to_pages' );
function thim_add_excerpts_to_pages() {
	add_post_type_support( 'page', 'excerpt' );
}

add_action( 'hotel_booking_before_single_room_infomation', 'thim_hb_single_share' );
function thim_hb_single_share() {
	global $thim_options_data;
	$html = '';
	if ( $thim_options_data['thim_hb_share_facebook'] == 1 ||
		$thim_options_data['thim_hb_share_twitter'] == 1 ||
		$thim_options_data['thim_hb_share_pinterest'] == 1 ||
		$thim_options_data['thim_hb_share_google'] == 1
	) {
		$html .= '<div class="hb-share">';
		$html .= '<ul class="share_show">';
		if ( $thim_options_data['thim_hb_share_facebook'] == 1 ) {
			$html .= '<li><a target="_blank" class="facebook" href="' . esc_url( 'https://www.facebook.com/sharer.php?u=' . urlencode( get_permalink() ) ) . '&amp;t=' . esc_attr( get_the_title() ) . '" title="' . esc_html__( 'Facebook', 'sailing' ) . '"><i class="fa fa-facebook"></i></a></li>';
		}
		if ( $thim_options_data['thim_hb_share_twitter'] == 1 ) {
			$html .= '<li><a target="_blank" class="twitter" href="' . esc_url( 'https://twitter.com/share?url=' . urlencode( get_permalink() ) . '&amp;text=' . esc_attr( get_the_title() ) ) . '" title="' . esc_html__( 'Twitter', 'sailing' ) . '"><i class="fa fa-twitter"></i></a></li>';
		}
		if ( $thim_options_data['thim_hb_share_pinterest'] == 1 ) {
			$html .= '<li><a target="_blank" class="pinterest" href="' . esc_url( 'http://pinterest.com/pin/create/button/?url=' . urlencode( get_permalink() ) . '&amp;description=' . get_the_excerpt() . '&media=' . urlencode( wp_get_attachment_url( get_post_thumbnail_id() ) ) ) . '" onclick="window.open(this.href); return false;" title="' . esc_html__( 'Pinterest', 'sailing' ) . '"><i class="fa fa-pinterest"></i></a></li>';
		}
		if ( $thim_options_data['thim_hb_share_google'] == 1 ) {
			$html .= '<li><a target="_blank" class="googleplus" href="' . esc_url( 'https://plus.google.com/share?url=' . urlencode( get_permalink() ) . '&amp;title=' . esc_attr( get_the_title() ) ) . '" title="' . esc_html__( 'Google Plus', 'sailing' ) . '" onclick=\'javascript:window.open(this.href, "", "menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600");return false;\'><i class="fa fa-google"></i></a></li>';
		}
		$html .= '</ul>';
		$html .= '</div>';
	}
	echo ent2ncr( $html );
}
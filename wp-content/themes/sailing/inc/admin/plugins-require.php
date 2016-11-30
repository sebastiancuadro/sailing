<?php

/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @package       TGM-Plugin-Activation
 * @subpackage    Example
 * @version       2.3.6
 * @author        Thomas Griffin <thomas@thomasgriffinmedia.com>
 * @author        Gary Jones <gamajo@gamajo.com>
 * @copyright     Copyright (c) 2012, Thomas Griffin
 * @license       http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link          https://github.com/thomasgriffin/TGM-Plugin-Activation
 */
/**
 * Include the TGM_Plugin_Activation class.
 */
require_once TP_THEME_DIR . 'inc/libs/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'thim_register_required_plugins' );

/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the TGMPA library
 * and one from the .org repo.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function thim_register_required_plugins() {
	$plugins = array(

		array(
			'name'     => 'Widget Logic',
			// The plugin name
			'slug'     => 'widget-logic',
			// The plugin slug (typically the folder name)
			'required' => false,
		),

		array(
			'name'     => 'Instagram Feed',
			// The plugin name
			'slug'     => 'instagram-feed',
			// The plugin slug (typically the folder name)
			'required' => false,
		),

		array(
			'name'     => 'Black Studio TinyMCE Widget',
			// The plugin name
			'slug'     => 'black-studio-tinymce-widget',
			// The plugin slug (typically the folder name)
			'required' => false,
		),

		array(
			'name'     => 'SiteOrigin Page Builder',
			// The plugin name
			'slug'     => 'siteorigin-panels',
			// The plugin slug (typically the folder name)
			'required' => true,
		),

		array(
			'name'     => 'Contact Form 7',
			// The plugin name
			'slug'     => 'contact-form-7',
			'required' => false,
		),

		array(
			'name'     => 'MailChimp for WordPress',
			// The plugin name
			'slug'     => 'mailchimp-for-wp',
			'required' => false,
		),

		array(
			'name'     => 'Instagram Feed',
			// The plugin name
			'slug'     => 'instagram-feed',
			'required' => false,
		),

		array(
			'name'     => 'WooCommerce',
			// The plugin name
			'slug'     => 'woocommerce',
			'required' => false,

		),

		array(
			'name'               => 'TP Hotel Booking',
			// The plugin name
			'slug'               => 'tp-hotel-booking',
			// The plugin slug (typically the folder name)
			'source'             => TP_THEME_DIR . 'inc/plugins/tp-hotel-booking.zip',
			'version'            => '1.1.5.6',
			// The plugin source
			'required'           => false,
			// If false, the plugin is only 'recommended' instead of required
			'force_activation'   => false,
			// If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			'force_deactivation' => false,
			// If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
			'external_url'       => '',
			// If set, overrides default API URL and points to an external URL
		),


		array(
			'name'               => 'TP Hotel Booking Importer',
			// The plugin name
			'slug'               => 'tp-hotel-booking-importer',
			// The plugin slug (typically the folder name)
			'source'             => TP_THEME_DIR . 'inc/plugins/tp-hotel-booking-importer.zip',
			'version'            => '0.0.1',
			// The plugin source
			'required'           => false,
			// If false, the plugin is only 'recommended' instead of required
			'force_activation'   => false,
			// If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			'force_deactivation' => false,
			// If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
			'external_url'       => '',
			// If set, overrides default API URL and points to an external URL
		),


		array(
			'name'               => 'Thim Framework',
			// The plugin name
			'slug'               => 'thim-framework',
			// The plugin slug (typically the folder name)
			'source'             => TP_THEME_DIR . 'inc/plugins/thim-framework.zip',
			'version'            => '1.9.5',
			// The plugin source
			'required'           => true,
			// If false, the plugin is only 'recommended' instead of required
			'force_activation'   => false,
			// If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			'force_deactivation' => false,
			// If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
			'external_url'       => '',
			// If set, overrides default API URL and points to an external URL
		),

		array(
			'name'               => 'Revolution Slider',
			// The plugin name
			'slug'               => 'revslider',
			// The plugin slug (typically the folder name)
			'source'             => TP_THEME_DIR . 'inc/plugins/revslider.zip',
			'version'            => '4.6.93',
			// The plugin source
			'required'           => false,
			// If false, the plugin is only 'recommended' instead of required
			'force_activation'   => false,
			// If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			'force_deactivation' => false,
			// If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
			'external_url'       => '',
			// If set, overrides default API URL and points to an external URL
		),

		array(
			'name'               => 'Testimonials By ThimPress',
			// The plugin name
			'slug'               => 'thim-testimonials',
			// The plugin slug (typically the folder name)
			'source'             => TP_THEME_DIR . 'inc/plugins/thim-testimonials.zip',
			'version'            => '1.0',
			// The plugin source
			'required'           => false,
			// If false, the plugin is only 'recommended' instead of required
			'force_activation'   => false,
			// If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			'force_deactivation' => false,
			// If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
			'external_url'       => '',
			// If set, overrides default API URL and points to an external URL
		),
	);

	/**
	 * Array of configuration settings. Amend each line as needed.
	 * If you want the default strings to be available under your own theme domain,
	 * leave the strings uncommented.
	 * Some of the strings are added into a sprintf, so see the comments at the
	 * end of each line for what each argument will be.
	 */
	$config = array(
		'domain'       => 'sailing', // Text domain - likely want to be the same as your theme.
		'default_path' => '', // Default absolute path to pre-packaged plugins
		'parent_slug'  => 'themes.php', // Parent menu slug
		'menu'         => 'install-required-plugins', // Menu slug
		'has_notices'  => true, // Show admin notices or not
		'is_automatic' => false, // Automatically activate plugins after installation or not
		'message'      => '', // Message to output right before the plugins table
		'strings'      => array(
			'page_title'                      => esc_html__( 'Install Required Plugins', 'sailing' ),
			'menu_title'                      => esc_html__( 'Install Plugins', 'sailing' ),
			'installing'                      => esc_html__( 'Installing Plugin: %s', 'sailing' ),
			// %1$s = plugin name
			'oops'                            => esc_html__( 'Something went wrong with the plugin API.', 'sailing' ),
			'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'sailing' ),
			// %1$s = plugin name(s)
			'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'sailing' ),
			// %1$s = plugin name(s)
			'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'sailing' ),
			// %1$s = plugin name(s)
			'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'sailing' ),
			// %1$s = plugin name(s)
			'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'sailing' ),
			// %1$s = plugin name(s)
			'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'sailing' ),
			// %1$s = plugin name(s)
			'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'sailing' ),
			// %1$s = plugin name(s)
			'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'sailing' ),
			// %1$s = plugin name(s)
			'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'sailing' ),
			'activate_link'                   => _n_noop( 'Activate installed plugin', 'Activate installed plugins', 'sailing' ),
			'return'                          => esc_html__( 'Return to Required Plugins Installer', 'sailing' ),
			'plugin_activated'                => esc_html__( 'Plugin activated successfully.', 'sailing' ),
			'complete'                        => esc_html__( 'All plugins installed and activated successfully. %s', 'sailing' ),
			// %1$s = dashboard link
			'nag_type'                        => 'updated'
			// Determines admin notice type - can only be 'updated' or 'error'
		)
	);
	tgmpa( $plugins, $config );
}

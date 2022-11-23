<?php
/**
 * Plugin Name: Blog Filter Widget
 * Description: Custom Blog Filter widget to use on resource center pages
 * Plugin URI:  https://www.evercommerce.com/
 * Version:     1.0.6
 * Author:      EverCommerce GD Dev Team
 * Author URI:  https://www.evercommerce.com/
 * Text Domain: ecfilter
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define('ECFILTER_URL', plugin_dir_url(__FILE__) );

//get styles and scripts for frontend and admin page
include(plugin_dir_path(__FILE__) . 'includes/ecfilter-styles-scripts.php');

//create options page with settings
include( plugin_dir_path(__FILE__) . 'admin/admin-setup.php' );

//register all files
include( plugin_dir_path(__FILE__) . 'includes/widgets/carbon-widget.php' );
include( plugin_dir_path(__FILE__) . 'includes/shortcode_posts.php' );
include( plugin_dir_path(__FILE__) . 'includes/ajax_query.php' );


//register elementor widget if using elementor
function register_elementor_widget( $widgets_manager){
	include( plugin_dir_path(__FILE__) .  'includes/widgets/elementor-widget.php');

	$widgets_manager->register( new \EC_Cat_List_Widget() );
}
add_action( 'elementor/widgets/register', 'register_elementor_widget' );

//load carbon fields for block editor widget
function carbon_fields_boot_plugin() {
	include( plugin_dir_path(__FILE__) .  'vendor/autoload.php' );
	\Carbon_Fields\Carbon_Fields::boot();
}
add_action( 'after_setup_theme', 'carbon_fields_boot_plugin' );

//Settings link after activation
function ecfilter_add_settings_link($links){
	$settings_link = '<a href="options-general.php?page=crb_carbon_fields_container_blog_filter_settings.php">'. __('Settings') . '</a>';

	array_push( $links, $settings_link );
	return $links;
}

$filter_name = "plugin_action_links_" . plugin_basename(__FILE__);

add_filter($filter_name, 'ecfilter_add_settings_link');


//Filter the excerpt length & edit the trailing end.
function custom_short_excerpt($excerpt){

	$limit = 199;

	if (strlen($excerpt) > $limit) {
		$new_length = substr($excerpt, 0, strpos($excerpt, ' ', $limit));
		$read_more = '....';

		return $new_length . $read_more;
	}
	return $excerpt;

}
add_filter('the_excerpt', 'custom_short_excerpt');	
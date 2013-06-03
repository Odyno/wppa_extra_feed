<?php
/**
 * Plugin Name: WPPA+ Extra Feed
 * Plugin URI: http://www.staniscia.net/wppa-extra-feed/
 * Description: Enable RSS  for topten foto
 * Version: 0.0.1
 * Author: Alessandro Staniscia
 * Author URI: http://www.staniscia.net/
 * License: GPLv2
 */

define("FEED_NAME_OF_WPPA", "last_photo");
define('WPPAEF_NAME',"WPPA+ Feeds");
define('_WPPAEF_FILE_',__FILE__);
define('WPPAEF_VERSION',"0.0.1");
define('WPPAEF_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('WPPAEF_PLUGIN_URL', plugins_url( __FILE__));
define('WPPAEF_HOME_SITE_URL', "http://www.staniscia.net/odynogooglegroups");



include 'wppaef-check-dep.php';


include_once('wppaef-feed-maker.php');
include_once('wppaef-feed-shortcode-maker.php');
include_once('admin/wppaef-mgt.php');

add_action('init', 'wppaef_add_feeds_to_site');
add_action('admin_menu', 'wppaef_add_admin_info_page');
add_shortcode( 'wppaef', 'wppaef_feed_link_shortcode_to_site');




?>
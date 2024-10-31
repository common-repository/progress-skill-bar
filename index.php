<?php

/*
  Plugin Name: Progress skill bar
  Plugin URI: https://www.wordpress.org/downloads/progress-skill-bar/
  Description: Progress bar is a powerful &amp; robust but easy to represent your Progress bar with grid.
  Author: Sk Abul Hasan
  Author URI: https://pluginsbd.com/
  Version: 1.0
 */
if (!defined('ABSPATH'))
   exit;

// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);   

define('pbar_6310_plugin_url', plugin_dir_path(__FILE__));
define('pbar_6310_plugin_dir_url', plugin_dir_url(__FILE__));
define ( 'PBAR_6310_PLUGIN_CURRENT_VERSION', 1.0 ); 
   
add_shortcode('pbar_6310_progress_bar', 'pbar_6310_progress_bar_shortcode');

function pbar_6310_progress_bar_shortcode($atts)
{
   extract(shortcode_atts(array('id' => ' ',), $atts));
   $ids = (int) $atts['id'];

   ob_start();
   include(pbar_6310_plugin_url . 'shortcode.php');
   return ob_get_clean();
}


add_action('admin_menu', 'pbar_6310_progress_bar_menu');

function pbar_6310_progress_bar_menu()
{
  $options = pbar_6310_get_user_roles();
   add_menu_page('Progress Bar', 'Progress Bar', $options, 'pbar-6310-progress-bar', 'pbar_6310_home', 'dashicons-format-image', 20);
   add_submenu_page('pbar-6310-progress-bar', 'Progress Bar', 'All Progress bar',  $options, 'pbar-6310-progress-bar', 'pbar_6310_home');
   add_submenu_page('pbar-6310-progress-bar', 'Template 01-10', 'Template 01-10', $options, 'pbar-6310-template-01-10', 'pbar_6310_template_01_10');
   add_submenu_page('pbar-6310-progress-bar', 'Template 11-20', 'Template 11-20', $options, 'pbar-6310-template-11-20', 'pbar_6310_template_11_20');
   add_submenu_page('pbar-6310-progress-bar', 'Template 21-30', 'Template 21-30', $options, 'pbar-6310-template-21-30', 'pbar_6310_template_21_30');
   add_submenu_page('pbar-6310-progress-bar', 'Manage progress bar', 'Manage progress bar', $options, 'pbar-6310-progress-bar-manage-items', 'pbar_6310_team_6310_manage_items');
   add_submenu_page('pbar-6310-progress-bar', 'Import / Export Plugin', 'Import/Export Plugin', $options, 'pbar-6310-progress-bar-import-export', 'pbar_6310_service_6310_import_export');
   add_submenu_page('pbar-6310-progress-bar', 'License', 'License', $options, 'pbar-6310-progress-bar-license', 'pbar_6310_service_6310_lincense');
   add_submenu_page('pbar-6310-progress-bar', 'How to use', 'How to use', $options, 'pbar-6310-progress-bar-use', 'pbar_6310_service_6310_how_to_use');
   add_submenu_page('pbar-6310-progress-bar', 'WpMart Plugins', 'WpMart Plugins', $options, 'pbar-6310-wpmart-plugins', 'pbar_6310_wpmart_plugins');
}

function pbar_6310_home()
{
   global $wpdb;
   

   $style_table = $wpdb->prefix . 'pbar_6310_style';
   include pbar_6310_plugin_url . 'header.php';
   include pbar_6310_plugin_url . 'home.php';
}

include pbar_6310_plugin_url . 'template-menu.php';


add_action('wp_ajax_pbar_6310_team_member_info', 'pbar_6310_team_member_info');

function pbar_6310_my_enqueue()
{
   wp_localize_script('ajax-script', 'my_ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));
}

add_action('wp_enqueue_scripts', 'pbar_6310_my_enqueue');

if (is_admin()) {
   add_action('wp_ajax_pbar_6310_team_member_details', 'pbar_6310_team_member_details');
} else {
   add_action('wp_ajax_nopriv_pbar_6310_team_member_details', 'pbar_6310_team_member_details');
}

add_action('wp_ajax_nopriv_pbar_6310_team_member_details', 'pbar_6310_team_member_details');

register_activation_hook(__FILE__, 'pbar_6310_progress_bar_install');
include_once(pbar_6310_plugin_url . 'functions.php');

function pbar_6310_ajax_enqueue()
{
   wp_localize_script('pbar-6310-ajax-script', 'pbar_6310_ajax_object', array('pbar_6310_ajax_url' => admin_url('admin-ajax.php')));
}

add_action('wp_enqueue_scripts', 'pbar_6310_ajax_enqueue');

function pbar_6310_activation_redirect( $plugin ) {
   if( $plugin == plugin_basename( __FILE__ ) ) {
       exit( wp_redirect( admin_url( 'admin.php?page=pbar-6310-progress-bar-use' ) ) );
   }
}
add_action( 'activated_plugin', 'pbar_6310_activation_redirect' );

add_action( 'admin_enqueue_scripts', 'pbar_6310_link_css_js' );


function pbar_6310_plugin_update_check() {
   pbar_6310_version_status();
}
add_action('plugins_loaded', 'pbar_6310_plugin_update_check'); 
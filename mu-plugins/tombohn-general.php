<?php

/**
 * Plugin Name: TomBohn General
 * Description: Core Code For TomBohn General
 * Version: 0.0.1
 * Author: Andrew M McCall
 * Author URI: https://andrew-mccall.com
 * License: MIT
 * License URI: https://mit-license.org/
 **/


// Disable the dashboard widgets

function tombohn_remove_dashboard_widgets()
{

  global $wp_meta_boxes;
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
  unset($wp_meta_boxes['dashboard']['normal']['high']['rank_math_dashboard_widget']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_site_health']);
}

add_action('wp_dashboard_setup', 'tombohn_remove_dashboard_widgets');

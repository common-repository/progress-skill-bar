<?php

function pbar_6310_template_01_10()
{
  global $wpdb;
  $style_table = $wpdb->prefix . 'pbar_6310_style';
  $item_table = $wpdb->prefix . 'pbar_6310_item';  
  include pbar_6310_plugin_url . 'header.php';
  if (empty($_GET['styleid'])) {
    include pbar_6310_plugin_url . 'settings/preview-01-10.php';
  } else if (!empty($_GET['styleid'])) {
    $styleId = (int) ($_GET['styleid']);
    include pbar_6310_plugin_url . 'common-template.php';
  }
}

function pbar_6310_template_11_20()
{
  global $wpdb;
  $style_table = $wpdb->prefix . 'pbar_6310_style';
  $item_table = $wpdb->prefix . 'pbar_6310_item';  
  include pbar_6310_plugin_url . 'header.php';
  if (empty($_GET['styleid'])) {
    include pbar_6310_plugin_url . 'settings/preview-11-20.php';
  } else if (!empty($_GET['styleid'])) {
    $styleId = (int) ($_GET['styleid']);
    include pbar_6310_plugin_url . 'common-template.php';
  }
}
function pbar_6310_template_21_30()
{
  global $wpdb;
  $style_table = $wpdb->prefix . 'pbar_6310_style';  
  $item_table = $wpdb->prefix . 'pbar_6310_item';  
  include pbar_6310_plugin_url . 'header.php';
  if (empty($_GET['styleid'])) {
    include pbar_6310_plugin_url . 'settings/preview-21-30.php';
  } else if (!empty($_GET['styleid'])) {
    $styleId = (int) ($_GET['styleid']);
    include pbar_6310_plugin_url . 'common-template.php';
  }
}



function pbar_6310_team_6310_manage_items()
{
  global $wpdb;  
  include pbar_6310_plugin_url . 'header.php';  
  include pbar_6310_plugin_url . 'settings/manage-items.php';
}

function pbar_6310_team_6310_category()
{
  global $wpdb;  
  include pbar_6310_plugin_url . 'header.php';  
  include pbar_6310_plugin_url . 'settings/category.php';
}


function pbar_6310_service_6310_icon()
{
  global $wpdb; 
  include pbar_6310_plugin_url . 'header.php';
  include pbar_6310_plugin_url . 'settings/social-icon.php';
}

function pbar_6310_service_6310_lincense()
{
  global $wpdb;  
  include pbar_6310_plugin_url . 'header.php';
  include pbar_6310_plugin_url . 'license.php';
}

function pbar_6310_service_6310_how_to_use()
{
  global $wpdb; 
  include pbar_6310_plugin_url . 'header.php';
  include pbar_6310_plugin_url . 'settings/how-to-use.php';
}

function pbar_6310_wpmart_plugins()
{
  global $wpdb;
  include pbar_6310_plugin_url . 'header.php';  
  include pbar_6310_plugin_url . 'settings/wpmart-plugins.php';
}

function pbar_6310_service_6310_import_export()
{
  global $wpdb;
  include pbar_6310_plugin_url . 'header.php';  
  include pbar_6310_plugin_url . 'settings/import-export-plugins.php';
}
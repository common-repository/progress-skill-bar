<?php

global $wpdb;
$style_table = $wpdb->prefix . 'pbar_6310_style';

$item_table = $wpdb->prefix . 'pbar_6310_item';
$styledata = $wpdb->get_row($wpdb->prepare("SELECT * FROM $style_table WHERE id = %d ", $ids), ARRAY_A);
if(!$styledata || $styledata == '') return;
$styleTemplate = (int) substr($styledata['style_name'], -2);
$css = explode("!!##!!", $styledata['css']);
$key = explode(",", $css[0]);
$value = explode("||##||", $css[1]);
$filterKey = [];
$filterValue = [];
for($i = 0; $i < count($key); $i++) {
   $filterKey[] = esc_attr($key[$i]);
}
for($i = 0; $i < count($value); $i++) {
   $filterValue[] = esc_attr($value[$i]);
}
$cssData = array_combine($filterKey, $filterValue);
$styleId = substr($styledata['style_name'], -2);

$results = pbar_6310_extract_item(esc_attr($styledata['itemids']));
$desktop_row = isset($cssData['desktop_item_per_row']) ? $cssData['desktop_item_per_row'] : 1;
$tablet_row =  isset($cssData['tablet_item_per_row']) ? $cssData['tablet_item_per_row'] : 1;
$mobile_row = isset($cssData['mobile_item_per_row']) ? $cssData['mobile_item_per_row'] : 1;
$bgType = esc_attr($cssData['background_type']);

if (file_exists(pbar_6310_plugin_url . "output/{$styledata['style_name']}.php")) {
   $fonts = str_replace("+", " ", esc_attr($cssData['pbar_6310_title_font_family']));
   $fonts .= '|' . (isset($cssData['pbar_6310_value_font_family'])?str_replace("+", " ", $cssData['pbar_6310_value_font_family']):'Amaranth');
   wp_enqueue_style("pbar-6310-google-font-".esc_attr($ids)."", "https://fonts.googleapis.com/css?family={$fonts}");
   wp_enqueue_style('pbar-6310-font-awesome-5-0-13', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css');
   wp_enqueue_style('pbar-6310-font-awesome-4-07', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
   include pbar_6310_plugin_url . "output/css/_common-css.php";
   include pbar_6310_plugin_url . "output/css/_css-".esc_attr($styleId).".php";
   ?>
    <div class="pbar-6310-progress-bar"
         pbar-6310-style-id='<?php echo esc_attr($ids) ?>'
         pbar-6310-style-desktop='<?php echo esc_attr($desktop_row) ?>'
         pbar-6310-style-tablet='<?php echo esc_attr($tablet_row) ?>'
         pbar-6310-style-mobile='<?php echo esc_attr($mobile_row) ?>'
      >
      <?php include pbar_6310_plugin_url . "output/".esc_attr($styledata['style_name']).".php"; ?>
   </div>
<?php
   wp_enqueue_script('pbar-6310-common-output-js', plugins_url('assets/js/pbar-6310-common-output.js', __FILE__), array('jquery'), TRUE);
   wp_enqueue_script('pbar-6310-counter-js', plugins_url('assets/js/jquery.counterup.js', __FILE__), array('jquery'), TRUE);
}

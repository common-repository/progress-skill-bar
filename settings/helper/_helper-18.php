<?php
$jsCode = "
jQuery(document).ready(function() {
  //General Setting
  jQuery(`
        #pbar_6310_bar_radius,
        #pbar_progress_bar_background_color,
        #pbar_progress_bar_color,
        #pbar_progress_bar_margin_top,
        #pbar_progress_bar_margin_bottom,
        #pbar_6310_bar_height,
        #pbar_progress_title_background_color
      `).on('change', function() {
                
        var pbar_6310_bar_radius = parseInt (jQuery('#pbar_6310_bar_radius').val());  
        var pbar_progress_bar_background_color = jQuery('#pbar_progress_bar_background_color').val();
        var pbar_progress_bar_color = jQuery('#pbar_progress_bar_color').val();
        var pbar_progress_bar_margin_top = parseInt(jQuery('#pbar_progress_bar_margin_top').val());
        var pbar_progress_bar_margin_bottom = parseInt(jQuery('#pbar_progress_bar_margin_bottom').val());
        var pbar_6310_bar_height = parseInt(jQuery('#pbar_6310_bar_height').val());
        var pbar_progress_title_background_color = jQuery('#pbar_progress_title_background_color').val();

        jQuery(`<style type='text/css'>.pbar-6310-template-".esc_attr($ids)."-title{
          background:  \${pbar_progress_title_background_color} !important;
        }</style>`).appendTo('.pbar-6310-preview');

        jQuery(`<style type='text/css'>.pbar-6310-template-".esc_attr($ids)."-wrapper{
            height: \${pbar_6310_bar_height}px !important;
            background:  \${pbar_progress_bar_background_color} !important;
            border-radius: \${pbar_6310_bar_radius}px  !important;
            margin-bottom: \${pbar_progress_bar_margin_bottom}px !important;
            margin-top: \${pbar_progress_bar_margin_top}px !important;
        }</style>`).appendTo('.pbar-6310-preview');

        jQuery(`<style type='text/css'>.pbar-6310-template-".esc_attr($ids)."-bar {
          background-color: \${pbar_progress_bar_color} !important;
        }</style>`).appendTo('.pbar-6310-preview');

        jQuery(`<style type='text/css'>.pbar-6310-template-".esc_attr($ids)."-value {
          line-height: \${pbar_6310_bar_height}px !important;
        }</style>`).appendTo('.pbar-6310-preview');

    });
  });
";

wp_register_script( "pbar-6310-template-".esc_attr($ids)."-js", "" );
wp_enqueue_script( "pbar-6310-template-".esc_attr($ids)."-js" );
wp_add_inline_script( "pbar-6310-template-".esc_attr($ids)."-js", $jsCode );
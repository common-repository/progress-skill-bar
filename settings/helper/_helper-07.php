<?php
$jsCode = "
jQuery(document).ready(function() {
  //General Setting
  jQuery(`
        #pbar_progress_bar_border_size,
        #pbar_progress_bar_border_color,
        #pbar_progress_bar_circle_background,
        #pbar_6310_bar_radius,
        #pbar_progress_bar_background_color,
        #pbar_progress_bar_color,
        #pbar_progress_bar_margin_bottom,
        #pbar_progress_bar_margin_top,
        #pbar_6310_bar_height,
        #pbar_progress_tooltip_background_color
      `).on('change', function() {
        
        var pbar_progress_bar_border_size = parseInt (jQuery('#pbar_progress_bar_border_size').val());
        var pbar_progress_bar_border_color = jQuery('#pbar_progress_bar_border_color').val();
        var pbar_progress_bar_circle_background = jQuery('#pbar_progress_bar_circle_background').val();
        var pbar_6310_bar_radius = parseInt(jQuery('#pbar_6310_bar_radius').val());
        var pbar_6310_box_shadow_color = jQuery('#pbar_6310_box_shadow_color').val();
        var pbar_progress_bar_background_color = jQuery('#pbar_progress_bar_background_color').val();
        var pbar_progress_bar_color = jQuery('#pbar_progress_bar_color').val();
        var pbar_progress_bar_margin_top = parseInt(jQuery('#pbar_progress_bar_margin_top').val());
        var pbar_progress_bar_margin_bottom = parseInt(jQuery('#pbar_progress_bar_margin_bottom').val());
        var pbar_6310_bar_height = parseInt(jQuery('#pbar_6310_bar_height').val()); 
        var pbar_progress_tooltip_background_color = jQuery('#pbar_progress_tooltip_background_color').val();

        jQuery(`<style type='text/css'>.pbar-6310-template-".esc_attr($ids)."{
          border: \${pbar_progress_bar_border_size}px solid \${pbar_progress_bar_border_color} !important;
          margin-bottom: \${pbar_progress_bar_margin_bottom}px !important;
          margin-top: \${pbar_progress_bar_margin_top}px  !important;
        }</style>`).appendTo('.pbar-6310-preview');

        jQuery(`<style type='text/css'>.pbar-6310-template-".esc_attr($ids)."-percent{
          box-shadow: inset 0 0 50px \${pbar_progress_bar_circle_background} !important;
          background:\${pbar_progress_bar_circle_background} !important;
        }</style>`).appendTo('.pbar-6310-preview');

        jQuery(`<style type='text/css'>.pbar-6310-template-".esc_attr($ids)."-wrapper{
          height: \${pbar_6310_bar_height}px !important;
          line-height: \${pbar_6310_bar_height}px !important;
          background: \${pbar_progress_bar_background_color} !important;
          border-radius: \${pbar_6310_bar_radius}px !important;
          border: \${pbar_progress_bar_border_size}px solid transparent !important;
        }</style>`).appendTo('.pbar-6310-preview');
        
        jQuery(`<style type='text/css'>.pbar-6310-template-".esc_attr($ids)."-bar{      
          background: \${pbar_progress_bar_color} !important;         
        }</style>`).appendTo('.pbar-6310-preview');

        jQuery(`<style type='text/css'>.pbar-6310-template-".esc_attr($ids)."-bar::after {
          top: calc(-\${pbar_6310_bar_height}px / 2 - \${pbar_progress_bar_border_size}px + \${pbar_6310_bar_height}px / 2) !important;
          border-top:  calc(\${pbar_6310_bar_height}px / 2) solid transparent !important;
          border-bottom:  calc(\${pbar_6310_bar_height}px / 2) solid transparent !important;
          border-left:  calc(\${pbar_6310_bar_height}px / 2) solid \${pbar_progress_bar_color} !important;
          right: calc(-\${pbar_6310_bar_height}px / 2) !important;
        }</style>`).appendTo('.pbar-6310-preview');

        jQuery(`<style type='text/css'>.pbar-6310-template-".esc_attr($ids)."-value{
          bottom: calc(\${pbar_6310_bar_height}px + 10px - \${pbar_progress_bar_border_size}px) !important;
          background: \${pbar_progress_tooltip_background_color} !important;
        }</style>`).appendTo('.pbar-6310-preview');

        jQuery(`<style type='text/css'>.pbar-6310-template-".esc_attr($ids)."-value:after {
          border-top: 10px solid \${pbar_progress_tooltip_background_color} !important;
        }</style>`).appendTo('.pbar-6310-preview');

    });
  });
";

wp_register_script( "pbar-6310-template-".esc_attr($ids)."-js", "" );
wp_enqueue_script( "pbar-6310-template-".esc_attr($ids)."-js" );
wp_add_inline_script( "pbar-6310-template-".esc_attr($ids)."-js", $jsCode );
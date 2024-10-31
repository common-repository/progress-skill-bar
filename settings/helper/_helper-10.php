<?php
$jsCode = "
jQuery(document).ready(function() {
  //General Setting
  jQuery(`
        #pbar_progress_bar_border_size,
        #pbar_progress_bar_border_color,
        #pbar_6310_bar_radius,   
        #pbar_progress_bar_background_color,
        #pbar_progress_bar_alternate_color,
        #pbar_progress_bar_color,
        #pbar_progress_bar_margin_bottom,
        #pbar_progress_bar_margin_top,
        #pbar_6310_bar_height
      `).on('change', function() {
        
        var pbar_progress_bar_border_size = parseInt (jQuery('#pbar_progress_bar_border_size').val());
        var pbar_progress_bar_border_color = jQuery('#pbar_progress_bar_border_color').val();
        var pbar_6310_bar_radius = parseInt(jQuery('#pbar_6310_bar_radius').val());
        var pbar_progress_bar_background_color = jQuery('#pbar_progress_bar_background_color').val();
        var pbar_progress_bar_color = jQuery('#pbar_progress_bar_color').val();
        var pbar_progress_bar_margin_top = parseInt(jQuery('#pbar_progress_bar_margin_top').val());
        var pbar_progress_bar_margin_bottom = parseInt(jQuery('#pbar_progress_bar_margin_bottom').val());
        var pbar_6310_bar_height = parseInt(jQuery('#pbar_6310_bar_height').val());
        var pbar_progress_bar_alternate_color = jQuery('#pbar_progress_bar_alternate_color').val();

        jQuery(`<style type='text/css'>.pbar-6310-template-".esc_attr($ids)."-bar{
          border: \${pbar_progress_bar_border_size}px solid \${pbar_progress_bar_border_color} !important;
          border-radius: \${pbar_6310_bar_radius}px !important;         
          background-image: linear-gradient(
            45deg,\${pbar_progress_bar_alternate_color} 25%,transparent 25%,transparent 50%,\${pbar_progress_bar_alternate_color} 50%,\${pbar_progress_bar_alternate_color} 75%,transparent 75%,transparent) !important;
            background-color: \${pbar_progress_bar_color} !important;         
        }</style>`).appendTo('.pbar-6310-preview');
        jQuery(`<style type='text/css'>.pbar-6310-template-".esc_attr($ids)."-bar:after{
          width: calc( \${pbar_6310_bar_height}px * 2 - \${pbar_progress_bar_border_size}px * 2) !important;
          height: calc( \${pbar_6310_bar_height}px * 2 - \${pbar_progress_bar_border_size}px * 2) !important;
          top: calc(-\${pbar_6310_bar_height}px / 2) !important;
          background: \${pbar_progress_bar_color} !important;
        }</style>`).appendTo('.pbar-6310-preview');
        jQuery(`<style type='text/css'>.pbar-6310-template-".esc_attr($ids)."-wrapper{
          height: \${pbar_6310_bar_height}px !important;
          background: \${pbar_progress_bar_background_color} !important;
          border-radius: \${pbar_6310_bar_radius}px !important;
        }</style>`).appendTo('.pbar-6310-preview');
        jQuery(`<style type='text/css'>.pbar-6310-template-".esc_attr($ids)."{
          margin-top:  \${pbar_progress_bar_margin_top}px !important;
          margin-bottom:  \${pbar_progress_bar_margin_bottom}px !important;
        }</style>`).appendTo('.pbar-6310-preview');

    });
  });
";

wp_register_script( "pbar-6310-template-".esc_attr($ids)."-js", "" );
wp_enqueue_script( "pbar-6310-template-".esc_attr($ids)."-js" );
wp_add_inline_script( "pbar-6310-template-".esc_attr($ids)."-js", $jsCode );
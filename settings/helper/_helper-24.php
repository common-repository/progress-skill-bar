<?php
$jsCode = "
jQuery(document).ready(function() {
  //General Setting
  jQuery(`
        #pbar_progress_bar_label_color,
        #pbar_progress_bar_label_two_color,
        #pbar_progress_bar_background_color,
        #pbar_progress_bar_color,
        #pbar_progress_bar_alternate_color,
        #pbar_progress_bar_margin_top,
        #pbar_progress_bar_margin_bottom,
        #pbar_6310_bar_height,
        #pbar_6310_value_font_size
      `).on('change', function() {               
        var pbar_progress_bar_label_color = jQuery('#pbar_progress_bar_label_color').val();
        var pbar_progress_bar_label_two_color = jQuery('#pbar_progress_bar_label_two_color').val();
        var pbar_progress_bar_color = jQuery('#pbar_progress_bar_color').val();
        var pbar_progress_bar_background_color = jQuery('#pbar_progress_bar_background_color').val();
        var pbar_progress_bar_alternate_color = jQuery('#pbar_progress_bar_alternate_color').val();
        var pbar_progress_bar_margin_top = parseInt(jQuery('#pbar_progress_bar_margin_top').val());
        var pbar_progress_bar_margin_bottom = parseInt(jQuery('#pbar_progress_bar_margin_bottom').val());
        var pbar_6310_bar_height = parseInt(jQuery('#pbar_6310_bar_height').val());
        var pbar_6310_value_font_size = parseInt(jQuery('#pbar_6310_value_font_size').val());        

        jQuery(`<style type='text/css'>.pbar-6310-template-".esc_attr($ids)."{
          margin: \${pbar_progress_bar_margin_top}px 10px \${pbar_progress_bar_margin_bottom}px !important;
          background: linear-gradient(to right, \${pbar_progress_bar_label_color}, \${pbar_progress_bar_label_two_color}) !important;
        }</style>`).appendTo('.pbar-6310-preview');

        jQuery(`<style type='text/css'>.pbar-6310-template-".esc_attr($ids)."-wrapper{
          height: \${pbar_6310_bar_height}px !important;
          background: \${pbar_progress_bar_background_color} !important;
        }</style>`).appendTo('.pbar-6310-preview');

        jQuery(`<style type='text/css'> .pbar-6310-template-".esc_attr($ids)."-bar {
          background-image: -webkit-linear-gradient(
            45deg, \${pbar_progress_bar_alternate_color} 25%,transparent 25%,transparent 50%, \${pbar_progress_bar_alternate_color} 50%, \${pbar_progress_bar_alternate_color} 75%,transparent 75%,transparent) !important;
          background-image: -o-linear-gradient(45deg, \${pbar_progress_bar_alternate_color} 25%,transparent 25%,transparent 50%, \${pbar_progress_bar_alternate_color} 50%, \${pbar_progress_bar_alternate_color} 75%,transparent 75%,transparent);
          background-image: linear-gradient(
            45deg, \${pbar_progress_bar_alternate_color} 25%,transparent 25%,transparent 50%, \${pbar_progress_bar_alternate_color} 50%, \${pbar_progress_bar_alternate_color} 75%,transparent 75%,transparent) !important;
          background-color: \${pbar_progress_bar_color} !important;    
        }</style>`).appendTo('.pbar-6310-preview');

        jQuery(`<style type='text/css'>.pbar-6310-template-".esc_attr($ids)."-value {
          background: linear-gradient(to right, \${pbar_progress_bar_label_color},\${pbar_progress_bar_label_two_color}) !important;
          top: calc(-\${pbar_6310_value_font_size}px * 1.5 ) !important;
          width: calc(\${pbar_6310_value_font_size}px * 3 ) !important;
          height: calc(\${pbar_6310_value_font_size}px * 1.2 ) !important;
        }</style>`).appendTo('.pbar-6310-preview');

        jQuery(`<style type='text/css'>.pbar-6310-template-".esc_attr($ids)."-value:after {
          border: calc(\${pbar_6310_value_font_size}px / 2) solid transparent !important;
          top: \${pbar_6310_value_font_size}px !important;
          border-top-color: \${pbar_progress_bar_label_two_color} !important;
          border-bottom-width: 0px !important;
          border-right-width: 0px !important;
        }</style>`).appendTo('.pbar-6310-preview');  
    });
  });
";

wp_register_script( "pbar-6310-template-".esc_attr($ids)."-js", "" );
wp_enqueue_script( "pbar-6310-template-".esc_attr($ids)."-js" );
wp_add_inline_script( "pbar-6310-template-".esc_attr($ids)."-js", $jsCode );
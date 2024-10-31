<?php
$jsCode = "
jQuery(document).ready(function() {
  //General Setting
  jQuery(`
        #pbar_6310_bar_radius,
        #pbar_progress_bar_background_color,
        #pbar_progress_bar_color,
        #pbar_progress_bar_alternate_color,
        #pbar_progress_bar_margin_top,
        #pbar_progress_bar_margin_bottom,
        #pbar_6310_bar_height,
        #pbar_progress_title_background_color,
        #pbar_progress_tooltip_background_size,
        #pbar_progress_tooltip_background_color,
        #pbar_6310_value_font_size,
        #pbar_6310_value_font_color,
        #pbar_6310_value_font_hover_color,
        #pbar_6310_value_font_weight,
        #pbar_6310_value_font_family ,
        #pbar_6310_title_height
       
      `).on('change', function() {
        var pbar_6310_bar_radius = parseInt(jQuery('#pbar_6310_bar_radius').val());  
        var pbar_progress_bar_background_color = jQuery('#pbar_progress_bar_background_color').val();
        var pbar_progress_bar_color = jQuery('#pbar_progress_bar_color').val();
        var pbar_progress_bar_alternate_color = jQuery('#pbar_progress_bar_alternate_color').val();
        var pbar_progress_bar_margin_top = parseInt(jQuery('#pbar_progress_bar_margin_top').val());
        var pbar_progress_bar_margin_bottom = parseInt(jQuery('#pbar_progress_bar_margin_bottom').val());
        var pbar_6310_bar_height = parseInt(jQuery('#pbar_6310_bar_height').val());
        var pbar_progress_title_background_color = jQuery('#pbar_progress_title_background_color').val();
        var pbar_progress_tooltip_background_size = parseInt(jQuery('#pbar_progress_tooltip_background_size').val());
        var pbar_progress_tooltip_background_color = jQuery('#pbar_progress_tooltip_background_color').val();  
        var pbar_6310_value_font_size = parseInt(jQuery('#pbar_6310_value_font_size').val());
        var pbar_6310_value_font_color = jQuery('#pbar_6310_value_font_color').val();
        var pbar_6310_value_font_hover_color = jQuery('#pbar_6310_value_font_hover_color').val();
        var pbar_6310_value_font_weight = jQuery('#pbar_6310_value_font_weight').val();
        var pbar_6310_value_font_family = jQuery('#pbar_6310_value_font_family').val();
        var pbar_6310_title_height = parseInt(jQuery('#pbar_6310_title_height').val());
       
        jQuery(`<style type='text/css'>.pbar-6310-template-".esc_attr($ids)."-title{  
          background: \${pbar_progress_title_background_color} !important;
          height: \${pbar_6310_title_height}px !important;
        }</style>`).appendTo('.pbar-6310-preview');

        jQuery(`<style type='text/css'>.pbar-6310-template-".esc_attr($ids)."-wrapper{
          height: \${pbar_6310_bar_height}px !important;
          line-height: \${pbar_6310_bar_height}px !important;
          background: \${pbar_progress_bar_background_color} !important;
          margin-bottom: \${pbar_progress_bar_margin_bottom}px !important;
          margin-top: \${pbar_progress_bar_margin_top}px !important;
        }</style>`).appendTo('.pbar-6310-preview');

        jQuery(`<style type='text/css'>.pbar-6310-template-".esc_attr($ids)."-bar{
          background-color: \${pbar_progress_bar_color} !important;  
          background-image: linear-gradient(
            45deg, \${pbar_progress_bar_alternate_color} 25%,transparent 25%,transparent 50%, \${pbar_progress_bar_alternate_color} 50%, \${pbar_progress_bar_alternate_color} 75%,transparent 75%,transparent) !important; 
        }</style>`).appendTo('.pbar-6310-preview');

        jQuery(`<style type='text/css'>.pbar-6310-template-26-title-data-container {
          padding: 10px calc(\${pbar_progress_tooltip_background_size}px / 2) !important;
          background:\${pbar_progress_tooltip_background_color} !important;
          font-size:\${pbar_6310_value_font_size}px !important;
          color:\${pbar_6310_value_font_color} !important;
          font-weight:\${pbar_6310_value_font_weight} !important;         
          font-family:\${pbar_6310_value_font_family} !important; 
          bottom: calc(\${pbar_6310_bar_height}px + 8px) !important;  
        }</style>`).appendTo('.pbar-6310-preview');
        jQuery(`<style type='text/css'>.pbar-6310-template-26-title-data-container::after {
          border-top: 10px solid \${pbar_progress_tooltip_background_color} !important;
        }</style>`).appendTo('.pbar-6310-preview');

        jQuery(`<style type='text/css'>.pbar-6310-template-".esc_attr($ids).":hover .pbar-6310-template-26-title-data-container {
          color: \${pbar_6310_value_font_hover_color} !important;    
        }</style>`).appendTo('.pbar-6310-preview');  

    });
  });
";

wp_register_script( "pbar-6310-template-".esc_attr($ids)."-js", "" );
wp_enqueue_script( "pbar-6310-template-".esc_attr($ids)."-js" );
wp_add_inline_script( "pbar-6310-template-".esc_attr($ids)."-js", $jsCode );
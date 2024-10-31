<?php
$jsCode = "
jQuery(document).ready(function() {
  //General Setting
  jQuery(`
        #pbar_progress_bar_first_color,
        #pbar_progress_bar_second_color,
        #pbar_progress_bar_third_color,
        #pbar_6310_bar_radius,
        #pbar_progress_bar_background_color,
        #pbar_progress_bar_margin_top,
        #pbar_progress_bar_margin_bottom,
        #pbar_6310_bar_height,
        #pbar_progress_tooltip_background_size,
        #pbar_progress_tooltip_background_color,

        #pbar_6310_title_font_size,
        #pbar_6310_title_line_height,
        #pbar_6310_title_font_color,
        #pbar_6310_title_font_hover_color,
        #pbar_6310_title_font_weight,
        #pbar_6310_title_text_transform,
        #pbar_6310_title_text_align,
        #pbar_6310_title_font_family
      
      `).on('change', function() {
        
        var pbar_progress_bar_first_color = jQuery('#pbar_progress_bar_first_color').val();
        var pbar_progress_bar_second_color = jQuery('#pbar_progress_bar_second_color').val();
        var pbar_progress_bar_third_color = jQuery('#pbar_progress_bar_third_color').val();
        var pbar_progress_bar_background_color = jQuery('#pbar_progress_bar_background_color').val();
        var pbar_6310_bar_radius = parseInt(jQuery('#pbar_6310_bar_radius').val());
        var pbar_progress_bar_margin_top = parseInt(jQuery('#pbar_progress_bar_margin_top').val());
        var pbar_progress_bar_margin_bottom = parseInt(jQuery('#pbar_progress_bar_margin_bottom').val());
        var pbar_6310_bar_height = parseInt(jQuery('#pbar_6310_bar_height').val());

        var pbar_6310_title_font_size = parseInt(jQuery('#pbar_6310_title_font_size').val());
        var pbar_6310_title_line_height = parseInt(jQuery('#pbar_6310_title_line_height').val());
        var pbar_6310_title_font_color = jQuery('#pbar_6310_title_font_color').val();
        var pbar_6310_title_font_hover_color = jQuery('#pbar_6310_title_font_hover_color').val();
        var pbar_6310_title_font_weight = jQuery('#pbar_6310_title_font_weight').val();
        var pbar_6310_title_text_transform = jQuery('#pbar_6310_title_text_transform').val();
        var pbar_6310_title_text_align = jQuery('#pbar_6310_title_text_align').val();
        var pbar_6310_title_font_family = jQuery('#pbar_6310_title_font_family').val();
       
        jQuery(`<style type='text/css'>.pbar-6310-template-".esc_attr($ids)."-bar{   
          background: linear-gradient(to right, \${pbar_progress_bar_first_color}, \${pbar_progress_bar_second_color}, \${pbar_progress_bar_third_color}) !important;    
        }</style>`).appendTo('.pbar-6310-preview');  

        jQuery(`<style type='text/css'>.pbar-6310-template-".esc_attr($ids)."-wrapper {
          height:\${pbar_6310_bar_height}px !important;
          background: \${pbar_progress_bar_background_color} !important;
          margin-top: \${pbar_progress_bar_margin_top}px !important; 
          margin-bottom: \${pbar_progress_bar_margin_bottom}px !important;
          border-radius:\${pbar_6310_bar_radius}px !important;
        }</style>`).appendTo('.pbar-6310-preview');
        jQuery(`<style type='text/css'></style>`).appendTo('.pbar-6310-preview'); 

        jQuery(`<style type='text/css'>.pbar-6310-template-".esc_attr($ids)."-value {
          font-size:\${pbar_6310_title_font_size}px !important;
          line-height:\${pbar_6310_title_line_height}px !important; 
          color:\${pbar_6310_title_font_color} !important; 
          font-weight:\${pbar_6310_title_font_weight} !important;
          text-transform:\${pbar_6310_title_text_transform} !important;
          text-align:\${pbar_6310_title_text_align} !important;
          font-family:\${pbar_6310_title_font_family} !important;    
        }</style>`).appendTo('.pbar-6310-preview');
        
        jQuery(`<style type='text/css'>.pbar-6310-template-".esc_attr($ids).":hover .pbar-6310-template-".esc_attr($ids)."-value { 
          color:\${pbar_6310_title_font_hover_color} !important;             
        }</style>`).appendTo('.pbar-6310-preview');
  
    });
  });
";

wp_register_script( "pbar-6310-template-".esc_attr($ids)."-js", "" );
wp_enqueue_script( "pbar-6310-template-".esc_attr($ids)."-js" );
wp_add_inline_script( "pbar-6310-template-".esc_attr($ids)."-js", $jsCode );
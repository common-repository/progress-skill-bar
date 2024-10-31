<?php
$jsCode = "
jQuery(document).ready(function() {
  //General Setting
  jQuery(`  
      #pbar_6310_title_font_size,
      #pbar_6310_title_line_height,
      #pbar_6310_title_font_color,
      #pbar_6310_title_font_hover_color,
      #pbar_6310_title_font_weight,
      #pbar_6310_title_text_transform,
      #pbar_6310_title_text_align,
      #pbar_6310_title_font_family,
      #pbar_6310_title_padding_top,
      #pbar_6310_title_padding_bottom,

      #pbar_6310_value_font_size,
      #pbar_6310_value_font_color,
      #pbar_6310_value_font_hover_color,
      #pbar_6310_value_font_weight,
      #pbar_6310_value_font_family  

      `).on('change', function() {
        var pbar_6310_title_font_size = parseInt(jQuery('#pbar_6310_title_font_size').val());
        var pbar_6310_title_line_height = parseInt(jQuery('#pbar_6310_title_line_height').val());
        var pbar_6310_title_font_color = jQuery('#pbar_6310_title_font_color').val();
        var pbar_6310_title_font_hover_color = jQuery('#pbar_6310_title_font_hover_color').val();
        var pbar_6310_title_font_weight = jQuery('#pbar_6310_title_font_weight').val();
        var pbar_6310_title_text_transform = jQuery('#pbar_6310_title_text_transform').val();
        var pbar_6310_title_text_align = jQuery('#pbar_6310_title_text_align').val();
        var pbar_6310_title_font_family = jQuery('#pbar_6310_title_font_family').val();
        var pbar_6310_title_padding_top = parseInt(jQuery('#pbar_6310_title_padding_top').val());
        var pbar_6310_title_padding_bottom = parseInt(jQuery('#pbar_6310_title_padding_bottom').val());

        var pbar_6310_value_font_size = parseInt(jQuery('#pbar_6310_value_font_size').val());
        var pbar_6310_value_font_color = jQuery('#pbar_6310_value_font_color').val();
        var pbar_6310_value_font_hover_color = jQuery('#pbar_6310_value_font_hover_color').val();
        var pbar_6310_value_font_weight = jQuery('#pbar_6310_value_font_weight').val();
        var pbar_6310_value_font_family = jQuery('#pbar_6310_value_font_family').val();

        jQuery(`<style type='text/css'>.pbar-6310-template-".esc_attr($ids)."-title {   
          font-size:\${pbar_6310_title_font_size}px !important;
          line-height:\${pbar_6310_title_line_height}px !important; 
          color:\${pbar_6310_title_font_color} !important; 
          font-weight:\${pbar_6310_title_font_weight} !important;
          text-transform:\${pbar_6310_title_text_transform} !important;
          text-align:\${pbar_6310_title_text_align} !important;
          font-family:\${pbar_6310_title_font_family} !important;
          padding-top:\${pbar_6310_title_padding_top}px !important;
          padding-bottom:\${pbar_6310_title_padding_bottom}px !important;
        }</style>`).appendTo('.pbar-6310-preview');

        jQuery(`<style type='text/css'>.pbar-6310-template-".esc_attr($ids).":hover .pbar-6310-template-".esc_attr($ids)."-title {
          color:\${pbar_6310_title_font_hover_color} !important; 
        }</style>`).appendTo('.pbar-6310-preview');

        jQuery(`<style type='text/css'>.pbar-6310-template-".esc_attr($ids)."-value {
          font-size:\${pbar_6310_value_font_size}px !important;
          color:\${pbar_6310_value_font_color} !important;
          font-weight:\${pbar_6310_value_font_weight} !important;         
          font-family:\${pbar_6310_value_font_family} !important;        
        }</style>`).appendTo('.pbar-6310-preview');
        
        jQuery(`<style type='text/css'>.pbar-6310-template-".esc_attr($ids).":hover .pbar-6310-template-".esc_attr($ids)."-value {         
          color:\${pbar_6310_value_font_hover_color} !important;
        }</style>`).appendTo('.pbar-6310-preview');  
    });
 
  });
"
;

wp_register_script( "pbar-6310-common-js", "" );
wp_enqueue_script( "pbar-6310-common-js" );
wp_add_inline_script( "pbar-6310-common-js", $jsCode );

?>

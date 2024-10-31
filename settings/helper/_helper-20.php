<?php
$jsCode = "
jQuery(document).ready(function() {
  //General Setting
  jQuery(`
        #pbar_6310_bar_radius,
        #pbar_progress_bar_border_size,
        #pbar_progress_bar_border_color,
        #pbar_progress_bar_after_effect_color,
        #pbar_progress_bar_background_color,
        #pbar_progress_bar_color,
        #pbar_progress_bar_alternate_color,
        #pbar_progress_bar_margin_top,
        #pbar_progress_bar_margin_bottom,
        #pbar_6310_bar_height,

        #pbar_6310_title_font_size,
        #pbar_6310_title_line_height,
        #pbar_6310_title_font_color,
        #pbar_6310_title_font_hover_color,
        #pbar_6310_title_font_weight,
        #pbar_6310_title_text_transform,
        #pbar_6310_title_text_align,
        #pbar_6310_title_font_family,
        #pbar_6310_title_padding_top,
        #pbar_6310_title_padding_bottom
      `).on('change', function() {
        
        var pbar_6310_bar_radius = parseInt(jQuery('#pbar_6310_bar_radius').val());  
        var pbar_progress_bar_border_size = parseInt(jQuery('#pbar_progress_bar_border_size').val());
        var pbar_progress_bar_border_color = jQuery('#pbar_progress_bar_border_color').val();
        var pbar_progress_bar_alternate_color = jQuery('#pbar_progress_bar_alternate_color').val();
        var pbar_progress_bar_after_effect_color = jQuery('#pbar_progress_bar_after_effect_color').val();
        var pbar_progress_bar_background_color = jQuery('#pbar_progress_bar_background_color').val();
        var pbar_progress_bar_color = jQuery('#pbar_progress_bar_color').val();
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
        var pbar_6310_title_padding_top = parseInt(jQuery('#pbar_6310_title_padding_top').val());
        var pbar_6310_title_padding_bottom = parseInt(jQuery('#pbar_6310_title_padding_bottom').val());

        jQuery(`<style type='text/css'>.pbar-6310-template-".esc_attr($ids)."{
          margin-bottom: \${pbar_progress_bar_margin_bottom}px !important;
          margin-top: \${pbar_progress_bar_margin_top}px !important;
        }</style>`).appendTo('.pbar-6310-preview');

        jQuery(`<style type='text/css'>.pbar-6310-template-".esc_attr($ids)."-wrapper{
          height: \${pbar_6310_bar_height}px !important;
          background: \${pbar_progress_bar_background_color} !important;
          border-radius: \${pbar_6310_bar_radius}px !important;
        }</style>`).appendTo('.pbar-6310-preview');

        jQuery(`<style type='text/css'>.pbar-6310-template-".esc_attr($ids)."-bar{
          border:\${pbar_progress_bar_border_size}px solid \${pbar_progress_bar_border_color} !important;
          border-radius: \${pbar_6310_bar_radius}px !important;
          background: \${pbar_progress_bar_color} !important;
          background-image: linear-gradient(
          45deg,\${pbar_progress_bar_alternate_color} 25%,transparent 25%,transparent 50%,\${pbar_progress_bar_alternate_color} 50%,\${pbar_progress_bar_alternate_color} 75%,transparent 75%,transparent) !important;
        }</style>`).appendTo('.pbar-6310-preview');

        jQuery(`<style type='text/css'>.pbar-6310-template-".esc_attr($ids)."-bar:after{
          top: calc(-\${pbar_6310_bar_height}px / 2 + \${pbar_progress_bar_border_size}px) !important;
          right: calc(-\${pbar_progress_bar_border_size}px * 3 ) !important;
          width: calc( \${pbar_6310_bar_height}px * 1.5 - (\${pbar_progress_bar_border_size}px * 2) ) !important;
          height: calc( \${pbar_6310_bar_height}px * 1.5 - (\${pbar_progress_bar_border_size}px * 2) ) !important;
          background: \${pbar_progress_bar_after_effect_color} !important;
          border:  \${pbar_progress_bar_border_size}px solid #fff !important;
          outline: \${pbar_progress_bar_border_size}px solid \${pbar_progress_bar_after_effect_color} !important;
        }</style>`).appendTo('.pbar-6310-preview');

        jQuery(`<style type='text/css'>.pbar-6310-template-".esc_attr($ids)."-bar::before{
          width: calc( \${pbar_6310_bar_height}px * 1.5 - (\${pbar_progress_bar_border_size}px * 2) ) !important;
          height: calc( \${pbar_6310_bar_height}px * 1.5 - (\${pbar_progress_bar_border_size}px * 2) ) !important;
          background: \${pbar_progress_bar_after_effect_color} !important;
          border-left:\${pbar_progress_bar_border_size}px solid #fff !important;
          border-bottom: \${pbar_progress_bar_border_size}px solid #fff !important;
          outline: \${pbar_progress_bar_border_size}px solid \${pbar_progress_bar_after_effect_color} !important;
          top: calc(-\${pbar_6310_bar_height}px / 2 + \${pbar_progress_bar_border_size}px) !important;
        }</style>`).appendTo('.pbar-6310-preview');

        jQuery(`<style type='text/css'>.pbar-6310-template-".esc_attr($ids)."-value {
          font-size:\${pbar_6310_title_font_size}px !important;
          line-height:\${pbar_6310_title_line_height}px !important; 
          color:\${pbar_6310_title_font_color} !important; 
          font-weight:\${pbar_6310_title_font_weight} !important;
          text-transform:\${pbar_6310_title_text_transform} !important;
          text-align:\${pbar_6310_title_text_align} !important;
          font-family:\${pbar_6310_title_font_family} !important;
          padding-top: 0 !important;
          padding-bottom: 0 !important;    
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
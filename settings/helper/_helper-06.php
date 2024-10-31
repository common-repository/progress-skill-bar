<?php
$jsCode = "
jQuery(document).ready(function() {
  //General Setting
  jQuery(`
        #pbar_progress_bar_border_color,     
        #pbar_inner_section_border_color,
        #pbar_progress_bar_background_color,
        #pbar_progress_bar_color,
        #pbar_progress_bar_margin_top,
        #pbar_6310_title_font_hover_color,
        #pbar_progress_bar_margin_bottom,
        #pbar_progress_bar_border_1st_color,
        #pbar_progress_bar_border_2nd_color,
        #pbar_progress_bar_border_3rd_color,
        #pbar_progress_bar_border_4th_color       
      `).on('change', function() {
        
        var pbar_progress_bar_border_color = jQuery('#pbar_progress_bar_border_color').val();
        var pbar_6310_title_font_hover_color = jQuery('#pbar_6310_title_font_hover_color').val();
        var pbar_inner_section_border_color = jQuery('#pbar_inner_section_border_color').val();
        var pbar_progress_bar_background_color = jQuery('#pbar_progress_bar_background_color').val();
        var pbar_progress_bar_color = jQuery('#pbar_progress_bar_color').val();
        var pbar_progress_bar_margin_top = parseInt(jQuery('#pbar_progress_bar_margin_top').val());
        var pbar_progress_bar_margin_bottom = parseInt(jQuery('#pbar_progress_bar_margin_bottom').val());
        var pbar_progress_bar_border_1st_color = jQuery('#pbar_progress_bar_border_1st_color').val();
        var pbar_progress_bar_border_2nd_color = jQuery('#pbar_progress_bar_border_2nd_color').val();
        var pbar_progress_bar_border_3rd_color = jQuery('#pbar_progress_bar_border_3rd_color').val();
        var pbar_progress_bar_border_4th_color = jQuery('#pbar_progress_bar_border_4th_color').val();


        jQuery(`<style type='text/css'>.pbar-6310-template-".esc_attr($ids)."-wrapper {
          margin-top: \${pbar_progress_bar_margin_top}px !important;
          margin-bottom: \${pbar_progress_bar_margin_bottom}px !important;
        }</style>`).appendTo('.pbar-6310-preview');

        jQuery(`<style type='text/css'>.pbar-6310-template-".esc_attr($ids)."-wrapper:hover .pbar-6310-template-".esc_attr($ids)."-title{
          color: \${pbar_6310_title_font_hover_color} !important;     
        }</style>`).appendTo('.pbar-6310-preview');

        jQuery(`<style type='text/css'>.pbar-6310-row .pbar-6310-template-".esc_attr($ids)."-common-overlay .pbar-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(4n+1) .pbar-6310-template-".esc_attr($ids)."-bar{
          border-color: \${pbar_progress_bar_border_1st_color} !important;;
        }</style>`).appendTo('.pbar-6310-preview');
        jQuery(`<style type='text/css'>.pbar-6310-row .pbar-6310-template-".esc_attr($ids)."-common-overlay .pbar-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(4n+2) .pbar-6310-template-".esc_attr($ids)."-bar{
          border-color:\${pbar_progress_bar_border_2nd_color} !important;;
        }</style>`).appendTo('.pbar-6310-preview');
        jQuery(`<style type='text/css'>.pbar-6310-row .pbar-6310-template-".esc_attr($ids)."-common-overlay .pbar-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(4n+3) .pbar-6310-template-".esc_attr($ids)."-bar{
          border-color: \${pbar_progress_bar_border_3rd_color} !important;;
        }</style>`).appendTo('.pbar-6310-preview');
        jQuery(`<style type='text/css'>.pbar-6310-row .pbar-6310-template-".esc_attr($ids)."-common-overlay .pbar-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(4n+4) .pbar-6310-template-".esc_attr($ids)."-bar{
          border-color: \${pbar_progress_bar_border_4th_color} !important;;
        }</style>`).appendTo('.pbar-6310-preview');
        jQuery(`<style type='text/css'>.pbar-6310-row .pbar-6310-template-".esc_attr($ids)."-common-overlay .pbar-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(4n+1) .pbar-6310-template-".esc_attr($ids)."-value{
          color: \${pbar_progress_bar_border_1st_color} !important;;
        }</style>`).appendTo('.pbar-6310-preview');
        jQuery(`<style type='text/css'>.pbar-6310-row .pbar-6310-template-".esc_attr($ids)."-common-overlay .pbar-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(4n+2) .pbar-6310-template-".esc_attr($ids)."-value{
          color: \${pbar_progress_bar_border_2nd_color} !important;;
        }</style>`).appendTo('.pbar-6310-preview');
        jQuery(`<style type='text/css'>.pbar-6310-row .pbar-6310-template-".esc_attr($ids)."-common-overlay .pbar-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(4n+3) .pbar-6310-template-".esc_attr($ids)."-value {
          color: \${pbar_progress_bar_border_3rd_color} !important;;
        }</style>`).appendTo('.pbar-6310-preview');
        jQuery(`<style type='text/css'>.pbar-6310-row .pbar-6310-template-".esc_attr($ids)."-common-overlay .pbar-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(4n+4) .pbar-6310-template-".esc_attr($ids)."-value {
          color: \${pbar_progress_bar_border_4th_color} !important;;
        }</style>`).appendTo('.pbar-6310-preview');

    });
  });
";

wp_register_script( "pbar-6310-template-".esc_attr($ids)."-js", "" );
wp_enqueue_script( "pbar-6310-template-".esc_attr($ids)."-js" );
wp_add_inline_script( "pbar-6310-template-".esc_attr($ids)."-js", $jsCode );
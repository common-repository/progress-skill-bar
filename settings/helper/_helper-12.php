<?php
$jsCode = "
jQuery(document).ready(function() {
  //General Setting
  jQuery(`
        #pbar_progress_bar_border_size,
        #pbar_progress_bar_border_color,
        #pbar_progress_bar_background_color,
        #pbar_progress_bar_color,
        #pbar_progress_bar_margin_top,
        #pbar_progress_bar_margin_bottom,
        #pbar_6310_bar_height,
        #pbar_progress_bar_background_first_color,
        #pbar_progress_bar_background_second_color,
        #pbar_progress_bar_background_third_color,
        #pbar_progress_bar_background_forth_color,
        #pbar_progress_bar_background_fifth_color,
        #pbar_progress_bar_background_six_color
      `).on('change', function() {
        
        var pbar_progress_bar_border_size = parseInt(jQuery('#pbar_progress_bar_border_size').val());
        var pbar_progress_bar_border_color = jQuery('#pbar_progress_bar_border_color').val();
        var pbar_progress_bar_background_color = jQuery('#pbar_progress_bar_background_color').val();
        var pbar_progress_bar_color = jQuery('#pbar_progress_bar_color').val();
        var pbar_progress_bar_margin_top = parseInt(jQuery('#pbar_progress_bar_margin_top').val());
        var pbar_progress_bar_margin_bottom = parseInt(jQuery('#pbar_progress_bar_margin_bottom').val());
        var pbar_6310_bar_height = parseInt(jQuery('#pbar_6310_bar_height').val());
        var pbar_progress_bar_background_first_color = jQuery('#pbar_progress_bar_background_first_color').val();
        var pbar_progress_bar_background_second_color = jQuery('#pbar_progress_bar_background_second_color').val();
        var pbar_progress_bar_background_third_color = jQuery('#pbar_progress_bar_background_third_color').val();
        var pbar_progress_bar_background_forth_color = jQuery('#pbar_progress_bar_background_forth_color').val();
        var pbar_progress_bar_background_fifth_color = jQuery('#pbar_progress_bar_background_fifth_color').val();
        var pbar_progress_bar_background_six_color = jQuery('#pbar_progress_bar_background_six_color').val();

        jQuery(`<style type='text/css'>.pbar-6310-template-".esc_attr($ids)."{
          margin-bottom: \${pbar_progress_bar_margin_bottom}px !important;
          margin-top: \${pbar_progress_bar_margin_top}px !important;
        }</style>`).appendTo('.pbar-6310-preview');

        jQuery(`<style type='text/css'>.pbar-6310-template-".esc_attr($ids)."-wrapper{
            height: \${pbar_6310_bar_height}px !important;
            background:  \${pbar_progress_bar_background_color} !important;
        }</style>`).appendTo('.pbar-6310-preview');

        jQuery(`<style type='text/css'>.pbar-6310-template-".esc_attr($ids)."-bar{        
          border-bottom: \${pbar_progress_bar_border_size}px dotted !important;
        }</style>`).appendTo('.pbar-6310-preview');

        jQuery(`<style type='text/css'>.pbar-6310-template-".esc_attr($ids)."-bar:before{
          border-bottom: 20px solid \${pbar_progress_bar_border_color} !important;
        }</style>`).appendTo('.pbar-6310-preview');

        jQuery(`<style type='text/css'>.pbar-6310-row .pbar-6310-template-".esc_attr($ids)."-common-overlay .pbar-6310-template-".esc_attr($ids).":nth-child(6n+1) .pbar-6310-template-".esc_attr($ids)."-bar{
          border-color:  \${pbar_progress_bar_background_first_color} !important;
        }</style>`).appendTo('.pbar-6310-preview');

        jQuery(`<style type='text/css'>.pbar-6310-row .pbar-6310-template-".esc_attr($ids)."-common-overlay .pbar-6310-template-".esc_attr($ids).":nth-child(6n+2) .pbar-6310-template-".esc_attr($ids)."-bar{
          border-color: \${pbar_progress_bar_background_second_color} !important;
        }</style>`).appendTo('.pbar-6310-preview');
        jQuery(`<style type='text/css'>.pbar-6310-row .pbar-6310-template-".esc_attr($ids)."-common-overlay .pbar-6310-template-".esc_attr($ids).":nth-child(6n+3) .pbar-6310-template-".esc_attr($ids)."-bar{
          border-color:\${pbar_progress_bar_background_third_color} !important;
        }</style>`).appendTo('.pbar-6310-preview');

        jQuery(`<style type='text/css'>.pbar-6310-row .pbar-6310-template-".esc_attr($ids)."-common-overlay .pbar-6310-template-".esc_attr($ids).":nth-child(6n+4) .pbar-6310-template-".esc_attr($ids)."-bar{
          border-color: \${pbar_progress_bar_background_forth_color} !important;
        }</style>`).appendTo('.pbar-6310-preview');

        jQuery(`<style type='text/css'>.pbar-6310-row .pbar-6310-template-".esc_attr($ids)."-common-overlay .pbar-6310-template-".esc_attr($ids).":nth-child(6n+5) .pbar-6310-template-".esc_attr($ids)."-bar{
          border-color: \${pbar_progress_bar_background_fifth_color} !important;
        }</style>`).appendTo('.pbar-6310-preview');

        jQuery(`<style type='text/css'>.pbar-6310-row .pbar-6310-template-".esc_attr($ids)."-common-overlay .pbar-6310-template-".esc_attr($ids).":nth-child(6n+6) .pbar-6310-template-".esc_attr($ids)."-bar{
          border-color: \${pbar_progress_bar_background_six_color} !important;
        }</style>`).appendTo('.pbar-6310-preview');

        jQuery(`<style type='text/css'>.pbar-6310-row .pbar-6310-template-".esc_attr($ids)."-common-overlay .pbar-6310-template-".esc_attr($ids).":nth-child(6n+1) .pbar-6310-template-".esc_attr($ids)."-bar:before{
          border-bottom-color: \${pbar_progress_bar_background_first_color} !important;
        }</style>`).appendTo('.pbar-6310-preview');

        jQuery(`<style type='text/css'>.pbar-6310-row .pbar-6310-template-".esc_attr($ids)."-common-overlay .pbar-6310-template-".esc_attr($ids).":nth-child(6n+2) .pbar-6310-template-".esc_attr($ids)."-bar:before{
          border-bottom-color: \${pbar_progress_bar_background_second_color} !important;
        }</style>`).appendTo('.pbar-6310-preview');

        jQuery(`<style type='text/css'>.pbar-6310-row .pbar-6310-template-".esc_attr($ids)."-common-overlay .pbar-6310-template-".esc_attr($ids).":nth-child(6n+3) .pbar-6310-template-".esc_attr($ids)."-bar:before{
          border-bottom-color:\${pbar_progress_bar_background_third_color} !important;
        }</style>`).appendTo('.pbar-6310-preview');

        jQuery(`<style type='text/css'>.pbar-6310-row .pbar-6310-template-".esc_attr($ids)."-common-overlay .pbar-6310-template-".esc_attr($ids).":nth-child(6n+4) .pbar-6310-template-".esc_attr($ids)."-bar:before{
          border-bottom-color: \${pbar_progress_bar_background_forth_color} !important;
        }</style>`).appendTo('.pbar-6310-preview');

        jQuery(`<style type='text/css'>.pbar-6310-row .pbar-6310-template-".esc_attr($ids)."-common-overlay .pbar-6310-template-".esc_attr($ids).":nth-child(6n+5) .pbar-6310-template-".esc_attr($ids)."-bar:before{
          border-bottom-color: \${pbar_progress_bar_background_fifth_color} !important;
        }</style>`).appendTo('.pbar-6310-preview');

        jQuery(`<style type='text/css'>.pbar-6310-row .pbar-6310-template-".esc_attr($ids)."-common-overlay .pbar-6310-template-".esc_attr($ids).":nth-child(6n+6) .pbar-6310-template-".esc_attr($ids)."-bar:before{
          border-bottom-color: \${pbar_progress_bar_background_six_color} !important;
        }</style>`).appendTo('.pbar-6310-preview');
            
    });
  });
";

wp_register_script( "pbar-6310-template-".esc_attr($ids)."-js", "" );
wp_enqueue_script( "pbar-6310-template-".esc_attr($ids)."-js" );
wp_add_inline_script( "pbar-6310-template-".esc_attr($ids)."-js", $jsCode );
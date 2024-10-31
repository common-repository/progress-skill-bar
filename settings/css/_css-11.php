<?php
  $titleFontFamily =  str_replace("+", " ", esc_attr($cssData['pbar_6310_title_font_family'])); 
 $cssCode = "
.pbar-6310-template-".esc_attr($ids)."{
  float: left;
  width: calc(100% - 30px);
  padding: 0 15px;
  z-index: 1;
  margin-bottom: ".esc_attr($cssData['pbar_progress_bar_margin_bottom'])."px;
  margin-top: ".esc_attr($cssData['pbar_progress_bar_margin_top'])."px;
}
.pbar-6310-template-".esc_attr($ids)."-wrapper{
  height: ".esc_attr($cssData['pbar_6310_bar_height'])."px;
  background:  ".esc_attr($cssData['pbar_progress_bar_background_color']).";
  border-width: ".esc_attr($cssData['pbar_progress_bar_border_size'])."px 0;
  border-style: solid none;
  border-color: ".esc_attr($cssData['pbar_progress_bar_border_color']).";
  border-radius: ".esc_attr($cssData['pbar_6310_bar_radius'])."px;
  box-shadow: none;
  overflow: visible;
  position: relative;
}
.pbar-6310-template-".esc_attr($ids)."-bar{
  border: none;
  box-shadow: none;
  border-radius: 0;
  background: transparent;
  position: relative;
  animation: animate-progress-".esc_attr($ids)." ".esc_attr($cssData['animation_duration'])."s;
}
 .pbar-6310-template-".esc_attr($ids)."-bar:before{
  content: '';
  position: absolute;
  right: 0;
  box-sizing: border-box;
  border-radius: 50%;
  width: calc( ".esc_attr($cssData['pbar_6310_bar_height'])."px * 2 - (".esc_attr($cssData['pbar_progress_bar_border_size'])."px * 2) );
  height: calc( ".esc_attr($cssData['pbar_6310_bar_height'])."px * 2 - (".esc_attr($cssData['pbar_progress_bar_border_size'])."px * 2) );  
  border: ".esc_attr($cssData['pbar_progress_bar_border_size'])."px solid ".esc_attr($cssData['pbar_progress_bar_border_color']).";
  top: calc(-".esc_attr($cssData['pbar_6310_bar_height'])."px / 2 );
  background:  ".esc_attr($cssData['pbar_progress_bar_background_color']).";
  
}
.pbar-6310-template-".esc_attr($ids)."-title{
  display: flex;
}

.pbar-6310-template-".esc_attr($ids)."-value {
  display: flex;
  margin: 0 5px; 
  padding-top: 0;
  padding-bottom: 0;  
}
.pbar-6310-template-".esc_attr($ids).":hover .pbar-6310-template-".esc_attr($ids)."-value{
  color: ".esc_attr($cssData['pbar_6310_title_font_hover_color']).";
}

@-webkit-keyframes animate-progress-".esc_attr($ids)."{
  0%{ width: 0; }
}
@keyframes animate-progress-".esc_attr($ids)."{
  0%{ width: 0; }
}
 
  ";

  wp_register_style( "pbar-6310-template-".esc_attr($ids)."-css", "" );
  wp_enqueue_style( "pbar-6310-template-".esc_attr($ids)."-css" );
  wp_add_inline_style( "pbar-6310-template-".esc_attr($ids)."-css", $cssCode );
?>

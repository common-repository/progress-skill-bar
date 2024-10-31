<?php
 $titleFontFamily =  str_replace("+", " ", esc_attr($cssData['pbar_6310_title_font_family'])); 
$cssCode = " 
.pbar-6310-template-".esc_attr($ids)." {
  float: left;
  width: calc(100% - 30px);
  padding: 0 15px;
  margin-top: ".esc_attr($cssData['pbar_progress_bar_margin_top'])."px;
  margin-bottom: ".esc_attr($cssData['pbar_progress_bar_margin_bottom'])."px;
  z-index: 1;
}

.pbar-6310-template-".esc_attr($ids)."-wrapper {
  height: ".esc_attr($cssData['pbar_6310_bar_height'])."px;
  border: ".esc_attr($cssData['pbar_progress_bar_border_size'])."px solid ".esc_attr($cssData['pbar_progress_bar_border_color']).";
  background:  ".esc_attr($cssData['pbar_progress_bar_background_color']).";
  border-radius: ".esc_attr($cssData['pbar_6310_bar_radius'])."px;
  box-shadow: none;
  overflow: visible;
  position: relative;
}
.pbar-6310-template-".esc_attr($ids)."-title{
  display: flex;
}
.pbar-6310-template-".esc_attr($ids)."-value{
  margin: 0 5px;  
  display: flex; 
  padding-top: 0;
  padding-bottom: 0;
}
.pbar-6310-template-".esc_attr($ids).":hover .pbar-6310-template-".esc_attr($ids)."-value{
  color: ".esc_attr($cssData['pbar_6310_title_font_hover_color']).";
}
.pbar-6310-template-".esc_attr($ids)."-bar {
  border-radius: ".esc_attr($cssData['pbar_6310_bar_radius'])."px;
  box-shadow: none;
  position: relative;
  animation: animate-positive ".esc_attr($cssData['animation_duration'])."s;
  height: 100%;
  background: ".esc_attr($cssData['pbar_progress_bar_color']).";
}

.pbar-6310-template-".esc_attr($ids)."-bar:after{
  content: '';
  width: calc(".esc_attr($cssData['pbar_6310_bar_height'])."px * 2 - ".esc_attr($cssData['pbar_progress_bar_border_size'])."px * 2);
  height: calc(".esc_attr($cssData['pbar_6310_bar_height'])."px * 2 - ".esc_attr($cssData['pbar_progress_bar_border_size'])."px * 2);
  background: ".esc_attr($cssData['pbar_progress_bar_color']).";
  border: calc(".esc_attr($cssData['pbar_progress_bar_border_size'])."px * 1.5) double #fff;
  position: absolute;
  top: calc(-".esc_attr($cssData['pbar_6310_bar_height'])."px / 2);
  right: -10px;
  box-sizing: border-box;
}
.pbar-6310-template-".esc_attr($ids)." .pbar-6310-template-".esc_attr($ids)."-bar:after{
  background: ".esc_attr($cssData['pbar_progress_bar_color']).";
  outline: calc(".esc_attr($cssData['pbar_progress_bar_border_size'])."px / 2) solid ".esc_attr($cssData['pbar_progress_bar_color']).";
}
@-webkit-keyframes animate-positive{
  0% { width: 0; }
}
@keyframes animate-positive{
  0% { width: 0; }
}
 
  ";
  wp_register_style( "pbar-6310-template-".esc_attr($ids)."-css", "" );
  wp_enqueue_style( "pbar-6310-template-".esc_attr($ids)."-css" );
  wp_add_inline_style( "pbar-6310-template-".esc_attr($ids)."-css", $cssCode );

?>

<?php
$valueFontFamily = str_replace("+", " ", esc_attr($cssData['pbar_6310_value_font_family'])); 
$cssCode = " 
.pbar-6310-template-".esc_attr($ids)." {
  float: left;
  width: calc(100% - 30px);
  padding: 0 15px;
  margin-top:".esc_attr($cssData['pbar_progress_bar_margin_top'])."px; 
  margin-bottom:".esc_attr($cssData['pbar_progress_bar_margin_bottom'])."px;  
  overflow: hidden;
  z-index: 1;
}
.pbar-6310-template-".esc_attr($ids)."-title{
  padding-left: 5px;
}
.pbar-6310-template-".esc_attr($ids)."-wrapper {
  height: ".esc_attr($cssData['pbar_6310_bar_height'])."px;
  background:".esc_attr($cssData['pbar_progress_bar_background_color']).";
  border-radius: ".esc_attr($cssData['pbar_6310_bar_radius'])."px;
  position: relative;
  overflow: hidden;
}
 .pbar-6310-template-".esc_attr($ids)."-bar{
  box-shadow: none;
  border: none;
  position: relative;
  background: ".esc_attr($cssData['pbar_progress_bar_color']).";
  width:60%;
  -webkit-animation: animate-positive-23 ".esc_attr($cssData['animation_duration'])."s;
  animation: animate-positive-23 ".esc_attr($cssData['animation_duration'])."s;
  height: 100%;
  display: flex;
  align-items: center;
  position: absolute;
  top: 0;
}
.pbar-6310-template-".esc_attr($ids)."-value{  
  font-style: normal;
  background: ".esc_attr($cssData['pbar_progress_tooltip_background_color']).";
  font-size:".esc_attr($cssData['pbar_6310_value_font_size'])."px;
  font-weight:".esc_attr($cssData['pbar_6310_value_font_weight']).";
  color: ".esc_attr($cssData['pbar_6310_value_font_color']).";
  font-family: $valueFontFamily;
  text-align: right;
  width: calc(".esc_attr($cssData['pbar_6310_value_font_size'])."px * 3);
  float: right;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  right: 0;
  z-index: 1;
}
.pbar-6310-template-".esc_attr($ids).":hover .pbar-6310-template-".esc_attr($ids)."-value {
  color: ".esc_attr($cssData['pbar_6310_value_font_hover_color']).";
}

@-webkit-keyframes animate-positive-23{
  0%{ width: 0; }
}
@keyframes animate-positive-23{
  0%{ width: 0; }
}
  ";

  wp_register_style( "pbar-6310-template-".esc_attr($ids)."-css", "" );
  wp_enqueue_style( "pbar-6310-template-".esc_attr($ids)."-css" );
  wp_add_inline_style( "pbar-6310-template-".esc_attr($ids)."-css", $cssCode );
?>

<?php
$valueFontFamily = str_replace("+", " ", esc_attr($cssData['pbar_6310_value_font_family']));
$cssCode = " 
.pbar-6310-template-".esc_attr($ids)."{
  float: left;
  width: calc(100% - 30px);
  padding: 0 15px;
  margin-top: ".esc_attr($cssData['pbar_progress_bar_margin_top'])."px;
  margin-bottom: ".esc_attr($cssData['pbar_progress_bar_margin_bottom'])."px;  
  z-index: 1;
}
.pbar-6310-template-".esc_attr($ids)."-value{
  padding:".esc_attr($cssData['pbar_progress_tooltip_background_size'])."px ".esc_attr($cssData['pbar_progress_tooltip_background_size'] * 2)."px;
  background:".esc_attr($cssData['pbar_progress_tooltip_background_color']).";
  font-size: ".esc_attr($cssData['pbar_6310_value_font_size'])."px;
  font-weight: ".esc_attr($cssData['pbar_6310_value_font_weight']).";
  color: ".esc_attr($cssData['pbar_6310_value_font_color']).";
  font-family: $valueFontFamily;
  display: flex;
  justify-content: center;
  align-items: center;
  height: calc(".esc_attr($cssData['pbar_6310_bar_height'])."px + 20px);
}
.pbar-6310-template-".esc_attr($ids).":hover .pbar-6310-template-".esc_attr($ids)."-value{
  color: ".esc_attr($cssData['pbar_6310_value_font_hover_color']).";    
}
.pbar-6310-template-".esc_attr($ids)."-wrapper{
  border-radius: 0;
  box-shadow: none;
  overflow: visible;
  position: relative;
  display: flex;
  align-items: center;
  width: 100%;
  background: ".esc_attr($cssData['pbar_progress_bar_background2_color']).";
  padding: 15px;
}
.pbar-6310-template-".esc_attr($ids)."-bar{
  background:  ".esc_attr($cssData['pbar_progress_bar_color']).";
  border-right: none;
  border-radius: 0;
  box-shadow: none;
  position: relative;
  animation: animate-positive-28 ".esc_attr($cssData['animation_duration'])."s;
  height: 100%;
  border-top-right-radius: ".esc_attr($cssData['pbar_6310_bar_radius'])."px;
  border-bottom-right-radius: ".esc_attr($cssData['pbar_6310_bar_radius'])."px;
  background-image: linear-gradient(
    45deg,".esc_attr($cssData['pbar_progress_bar_alternate_color'])." 25%,transparent 25%,transparent 50%,".esc_attr($cssData['pbar_progress_bar_alternate_color'])." 50%,".esc_attr($cssData['pbar_progress_bar_alternate_color'])." 75%,transparent 75%,transparent) !important;
  background-size: 40px 40px !important;
}
.pbar-6310-template-".esc_attr($ids)."-bar-wrapper {
  width: 100%;
  height: ".esc_attr($cssData['pbar_6310_bar_height'])."px;
  background:  ".esc_attr($cssData['pbar_progress_bar_background_color']).";
  border-radius: ".esc_attr($cssData['pbar_6310_bar_radius'])."px;
}
.pbar-6310-template-".esc_attr($ids)."-title {
  float: left;
  width: 100%;
  color: #fff;
  font-size: 20px;
  margin-bottom: 5px;
  font-family: monospace;
}
@-webkit-keyframes animate-positive-28{
  0% { width: 0; }
}
@keyframes animate-positive-28{
  0% { width: 0; }
}
 
  ";

  wp_register_style( "pbar-6310-template-".esc_attr($ids)."-css", "" );
  wp_enqueue_style( "pbar-6310-template-".esc_attr($ids)."-css" );
  wp_add_inline_style( "pbar-6310-template-".esc_attr($ids)."-css", $cssCode );
?>

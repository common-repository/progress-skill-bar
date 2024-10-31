<?php
$valueFontFamily = str_replace("+", " ", esc_attr($cssData['pbar_6310_value_font_family'])); 

$cssCode = " 
.pbar-6310-template-" . esc_attr($ids) . "{
  float: left;
  width: calc(100% - 30px);
  padding: 0 15px;
  position: relative;
  margin-top: " . esc_attr($cssData['pbar_progress_bar_margin_top']) . "px;
  margin-bottom: " . esc_attr($cssData['pbar_progress_bar_margin_bottom']) . "px;  
  z-index: 1;
}
.pbar-6310-template-" . esc_attr($ids) . "-wrapper{
  height: " . esc_attr($cssData['pbar_6310_bar_height']) . "px;
  background: " . esc_attr($cssData['pbar_progress_bar_background_color']) . ";
  border-radius: 0;
  box-shadow: none;
  overflow: visible;
  position: relative;
}
.pbar-6310-template-" . esc_attr($ids) . "-bar{
  box-shadow: none;
  border-radius: 0;
  position: relative;
  animation: animate-positive ".esc_attr($cssData['animation_duration'])."s;
}
.pbar-6310-template-". esc_attr($ids) ."-value{
  width: ".esc_attr($cssData['pbar_6310_value_font_size'] * 3)."px;
  height: 100%;
  background: ".esc_attr($cssData['pbar_progress_tooltip_background_color']).";
  font-family: $valueFontFamily;
  font-size: ".esc_attr($cssData['pbar_6310_value_font_size'])."px;
  font-weight: ".esc_attr($cssData['pbar_6310_value_font_weight']).";
  color: ".esc_attr($cssData['pbar_6310_value_font_color']).";
  position: absolute;
  display: flex;
  justify-content: center;
  align-items: center;
  top: 0;
  left: 0;
}
.pbar-6310-template-".esc_attr($ids).":hover .pbar-6310-template-".esc_attr($ids)."-value{
  color: ".esc_attr($cssData['pbar_6310_value_font_hover_color']).";    
}
 .pbar-6310-template-" . esc_attr($ids) . "-bar:after,
 .pbar-6310-template-" . esc_attr($ids) . "-value:after{
  content: '';
  border-left: calc(" . esc_attr($cssData['pbar_6310_bar_height']) . "px / 2) solid ".esc_attr($cssData['pbar_progress_tooltip_background_color']).";
  border-top: calc(" . esc_attr($cssData['pbar_6310_bar_height']) . "px / 2) solid transparent;
  border-bottom: calc(" . esc_attr($cssData['pbar_6310_bar_height']) . "px / 2) solid transparent;
  position: absolute;
  top: 0;
  right:  calc(-" . esc_attr($cssData['pbar_6310_bar_height']) . "px / 2);  
}
.pbar-6310-template-" . esc_attr($ids) . "-bar:after{
   border-left-color: ".esc_attr($cssData['pbar_progress_bar_color']).";
   }
.pbar-6310-template-" . esc_attr($ids) . "-bar {
  box-shadow: none;
  border-radius: 0;
  position: relative;
  animation: animate-positive ".esc_attr($cssData['animation_duration'])."s;
}
.pbar-6310-template-" . esc_attr($ids) . "-bar {
  animation: animate-positive ".esc_attr($cssData['animation_duration'])."s;
      background-image: linear-gradient(
      45deg," . esc_attr($cssData['pbar_progress_bar_alternate_color']) . " 25%,transparent 25%,transparent 50%," . esc_attr($cssData['pbar_progress_bar_alternate_color']) . " 50%," . esc_attr($cssData['pbar_progress_bar_alternate_color']) . " 75%,transparent 75%,transparent);
      background-size: 40px 40px;
      float: left;
      width: 0;
      height: 100%;
      font-size: 12px;
      line-height: 20px;
      text-align: center;
      background-color: " . esc_attr($cssData['pbar_progress_bar_color']) . ";
      box-shadow: inset 0 -1px 0 rgb(0 0 0 / 15%);
      -o-transition: width .6s ease;
      transition: width .6s ease;
}
@-webkit-keyframes animate-positive{
  0%{ width: 0; }
}
 
  ";

wp_register_style("pbar-6310-template-" . esc_attr($ids) . "-css", "");
wp_enqueue_style("pbar-6310-template-" . esc_attr($ids) . "-css");
wp_add_inline_style("pbar-6310-template-" . esc_attr($ids) . "-css", $cssCode);

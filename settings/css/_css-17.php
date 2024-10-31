<?php
$valueFontFamily = str_replace("+", " ", esc_attr($cssData['pbar_6310_value_font_family']));
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
  overflow: visible;
  box-shadow: none;
  position: relative;
  border-radius: ".esc_attr($cssData['pbar_6310_bar_radius'])."px;
}
.pbar-6310-template-".esc_attr($ids)."-bar{
  background:  ".esc_attr($cssData['pbar_progress_bar_color']).";
  box-shadow: none;
  border-bottom: ".esc_attr($cssData['pbar_6310_bar_height'])."px solid ".esc_attr($cssData['pbar_progress_bar_color']).";
  position: relative;
  border-radius: ".esc_attr($cssData['pbar_6310_bar_radius'])."px;
  -webkit-animation: animate-positive-17 ".esc_attr($cssData['animation_duration'])."s;
  animation: animate-positive-17 ".esc_attr($cssData['animation_duration'])."s;
}
 .pbar-6310-template-".esc_attr($ids)."-value{
  height: ".esc_attr($cssData['pbar_6310_bar_height'])."px;
  font-size:".esc_attr($cssData['pbar_6310_value_font_size'])."px;
  line-height:".esc_attr($cssData['pbar_6310_value_font_size'])."px;
  font-weight:".esc_attr($cssData['pbar_6310_value_font_weight']).";
  color: ".esc_attr($cssData['pbar_6310_value_font_color']).";
  font-family: $valueFontFamily;
  position: absolute;
  right: 8px;
  display: flex;
  align-items: center;
}
.pbar-6310-template-".esc_attr($ids).":hover .pbar-6310-template-".esc_attr($ids)."-value{
  color: ".esc_attr($cssData['pbar_6310_value_font_hover_color']).";    
}

@-webkit-keyframes animate-positive-17{
  0%{ width: 0; }
}
@keyframes animate-positive-17{
  0%{ width: 0; }
}
 
  ";

  wp_register_style( "pbar-6310-template-".esc_attr($ids)."-css", "" );
  wp_enqueue_style( "pbar-6310-template-".esc_attr($ids)."-css" );
  wp_add_inline_style( "pbar-6310-template-".esc_attr($ids)."-css", $cssCode );
?>

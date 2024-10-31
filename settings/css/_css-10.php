<?php
 $valueFontFamily = str_replace("+", " ", esc_attr($cssData['pbar_6310_value_font_family'])); 

$cssCode = " 
.pbar-6310-template-".esc_attr($ids)."{
  float: left;
  width: calc(100% - 30px);
  padding: 0 15px;
  margin-top:  ".esc_attr($cssData['pbar_progress_bar_margin_top'])."px;
  margin-bottom:  ".esc_attr($cssData['pbar_progress_bar_margin_bottom'])."px;
  z-index: 1;
}
.pbar-6310-template-".esc_attr($ids)."-wrapper{
  height: ".esc_attr($cssData['pbar_6310_bar_height'])."px;
  background: ".esc_attr($cssData['pbar_progress_bar_background_color']).";
  border-radius: ".esc_attr($cssData['pbar_6310_bar_radius'])."px;
  box-shadow: none;
  overflow: visible;
  position: relative;
}

.pbar-6310-template-".esc_attr($ids)."-bar{
  border: ".esc_attr($cssData['pbar_progress_bar_border_size'])."px solid ".esc_attr($cssData['pbar_progress_bar_border_color']).";
  border-right: none;
  border-radius: ".esc_attr($cssData['pbar_6310_bar_radius'])."px;;
  box-shadow: none;
  position: relative;
  animation: animate-positive ".esc_attr($cssData['animation_duration'])."s;
  height: 100%;
  background-image: linear-gradient(
    45deg,". esc_attr($cssData['pbar_progress_bar_alternate_color']) ." 25%,transparent 25%,transparent 50%,". esc_attr($cssData['pbar_progress_bar_alternate_color']) ." 50%,". esc_attr($cssData['pbar_progress_bar_alternate_color']) ." 75%,transparent 75%,transparent);
  background-size: 40px 40px !important;
  background-color: ".esc_attr($cssData['pbar_progress_bar_color'])."; 
}
.pbar-6310-template-".esc_attr($ids)."-bar:after{
  content: '';
  width: calc( ".esc_attr($cssData['pbar_6310_bar_height'])."px * 2 - ".esc_attr($cssData['pbar_progress_bar_border_size'])."px * 2);
  height: calc( ".esc_attr($cssData['pbar_6310_bar_height'])."px * 2 - ".esc_attr($cssData['pbar_progress_bar_border_size'])."px * 2);
  position: absolute;
  top: calc(-".esc_attr($cssData['pbar_6310_bar_height'])."px / 2);
  right: -10px;
  box-sizing: border-box;
  background: ".esc_attr($cssData['pbar_progress_bar_color']).";
  border-radius: 50%;
}
.pbar-6310-template-".esc_attr($ids)."-value {
  position: absolute;
  right: 0px;
  font-family: $valueFontFamily;
  font-size: ".esc_attr($cssData['pbar_6310_value_font_size'])."px;
  font-weight: ".esc_attr($cssData['pbar_6310_value_font_weight']).";
  color: ".esc_attr($cssData['pbar_6310_value_font_color']).";
  top: -30px;
  display: flex;
}
.pbar-6310-template-".esc_attr($ids).":hover .pbar-6310-template-".esc_attr($ids)."-value{
  color: ".esc_attr($cssData['pbar_6310_value_font_hover_color']).";
}
@keyframes animate-positive{
  0%{ width: 0; }
}
  ";

  wp_register_style( "pbar-6310-template-".esc_attr($ids)."-css", "" );
  wp_enqueue_style( "pbar-6310-template-".esc_attr($ids)."-css" );
  wp_add_inline_style( "pbar-6310-template-".esc_attr($ids)."-css", $cssCode );
?>

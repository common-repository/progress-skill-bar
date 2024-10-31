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
  border-radius: ".esc_attr($cssData['pbar_6310_bar_radius'])."px;
  overflow: visible;
  box-shadow: none;
}
.pbar-6310-template-".esc_attr($ids)."-bar{
  background: ".esc_attr($cssData['pbar_progress_bar_color']).";
  box-shadow: none;
  border-bottom: ".esc_attr($cssData['pbar_6310_bar_height'])."px solid ".esc_attr($cssData['pbar_progress_bar_color']).";
  border-radius: ".esc_attr($cssData['pbar_6310_bar_radius'])."px;
  position: relative;
  -webkit-animation: animate-positive-29 ".esc_attr($cssData['animation_duration'])."s;
  animation: animate-positive-29 ".esc_attr($cssData['animation_duration'])."s;
}
 .pbar-6310-template-".esc_attr($ids)."-bar:before{
  content: '';
  border-bottom: 10px solid transparent;
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;
  border-top: 10px solid ".esc_attr($cssData['pbar_progress_bar_color']).";
  position: absolute;
  bottom: calc(-".esc_attr($cssData['pbar_6310_value_font_size'])."px / 3);
  right: -9px;
}
 .pbar-6310-template-".esc_attr($ids)."-value{
  font-size: ".esc_attr($cssData['pbar_6310_value_font_size'])."px;
  font-weight: ".esc_attr($cssData['pbar_6310_value_font_weight']).";
  color: ".esc_attr($cssData['pbar_6310_value_font_color']).";
  font-family: $valueFontFamily;
  position: absolute;
  top: -33px;
  right: -9px;
  display: flex;  
  justify-content: center;
}
.pbar-6310-template-".esc_attr($ids).":hover .pbar-6310-template-".esc_attr($ids)."-value{
  color: ".esc_attr($cssData['pbar_6310_value_font_hover_color']).";    
}
.pbar-6310-template-".esc_attr($ids)."-wrapper.yellow .pbar-6310-template-".esc_attr($ids)."-bar,
.pbar-6310-template-".esc_attr($ids)."-wrapper.yellow .pbar-6310-template-".esc_attr($ids)."-bar:{ border-bottom-color: #fec100; }
.pbar-6310-template-".esc_attr($ids)."-wrapper.purple .pbar-6310-template-".esc_attr($ids)."-bar,
.pbar-6310-template-".esc_attr($ids)."-wrapper.purple .pbar-6310-template-".esc_attr($ids)."-bar:{ border-bottom-color: #663399; }
.pbar-6310-template-".esc_attr($ids)."-wrapper.green .pbar-6310-template-".esc_attr($ids)."-bar,.pbar-6310-template-".esc_attr($ids)."-wrappers.green 
.pbar-6310-template-29-bar:before{ border-bottom-color: #0ead69; }
@-webkit-keyframes animate-positive-pr".esc_attr($ids)."iew-29{
  0%{ width: 0; }
}
@keyframes animate-positive-29{
  0%{ width: 0; }
}
 
  ";

  wp_register_style( "pbar-6310-template-".esc_attr($ids)."-css", "" );
  wp_enqueue_style( "pbar-6310-template-".esc_attr($ids)."-css" );
  wp_add_inline_style( "pbar-6310-template-".esc_attr($ids)."-css", $cssCode );
?>

<?php
$valueFontFamily = str_replace("+", " ", esc_attr($cssData['pbar_6310_value_font_family'])); 
$cssCode = " 

.pbar-6310-template-".esc_attr($ids)."-parallax {
  float: left;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 1;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: stretch;
}
.pbar-6310-template-".esc_attr($ids)."-parallax iframe {
  position: absolute !important;
  top: -100%;
  left: 0;
  width: 100%;
  height: 300%;
  pointer-events: none;
  opacity: ".esc_attr($cssData['video_opacity']).";
  position: relative;
}
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
  box-shadow: none;
  border-bottom: ".esc_attr($cssData['pbar_6310_bar_height'])."px solid;
  border-radius: ".esc_attr($cssData['pbar_6310_bar_radius'])."px;
  position: relative;
  -webkit-animation: animate-positive-13 ".esc_attr($cssData['animation_duration'])."s;
  animation: animate-positive-13 ".esc_attr($cssData['animation_duration'])."s;
}
 .pbar-6310-template-".esc_attr($ids)."-value{
  font-size:".esc_attr($cssData['pbar_6310_value_font_size'])."px;
  font-weight:".esc_attr($cssData['pbar_6310_value_font_weight']).";
  color: ".esc_attr($cssData['pbar_6310_value_font_color']).";
  font-family: $valueFontFamily;
  position: absolute;
  top: -25px;
  right: 0;
  display: flex;
}
.pbar-6310-template-".esc_attr($ids).":hover .pbar-6310-template-".esc_attr($ids)."-value{
  color: ".esc_attr($cssData['pbar_6310_value_font_hover_color']).";    
}
.pbar-6310-template-".esc_attr($ids)."-wrapper.yellow .pbar-6310-template-".esc_attr($ids)."-bar,
.pbar-6310-template-".esc_attr($ids)."-wrapper.yellow .pbar-6310-template-".esc_attr($ids)."-bar:before{ border-bottom-color: #fec100; }
.pbar-6310-template-".esc_attr($ids)."-wrapper.purple .pbar-6310-template-".esc_attr($ids)."-bar,
.pbar-6310-template-".esc_attr($ids)."-wrapper.purple .pbar-6310-template-".esc_attr($ids)."-bar:before{ border-bottom-color: #663399; }
.pbar-6310-template-".esc_attr($ids)."-wrapper.green .pbar-6310-template-".esc_attr($ids)."-bar,.pbar-6310-template-".esc_attr($ids)."-wrappers.green 
.pbar-6310-template-".esc_attr($ids)."-bar:before{ border-bottom-color: #0ead69; }
@-webkit-keyframes animate-positive-13{
  0%{ width: 0; }
}
@keyframes animate-positive-".esc_attr($ids)."{
  0%{ width: 0; }
}
.pbar-6310-row .pbar-6310-template-".esc_attr($ids)."-common-overlay .pbar-6310-template-".esc_attr($ids).":nth-child(6n+1) .pbar-6310-template-".esc_attr($ids)."-bar{
  border-color: ".esc_attr($cssData['pbar_progress_bar_background_first_color']).";
}
.pbar-6310-row .pbar-6310-template-".esc_attr($ids)."-common-overlay .pbar-6310-template-".esc_attr($ids).":nth-child(6n+2) .pbar-6310-template-".esc_attr($ids)."-bar{
  border-color: ".esc_attr($cssData['pbar_progress_bar_background_second_color']).";
}
.pbar-6310-row .pbar-6310-template-".esc_attr($ids)."-common-overlay .pbar-6310-template-".esc_attr($ids).":nth-child(6n+3) .pbar-6310-template-".esc_attr($ids)."-bar{
  border-color:".esc_attr($cssData['pbar_progress_bar_background_third_color']).";
}
.pbar-6310-row .pbar-6310-template-".esc_attr($ids)."-common-overlay .pbar-6310-template-".esc_attr($ids).":nth-child(6n+4) .pbar-6310-template-".esc_attr($ids)."-bar{
  border-color: ".esc_attr($cssData['pbar_progress_bar_background_forth_color']).";
}
.pbar-6310-row .pbar-6310-template-".esc_attr($ids)."-common-overlay .pbar-6310-template-".esc_attr($ids).":nth-child(6n+5) .pbar-6310-template-".esc_attr($ids)."-bar{
  border-color: ".esc_attr($cssData['pbar_progress_bar_background_fifth_color']).";
}
.pbar-6310-row .pbar-6310-template-".esc_attr($ids)."-common-overlay .pbar-6310-template-".esc_attr($ids).":nth-child(6n+6) .pbar-6310-template-".esc_attr($ids)."-bar{
  border-color: ".esc_attr($cssData['pbar_progress_bar_background_six_color']).";
} 
  ";

  wp_register_style( "pbar-6310-template-".esc_attr($ids)."-css", "" );
  wp_enqueue_style( "pbar-6310-template-".esc_attr($ids)."-css" );
  wp_add_inline_style( "pbar-6310-template-".esc_attr($ids)."-css", $cssCode );
?>

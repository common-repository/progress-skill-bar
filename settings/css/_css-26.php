<?php
$valueFontFamily = str_replace("+", " ", esc_attr($cssData['pbar_6310_value_font_family'])); 
$cssCode = " 
.pbar-6310-template-".esc_attr($ids)."{
  float: left;
  width: calc(100% - 30px);
  padding: 0 15px;
  z-index: 1;
}
.pbar-6310-template-".esc_attr($ids)."-title{
  display:flex;
  align-items: center;
  justify-content: center;
  padding: 0px 10px;
  background: ".esc_attr($cssData['pbar_progress_title_background_color']).";
  height: ".esc_attr($cssData['pbar_6310_title_height'])."px;
  position: absolute;
  top: auto;
  z-index: 1;
}

.pbar-6310-template-".esc_attr($ids)."-wrapper{
  height: ".esc_attr($cssData['pbar_6310_bar_height'])."px;
  background: ".esc_attr($cssData['pbar_progress_bar_background_color']).";
  box-shadow: none;
  margin-bottom: ".esc_attr($cssData['pbar_progress_bar_margin_bottom'])."px;
  margin-top: ".esc_attr($cssData['pbar_progress_bar_margin_top'])."px;
  overflow: visible;
  position: relative;
  display: flex;
  align-items: center;
  border-right: none;
}
.pbar-6310-template-".esc_attr($ids)."-bar{
  border-right: none;
  box-shadow: none;
  position: relative;
  animation: animate-positive-26 ".esc_attr($cssData['animation_duration'])."s;
  height: 100%;
  background-color: ".esc_attr($cssData['pbar_progress_bar_color']).";
  display: flex;
  justify-content: end;
  background-image: linear-gradient(
  45deg,".esc_attr($cssData['pbar_progress_bar_alternate_color'])." 25%,transparent 25%,transparent 50%,".esc_attr($cssData['pbar_progress_bar_alternate_color'])." 50%,".esc_attr($cssData['pbar_progress_bar_alternate_color'])." 75%,transparent 75%,transparent);
  background-size: 40px 40px !important;
  background-color: ".esc_attr($cssData['pbar_progress_bar_color']).";
}
.pbar-6310-template-".esc_attr($ids)."-value {
  bottom: -30px;
  left: 10px;
  display: flex;
  justify-content: center;
  line-height: 25px;
  border-radius: 4px; 
  top: -40px;
  right: 0;
}
.pbar-6310-template-".esc_attr($ids)."-title-data-container::after {
  content: '';
  position: absolute;
  width: 0;
  height: 0;
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;
  border-top: 10px solid ".esc_attr($cssData['pbar_progress_tooltip_background_color']).";
  top: 15px;
  z-index: -1;
}

.pbar-6310-template-".esc_attr($ids)."-title-data-container {
  padding: 10px calc(".esc_attr($cssData['pbar_progress_tooltip_background_size'])."px / 2);
  background:".esc_attr($cssData['pbar_progress_tooltip_background_color']).";
  color: ".esc_attr($cssData['pbar_6310_value_font_color']).";
  font-size:".esc_attr($cssData['pbar_6310_value_font_size'])."px;
  font-weight:".esc_attr($cssData['pbar_6310_value_font_weight']).";
  font-family: $valueFontFamily;
  right: 0;
  bottom: ".esc_attr($cssData['pbar_6310_bar_height'] + 8)."px;
  position: absolute;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 5px;  
  height: 15px;
  width: auto;
}
.pbar-6310-template-".esc_attr($ids).":hover .pbar-6310-template-26-title-data-container::after {
  color: ".esc_attr($cssData['pbar_6310_value_font_hover_color']).";    
}
@keyframes animate-positive-26{
  0% { width: 0; }
}

@-webkit-keyframes animate-positive-26{
  0% { width: 0; }
}

  ";

  wp_register_style( "pbar-6310-template-".esc_attr($ids)."-css", "" );
  wp_enqueue_style( "pbar-6310-template-".esc_attr($ids)."-css" );
  wp_add_inline_style( "pbar-6310-template-".esc_attr($ids)."-css", $cssCode );
?>

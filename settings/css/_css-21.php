<?php
  $valueFontFamily = str_replace("+", " ", esc_attr($cssData['pbar_6310_value_font_family'])); 
$cssCode = " 
.pbar-6310-template-".esc_attr($ids)."{
  float: left;
  width: calc(100% - 40px);
  padding: 0 20px;
  z-index: 1;
  margin-top: ".esc_attr($cssData['pbar_progress_bar_margin_top'])."px;
  margin-bottom: ".esc_attr($cssData['pbar_progress_bar_margin_bottom'])."px;
  
}
.pbar-6310-template-".esc_attr($ids)."-wrapper{
  height: ".esc_attr($cssData['pbar_6310_bar_height'])."px;
  background: ".esc_attr($cssData['pbar_progress_bar_background_color']).";
  border-radius: ".esc_attr($cssData['pbar_6310_bar_radius'])."px;
  overflow: visible;
  position: relative;
}
.pbar-6310-template-".esc_attr($ids)."-wrapper:after{
  border: 7px solid ".esc_attr($cssData['pbar_progress_bar_background_color']).";
  left: auto;
  right: 0;
}
 .pbar-6310-template-".esc_attr($ids)."-bar{
  box-shadow: none;
  border: none;
  border-radius: ".esc_attr($cssData['pbar_6310_bar_radius'])."px;
  position: relative;
  background: linear-gradient(to right,  ".esc_attr($cssData['pbar_progress_bar_first_color'])." 35%, ".esc_attr($cssData['pbar_progress_bar_second_color'])." 68%);
  width:60%;
  -webkit-animation: animate-positive ".esc_attr($cssData['animation_duration'])."s;
  animation: animate-positive ".esc_attr($cssData['animation_duration'])."s;
  height: 100%;
}
.pbar-6310-template-".esc_attr($ids)."-bar::after{
  content: '';
  font-size: 10px;
  color: rgba(0,0,0,0.4);
  position: absolute;
  top: 50%;
  right: 10px;
  transform: translateY(-50%);
  width: 5px;
  height: 5px;
  background: rgb(0, 0, 0);
  border-radius: 50%;
}
.pbar-6310-template-".esc_attr($ids)."-value{
  display: block;
  border-radius: 4px;
  padding:".esc_attr($cssData['pbar_progress_tooltip_background_size'])."px ".esc_attr($cssData['pbar_progress_tooltip_background_size'] * 2)."px;
  background:".esc_attr($cssData['pbar_progress_tooltip_background_color']).";
  font-size:".esc_attr($cssData['pbar_6310_value_font_size'])."px;
  font-weight:".esc_attr($cssData['pbar_6310_value_font_weight']).";
  color: ".esc_attr($cssData['pbar_6310_value_font_color']).";
  font-family: $valueFontFamily;
  font-style: normal;
  position: absolute;
  top: -40px;
  right: 15px;
  display: flex;
}
.pbar-6310-template-".esc_attr($ids).":hover .pbar-6310-template-".esc_attr($ids)."-value{
  color: ".esc_attr($cssData['pbar_6310_value_font_hover_color']).";    
}
.pbar-6310-template-".esc_attr($ids)."-value::after{
  content: '';
  border-top: 5px solid ".esc_attr($cssData['pbar_progress_tooltip_background_color']).";
  border-left: 5px solid ".esc_attr($cssData['pbar_progress_tooltip_background_color']).";
  border-bottom: 5px solid transparent;
  border-right: 5px solid transparent;
  position: absolute;
  bottom: -6px;
  right: 0;
  transform: rotateY( 
    183deg);
}

@-webkit-keyframes animate-positive{
  0%{ width: 0; }
}
@keyframes animate-positive{
  0%{ width: 0; }
} 
  ";

  wp_register_style( "pbar-6310-template-".esc_attr($ids)."-css", "" );
  wp_enqueue_style( "pbar-6310-template-".esc_attr($ids)."-css" );
  wp_add_inline_style( "pbar-6310-template-".esc_attr($ids)."-css", $cssCode );
?>

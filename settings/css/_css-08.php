<?php
$valueFontFamily = str_replace("+", " ", esc_attr($cssData['pbar_6310_value_font_family'])); 
$cssCode = " 
.pbar-6310-template-".esc_attr($ids)."{
  float: left;
  width: calc(100% - 30px);
  margin-top: ".esc_attr($cssData['pbar_progress_bar_margin_top'])."px;
  margin-bottom: ".esc_attr($cssData['pbar_progress_bar_margin_bottom'])."px;
  z-index: 1;
  padding: 0 15px;
}
.pbar-6310-template-".esc_attr($ids)."-wrapper{
  height: ".esc_attr($cssData['pbar_6310_bar_height'])."px;
  background: ".esc_attr($cssData['pbar_progress_bar_background_color']).";
  border-radius: 15px;  
  overflow: visible;
  position: relative;
}
.pbar-6310-template-".esc_attr($ids)."-wrapper:before,
.pbar-6310-template-".esc_attr($ids)."-wrapper:after{
  content: '';
  width: calc(".esc_attr($cssData['pbar_6310_bar_height'])."px + 10px);
  height: calc(".esc_attr($cssData['pbar_6310_bar_height'])."px + 10px);
  border-radius: 50%;
  background: #fff;
  position: absolute;
  top: -5px;
  left: 0;
  z-index: 1;
  box-sizing: border-box;
}
.pbar-6310-template-".esc_attr($ids)."-wrapper:after{
  border:  ".esc_attr($cssData['pbar_progress_bar_border_size'])."px solid ".esc_attr($cssData['pbar_progress_bar_background_color']).";
  left: auto;
  right: 0;
}
 .pbar-6310-template-".esc_attr($ids)."-bar{
  box-shadow: none;
  border: none;
  border-radius: 15px;
  position: relative;
  -webkit-animation: animate-positive ".esc_attr($cssData['animation_duration'])."s;
  animation: animate-positive ".esc_attr($cssData['animation_duration'])."s;
  height: 100%;
  background-image: linear-gradient(
    45deg," . esc_attr($cssData['pbar_progress_bar_alternate_color']) . " 25%,transparent 25%,transparent 50%," . esc_attr($cssData['pbar_progress_bar_alternate_color']) . " 50%," . esc_attr($cssData['pbar_progress_bar_alternate_color']) . " 75%,transparent 75%,transparent);
background-size: 40px 40px !important;
background-color: " . esc_attr($cssData['pbar_progress_bar_color']) . ";
}
.pbar-6310-template-".esc_attr($ids)."-value{
  width: calc(".esc_attr($cssData['pbar_6310_bar_height'])."px + 50px);
  height: calc(".esc_attr($cssData['pbar_6310_bar_height'])."px * 2);
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: ".esc_attr($cssData['pbar_6310_bar_percent_border_radius'])."px;
  font-family: $valueFontFamily;
  font-size: ".esc_attr($cssData['pbar_6310_value_font_size'])."px;
  font-weight: ".esc_attr($cssData['pbar_6310_value_font_weight']).";
  color: ".esc_attr($cssData['pbar_6310_value_font_color']).";
  background: ".esc_attr($cssData['pbar_progress_tooltip_background_color']).";
  position: absolute;
  top: calc(-".esc_attr($cssData['pbar_6310_bar_height'])."px / 2);
  right: 0;
  z-index: 2;
  text-align: center;
}
.pbar-6310-template-".esc_attr($ids)."-wrapper:before{
  border: ".esc_attr($cssData['pbar_progress_bar_border_size'])."px solid ".esc_attr($cssData['pbar_progress_bar_border_color'])."; 
}
 .pbar-6310-template-".esc_attr($ids)."-value{
  border: ".esc_attr($cssData['pbar_6310_percentage_background_border_size'])."px solid ".esc_attr($cssData['pbar_progress_bar_border_color']).";  
}
.pbar-6310-template-".esc_attr($ids).":hover .pbar-6310-template-".esc_attr($ids)."-value { 
  color:".esc_attr($cssData['pbar_6310_value_font_hover_color']).";
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

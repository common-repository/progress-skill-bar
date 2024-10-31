<?php
$valueFontFamily = str_replace("+", " ", esc_attr($cssData['pbar_6310_value_font_family'])); 
$cssCode = " 
.pbar-6310-template-".esc_attr($ids)." {
  float: left;
  width: calc(100% - 40px);
  margin: 0 20px;
  margin-top: ".esc_attr($cssData['pbar_progress_bar_margin_top'])."px;
  margin-bottom: ".esc_attr($cssData['pbar_progress_bar_margin_bottom'])."px;
  z-index: 1;
}

.pbar-6310-template-".esc_attr($ids)."-wrapper{
  height: ".esc_attr($cssData['pbar_6310_bar_height'])."px;
  line-height: ".esc_attr($cssData['pbar_6310_bar_height'])."px;
  background: ".esc_attr($cssData['pbar_progress_bar_background_color']).";
  border-radius: 0;
  margin-bottom: 50px; 
  box-shadow: none;
  overflow: visible;
  border-radius: ".esc_attr($cssData['pbar_6310_bar_radius'])."px;
  border: ".esc_attr($cssData['pbar_progress_bar_border_size'])."px solid transparent;
  position: relative;
}
.pbar-6310-template-".esc_attr($ids)."-wrapper:last-child{
  margin-bottom: 0;
}
 .pbar-6310-template-".esc_attr($ids)."-bar{
  position: relative;
  animation: animate-positive ".esc_attr($cssData['animation_duration'])."s;
  border-radius: 0;
  float: left;
  width: 0;
  height: 100%;
  font-size: 12px;
  line-height: 20px;
  color: black;
  text-align: center;
  width:85%;
  background: ".esc_attr($cssData['pbar_progress_bar_color']).";
  -webkit-box-shadow: inset 0 -1px 0 rgb(0 0 0 / 15%);
  box-shadow: inset 0 -1px 0 rgb(0 0 0 / 15%);
  -webkit-transition: width .6s ease;
  -o-transition: width .6s ease;
  transition: width .6s ease;
}
.pbar-6310-template-".esc_attr($ids)."-bar::after {
  content: '';
  position: absolute;
  width: 0;
  height: 0;
  top: calc(-".esc_attr($cssData['pbar_6310_bar_height'])."px / 2 - ".esc_attr($cssData['pbar_progress_bar_border_size'])."px + ".esc_attr($cssData['pbar_6310_bar_height'])."px / 2);
  right: calc(-".esc_attr($cssData['pbar_6310_bar_height'])."px / 2);
  border-top:  calc(".esc_attr($cssData['pbar_6310_bar_height'])."px / 2) solid transparent;
  border-bottom:  calc(".esc_attr($cssData['pbar_6310_bar_height'])."px / 2) solid transparent;
  border-left:  calc(".esc_attr($cssData['pbar_6310_bar_height'])."px / 2) solid ".esc_attr($cssData['pbar_progress_bar_color']).";
}
 .pbar-6310-template-".esc_attr($ids)."-value{
  font-size:".esc_attr($cssData['pbar_6310_value_font_size'])."px;
  font-weight:".esc_attr($cssData['pbar_6310_value_font_weight']).";
  color: ".esc_attr($cssData['pbar_6310_value_font_color']).";
  font-family: $valueFontFamily;
  line-height:".esc_attr($cssData['pbar_6310_value_font_size'] + 6)."px;
  border-radius: 4px;
  padding: 3px 7px;
  background: ".esc_attr($cssData['pbar_progress_tooltip_background_color']).";
  position: absolute;
  bottom: calc(".esc_attr($cssData['pbar_6310_bar_height'])."px + 10px - ".esc_attr($cssData['pbar_progress_bar_border_size'])."px);
  right: -17px;
  display: flex;
}
.pbar-6310-template-".esc_attr($ids).":hover .pbar-6310-template-".esc_attr($ids)."-value{
  color: ".esc_attr($cssData['pbar_6310_value_font_hover_color']).";    
}
 .pbar-6310-template-".esc_attr($ids)."-value:after {
  content: '';
  position: absolute;
  bottom: -7px;
  left: 10px;
  width: 0;
  height: 0;
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;
  border-top: 10px solid ".esc_attr($cssData['pbar_progress_tooltip_background_color']).";
}

h3.pbar-6310-template-".esc_attr($ids)."-title {
  margin: 0;
}

@-webkit-keyframes animate-positive{
  0% { width: 0%; }
}
@keyframes animate-positive{
  0% { width: 0%; }
}

  ";

  wp_register_style( "pbar-6310-template-".esc_attr($ids)."-css", "" );
  wp_enqueue_style( "pbar-6310-template-".esc_attr($ids)."-css" );
  wp_add_inline_style( "pbar-6310-template-".esc_attr($ids)."-css", $cssCode );
?>

<?php
 $valueFontFamily = str_replace("+", " ", esc_attr($cssData['pbar_6310_value_font_family'])); 
 $heightVlaue = esc_attr($cssData['pbar_6310_bar_height']);
 $titleBg = esc_attr($cssData['pbar_6310_bar_height'] + 12);
 $titlAfter = esc_attr($titleBg / 2);

$cssCode = " 

.pbar-6310-template-".esc_attr($ids)."{
  float: left;
  width: calc(100% - 30px);
  padding: 0 15px;
  position: relative;  
  z-index: 1;
}
.pbar-6310-template-".esc_attr($ids)."-bar::after {
  content: '';
  width: ".esc_attr($cssData['pbar_6310_bar_height'] + 10)."px;
  height: ".esc_attr($cssData['pbar_6310_bar_height'] + 10)."px;
  border-radius: 50%;
  box-shadow: 0 5px 5px rgb(0 0 0 / 60%);
  background: ".esc_attr($cssData['pbar_progress_bar_circle_inner_color']).";
  position: absolute;
  right: -5px;
  top: -6px;
}
.pbar-6310-template-".esc_attr($ids)."-bar:after {
  border: 5px solid transparent;
  border-color: ".esc_attr($cssData['pbar_progress_bar_circle_border_color']).";
  box-sizing: border-box;
}
.pbar-6310-template-".esc_attr($ids)."-wrapper{ 
  height: ".esc_attr($cssData['pbar_6310_bar_height'])."px;
  background:  ".esc_attr($cssData['pbar_progress_bar_background_color']).";
  margin-bottom: ".esc_attr($cssData['pbar_progress_bar_margin_bottom'])."px;
  margin-top: ".esc_attr($cssData['pbar_progress_bar_margin_top'])."px;
  box-shadow: none;
  overflow: visible;
  position: relative;
  display: flex;
  border-radius: ".esc_attr($cssData['pbar_6310_bar_radius'])."px;
  align-items: center;
}
.pbar-6310-template-".esc_attr($ids)."-bar {
  box-shadow: none;
  padding-left: 26px;
  border-radius: ".esc_attr($cssData['pbar_6310_bar_radius'])."px;
  border-top-left-radius: initial;
  border-bottom-left-radius: initial;
  position: relative;
  animation: animate-positive ".esc_attr($cssData['animation_duration'])."s;
  position: relative;
}
.pbar-6310-template-".esc_attr($ids)."-title{
  width: auto;
  padding: 0 15px;
  height:".esc_attr($cssData['pbar_6310_bar_height'] + 12)."px;
  background:  ".esc_attr($cssData['pbar_progress_title_background_color']).";
  position: relative;
  line-height: ".esc_attr($cssData['pbar_6310_bar_height'] + 12)."px;
  top: 0;
  left: 0;
  border-radius: 5px 0 0 5px;
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  top: auto;
  z-index: 1;
}
 .pbar-6310-template-".esc_attr($ids)."-title:after{
  content: '';
  border-left:  ".$titlAfter."px solid  ".esc_attr($cssData['pbar_progress_title_background_color']).";
  border-top:  ".$titlAfter."px solid transparent;
  border-bottom:  ".$titlAfter."px solid transparent;
  position: absolute;
  top: auto;
  right: -".$titlAfter."px;
  z-index: 1;
}
.pbar-6310-template-".esc_attr($ids)."-bar {
  animation: animate-positive ".esc_attr($cssData['animation_duration'])."s;
  background-image: -webkit-linear-gradient(
    45deg, ".esc_attr($cssData['pbar_progress_bar_alternate_color'])." 25%,transparent 25%,transparent 50%, ".esc_attr($cssData['pbar_progress_bar_alternate_color'])." 50%, ".esc_attr($cssData['pbar_progress_bar_alternate_color'])." 75%,transparent 75%,transparent);
  background-image: -o-linear-gradient(45deg, ".esc_attr($cssData['pbar_progress_bar_alternate_color'])." 25%,transparent 25%,transparent 50%, ".esc_attr($cssData['pbar_progress_bar_alternate_color'])." 50%, ".esc_attr($cssData['pbar_progress_bar_alternate_color'])." 75%,transparent 75%,transparent);
  background-image: linear-gradient(
    45deg, ".esc_attr($cssData['pbar_progress_bar_alternate_color'])." 25%,transparent 25%,transparent 50%, ".esc_attr($cssData['pbar_progress_bar_alternate_color'])." 50%, ".esc_attr($cssData['pbar_progress_bar_alternate_color'])." 75%,transparent 75%,transparent);
  -webkit-background-size: 40px 40px;
  background-size: 40px 40px;
  float: left;
  width: 0;
  height: 100%;
  font-size: 12px;
  line-height: 20px; 
  text-align: center;
  background-color: ".esc_attr($cssData['pbar_progress_bar_color']).";
  -webkit-box-shadow: inset 0 -1px 0 rgb(0 0 0 / 15%);
  box-shadow: inset 0 -1px 0 rgb(0 0 0 / 15%);
  -webkit-transition: width .6s ease;
  -o-transition: width .6s ease;
  transition: width .6s ease;
}
.pbar-6310-template-".esc_attr($ids)."-value {
  float: right;
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  top: -39px;
  right: -15px;
  padding:".esc_attr($cssData['pbar_progress_tooltip_background_size'])."px ".esc_attr($cssData['pbar_progress_tooltip_background_size'] * 2)."px;
  background: ".esc_attr($cssData['pbar_progress_tooltip_background_color']).";
  font-size: ".esc_attr($cssData['pbar_6310_value_font_size'])."px;
  font-weight: ".esc_attr($cssData['pbar_6310_value_font_weight']).";
  color: ".esc_attr($cssData['pbar_6310_value_font_color']).";
  font-family: $valueFontFamily;
  border-radius: 5px;
}
.pbar-6310-template-".esc_attr($ids).":hover .pbar-6310-template-".esc_attr($ids)."-value{
  color: ".esc_attr($cssData['pbar_6310_value_font_hover_color']).";    
}
.pbar-6310-template-".esc_attr($ids)."-value:after {
  width: 0px;
  height: 0px;
  border-left: 7px solid transparent;
  border-right: 7px solid transparent;
  border-top: 7px solid ".esc_attr($cssData['pbar_progress_tooltip_background_color']).";
  content: '';
  position: absolute;
  bottom: -7px;
}

@-webkit-keyframes animate-positive{
  0%{ width: 0; }
}
 
  ";

  wp_register_style( "pbar-6310-template-".esc_attr($ids)."-css", "" );
  wp_enqueue_style( "pbar-6310-template-".esc_attr($ids)."-css" );
  wp_add_inline_style( "pbar-6310-template-".esc_attr($ids)."-css", $cssCode );
?>

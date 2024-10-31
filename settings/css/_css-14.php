<?php
 $valueFontFamily = str_replace("+", " ", esc_attr($cssData['pbar_6310_value_font_family'])); 
$cssCode = " 
.pbar-6310-template-".esc_attr($ids)."-outer:nth-child(n){  
  border: ".esc_attr($cssData['pbar_progress_bar_border_size'])."px solid ".esc_attr($cssData['pbar_progress_bar_border_color']).";
  padding: 10px;
  border-radius: ".esc_attr($cssData['pbar_6310_bar_radius'])."px;
  margin-bottom: 10px;  
}
.pbar-6310-template-".esc_attr($ids)." { 
  float: left;
  width: calc(100% - 30px);
  padding: 0 15px;
  z-index: 1;
}
.pbar-6310-template-outer {
  background: transparent;
  padding: 5px 60px 5px 5px; 
  border-radius: 45px;
  margin-bottom: 20px;
  position: relative;
  border: 5px solid #bebfbf; 
}
.pbar-6310-template-".esc_attr($ids)."-wrapper{
  background: transparent;
  margin: 0;
  height: ".esc_attr($cssData['pbar_6310_bar_height'])."px;
  overflow: hidden;
  background-color: transparent;
  border-radius: ".esc_attr($cssData['pbar_6310_bar_radius'])."px;
  -webkit-box-shadow: inset 0 1px 2px rgb(0 0 0 / 10%);
  box-shadow: inset 0 1px 2px rgb(0 0 0 / 10%);
  position: relative;
}
.pbar-6310-template-".esc_attr($ids)."-bar {
  float: left;
  width: 0;
  height: 100%;
  font-size: 12px;
  line-height: 31px;
  color: #fff;
  text-align: center;
  background-color: ".esc_attr($cssData['pbar_progress_bar_color']).";
  -webkit-box-shadow: inset 0 -1px 0 rgb(0 0 0 / 15%);
  box-shadow: inset 0 -1px 0 rgb(0 0 0 / 15%);
  -webkit-transition: width .6s ease;
  -o-transition: width .6s ease;
  transition: width .6s ease;
}
.pbar-6310-template-".esc_attr($ids)."-bar-striped, .pbar-6310-template-".esc_attr($ids)."-bar {
  background-image: -webkit-linear-gradient(
45deg, ".esc_attr($cssData['pbar_progress_bar_alternate_color'])." 25%,transparent 25%,transparent 50%, ".esc_attr($cssData['pbar_progress_bar_alternate_color'])." 50%, ".esc_attr($cssData['pbar_progress_bar_alternate_color'])." 75%,transparent 75%,transparent);
  background-image: -o-linear-gradient(45deg, ".esc_attr($cssData['pbar_progress_bar_alternate_color'])." 25%,transparent 25%,transparent 50%, ".esc_attr($cssData['pbar_progress_bar_alternate_color'])." 50%, ".esc_attr($cssData['pbar_progress_bar_alternate_color'])." 75%,transparent 75%,transparent);
  background-image: linear-gradient(
45deg, ".esc_attr($cssData['pbar_progress_bar_alternate_color'])." 25%,transparent 25%,transparent 50%, ".esc_attr($cssData['pbar_progress_bar_alternate_color'])." 50%, ".esc_attr($cssData['pbar_progress_bar_alternate_color'])." 75%,transparent 75%,transparent);
  -webkit-background-size: 40px 40px;
  background-size: 40px 40px;
}
.pbar-6310-template-".esc_attr($ids)."-bar{
  border-radius: ".esc_attr($cssData['pbar_6310_bar_radius'])."px;
  box-shadow: none;
  animation: animate-positive ".esc_attr($cssData['animation_duration'])."s;
}
.pbar-6310-template-".esc_attr($ids)."-value{
  font-size:".esc_attr($cssData['pbar_6310_value_font_size'])."px;
  font-weight:".esc_attr($cssData['pbar_6310_value_font_weight']).";
  color: ".esc_attr($cssData['pbar_6310_value_font_color']).";
  font-family: $valueFontFamily;
  position: absolute;
  right: 25px;
  display: flex;
  align-items: center;
  height: 100%; 
}
.pbar-6310-template-".esc_attr($ids)."-title-data{
  display: flex;
  justify-content: center;
  align-items: center;
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

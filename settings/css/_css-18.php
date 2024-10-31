<?php
$valueFontFamily = str_replace("+", " ", esc_attr($cssData['pbar_6310_value_font_family']));
$cssCode = " 
.pbar-6310-template-".esc_attr($ids)." {
  float: left;
  width: calc(100% - 30px);
  padding: 0 15px;
  position: relative;
  overflow: hidden;
  margin: 5px;
}
.pbar-6310-template-".esc_attr($ids)."-title{
  background:  ".esc_attr($cssData['pbar_progress_title_background_color']).";
}
.pbar-6310-template-".esc_attr($ids)."-wrapper {
  height: ".esc_attr($cssData['pbar_6310_bar_height'])."px;
  background:  ".esc_attr($cssData['pbar_progress_bar_background_color']).";
  margin-bottom: ".esc_attr($cssData['pbar_progress_bar_margin_bottom'])."px;
  margin-top: ".esc_attr($cssData['pbar_progress_bar_margin_top'])."px;
  box-shadow: none;
  overflow: hidden;
  position: relative;
  border-radius: ".esc_attr($cssData['pbar_6310_bar_radius'])."px;
  display: flex;
}
.pbar-6310-template-".esc_attr($ids)."-bar {
  box-shadow: none;
  border-radius: 0;
  position: relative;
  -webkit-animation: animate-positive-18 ".esc_attr($cssData['animation_duration'])."s;
  animation: animate-positive-18 ".esc_attr($cssData['animation_duration'])."s;
}
.pbar-6310-template-".esc_attr($ids)."-bar-section {
  width: 100%;
}
.pbar-6310-template-".esc_attr($ids)."-title{
  width: 130px;
  display: flex;
  align-items: center;
  justify-content: center;
}
.pbar-6310-template-".esc_attr($ids)."-value {
  width: 50px;
  height: 100%;
  font-size:".esc_attr($cssData['pbar_6310_value_font_size'])."px;
  font-weight:".esc_attr($cssData['pbar_6310_value_font_weight']).";
  color: ".esc_attr($cssData['pbar_6310_value_font_color']).";
  font-family: $valueFontFamily;
  position: absolute;
  line-height: ".esc_attr($cssData['pbar_6310_bar_height'])."px;
  top: 0;
  right: 8px;
  justify-content: flex-end;
  z-index: 1;
  display: flex;
  align-items: center;
}
.pbar-6310-template-".esc_attr($ids)."-bar:after {
  border-left-color: #337ab7;
}
.pbar-6310-template-".esc_attr($ids).":hover .pbar-6310-template-".esc_attr($ids)."-value{
  color: ".esc_attr($cssData['pbar_6310_value_font_hover_color']).";    
}
.pbar-6310-template-".esc_attr($ids)."-bar {
  background-size: 40px 40px;
  float: left;
  width: 0;
  height: 100%;
  font-size: 12px;
  line-height: 20px;
  color: #fff;
  text-align: center;
  background-color: ".esc_attr($cssData['pbar_progress_bar_color']).";
  -webkit-box-shadow: inset 0 -1px 0 rgb(0 0 0 / 15%);
  box-shadow: inset 0 -1px 0 rgb(0 0 0 / 15%);
  -webkit-transition: width .6s ease;
  -o-transition: width .6s ease;
  transition: width .6s ease;
}
.pbar-6310-template-".esc_attr($ids)."-value:after {
  border-left: 13px solid #000;
}
@-webkit-keyframes animate-positive-18 {
  0% {
    width: 0;
  }
}
@keyframes animate-positive-18 {
  0% {
    width: 0;
  }
}
 
  ";

  wp_register_style( "pbar-6310-template-".esc_attr($ids)."-css", "" );
  wp_enqueue_style( "pbar-6310-template-".esc_attr($ids)."-css" );
  wp_add_inline_style( "pbar-6310-template-".esc_attr($ids)."-css", $cssCode );
?>

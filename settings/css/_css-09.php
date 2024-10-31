<?php
$valueFontFamily = str_replace("+", " ", esc_attr($cssData['pbar_6310_value_font_family'])); 

$cssCode = " 
.pbar-6310-template-".esc_attr($ids)."{
  float: left;
  width: calc(100% - 30px);
  padding: 0 15px;
  position: relative;
  margin-top: ".esc_attr($cssData['pbar_progress_bar_margin_top'])."px;
  margin-bottom: ".esc_attr($cssData['pbar_progress_bar_margin_bottom'])."px;
  z-index: 1;
}
.pbar-6310-template-".esc_attr($ids)."-wrapper{
  margin: 0;
  height: ".esc_attr($cssData['pbar_6310_bar_height'])."px;
  background: ".esc_attr($cssData['pbar_progress_bar_background_color']).";
  -webkit-box-shadow: inset 0 1px 2px rgb(0 0 0 / 10%);
  box-shadow: inset 0 1px 2px rgb(0 0 0 / 10%);
  border: ".esc_attr($cssData['pbar_progress_bar_border_size'])."px solid ".esc_attr($cssData['pbar_progress_bar_border_color']).";
  border-radius: ".esc_attr($cssData['pbar_6310_bar_radius'])."px;
}
.pbar-6310-template-".esc_attr($ids)."-bar {
  float: left;
  height: 100%;
  font-size: 12px;
  line-height: 31px;
  color: #fff;
  text-align: center;
  border-radius: ".esc_attr($cssData['pbar_6310_bar_radius'])."px;
  background-color: ".esc_attr($cssData['pbar_progress_bar_color']).";
  -webkit-box-shadow: inset 0 -1px 0 rgb(0 0 0 / 15%);
  box-shadow: inset 0 -1px 0 rgb(0 0 0 / 15%);
  -webkit-transition: width .6s ease;
  -o-transition: width .6s ease;
  transition: width .6s ease;
  background-image: -webkit-linear-gradient(
    45deg,".esc_attr($cssData['pbar_progress_bar_alternate_color'])." 25%,transparent 25%,transparent 50%,".esc_attr($cssData['pbar_progress_bar_alternate_color'])." 50%,".esc_attr($cssData['pbar_progress_bar_alternate_color'])." 75%,transparent 75%,transparent);
      background-image: -o-linear-gradient(45deg,".esc_attr($cssData['pbar_progress_bar_alternate_color'])." 25%,transparent 25%,transparent 50%,".esc_attr($cssData['pbar_progress_bar_alternate_color'])." 50%,".esc_attr($cssData['pbar_progress_bar_alternate_color'])." 75%,transparent 75%,transparent);
      background-image: linear-gradient(
    45deg,".esc_attr($cssData['pbar_progress_bar_alternate_color'])." 25%,transparent 25%,transparent 50%,".esc_attr($cssData['pbar_progress_bar_alternate_color'])." 50%,".esc_attr($cssData['pbar_progress_bar_alternate_color'])." 75%,transparent 75%,transparent);
      -webkit-background-size: 40px 40px;
      background-size: 40px 40px;
      box-shadow: none;
      animation: animate-positive ".esc_attr($cssData['animation_duration'])."s;
      width: 60%;  
      position: relative;
}
.pbar-6310-template-".esc_attr($ids)."-value{
    font-family: $valueFontFamily;
    font-size: ".esc_attr($cssData['pbar_6310_value_font_size'])."px;
    font-weight: ".esc_attr($cssData['pbar_6310_value_font_weight']).";
    color: ".esc_attr($cssData['pbar_6310_value_font_color']).";
    position: absolute;
    right: 15px;
    top: ".esc_attr($cssData['pbar_6310_title_padding_top'])."px;
    display: flex;
    align-items: center;
}
.pbar-6310-template-".esc_attr($ids).":hover .pbar-6310-template-".esc_attr($ids)."-value{
    color: ".esc_attr($cssData['pbar_6310_value_font_hover_color']).";
}
.pbar-6310-template-".esc_attr($ids)."-bar i{
    content: '';
    font-size: ".esc_attr($cssData['pbar_progress_bar_parcentage_icon_size'])."px;
    color: ".esc_attr($cssData['pbar_progress_tooltip_icon_color']).";
    position: absolute;
    bottom: ".esc_attr($cssData['pbar_6310_bar_height'])."px;
    right: -8px;
    font-weight: 700;
    z-index: -1;
}
@keyframes animate-positive{
  0%{ width: 0; }
}
 
  ";

  wp_register_style( "pbar-6310-template-".esc_attr($ids)."-css", "" );
  wp_enqueue_style( "pbar-6310-template-".esc_attr($ids)."-css" );
  wp_add_inline_style( "pbar-6310-template-".esc_attr($ids)."-css", $cssCode );
?>

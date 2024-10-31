<?php
  $titleFontFamily =  str_replace("+", " ", esc_attr($cssData['pbar_6310_title_font_family'])); 
  $valueFontFamily = str_replace("+", " ", esc_attr($cssData['pbar_6310_value_font_family'])); 
$cssCode = "  
.pbar-6310-template-".esc_attr($ids)."{
  float: left;
  width: calc(100% - 30px);
  padding: 0 15px;
  margin-top: ".esc_attr($cssData['pbar_progress_bar_margin_top'])."px;
  margin-bottom: ".esc_attr($cssData['pbar_progress_bar_margin_bottom'])."px;
  transition: .5s;
  z-index: 1;
}
.pbar-6310-template-".esc_attr($ids)."-title{
  display: flex;
}
.pbar-6310-template-".esc_attr($ids)."-value{
  margin: 0 5px;  
  display: flex;
  padding-top: 0;
  padding-bottom: 0;
}

.pbar-6310-template-".esc_attr($ids).":hover .pbar-6310-template-".esc_attr($ids)."-value{
  color: ".esc_attr($cssData['pbar_6310_title_font_hover_color']).";
}
.pbar-6310-template-".esc_attr($ids)."-wrapper {
  height: ".esc_attr($cssData['pbar_6310_bar_height'])."px;
  background:  ".esc_attr($cssData['pbar_progress_bar_background_color']).";
  border-radius: ".esc_attr($cssData['pbar_6310_bar_radius'])."px;
  box-shadow: none;
  overflow: visible;
}
.pbar-6310-template-".esc_attr($ids)."-bar {
  border-radius: ".esc_attr($cssData['pbar_6310_bar_radius'])."px;
  box-shadow: none;
  position: relative;
  animation: animate-positive ".esc_attr($cssData['animation_duration'])."s;
  float: left;
  width: 0;
  height: 100%;
  font-size: 12px;
  line-height: ".esc_attr($cssData['pbar_6310_bar_height'])."px;
  color: #fff;
  text-align: center;
  background-color: ".esc_attr($cssData['pbar_progress_bar_color']).";
  -webkit-box-shadow: inset 0 -1px 0 rgb(0 0 0 / 15%);
  box-shadow: inset 0 -1px 0 rgb(0 0 0 / 15%);
  -webkit-transition: width .6s ease;
  -o-transition: width .6s ease;
  transition: width .6s ease;
}
 .pbar-6310-template-".esc_attr($ids)."-bar:before {
    content: '';
    width: 100%;
    height: 50%;
    background: rgba(0,0,0,0.3);
    border-radius: 0 0 ".esc_attr($cssData['pbar_6310_bar_radius'])."px ".esc_attr($cssData['pbar_6310_bar_radius'])."px;
    position: absolute;
    bottom: 0;
    left: 0;
    z-index: 2;
  }
  .pbar-6310-template-".esc_attr($ids)."-bar:after{
    content: '';
    width: ".esc_attr($cssData['pbar_6310_bar_height'])."px;
    height: ".esc_attr($cssData['pbar_6310_bar_height'])."px;
    border-radius: 50%;
    background: ".esc_attr($cssData['pbar_progress_bar_circle_inner_color']).";
    border: ".esc_attr($cssData['pbar_progress_bar_circle_border_size'])."px solid ".esc_attr($cssData['pbar_progress_bar_circle_border_color']).";
    position: absolute;
    bottom: -".esc_attr($cssData['pbar_progress_bar_circle_border_size'])."px;
    right: -10px;
    z-index: 2;
    box-sizing: initial;
  }
  @keyframes animate-positive{
    0%{ width: 0; }
  }
 
  ";

  wp_register_style( "pbar-6310-template-".esc_attr($ids)."-css", "" );
  wp_enqueue_style( "pbar-6310-template-".esc_attr($ids)."-css" );
  wp_add_inline_style( "pbar-6310-template-".esc_attr($ids)."-css", $cssCode );
?>

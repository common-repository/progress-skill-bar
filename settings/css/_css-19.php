<?php

$cssCode = "
.pbar-6310-template-".esc_attr($ids)." {
  float: left;
  width: calc(100% - 30px);
  padding: 0 15px;
  z-index: 1;
  margin-bottom: ".esc_attr($cssData['pbar_progress_bar_margin_bottom'])."px;
  margin-top: ".esc_attr($cssData['pbar_progress_bar_margin_top'])."px;
}
.pbar-6310-template-".esc_attr($ids)."-wrapper{
  height: ".esc_attr($cssData['pbar_6310_bar_height'])."px;
  background: ".esc_attr($cssData['pbar_progress_bar_background_color']).";
  border-radius: ".esc_attr($cssData['pbar_6310_bar_radius'])."px;
  box-shadow: none;
  overflow: visible;
  position: relative;
}
.pbar-6310-template-".esc_attr($ids)."-bar{
  border: ".esc_attr($cssData['pbar_progress_bar_border_size'])."px solid ".esc_attr($cssData['pbar_progress_bar_border_color']).";
  border-radius: ".esc_attr($cssData['pbar_6310_bar_radius'])."px;
  box-shadow: none;
  position: relative;
  animation: animate-tem-".esc_attr($ids)."-positive ".esc_attr($cssData['animation_duration'])."s;
  height: 100%;
  width:60%;
  background-color: ".esc_attr($cssData['pbar_progress_bar_color']).";
  z-index: 1;
  background-image: linear-gradient(
  45deg,".esc_attr($cssData['pbar_progress_bar_alternate_color'])." 25%,transparent 25%,transparent 50%,".esc_attr($cssData['pbar_progress_bar_alternate_color'])." 50%,".esc_attr($cssData['pbar_progress_bar_alternate_color'])." 75%,transparent 75%,transparent);
  background-size: 40px 40px !important;
}
.pbar-6310-template-".esc_attr($ids)."-title{
  display: flex;
}
.pbar-6310-template-".esc_attr($ids)."-value{
  display: flex;
  padding-top: 0;
  padding-bottom: 0;
}
.pbar-6310-template-".esc_attr($ids)."-bar:after{
  content: '';
  box-sizing: border-box;
  transform: rotate(45deg);
  position: absolute;
  border: 6px double #fff;
  width: calc( ".esc_attr($cssData['pbar_6310_bar_height'])."px * 2 - (".esc_attr($cssData['pbar_progress_bar_border_size'])."px * 2) );
  height: calc( ".esc_attr($cssData['pbar_6310_bar_height'])."px * 2 - (".esc_attr($cssData['pbar_progress_bar_border_size'])."px * 2) );
  top: calc(-".esc_attr($cssData['pbar_6310_bar_height'])."px / 2);
  right: -".esc_attr($cssData['pbar_progress_bar_border_size'])."px;
  background: ".esc_attr($cssData['pbar_progress_bar_color']).";
  outline: 2px solid ".esc_attr($cssData['pbar_progress_bar_color']).";
}
.pbar-6310-template-".esc_attr($ids)." .pbar-6310-template-".esc_attr($ids)."-bar:after{
  background: ".esc_attr($cssData['pbar_progress_bar_color']).";
  outline: 2px solid ".esc_attr($cssData['pbar_progress_bar_color']).";
}
@-webkit-keyframes animate-tem-".esc_attr($ids)."-positive{
  0% { width: 0; }
}
@keyframes animate-tem-".esc_attr($ids)."-positive{
  0% { width: 0; }
}

  ";
  
  wp_register_style( "pbar-6310-template-".esc_attr($ids)."-css", "" );
  wp_enqueue_style( "pbar-6310-template-".esc_attr($ids)."-css" );
  wp_add_inline_style( "pbar-6310-template-".esc_attr($ids)."-css", $cssCode );
?>

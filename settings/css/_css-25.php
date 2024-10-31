<?php
$valueFontFamily = str_replace("+", " ", esc_attr($cssData['pbar_6310_value_font_family']));
$topValue = esc_attr($cssData['pbar_6310_bar_height'] + 24);
$bottomValue = esc_attr($topValue / 4);
$cssCode = " 
.pbar-6310-template-".esc_attr($ids)."{
  float: left;
  width: calc(100% - 30px);
  padding: 0 15px;
  margin-top: ".esc_attr($cssData['pbar_progress_bar_margin_top'])."px;
  margin-bottom: ".esc_attr($cssData['pbar_progress_bar_margin_bottom'])."px;
  z-index: 1;
}
.pbar-6310-template-".esc_attr($ids)."-wrapper{
  height: ".esc_attr($cssData['pbar_6310_bar_height'])."px;
  background: ".esc_attr($cssData['pbar_progress_bar_background_color']).";
  border-radius: 0;
  box-shadow: none; 
  overflow: visible;
  position: relative;
}
.pbar-6310-template-".esc_attr($ids)."-bar{
  border-right: none;
  border-radius: 0;
  box-shadow: none;
  position: relative;
  animation: animate-positive-25 ".esc_attr($cssData['animation_duration'])."s;
  height: 100%;
  background: ".esc_attr($cssData['pbar_progress_bar_color']).";
  background-image: linear-gradient(
    45deg," . esc_attr($cssData['pbar_progress_bar_alternate_color']) . " 25%,transparent 25%,transparent 50%," . esc_attr($cssData['pbar_progress_bar_alternate_color']) . " 50%," . esc_attr($cssData['pbar_progress_bar_alternate_color']) . " 75%,transparent 75%,transparent);
  background-size: 40px 40px !important;

}
.pbar-6310-template-".esc_attr($ids)."-bar:after{
  content: '';
  width:".esc_attr($cssData['pbar_6310_bar_height'] * 2)."px;
  height: ".esc_attr($cssData['pbar_6310_bar_height'] * 2 )."px;
  position: absolute;
  top: calc(-".esc_attr($cssData['pbar_6310_bar_height'])."px / 2);
  right: calc(-".esc_attr($cssData['pbar_6310_bar_height'])."px / 2);
  box-sizing: border-box;
  background: #ffffff;
  border-radius: 50%;
  border: 2px solid ".esc_attr($cssData['pbar_progress_bar_color']).";
}
.pbar-6310-template-".esc_attr($ids)."-bar i {
  position: absolute;
  right: 0;
  font-size: ".esc_attr($cssData['pbar_6310_bar_height'])."px;
  color: black;
  z-index: 1;
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: flex-end;
  align-items: center;
}
.pbar-6310-template-".esc_attr($ids)."-value {
  position: absolute;
  font-size:".esc_attr($cssData['pbar_6310_value_font_size'])."px;
  font-weight:".esc_attr($cssData['pbar_6310_value_font_weight']).";
  color: ".esc_attr($cssData['pbar_6310_value_font_color']).";
  font-family: $valueFontFamily;
  bottom: -30px;
  width: 100%;
  left: 10px;
  display: flex;
  justify-content: end;
  top: calc(".esc_attr($cssData['pbar_6310_bar_height'])."px + 15px);
}
.pbar-6310-template-".esc_attr($ids).":hover .pbar-6310-template-".esc_attr($ids)."-value{
  color: ".esc_attr($cssData['pbar_6310_value_font_hover_color']).";
}
@-webkit-keyframes animate-positive-25{
  0% { width: 0; }
}
@keyframes animate-positive-25{
  0% { width: 0; }
}
 
  ";

  wp_register_style( "pbar-6310-template-".esc_attr($ids)."-css", "" );
  wp_enqueue_style( "pbar-6310-template-".esc_attr($ids)."-css" );
  wp_add_inline_style( "pbar-6310-template-".esc_attr($ids)."-css", $cssCode );
?>

<?php
$valueFontFamily = str_replace("+", " ", esc_attr($cssData['pbar_6310_value_font_family'])); 
$cssCode = "
.pbar-6310-template-".esc_attr($ids)."{
  float: left;
  width: calc(100% - 30px);
  padding: 15px;
  margin: ".esc_attr($cssData['pbar_progress_bar_margin_top'])."px 10px ".esc_attr($cssData['pbar_progress_bar_margin_bottom'])."px;
  position: relative;
  transition: .5s;
  background: linear-gradient(to right, ".esc_attr($cssData['pbar_progress_bar_label_color']).", ".esc_attr($cssData['pbar_progress_bar_label_two_color']).");
  z-index: 1;
}
.pbar-6310-template-".esc_attr($ids)."-wrapper{
  height: ".esc_attr($cssData['pbar_6310_bar_height'])."px;
  background: ".esc_attr($cssData['pbar_progress_bar_background_color']).";
  border-radius: 0;
  box-shadow: none;
  overflow: visible;
  position: relative;
  display: flex;
  border-radius: 5px 0 0 5px;
  align-items: center;
}
.pbar-6310-template-".esc_attr($ids)."-bar{
  box-shadow: none;
  border-radius: 0;
  position: relative;
  animation: animate-positive-24 ".esc_attr($cssData['animation_duration'])."s;
  position: relative;
}
.pbar-6310-template-".esc_attr($ids)."-bar {
  box-shadow: none;
  border-radius: 0;
  position: relative;
  animation: animate-positive-24 ".esc_attr($cssData['animation_duration'])."s;
}
.pbar-6310-template-".esc_attr($ids)."-bar {
  animation: animate-positive-24 ".esc_attr($cssData['animation_duration'])."s;
  background-image: -webkit-linear-gradient(
    45deg, ".esc_attr($cssData['pbar_progress_bar_alternate_color'])." 25%,transparent 25%,transparent 50%,".esc_attr($cssData['pbar_progress_bar_alternate_color'])." 50%,".esc_attr($cssData['pbar_progress_bar_alternate_color'])." 75%,transparent 75%,transparent);
      background-image: -o-linear-gradient(45deg,".esc_attr($cssData['pbar_progress_bar_alternate_color'])." 25%,transparent 25%,transparent 50%,".esc_attr($cssData['pbar_progress_bar_alternate_color'])." 50%,".esc_attr($cssData['pbar_progress_bar_alternate_color'])." 75%,transparent 75%,transparent);
      background-image: linear-gradient(
    45deg,".esc_attr($cssData['pbar_progress_bar_alternate_color'])." 25%,transparent 25%,transparent 50%,".esc_attr($cssData['pbar_progress_bar_alternate_color'])." 50%,".esc_attr($cssData['pbar_progress_bar_alternate_color'])." 75%,transparent 75%,transparent);
      -webkit-background-size: 40px 40px;
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
.pbar-6310-template-".esc_attr($ids)."-value {
  float: right;
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  top: calc(-".esc_attr($cssData['pbar_6310_value_font_size'])."px * 1.5 );
  right: -1px;
  width: calc(".esc_attr($cssData['pbar_6310_value_font_size'])."px * 3 );
  height: calc(".esc_attr($cssData['pbar_6310_value_font_size'])."px * 1.2 );
  background: linear-gradient(to right, ".esc_attr($cssData['pbar_progress_bar_label_color']).", ".esc_attr($cssData['pbar_progress_bar_label_two_color']).");
  border-radius: 5px;
  opacity: 0;
  transform: translateY(20px);
  z-index: -1;
  transition: 1s;
  font-family: $valueFontFamily;
  font-size: ".esc_attr($cssData['pbar_6310_value_font_size'])."px;
  font-weight: ".esc_attr($cssData['pbar_6310_value_font_weight']).";
  color: ".esc_attr($cssData['pbar_6310_value_font_hover_color']).";
}
.pbar-6310-template-".esc_attr($ids).":hover .pbar-6310-template-".esc_attr($ids)."-value{
  opacity: 1;
  transform: translateY(0);
  z-index: 1;
  color: ".esc_attr($cssData['pbar_6310_value_font_hover_color']).";
}
.pbar-6310-template-".esc_attr($ids)."-value:after {
  position: absolute;
  content: '';
  height: 0;
  right: 1px;
  top: ".esc_attr($cssData['pbar_6310_value_font_size'])."px;
  width: 0;
  border: calc(".esc_attr($cssData['pbar_6310_value_font_size'])."px / 2) solid transparent;
  border-bottom-width: 0px;
  border-right-width: 0px;
  border-top-color: ".esc_attr($cssData['pbar_progress_bar_label_two_color']).";
}
@-webkit-keyframes animate-positive-24{
  0%{ width: 0; }
}

";

  wp_register_style( "pbar-6310-template-".esc_attr($ids)."-css", "" );
  wp_enqueue_style( "pbar-6310-template-".esc_attr($ids)."-css" );
  wp_add_inline_style( "pbar-6310-template-".esc_attr($ids)."-css", $cssCode );
?>

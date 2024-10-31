<?php
$valueFontFamily = str_replace("+", " ", esc_attr($cssData['pbar_6310_value_font_family']));
$cssCode = " 
.pbar-6310-template-".esc_attr($ids)."{
  float: left;
  width: calc(100% - 30px);
  padding: 0 15px;
  position: relative;
  z-index: 1;
  margin-bottom: ".esc_attr($cssData['pbar_progress_bar_margin_bottom'])."px;
  margin-top: ".esc_attr($cssData['pbar_progress_bar_margin_top'])."px;
}
.pbar-6310-template-".esc_attr($ids)."-wrapper{
  height: ".esc_attr($cssData['pbar_6310_bar_height'])."px;
  background:  ".esc_attr($cssData['pbar_progress_bar_background_color']).";
  box-shadow: none;
  overflow: visible;
  position: relative;
  display: flex;
  border-radius: ".esc_attr($cssData['pbar_6310_bar_radius'])."px;
  align-items: center;
}
.pbar-6310-template-".esc_attr($ids)."-bar {
  box-shadow: none;
 border-radius: ".esc_attr($cssData['pbar_6310_bar_radius'])."px;
  position: relative;
  animation: animate-positive ".esc_attr($cssData['animation_duration'])."s;
  position: relative;
}
.pbar-6310-template-" . esc_attr($ids) . "-bar {
  box-shadow: none;
  border-radius: 0;
  position: relative;
  animation: animate-positive ".esc_attr($cssData['animation_duration'])."s;
}
.pbar-6310-template-".esc_attr($ids)."-title {
  width: 100%;
  position: relative;
  margin-bottom: 10px;
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
  padding:".esc_attr($cssData['pbar_progress_tooltip_background_size'])."px ".esc_attr($cssData['pbar_progress_tooltip_background_size'] * 2)."px;
  background: ".esc_attr($cssData['pbar_progress_tooltip_background_color']).";
  font-size: ".esc_attr($cssData['pbar_6310_value_font_size'])."px;
  font-weight: ".esc_attr($cssData['pbar_6310_value_font_weight']).";
  color: ".esc_attr($cssData['pbar_6310_value_font_color']).";
  font-family: $valueFontFamily;
  float: right;
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  top: calc(-38px - ".esc_attr($cssData['pbar_progress_tooltip_background_size'])."px);
  right: -1px;
  border-radius: 5px;
  border-bottom-right-radius: 0;
}
.pbar-6310-template-".esc_attr($ids).":hover .pbar-6310-template-".esc_attr($ids)."-value{
  color: ".esc_attr($cssData['pbar_6310_value_font_hover_color']).";    
}
.pbar-6310-template-".esc_attr($ids)."-value:after {
  position: absolute;
  content: '';
  height: 0;
  right: 0;
  top: calc(".esc_attr($cssData['pbar_progress_tooltip_background_size'])."px + 19px);
  width: 0;
  border: calc(".esc_attr($cssData['pbar_progress_tooltip_background_size'])."px * 2 + 3px) solid transparent;
  border-bottom-width: 0px;
  border-right-width: 0px;
  border-top-color: ".esc_attr($cssData['pbar_progress_tooltip_background_color']).";
}

@-webkit-keyframes animate-positive-30{
  0%{ width: 0; }
}
@keyframes animate-positive-30{
  0%{ width: 0; }
} 
  ";

  wp_register_style( "pbar-6310-template-".esc_attr($ids)."-css", "" );
  wp_enqueue_style( "pbar-6310-template-".esc_attr($ids)."-css" );
  wp_add_inline_style( "pbar-6310-template-".esc_attr($ids)."-css", $cssCode );
?>

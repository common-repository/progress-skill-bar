<?php
 $titleFontFamily =  str_replace("+", " ", esc_attr($cssData['pbar_6310_title_font_family']));   
$cssCode = "
.pbar-6310-template-".esc_attr($ids)."{
  float: left;
  width: calc(100% - 30px);
  padding: 0 15px;
  margin-bottom:10px;
}   
.pbar-6310-template-".esc_attr($ids)."-wrapper {
  height:".esc_attr($cssData['pbar_6310_bar_height'])."px;
  background: ".esc_attr($cssData['pbar_progress_bar_background_color']).";
  margin-top: ".esc_attr($cssData['pbar_progress_bar_margin_top'])."px; 
  margin-bottom: ".esc_attr($cssData['pbar_progress_bar_margin_bottom'])."px;
  border-radius:".esc_attr($cssData['pbar_6310_bar_radius'])."px;
  overflow: hidden;
}
.pbar-6310-template-".esc_attr($ids)."-title{
  padding-left: 10px;
  padding-right: 10px;
}
 .pbar-6310-template-".esc_attr($ids)."-bar{
  box-shadow: none;
  border: none;
  position: relative;
  background: linear-gradient(to right, ".esc_attr($cssData['pbar_progress_bar_first_color']).", ".esc_attr($cssData['pbar_progress_bar_second_color']).", ".esc_attr($cssData['pbar_progress_bar_third_color']).");
  width:60%;
  -webkit-animation: animate-positive-".esc_attr($ids)." ".esc_attr($cssData['animation_duration'])."s;
  animation: animate-positive-".esc_attr($ids)." ".esc_attr($cssData['animation_duration'])."s;
  height: 100%;
  display: flex;
  align-items: center;
}
.pbar-6310-template-".esc_attr($ids)."-value{
  display: flex;
  color: ".esc_attr($cssData['pbar_6310_title_font_color'])."; 
  font-size:".esc_attr($cssData['pbar_6310_title_font_size'])."px;
  font-weight:".esc_attr($cssData['pbar_6310_title_font_weight']).";
  color: ".esc_attr($cssData['pbar_6310_title_font_color']).";
  text-transform: ".esc_attr($cssData['pbar_6310_title_text_transform']).";
  line-height:".esc_attr($cssData['pbar_6310_title_line_height'])."px;
  text-align: ".esc_attr($cssData['pbar_6310_title_text_align']).";
  font-family: $titleFontFamily;
}
.pbar-6310-template-".esc_attr($ids).":hover .pbar-6310-template-".esc_attr($ids)."-value{
  color: ".esc_attr($cssData['pbar_6310_title_font_hover_color']).";  
}
@-webkit-keyframes animate-positive-".esc_attr($ids)."{
  0%{ width: 0; }
}
@keyframes animate-positive-".esc_attr($ids)."{
  0%{ width: 0; }
} 
  ";

  wp_register_style( "pbar-6310-template-".esc_attr($ids)."-css", "" );
  wp_enqueue_style( "pbar-6310-template-".esc_attr($ids)."-css" );
  wp_add_inline_style( "pbar-6310-template-".esc_attr($ids)."-css", $cssCode );
?>

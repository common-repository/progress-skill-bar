<?php

$valueFontFamily = str_replace("+", " ", esc_attr($cssData['pbar_6310_value_font_family'])); 
$cssCode = "

.pbar-6310-template-".esc_attr($ids)."-parallax {
  float: left;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 1;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: stretch;
}
.pbar-6310-template-".esc_attr($ids)."-parallax iframe {
  position: absolute !important;
  top: -100%;
  left: 0;
  width: 100%;
  height: 300%;
  pointer-events: none;
  opacity: ".esc_attr($cssData['video_opacity']).";
  position: relative;
}
.pbar-6310-template-".esc_attr($ids)."-wrapper {
  float: left;
  margin: 0;
  z-index: 1;
  display: none;
  margin-top: ".esc_attr($cssData['pbar_progress_bar_margin_top'])."px;
  margin-bottom:  ".esc_attr($cssData['pbar_progress_bar_margin_bottom'])."px ;
}
.pbar-6310-template-".esc_attr($ids)."{
  background: none;
  margin: 0 auto;
  box-shadow: none;
  position: relative;
}
.pbar-6310-template-".esc_attr($ids)." > div{
    width: 50%;
    height: 100%;
    overflow: hidden;
    position: absolute;
    top: 0;
    z-index: 1;
}
.pbar-6310-template-".esc_attr($ids)."-wrapper:hover .pbar-6310-template-".esc_attr($ids)."-title{
  color: ".esc_attr($cssData['pbar_6310_title_font_hover_color']).";
}
 .pbar-6310-template-".esc_attr($ids)."-left{
    left: 0;
}
 .pbar-6310-template-".esc_attr($ids)."-bar{
    width: 100%;
    height: 100%;
    background: none;
    border: ".esc_attr($cssData['pbar_progress_bar_border_size'])."px solid;
    position: absolute;
    top: 0;
}
.pbar-6310-template-".esc_attr($ids)." .pbar-6310-template-".esc_attr($ids)."-left .pbar-6310-template-".esc_attr($ids)."-bar{
    left: 100%;
    border-left: 0 !important;
    -webkit-transform-origin: center left;
    transform-origin: center left;
    width: 100%;
}
.pbar-6310-template-".esc_attr($ids)." .pbar-6310-template-".esc_attr($ids)."-right{
    right: 0;
}
.pbar-6310-template-".esc_attr($ids)." .pbar-6310-template-".esc_attr($ids)."-right .pbar-6310-template-".esc_attr($ids)."-bar{
    left: -100%;
    border-right: 0 !important;
    -webkit-transform-origin: center right;
    transform-origin: center right;
}
 .pbar-6310-template-".esc_attr($ids)."-value{
    border-radius: 50%;
    border: ".esc_attr($cssData['pbar_progress_bar_border_size'])."px solid ".esc_attr($cssData['pbar_inner_section_border_color']).";
    font-size:".esc_attr($cssData['pbar_6310_value_font_size'])."px;
    font-weight:".esc_attr($cssData['pbar_6310_value_font_weight']).";    
    font-family: $valueFontFamily;
    position: absolute;
    display: flex;
    align-items: center;
    justify-content: center;
}
.pbar-6310-template-".esc_attr($ids)."-value-wrapper {
  float: left;
  width: 100% !important;
  display: flex;
  height: 100%;
  align-items: center;
  justify-content: center;
}
.pbar-6310-template-" . esc_attr($ids) . "-main-wrapper .pbar-6310-template-" . esc_attr($ids) . "-common-overlay{
  justify-content: ".esc_attr($cssData['item_align']).";    
}
";


for($i = 1; $i <= $cssData['desktop_item_per_row']; $i++) {
  $cssCode .= "
    .pbar-6310-row .pbar-6310-template-".esc_attr($ids)."-common-overlay .pbar-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n+{$i}) .pbar-6310-template-".esc_attr($ids)."-bar{
      border-color: ".esc_attr($cssData["pbar_progress_bar_border_". esc_attr($i) ."_color"]).";
    }
    .pbar-6310-row .pbar-6310-template-".esc_attr($ids)."-common-overlay .pbar-6310-col-".esc_attr($cssData['desktop_item_per_row']).":nth-child(".esc_attr($cssData['desktop_item_per_row'])."n+{$i}) .pbar-6310-template-".esc_attr($ids)."-value {
      color: ".esc_attr($cssData["pbar_progress_bar_border_". esc_attr($i) ."_color"]).";
    }";
}

$cssCode .= "@media only screen and (max-width: 990px){
            .pbar-6310-template-".esc_attr($ids)."{ margin-bottom: 20px; }";
for($i = 1; $i <= 4; $i++) {
  $cssCode .= "
    .pbar-6310-row .pbar-6310-template-".esc_attr($ids)."-common-overlay .pbar-6310-col-4:nth-child(4n+{$i}) .pbar-6310-template-".esc_attr($ids)."-bar{
      border-color: ".esc_attr($cssData["pbar_progress_bar_border_". esc_attr($i) ."_color"]).";
    }
    .pbar-6310-row .pbar-6310-template-".esc_attr($ids)."-common-overlay .pbar-6310-col-4:nth-child(4n+{$i}) .pbar-6310-template-".esc_attr($ids)."-value {
      color: ".esc_attr($cssData["pbar_progress_bar_border_". esc_attr($i) ."_color"]).";
    }";
}
$cssCode .= "}";

  wp_register_style( "pbar-6310-template-".esc_attr($ids)."-css", "" );
  wp_enqueue_style( "pbar-6310-template-".esc_attr($ids)."-css" );
  wp_add_inline_style( "pbar-6310-template-".esc_attr($ids)."-css", $cssCode );
?>

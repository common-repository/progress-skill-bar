<?php
  $titleFontFamily =  str_replace("+", " ", esc_attr($cssData['pbar_6310_title_font_family'])); 
  $bgCSS = '';
  if($bgType == 1) {
    $bgCSS = "background: transparent;";
  } else if($bgType == 2) {
    $bgCSS = "background-color: " . (isset($cssData['template_background_color']) ? esc_attr($cssData['template_background_color']) : 'rgba(255, 255, 255, 0)') . ";";
  } else if($bgType == 3) {
    $bgCSS = "background-image: url('" . (isset($cssData['box_background_image']) ? esc_attr($cssData['box_background_image']) : 'rgba(255, 255, 255, 0)') . "');";
  }

  $bgColor = '';
  if($bgType == 3){
    $bgColor = "background-color: ".esc_attr($cssData['image_opacity']).";";
  } else if($bgType == 4) {
    $bgColor = "background-color: ".esc_attr($cssData['video_opacity_color']).";";
  }

  $cssCode = "
  .pbar-6310-template-".esc_attr($ids)."-main-wrapper {
    width: 100%;
}
  .pbar-6310-template-".esc_attr($ids)."-parallax { 
    {$bgCSS}
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    overflow: hidden;
  }
  .pbar-6310-template-".esc_attr($ids)."-common-overlay {
    float: left;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 1;
    $bgColor
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: stretch;
  }
  .pbar-6310-template-".esc_attr($ids)."-common-overlay iframe {
    position: absolute !important;
    top: -100%;
    left: 0;
    width: 100%;
    height: 300%;
    pointer-events: none;
    opacity: ".esc_attr($cssData['video_opacity']).";
    position: relative;
  }

  .pbar-6310-template-".esc_attr($ids)."-title{
    font-size:".esc_attr($cssData['pbar_6310_title_font_size'])."px;
    font-weight:".esc_attr($cssData['pbar_6310_title_font_weight']).";
    color: ".esc_attr($cssData['pbar_6310_title_font_color']).";
    text-transform: ".esc_attr($cssData['pbar_6310_title_text_transform']).";
    line-height:".esc_attr($cssData['pbar_6310_title_line_height'])."px;
    text-align: ".esc_attr($cssData['pbar_6310_title_text_align']).";
    font-family: $titleFontFamily;
    padding-top: ".esc_attr($cssData['pbar_6310_title_padding_top'])."px;
    padding-bottom: ".esc_attr($cssData['pbar_6310_title_padding_bottom'])."px;
  }
  .pbar-6310-template-".esc_attr($ids).":hover .pbar-6310-template-".esc_attr($ids)."-title{
    color: ".esc_attr($cssData['pbar_6310_title_font_hover_color']).";    
  }
  /*########################### Search End ###########################*/  

  .pbar-6310-col-2, .pbar-6310-col-3, .pbar-6310-col-4, .pbar-6310-col-5, .pbar-6310-col-6 {
    margin-left: ". (isset($cssData['item_margin'])?esc_attr($cssData['item_margin']):15) ."px !important;
    margin-right: ". (isset($cssData['item_margin'])?esc_attr($cssData['item_margin']):15) ."px !important;
  }
    .pbar-6310-col-2 {
     width: calc(50% - ". ((isset($cssData['item_margin'])?esc_attr($cssData['item_margin']):15) * 2) ."px) !important;
  }
  .pbar-6310-col-3 {
     width: calc(33.33% - ". ((isset($cssData['item_margin'])?esc_attr($cssData['item_margin']):15) * 2) ."px) !important;
  }
  .pbar-6310-col-4 {
     width: calc(25% - ". ((isset($cssData['item_margin'])?esc_attr($cssData['item_margin']):15) * 2) ."px) !important;
  }
  .pbar-6310-col-5 {
     width: calc(20% - ". ((isset($cssData['item_margin'])?esc_attr($cssData['item_margin']):15) * 2) ."px) !important;
  }
  .pbar-6310-col-6 {
     width: calc(16.6667% - ". ((isset($cssData['item_margin'])?esc_attr($cssData['item_margin']):15) * 2) ."px) !important;
  }
  @media screen and (max-width: 1023px) {
    .pbar-6310-col-2, 
    .pbar-6310-col-3, 
    .pbar-6310-col-4, 
    .pbar-6310-col-5, 
    .pbar-6310-col-6{
      width: ". (($tablet_row > 1) ? "calc(" . esc_attr(100/$tablet_row) . "% - " . esc_attr($cssData['item_margin'] * 2) . "px)" : "100%") ." !important;
    }
  }
  @media screen and (max-width: 767px) {
    .pbar-6310-col-2, 
    .pbar-6310-col-3, 
    .pbar-6310-col-4, 
    .pbar-6310-col-5, 
    .pbar-6310-col-6{
      width: ". (($mobile_row > 1) ? "calc(" . esc_attr(100/$mobile_row) . "% - " . esc_attr($cssData['item_margin'] * 2) . "px)" : "100%") ." !important;
    
    }
  }
  @media only screen and (max-width: 375px) {
    .pbar-6310-template-".esc_attr($ids)."-common-overlay iframe {
      display: none;  
    }
  ";

  $num = rand(1000, 9999);
  wp_register_style( "pbar-6310-template-{$num}-css", "" );
  wp_enqueue_style( "pbar-6310-template-{$num}-css" );
  wp_add_inline_style( "pbar-6310-template-{$num}-css", $cssCode );
?>
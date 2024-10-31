<?php

$valueFontFamily = str_replace("+", " ", esc_attr($cssData['pbar_6310_value_font_family'])); 
$cssCode = " 
  .pbar-6310-template-".esc_attr($ids)."{
    float: left;
    width: calc(100% - 30px);
    padding: 0 15px;
    position: relative;
    margin-bottom: ".esc_attr($cssData['pbar_progress_bar_margin_bottom'])."px;
    margin-top: ".esc_attr($cssData['pbar_progress_bar_margin_top'])."px;
    z-index: 1;
  }
  .pbar-6310-template-".esc_attr($ids)."-wrapper{
    position: relative;
    background-color: ".esc_attr($cssData['pbar_progress_bar_background_color']).";
    box-shadow: rgb(0 0 0 / 10%) 0px 1px 2px inset !important;
    overflow: visible;
    height: ".esc_attr($cssData['pbar_6310_bar_height'])."px;
    border-radius: ".esc_attr($cssData['pbar_6310_bar_radius'])."px;
  }
  .pbar-6310-template-".esc_attr($ids)."-icon{
    display: flex;
    align-items: center;
    justify-content: center;
    color: ".esc_attr($cssData['pbar_6310_value_font_color']).";
  }
  .pbar-6310-template-".esc_attr($ids)."-wrapper:hover .pbar-6310-template-".esc_attr($ids)."-icon{
    display: flex;
    align-items: center;
    justify-content: center;
    color: ".esc_attr($cssData['pbar_6310_value_font_hover_color']).";
  }
  .pbar-6310-template-".esc_attr($ids)."-value {
    margin: 0 5px;
    font-family: $valueFontFamily;
    font-size: ".esc_attr($cssData['pbar_6310_value_font_size'])."px;
    font-weight: ".esc_attr($cssData['pbar_6310_value_font_weight']).";
    color: ".esc_attr($cssData['pbar_6310_value_font_color']).";
    display: flex;
  }
  .pbar-6310-template-".esc_attr($ids).":hover .pbar-6310-template-".esc_attr($ids)."-value{
    color: ".esc_attr($cssData['pbar_6310_value_font_hover_color']).";
  }
  .pbar-6310-template-".esc_attr($ids)."-icon,
  .pbar-6310-template-".esc_attr($ids)."-title-data-container{
    width: calc( ".esc_attr($cssData['pbar_6310_bar_height'])."px * 2 - (".esc_attr($cssData['pbar_6310_circle_border_size'])."px * 2) );
    height: calc( ".esc_attr($cssData['pbar_6310_bar_height'])."px * 2 - (".esc_attr($cssData['pbar_6310_circle_border_size'])."px * 2) );
    border-radius: ".esc_attr($cssData['pbar_6310_bar_radius'])."px;
    line-height:calc(( ".esc_attr($cssData['pbar_6310_bar_height'])."px * 2) - (".esc_attr($cssData['pbar_6310_circle_border_size'])."px * 2) );
    background: #fff;
    border: ".esc_attr($cssData['pbar_6310_circle_border_size'])."px solid ".esc_attr($cssData['pbar_progress_bar_color']).";
    font-size: ".esc_attr($cssData['pbar_6310_value_font_size'])."px;
    font-weight: ".esc_attr($cssData['pbar_6310_value_font_weight']).";
    color: ".esc_attr($cssData['pbar_6310_value_font_color']).";
    position: absolute;
    top: calc(-".esc_attr($cssData['pbar_6310_bar_height'])."px / 2 + ".esc_attr($cssData['pbar_6310_circle_border_size'])."px);
    right: -5px;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .pbar-6310-template-".esc_attr($ids)."-icon{
    right: auto;
    left: -5px;
  }
  .pbar-6310-template-".esc_attr($ids)."-icon,
    .pbar-6310-template-".esc_attr($ids)."-title-data-container{
    border: ".esc_attr($cssData['pbar_6310_circle_border_size'])."px solid ".esc_attr($cssData['pbar_progress_bar_color']).";
  }
  .pbar-6310-template-".esc_attr($ids)."-bar {
    box-shadow: none;
    position: relative;
    border-radius: 15px;
    animation: ".esc_attr($cssData['animation_duration'])."s ease 0s 1 normal none running animate-positive;
  }
  .pbar-6310-template-".esc_attr($ids)."-bar {
    float: left;
    width: 50%;
    height: 100%;
    font-size: 12px;
    line-height: 20px;
    color: rgb(255, 255, 255);
    text-align: center;
    background:".esc_attr($cssData['pbar_progress_bar_color']).";
    box-shadow: rgba(0, 0, 0, 0.15) 0px -1px 0px inset;
    transition: width 0.6s ease 0s;
  }
  @-webkit-keyframes animate-positive{
    0%{ width: 0; }
  }
  @keyframes animate-positive{
    0%{ width: 0; }
  }
   
  ";

  wp_register_style( "pbar-6310-template-".esc_attr($ids)."-css", "" );
  wp_enqueue_style( "pbar-6310-template-".esc_attr($ids)."-css" );
  wp_add_inline_style( "pbar-6310-template-".esc_attr($ids)."-css", $cssCode );
?>

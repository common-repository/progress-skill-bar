   <?php
   echo "<div class='pbar-6310-row'>";
   echo "<div class='pbar-6310-template-" . esc_attr($ids) . "-main-wrapper'>";
   echo "<div class='pbar-6310-template-" . esc_attr($ids) . "-parallax'>";
   if ($bgType == 4) {
      $youtube_video_url = $cssData['youtube_video_url'] ? explode('?v=', esc_attr($cssData['youtube_video_url'])) : [];
      if (isset($youtube_video_url[1])) {
         echo "<iframe src='https://www.youtube.com/embed/" . esc_attr($youtube_video_url[1]) . "?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&playlist=" . esc_attr($youtube_video_url[1]) . "&mute=1&allowfullscreen=1&allow=accelerometer&autoplay=1&rel=0' frameborder='0' allowfullscreen></iframe>";
      }
   }
   echo "<div class='pbar-6310-template-" . esc_attr($ids) . "-common-overlay pbar-6310-template-6'>";
   foreach ($results as $value) {
      $dynamicId = "{$ids}-{$value->id}";
   ?>
      <div class="pbar-6310-col-<?php echo esc_attr($cssData['desktop_item_per_row']) ?>">
         <div class="pbar-6310-template-<?php echo esc_attr($ids) ?>-wrapper">
            <div class="pbar-6310-template-<?php echo esc_attr($ids) ?>">
               <div class="pbar-6310-template-<?php echo esc_attr($ids) ?>-left">
                  <div class="pbar-6310-template-<?php echo esc_attr($ids) ?>-bar pbar-6310-circle pbar-6310-<?php echo esc_attr($dynamicId) ?>-circle" data-id="pbar-6310-<?php echo esc_attr($dynamicId) ?>-circle"></div>
               </div>
               <div class="pbar-6310-template-<?php echo esc_attr($ids) ?>-right">
                  <div class="pbar-6310-template-<?php echo esc_attr($ids) ?>-bar pbar-6310-circle pbar-6310-<?php echo esc_attr($dynamicId) ?>-circle" data-id="pbar-6310-<?php echo esc_attr($dynamicId) ?>-circle"></div>
               </div>
               <div class="pbar-6310-template-<?php echo esc_attr($ids) ?>-value-wrapper">
                  <?php pbar_6310_value_percentage($value, $cssData, $dynamicId, $ids) ?>
               </div>
            </div>
            <div class="pbar-6310-template-<?php echo esc_attr($ids) ?>-title"><?php echo pbar_6310_replace(esc_attr($value->name)) ?></div>
         </div>
      </div>

   <?php
      $startValue = 180;
      $endValue = 0;
      if($value->percentage < 50){
         $startValue = round($value->percentage  * 3.6);
      }
      if($value->percentage > 50){
         $endValue = round(($value->percentage - 50)  * 3.6);
      }

      $dynamicCSS = "
      .pbar-6310-" . esc_attr($dynamicId) . "{
         width: " . esc_attr($value->percentage) . "%;
      }

      .pbar-6310-template-".esc_attr($ids)." .pbar-6310-template-".esc_attr($ids)."-right .pbar-6310-".esc_attr($dynamicId)."-circle{
         animation: loading-" . esc_attr($dynamicId) . "-1 " . (esc_attr($cssData['animation_duration'])/2) ."s linear forwards;
      }
      .pbar-6310-template-".esc_attr($ids)." .pbar-6310-template-".esc_attr($ids)."-left .pbar-6310-".esc_attr($dynamicId)."-circle{
            animation: loading-" . esc_attr($dynamicId) . "-2 " . ((esc_attr($cssData['animation_duration'])/2) - .2) ."s linear forwards " . (esc_attr($cssData['animation_duration']) / 2) ."s;
      }
      @keyframes loading-" . esc_attr($dynamicId) . "-1{
            0%{
               -webkit-transform: rotate(0deg);
               transform: rotate(0deg);
            }
            100%{
               -webkit-transform: rotate(".esc_attr($startValue)."deg);
               transform: rotate(".esc_attr($startValue)."deg);
            }
      }
      @keyframes loading-" . esc_attr($dynamicId) . "-2{
            0%{
               -webkit-transform: rotate(0deg);
               transform: rotate(0deg);
            }
            100%{
               -webkit-transform: rotate(".esc_attr($endValue)."deg);
               transform: rotate(".esc_attr($endValue)."deg);
            }
      }
   ";
      wp_register_style("pbar-6310-template-" . esc_attr($dynamicId) . "-css", "");
      wp_enqueue_style("pbar-6310-template-" . esc_attr($dynamicId) . "-css");
      wp_add_inline_style("pbar-6310-template-" . esc_attr($dynamicId) . "-css", $dynamicCSS);
   }
   echo "</div>";
   echo "</div>";
   echo "</div>";
   echo "</div>";

   $tem_06_code = "
   jQuery(window).on('load', function () {
      let divWidth = Math.round(jQuery('.pbar-6310-col-". esc_attr($cssData['desktop_item_per_row']) ."').width()) - 20;
      divWidth = Math.round(divWidth / 2) * 2;
      let halfWidth = Math.round(divWidth / 2);

      jQuery('.pbar-6310-template-".esc_attr($ids)."-wrapper').css({
         'display': 'block'
      });

      jQuery('.pbar-6310-template-".esc_attr($ids)."').css({
         'width': `\${divWidth}px`,
         'height': `\${divWidth}px`,
         'line-height': `\${divWidth}px`
      });

      jQuery('.pbar-6310-template-".esc_attr($ids)." .pbar-6310-template-".esc_attr($ids)."-left .pbar-6310-template-".esc_attr($ids)."-bar').css({
         'border-top-right-radius': `\${halfWidth}px`,
         'border-bottom-right-radius': `\${halfWidth}px`
      });

      jQuery('.pbar-6310-template-".esc_attr($ids)." .pbar-6310-template-".esc_attr($ids)."-right .pbar-6310-template-".esc_attr($ids)."-bar').css({
         'border-top-left-radius': `\${halfWidth}px`,
         'border-bottom-left-radius': `\${halfWidth}px`
      });

      jQuery('.pbar-6310-template-".esc_attr($ids)."-value').css({
         'width': `calc(\${divWidth}px - 30px)`,
         'height': `calc(\${divWidth}px - 30px)`,
         'line-height': `calc(\${divWidth}px - 30px)`
      });
   });
   ";

   wp_register_script('cnvb-6310-template-' . esc_attr($ids), '');
   wp_enqueue_script('cnvb-6310-template-' . esc_attr($ids));
   wp_add_inline_script('cnvb-6310-template-' . esc_attr($ids), $tem_06_code);
   ?>
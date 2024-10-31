<?php
echo "<div class='pbar-6310-row'>";
echo "<div class='pbar-6310-template-" . esc_attr($ids) . "-main-wrapper'>";
echo "<div class='pbar-6310-template-" . esc_attr($ids) . "-parallax'>";
echo "<div class='pbar-6310-template-" . esc_attr($ids) . "-common-overlay'>";
if ($bgType == 4) {
   $youtube_video_url = $cssData['youtube_video_url'] ? explode('?v=', esc_attr($cssData['youtube_video_url'])) : [];
   if (isset($youtube_video_url[1])) {
      echo "<iframe src='https://www.youtube.com/embed/" . esc_attr($youtube_video_url[1]) . "?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&playlist=" . esc_attr($youtube_video_url[1]) . "&mute=1&allowfullscreen=1&allow=accelerometer&autoplay=1&rel=0' frameborder='0' allowfullscreen></iframe>";
   }
}
foreach ($results as $value) {
   $dynamicId = "{$ids}-{$value->id}";
?>
   <div class="pbar-6310-template-<?php echo esc_attr($ids) ?>">
      <div class=pbar-6310-template-<?php echo esc_attr($ids) ?>-title><?php echo pbar_6310_replace(esc_attr($value->name)) ?></div>
      <div class="pbar-6310-template-<?php echo esc_attr($ids) ?>-outer">
         <div class="pbar-6310-template-<?php echo esc_attr($ids) ?>-wrapper">
            <div class="pbar-6310-template-<?php echo esc_attr($ids) ?>-bar pbar-6310-template-<?php echo esc_attr($ids) ?>-item  pbar-6310-<?php echo esc_attr($dynamicId)  ?> pbar-6310-template-<?php echo esc_attr($ids) ?>-bar-striped" id="pbar-6310-<?php echo esc_attr($dynamicId) ?>"></div>
               <?php pbar_6310_value_percentage($value, $cssData, $dynamicId, $ids) ?>
         </div>
      </div>
   </div>
<?php
   $dynamicCSS = "
      .pbar-6310-" . esc_attr($dynamicId) . "{
         width: " . esc_attr($value->percentage) . "%;
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
?>
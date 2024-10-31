<?php
if (!defined('ABSPATH'))
   exit;
?>
<div class="wpm-6310">
   <h1>Plugin Export / Import</h1>

   <button class="pbar-6310-btn-primary" id="export-progress-bar-data">Export Plugin Data</button>
   <button class="pbar-6310-btn-primary" id="import-progress-bar-data">Import Plugin Data</button>
   <?php

   wp_enqueue_media();
   pbar_6310_export_full_service_plugin();

   if (!empty($_POST['update'])) {
      $nonce = $_REQUEST['_wpnonce'];
      if (!wp_verify_nonce($nonce, 'pbar-6310-nonce-update')) {
         die('You do not have sufficient permissions to access this page.');
      } else {
         if($_POST['file_url'] && substr($_POST['file_url'], -3) == 'txt'){
            pbar_6310_import_full_plugin($_POST['file_url']);            
         } else{
            echo "<p class='pbar-6310-import-notice'>Can't import data. Please upload valid file.</p>";
         }
      }
   }
   ?>
   <form action="" method="post">
      <?php wp_nonce_field("pbar-6310-nonce-update") ?>
      <div class="pbar-6310-modal-body-form">
         <table width="100%" cellpadding="10" cellspacing="0" class="import-file pbar-6310-import-file">
            <tr>
               <td width="70px"><b>File URL</b> <span class="pbar-6310-pro">(Pro) <div class="pbar-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
               <td>
                  <input type="text" required name="file_url" id="file-url" class="pbar-6310-form-input pbar-6310-form-input-width">
                  <input type="button" id="upload-csv-file" value="Upload file" class="pbar-6310-btn-default">
               </td>
            </tr>
            <tr>
               <td colspan="3">
                  <input type="submit" name="update" class="pbar-6310-btn-primary pbar-6310-margin-right-10" value="Import Data"  onclick="return confirm('If you import you will lose all of your previous data of this plugin. Do you want to continue?');" />
               </td>
            </tr>
         </table>
      </div>
      <br class="pbar-6310-clear" />
   </form>
   <script>
      jQuery(document).ready(function() {
         /* ######### Media Start ########### */
         jQuery("body").on("click", "#import-progress-bar-data", function(e) {
            jQuery('.import-file').show();
         });

         jQuery('body').on('click', '#export-progress-bar-data', function(){
            if (!confirm("Do you want to export progress bar full plugin?")){
               return false;
            } else{
               window.open(jQuery('#export-progress-bar-plugin').attr('href'), '_blank');
            }
         });

         jQuery("body").on("click", "#upload-csv-file", function(e) {
            e.preventDefault();
            var image = wp.media({
                  title: 'Upload File',
                  multiple: false
               }).open()
               .on('select', function(e) {
                  var uploaded_image = image.state().get('selection').first();
                  var image_url = uploaded_image.toJSON().url;
                  jQuery("#file-url").val(image_url);
               });

            jQuery("#pbar_6310_add_new_media").css({
               "overflow-x": "hidden",
               "overflow-y": "auto"
            });
         });
      });
   </script>
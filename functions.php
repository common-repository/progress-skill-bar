<?php
function pbar_6310_link_css_js($hook)
{
   if(
      $hook != 'toplevel_page_pbar-6310-progress-bar' && 
      $hook != 'progress-bar_page_pbar-6310-template-01-10' && 
      $hook != 'progress-bar_page_pbar-6310-template-11-20' && 
      $hook != 'progress-bar_page_pbar-6310-template-21-30' && 
      $hook != 'progress-bar_page_pbar-6310-progress-bar-manage-items' && 
      $hook != 'progress-bar_page_pbar-6310-progress-bar-import-export' && 
      $hook != 'progress-bar_page_pbar-6310-progress-bar-license' && 
      $hook != 'progress-bar_page_pbar-6310-progress-bar-use' && 
      $hook != 'progress-bar_page_pbar-6310-wpmart-plugins' 
   ) {
   return;
}
   wp_enqueue_style('pbar-google-font', 'https://fonts.googleapis.com/css?family=Amaranth');
   wp_enqueue_style('pbar-6310-style', plugins_url('assets/css/style.css', __FILE__));
   wp_enqueue_style('pbar-6310-color-style', plugins_url('assets/css/jquery.minicolors.css', __FILE__));
   wp_enqueue_style('pbar-6310-font-select-style', plugins_url('assets/css/fontselect.css', __FILE__));
   wp_enqueue_style('pbar-6310-font-awesome-5-0-13', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css');
   wp_enqueue_style('pbar-6310-codemirror-style', 'https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.48.0/codemirror.min.css');
   wp_enqueue_style('pbar-6310-color-style', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-minicolors/2.3.4/jquery.minicolors.min.css');
   wp_enqueue_style('pbar-6310-jquery-ui-css', "https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css");
   wp_enqueue_style('pbar-6310-style-01-10', plugins_url('assets/css/style-01-10.css', __FILE__));
   wp_enqueue_style('pbar-6310-style-11-20', plugins_url('assets/css/style-11-20.css', __FILE__));
   wp_enqueue_style('pbar-6310-style-21-30', plugins_url('assets/css/style-21-30.css', __FILE__));
   
   wp_enqueue_script('pbar-6310-font-select-js', plugins_url('assets/js/fontselect.js', __FILE__), array('jquery'));
   wp_enqueue_script('pbar-6310-jquery-ui-js', 'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js', array('jquery'));
   wp_enqueue_script('pbar-6310-color-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-minicolors/2.3.4/jquery.minicolors.min.js', array('jquery'));
   wp_enqueue_script('pbar-6310-codemirror-js', 'https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.48.0/codemirror.min.js', array('jquery'));
   wp_enqueue_script('pbar-6310-admin-js', plugins_url('assets/js/pbar-6310-admin-script.js', __FILE__), array('jquery'));
   wp_enqueue_script('pbar-6310-modal-js', plugins_url('assets/js/pbar-6310-admin-modal.js', __FILE__), array('jquery'));
   wp_enqueue_script('pbar-6310-counter-js', plugins_url('assets/js/jquery.counterup.js', __FILE__), array('jquery'));
}

function pbar_6310_replace($data) {
	if($data == '') return ''; 
	else if(strlen($data) == 0) return ''; 
	while(strpos($data, "\\") !== false) {
			$data = str_replace("\\", "", $data);
	}
	return $data;
}

function pbar_6310_get_user_roles(){
	if(!function_exists('wp_get_current_user')) {
	include(ABSPATH . "wp-includes/pluggable.php");
	}
	$current_user = wp_get_current_user();
	if(isset($current_user->roles[0]) && $current_user->roles[0] == 'editor'){
	return 'edit_posts';
	}
	return 'manage_options';
}

function pbar_6310_extract_data($data)
{
   $array_key = "";
   $array_value = "";
   $i = 0;

   foreach ($data as $key => $value) {
      if ($i >= 1) {
         if ($array_value) {
            $array_key .= ",";
            $array_value .= "||##||";
         }
         $array_key .= sanitize_text_field($key);
         $array_value .= sanitize_text_field($value);
      }
      $i++;
   }
   return $array_key . "!!##!!" . $array_value;
}


   function pbar_6310_progress_bar_install()
   {
      global $wpdb;

      $style_table = $wpdb->prefix . 'pbar_6310_style';
      $item_table = $wpdb->prefix . 'pbar_6310_item';
      $charset_collate = $wpdb->get_charset_collate();

      $sql1 = "CREATE TABLE IF NOT EXISTS $style_table (
        id int UNSIGNED NOT NULL AUTO_INCREMENT,
        name varchar(100) DEFAULT NULL,
        style_name varchar(100) DEFAULT NULL,
        css text DEFAULT NULL,
        itemids text DEFAULT NULL,
        PRIMARY KEY  (id)
      ) $charset_collate;";

      $sql2 = "CREATE TABLE IF NOT EXISTS $item_table (
        id int UNSIGNED NOT NULL AUTO_INCREMENT,
        name text DEFAULT NULL,
        percentage text DEFAULT NULL,
        PRIMARY KEY(id)
      ) $charset_collate;";


      require_once(ABSPATH . 'wp-admin/includes/upgrade.php');     
      $wpdb->query($sql1);
      $wpdb->query($sql2); 

      $itemData = $wpdb->query("select id from $item_table LIMIT 1");
      if (!($itemData)) {
         $wpdb->query("INSERT INTO {$item_table} 
         (name, percentage) 
         VALUES
            ('Web service', '90'),
            ('CSS', '100'),
            ('HTML', '85')
         ");
      }
   }

   function pbar_6310_get_option($name) {
		global $wpdb;
		$data = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$wpdb->prefix}options WHERE option_name = %s", $name), ARRAY_A);
		return $data ? $data['option_value'] : '';
	}

   function pbar_6310_version_status() {
      global $wpdb;
      $db_version = pbar_6310_get_option('pbar_6310_version_info');
      if(!$db_version){
         $wpdb->query("DELETE FROM {$wpdb->prefix}options where option_name='pbar_6310_version_info'");
            $wpdb->query("INSERT INTO {$wpdb->prefix}options(option_name, option_value) VALUES ('pbar_6310_version_info', '".PBAR_6310_PLUGIN_CURRENT_VERSION."')");
      }
      else{
         $key = pbar_6310_get_option('pbar_6310_license_key');
         if($db_version != PBAR_6310_PLUGIN_CURRENT_VERSION && $key){
            pbar_6310_check_license($key, true);
            $wpdb->query("UPDATE {$wpdb->prefix}options set 
                        option_value='". PBAR_6310_PLUGIN_CURRENT_VERSION ."' 
                        where option_name = 'pbar_6310_version_info'");
         }	
      }
   } 
   
   function pbar_6310_check_license($key, $autoUpdate = false)
   {
      global $wpdb;
   
      $db_key = pbar_6310_get_option('pbar_6310_license_key');
      if(!$db_key){
         $wpdb->query("DELETE FROM {$wpdb->prefix}options where option_name='pbar_6310_license_key'");
         $wpdb->query($wpdb->prepare("INSERT INTO {$wpdb->prefix}options SET option_name = %s, option_value = %s", 'pbar_6310_license_key', "{$key}"));
         if(!$wpdb->insert_id) {
            $wpdb->query($wpdb->prepare("UPDATE {$wpdb->prefix}options SET option_value = %s where option_name = %s", "{$key}", 'pbar_6310_license_key'));
         }
      }else if($db_key != $key){
         $wpdb->query($wpdb->prepare("UPDATE {$wpdb->prefix}options SET option_value = %s where option_name = %s", "{$key}", 'pbar_6310_license_key'));
      }
      
      if(!class_exists('ZipArchive')){
         $api_params = array(
            'edd_action' => 'activate_license',
            'license' => $key,
            'item_name' => urlencode('Progress Bar'),
            'url' => home_url(),
            'type' => 'pbar'
         );
         $url = "http://demo.tcsesoft.com/";
         $response = wp_remote_post($url, array("body" => $api_params));
         $license_data = json_decode(wp_remote_retrieve_body($response));
   
         if (is_wp_error($response) || 200 !== wp_remote_retrieve_response_code($response)) {
            if (is_wp_error($response)) {
               $message = $response->get_error_message();
            } else {
               $message = __('An error occurred, please try again.');
            }
         } else {
            if (false === $license_data->success) {
               switch ($license_data->error) {
                  case 'invalid_key':
                     $message = __('<p class="pbar-6310-error-message">Your have enter invalid license key.</p>');
                     break;
                  case 'site_inactive':
                     $message = __('<p class="pbar-6310-error-message">Your license is not active for this URL.</p>');
                     break;
                  default:
                     $message = __('<p class="pbar-6310-error-message">An error occurred, please try again.</p>');
                     break;
               }
               return;
            }
         }
   
         if (!empty($message)) {
            echo esc_attr($message);
            return;
         }
      
         if (!function_exists('download_url')) {
            require_once ABSPATH . 'wp-admin/includes/file.php';
            require_once(ABSPATH . 'wp-includes/pluggable.php');
         }
   
         $file_url = $license_data->download_url;
         $tmp_file = download_url($file_url);
         $filepath = ABSPATH . 'wp-content/plugins';
         WP_Filesystem();
         $unzipfile = unzip_file($tmp_file, $filepath);
   
         if (is_wp_error($unzipfile)) {
            echo '<p class="pbar-6310-error-message">There was an error unzipping the file.</p>';
            return;
         } else {
            
            if(!$autoUpdate){
               echo "<p class='pbar-6310-success-message'>Congratulations! Your license activated successfully.</p>";		
               wp_remote_post($url, array("body" => ['file_name' => $license_data->file_name]));
               return;
            }				
         }
   
         echo "<p class='pbar_6310_active_error'><b>Activation Error: </b> ZipArchive extension is not activated in your cPanel. Please check the video on how to activate it.</p>";
         echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/XQMLA_F_CYs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> <br /><br />';
         return;
      }
   
      $api_params = array(
         'edd_action' => 'activate_license',
         'license' => $key,
         'item_name' => urlencode('Progress Bar'),
         'url' => home_url(),
         'type' => 'pbar'
      );
      $url = "http://demo.tcsesoft.com/";
      $response = wp_remote_post($url, array("body" => $api_params));
      $license_data = json_decode(wp_remote_retrieve_body($response));
   
      if (is_wp_error($response) || 200 !== wp_remote_retrieve_response_code($response)) {
         if (is_wp_error($response)) {
            $message = $response->get_error_message();
         } else {
            $message = __('An error occurred, please try again.');
         }
      } else {
         if (false === $license_data->success) {
            switch ($license_data->error) {
               case 'invalid_key':
                  $message = __('<p class="pbar-6310-error-message">Your have enter invalid license key.</p>');
                  break;
               case 'site_inactive':
                  $message = __('<p class="pbar-6310-error-message">Your license is not active for this URL.</p>');
                  break;
               default:
                  $message = __('<p class="pbar-6310-error-message">An error occurred, please try again.</p>');
                  break;
            }
         }
      }
   
      if (!empty($message)) {
         echo esc_attr($message);
         return;
      }
   
      if (!function_exists('download_url')) {
         require_once ABSPATH . 'wp-admin/includes/file.php';
         require_once(ABSPATH . 'wp-includes/pluggable.php');
      }
      $file_url = $license_data->download_url;
      $tmp_file = download_url($file_url);
      $filepath = WP_CONTENT_DIR . '/plugins';
      WP_Filesystem();
      copy($tmp_file, $filepath . "/{$license_data->file_name}");
      @unlink($tmp_file);
   
      $zip = new ZipArchive;
      $res = $zip->open($filepath . "/{$license_data->file_name}");
      if (!$res) {
         echo '<p class="pbar-6310-error-message">There was an error unzipping the file.</p>';
      } else {
         $zip->extractTo($filepath . "/");
         $zip->close();
      
         if(!$autoUpdate){
            echo "<p class='pbar-6310-success-message'>Congratulations! Your license activated successfully.</p>";		
         }				
      }
      wp_remote_post($url, array("body" => ['file_name' => $license_data->file_name]));
   }

   function pbar_6310_extract_item($ids)
   {
      global $wpdb;
      $item_table = $wpdb->prefix . 'pbar_6310_item';
      $results = array();
      if($ids) {
         $ids = explode(',', $ids);
         if($ids) {
            foreach ($ids as $id) {
               if($id){
                  $data = $wpdb->get_row($wpdb->prepare("SELECT * FROM {$item_table} WHERE id = %d ", $id)); 
                  if($data) {
                     $results[] = $data;
                  }
               }
            }
         }
      }
      return $results;
   }

function pbar_6310_general_form_left($bgType, $cssData) {
   wp_enqueue_media();
   $bgTypeList = ['', 'Transparent', 'Background Color', 'Background Image', 'Youtube Video'];
   ?>
     
      <tr height="45">
         <td width="55%">
            <b>Template Background Type</b> <span class="pbar-6310-pro">(Pro) <div class="pbar-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
            <div class="pbar-6310-no-live-preview">Live Preview Not Available</div>
         </td>
         <td>
            <select name="background_type" id="background_type" class="pbar-6310-form-input">
               <?php
                  for($i = 1; $i < count($bgTypeList); $i++) {
                     $selected = ($bgType == $i) ? ' selected':'';
                     echo "<option value='".esc_attr($i)."'".esc_attr($selected).">".esc_attr($bgTypeList[$i])."</option>";
                  }
               ?>
            </select>
         </td>
      </tr>
      <input type="hidden" name="background_transparent" value="transparent" />
      <tr height="45" class='background-type-2'>
         <td width="55%">
            <b>Template Background Color</b> <span class="pbar-6310-pro">(Pro) <div class="pbar-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
            <div class="pbar-6310-no-live-preview">Live Preview Not Available</div>
         </td>
         <td>
            <input type="text" name="template_background_color" class="pbar-6310-form-input pbar_6310_color_picker" step="1" data-opacity="0" data-format="rgb" value="<?php echo isset($cssData['template_background_color']) ? esc_attr($cssData['template_background_color']) : 'rgba(255, 255, 255, 0)' ?>">
         </td>
      </tr>
      <tr height="45" class='background-type-3'>
         <td width="55%">
            <b>Template Background Image</b> <span class="pbar-6310-pro">(Pro) <div class="pbar-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
            <div class="pbar-6310-no-live-preview">Live Preview Not Available</div>
         </td>
         <td>
         <input type="text" name="box_background_image" id="pbar_6310_box_background_image" class="pbar-6310-form-input" data-opacity=".8" data-format="rgb" value="<?php echo isset($cssData['box_background_image']) ? esc_attr($cssData['box_background_image']) : '' ?>">
         <input type="button" id="pbar_6310_box_background_image_button" value="Upload Image" class="pbar-6310-btn-default box_background_image_section">
         </td>
      </tr>
      <tr height="45" class='background-type-3'>
         <td width="55%">
            <b>Image Opacity Color</b> <span class="pbar-6310-pro">(Pro) <div class="pbar-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
            <div class="pbar-6310-no-live-preview">Live Preview Not Available</div>
         </td>
         <td>
            <input type="text" name="image_opacity" class="pbar-6310-form-input pbar_6310_color_picker" step="1" data-opacity="0" data-format="rgb" value="<?php echo isset($cssData['image_opacity']) ? esc_attr($cssData['image_opacity']) : 'rgba(255, 255, 255, 0)' ?>">
         </td>
      </tr>
      <tr height="45" class='background-type-4'>
         <td width="55%">
            <b>Youtube Video URL</b> <span class="pbar-6310-pro">(Pro) <div class="pbar-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
            <div class="pbar-6310-no-live-preview">Live Preview Not Available</div>
         </td>
         <td>
         <input type="text" name="youtube_video_url" class="pbar-6310-form-input" value="<?php echo isset( $cssData['youtube_video_url']) ? esc_attr($cssData['youtube_video_url']) : '' ?>">
         </td>
      </tr>
      <tr height="45" class='background-type-4'>
         <td width="55%">
            <b>Video Opacity</b> <span class="pbar-6310-pro">(Pro) <div class="pbar-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
            <div class="pbar-6310-no-live-preview">Live Preview Not Available</div>
         </td>
         <td>
         <input type="number" name="video_opacity" class="pbar-6310-form-input" value="<?php echo isset($cssData['video_opacity']) ? esc_attr($cssData['video_opacity']) : '.7' ?>" step='.01' min='0' max='1'>
         </td>
      </tr>
      <tr height="45" class='background-type-4'>
         <td width="55%">
            <b>Video Opacity Color</b> <span class="pbar-6310-pro">(Pro) <div class="pbar-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
            <div class="pbar-6310-no-live-preview">Live Preview Not Available</div>
         </td>
         <td>
            <input type="text" name="video_opacity_color" class="pbar-6310-form-input pbar_6310_color_picker" step="1" data-opacity="0" data-format="rgb" value="<?php echo isset($cssData['video_opacity_color']) ? esc_attr($cssData['video_opacity_color']) : 'rgba(255, 255, 255, 0)' ?>">
         </td>
      </tr>
      <tr height="45">
         <td width="55%">
            <b>Animation Duration</b> <span class="pbar-6310-pro">(Pro) <div class="pbar-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
            <div class="pbar-6310-no-live-preview">Live Preview Not Available</div>
         </td>
         <td>
           <?php
            $list = [
               '.5' => '0.5 Second',
               '1' => '1.0 Second',
               '1.5' => '1.5 Seconds',
               '2' => '2.0 Seconds',
               '2.5' => '2.5 Seconds',
               '3' => '3.0 Seconds',
               '3.5' => '3.5 Seconds',
               '4' => '4.0 Seconds',
               '5' => '5.0 Seconds',
               '6' => '6.0 Seconds',
               '7' => '7.0 Seconds',
               '8' => '8.0 Seconds',
               '9' => '9.0 Seconds',
               '10' => '10 Seconds',
               '11' => '11 Seconds',
               '12' => '12 Seconds',
               '13' => '13 Seconds',
               '14' => '14 Seconds',
               '15' => '15 Seconds'
            ];
            echo "<select name='animation_duration' class='pbar-6310-form-input'>";
            foreach($list as $key => $value){      
               if($key == $cssData['animation_duration']){
                  echo "<option selected value='{$key}'>{$value}</option>";
               }
               else{
                  echo "<option value='{$key}'>{$value}</option>";
               }       
            }
            echo "</select>";
           ?>
         </td>
      </tr>      
   <?php
}
function pbar_6310_general_section_background_type($bgType, $cssData) {
   wp_enqueue_media();
   $bgTypeList = ['', 'Transparent', 'Background Color', 'Background Image', 'Youtube Video'];
   ?>
     
      <tr height="45">
         <td width="55%">
            <b>Template Background Type</b>
            <div class="pbar-6310-no-live-preview">Live Preview Not Available</div>
         </td>
         <td>
            <select name="background_type" id="background_type" class="pbar-6310-form-input">
               <?php
                  for($i = 1; $i < count($bgTypeList); $i++) {
                     $selected = ($bgType == $i) ? ' selected':'';
                     echo "<option value='".esc_attr($i)."'".esc_attr($selected).">".esc_attr($bgTypeList[$i])."</option>";
                  }
               ?>
            </select>
         </td>
      </tr>
      <input type="hidden" name="background_transparent" value="transparent" />
      <tr height="45" class='background-type-2'>
         <td width="55%">
            <b>Template Background Color</b>
            <div class="pbar-6310-no-live-preview">Live Preview Not Available</div>
         </td>
         <td>
            <input type="text" name="template_background_color" class="pbar-6310-form-input pbar_6310_color_picker" step="1" data-opacity="0" data-format="rgb" value="<?php echo isset($cssData['template_background_color']) ? esc_attr($cssData['template_background_color']) : 'rgba(255, 255, 255, 0)' ?>">
         </td>
      </tr>
      <tr height="45" class='background-type-3'>
         <td width="55%">
            <b>Template Background Image</b>
            <div class="pbar-6310-no-live-preview">Live Preview Not Available</div>
         </td>
         <td>
         <input type="text" name="box_background_image" id="pbar_6310_box_background_image" class="pbar-6310-form-input" data-opacity=".8" data-format="rgb" value="<?php echo isset($cssData['box_background_image']) ? esc_attr($cssData['box_background_image']) : '' ?>">
         <input type="button" id="pbar_6310_box_background_image_button" value="Upload Image" class="pbar-6310-btn-default box_background_image_section">
         </td>
      </tr>
      <tr height="45" class='background-type-3'>
         <td width="55%">
            <b>Image Opacity Color</b>
            <div class="pbar-6310-no-live-preview">Live Preview Not Available</div>
         </td>
         <td>
            <input type="text" name="image_opacity" class="pbar-6310-form-input pbar_6310_color_picker" step="1" data-opacity="0" data-format="rgb" value="<?php echo isset($cssData['image_opacity']) ? esc_attr($cssData['image_opacity']) : 'rgba(255, 255, 255, 0)' ?>">
         </td>
      </tr>
      <tr height="45" class='background-type-4'>
         <td width="55%">
            <b>Youtube Video URL</b>
            <div class="pbar-6310-no-live-preview">Live Preview Not Available</div>
         </td>
         <td>
         <input type="text" name="youtube_video_url" class="pbar-6310-form-input" value="<?php echo isset( $cssData['youtube_video_url']) ? esc_attr($cssData['youtube_video_url']) : '' ?>">
         </td>
      </tr>
      <tr height="45" class='background-type-4'>
         <td width="55%">
            <b>Video Opacity</b>
            <div class="pbar-6310-no-live-preview">Live Preview Not Available</div>
         </td>
         <td>
         <input type="number" name="video_opacity" class="pbar-6310-form-input" value="<?php echo isset($cssData['video_opacity']) ? esc_attr($cssData['video_opacity']) : '.7' ?>" step='.01' min='0' max='1'>
         </td>
      </tr>
      <tr height="45" class='background-type-4'>
         <td width="55%">
            <b>Video Opacity Color</b>
            <div class="pbar-6310-no-live-preview">Live Preview Not Available</div>
         </td>
         <td>
            <input type="text" name="video_opacity_color" class="pbar-6310-form-input pbar_6310_color_picker" step="1" data-opacity="0" data-format="rgb" value="<?php echo isset($cssData['video_opacity_color']) ? esc_attr($cssData['video_opacity_color']) : 'rgba(255, 255, 255, 0)' ?>">
         </td>
      </tr>
      <tr height="45">
         <td width="55%">
            <b>Animation Duration</b>
            <div class="pbar-6310-no-live-preview">Live Preview Not Available</div>
         </td>
         <td>
           <?php
            $list = [
               '.5' => '0.5 Second',
               '1' => '1.0 Second',
               '1.5' => '1.5 Seconds',
               '2' => '2.0 Seconds',
               '2.5' => '2.5 Seconds',
               '3' => '3.0 Seconds',
               '3.5' => '3.5 Seconds',
               '4' => '4.0 Seconds',
               '5' => '5.0 Seconds',
               '6' => '6.0 Seconds',
               '7' => '7.0 Seconds',
               '8' => '8.0 Seconds',
               '9' => '9.0 Seconds',
               '10' => '10 Seconds',
               '11' => '11 Seconds',
               '12' => '12 Seconds',
               '13' => '13 Seconds',
               '14' => '14 Seconds',
               '15' => '15 Seconds'
            ];
            echo "<select name='animation_duration' class='pbar-6310-form-input'>";
            foreach($list as $key => $value){      
               if($key == $cssData['animation_duration']){
                  echo "<option selected value='{$key}'>{$value}</option>";
               }
               else{
                  echo "<option value='{$key}'>{$value}</option>";
               }       
            }
            echo "</select>";
           ?>
         </td>
      </tr>      
   <?php
}

function pbar_6310_add_new_media($id, $results = [])
   {
      global $wpdb;
      wp_enqueue_media();
      $style_table = $wpdb->prefix . 'pbar_6310_style';
      $item_table = $wpdb->prefix . 'pbar_6310_item';
?>
      <div class="pbar_6310_add_media">
         <h6>Shortcode</h6>
         <div class="pbar_6310_add_media_body_shortcode">
            <input type="text" onclick="this.setSelectionRange(0, this.value.length)" value='[pbar_6310_progress_bar id="<?php echo esc_attr($id); ?>"]' />
         </div>
      </div>
      <br />
      <div class="pbar_6310_add_media">
         <h6>Customize Items</h6>
         <div class="pbar_6310_add_media_body" id="pbar-6310-add-or-edit-items">
            <i class="fas fa-plus-circle pbar_6310_add_media_add_new_icon"></i>
            Add/Edit Items
         </div>
      </div>
      <br />
      <div class="pbar_6310_add_media">
         <h6>Rearrange Items</h6>
         <div class="pbar_6310_add_media_body" id="pbar-6310-rearrange-items">
            <i class="fas fa-user-cog pbar_6310_add_media_add_new_icon"></i>
         </div>
      </div>
      <br />
      <div class="pbar_6310_add_media">
         <h6>How to Use</h6>
         <div class="pbar_6310_add_media_body">
            <a href="https://www.youtube.com/watch?v=cIFoCqghmaU" target="_blank">
               <i class="fas fa-video fa-2x"></i><br />
               Watch Video Tutorial
            </a>
         </div>
      </div>

      <div id="pbar-6310-add-or-edit-items-modal" class="pbar-6310-modal pbar-6310-display-none">
         <div class="pbar-6310-modal-content pbar-6310-modal-lg">
            <form action="" method="post">
               <div class="pbar-6310-modal-header">
                  Add/Edit items
                  <span class="pbar-6310-close">&times;</span>
               </div>
               <div class="pbar-6310-modal-body-form">
                  <input type="hidden" name="styleid" value="<?php echo esc_attr($id) ?>" />
                  <?php wp_nonce_field("pbar-6310-nonce-add-edit-item") ?>
                     <?php
                     $counter = 1;
                     $idList = '';
                     if ($results) {
                        foreach ($results as $value) {
                           $idList .= $idList ? ',' : '';
                           $idList .= $value->id;
                     ?>
                        <div class="pbar-6310-item-box">
                           <input type="hidden" name="item_id[]" value="<?php echo esc_attr($value->id);?>" />
                           <div class='pbar-6310-icon'><i class="fas fa-trash-alt" data-id='<?php echo esc_attr($value->id);?>'></i></div>
                           <div class="pbar-6310-item-box-fields">
                              <label>Name</label>
                              <input type="text" name="name[]" value="<?php echo pbar_6310_replace(esc_attr($value->name));?>" />
                           </div>
                           <div class="pbar-6310-item-box-fields">
                              <label>Percentage</label>
                              <input type="text" name="percentage[]" value="<?php echo esc_attr($value->percentage);?>%" class="bar-6310-<?php echo esc_attr($counter) ?>" readonly /> 
                              <div 
                                 class="pbar-6310-slider-range-min" 
                                 id="bar-6310-<?php echo esc_attr($counter) ?>"
                                 data-value="<?php echo esc_attr($value->percentage) ?>"
                              ></div> 
                           </div>
                        </div>
                     <?php
                        $counter++;
                        }
                     }
                     echo "<span class='pbar-6310-total-items' data-value='{$counter}'></span>";
                  ?>

                  <div class="pbar-6310-manage-items">
                     <div class="pbar-6310-manage-items-add">Add New <span class="pbar-6310-pro">(Pro) <div class="pbar-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>  </div>    
                     <div class="pbar-6310-manage-items-existing">Add Existing</div>
                     <div class="pbar-6310-manage-items-existing-add">
                        <label>Choose Template: </label>
                        <select id='existing-items-list'>
                           <?php
                              $itemList = $wpdb->get_results("SELECT * FROM $item_table order by name asc", ARRAY_A);
                              if($itemList){
                                 foreach($itemList as $item){
                                    $disabled = '';
                                    if($results){
                                       foreach ($results as $value) {
                                          if($item['id'] == $value->id) {
                                             $disabled = 'disabled';
                                             break;
                                          }
                                       }
                                    }
                                    echo "<option data-id='".esc_attr($item['id'])."' value='{$item['id']}@@##@@{$item['name']}@@##@@{$item['percentage']}' {$disabled}>" . pbar_6310_replace(esc_attr($item['name'])) . " -> {$item['percentage']}</option>";
                                 }
                              }
                           ?>
                        </select>
                        <div class="pbar-6310-btn-primary pbar-6310-pull-right">Add</div>
                        <div class="pbar-6310-btn-cancel pbar-6310-pull-right">Cancel</div>
                     </div>       
                  </div>
               </div>
               <div class="pbar-6310-modal-form-footer">
                  <button type="button" name="close" class="pbar-6310-btn-danger pbar-6310-pull-right">Close</button>
                  <input type="submit" name="add-edit-item-save" id="add-edit-item-save" class="pbar-6310-btn-primary pbar-6310-pull-right pbar-6310-margin-right-10" value="Save" />
               </div>
            </form>
            <br class="pbar-6310-clear" />
         </div>
      </div>
      <div id="pbar-6310-rearrange-items-modal" class="pbar-6310-modal pbar-6310-display-none">
         <div class="pbar-6310-modal-content pbar-6310-modal-sm">
            <form action="" method="post">
               <?php wp_nonce_field("pbar-6310-nonce-rearrange-list") ?>
               <input type="hidden" name="rearrange_id" value="<?php echo esc_attr($id) ?>" />
               <input type="hidden" name="rearrange_items_list" id="rearrange_items_list" value="<?php echo esc_attr($idList) ?>" />
               <div class="pbar-6310-modal-header">
                  Rearrange Items
                  <span class="pbar-6310-close">&times;</span>
               </div>
               <div class="pbar-6310-modal-body-form">
                  <div class="pbar-6310-filter-popup pbar-6310-padding-0-15">
                     <p>Drag and drop to change items order</p>
                     <ul id="pbar-6310-sortable-items">
                        <?php   
                           if($results) {
                              foreach ($results as $items) {
                                 echo "<li class='ui-state-default pbar-6310-ui-state-default' id='".esc_attr($items->id)."'>".pbar_6310_replace(esc_attr($items->name)) . ' -> ' . esc_attr($items->percentage) ."%</li>";
                              }        
                           }
                           else {
                              echo "
                                 <div>
                                    <h4><i class='fas fa-exclamation-circle'></i> No item available.</h4>
                                 </div>
                              ";
                           }      
                        ?>
                     </ul>
                  </div>
               </div>
               <div class="pbar-6310-modal-form-footer">
                  <button type="button" name="close" class="pbar-6310-btn-danger pbar-6310-pull-right">Close</button>
                  <input type="submit" name="rearrange-list-save" class="pbar-6310-btn-primary pbar-6310-pull-right pbar-6310-margin-right-10" id="pbar-6310-sortable-sub" value="Save" />
               </div>
            </form>
            <br class="pbar-6310-clear" />
         </div>
      </div>
<?php
   }

   function pbar_6310_description($ids, $description, $output = 1){
      if(!$description) return;
      if(!$output) return;
      echo "<div class='pbar-6310-template-".esc_attr($ids)."-description'>".esc_attr($description)."</div>";
   }

   function pbar_6310_export_full_service_plugin() {
      if( !ini_get('allow_url_fopen') ) {
         echo "<p class='pbar_6310_enable_notice'>
         In your cPanel, default allow_url_fopen is not enable. You need to enable. Please contact with hosting providers or 	follow the below URL. <br />
         <a href='https://www.youtube.com/watch?v=tUW6CkZEW8k'>How to Enable Allow_url_fopen in cPanel</a>
         </p>";
         return;
       }
      global $wpdb;

      $item_table = $wpdb->prefix . 'pbar_6310_item';		
		$style_table = $wpdb->prefix . 'pbar_6310_style';
      

      $path = wp_upload_dir();
      $txtName = 'pbar-item-' . time() . '.txt';
      $file = $path['path'] . '/' . $txtName; 
      $fp = fopen( $file, "w" ); 
      $sqlData = "!@#$$#@!";   
  
      //item Table
      $data = $wpdb->get_results('SELECT * FROM ' . $item_table . ' ORDER BY id DESC', ARRAY_A);
      foreach ( $data as $selectedData ) {
         $sqlData .= 
					"insert into {$item_table} set  
					id='".esc_sql($selectedData['id'])."',
					name='".esc_sql($selectedData['name'])."',
               percentage='".esc_sql($selectedData['percentage'])."'!@#$$#@!";
      }
   
      //style Table
      $data = $wpdb->get_results('SELECT * FROM ' . $style_table . ' ORDER BY id DESC', ARRAY_A);
      foreach ( $data as $selectedData ) {

         $sqlData .= 
               "insert into {$style_table} set 
               id='".esc_sql($selectedData['id'])."',
               name='".esc_sql($selectedData['name'])."', 
               style_name='".esc_sql($selectedData['style_name'])."',
               css='".esc_sql($selectedData['css'])."',
               itemids='".esc_sql($selectedData['itemids'])."'!@#$$#@!";		
      }
      fwrite($fp, pack("CCC",0xef,0xbb,0xbf)); 
		fwrite($fp, $sqlData);				
		fclose($fp);
		echo '<a href="'.$path['url'].'/'.$txtName.'" target="_blank" id="export-progress-bar-plugin">Download</a>';
   }
   
   function pbar_6310_import_full_plugin($url) {
		if( !ini_get('allow_url_fopen') ) {
			echo "<p class='pbar_6310_enable_notice'>
			In your cPanel, default allow_url_fopen is not enable. You need to enable. Please contact with hosting providers or 	follow the below URL. <br />
			<a href='https://www.youtube.com/watch?v=tUW6CkZEW8k'>How to Enable Allow_url_fopen in cPanel</a>
			</p>";
			return;
	 	}

		global $wpdb;
		$item_table = $wpdb->prefix . 'pbar_6310_item';		
		$style_table = $wpdb->prefix . 'pbar_6310_style';
	
		$wpdb->query("TRUNCATE {$item_table}");	
		$wpdb->query("TRUNCATE {$style_table}");

		$result = '';
		$file = fopen($url, "r");
		while(! feof($file)) {
			$result .= fgets($file);
		}
		fclose($file);
		if(strlen($result)) {
			$result = explode('!@#$$#@!', $result);
			foreach($result as $value) {
				if(strlen(trim($value)) > 3) {
					$wpdb->query(trim($value));
				}
			}
		}
		echo "<p class='pbar_6310_enable_notice'>Data import successfully.</p>";
	}

   function pbar_6310_value_percentage($value, $cssData, $dynamicId, $ids){
      echo "<div class='pbar-6310-template-" . esc_attr($ids) . "-value'>
            <div class='pbar-6310-template-" . esc_attr($ids) . "-title-data pbar-6310-template-percentage' id='pbar-6310-percent-"  . esc_attr($dynamicId) . "' 
            data-value='" . esc_attr($value->percentage) . "' 
            data-duration='" . esc_attr($cssData['animation_duration']) . "'>
               " . esc_attr($value->percentage) . "
            </div>
            <div class='pbar-6310-percent'>%</div>
         </div>";
   }
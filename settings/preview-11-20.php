<?php
if (!defined('ABSPATH'))
  exit;
if (!current_user_can('edit_others_pages')) {
  wp_die(__('You do not have sufficient permissions to access this page.'));
}

if (!empty($_POST['submit']) && $_POST['submit'] == 'Save' && $_POST['style'] != '') {
  $nonce = $_REQUEST['_wpnonce'];
  if (!wp_verify_nonce($nonce, 'pbar-6310-nonce-field')) {
    die('You do not have sufficient permissions to access this page.');
  } else {
    $name = sanitize_text_field($_POST['style_name']);
    $style_name = sanitize_text_field($_POST['style']);
    if ($_POST['style'] == 'template-11') {
      $css = "_wp_http_referer,id,background_type,background_transparent,template_background_color,box_background_image,image_opacity,youtube_video_url,video_opacity,video_opacity_color,animation_duration,pbar_progress_bar_border_size,pbar_progress_bar_border_color,pbar_6310_bar_radius,pbar_progress_bar_background_color,pbar_progress_bar_color,pbar_progress_bar_margin_top,pbar_progress_bar_margin_bottom,pbar_6310_bar_height,pbar_6310_title_font_color,pbar_6310_title_font_size,pbar_6310_title_line_height,pbar_6310_title_font_hover_color,pbar_6310_title_font_weight,pbar_6310_title_text_transform,pbar_6310_title_text_align,pbar_6310_title_font_family,pbar_6310_title_padding_top,pbar_6310_title_padding_bottom,custom_css,update_style_change!!##!!/wordpress_1/wp-admin/admin.php?page=pbar-6310-template-11-20&styleid=59||##||59||##||2||##||transparent||##||rgba(217, 217, 217, 1)||##||||##||rgba(255, 255, 255, 0)||##||||##||.7||##||rgba(255, 255, 255, 0)||##||.5||##||7||##||rgb(0, 0, 0)||##||50||##||rgba(255, 255, 255, 1)||##||rgb(255, 0, 0)||##||10||##||9||##||18||##||rgb(0, 0, 0)||##||20||##||25||##||rgb(0, 0, 0)||##||100||##||uppercase||##||left||##||Cabin||##||4||##||0||##||||##||Save";
    } else if ($_POST['style'] == 'template-12') {
      $css = "_wp_http_referer,id,background_type,background_transparent,template_background_color,box_background_image,image_opacity,youtube_video_url,video_opacity,video_opacity_color,animation_duration,item_margin,pbar_progress_bar_border_size,pbar_progress_bar_background_color,pbar_progress_bar_margin_top,pbar_progress_bar_margin_bottom,pbar_6310_bar_height,pbar_6310_title_font_color,pbar_6310_title_font_size,pbar_6310_title_line_height,pbar_6310_title_font_hover_color,pbar_6310_title_font_weight,pbar_6310_title_text_transform,pbar_6310_title_text_align,pbar_6310_title_font_family,pbar_6310_title_padding_top,pbar_6310_title_padding_bottom,custom_css,pbar_6310_value_font_family,pbar_6310_value_font_size,pbar_6310_value_font_weight,pbar_6310_value_font_color,pbar_6310_value_font_hover_color,pbar_progress_bar_background_first_color,pbar_progress_bar_background_second_color,pbar_progress_bar_background_third_color,pbar_progress_bar_background_forth_color,pbar_progress_bar_background_fifth_color,pbar_progress_bar_background_six_color,update_style_change!!##!!/wordpress_1/wp-admin/admin.php?page=pbar-6310-template-11-20&styleid=1||##||1||##||2||##||transparent||##||rgba(227, 227, 227, 1)||##||||##||rgba(255, 255, 255, 0)||##||https://www.youtube.com/watch?v=VHksFlD7kQI||##||.7||##||rgba(255, 255, 255, 0)||##||.5||##||15||##||4||##||rgba(0, 0, 0, 1)||##||20||##||10||##||8||##||rgb(0, 0, 0)||##||16||##||0||##||rgb(217, 31, 31)||##||800||##||uppercase||##||left||##||PT+Sans||##||7||##||15||##||||##||Cardo||##||13||##||bold||##||rgb(0, 0, 0)||##||rgb(255, 0, 0)||##||rgba(5, 143, 255, 0.99)||##||rgba(8, 214, 166, 1)||##||rgba(255, 145, 0, 1)||##||rgba(0, 255, 217, 0.81)||##||rgba(140, 255, 0, 0.81)||##||rgba(255, 166, 0, 0.81)||##||Save";
    } else if ($_POST['style'] == 'template-13') {
      $css = "_wp_http_referer,id,background_type,background_transparent,template_background_color,box_background_image,image_opacity,youtube_video_url,video_opacity,video_opacity_color,animation_duration,pbar_6310_bar_radius,pbar_progress_bar_background_color,pbar_progress_bar_margin_top,pbar_progress_bar_margin_bottom,pbar_6310_bar_height,pbar_6310_title_font_color,pbar_6310_title_font_size,pbar_6310_title_line_height,pbar_6310_title_font_hover_color,pbar_6310_title_font_weight,pbar_6310_title_text_transform,pbar_6310_title_text_align,pbar_6310_title_font_family,pbar_6310_title_padding_top,pbar_6310_title_padding_bottom,custom_css,pbar_6310_value_font_family,pbar_6310_value_font_size,pbar_6310_value_font_weight,pbar_6310_value_font_color,pbar_6310_value_font_hover_color,pbar_progress_bar_background_first_color,pbar_progress_bar_background_second_color,pbar_progress_bar_background_third_color,pbar_progress_bar_background_forth_color,pbar_progress_bar_background_fifth_color,pbar_progress_bar_background_six_color,update_style_change!!##!!/wordpress_1/wp-admin/admin.php?page=pbar-6310-template-11-20&styleid=36||##||36||##||2||##||transparent||##||rgba(219, 219, 219, 1)||##||||##||rgba(255, 255, 255, 0)||##||||##||.7||##||rgba(255, 255, 255, 0)||##||.5||##||10||##||rgba(255, 255, 255, 0.84)||##||20||##||10||##||10||##||rgb(0, 0, 0)||##||20||##||20||##||rgb(179, 12, 4)||##||100||##||capitalize||##||left||##||Shanti||##||7||##||4||##||||##||Anonymous+Pro||##||13||##||100||##||rgb(0, 0, 0)||##||rgb(255, 0, 0)||##||rgba(9, 103, 158, 1)||##||rgba(0, 158, 63, 1)||##||rgba(53, 11, 179, 1)||##||rgba(8, 245, 0, 1)||##||rgba(255, 136, 0, 1)||##||rgba(255, 87, 20, 1)||##||Save";
    } else if ($_POST['style'] == 'template-14') {
      $css = "_wp_http_referer,id,background_type,background_transparent,template_background_color,box_background_image,image_opacity,youtube_video_url,video_opacity,video_opacity_color,animation_duration,item_margin,pbar_progress_bar_border_size,pbar_progress_bar_border_color,pbar_6310_bar_radius,pbar_progress_bar_color,pbar_progress_bar_alternate_color,pbar_6310_bar_height,pbar_6310_title_font_color,pbar_6310_title_font_size,pbar_6310_title_line_height,pbar_6310_title_font_hover_color,pbar_6310_title_font_weight,pbar_6310_title_text_transform,pbar_6310_title_text_align,pbar_6310_title_font_family,pbar_6310_title_padding_top,pbar_6310_title_padding_bottom,custom_css,pbar_6310_value_font_family,pbar_6310_value_font_size,pbar_6310_value_font_weight,pbar_6310_value_font_color,pbar_6310_value_font_hover_color,update_style_change!!##!!/wordpress_1/wp-admin/admin.php?page=pbar-6310-template-11-20&styleid=5||##||5||##||2||##||transparent||##||rgba(224, 224, 224, 1)||##||||##||rgba(255, 255, 255, 0)||##||https://www.youtube.com/watch?v=rUWxSEwctFU||##||.7||##||rgba(255, 255, 255, 0)||##||.5||##||15||##||2||##||rgb(0, 0, 0)||##||30||##||rgb(10, 77, 148)||##||rgba(51, 122, 183, 1)||##||20||##||rgb(0, 0, 0)||##||16||##||10||##||rgb(79, 79, 79)||##||700||##||capitalize||##||left||##||Amaranth||##||16||##||9||##||||##||Crushed||##||18||##||100||##||rgb(0, 0, 0)||##||rgb(0, 0, 0)||##||Save";
    } else if ($_POST['style'] == 'template-15') {
      $css = "_wp_http_referer,id,background_type,background_transparent,template_background_color,box_background_image,image_opacity,youtube_video_url,video_opacity,video_opacity_color,animation_duration,pbar_progress_bar_background_color,pbar_progress_bar_margin_top,pbar_progress_bar_margin_bottom,pbar_6310_bar_height,pbar_6310_title_font_color,pbar_6310_title_font_size,pbar_6310_title_line_height,pbar_6310_title_font_hover_color,pbar_6310_title_font_weight,pbar_6310_title_text_transform,pbar_6310_title_text_align,pbar_6310_title_font_family,pbar_6310_title_padding_top,pbar_6310_title_padding_bottom,custom_css,pbar_6310_value_font_family,pbar_6310_value_font_size,pbar_6310_value_font_weight,pbar_6310_value_font_color,pbar_6310_value_font_hover_color,pbar_progress_bar_background_first_color,pbar_progress_bar_background_second_color,pbar_progress_bar_background_third_color,pbar_progress_bar_background_forth_color,pbar_progress_bar_background_fifth_color,pbar_progress_bar_background_six_color,update_style_change!!##!!/wordpress_1/wp-admin/admin.php?page=pbar-6310-template-11-20&styleid=55||##||55||##||2||##||transparent||##||rgba(214, 214, 214, 1)||##||||##||rgba(255, 255, 255, 0)||##||||##||.7||##||rgba(255, 255, 255, 0)||##||.5||##||rgba(255, 255, 255, 0.85)||##||0||##||10||##||11||##||rgb(0, 0, 0)||##||20||##||15||##||rgb(255, 255, 255)||##||100||##||capitalize||##||left||##||Amaranth||##||8||##||14||##||||##||Shanti||##||13||##||100||##||rgb(0, 0, 0)||##||rgb(0, 0, 0)||##||rgba(33, 170, 224, 1)||##||rgba(255, 123, 0, 1)||##||rgba(242, 255, 0, 1)||##||rgba(0, 242, 226, 0.81)||##||rgba(229, 146, 232, 0.81)||##||rgba(38, 255, 0, 0.81)||##||Save";
    } else if ($_POST['style'] == 'template-16') {
      $css = "_wp_http_referer,id,background_type,background_transparent,template_background_color,box_background_image,image_opacity,youtube_video_url,video_opacity,video_opacity_color,animation_duration,item_margin,pbar_6310_bar_radius,pbar_progress_bar_background_color,pbar_progress_bar_color,pbar_progress_bar_margin_top,pbar_progress_bar_margin_bottom,pbar_6310_bar_height,pbar_6310_title_font_color,pbar_6310_title_font_size,pbar_6310_title_line_height,pbar_6310_title_font_hover_color,pbar_6310_title_font_weight,pbar_6310_title_text_transform,pbar_6310_title_text_align,pbar_6310_title_font_family,pbar_6310_title_padding_top,pbar_6310_title_padding_bottom,custom_css,pbar_6310_value_font_family,pbar_6310_value_font_size,pbar_6310_value_font_weight,pbar_6310_value_font_color,pbar_6310_value_font_hover_color,update_style_change!!##!!/wordpress_1/wp-admin/admin.php?page=pbar-6310-template-11-20&styleid=19||##||19||##||2||##||transparent||##||rgba(219, 219, 219, 1)||##||||##||rgba(255, 255, 255, 0)||##||https://www.youtube.com/watch?v=rUWxSEwctFU||##||.7||##||rgba(255, 255, 255, 0)||##||.5||##||15||##||0||##||rgba(255, 255, 255, 1)||##||rgb(16, 141, 166)||##||0||##||9||##||24||##||rgb(0, 0, 0)||##||16||##||28||##||rgb(0, 0, 0)||##||100||##||capitalize||##||left||##||Amaranth||##||5||##||0||##||||##||Amaranth||##||15||##||900||##||rgb(0, 0, 0)||##||rgb(0, 0, 0)||##||Save";
    } else if ($_POST['style'] == 'template-17') {
      $css = "_wp_http_referer,id,background_type,background_transparent,template_background_color,box_background_image,image_opacity,youtube_video_url,video_opacity,video_opacity_color,animation_duration,item_margin,pbar_6310_bar_radius,pbar_progress_bar_background_color,pbar_progress_bar_color,pbar_progress_bar_alternate_color,pbar_progress_bar_margin_top,pbar_progress_bar_margin_bottom,pbar_6310_bar_height,pbar_6310_title_font_color,pbar_6310_title_font_size,pbar_6310_title_line_height,pbar_6310_title_font_hover_color,pbar_6310_title_font_weight,pbar_6310_title_text_transform,pbar_6310_title_text_align,pbar_6310_title_font_family,pbar_6310_title_padding_top,pbar_6310_title_padding_bottom,custom_css,pbar_6310_value_font_family,pbar_6310_value_font_size,pbar_6310_value_font_weight,pbar_6310_value_font_color,pbar_6310_value_font_hover_color,update_style_change!!##!!/wordpress_1/wp-admin/admin.php?page=pbar-6310-template-11-20&styleid=20||##||20||##||2||##||transparent||##||rgba(222, 222, 222, 1)||##||||##||rgba(255, 255, 255, 0)||##||||##||.7||##||rgba(255, 255, 255, 0)||##||.5||##||15||##||30||##||rgba(255, 255, 255, 1)||##||rgb(96, 125, 139)||##||rgba(122, 0, 0, 0.81)||##||1||##||11||##||21||##||rgb(0, 0, 0)||##||18||##||16||##||rgb(0, 0, 0)||##||800||##||capitalize||##||left||##||Arimo||##||11||##||10||##||||##||Allerta||##||12||##||bold||##||rgb(0, 0, 0)||##||rgb(0, 0, 0)||##||Save";
    } else if ($_POST['style'] == 'template-18') {
      $css = "_wp_http_referer,id,background_type,background_transparent,template_background_color,box_background_image,image_opacity,youtube_video_url,video_opacity,video_opacity_color,animation_duration,pbar_6310_bar_radius,pbar_progress_bar_background_color,pbar_progress_bar_color,pbar_progress_bar_margin_top,pbar_progress_bar_margin_bottom,pbar_6310_bar_height,pbar_progress_title_background_color,pbar_6310_title_font_color,pbar_6310_title_font_size,pbar_6310_title_line_height,pbar_6310_title_font_hover_color,pbar_6310_title_font_weight,pbar_6310_title_text_transform,pbar_6310_title_text_align,pbar_6310_title_font_family,pbar_6310_title_padding_top,pbar_6310_title_padding_bottom,custom_css,pbar_6310_value_font_family,pbar_6310_value_font_size,pbar_6310_value_font_weight,pbar_6310_value_font_color,pbar_6310_value_font_hover_color,update_style_change!!##!!/wordpress_1/wp-admin/admin.php?page=pbar-6310-template-11-20&styleid=51||##||51||##||2||##||transparent||##||rgba(219, 219, 219, 1)||##||||##||rgba(255, 255, 255, 0)||##||||##||.7||##||rgba(255, 255, 255, 0)||##||.5||##||30||##||rgba(255, 255, 255, 1)||##||rgb(250, 150, 110)||##||1||##||11||##||21||##||rgb(255, 87, 34)||##||rgb(255, 255, 255)||##||18||##||16||##||rgb(255, 255, 255)||##||800||##||capitalize||##||left||##||Arimo||##||11||##||10||##||||##||Allerta||##||12||##||bold||##||rgb(0, 0, 0)||##||rgb(0, 0, 0)||##||Save";
    } else if ($_POST['style'] == 'template-19') {
      $css = "_wp_http_referer,id,background_type,background_transparent,template_background_color,box_background_image,image_opacity,youtube_video_url,video_opacity,video_opacity_color,animation_duration,item_margin,pbar_progress_bar_border_size,pbar_progress_bar_border_color,pbar_6310_bar_radius,pbar_progress_bar_background_color,pbar_progress_bar_color,pbar_progress_bar_alternate_color,pbar_progress_bar_margin_top,pbar_progress_bar_margin_bottom,pbar_6310_bar_height,pbar_6310_title_font_color,pbar_6310_title_font_size,pbar_6310_title_line_height,pbar_6310_title_font_hover_color,pbar_6310_title_font_weight,pbar_6310_title_text_transform,pbar_6310_title_text_align,pbar_6310_title_font_family,pbar_6310_title_padding_top,pbar_6310_title_padding_bottom,custom_css,update_style_change!!##!!/wordpress_1/wp-admin/admin.php?page=pbar-6310-template-11-20&styleid=18||##||18||##||2||##||transparent||##||rgba(224, 224, 224, 1)||##||||##||rgba(255, 255, 255, 0)||##||||##||.7||##||rgba(255, 255, 255, 0)||##||2||##||15||##||1||##||rgb(255, 255, 255)||##||0||##||rgba(255, 255, 255, 1)||##||rgb(224, 32, 32)||##||rgba(0, 0, 0, 0.81)||##||0||##||14||##||12||##||rgb(0, 0, 0)||##||18||##||20||##||rgb(235, 23, 12)||##||600||##||capitalize||##||left||##||Amaranth||##||16||##||16||##||||##||Save";
    } else if ($_POST['style'] == 'template-20') {
      $css = "_wp_http_referer,id,background_type,background_transparent,template_background_color,box_background_image,image_opacity,youtube_video_url,video_opacity,video_opacity_color,animation_duration,item_margin,pbar_progress_bar_border_size,pbar_progress_bar_border_color,pbar_progress_bar_after_effect_color,pbar_6310_bar_radius,pbar_progress_bar_background_color,pbar_progress_bar_color,pbar_progress_bar_alternate_color,pbar_progress_bar_margin_top,pbar_progress_bar_margin_bottom,pbar_6310_bar_height,pbar_6310_title_font_color,pbar_6310_title_font_size,pbar_6310_title_line_height,pbar_6310_title_font_hover_color,pbar_6310_title_font_weight,pbar_6310_title_text_transform,pbar_6310_title_text_align,pbar_6310_title_font_family,pbar_6310_title_padding_top,pbar_6310_title_padding_bottom,custom_css,update_style_change!!##!!/wordpress_1/wp-admin/admin.php?page=pbar-6310-template-11-20&styleid=22||##||22||##||2||##||transparent||##||rgba(209, 209, 209, 1)||##||||##||rgba(255, 255, 255, 0)||##||||##||.7||##||rgba(255, 255, 255, 0)||##||2||##||15||##||2||##||rgb(255, 0, 0)||##||rgb(255, 0, 0)||##||0||##||rgba(255, 255, 255, 1)||##||rgb(224, 29, 29)||##||rgba(255, 255, 255, 1)||##||6||##||7||##||12||##||rgb(0, 0, 0)||##||17||##||27||##||rgb(255, 0, 0)||##||100||##||capitalize||##||left||##||Allerta||##||5||##||5||##||||##||Save";
    }

    $items = $wpdb->get_results('SELECT * FROM ' . $item_table . ' ORDER BY name ASC', ARRAY_A);
    $itemsId = "";
    foreach ($items as $item) {
      if ($itemsId) {
        $itemsId .= ",";
      }
      $itemsId .= $item['id'];
    }

    $wpdb->query($wpdb->prepare("INSERT INTO {$style_table} (name, style_name, css, itemids) VALUES ( %s, %s, %s, %s)", array($name, $style_name, $css, $itemsId)));
    $redirect_id = $wpdb->insert_id;

    if ($redirect_id == 0) {
      $url = admin_url("admin.php?page=pbar-6310-progress-bar");
    } else if ($redirect_id != 0) {
      $url = admin_url("admin.php?page=pbar-6310-template-11-20&styleid=$redirect_id");
    }
    wp_register_script('cnvb-6310-redirect-script', '');
    wp_enqueue_script('cnvb-6310-redirect-script');
    wp_add_inline_script('cnvb-6310-redirect-script', "document.location.href = '" . $url . "';");
  }
} else {

?>
  <div class="pbar-6310">
    <h1>Select Template</h1>

    <!-- ********************* template 11 start ***************** -->
    <div class="pbar-6310-row-section">
      <div class="pbar-6310-row pbar-6310_team-style-boxed">
        <div class="pbar-6310-padding-15">
          <div class="pbar-6310-template-preview-11-parallax">
            <div class="pbar-6310-template-preview-11-common-overlay">
               <iframe src='https://www.youtube.com/embed/?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&playlist=zaPo86cfmDQ&mute=1&allowfullscreen=1&allow=accelerometer&autoplay=1&rel=0' frameborder='0' allowfullscreen></iframe>
              <div class="pbar-6310-col-1">
                <div class="pbar-6310-template-preview-11">
                  <div class="pbar-6310-template-preview-11-title">HTML5 - 50%</div>
                  <div class="pbar-6310-template-preview-11-wrapper">
                    <div class="pbar-6310-template-preview-11-bar" style="width:50%; background:#1782f2;"></div>
                  </div>
                  <div class="pbar-6310-template-preview-11-title">CSS3 - 65%</div>
                  <div class="pbar-6310-template-preview-11-wrapper">
                    <div class="pbar-6310-template-preview-11-bar" style="width:65%; background:#1782f2;"></div>
                  </div>
                  <div class="pbar-6310-template-preview-11-title">PHP - 75%</div>
                  <div class="pbar-6310-template-preview-11-wrapper">
                    <div class="pbar-6310-template-preview-11-bar" style="width:75%; background:#1782f2;"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="pbar-6310-template-preview-list">
          Template 11
          <button type="button" class="pbar-6310-btn-success pbar_6310_choosen_style" id="template-11">Create Progress Bar</button>
        </div>
        <br class="pbar-6310-clear" />
      </div>
    

    <!-- ************** template 12 start ****************** -->
    <div class="pbar-6310-row pbar-6310_team-style-boxed">
      <div class="pbar-6310-padding-15">
        <div class="pbar-6310-template-preview-12-parallax">
          <div class="pbar-6310-template-preview-12-common-overlay">
            <div class="pbar-6310-col-1">
              <div class="pbar-6310-template-preview-12">
                <div class="pbar-6310-template-preview-12-title">CSS</div>
                <div class="pbar-6310-template-preview-12-wrapper yellow">
                  <div class="pbar-6310-template-preview-12-bar" style="width:85%;">
                    <div class="pbar-6310-template-preview-12-value">85%</div>
                  </div>
                </div>
                <div class="pbar-6310-template-preview-12-title">BOOTSTRAP</div>
                <div class="pbar-6310-template-preview-12-wrapper">
                  <div class="pbar-6310-template-preview-12-bar" style="width:70%;">
                    <div class="pbar-6310-template-preview-12-value">70%</div>
                  </div>
                </div>
                <div class="pbar-6310-template-preview-12-title">ASP.NET</div>
                <div class="pbar-6310-template-preview-12-wrapper purple">
                  <div class="pbar-6310-template-preview-12-bar" style="width:55%;">
                    <div class="pbar-6310-template-preview-12-value">55%</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="pbar-6310-template-preview-list">
        Template 12
        <button type="button" class="pbar-6310-btn-success pbar_6310_choosen_style" id="template-12">Create Progress Bar</button>
      </div>
      <br class="pbar-6310-clear" />
    </div>
  </div>

  <!-- ************ template 13 start ***************** -->
  <div class="pbar-6310-row-section">
    <div class="pbar-6310-row pbar-6310_team-style-boxed">
      <div class="pbar-6310-padding-15">
        <div class="pbar-6310-template-preview-13-parallax">
          <div class="pbar-6310-template-preview-13-common-overlay">
            <div class="pbar-6310-col-1">
              <div class="pbar-6310-template-preview-13">
                <div class="pbar-6310-template-preview-13-title">HTML5</div>
                <div class="pbar-6310-template-preview-13-wrapper yellow">
                  <div class="pbar-6310-template-preview-13-bar" style="width:55%;">
                    <div class="pbar-6310-template-preview-13-value">55%</div>
                  </div>
                </div>
                <div class="pbar-6310-template-preview-13-title">CSS3</div>
                <div class="pbar-6310-template-preview-13-wrapper">
                  <div class="pbar-6310-template-preview-13-bar" style="width:70%;">
                    <div class="pbar-6310-template-preview-13-value">70%</div>
                  </div>
                </div>
                <div class="pbar-6310-template-preview-13-title">Java</div>
                <div class="pbar-6310-template-preview-13-wrapper purple">
                  <div class="pbar-6310-template-preview-13-bar" style="width:85%;">
                    <div class="pbar-6310-template-preview-13-value">85%</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="pbar-6310-template-preview-list">
        Template 13
        <button type="button" class="pbar-6310-btn-success pbar_6310_choosen_style" id="template-13">Create Progress Bar</button>
      </div>
      <br class="pbar-6310-clear" />
    </div>
    <!-- ********************* template 14 start **************** -->
    <div class="pbar-6310-row pbar-6310_team-style-boxed">
      <div class="pbar-6310-padding-15">
        <div class="pbar-6310-template-preview-14-parallax">
          <div class="pbar-6310-template-preview-14-common-overlay">
            <div class="pbar-6310-col-1">
              <div class="pbar-6310-template-preview-14">
                <div class=pbar-6310-template-preview-14-title>HTML5</div>
                <div class="pbar-6310-template-preview-14-outer">
                  <div class="pbar-6310-template-preview-14-wrapper">
                    <div class="pbar-6310-template-preview-14-bar pbar-6310-template-preview-14-bar-striped" style="width:50%;"></div>
                    <div class="pbar-6310-template-preview-14-value">
                      <div class="pbar-6310-template-preview-14-title-data">50%</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="pbar-6310-template-preview-14">
                <div class=pbar-6310-template-preview-14-title>JAVASCRIPT</div>
                <div class="pbar-6310-template-preview-14-outer">
                  <div class="pbar-6310-template-preview-14-wrapper">
                    <div class="pbar-6310-template-preview-14-bar pbar-6310-template-preview-14-bar-striped" style="width:70%;"></div>
                    <div class="pbar-6310-template-preview-14-value">
                      <div class="pbar-6310-template-preview-14-title-data">70%</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="pbar-6310-template-preview-14">
                <div class=pbar-6310-template-preview-14-title>PHP</div>
                <div class="pbar-6310-template-preview-14-outer">
                  <div class="pbar-6310-template-preview-14-wrapper">
                    <div class="pbar-6310-template-preview-14-bar pbar-6310-template-preview-14-bar-striped" style="width:90%;"></div>
                    <div class="pbar-6310-template-preview-14-value">
                      <div class="pbar-6310-template-preview-14-title-data">90%</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="pbar-6310-template-preview-list">
        Template 14
        <button type="button" class="pbar-6310-btn-success pbar_6310_choosen_style" id="template-14">Create Progress Bar</button>
      </div>
      <br class="pbar-6310-clear" />
    </div>
  </div>


  <!-- ******************** template 15 start *************** -->
  <div class="pbar-6310-row-section">
    <div class="pbar-6310-row pbar-6310_team-style-boxed">
      <div class="pbar-6310-padding-15">
        <div class="pbar-6310-template-preview-15-parallax">
          <div class="pbar-6310-template-preview-15-common-overlay">
            <div class="pbar-6310-col-1">
              <div class="pbar-6310-template-preview-15">
                <div class="pbar-6310-template-preview-15-title">ASP.NET</div>
                <div class="pbar-6310-template-preview-15-wrapper yellow">
                  <div class="pbar-6310-template-preview-15-bar" style="width:65%;">
                    <div class="pbar-6310-template-preview-15-value">65%</div>
                  </div>
                </div>
                <div class="pbar-6310-template-preview-15-title">HTML5</div>
                <div class="pbar-6310-template-preview-15-wrapper">
                  <div class="pbar-6310-template-preview-15-bar" style="width:75%;">
                    <div class="pbar-6310-template-preview-15-value">75%</div>
                  </div>
                </div>
                <div class="pbar-6310-template-preview-15-title">JAVASCRIPT</div>
                <div class="pbar-6310-template-preview-15-wrapper purple">
                  <div class="pbar-6310-template-preview-15-bar" style="width:87%;">
                    <div class="pbar-6310-template-preview-15-value">87%</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="pbar-6310-template-preview-list">
        Template 15
        <button type="button" class="pbar-6310-btn-success pbar_6310_choosen_style" id="template-15">Create Progress Bar</button>
      </div>
      <br class="pbar-6310-clear" />
    </div>


    <!-- ********* template 16 start ********* -->
    <div class="pbar-6310-row pbar-6310_team-style-boxed">
      <div class="pbar-6310-padding-15">
        <div class="pbar-6310-template-preview-16-parallax">
          <div class="pbar-6310-template-preview-16-common-overlay">
            <div class="pbar-6310-col-1">
              <div class="pbar-6310-template-preview-16">
                <div class="pbar-6310-template-preview-16-title">HTML5</div>
                <div class="pbar-6310-template-preview-16-wrapper yellow">
                  <div class="pbar-6310-template-preview-16-bar" style="width:65%;">
                    <div class="pbar-6310-template-preview-16-value">65%</div>
                  </div>
                </div>
                <div class="pbar-6310-template-preview-16-title">PHP</div>
                <div class="pbar-6310-template-preview-16-wrapper yellow">
                  <div class="pbar-6310-template-preview-16-bar" style="width:75%;">
                    <div class="pbar-6310-template-preview-16-value">75%</div>
                  </div>
                </div>
                <div class="pbar-6310-template-preview-16-title">SQL</div>
                <div class="pbar-6310-template-preview-16-wrapper yellow">
                  <div class="pbar-6310-template-preview-16-bar" style="width:87%;">
                    <div class="pbar-6310-template-preview-16-value">87%</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="pbar-6310-template-preview-list">
        Template 16
        <button type="button" class="pbar-6310-btn-success pbar_6310_choosen_style" id="template-16">Create Progress Bar</button>
      </div>
      <br class="pbar-6310-clear" />
    </div>
  </div>

  <!-- ****************** template 17 start **************** -->
  <div class="pbar-6310-row-section">
    <div class="pbar-6310-row pbar-6310_team-style-boxed">
      <div class="pbar-6310-padding-15">
        <div class="pbar-6310-template-preview-17-parallax">
          <div class="pbar-6310-template-preview-17-common-overlay">
            <div class="pbar-6310-col-1">
              <div class="pbar-6310-template-preview-17">
                <div class="pbar-6310-template-preview-17-title">HTML5</div>
                <div class="pbar-6310-template-preview-17-wrapper yellow">
                  <div class="pbar-6310-template-preview-17-bar" style="width:65%;">
                    <div class="pbar-6310-template-preview-17-value">65%</div>
                  </div>
                </div>
                <div class="pbar-6310-template-preview-17-title">PHP</div>
                <div class="pbar-6310-template-preview-17-wrapper yellow">
                  <div class="pbar-6310-template-preview-17-bar" style="width:75%;">
                    <div class="pbar-6310-template-preview-17-value">75%</div>
                  </div>
                </div>
                <div class="pbar-6310-template-preview-17-title">SQL</div>
                <div class="pbar-6310-template-preview-17-wrapper yellow">
                  <div class="pbar-6310-template-preview-17-bar" style="width:87%;">
                    <div class="pbar-6310-template-preview-17-value">87%</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="pbar-6310-template-preview-list">
        Template 17
        <button type="button" class="pbar-6310-btn-success pbar_6310_choosen_style" id="template-17">Create Progress Bar</button>
      </div>
      <br class="pbar-6310-clear" />
    </div>

    <!-- ***************** template 18 start**************** -->
    <div class="pbar-6310-row pbar-6310_team-style-boxed">
      <div class="pbar-6310-padding-15">
        <div class="pbar-6310-template-preview-18-parallax">
          <div class="pbar-6310-template-preview-18-common-overlay">
            <div class="pbar-6310-col-1">
              <div class="pbar-6310-template-preview-18">
                <div class="pbar-6310-template-preview-18-wrapper">
                  <div class="pbar-6310-template-preview-18-title">CSS3</div>
                  <div class="pbar-6310-template-preview-18-value">95%</div>
                  <div class="pbar-6310-template-preview-18-bar-section">
                    <div class="pbar-6310-template-preview-18-bar" style="width:95%;"></div>
                  </div>
                </div>
              </div>
              <div class="pbar-6310-template-preview-18">
                <div class="pbar-6310-template-preview-18-wrapper">
                  <div class="pbar-6310-template-preview-18-title">JAVASCRIPT</div>
                  <div class="pbar-6310-template-preview-18-value">85%</div>
                  <div class="pbar-6310-template-preview-18-bar-section">
                    <div class="pbar-6310-template-preview-18-bar" style="width:85%;"></div>
                  </div>
                </div>
              </div>
              <div class="pbar-6310-template-preview-18">
                <div class="pbar-6310-template-preview-18-wrapper">
                  <div class="pbar-6310-template-preview-18-title">PHP</div>
                  <div class="pbar-6310-template-preview-18-value">75%</div>
                  <div class="pbar-6310-template-preview-18-bar-section">
                    <div class="pbar-6310-template-preview-18-bar" style="width:75%;"></div>
                  </div>
                </div>
              </div>
              <div class="pbar-6310-template-preview-18">
                <div class="pbar-6310-template-preview-18-wrapper">
                  <div class="pbar-6310-template-preview-18-title">JQUERY</div>
                  <div class="pbar-6310-template-preview-18-value">65%</div>
                  <div class="pbar-6310-template-preview-18-bar-section">
                    <div class="pbar-6310-template-preview-18-bar" style="width:65%;"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="pbar-6310-template-preview-list">
        Template 18
        <button type="button" class="pbar-6310-btn-success pbar_6310_choosen_style" id="template-18">Create Progress Bar</button>

      </div>
      <br class="pbar-6310-clear" />
    </div>
  </div>
  
  <!-- **************** template 19 start ******** -->
  <div class="pbar-6310-row-section">
    <div class="pbar-6310-row pbar-6310_team-style-boxed">
      <div class="pbar-6310-padding-15">
        <div class="pbar-6310-template-preview-19-parallax">
          <div class="pbar-6310-template-preview-19-common-overlay">
            <div class="pbar-6310-col-1">
              <fieldset>
                <div class="pbar-6310-template-preview-19">
                  <div class="pbar-6310-template-preview-19-title">JQUERY - 85%</div>
                  <div class="pbar-6310-template-preview-19-wrapper">
                    <div class="pbar-6310-template-preview-19-bar" style="width:85%;"></div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <div class="pbar-6310-template-preview-19">
                  <div class="pbar-6310-template-preview-19-title">BOOTSTARP - 70%</div>
                  <div class="pbar-6310-template-preview-19-wrapper">
                    <div class="pbar-6310-template-preview-19-bar" style="width:70%;"></div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <div class="pbar-6310-template-preview-19">
                  <div class="pbar-6310-template-preview-19-title">JAVASCRIPT - 85%</div>
                  <div class="pbar-6310-template-preview-19-wrapper">
                    <div class="pbar-6310-template-preview-19-bar" style="width:85%;"></div>
                  </div>
                </div>
              </fieldset>
            </div>
          </div>
        </div>
      </div>
      <div class="pbar-6310-template-preview-list">
        Template 19
        <button type="button" class="pbar-6310-btn-success pbar_6310_choosen_style" id="template-19">Create Progress Bar</button>

      </div>
      <br class="pbar-6310-clear" />
    </div>

    <!-- ******************* template 20 start ******* -->
    <div class="pbar-6310-row pbar-6310_team-style-boxed">
      <div class="pbar-6310-padding-15">
        <div class="pbar-6310-template-preview-20-parallax">
          <div class="pbar-6310-template-preview-20-common-overlay">
            <div class="pbar-6310-col-1">
              <div class="pbar-6310-template-preview-20">
                <div class="pbar-6310-template-preview-20-title">HTML5 - 65%</div>
                <div class="pbar-6310-template-preview-20-wrapper">
                  <div class="pbar-6310-template-preview-20-bar" style="width:65%;"></div>
                </div>
              </div>
              <div class="pbar-6310-template-preview-20">
                <div class="pbar-6310-template-preview-20-title">BOOTSTRAP - 85%</div>
                <div class="pbar-6310-template-preview-20-wrapper">
                  <div class="pbar-6310-template-preview-20-bar" style="width:85%;"></div>
                </div>
              </div>
              <div class="pbar-6310-template-preview-20">
                <div class="pbar-6310-template-preview-20-title">ASP.NET - 65%</div>
                <div class="pbar-6310-template-preview-20-wrapper">
                  <div class="pbar-6310-template-preview-20-bar" style="width:65%;"></div>
                </div>
              </div>
              </fieldset>
            </div>
          </div>
        </div>
      </div>
      <div class="pbar-6310-template-preview-list">
        Template 20
        <button type="button" class="pbar-6310-btn-success pbar_6310_choosen_style" id="template-20">Create Progress Bar</button>

      </div>
      <br class="pbar-6310-clear" />
    </div>
  </div>
  <div id="pbar-6310-modal-add" class="pbar-6310-modal" style="display: none">
    <div class="pbar-6310-modal-content pbar-6310-modal-sm">
      <form action="" method="post">
        <div class="pbar-6310-modal-header">
            Create Progress Bar
          <div class="pbar-6310-close">&times;</div>
        </div>
        <div class="pbar-6310-modal-body-form">
          <?php wp_nonce_field("pbar-6310-nonce-field") ?>
          <input type="hidden" name="style" id="pbar-6310-style-hidden" />
          <table border="0" width="100%" cellpadding="10" cellspacing="0">
            <tr>
              <td width="90"><label class="pbar-6310-form-label" for="icon_name">Name:</label></td>
              <td><input type="text" required="" name="style_name" id="style_name" value="" class="pbar-6310-form-input" autocomplete="off" placeholder="Template Name" style="width: 265px" /></td>
            </tr>
          </table>
        </div>
        <div class="pbar-6310-modal-form-footer">
          <button type="button" name="close" class="pbar-6310-btn-danger pbar-6310-pull-right">Close</button>
          <input type="submit" name="submit" class="pbar-6310-btn-primary pbar-6310-pull-right pbar-6310-margin-right-10" value="Save" />
        </div>
      </form>
      <br class="pbar-6310-clear" />
    </div>
  </div>

  <script>
    jQuery(document).ready(function() {
      jQuery("body").on("click", ".pbar_6310_choosen_style", function() {
        jQuery("#pbar-6310-modal-add").fadeIn(500);
        jQuery("#pbar-6310-style-hidden").val(jQuery(this).attr("id"));
        jQuery("body").css({
          "overflow": "hidden"
        });
        return false;
      });

      jQuery("body").on("click", ".pbar-6310-close, .pbar-6310-btn-danger", function() {
        jQuery("#pbar-6310-modal-add").fadeOut(500);
        jQuery("body").css({
          "overflow": "initial"
        });
      });
      jQuery(window).click(function(event) {
        if (event.target == document.getElementById('pbar-6310-modal-add')) {
          jQuery("#pbar-6310-modal-add").fadeOut(500);
          jQuery("body").css({
            "overflow": "initial"
          });
        }
      });
    });
  </script>

<?php } ?>
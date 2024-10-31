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
    if ($_POST['style'] == 'template-21') {
      $css = "_wp_http_referer,id,background_type,background_transparent,template_background_color,box_background_image,image_opacity,youtube_video_url,video_opacity,video_opacity_color,animation_duration,item_margin,pbar_progress_bar_first_color,pbar_progress_bar_second_color,pbar_6310_bar_radius,pbar_progress_bar_background_color,pbar_progress_bar_margin_top,pbar_progress_bar_margin_bottom,pbar_6310_bar_height,pbar_6310_title_font_color,pbar_6310_title_font_size,pbar_6310_title_line_height,pbar_6310_title_font_hover_color,pbar_6310_title_font_weight,pbar_6310_title_text_transform,pbar_6310_title_text_align,pbar_6310_title_font_family,pbar_6310_title_padding_top,pbar_6310_title_padding_bottom,custom_css,pbar_6310_value_font_family,pbar_6310_value_font_size,pbar_6310_value_font_weight,pbar_6310_value_font_color,pbar_6310_value_font_hover_color,pbar_progress_tooltip_background_size,pbar_progress_tooltip_background_color,update_style_change!!##!!/wordpress_1/wp-admin/admin.php?page=pbar-6310-template-21-30&styleid=24||##||24||##||2||##||transparent||##||rgba(227, 227, 227, 0.79)||##||||##||rgba(255, 255, 255, 0)||##||||##||.7||##||rgba(255, 255, 255, 0)||##||.5||##||15||##||rgb(63, 131, 191)||##||rgb(247, 182, 108)||##||10||##||rgba(128, 128, 128, 1)||##||10||##||10||##||20||##||rgb(0, 0, 0)||##||15||##||25||##||rgb(8, 8, 8)||##||bold||##||capitalize||##||left||##||Allerta||##||10||##||0||##||||##||Cousine||##||13||##||500||##||rgb(0, 0, 0)||##||rgb(0, 0, 0)||##||2||##||rgb(179, 179, 179)||##||Save";
    } else if ($_POST['style'] == 'template-22') {
      $css = "_wp_http_referer,id,background_type,background_transparent,template_background_color,box_background_image,image_opacity,youtube_video_url,video_opacity,video_opacity_color,animation_duration,pbar_progress_bar_first_color,pbar_progress_bar_second_color,pbar_progress_bar_third_color,pbar_6310_bar_radius,pbar_progress_bar_background_color,pbar_progress_bar_color,pbar_progress_bar_margin_top,pbar_progress_bar_margin_bottom,pbar_6310_bar_height,pbar_6310_title_font_color,pbar_6310_title_font_size,pbar_6310_title_line_height,pbar_6310_title_font_hover_color,pbar_6310_title_font_weight,pbar_6310_title_text_transform,pbar_6310_title_text_align,pbar_6310_title_font_family,pbar_6310_title_padding_top,pbar_6310_title_padding_bottom,custom_css,update_style_change!!##!!/wordpress_1/wp-admin/admin.php?page=pbar-6310-template-21-30&styleid=45||##||45||##||2||##||transparent||##||rgba(207, 207, 207, 1)||##||||##||rgba(255, 255, 255, 0)||##||||##||.7||##||rgba(255, 255, 255, 0)||##||2||##||rgb(64, 224, 208)||##||rgb(255, 140, 0)||##||rgb(255, 0, 128)||##||0||##||rgba(255, 255, 255, 1)||##||||##||10||##||5||##||27||##||rgb(36, 36, 36)||##||17||##||27||##||rgb(227, 255, 254)||##||400||##||capitalize||##||center||##||Open+Sans||##||0||##||0||##||||##||Save";
    } else if ($_POST['style'] == 'template-23') {
      $css = "_wp_http_referer,id,background_type,background_transparent,template_background_color,box_background_image,image_opacity,youtube_video_url,video_opacity,video_opacity_color,animation_duration,item_margin,pbar_6310_bar_radius,pbar_progress_bar_background_color,pbar_progress_bar_color,pbar_progress_bar_margin_top,pbar_progress_bar_margin_bottom,pbar_6310_bar_height,pbar_6310_title_font_color,pbar_6310_title_font_size,pbar_6310_title_line_height,pbar_6310_title_font_hover_color,pbar_6310_title_font_weight,pbar_6310_title_text_transform,pbar_6310_title_text_align,pbar_6310_title_font_family,pbar_6310_title_padding_top,pbar_6310_title_padding_bottom,custom_css,pbar_6310_value_font_family,pbar_6310_value_font_size,pbar_6310_value_font_weight,pbar_6310_value_font_color,pbar_6310_value_font_hover_color,pbar_progress_tooltip_background_color,update_style_change!!##!!/wordpress_1/wp-admin/admin.php?page=pbar-6310-template-21-30&styleid=26||##||26||##||2||##||transparent||##||rgba(209, 209, 209, 1)||##||||##||rgba(255, 255, 255, 0)||##||||##||.7||##||rgba(255, 255, 255, 0)||##||.5||##||15||##||0||##||rgba(255, 255, 255, 1)||##||rgb(119, 136, 153)||##||9||##||9||##||30||##||rgb(255, 255, 255)||##||18||##||18||##||rgb(0, 0, 0)||##||lighter||##||capitalize||##||center||##||Coda||##||10||##||10||##||||##||Kreon||##||15||##||bold||##||rgb(0, 0, 0)||##||rgb(0, 0, 0)||##||rgb(255, 255, 255)||##||Save";
    } else if ($_POST['style'] == 'template-24') {
      $css = "_wp_http_referer,id,background_type,background_transparent,template_background_color,box_background_image,image_opacity,youtube_video_url,video_opacity,video_opacity_color,animation_duration,item_margin,pbar_progress_bar_label_color,pbar_progress_bar_label_two_color,pbar_progress_bar_background_color,pbar_progress_bar_color,pbar_progress_bar_alternate_color,pbar_progress_bar_margin_top,pbar_progress_bar_margin_bottom,pbar_6310_bar_height,pbar_6310_title_font_color,pbar_6310_title_font_size,pbar_6310_title_line_height,pbar_6310_title_font_hover_color,pbar_6310_title_font_weight,pbar_6310_title_text_transform,pbar_6310_title_text_align,pbar_6310_title_font_family,pbar_6310_title_padding_top,pbar_6310_title_padding_bottom,custom_css,pbar_6310_value_font_family,pbar_6310_value_font_size,pbar_6310_value_font_weight,pbar_6310_value_font_hover_color,update_style_change!!##!!/wordpress_1/wp-admin/admin.php?page=pbar-6310-template-21-30&styleid=27||##||27||##||2||##||transparent||##||rgba(212, 212, 212, 1)||##||http://localhost/wordpress/wp-content/uploads/2021/06/1280x1280-small-memory-4k_1540749683.jpg||##||rgba(255, 255, 255, 0)||##||||##||.7||##||rgba(255, 255, 255, 0)||##||5||##||15||##||rgb(0, 0, 70)||##||rgb(28, 181, 224)||##||rgba(255, 255, 255, 0.83)||##||rgb(255, 255, 255)||##||rgba(25, 101, 171, 0.82)||##||10||##||20||##||10||##||rgb(255, 255, 255)||##||17||##||17||##||rgb(255, 255, 255)||##||200||##||capitalize||##||left||##||Allerta||##||10||##||10||##||||##||Arimo||##||15||##||lighter||##||rgb(255, 255, 255)||##||Save";
    } else if ($_POST['style'] == 'template-25') {
      $css = "_wp_http_referer,id,background_type,background_transparent,template_background_color,box_background_image,image_opacity,youtube_video_url,video_opacity,video_opacity_color,animation_duration,item_margin,pbar_progress_bar_background_color,pbar_progress_bar_color,pbar_progress_bar_alternate_color,pbar_progress_bar_margin_top,pbar_progress_bar_margin_bottom,pbar_6310_bar_height,pbar_6310_title_font_color,pbar_6310_title_font_size,pbar_6310_title_line_height,pbar_6310_title_font_hover_color,pbar_6310_title_font_weight,pbar_6310_title_text_transform,pbar_6310_title_text_align,pbar_6310_title_font_family,pbar_6310_title_padding_top,pbar_6310_title_padding_bottom,custom_css,pbar_6310_value_font_family,pbar_6310_value_font_size,pbar_6310_value_font_weight,pbar_6310_value_font_color,pbar_6310_value_font_hover_color,update_style_change!!##!!/wordpress_1/wp-admin/admin.php?page=pbar-6310-template-21-30&styleid=28||##||28||##||2||##||transparent||##||rgba(227, 227, 227, 1)||##||http://localhost/wordpress/wp-content/uploads/2021/06/1280x1280-small-memory-4k_1540749683.jpg||##||rgba(255, 255, 255, 0)||##||||##||.7||##||rgba(255, 255, 255, 0)||##||2||##||15||##||rgba(255, 255, 255, 1)||##||rgb(214, 4, 4)||##||rgba(0, 0, 0, 1)||##||0||##||35||##||14||##||rgb(0, 0, 0)||##||20||##||15||##||rgb(232, 12, 71)||##||200||##||capitalize||##||left||##||Amaranth||##||10||##||4||##||||##||Amaranth||##||15||##||100||##||rgb(0, 0, 0)||##||rgb(232, 12, 71)||##||Save";
    } else if ($_POST['style'] == 'template-26') {
      $css = "_wp_http_referer,id,background_type,background_transparent,template_background_color,box_background_image,image_opacity,youtube_video_url,video_opacity,video_opacity_color,animation_duration,item_margin,pbar_progress_bar_background_color,pbar_progress_bar_color,pbar_progress_bar_alternate_color,pbar_progress_bar_margin_top,pbar_progress_bar_margin_bottom,pbar_6310_bar_height,pbar_progress_title_background_color,pbar_6310_title_height,pbar_6310_title_font_color,pbar_6310_title_font_size,pbar_6310_title_line_height,pbar_6310_title_font_hover_color,pbar_6310_title_font_weight,pbar_6310_title_text_transform,pbar_6310_title_text_align,pbar_6310_title_font_family,pbar_6310_title_padding_top,pbar_6310_title_padding_bottom,custom_css,pbar_6310_value_font_family,pbar_6310_value_font_size,pbar_6310_value_font_weight,pbar_6310_value_font_color,pbar_6310_value_font_hover_color,pbar_progress_tooltip_background_size,pbar_progress_tooltip_background_color,update_style_change!!##!!/wordpress_1/wp-admin/admin.php?page=pbar-6310-template-21-30&styleid=29||##||29||##||2||##||transparent||##||rgba(224, 224, 224, 1)||##||||##||rgba(255, 255, 255, 0)||##||||##||.7||##||rgba(255, 255, 255, 0)||##||2||##||15||##||rgba(255, 255, 255, 1)||##||rgb(234, 32, 39)||##||rgba(0, 0, 0, 1)||##||30||##||20||##||12||##||rgb(234, 32, 39)||##||31||##||rgb(255, 255, 255)||##||15||##||15||##||rgb(255, 204, 204)||##||100||##||capitalize||##||left||##||Amaranth||##||10||##||10||##||||##||Arimo||##||13||##||100||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||9||##||rgb(234, 32, 39)||##||Save";
    } else if ($_POST['style'] == 'template-27') {
      $css = "_wp_http_referer,id,background_type,background_transparent,template_background_color,box_background_image,image_opacity,youtube_video_url,video_opacity,video_opacity_color,animation_duration,item_margin,pbar_progress_bar_circle_border_color,pbar_progress_bar_circle_inner_color,pbar_6310_bar_radius,pbar_progress_bar_background_color,pbar_progress_bar_color,pbar_progress_bar_alternate_color,pbar_progress_bar_margin_top,pbar_progress_bar_margin_bottom,pbar_6310_bar_height,pbar_progress_title_background_color,pbar_6310_title_font_color,pbar_6310_title_font_size,pbar_6310_title_line_height,pbar_6310_title_font_hover_color,pbar_6310_title_font_weight,pbar_6310_title_text_transform,pbar_6310_title_text_align,pbar_6310_title_font_family,pbar_6310_title_padding_top,pbar_6310_title_padding_bottom,custom_css,pbar_6310_value_font_family,pbar_6310_value_font_size,pbar_6310_value_font_weight,pbar_6310_value_font_color,pbar_6310_value_font_hover_color,pbar_progress_tooltip_background_size,pbar_progress_tooltip_background_color,update_style_change!!##!!/wordpress_1/wp-admin/admin.php?page=pbar-6310-template-21-30&styleid=30||##||30||##||1||##||transparent||##||rgba(255, 255, 255, 0)||##||||##||rgba(255, 255, 255, 0)||##||||##||.7||##||rgba(255, 255, 255, 0)||##||2||##||15||##||rgb(33, 147, 176)||##||rgb(255, 255, 255)||##||0||##||rgba(194, 194, 194, 0.75)||##||rgb(33, 147, 176)||##||rgba(109, 213, 237, 0.87)||##||43||##||20||##||12||##||rgb(7, 101, 133)||##||rgb(255, 255, 255)||##||13||##||15||##||rgb(255, 255, 255)||##||100||##||capitalize||##||left||##||Arimo||##||10||##||10||##||||##||Arimo||##||12||##||300||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||3||##||rgb(7, 101, 133)||##||Save";
    } else if ($_POST['style'] == 'template-28') {
      $css = "_wp_http_referer,id,background_type,background_transparent,template_background_color,box_background_image,image_opacity,youtube_video_url,video_opacity,video_opacity_color,animation_duration,item_margin,pbar_progress_bar_background2_color,pbar_6310_bar_radius,pbar_progress_bar_background_color,pbar_progress_bar_color,pbar_progress_bar_alternate_color,pbar_progress_bar_margin_top,pbar_progress_bar_margin_bottom,pbar_6310_bar_height,pbar_6310_title_font_color,pbar_6310_title_font_size,pbar_6310_title_line_height,pbar_6310_title_font_hover_color,pbar_6310_title_font_weight,pbar_6310_title_text_transform,pbar_6310_title_text_align,pbar_6310_title_font_family,pbar_6310_title_padding_top,pbar_6310_title_padding_bottom,custom_css,pbar_6310_value_font_family,pbar_6310_value_font_size,pbar_6310_value_font_weight,pbar_6310_value_font_color,pbar_6310_value_font_hover_color,pbar_progress_tooltip_background_size,pbar_progress_tooltip_background_color,update_style_change!!##!!/wordpress_1/wp-admin/admin.php?page=pbar-6310-template-21-30&styleid=32||##||32||##||1||##||transparent||##||rgba(255, 255, 255, 0)||##||||##||rgba(255, 255, 255, 0)||##||||##||.7||##||rgba(255, 255, 255, 0)||##||2||##||15||##||rgb(164, 176, 190)||##||10||##||rgba(44, 62, 80, 1)||##||rgb(34, 166, 179)||##||rgba(199, 236, 238, 1)||##||0||##||10||##||7||##||rgb(0, 0, 0)||##||16||##||25||##||rgb(44, 62, 80)||##||100||##||capitalize||##||left||##||Anton||##||0||##||0||##||||##||Arimo||##||15||##||300||##||rgb(189, 195, 199)||##||rgb(255, 255, 255)||##||6||##||rgb(44, 62, 80)||##||Save";
    } else if ($_POST['style'] == 'template-29') {
      $css = "_wp_http_referer,id,background_type,background_transparent,template_background_color,box_background_image,image_opacity,youtube_video_url,video_opacity,video_opacity_color,animation_duration,item_margin,pbar_6310_bar_radius,pbar_progress_bar_background_color,pbar_progress_bar_color,pbar_progress_bar_margin_top,pbar_progress_bar_margin_bottom,pbar_6310_bar_height,pbar_6310_title_font_color,pbar_6310_title_font_size,pbar_6310_title_line_height,pbar_6310_title_font_hover_color,pbar_6310_title_font_weight,pbar_6310_title_text_transform,pbar_6310_title_text_align,pbar_6310_title_font_family,pbar_6310_title_padding_top,pbar_6310_title_padding_bottom,custom_css,pbar_6310_value_font_family,pbar_6310_value_font_size,pbar_6310_value_font_weight,pbar_6310_value_font_color,pbar_6310_value_font_hover_color,update_style_change!!##!!/wordpress_1/wp-admin/admin.php?page=pbar-6310-template-21-30&styleid=33||##||33||##||2||##||transparent||##||rgba(217, 217, 217, 1)||##||||##||rgba(255, 255, 255, 0)||##||||##||.7||##||rgba(255, 255, 255, 0)||##||5||##||15||##||0||##||rgba(255, 255, 255, 0.82)||##||rgb(0, 20, 64)||##||11||##||15||##||6||##||rgb(0, 19, 43)||##||19||##||28||##||rgb(0, 19, 43)||##||100||##||capitalize||##||left||##||Arvo||##||5||##||0||##||||##||Anonymous+Pro||##||14||##||900||##||rgb(0, 20, 64)||##||rgb(0, 20, 64)||##||Save";
    } else if ($_POST['style'] == 'template-30') {
      $css = "_wp_http_referer,id,background_type,background_transparent,template_background_color,box_background_image,image_opacity,youtube_video_url,video_opacity,video_opacity_color,animation_duration,item_margin,pbar_6310_bar_radius,pbar_progress_bar_background_color,pbar_progress_bar_color,pbar_progress_bar_alternate_color,pbar_progress_bar_margin_top,pbar_progress_bar_margin_bottom,pbar_6310_bar_height,pbar_6310_title_font_color,pbar_6310_title_font_size,pbar_6310_title_line_height,pbar_6310_title_font_hover_color,pbar_6310_title_font_weight,pbar_6310_title_text_transform,pbar_6310_title_text_align,pbar_6310_title_font_family,pbar_6310_title_padding_top,pbar_6310_title_padding_bottom,custom_css,pbar_6310_value_font_family,pbar_6310_value_font_size,pbar_6310_value_font_weight,pbar_6310_value_font_color,pbar_6310_value_font_hover_color,pbar_progress_tooltip_background_size,pbar_progress_tooltip_background_color,update_style_change!!##!!/wordpress_1/wp-admin/admin.php?page=pbar-6310-template-21-30&styleid=34||##||34||##||2||##||transparent||##||rgba(230, 230, 230, 1)||##||||##||rgba(255, 255, 255, 0)||##||||##||.7||##||rgba(255, 255, 255, 0)||##||2||##||15||##||0||##||rgba(255, 255, 255, 1)||##||rgb(7, 101, 133)||##||rgba(143, 221, 255, 1)||##||13||##||19||##||12||##||rgb(0, 0, 0)||##||19||##||6||##||rgb(0, 0, 0)||##||100||##||capitalize||##||left||##||Coda||##||18||##||0||##||||##||Arimo||##||11||##||100||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||3||##||rgb(0, 61, 97)||##||Save";
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
      $url = admin_url("admin.php?page=pbar-6310-template-21-30&styleid=$redirect_id");
    }
    wp_register_script('cnvb-6310-redirect-script', '');
    wp_enqueue_script('cnvb-6310-redirect-script');
    wp_add_inline_script('cnvb-6310-redirect-script', "document.location.href = '" . $url . "';");
  }
} else {
?>
  <div class="pbar-6310">
    <h1>Select Template</h1>

    <!-- ******************* Template 21 start ************ -->
    <div class="pbar-6310-row-section">
      <div class="pbar-6310-row pbar-6310_team-style-boxed">
        <div class="pbar-6310-padding-15">
          <div class="pbar-6310-template-preview-21-parallax">
            <div class="pbar-6310-template-preview-21-common-overlay">
              <iframe src='https://www.youtube.com/embed/?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&playlist=pUuAVaCZZuo&mute=1&allowfullscreen=1&allow=accelerometer&autoplay=1&rel=0' frameborder='0' allowfullscreen></iframe>
              <div class="pbar-6310-col-1">
                <div class="pbar-6310-template-preview-21">
                  <div class="pbar-6310-template-preview-21-title">HTML5</div>
                  <div class="pbar-6310-template-preview-21-wrapper">
                    <div class="pbar-6310-template-preview-21-bar" style="width:90%;">
                      <div class="pbar-6310-template-preview-21-value">90%</div>
                    </div>
                  </div>
                </div>
                <div class="pbar-6310-template-preview-21">
                  <div class="pbar-6310-template-preview-21-title">CSS3</div>
                  <div class="pbar-6310-template-preview-21-wrapper">
                    <div class="pbar-6310-template-preview-21-bar" style="width:85%;">
                      <div class="pbar-6310-template-preview-21-value">85%</div>
                    </div>
                  </div>
                </div>
                <div class="pbar-6310-template-preview-21">
                  <div class="pbar-6310-template-preview-21-title">PHP</div>
                  <div class="pbar-6310-template-preview-21-wrapper">
                    <div class="pbar-6310-template-preview-21-bar" style="width:80%;">
                      <div class="pbar-6310-template-preview-21-value">80%</div>
                    </div>
                  </div>
                </div>
                <div class="pbar-6310-template-preview-21">
                  <div class="pbar-6310-template-preview-21-title">JS</div>
                  <div class="pbar-6310-template-preview-21-wrapper">
                    <div class="pbar-6310-template-preview-21-bar" style="width:65%;">
                      <div class="pbar-6310-template-preview-21-value">65%</div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>
        <div class="pbar-6310-template-preview-list">
          Template 21
          <button type="button" class="pbar-6310-btn-success pbar_6310_choosen_style" id="template-21">Create Progress Bar</button>

        </div>
        <br class="pbar-6310-clear" />
      </div>

<!-- ******************* Template 22 start ************ -->

      <div class="pbar-6310-row pbar-6310_team-style-boxed">
        <div class="pbar-6310-padding-15">
          <div class="pbar-6310-template-preview-22-parallax">
            <div class="pbar-6310-template-preview-22-common-overlay">
              <div class="pbar-6310-col-1">
                <div class="pbar-6310-template-preview-22">
                  <div class="pbar-6310-template-preview-22-wrapper">
                    <div class="pbar-6310-template-preview-22-bar" style="width:85%;">
                      <div class="pbar-6310-template-preview-22-title">PHP</div>
                      <div class="pbar-6310-template-preview-22-value">85%</div>
                    </div>
                  </div>
                </div>
                <div class="pbar-6310-template-preview-22">
                  <div class="pbar-6310-template-preview-22-wrapper">
                    <div class="pbar-6310-template-preview-22-bar" style="width:65%;">
                      <div class="pbar-6310-template-preview-22-title">CSS3</div>
                      <div class="pbar-6310-template-preview-22-value">65%</div>
                    </div>
                  </div>
                </div>
                <div class="pbar-6310-template-preview-22">
                  <div class="pbar-6310-template-preview-22-wrapper">
                    <div class="pbar-6310-template-preview-22-bar" style="width:85%;">
                      <div class="pbar-6310-template-preview-22-title">HTTML5</div>
                      <div class="pbar-6310-template-preview-22-value">85%</div>
                    </div>
                  </div>
                </div>
                <div class="pbar-6310-template-preview-22">
                  <div class="pbar-6310-template-preview-22-wrapper">
                    <div class="pbar-6310-template-preview-22-bar" style="width:65%;">
                      <div class="pbar-6310-template-preview-22-title">REACT</div>
                      <div class="pbar-6310-template-preview-22-value">65%</div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="pbar-6310-template-preview-list">
          Template 22
          <button type="button" class="pbar-6310-btn-success pbar_6310_choosen_style" id="template-22">Create Progress Bar</button>

        </div>
        <br class="pbar-6310-clear" />
      </div>
    </div>


<!-- ******************* Template 23 start ************ -->

    <div class="pbar-6310-row-section">
      <div class="pbar-6310-row pbar-6310_team-style-boxed">
        <div class="pbar-6310-padding-15">
          <div class="pbar-6310-template-preview-23-parallax">
            <div class="pbar-6310-template-preview-23-common-overlay">
              <div class="pbar-6310-col-1">
                <div class="pbar-6310-template-preview-23">
                  <div class="pbar-6310-template-preview-23-wrapper">
                    <div class="pbar-6310-template-preview-23-value">70%</div>
                    <div class="pbar-6310-template-preview-23-bar" style="width:70%;">
                      <div class="pbar-6310-template-preview-23-title">HTML5</div>
                    </div>
                  </div>
                </div>
                <div class="pbar-6310-template-preview-23">
                  <div class="pbar-6310-template-preview-23-wrapper">
                    <div class="pbar-6310-template-preview-23-value">75%</div>
                    <div class="pbar-6310-template-preview-23-bar" style="width:75%;">
                      <div class="pbar-6310-template-preview-23-title">PHP</div>
                    </div>
                  </div>
                </div>
                <div class="pbar-6310-template-preview-23">
                  <div class="pbar-6310-template-preview-23-wrapper">
                    <div class="pbar-6310-template-preview-23-value">85%</div>
                    <div class="pbar-6310-template-preview-23-bar" style="width:85%">
                      <div class="pbar-6310-template-preview-23-title">JS</div>
                    </div>
                  </div>
                </div>
                <div class="pbar-6310-template-preview-23">
                  <div class="pbar-6310-template-preview-23-wrapper">
                    <div class="pbar-6310-template-preview-23-value">65%</div>
                    <div class="pbar-6310-template-preview-23-bar" style="width:65%">
                      <div class="pbar-6310-template-preview-23-title">CSS</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="pbar-6310-template-preview-list">
          Template 23
          <button type="button" class="pbar-6310-btn-success pbar_6310_choosen_style" id="template-23">Create Progress Bar</button>

        </div>
        <br class="pbar-6310-clear" />
      </div>



<!-- ******************* Template 24 start ************ -->

      <div class="pbar-6310-row pbar-6310_team-style-boxed">
        <div class="pbar-6310-padding-15">
          <div class="pbar-6310-template-preview-24-parallax">
            <div class="pbar-6310-template-preview-24-common-overlay">
              <div class="pbar-6310-col-1">
                <div class="pbar-6310-template-preview-24">
                  <div class="pbar-6310-template-preview-24-title">Html</div>
                  <div class="pbar-6310-template-preview-24-wrapper">
                    <div class="pbar-6310-template-preview-24-bar" style="width:55%;">
                      <div class="pbar-6310-template-preview-24-value">55%</div>
                    </div>
                  </div>
                </div>
                <div class="pbar-6310-template-preview-24">
                  <div class="pbar-6310-template-preview-24-title">Css</div>
                  <div class="pbar-6310-template-preview-24-wrapper">
                    <div class="pbar-6310-template-preview-24-bar" style="width:70%;">
                      <div class="pbar-6310-template-preview-24-value">70%</div>
                    </div>
                  </div>
                </div>
                <div class="pbar-6310-template-preview-24">
                  <div class="pbar-6310-template-preview-24-title">jQuery</div>
                  <div class="pbar-6310-template-preview-24-wrapper">
                    <div class="pbar-6310-template-preview-24-bar" style="width:85%;">
                      <div class="pbar-6310-template-preview-24-value">85%</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="pbar-6310-template-preview-list">
          Template 24
          <button type="button" class="pbar-6310-btn-success pbar_6310_choosen_style" id="template-24">Create Progress Bar</button>

        </div>
        <br class="pbar-6310-clear" />
      </div>
    </div>

<!-- ******************* Template 25 start ************ -->

    <div class="pbar-6310-row-section">
      <div class="pbar-6310-row pbar-6310_team-style-boxed">
        <div class="pbar-6310-padding-15">
          <div class="pbar-6310-template-preview-25-parallax">
            <div class="pbar-6310-template-preview-25-common-overlay">
              <div class="pbar-6310-col-1">
                <div class="pbar-6310-template-preview-25">
                  <div class="pbar-6310-template-preview-25-title">HTML</div>
                  <div class="pbar-6310-template-preview-25-wrapper">
                    <div class="pbar-6310-template-preview-25-bar " style="width:85%; background:#f80a0a;">
                      <i class="fas fa-check"></i>
                      <div class="pbar-6310-template-preview-25-value">85%</div>
                    </div>
                  </div>
                </div>
                <div class="pbar-6310-template-preview-25">
                  <div class="pbar-6310-template-preview-25-title">JAVASCRIPT</div>
                  <div class="pbar-6310-template-preview-25-wrapper">
                    <div class="pbar-6310-template-preview-25-bar " style="width:65%; background:#f80a0a;">
                      <i class="fas fa-check"></i>
                      <div class="pbar-6310-template-preview-25-value">65%</div>
                    </div>
                  </div>
                </div>
                <div class="pbar-6310-template-preview-25">
                  <div class="pbar-6310-template-preview-25-title">CSS3</div>
                  <div class="pbar-6310-template-preview-25-wrapper">
                    <div class="pbar-6310-template-preview-25-bar " style="width:85%; background:#f80a0a;">
                      <i class="fas fa-check"></i>
                      <div class="pbar-6310-template-preview-25-value">85%</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="pbar-6310-template-preview-list">
          Template 25
          <button type="button" class="pbar-6310-btn-success pbar_6310_choosen_style" id="template-25">Create Progress Bar</button>

        </div>
        <br class="pbar-6310-clear" />
      </div>


<!-- ******************* Template 26 start ************ -->

      <div class="pbar-6310-row pbar-6310_team-style-boxed">
        <div class="pbar-6310-padding-15">
          <div class="pbar-6310-template-preview-26-parallax">
            <div class="pbar-6310-template-preview-26-common-overlay">
              <div class="pbar-6310-col-1">
                <div class="pbar-6310-template-preview-26">
                  <div class="pbar-6310-template-preview-26-wrapper">
                    <div class="pbar-6310-template-preview-26-title">HTML5</div>
                    <div class="pbar-6310-template-preview-26-bar" style="width:90%;">
                    </div>
                  </div>
                </div>
                <div class="pbar-6310-template-preview-26">
                  <div class="pbar-6310-template-preview-26-wrapper">
                    <div class="pbar-6310-template-preview-26-title">PHP</div>
                    <div class="pbar-6310-template-preview-26-bar " style="width:75%;">
                    </div>
                  </div>
                </div>
                <div class="pbar-6310-template-preview-26">
                  <div class="pbar-6310-template-preview-26-wrapper">
                    <div class="pbar-6310-template-preview-26-title">JS</div>
                    <div class="pbar-6310-template-preview-26-bar " style="width:60%;">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="pbar-6310-template-preview-list">
          Template 26
          <button type="button" class="pbar-6310-btn-success pbar_6310_choosen_style" id="template-26">Create Progress Bar</button>

        </div>
        <br class="pbar-6310-clear" />
      </div>
    </div>

<!-- ******************* Template 27 start ************ -->

    <div class="pbar-6310-row-section">
      <div class="pbar-6310-row pbar-6310_team-style-boxed">
        <div class="pbar-6310-padding-15">
          <div class="pbar-6310-template-preview-27-parallax">
            <div class="pbar-6310-template-preview-27-common-overlay">
              <div class="pbar-6310-col-1">
                <div class="pbar-6310-template-preview-27">
                  <div class="pbar-6310-template-preview-27-wrapper">
                    <div class="pbar-6310-template-preview-27-title">Html</div>
                    <div class="pbar-6310-template-preview-27-bar" style="width:55%;">
                      <div class="pbar-6310-template-preview-27-value">55%</div>
                    </div>
                  </div>
                </div>
                <div class="pbar-6310-template-preview-27">
                  <div class="pbar-6310-template-preview-27-wrapper">
                    <div class="pbar-6310-template-preview-27-title">jQuery</div>
                    <div class="pbar-6310-template-preview-27-bar" style="width:67%;">
                      <div class="pbar-6310-template-preview-27-value">67%</div>
                    </div>
                  </div>
                </div>
                <div class="pbar-6310-template-preview-27">
                  <div class="pbar-6310-template-preview-27-wrapper">
                    <div class="pbar-6310-template-preview-27-title">Css</div>
                    <div class="pbar-6310-template-preview-27-bar" style="width:75%;">
                      <div class="pbar-6310-template-preview-27-value">75%</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="pbar-6310-template-preview-list">
          Template 27
          <button type="button" class="pbar-6310-btn-success pbar_6310_choosen_style" id="template-27">Create Progress Bar</button>

        </div>
        <br class="pbar-6310-clear" />
      </div>


<!-- ******************* Template 28 start ************ -->

      <div class="pbar-6310-row pbar-6310_team-style-boxed">
        <div class="pbar-6310-padding-15">
          <div class="pbar-6310-template-preview-28-parallax">
            <div class="pbar-6310-template-preview-28-common-overlay">
              <div class="pbar-6310-col-1">
                <div class="pbar-6310-template-preview-28">
                  <div class="pbar-6310-template-preview-28-title">HTML5</div>
                  <div class="pbar-6310-template-preview-28-wrapper">
                    <div class="pbar-6310-template-preview-28-value">50%</div>
                    <div class="pbar-6310-template-preview-28-bar-wrapper">
                      <div class="pbar-6310-template-preview-28-bar " style="width:50%;">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="pbar-6310-template-preview-28">
                  <div class="pbar-6310-template-preview-28-title">PHP</div>
                  <div class="pbar-6310-template-preview-28-wrapper">
                    <div class="pbar-6310-template-preview-28-value">65%</div>
                    <div class="pbar-6310-template-preview-28-bar-wrapper">
                      <div class="pbar-6310-template-preview-28-bar " style="width:65%;">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="pbar-6310-template-preview-28">
                  <div class="pbar-6310-template-preview-28-title">JAVASCRIPT</div>
                  <div class="pbar-6310-template-preview-28-wrapper">
                    <div class="pbar-6310-template-preview-28-value">75%</div>
                    <div class="pbar-6310-template-preview-28-bar-wrapper">
                      <div class="pbar-6310-template-preview-28-bar " style="width:75%;">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="pbar-6310-template-preview-list">
          Template 28
          <button type="button" class="pbar-6310-btn-success pbar_6310_choosen_style" id="template-28">Create Progress Bar</button>
        </div>
        <br class="pbar-6310-clear" />
      </div>
    </div>



<!-- ******************* Template 29 start ************ -->

    <div class="pbar-6310-row-section">
      <div class="pbar-6310-row pbar-6310_team-style-boxed">
        <div class="pbar-6310-padding-15">
          <div class="pbar-6310-template-preview-29-parallax">
            <div class="pbar-6310-template-preview-29-common-overlay">
              <div class="pbar-6310-col-1">
                <div class="pbar-6310-template-preview-29">
                  <div class="pbar-6310-template-preview-29-title">CSS</div>
                  <div class="pbar-6310-template-preview-29-wrapper yellow">
                    <div class="pbar-6310-template-preview-29-bar" style="width:65%;">
                      <div class="pbar-6310-template-preview-29-value">65%</div>
                    </div>
                  </div>
                  <div class="pbar-6310-template-preview-29-title">BOOTSTRAP</div>
                  <div class="pbar-6310-template-preview-29-wrapper">
                    <div class="pbar-6310-template-preview-29-bar" style="width:75%;">
                      <div class="pbar-6310-template-preview-29-value">75%</div>
                    </div>
                  </div>
                  <div class="pbar-6310-template-preview-29-title">ASP.NET</div>
                  <div class="pbar-6310-template-preview-29-wrapper purple">
                    <div class="pbar-6310-template-preview-29-bar" style="width:87%;">
                      <div class="pbar-6310-template-preview-29-value">87%</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="pbar-6310-template-preview-list">
          Template 29
          <button type="button" class="pbar-6310-btn-success pbar_6310_choosen_style" id="template-29">Create Progress Bar</button>
        </div>
        <br class="pbar-6310-clear" />
      </div>



<!-- ******************* Template 30 start ************ -->

      <div class="pbar-6310-row pbar-6310_team-style-boxed">
        <div class="pbar-6310-padding-15">
          <div class="pbar-6310-template-preview-30-parallax">
            <div class="pbar-6310-template-preview-30-common-overlay">
              <div class="pbar-6310-col-1">
                <div class="pbar-6310-template-preview-30">
                  <div class="pbar-6310-template-preview-30-title">CSS3</div>
                  <div class="pbar-6310-template-preview-30-wrapper">
                    <div class="pbar-6310-template-preview-30-bar" style="width:85%;">
                      <div class="pbar-6310-template-preview-30-value">85%</div>
                    </div>
                  </div>
                </div>
                <div class="pbar-6310-template-preview-30">
                  <div class="pbar-6310-template-preview-30-title">HTML5</div>
                  <div class="pbar-6310-template-preview-30-wrapper">
                    <div class="pbar-6310-template-preview-30-bar" style="width:75%;">
                      <div class="pbar-6310-template-preview-30-value">75%</div>
                    </div>
                  </div>
                </div>
                <div class="pbar-6310-template-preview-30">
                  <div class="pbar-6310-template-preview-30-title">PHP</div>
                  <div class="pbar-6310-template-preview-30-wrapper">
                    <div class="pbar-6310-template-preview-30-bar" style="width:55%;">
                      <div class="pbar-6310-template-preview-30-value">55%</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="pbar-6310-template-preview-list">
          Template 30
          <button type="button" class="pbar-6310-btn-success pbar_6310_choosen_style" id="template-30">Create Progress Bar</button>

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
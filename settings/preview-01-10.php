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

    if ($_POST['style'] == 'template-01') {
      $css = "_wp_http_referer,id,background_type,background_transparent,template_background_color,box_background_image,image_opacity,youtube_video_url,video_opacity,video_opacity_color,animation_duration,pbar_progress_bar_border_size,pbar_progress_bar_border_color,pbar_6310_bar_radius,pbar_progress_bar_background_color,pbar_progress_bar_color,pbar_progress_bar_alternate_color,pbar_progress_bar_margin_top,pbar_progress_bar_margin_bottom,pbar_6310_bar_height,pbar_6310_title_font_color,pbar_6310_title_font_size,pbar_6310_title_line_height,pbar_6310_title_font_hover_color,pbar_6310_title_font_weight,pbar_6310_title_text_transform,pbar_6310_title_text_align,pbar_6310_title_font_family,pbar_6310_title_padding_top,pbar_6310_title_padding_bottom,custom_css,pbar_6310_value_font_family,pbar_6310_value_font_size,pbar_6310_value_font_weight,pbar_6310_value_font_color,pbar_6310_value_font_hover_color,update_style_change!!##!!/wordpress_1/wp-admin/admin.php?page=pbar-6310-template-01-10&styleid=62||##||62||##||2||##||transparent||##||rgba(224, 224, 224, 1)||##||||##||rgba(255, 255, 255, 0)||##||||##||.7||##||rgba(255, 255, 255, 0)||##||2||##||4||##||rgb(255, 162, 153)||##||20||##||rgba(255, 255, 255, 1)||##||rgb(217, 83, 79)||##||rgba(224, 155, 134, 0.53)||##||10||##||10||##||20||##||rgb(0, 0, 0)||##||20||##||25||##||rgb(0, 0, 0)||##||800||##||capitalize||##||left||##||Arimo||##||0||##||0||##||||##||Arimo||##||14||##||800||##||rgb(0, 0, 0)||##||rgb(0, 0, 0)||##||Save";
    } else if ($_POST['style'] == 'template-02') {
      $css = "_wp_http_referer,id,background_type,background_transparent,template_background_color,box_background_image,image_opacity,youtube_video_url,video_opacity,video_opacity_color,animation_duration,pbar_progress_bar_circle_border_size,pbar_progress_bar_circle_border_color,pbar_progress_bar_circle_inner_color,pbar_6310_bar_radius,pbar_progress_bar_background_color,pbar_progress_bar_color,pbar_progress_bar_alternate_color,pbar_progress_bar_margin_top,pbar_progress_bar_margin_bottom,pbar_6310_bar_height,pbar_6310_title_font_color,pbar_6310_title_font_size,pbar_6310_title_line_height,pbar_6310_title_font_hover_color,pbar_6310_title_font_weight,pbar_6310_title_text_transform,pbar_6310_title_text_align,pbar_6310_title_font_family,pbar_6310_title_padding_top,pbar_6310_title_padding_bottom,custom_css,update_style_change!!##!!/wordpress_1/wp-admin/admin.php?page=pbar-6310-template-01-10&styleid=63||##||63||##||2||##||transparent||##||rgba(219, 219, 219, 1)||##||||##||rgba(255, 255, 255, 0)||##||https://www.youtube.com/watch?v=dtCaSuWztzg||##||.7||##||rgba(255, 255, 255, 0)||##||2||##||10||##||rgb(26, 24, 25)||##||rgb(255, 255, 255)||##||25||##||rgba(255, 255, 255, 1)||##||rgb(61, 153, 249)||##||rgba(235, 9, 115, 0.83)||##||11||##||17||##||25||##||rgb(0, 0, 0)||##||20||##||22||##||rgb(0, 0, 0)||##||lighter||##||uppercase||##||center||##||Arimo||##||0||##||8||##||||##||Save";
    } else if ($_POST['style'] == 'template-03') {
      $css = "_wp_http_referer,id,background_type,background_transparent,template_background_color,box_background_image,image_opacity,youtube_video_url,video_opacity,video_opacity_color,animation_duration,pbar_progress_bar_background_color,pbar_progress_bar_color,pbar_progress_bar_alternate_color,pbar_progress_bar_margin_top,pbar_progress_bar_margin_bottom,pbar_6310_bar_height,pbar_6310_title_font_color,pbar_6310_title_font_size,pbar_6310_title_line_height,pbar_6310_title_font_hover_color,pbar_6310_title_font_weight,pbar_6310_title_text_transform,pbar_6310_title_text_align,pbar_6310_title_font_family,pbar_6310_title_padding_top,pbar_6310_title_padding_bottom,custom_css,pbar_6310_value_font_family,pbar_6310_value_font_size,pbar_6310_value_font_weight,pbar_6310_value_font_color,pbar_6310_value_font_hover_color,pbar_progress_tooltip_background_color,update_style_change!!##!!/wordpress_1/wp-admin/admin.php?page=pbar-6310-template-01-10&styleid=67||##||67||##||2||##||transparent||##||rgba(224, 224, 224, 1)||##||http://localhost/wordpress/wp-content/uploads/2021/06/163-1.jpg||##||rgba(255, 255, 255, 0)||##||||##||.7||##||rgba(255, 255, 255, 0)||##||.5||##||rgba(255, 255, 255, 1)||##||rgb(51, 122, 183)||##||rgba(33, 94, 158, 0.85)||##||0||##||10||##||30||##||rgb(0, 0, 0)||##||20||##||25||##||rgb(0, 0, 0)||##||100||##||uppercase||##||left||##||Amaranth||##||10||##||10||##||||##||Amaranth||##||15||##||100||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||rgb(0, 0, 0)||##||Save";
    } else if ($_POST['style'] == 'template-04') {
      $css = "_wp_http_referer,id,desktop_item_per_row,tablet_item_per_row,mobile_item_per_row,background_type,background_transparent,template_background_color,box_background_image,image_opacity,youtube_video_url,video_opacity,video_opacity_color,animation_duration,item_margin,pbar_6310_bar_radius,pbar_6310_circle_border_size,pbar_progress_bar_background_color,pbar_progress_bar_color,pbar_progress_bar_alternate_color,pbar_progress_bar_animation,pbar_progress_bar_margin_top,pbar_progress_bar_margin_bottom,pbar_6310_bar_height,pbar_6310_title_font_color,pbar_6310_title_font_size,pbar_6310_title_line_height,pbar_6310_title_font_hover_color,pbar_6310_title_font_weight,pbar_6310_title_text_transform,pbar_6310_title_text_align,pbar_6310_title_font_family,pbar_6310_title_padding_top,pbar_6310_title_padding_bottom,custom_css,pbar_6310_value_font_family,pbar_6310_value_font_size,pbar_6310_value_font_weight,pbar_6310_value_font_color,pbar_6310_value_font_hover_color,update_style_change!!##!!/wordpress/wp-admin/admin.php?page=pbar-6310-template-01-10&styleid=13||##||13||##||3||##||1||##||1||##||1||##||transparent||##||rgba(255, 255, 255, 0)||##||||##||rgba(255, 255, 255, 0)||##||||##||.7||##||rgba(255, 255, 255, 0)||##||.5||##||15||##||50||##||5||##||rgba(224, 224, 224, 0.82)||##||rgb(247, 129, 14)||##||rgba(80, 199, 199, 0.81)||##||1||##||10||##||10||##||30||##||rgb(0, 0, 0)||##||20||##||26||##||rgb(255, 107, 33)||##||bold||##||capitalize||##||left||##||Allerta||##||0||##||15||##||||##||Anonymous+Pro||##||14||##||bold||##||rgb(247, 129, 14)||##||rgb(247, 129, 14)||##||Save";
    } else if ($_POST['style'] == 'template-05') {
      $css = "_wp_http_referer,id,background_type,background_transparent,template_background_color,box_background_image,image_opacity,youtube_video_url,video_opacity,video_opacity_color,animation_duration,pbar_progress_bar_border_size,pbar_progress_bar_border_color,pbar_6310_bar_radius,pbar_progress_bar_background_color,pbar_progress_bar_color,pbar_progress_bar_alternate_color,pbar_progress_bar_margin_top,pbar_progress_bar_margin_bottom,pbar_6310_bar_height,pbar_6310_title_font_color,pbar_6310_title_font_size,pbar_6310_title_line_height,pbar_6310_title_font_hover_color,pbar_6310_title_font_weight,pbar_6310_title_text_transform,pbar_6310_title_text_align,pbar_6310_title_font_family,pbar_6310_title_padding_top,pbar_6310_title_padding_bottom,custom_css,update_style_change!!##!!/wordpress_1/wp-admin/admin.php?page=pbar-6310-template-01-10&styleid=69||##||69||##||2||##||transparent||##||rgba(224, 224, 224, 1)||##||||##||rgba(255, 255, 255, 0)||##||||##||.7||##||rgba(255, 255, 255, 0)||##||.5||##||2||##||rgb(0, 0, 0)||##||50||##||rgba(255, 255, 255, 1)||##||rgb(30, 140, 168)||##||||##||0||##||10||##||19||##||rgb(0, 0, 0)||##||16||##||26||##||rgb(0, 0, 0)||##||100||##||uppercase||##||left||##||Anton||##||12||##||5||##||||##||Save";
    } else if ($_POST['style'] == 'template-06') {
      $css = "_wp_http_referer,id,background_type,background_transparent,template_background_color,box_background_image,image_opacity,youtube_video_url,video_opacity,video_opacity_color,animation_duration,desktop_item_per_row,tablet_item_per_row,mobile_item_per_row,item_align,item_margin,pbar_progress_bar_border_size,pbar_inner_section_border_color,pbar_progress_bar_border_1_color,pbar_progress_bar_border_2_color,pbar_progress_bar_border_3_color,pbar_progress_bar_border_4_color,pbar_progress_bar_margin_top,pbar_progress_bar_margin_bottom,pbar_6310_title_font_color,pbar_6310_title_font_size,pbar_6310_title_line_height,pbar_6310_title_font_hover_color,pbar_6310_title_font_weight,pbar_6310_title_text_transform,pbar_6310_title_text_align,pbar_6310_title_font_family,pbar_6310_title_padding_top,pbar_6310_title_padding_bottom,custom_css,pbar_6310_value_font_family,pbar_6310_value_font_size,pbar_6310_value_font_weight,update_style_change!!##!!/wordpress_1/wp-admin/admin.php?page=pbar-6310-template-01-10&styleid=70||##||70||##||2||##||transparent||##||rgba(237, 237, 237, 1)||##||http://localhost/wordpress_1/wp-content/uploads/2021/09/patrick-tomasso-QMDap1TAu0g-unsplash-scaled.jpg||##||rgba(255, 255, 255, 0)||##||||##||.7||##||rgba(255, 255, 255, 0)||##||2||##||4||##||1||##||1||##||center||##||15||##||5||##||rgb(87, 87, 87)||##||rgb(1, 3, 61)||##||rgb(171, 83, 0)||##||rgb(135, 0, 117)||##||rgb(0, 53, 102)||##||50||##||10||##||rgb(0, 0, 0)||##||20||##||25||##||rgb(15, 7, 5)||##||bold||##||uppercase||##||center||##||Forum||##||10||##||10||##||||##||Arimo||##||20||##||bold||##||Save";
    } else if ($_POST['style'] == 'template-07') {
      $css = "_wp_http_referer,id,desktop_item_per_row,tablet_item_per_row,mobile_item_per_row,background_type,background_transparent,template_background_color,box_background_image,image_opacity,youtube_video_url,video_opacity,video_opacity_color,animation_duration,item_margin,pbar_progress_bar_border_size,pbar_6310_bar_radius,pbar_progress_bar_background_color,pbar_progress_bar_color,pbar_progress_bar_margin_top,pbar_progress_bar_margin_bottom,pbar_6310_bar_height,pbar_6310_title_font_color,pbar_6310_title_font_size,pbar_6310_title_line_height,pbar_6310_title_font_hover_color,pbar_6310_title_font_weight,pbar_6310_title_text_transform,pbar_6310_title_text_align,pbar_6310_title_font_family,pbar_6310_title_padding_top,pbar_6310_title_padding_bottom,custom_css,pbar_6310_value_font_family,pbar_6310_value_font_size,pbar_6310_value_font_weight,pbar_6310_value_font_color,pbar_6310_value_font_hover_color,pbar_progress_tooltip_background_color,update_style_change!!##!!/wordpress/wp-admin/admin.php?page=pbar-6310-template-01-10&styleid=12||##||12||##||3||##||1||##||1||##||2||##||transparent||##||rgba(156, 146, 145, 0.76)||##||||##||rgba(255, 255, 255, 0)||##||https://www.youtube.com/watch?v=VHksFlD7kQI||##||.7||##||rgba(255, 255, 255, 0)||##||.5||##||15||##||13||##||4||##||rgba(4, 38, 82, 0.73)||##||rgb(255, 255, 255)||##||10||##||10||##||36||##||rgb(0, 0, 0)||##||16||##||17||##||rgb(0, 0, 0)||##||100||##||uppercase||##||left||##||Amaranth||##||10||##||2||##||||##||Allerta||##||15||##||100||##||rgb(255, 255, 255)||##||rgb(255, 255, 255)||##||rgb(4, 38, 82)||##||Save";
    } else if ($_POST['style'] == 'template-08') {
      $css = "_wp_http_referer,id,desktop_item_per_row,tablet_item_per_row,mobile_item_per_row,background_type,background_transparent,template_background_color,box_background_image,image_opacity,youtube_video_url,video_opacity,video_opacity_color,animation_duration,item_margin,pbar_progress_bar_border_size,pbar_progress_bar_border_color,pbar_progress_bar_background_color,pbar_progress_bar_color,pbar_progress_bar_alternate_color,pbar_progress_bar_animation,pbar_progress_bar_margin_top,pbar_progress_bar_margin_bottom,pbar_6310_bar_height,pbar_6310_title_font_color,pbar_6310_title_font_size,pbar_6310_title_line_height,pbar_6310_title_font_hover_color,pbar_6310_title_font_weight,pbar_6310_title_text_transform,pbar_6310_title_text_align,pbar_6310_title_font_family,pbar_6310_title_padding_top,pbar_6310_title_padding_bottom,custom_css,pbar_6310_value_font_family,pbar_6310_value_font_size,pbar_6310_value_font_weight,pbar_6310_value_font_color,pbar_6310_value_font_hover_color,pbar_progress_tooltip_background_color,pbar_6310_percentage_background_border_size,pbar_6310_bar_percent_border_radius,update_style_change!!##!!/wordpress/wp-admin/admin.php?page=pbar-6310-template-01-10&styleid=17||##||17||##||3||##||1||##||1||##||2||##||transparent||##||rgba(92, 139, 148, 1)||##||http://localhost/free_wordpress/wp-content/uploads/2021/08/banner-84.jpg||##||rgba(255, 255, 255, 0)||##||https://www.youtube.com/watch?v=VHksFlD7kQI||##||.7||##||rgba(255, 255, 255, 0)||##||.5||##||10||##||9||##||rgb(207, 207, 207)||##||rgba(207, 207, 207, 0.83)||##||rgb(233, 233, 234)||##||rgba(80, 199, 199, 0.81)||##||1||##||0||##||15||##||17||##||rgb(255, 255, 255)||##||20||##||22||##||rgb(255, 255, 255)||##||100||##||uppercase||##||left||##||Amaranth||##||10||##||8||##||||##||Anonymous+Pro||##||15||##||800||##||rgb(0, 0, 0)||##||rgb(0, 0, 0)||##||rgb(255, 255, 255)||##||4||##||16||##||Save";
    } else if ($_POST['style'] == 'template-09') {
      $css = "_wp_http_referer,id,background_type,background_transparent,template_background_color,box_background_image,image_opacity,youtube_video_url,video_opacity,video_opacity_color,animation_duration,pbar_progress_bar_border_size,pbar_progress_bar_border_color,pbar_6310_bar_radius,pbar_progress_bar_background_color,pbar_progress_bar_color,pbar_progress_bar_alternate_color,pbar_progress_bar_margin_top,pbar_progress_bar_margin_bottom,pbar_6310_bar_height,pbar_6310_title_font_color,pbar_6310_title_font_size,pbar_6310_title_line_height,pbar_6310_title_font_hover_color,pbar_6310_title_font_weight,pbar_6310_title_text_transform,pbar_6310_title_text_align,pbar_6310_title_font_family,pbar_6310_title_padding_top,pbar_6310_title_padding_bottom,custom_css,pbar_6310_value_font_family,pbar_6310_value_font_size,pbar_6310_value_font_weight,pbar_6310_value_font_color,pbar_6310_value_font_hover_color,pbar_progress_bar_parcentage_icon_size,pbar_progress_tooltip_icon_color,update_style_change!!##!!/wordpress_1/wp-admin/admin.php?page=pbar-6310-template-01-10&styleid=73||##||73||##||2||##||transparent||##||rgba(217, 217, 217, 1)||##||||##||rgba(255, 255, 255, 0)||##||||##||.7||##||rgba(255, 255, 255, 0)||##||.5||##||0||##||rgb(235, 235, 235)||##||2||##||rgba(255, 255, 255, 0.83)||##||rgb(51, 122, 183)||##||rgba(100, 158, 219, 1)||##||10||##||10||##||20||##||rgb(0, 0, 0)||##||20||##||22||##||rgb(0, 0, 0)||##||300||##||uppercase||##||left||##||Amaranth||##||5||##||5||##||||##||Anonymous+Pro||##||15||##||bold||##||rgb(0, 0, 0)||##||rgb(0, 0, 0)||##||25||##||rgb(138, 138, 138)||##||Save";
    } else if ($_POST['style'] == 'template-10') {
      $css = "_wp_http_referer,id,background_type,background_transparent,template_background_color,box_background_image,image_opacity,youtube_video_url,video_opacity,video_opacity_color,animation_duration,pbar_progress_bar_border_size,pbar_progress_bar_border_color,pbar_6310_bar_radius,pbar_progress_bar_background_color,pbar_progress_bar_color,pbar_progress_bar_alternate_color,pbar_progress_bar_margin_top,pbar_progress_bar_margin_bottom,pbar_6310_bar_height,pbar_6310_title_font_color,pbar_6310_title_font_size,pbar_6310_title_line_height,pbar_6310_title_font_hover_color,pbar_6310_title_font_weight,pbar_6310_title_text_transform,pbar_6310_title_text_align,pbar_6310_title_font_family,pbar_6310_title_padding_top,pbar_6310_title_padding_bottom,custom_css,pbar_6310_value_font_family,pbar_6310_value_font_size,pbar_6310_value_font_weight,pbar_6310_value_font_color,pbar_6310_value_font_hover_color,update_style_change!!##!!/wordpress_1/wp-admin/admin.php?page=pbar-6310-template-01-10&styleid=74||##||74||##||2||##||transparent||##||rgba(209, 209, 209, 1)||##||http://localhost/wordpress/wp-content/uploads/2021/02/7a1e56fc58b13e8fc330b1ae97b40018.jpg||##||rgba(255, 255, 255, 0)||##||||##||.7||##||rgba(255, 255, 255, 0)||##||2||##||9||##||rgb(0, 0, 0)||##||10||##||rgba(255, 255, 255, 1)||##||rgb(51, 51, 51)||##||rgba(191, 255, 0, 0.84)||##||10||##||13||##||20||##||rgb(31, 31, 31)||##||21||##||26||##||rgb(158, 0, 0)||##||300||##||uppercase||##||left||##||Amaranth||##||5||##||7||##||||##||Anonymous+Pro||##||20||##||400||##||rgb(0, 0, 0)||##||rgb(0, 0, 0)||##||Save";
    }

    $items = $wpdb->get_results('SELECT * FROM ' . $item_table . ' ORDER BY name ASC', ARRAY_A);
    $itemsId = '';
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
      $url = admin_url("admin.php?page=pbar-6310-template-01-10&styleid=$redirect_id");
    }
    wp_register_script('cnvb-6310-redirect-script', '');
    wp_enqueue_script('cnvb-6310-redirect-script');
    wp_add_inline_script('cnvb-6310-redirect-script', "document.location.href = '" . $url . "';");
  }
} else {
?>
  <div class="pbar-6310">
    <h1>Select Template</h1>

    <!-- ******************************************
      template 1 start
    ****************************************** -->
    <div class="pbar-6310-row-section">
      <div class="pbar-6310-row pbar-6310_team-style-boxed">
        <div class="pbar-6310-padding-15">
          <div class="pbar-6310-template-preview-01-parallax">
            <div class="pbar-6310-template-preview-01-common-overlay">
              <iframe src='https://www.youtube.com/embed/?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&playlist=8xjf-K-CVBA&mute=1&allowfullscreen=1&allow=accelerometer&autoplay=1&rel=0' frameborder='0' allowfullscreen></iframe>
              <div class="pbar-6310-col-1">
                <div class="pbar-6310-template-preview-01">
                  <div class=pbar-6310-template-preview-01-title>HTML5</div>
                  <div class="pbar-6310-template-preview-01-outer">
                    <div class="pbar-6310-template-preview-01-wrapper">
                      <div class="pbar-6310-template-preview-01-bar pbar-6310-template-preview-01-bar-striped" style="width:50%;"></div>
                      <div class="pbar-6310-template-preview-01-value">
                        <div class="pbar-6310-template-preview-01-title-data">50%</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="pbar-6310-template-preview-01">
                  <div class=pbar-6310-template-preview-01-title>CSS3</div>
                  <div class="pbar-6310-template-preview-01-outer">
                    <div class="pbar-6310-template-preview-01-wrapper">
                      <div class="pbar-6310-template-preview-01-bar pbar-6310-template-preview-01-bar-striped" style="width:65%;"></div>
                      <div class="pbar-6310-template-preview-01-value">
                        <div class="pbar-6310-template-preview-01-title-data">65%</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="pbar-6310-template-preview-01">
                  <div class=pbar-6310-template-preview-01-title>PHP</div>
                  <div class="pbar-6310-template-preview-01-outer">
                    <div class="pbar-6310-template-preview-01-wrapper">
                      <div class="pbar-6310-template-preview-01-bar pbar-6310-template-preview-01-bar-striped" style="width:75%;"></div>
                      <div class="pbar-6310-template-preview-01-value">
                        <div class="pbar-6310-template-preview-01-title-data">75%</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="pbar-6310-template-preview-list">
          Template 1
          <button type="button" class="pbar-6310-btn-success pbar_6310_choosen_style" id="template-01">Create Progress Bar</button>
        </div>
        <br class="pbar-6310-clear" />
      </div>
      <!-- ******************************************
      template 1 end
    ****************************************** -->
      <!-- ******************************************
      template 2 start
    ****************************************** -->

      <div class="pbar-6310-row pbar-6310_team-style-boxed">
        <div class="pbar-6310-padding-15">
          <div class="pbar-6310-template-preview-02-parallax">
            <div class="pbar-6310-template-preview-02-common-overlay">
              <div class="pbar-6310-col-1">
                <div class="pbar-6310-template-preview-02">
                  <div class="pbar-6310-template-preview-02-title">JQUERY<div class="pbar-6310-template-preview-02-title-data">75%</div>
                  </div>
                  <div class="pbar-6310-template-preview-02-wrapper">
                    <div class="pbar-6310-template-preview-02-bar" style="width:75%; background:#3d99f9;"></div>
                  </div>
                </div>
                <div class="pbar-6310-template-preview-02">
                  <div class="pbar-6310-template-preview-02-title">HTML5<div class="pbar-6310-template-preview-02-title-data">65%</div>
                  </div>
                  <div class="pbar-6310-template-preview-02-wrapper">
                    <div class="pbar-6310-template-preview-02-bar" style="width:65%; background:#3d99f9;"></div>
                  </div>
                </div>
                <div class="pbar-6310-template-preview-02">
                  <div class="pbar-6310-template-preview-02-title">PHP<div class="pbar-6310-template-preview-02-title-data">55%</div>
                  </div>
                  <div class="pbar-6310-template-preview-02-wrapper">
                    <div class="pbar-6310-template-preview-02-bar" style="width:55%; background:#3d99f9;"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="pbar-6310-template-preview-list">
          Template 2
          <button type="button" class="pbar-6310-btn-success pbar_6310_choosen_style" id="template-02">Create Progress Bar</button>
        </div>
        <br class="pbar-6310-clear" />
      </div>

    </div>
    <!-- ******************************************
    template 2 end
  ****************************************** -->


    <!-- ******************************************
      template 3 start
    ****************************************** -->
    <div class="pbar-6310-row-section">
    <div class="pbar-6310-row pbar-6310_team-style-boxed">
        <div class="pbar-6310-padding-15">
          <div class="pbar-6310-template-preview-03-parallax">
            <div class="pbar-6310-template-preview-03-common-overlay">
              <div class="pbar-6310-col-1">
                <div class="pbar-6310-template-preview-03">
                  <div class="pbar-6310-template-preview-03-title">HTML</div>
                  <div class="pbar-6310-template-preview-03-wrapper">
                    <div class="pbar-6310-template-preview-03-bar" style="width:70%;">
                      <div class="pbar-6310-template-preview-03-value">70%</div>
                    </div>
                  </div>
                </div>
                <div class="pbar-6310-template-preview-03">
                  <div class="pbar-6310-template-preview-03-title">JQUERY</div>
                  <div class="pbar-6310-template-preview-03-wrapper">
                    <div class="pbar-6310-template-preview-03-bar" style="width:85%;">
                      <div class="pbar-6310-template-preview-03-value">85%</div>
                    </div>
                  </div>
                </div>
                <div class="pbar-6310-template-preview-03">
                  <div class="pbar-6310-template-preview-03-title">CSS</div>
                  <div class="pbar-6310-template-preview-03-wrapper">
                    <div class="pbar-6310-template-preview-03-bar" style="width:70%;">
                      <div class="pbar-6310-template-preview-03-value">70%</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="pbar-6310-template-preview-list">
          Template 3
          <button type="button" class="pbar-6310-btn-success pbar_6310_choosen_style" id="template-03">Create Progress Bar</button>

        </div>
        <br class="pbar-6310-clear" />
      </div>

      <!-- ******************************************
      template 3 end
    ****************************************** -->


      <!-- ******************************************
       template 4 start
     ****************************************** -->

      <div class="pbar-6310-row pbar-6310_team-style-boxed">
        <div class="pbar-6310-padding-15">
          <div class="pbar-6310-template-preview-04-parallax">
            <div class="pbar-6310-template-preview-04-common-overlay">
              <div class="pbar-6310-col-1">
                <div class="pbar-6310-template-preview-04">
                  <div class="pbar-6310-template-preview-04-title">HTML5</div>
                  <div class="pbar-6310-template-preview-04-wrapper">
                    <div class="pbar-6310-template-preview-04-bar" style="width:75%;">
                      <div class="pbar-6310-template-preview-04-icon "><i class="fas fa-globe-europe"></i></div>
                      <div class="pbar-6310-template-preview-04-value">
                        <div class="pbar-6310-template-preview-04-title-data">75%</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="pbar-6310-template-preview-04">
                  <div class="pbar-6310-template-preview-04-title">JQUERY</div>
                  <div class="pbar-6310-template-preview-04-wrapper">
                    <div class="pbar-6310-template-preview-04-bar" style="width:50%;">
                      <div class="pbar-6310-template-preview-04-icon "><i class="fas fa-globe-europe"></i></div>
                      <div class="pbar-6310-template-preview-04-value">
                        <div class="pbar-6310-template-preview-04-title-data">50%</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="pbar-6310-template-preview-04">
                  <div class="pbar-6310-template-preview-04-title">ASP.NET</div>
                  <div class="pbar-6310-template-preview-04-wrapper">
                    <div class="pbar-6310-template-preview-04-bar" style="width:75%;">
                      <div class="pbar-6310-template-preview-04-icon "><i class="fas fa-globe-europe"></i></div>
                      <div class="pbar-6310-template-preview-04-value">
                        <div class="pbar-6310-template-preview-04-title-data">75%</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="pbar-6310-template-preview-list">
            Template 4
            <button type="button" class="pbar-6310-btn-success pbar_6310_choosen_style" id="template-04">Create Progress Bar</button>
          </div>
          <br class="pbar-6310-clear" />
        </div>
      </div>

    </div>
    <!-- ******************************************
       template 4 end
     ****************************************** -->



    <!-- ******************************************
       template 5 start
     ****************************************** -->
    <div class="pbar-6310-row-section">
      <div class="pbar-6310-row pbar-6310_team-style-boxed">
        <div class="pbar-6310-padding-15">
          <div class="pbar-6310-template-preview-05-parallax">
            <div class="pbar-6310-template-preview-05-common-overlay">
              <div class="pbar-6310-col-1">
                <div class="pbar-6310-template-preview-05">
                  <div class="pbar-6310-template-preview-05-title">HTML5 - 55%</div>
                  <div class="pbar-6310-template-preview-05-wrapper">
                    <div class="pbar-6310-template-preview-05-bar" style="width:55%; background:#f80a0a;"></div>
                  </div>
                </div>
                <div class="pbar-6310-template-preview-05">
                  <div class="pbar-6310-template-preview-05-title">HTML5 - 75%</div>
                  <div class="pbar-6310-template-preview-05-wrapper">
                    <div class="pbar-6310-template-preview-05-bar" style="width:75%; background:#f80a0a;"></div>
                  </div>
                </div>
                <div class="pbar-6310-template-preview-05">
                  <div class="pbar-6310-template-preview-05-title">HTML5 - 55%</div>
                  <div class="pbar-6310-template-preview-05-wrapper">
                    <div class="pbar-6310-template-preview-05-bar" style="width:55%; background:#f80a0a;"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="pbar-6310-template-preview-list">
          Template 5
          <button type="button" class="pbar-6310-btn-success pbar_6310_choosen_style" id="template-05">Create Progress Bar</button>

        </div>
        <br class="pbar-6310-clear" />
      </div>
      <!-- ******************************************
       template 5 end
     ****************************************** -->


      <!-- ******************************************
        template 6 start
      ****************************************** -->      

      <div class="pbar-6310-row pbar-6310_team-style-boxed">
        <div class="pbar-6310-padding-15">
          <div class="pbar-6310-template-preview-06-parallax">
            <div class="pbar-6310-template-preview-06-common-overlay">
              <div class="pbar-6310-col-1">
                <div class="pbar-6310-template-preview-06">
                  <div class="pbar-6310-template-preview-06-left">
                      <div class="pbar-6310-template-preview-06-bar"></div>
                  </div>
                  <div class="pbar-6310-template-preview-06-right">
                      <div class="pbar-6310-template-preview-06-bar"></div>
                  </div>
                  <div class="pbar-6310-template-preview-06-value">90%</div>
                </div> 
                <div class="pbar-6310-template-preview-06-title">Html</div> 
            </div>
            <div class="pbar-6310-col-1">
                <div class="pbar-6310-template-preview-06">
                  <div class="pbar-6310-template-preview-06-left">
                      <div class="pbar-6310-template-preview-06-bar"></div>
                  </div>
                  <div class="pbar-6310-template-preview-06-right">
                      <div class="pbar-6310-template-preview-06-bar"></div>
                  </div>
                  <div class="pbar-6310-template-preview-06-value">90%</div>
                </div> 
                <div class="pbar-6310-template-preview-06-title">Css</div> 
            </div>
            <div class="pbar-6310-col-1">
                <div class="pbar-6310-template-preview-06">
                  <div class="pbar-6310-template-preview-06-left">
                      <div class="pbar-6310-template-preview-06-bar"></div>
                  </div>
                  <div class="pbar-6310-template-preview-06-right">
                      <div class="pbar-6310-template-preview-06-bar"></div>
                  </div>
                  <div class="pbar-6310-template-preview-06-value">90%</div>
                </div> 
                <div class="pbar-6310-template-preview-06-title">Java</div> 
            </div>
            </div>
          </div>
        </div>

        <div class="pbar-6310-template-preview-list">
          Template 6
          <button type="button" class="pbar-6310-btn-success pbar_6310_choosen_style" id="template-06">Create Progress Bar</button>
        </div>
        <br class="pbar-6310-clear" />
      </div>
    </div>
    <!-- ******************************************
        template 6 end
      ****************************************** -->

    <!-- ******************************************
      template 7 start
    ****************************************** -->
    <div class="pbar-6310-row-section">
      <div class="pbar-6310-row pbar-6310_team-style-boxed">
        <div class="pbar-6310-padding-15">
          <div class="pbar-6310-template-preview-07-parallax">
            <div class="pbar-6310-template-preview-07-common-overlay">
                <div class="pbar-6310-col-1">
                    <div class="pbar-6310-template-preview-07">
                        <h3 class="pbar-6310-template-preview-07-title">HTML5</h3>
                        <div class="pbar-6310-template-preview-07-wrapper">
                            <div class="pbar-6310-template-preview-07-bar">
                                <div class="pbar-6310-template-preview-07-value">85%</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pbar-6310-col-1">
                    <div class="pbar-6310-template-preview-07">
                        <h3 class="pbar-6310-template-preview-07-title">Css</h3>
                        <div class="pbar-6310-template-preview-07-wrapper">
                            <div class="pbar-6310-template-preview-07-bar" style="width:55%;">
                                <div class="pbar-6310-template-preview-07-value">55%</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pbar-6310-col-1">
                    <div class="pbar-6310-template-preview-07">
                        <h3 class="pbar-6310-template-preview-07-title">java</h3>
                        <div class="pbar-6310-template-preview-07-wrapper">
                            <div class="pbar-6310-template-preview-07-bar" style="width:15%;">
                                <div class="pbar-6310-template-preview-07-value">15%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>

        </div>
        <div class="pbar-6310-template-preview-list">
          Template 07
          <button type="button" class="pbar-6310-btn-success pbar_6310_choosen_style" id="template-07">Create Progress Bar</button>

        </div>
        <br class="pbar-6310-clear" />
      </div>
      <!-- ******************************************
      template 7 end
    ****************************************** -->


      <!-- ******************************************
      template 8 start
    ****************************************** -->

      <div class="pbar-6310-row pbar-6310_team-style-boxed">
        <div class="pbar-6310-padding-15">
          <div class="pbar-6310-template-preview-08-parallax">
            <div class="pbar-6310-template-preview-08-common-overlay">
              <!-- <iframe src='https://www.youtube.com/embed/?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&playlist=i3IuGdepp4o&mute=1&allowfullscreen=1&allow=accelerometer&autoplay=1&rel=0' frameborder='0' allowfullscreen></iframe> -->
              <div class="pbar-6310-col-1">
                <div class="pbar-6310-template-preview-08">
                  <div class="pbar-6310-template-preview-08-title">CSS3</div>
                  <div class="pbar-6310-template-preview-08-wrapper">
                    <div class="pbar-6310-template-preview-08-bar" style="width:75%;">
                      <div class="pbar-6310-template-preview-08-value">75%</div>
                    </div>
                  </div>
                </div>
                <div class="pbar-6310-template-preview-08">
                  <div class="pbar-6310-template-preview-08-title">BOOTSTARP</div>
                  <div class="pbar-6310-template-preview-08-wrapper">
                    <div class="pbar-6310-template-preview-08-bar" style="width:65%;">
                      <div class="pbar-6310-template-preview-08-value">65%</div>
                    </div>
                  </div>
                </div>
                <div class="pbar-6310-template-preview-08">
                  <div class="pbar-6310-template-preview-08-title">HTML3</div>
                  <div class="pbar-6310-template-preview-08-wrapper">
                    <div class="pbar-6310-template-preview-08-bar" style="width:55%;">
                      <div class="pbar-6310-template-preview-08-value">55%</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="pbar-6310-template-preview-list">
          Template 08
          <button type="button" class="pbar-6310-btn-success pbar_6310_choosen_style" id="template-08">Create Progress Bar</button>

        </div>
        <br class="pbar-6310-clear" />
      </div>
    </div>
    <!-- ******************************************
      template 8 end
    ****************************************** -->

    <!-- ******************************************
      template 09 start
    ****************************************** -->
    <div class="pbar-6310-row-section">
      <div class="pbar-6310-row pbar-6310_team-style-boxed">
        <div class="pbar-6310-padding-15">
          <div class="pbar-6310-template-preview-09-parallax">
            <div class="pbar-6310-template-preview-09-common-overlay">
              <div class="pbar-6310-col-1">
                <div class="pbar-6310-template-preview-09">
                  <div class="pbar-6310-template-preview-09-title">PHP</div>
                  <div class="pbar-6310-template-preview-09-value">85%</div>
                  <div class="pbar-6310-template-preview-09-wrapper">
                    <div class="pbar-6310-template-preview-09-bar" style="width:85%;">
                      <i class="fas fa-map-marker-alt"></i>
                    </div>
                  </div>
                </div>
                <div class="pbar-6310-template-preview-09">
                  <div class="pbar-6310-template-preview-09-title">JQUERY</div>
                  <div class="pbar-6310-template-preview-09-value">75%</div>
                  <div class="pbar-6310-template-preview-09-wrapper">
                    <div class="pbar-6310-template-preview-09-bar" style="width:75%;">
                      <i class="fas fa-map-marker-alt"></i>
                    </div>
                  </div>
                </div>
                <div class="pbar-6310-template-preview-09">
                  <div class="pbar-6310-template-preview-09-title">ASP.NET</div>
                  <div class="pbar-6310-template-preview-09-value">65%</div>
                  <div class="pbar-6310-template-preview-09-wrapper">
                    <div class="pbar-6310-template-preview-09-bar" style="width:65%;">
                      <i class="fas fa-map-marker-alt"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="pbar-6310-template-preview-list">
          Template 09
          <button type="button" class="pbar-6310-btn-success pbar_6310_choosen_style" id="template-09">Create Progress Bar</button>

        </div>
        <br class="pbar-6310-clear" />
      </div>
      <!-- ******************************************
      template 09 end
    ****************************************** -->


      <!-- ******************************************
      template 10 start
    ****************************************** -->

      <div class="pbar-6310-row pbar-6310_team-style-boxed">
        <div class="pbar-6310-padding-15">
          <div class="pbar-6310-template-preview-10-parallax">
            <div class="pbar-6310-template-preview-10-common-overlay">
              <!-- <iframe src='https://www.youtube.com/embed/?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&playlist=&mute=1&allowfullscreen=1&allow=accelerometer&autoplay=1&rel=0' frameborder='0' allowfullscreen></iframe> -->
              <div class="pbar-6310-col-1">
                <div class="pbar-6310-template-preview-10">
                  <div class="pbar-6310-template-preview-10-title">HTML5</div>
                  <div class="pbar-6310-template-preview-10-wrapper">
                    <div class="pbar-6310-template-preview-10-bar" style="width:50%;">
                      <div class="pbar-6310-template-preview-10-value">50%</div>
                    </div>
                  </div>
                </div>
                <div class="pbar-6310-template-preview-10">
                  <div class="pbar-6310-template-preview-10-title">BOOTSTARP</div>
                  <div class="pbar-6310-template-preview-10-wrapper">
                    <div class="pbar-6310-template-preview-10-bar" style="width:65%;">
                      <div class="pbar-6310-template-preview-10-value">65%</div>
                    </div>
                  </div>
                </div>
                <div class="pbar-6310-template-preview-10">
                  <div class="pbar-6310-template-preview-10-title">PHP</div>
                  <div class="pbar-6310-template-preview-10-wrapper">
                    <div class="pbar-6310-template-preview-10-bar" style="width:75%;">
                      <div class="pbar-6310-template-preview-10-value">75%</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="pbar-6310-template-preview-list">
          Template 10
          <button type="button" class="pbar-6310-btn-success pbar_6310_choosen_style" id="template-10">Create Progress Bar</button>

        </div>
        <br class="pbar-6310-clear" />
      </div>
    </div>
    <!-- ******************************************
      template 10 end
    ****************************************** -->

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

  <?php } ?>
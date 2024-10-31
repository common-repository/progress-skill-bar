  <div id="tab-2">
    <div class="row">
      <h3 class="pbar-6310-tab-menu-settings">Title Settings</h3>
      <div class="pbar-6310-col-50">
        <table class="table table-responsive pbar_6310_admin_table">
          <tr>
            <td><b>Font Size</b> <span class="pbar-6310-pro">(Pro) <div class="pbar-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
            <td>
              <input type="number" min="0" name="pbar_6310_title_font_size" value="<?php echo esc_attr($cssData['pbar_6310_title_font_size']) ?>" class="pbar-6310-form-input" step="1" id="pbar_6310_title_font_size" />
            </td>
          </tr>
          <tr>
            <td><b>Line Height</b> <span class="pbar-6310-pro">(Pro) <div class="pbar-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
            <td>
              <input name="pbar_6310_title_line_height" id="pbar_6310_title_line_height" type="number" value="<?php echo esc_attr($cssData['pbar_6310_title_line_height']) ?>" class="pbar-6310-form-input" />
            </td>
          </tr>
          <tr>
            <td><b>Font Color</b> <span class="pbar-6310-pro">(Pro) <div class="pbar-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
            <td>
              <input type="text" name="pbar_6310_title_font_color" id="pbar_6310_title_font_color" class="pbar-6310-form-input pbar_6310_color_picker" data-format="rgb" value="<?php echo esc_attr($cssData['pbar_6310_title_font_color']) ?>">
            </td>
          </tr>
          <tr>
            <td><b>Font Hover Color</b> <span class="pbar-6310-pro">(Pro) <div class="pbar-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
            <td>
              <input type="text" name="pbar_6310_title_font_hover_color" id="pbar_6310_title_font_hover_color" class="pbar-6310-form-input pbar_6310_color_picker" data-format="rgb" value="<?php echo esc_attr($cssData['pbar_6310_title_font_hover_color']) ?>">
            </td>
          </tr>
          <tr>
            <td><b>Font Weight</b> <span class="pbar-6310-pro">(Pro) <div class="pbar-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
            <td>
              <select name="pbar_6310_title_font_weight" class="pbar-6310-form-input" id="pbar_6310_title_font_weight">
                <option value="100" <?php if ($cssData['pbar_6310_title_font_weight'] == '100') echo " selected=''" ?>>100</option>
                <option value="200" <?php if ($cssData['pbar_6310_title_font_weight'] == '200') echo " selected=''" ?>>200</option>
                <option value="300" <?php if ($cssData['pbar_6310_title_font_weight'] == '300') echo " selected=''" ?>>300</option>
                <option value="400" <?php if ($cssData['pbar_6310_title_font_weight'] == '400') echo " selected=''" ?>>400</option>
                <option value="500" <?php if ($cssData['pbar_6310_title_font_weight'] == '500') echo " selected=''" ?>>500</option>
                <option value="600" <?php if ($cssData['pbar_6310_title_font_weight'] == '600') echo " selected=''" ?>>600</option>
                <option value="700" <?php if ($cssData['pbar_6310_title_font_weight'] == '700') echo " selected=''" ?>>700</option>
                <option value="800" <?php if ($cssData['pbar_6310_title_font_weight'] == '800') echo " selected=''" ?>>800</option>
                <option value="900" <?php if ($cssData['pbar_6310_title_font_weight'] == '900') echo " selected=''" ?>>900</option>
                <option value="normal" <?php if ($cssData['pbar_6310_title_font_weight'] == 'normal') echo " selected=''" ?>>Normal</option>
                <option value="bold" <?php if ($cssData['pbar_6310_title_font_weight'] == 'bold') echo " selected=''" ?>>Bold</option>
                <option value="lighter" <?php if ($cssData['pbar_6310_title_font_weight'] == 'lighter') echo " selected=''" ?>>Lighter</option>
                <option value="initial" <?php if ($cssData['pbar_6310_title_font_weight'] == 'initial') echo " selected=''" ?>>Initial</option>
              </select>
            </td>
          </tr>
        </table>
      </div>
      <div class="pbar-6310-col-50">
        <table class="table table-responsive pbar_6310_admin_table">

          <tr>
            <td><b>Text Transform</b> <span class="pbar-6310-pro">(Pro) <div class="pbar-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
            <td>
              <select name="pbar_6310_title_text_transform" class="pbar-6310-form-input" id="pbar_6310_title_text_transform">
                <option value="capitalize" <?php if ($cssData['pbar_6310_title_text_transform'] == 'capitalize') echo " selected=''" ?>>Capitalize</option>
                <option value="uppercase" <?php if ($cssData['pbar_6310_title_text_transform'] == 'uppercase') echo " selected=''" ?>>Uppercase</option>
                <option value="lowercase" <?php if ($cssData['pbar_6310_title_text_transform'] == 'lowercase') echo " selected=''" ?>>Lowercase</option>
                <option value="none" <?php if ($cssData['pbar_6310_title_text_transform'] == 'none') echo " selected=''" ?>>As Input</option>

              </select>
            </td>
          </tr>
          <tr class="title_text_align_hide">
            <td><b>Text Align</b> <span class="pbar-6310-pro">(Pro) <div class="pbar-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
            <td>
              <select name="pbar_6310_title_text_align" class="pbar-6310-form-input" id="pbar_6310_title_text_align">
                <option value="center" <?php if ($cssData['pbar_6310_title_text_align'] == 'center') echo " selected=''" ?>>Center</option>
                <option value="left" <?php if ($cssData['pbar_6310_title_text_align'] == 'left') echo " selected=''" ?>>Left</option>
                <option value="right" <?php if ($cssData['pbar_6310_title_text_align'] == 'right') echo " selected=''" ?>>Right</option>
              </select>
            </td>
          </tr>
          <tr>
            <td><b>Font Family</b> <span class="pbar-6310-pro">(Pro) <div class="pbar-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
            <td>
              <input name="pbar_6310_title_font_family" id="pbar_6310_title_font_family" type="text" value="<?php echo esc_attr($cssData['pbar_6310_title_font_family']) ?>" />
            </td>
          </tr>
          <tr>
            <td><b>Padding Top</b> <span class="pbar-6310-pro">(Pro) <div class="pbar-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
            <td>
              <input name="pbar_6310_title_padding_top" id="pbar_6310_title_padding_top" type="number" value="<?php echo esc_attr($cssData['pbar_6310_title_padding_top']) ?>" class="pbar-6310-form-input" />
            </td>
          </tr>
          <tr>
            <td><b>Padding Bottom</b> <span class="pbar-6310-pro">(Pro) <div class="pbar-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
            <td>
              <input name="pbar_6310_title_padding_bottom" id="pbar_6310_title_padding_bottom" type="number" value="<?php echo esc_attr($cssData['pbar_6310_title_padding_bottom']) ?>" class="pbar-6310-form-input" />
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
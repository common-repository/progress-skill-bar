<div class="pbar_6310_tabs_panel_settings">
  <form method="post">
    <?php wp_nonce_field("pbar_6310_nonce_field_form") ?>
    <input type="hidden" name="id" value="<?php echo esc_attr($styleId) ?>" />
    <div class="pbar_6310_padding_15_px">
      <?php include pbar_6310_plugin_url . 'settings/helper/tab-menu.php'; ?>
    </div>
    <div class="pbar-6310-tab-content">
      <div id="tab-1">
        <div class="row pbar_6310_padding_15_px">
          <h3 class="pbar-6310-tab-menu-settings">General Settings</h3>
          <div class="pbar-6310-col-50">
            <table class="table table-responsive pbar_6310_admin_table">
              <?php pbar_6310_general_form_left($bgType, $cssData) ?>
              <tr>
                <td width="55%">
                <b>Desktop Item Per Row</b> <span class="pbar-6310-pro">(Pro) <div class="pbar-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
                <div class="pbar-6310-no-live-preview">Live Preview Not Available</div>
                </td>
                <td>
                <select name="desktop_item_per_row" class="pbar-6310-form-input pbar-6310-no-preview">
                    <?php
                      for($i = 1; $i <= 4; $i++){
                      $selected = isset($cssData['desktop_item_per_row']) && $i == $cssData['desktop_item_per_row'] ? 'selected' : '';
                      $items = $i > 1 ? 'Items' : 'Item';
                      echo "<option value='".esc_attr($i)."' ".esc_attr($selected).">".esc_attr($i)." ".esc_attr($items)." per Row</option>";
                      }
                    ?>
                </select>
                </td>
              </tr>
              <tr>
                <td width="55%">
                <b>Tablet Item Per Row</b> <span class="pbar-6310-pro">(Pro) <div class="pbar-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
                <div class="pbar-6310-no-live-preview">Live Preview Not Available</div>
                </td>
                <td>
                <select name="tablet_item_per_row" class="pbar-6310-form-input pbar-6310-no-preview">
                    <?php
                      for($i = 1; $i <= 3; $i++){
                      $selected = isset($cssData['tablet_item_per_row']) && $i == $cssData['tablet_item_per_row'] ? 'selected' : '';
                      $items = $i > 1 ? 'Items' : 'Item';
                      echo "<option value='".esc_attr($i)."' ".esc_attr($selected).">".esc_attr($i)." ".esc_attr($items)." per Row</option>";
                      }
                    ?>
                </select>
                </td>
              </tr>
              <tr>
                <td width="55%">
                <b>Mobile Item Per Row</b> <span class="pbar-6310-pro">(Pro) <div class="pbar-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
                <div class="pbar-6310-no-live-preview">Live Preview Not Available</div>
                </td>
                <td>
                <select name="mobile_item_per_row" class="pbar-6310-form-input pbar-6310-no-preview">
                    <?php
                      for($i = 1; $i <= 3; $i++){
                      $selected = isset($cssData['mobile_item_per_row']) && $i == $cssData['mobile_item_per_row'] ? 'selected' : '';
                      $items = $i > 1 ? 'Items' : 'Item';
                      echo "<option value='".esc_attr($i)."' ".esc_attr($selected).">".esc_attr($i)." ".esc_attr($items)." per Row</option>";
                      }
                    ?>
                </select>
                </td>
              </tr>
              <tr height="45">
              <td width="55%">
                  <b>Align Item</b> <span class="pbar-6310-pro">(Pro) <div class="pbar-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
                  <div class="pbar-6310-no-live-preview">Live Preview Not Available</div>
              </td>
              <td>
                <?php
                  $list = [
                    'center' => 'Center',
                    'flex-start' => 'Left',
                    'flex-end' => 'Right'
                  ];
                  echo "<select name='item_align' class='pbar-6310-form-input'>";
                  foreach($list as $key => $value){      
                    if(isset($cssData['item_align']) && $key == $cssData['item_align']){
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
              <tr height="45">
                <td>
                  <b>Items Margin</b> <span class="pbar-6310-pro">(Pro) <div class="pbar-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
                  <div class="pbar-6310-no-live-preview">Live Preview Not Available</div>
                </td>
                <td>
                  <input type="number" name="item_margin" id="pbar_6310_item_margin" class="pbar-6310-form-input" value="<?php echo (isset($cssData['item_margin']) && $cssData['item_margin']) ? esc_attr($cssData['item_margin']) : "15" ?>">
                </td>
              </tr>
            </table>
          </div>
          <div class="pbar-6310-col-50">
            <table class="table table-responsive pbar_6310_admin_table">
              <tr class="skill_act_field">
                <td>
                  <b>Circle Border Size</b> <span class="pbar-6310-pro">(Pro) <div class="pbar-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
                  <div class="pbar-6310-no-live-preview">Live Preview Not Available</div>
                </td>
                <td>
                  <input type="number" min="0" name="pbar_progress_bar_border_size" value="<?php echo esc_attr($cssData['pbar_progress_bar_border_size']) ?>" class="pbar-6310-form-input" step="1" id="pbar_progress_bar_border_size" />
                </td>
              </tr>
              <tr class="skill_act_field">
                <td>
                  <b>Inner Circle Border Color</b> <span class="pbar-6310-pro">(Pro) <div class="pbar-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
                  <div class="pbar-6310-no-live-preview">Live Preview Not Available</div>
                </td>
                <td>
                  <input type="text" name="pbar_inner_section_border_color" id="pbar_inner_section_border_color" class="pbar-form-input pbar_6310_color_picker" data-format="rgb" value="<?php echo esc_attr($cssData['pbar_inner_section_border_color']) ?>">
               </td>
            </tr> 
              <tr class="skill_act_field">
                <td>
                  <b>Outer Circle Border 1st Color</b> <span class="pbar-6310-pro">(Pro) <div class="pbar-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
                  <div class="pbar-6310-no-live-preview">Live Preview Not Available</div>
                </td>
                <td>
                  <input type="text" name="pbar_progress_bar_border_1_color" id="pbar_progress_bar_border_1_color" class="pbar-form-input pbar_6310_color_picker" data-format="rgb" value="<?php echo esc_attr($cssData['pbar_progress_bar_border_1_color']) ?>">
                </td>
              </tr>
              <tr class="skill_act_field">
                <td>
                  <b>Outer Circle Border 2nd Color</b> <span class="pbar-6310-pro">(Pro) <div class="pbar-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
                  <div class="pbar-6310-no-live-preview">Live Preview Not Available</div>
                </td>
                <td>
                  <input type="text" name="pbar_progress_bar_border_2_color" id="pbar_progress_bar_border_2_color" class="pbar-form-input pbar_6310_color_picker" data-format="rgb" value="<?php echo esc_attr($cssData['pbar_progress_bar_border_2_color']) ?>">
                </td>
              </tr>
              <tr class="skill_act_field">
                <td>
                  <b>Outer Circle Border 3rd Color</b> <span class="pbar-6310-pro">(Pro) <div class="pbar-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
                  <div class="pbar-6310-no-live-preview">Live Preview Not Available</div>
                </td>
                <td>
                  <input type="text" name="pbar_progress_bar_border_3_color" id="pbar_progress_bar_border_3_color" class="pbar-form-input pbar_6310_color_picker" data-format="rgb" value="<?php echo esc_attr($cssData['pbar_progress_bar_border_3_color']) ?>">
                </td>
              </tr>
              <tr class="skill_act_field">
                <td>
                  <b>Outer Circle Border 4th Color</b> <span class="pbar-6310-pro">(Pro) <div class="pbar-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
                  <div class="pbar-6310-no-live-preview">Live Preview Not Available</div>
                </td>
                <td>
                  <input type="text" name="pbar_progress_bar_border_4_color" id="pbar_progress_bar_border_4_color" class="pbar-form-input pbar_6310_color_picker" data-format="rgb" value="<?php echo esc_attr($cssData['pbar_progress_bar_border_4_color']) ?>">
                </td>
              </tr> 
            <tr  class="pbar_bar_act_field">
              <td><b>Margin Top</b> <span class="pbar-6310-pro">(Pro) <div class="pbar-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
              <td>
                  <input name="pbar_progress_bar_margin_top" id="pbar_progress_bar_margin_top" type="number" value="<?php echo esc_attr($cssData['pbar_progress_bar_margin_top']) ?>" class="pbar-6310-form-input" />
              </td>
            </tr>
            <tr  class="pbar_bar_act_field">
              <td><b>Margin Bottom</b> <span class="pbar-6310-pro">(Pro) <div class="pbar-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
              <td>
                  <input name="pbar_progress_bar_margin_bottom" id="pbar_progress_bar_margin_bottom" type="number" value="<?php echo esc_attr($cssData['pbar_progress_bar_margin_bottom']) ?>" class="pbar-6310-form-input" />
              </td>
            </tr> 
            </table>
          </div>
        </div>
      </div>
      <div id="tab-2">
        <div class="row">
          <h3 class="pbar-6310-tab-menu-settings">Title Settings</h3>
          <div class="pbar-6310-col-50">
            <table class="table table-responsive pbar_6310_admin_table">
              <?php include pbar_6310_plugin_url . 'settings/form/_title-form.php'; ?>
            </table>
          </div>
        </div>
      </div>
      <?php include pbar_6310_plugin_url . 'settings/form/_custom-css-form.php'; ?>  
      <div id="tab-4">
        <div class="row pbar_6310_padding_15_px">
          <h3 class="pbar-6310-tab-menu-settings">General Settings</h3>
          <div class="pbar-6310-col-50">
            <table class="table table-responsive pbar_6310_admin_table">            
            <tr  class="value_act_field">
          <td><b>Font Family</b> <span class="pbar-6310-pro">(Pro) <div class="pbar-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
          <td>
            <input name="pbar_6310_value_font_family" id="pbar_6310_value_font_family" type="text" value="<?php echo esc_attr($cssData['pbar_6310_value_font_family']) ?>" />
          </td>
        </tr> 
        <tr  class="value_act_field">
          <td><b>Font Size</b> <span class="pbar-6310-pro">(Pro) <div class="pbar-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
          <td>
            <input type="number" min="0" name="pbar_6310_value_font_size" value="<?php echo esc_attr($cssData['pbar_6310_value_font_size']) ?>" class="pbar-6310-form-input" step="1" id="pbar_6310_value_font_size" />
          </td>
        </tr>
        <tr  class="value_act_field">
          <td><b>Font Weight</b> <span class="pbar-6310-pro">(Pro) <div class="pbar-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
          <td>
            <select name="pbar_6310_value_font_weight" class="pbar-6310-form-input" id="pbar_6310_value_font_weight">
              <option value="100" <?php if ($cssData['pbar_6310_value_font_weight'] == '100') echo " selected=''" ?>>100
              </option>
              <option value="200" <?php if ($cssData['pbar_6310_value_font_weight'] == '200') echo " selected=''" ?>>200
              </option>
              <option value="300" <?php if ($cssData['pbar_6310_value_font_weight'] == '300') echo " selected=''" ?>>300
              </option>
              <option value="400" <?php if ($cssData['pbar_6310_value_font_weight'] == '400') echo " selected=''" ?>>400
              </option>
              <option value="500" <?php if ($cssData['pbar_6310_value_font_weight'] == '500') echo " selected=''" ?>>500
              </option>
              <option value="600" <?php if ($cssData['pbar_6310_value_font_weight'] == '600') echo " selected=''" ?>>600
              </option>
              <option value="700" <?php if ($cssData['pbar_6310_value_font_weight'] == '700') echo " selected=''" ?>>700
              </option>
              <option value="800" <?php if ($cssData['pbar_6310_value_font_weight'] == '800') echo " selected=''" ?>>800
              </option>
              <option value="900" <?php if ($cssData['pbar_6310_value_font_weight'] == '900') echo " selected=''" ?>>900
              </option>
              <option value="normal" <?php if ($cssData['pbar_6310_value_font_weight'] == 'normal') echo " selected=''" ?>>
                Normal</option>
              <option value="bold" <?php if ($cssData['pbar_6310_value_font_weight'] == 'bold') echo " selected=''" ?>>Bold
              </option>
              <option value="lighter" <?php if ($cssData['pbar_6310_value_font_weight'] == 'lighter') echo " selected=''" ?>>
                Lighter</option>
              <option value="initial" <?php if ($cssData['pbar_6310_value_font_weight'] == 'initial') echo " selected=''" ?>>
                Initial</option>
            </select>
          </td>
        </tr> 
       
      </table>
    </div>
      <div class="pbar-6310-col-50">
        <table class="table table-responsive pbar_6310_admin_table">              
      
        </table>
      </div>
    </div>
  </div>

      <br class="pbar-6310-clear" />
      <br class="pbar-6310-clear" />
      <hr />
      <input type="submit" name="update_style_change" value="Save" class="pbar-6310-btn-primary pbar-6310-pull-right pbar-6310-form-save-button""  />
      <br class="pbar-6310-clear" />
    </div>
  </form>
</div>

<?php
$jsCode = "jQuery(document).ready(function(){jQuery('.pbar_6310_value_font_color_id, .pbar_6310_value_font_hover_color_id').hide();});";
wp_register_script( "sbs-6310-template-form-fields-hide", "" );
wp_enqueue_script( "sbs-6310-template-form-fields-hide" );
wp_add_inline_script( "sbs-6310-template-form-fields-hide", $jsCode );
?>
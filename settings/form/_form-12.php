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
        
            </table>
          </div>
          <div class="pbar-6310-col-50">
            <table class="table table-responsive pbar_6310_admin_table">
            <tr  class="skill_act_field">
               <td>
                  <b>Progress Bar Border Size</b> <span class="pbar-6310-pro">(Pro) <div class="pbar-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
               </td>
               <td>
                  <input type="number" min="0" name="pbar_progress_bar_border_size" value="<?php echo esc_attr($cssData['pbar_progress_bar_border_size']) ?>" class="pbar-6310-form-input" step="1" id="pbar_progress_bar_border_size" />
               </td>
            </tr>      
            <?php include pbar_6310_plugin_url . 'settings/form/_progress_bar_color_form.php'; ?>         
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
            <tr class="value_act_field pbar_6310_value_font_color_id">
              <td><b>Font Color</b> <span class="pbar-6310-pro">(Pro) <div class="pbar-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
              <td>
                <input type="text" name="pbar_6310_value_font_color" id="pbar_6310_value_font_color" class="pbar-6310-form-input pbar_6310_color_picker" data-format="rgb" value="<?php echo esc_attr($cssData['pbar_6310_value_font_color']) ?>">
              </td>
            </tr>
            <tr  class="value_act_field pbar_6310_value_font_hover_color_id">
              <td><b>Font Hover Color</b> <span class="pbar-6310-pro">(Pro) <div class="pbar-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
              <td>
                <input type="text" name="pbar_6310_value_font_hover_color" id="pbar_6310_value_font_hover_color" class="pbar-6310-form-input pbar_6310_color_picker" data-format="rgb" value="<?php echo esc_attr($cssData['pbar_6310_value_font_hover_color']) ?>">
              </td>
            </tr>           
            </table>
          </div>
        </div>
      </div>
      <div id="tab-5">
        <div class="row pbar_6310_padding_15_px">
          <h3 class="pbar-6310-tab-menu-settings">Color Settings</h3>
          <div class="pbar-6310-col-50">
            <table class="table table-responsive pbar_6310_admin_table">             
              <tr  class="">
                  <td><b>Progress Bar 1st Background Color</b> <span class="pbar-6310-pro">(Pro) <div class="pbar-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
                  <td>
                      <input type="text" name="pbar_progress_bar_background_first_color" id="pbar_progress_bar_background_first_color" class="pbar-form-input pbar_6310_color_picker" data-format="rgb" data-opacity=".8" value="<?php echo esc_attr($cssData['pbar_progress_bar_background_first_color']) ?>">
                  </td>
              </tr> 
              <tr  class="">
                  <td><b>Progress Bar 2nd Background Color</b> <span class="pbar-6310-pro">(Pro) <div class="pbar-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
                  <td>
                      <input type="text" name="pbar_progress_bar_background_second_color" id="pbar_progress_bar_background_second_color" class="pbar-form-input pbar_6310_color_picker" data-format="rgb" data-opacity=".8" value="<?php echo esc_attr($cssData['pbar_progress_bar_background_second_color']) ?>">
                  </td>
              </tr> 
              <tr  class="">
                  <td><b>Progress Bar 3rd Background Color</b> <span class="pbar-6310-pro">(Pro) <div class="pbar-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
                  <td>
                      <input type="text" name="pbar_progress_bar_background_third_color" id="pbar_progress_bar_background_third_color" class="pbar-form-input pbar_6310_color_picker" data-format="rgb" data-opacity=".8" value="<?php echo esc_attr($cssData['pbar_progress_bar_background_third_color']) ?>">
                  </td>
              </tr> 
            </table>
          </div>
          <div class="pbar-6310-col-50">
            <table class="table table-responsive pbar_6310_admin_table">
            <tr  class="">
                <td><b>Progress Bar 4th Background Color</b> <span class="pbar-6310-pro">(Pro) <div class="pbar-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
                <td>
                    <input type="text" name="pbar_progress_bar_background_forth_color" id="pbar_progress_bar_background_forth_color" class="pbar-form-input pbar_6310_color_picker" data-format="rgb" data-opacity=".8" value="<?php echo esc_attr($cssData['pbar_progress_bar_background_forth_color']) ?>">
                </td>
            </tr>       
            <tr  class="">
                <td><b>Progress Bar 5th Background Color</b> <span class="pbar-6310-pro">(Pro) <div class="pbar-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
                <td>
                    <input type="text" name="pbar_progress_bar_background_fifth_color" id="pbar_progress_bar_background_fifth_color" class="pbar-form-input pbar_6310_color_picker" data-format="rgb" data-opacity=".8" value="<?php echo esc_attr($cssData['pbar_progress_bar_background_fifth_color']) ?>">
                </td>
            </tr>       
            <tr  class="">
                <td><b>Progress Bar 6th Background Color</b> <span class="pbar-6310-pro">(Pro) <div class="pbar-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
                <td>
                    <input type="text" name="pbar_progress_bar_background_six_color" id="pbar_progress_bar_background_six_color" class="pbar-form-input pbar_6310_color_picker" data-format="rgb" data-opacity=".8" value="<?php echo esc_attr($cssData['pbar_progress_bar_background_six_color']) ?>">
                </td>
            </tr>       
                   
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
$jsCode = "jQuery(document).ready(function(){jQuery('.progress_bar_color_hide').remove(); jQuery('#tab5').show();});";
wp_register_script( "sbs-6310-template-pbar-fields-hide", "" );
wp_enqueue_script( "sbs-6310-template-pbar-fields-hide" );
wp_add_inline_script( "sbs-6310-template-pbar-fields-hide", $jsCode );
?>
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
               <td>
                  <b>Progress Bar 1st Color</b> <span class="pbar-6310-pro">(Pro) <div class="pbar-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
               </td>
               <td>
                  <input type="text" name="pbar_progress_bar_first_color" id="pbar_progress_bar_first_color" class="pbar-form-input pbar_6310_color_picker" data-format="rgb" value="<?php echo esc_attr($cssData['pbar_progress_bar_first_color']) ?>">
               </td>
            </tr>
            <tr>
               <td>
                  <b>Progress Bar  2nd Color</b> <span class="pbar-6310-pro">(Pro) <div class="pbar-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
               </td>
               <td>
                  <input type="text" name="pbar_progress_bar_second_color" id="pbar_progress_bar_second_color" class="pbar-form-input pbar_6310_color_picker" data-format="rgb" value="<?php echo esc_attr($cssData['pbar_progress_bar_second_color']) ?>">
               </td>
            </tr>
            <tr>
               <td>
                  <b>Progress Bar 3rd Color</b> <span class="pbar-6310-pro">(Pro) <div class="pbar-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span>
               </td>
               <td>
                  <input type="text" name="pbar_progress_bar_third_color" id="pbar_progress_bar_third_color" class="pbar-form-input pbar_6310_color_picker" data-format="rgb" value="<?php echo esc_attr($cssData['pbar_progress_bar_third_color']) ?>">
               </td>
            </tr>              
            </table>
          </div>
          <div class="pbar-6310-col-50">
            <table class="table table-responsive pbar_6310_admin_table"> 
            
            <tr>
              <td><b>Progress Bar Radius</b> <span class="pbar-6310-pro">(Pro) <div class="pbar-6310-pro-text">This feature is available on the pro version only. You can view changes in the admin panel, not in the output.</div></span></td>
              <td>
                <input type="number" min="0" name="pbar_6310_bar_radius" value="<?php echo  esc_attr($cssData['pbar_6310_bar_radius']) ?>" class="pbar-6310-form-input" id="pbar_6310_bar_radius" />
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
        <div class="row">
          <h3 class="pbar-6310-tab-menu-settings">Value Settings</h3>
          <div class="pbar-6310-col-50">
            <table class="table table-responsive pbar_6310_admin_table">
              <?php include pbar_6310_plugin_url . 'settings/form/_progress_percentage_form.php'; ?>           
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
$jsCode = "jQuery(document).ready(function(){jQuery('#tab4, .progress_bar_color_hide, .title_text_align_hide, .pbar-title-top, .pbar-title-bottom').hide();});";
wp_register_script( "sbs-6310-template-percentage-tab-hide", "" );
wp_enqueue_script( "sbs-6310-template-percentage-tab-hide" );
wp_add_inline_script( "sbs-6310-template-percentage-tab-hide", $jsCode );
?>
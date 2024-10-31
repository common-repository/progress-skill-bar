<?php
if (!defined('ABSPATH')) {
  exit;
}

if (!current_user_can('edit_others_pages')) {
  wp_die(__('You do not have sufficient permissions to access this page.'));
}
?>
<div class="pbar-6310">
  <h1>Product License Activation</h1>
  <p>Activate your copy to get direct plugin updates and official support.</p>
  <?php
  if (!empty($_POST['save'])) {
    $nonce = $_REQUEST['_wpnonce'];
    if (!wp_verify_nonce($nonce, 'pbar-6310-nonce-field-license')) {
      die('You do not have sufficient permissions to access this page.');
    } else {
     pbar_6310_check_license(sanitize_text_field($_POST['license']));
    }
  }
  ?>
  <form action="" method="post" class="pabr-6310-license-bar-width">
    <?php
    echo wp_nonce_field("pbar-6310-nonce-field-license");
    ?>
    <table>
      <tr>
        <td>License Key:</td>
        <td>
          <input type="text" name="license" class="pbar-6310-form-input">
        </td>
      </tr>
      <tr>
        <td></td>
        <td>
          <br />
          <input type="submit" name="save" class="pbar-6310-btn-primary">
        </td>
      </tr>
    </table>
  </form>
</div>
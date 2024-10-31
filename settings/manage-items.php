<?php
if (!defined('ABSPATH'))
  exit;
?>
<div class="pbar-6310">
  <?php
  $item_table = $wpdb->prefix . 'pbar_6310_item';
  wp_enqueue_media();

  if (!empty($_POST['delete']) && isset($_POST['id']) && is_numeric($_POST['id'])) {
    $nonce = $_REQUEST['_wpnonce'];
    if (!wp_verify_nonce($nonce, 'pbar-6310-nonce-field-delete')) {
      die('You do not have sufficient permissions to access this page.');
    } else {
      $id = (int) $_POST['id'];
      $wpdb->query($wpdb->prepare("DELETE FROM {$item_table} WHERE id = %d", $id));
    }
  }
  ?>

  <table class="pbar-6310-item-table">
    <tr>
      <th>Name</th>
      <th class="pbar-6310-width-80">Percentage</th>
      <th class="pbar-6310-width-80">Delete</th>
    </tr>
    <?php
    $data = $wpdb->get_results('SELECT * FROM ' . $item_table . ' ORDER BY id DESC', ARRAY_A);
    foreach ($data as $value) {
      echo '<tr>';
      echo '<td>' . pbar_6310_replace($value['name']) . '</td>';
      echo '<td align="center">' . pbar_6310_replace($value['percentage']) . '%</td>';
      echo '<td align="center">
                <form method="post">
                  ' . wp_nonce_field("pbar-6310-nonce-field-delete") . '
                        <input type="hidden" name="id" value="' . $value['id'] . '">
                        <button class="pbar-6310-btn-danger pbar-6310-action-button pbar-6310-no-margin" title="Delete"  type="submit" value="delete" name="delete" onclick="return confirm(\'Do you want to delete this item from all other templates?\');"><i class="far fa-times-circle" aria-hidden="true"></i></button>
                </form>
            </td>';
    }
    ?>
  </table>
</div>


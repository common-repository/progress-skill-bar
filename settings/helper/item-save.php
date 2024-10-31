<?php
if (!empty($_POST['rearrange-list-save']) && $_POST['rearrange-list-save'] == 'Save') {
    $nonce = $_REQUEST['_wpnonce'];
    if (!wp_verify_nonce($nonce, 'pbar-6310-nonce-rearrange-list')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        $itemIds = sanitize_text_field($_POST['rearrange_items_list']);
        $wpdb->query($wpdb->prepare("UPDATE $style_table SET itemids = %s WHERE id = %d", $itemIds, sanitize_text_field($_POST['rearrange_id'])));
    }
}


if (!empty($_POST['add-edit-item-save']) && $_POST['add-edit-item-save'] == 'Save' && $_POST['styleid'] != '') {
    $nonce = $_REQUEST['_wpnonce'];
    if (!wp_verify_nonce($nonce, 'pbar-6310-nonce-add-edit-item')) {
    die('You do not have sufficient permissions to access this page.');
    } else {
        $styleid = sanitize_text_field($_POST['styleid']);
        $allId = isset($_POST['item_id']) ? array_map('sanitize_text_field', $_POST['item_id']) : [];
        $name = isset($_POST['name']) ? array_map('sanitize_text_field', $_POST['name']) : [];
        $percentage = isset($_POST['percentage']) ? array_map('sanitize_text_field', $_POST['percentage']) : [];

        $dbItemIds = '';
        if(count($allId)){
            for($i = 0; $i < count($allId); $i++) {
                if($allId[$i] == 0) {
                    $wpdb->query($wpdb->prepare("INSERT INTO {$item_table} (name, percentage) VALUES ( %s, %s)", array($name[$i], (int) $percentage[$i])));
                    if($dbItemIds){
                        $dbItemIds .= ',';
                    }
                    $dbItemIds .= $wpdb->insert_id;
                } else {
                    $wpdb->query($wpdb->prepare("UPDATE {$item_table} set name=%s, percentage=%s where id=%d", array($name[$i], (int) $percentage[$i], $allId[$i])));
                    if($dbItemIds){
                        $dbItemIds .= ',';
                    }
                    $dbItemIds .= $allId[$i];
                }
            }
        }
        $wpdb->query($wpdb->prepare("UPDATE $style_table SET itemids = %s WHERE id = %d", $dbItemIds, $styleid));
    }
}

if (!empty($_POST['desktop_item_per_row_sub']) && $_POST['desktop_item_per_row_sub'] == 'Update') {
    $nonce = $_REQUEST['_wpnonce'];
    if (!wp_verify_nonce($nonce, 'pbar_6310_nonce_field_form')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        $styledata = $wpdb->get_row($wpdb->prepare("SELECT * FROM $style_table WHERE id = %d ", $styleId), ARRAY_A);
        $item_per_row_data = sanitize_text_field($_POST['desktop_item_per_row_data']);
        $styleid = sanitize_text_field($_POST['id']);        
        $css = $item_per_row_data . "|" . substr($styledata['css'], 2);
        
        $wpdb->update("$style_table", array(
            "css" => $css
                ), array('id' => $styleid), array('%s'), array('%d')
        );

    }
}

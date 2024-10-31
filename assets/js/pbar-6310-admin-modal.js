jQuery(document).ready(function () {
  //Preview page Create New Start
  jQuery("body").on("click", ".pbar_6310_choosen_style", function () {
    jQuery("#pbar-6310-modal-add").fadeIn(500);
    jQuery("#pbar-6310-style-hidden").val(jQuery(this).attr("id"));
    jQuery("body").css({
      overflow: "hidden",
    });
    return false;
  });
  //Preview page Create New End

  //Add/Edit items start
  jQuery("body").on("click", "#pbar-6310-add-or-edit-items", function () {
    jQuery('.pbar-6310-manage-items-existing-add').hide();
    jQuery('.pbar-6310-manage-items-add, .pbar-6310-manage-items-existing').show();
    jQuery("#pbar-6310-add-or-edit-items-modal").fadeIn(500);
    jQuery("body").css({
      overflow: "hidden",
    });
    return false;
  });
  jQuery("body").on("click", ".pbar-6310-row-select-checkbox", function (event) {
    event.stopPropagation();
  });
  jQuery("body").on("click", ".pbar-6310-row-select", function () {
    var id = jQuery(this).attr("id");
    if (jQuery("#chk-box-" + id).prop("checked") == true) {
      jQuery("#chk-box-" + id).prop("checked", false);
      return false;
    } else {
      jQuery("#chk-box-" + id).prop("checked", true);
      return true;
    }
  });
  //Add/Edit items End

  //Rearrange items start
  jQuery("body").on("click", "#pbar-6310-rearrange-items", function () {
    jQuery("#pbar-6310-rearrange-items-modal").fadeIn(500);
    jQuery("input[name='order_type']:checked").val() == "1" ||
    jQuery("input[name='order_type']:checked").val() == 1
      ? jQuery("#pbar-6310-sortable-items").hide()
      : jQuery("#pbar-6310-sortable-items").show();
    jQuery("body").css({
      overflow: "hidden",
    });
    return false;
  });

  jQuery("#pbar-6310-sortable-items").sortable();
  jQuery("#pbar-6310-sortable-items").disableSelection();
  jQuery("#pbar-6310-sortable-sub").click(function () {
    var list_sortable = jQuery("#pbar-6310-sortable-items")
      .sortable("toArray")
      .toString();
    jQuery("#rearrange_items_list").val(list_sortable);
  });

  jQuery("body").on("change", "input[name='order_type']", function () {
    jQuery(this).val() == "1" || jQuery(this).val() == 1
      ? jQuery("#pbar-6310-sortable-items").hide()
      : jQuery("#pbar-6310-sortable-items").show();
  });
  //Rearrange items end

  //Close Modal Script
  jQuery("body").on(
    "click",
    ".pbar-6310-close, .pbar-6310-btn-danger",
    function () {
      jQuery(`
            #pbar-6310-modal-add, 
            #pbar-6310-add-or-edit-items-modal,
            #pbar-6310-rearrange-items-modal
          `).fadeOut(500);
      jQuery("body").css({
        overflow: "initial",
      });
    }
  );
  jQuery(window).click(function (event) {
    if (
      event.target == document.getElementById("pbar-6310-modal-add") ||
      event.target ==
        document.getElementById("pbar-6310-add-or-edit-items-modal") ||
      event.target == document.getElementById("pbar-6310-rearrange-items-modal")
    ) {
      jQuery(`
              #pbar-6310-modal-add, 
              #pbar-6310-add-or-edit-items-modal,
              #pbar-6310-rearrange-items-modal
            `).fadeOut(500);
      jQuery("body").css({
        overflow: "initial",
      });
    }
  });
});

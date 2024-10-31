jQuery.fn.extend({
  live: function (event, callback) {
    if (this.selector) {
      jQuery(document).on(event, this.selector, callback);
    }
    return this;
  },
});

jQuery.fn.extend({
  size: function (event, callback) {
    if (this.selector) {
      jQuery(document).on(event, this.selector, callback);
    }
    return this;
  },
});

jQuery(document).ready(function () {
  document.body.addEventListener('click', function () {
    setTimeout(function () {
      jQuery(".pbar-6310-slider-range-min").slider({
        range: "min",
        min: 1,
        max: 100,
        slide: function (event, ui) {
          jQuery(this).attr("data-value", ui.value)
          jQuery(this).find('div:first-child').css('width', ui.value + "%");
          jQuery("." + jQuery(this).attr("id")).val(ui.value + "%");
        },
      });
      jQuery(".pbar-6310-slider-range-min").each(function () {
        jQuery(this).slider({
          value: jQuery(this).attr("data-value"),
        });
      });
    }, 500)
  });

  let id = jQuery(".pbar-6310-progress-bar").attr("pbar-6310-style-id");
  if (jQuery("#pbar_6310_fun_template_button").prop("checked") === false) {
    jQuery(".read_more_act_field").hide();
  }

  if (jQuery("#template_details_show_hide").prop("checked") === false) {
    jQuery(".details_act_field").hide();
  }

  if (jQuery(".codemirror-textarea").length) {
    var code = jQuery(".codemirror-textarea")[0];
    var editor = CodeMirror.fromTextArea(code, {
      mode: "text/html",
      tabMode: "indent",
      autoCloseTags: true,
      lineNumbers: true,
      fixedGutter: true,
      lineWrapping: true,
      autoCloseBrackets: true,
    });
  }

  jQuery(
    "#tab-2, #tab-3, #tab-4, #tab-5, #tab-6, #tab-7, #tab-8, #tab-9, #tab-10, #tab-11, #tab-12"
  ).hide();
  jQuery("body").on("click", ".pbar-6310-mytab", function () {
    jQuery(".pbar-6310-mytab").removeClass("active");
    jQuery(this).addClass("active");
    var ids = jQuery(this).attr("id");
    ids = parseInt(ids.substring(3));
    jQuery(
      "#tab-1, #tab-2, #tab-3, #tab-4, #tab-5, #tab-6, #tab-7, #tab-8, #tab-9, #tab-10, #tab-11, #tab-12"
    ).hide();
    jQuery("#tab-" + ids).show();
    jQuery("#tab6").click(function (event) {
      jQuery(".codemirror-textarea").focus();
    });
    return false;
  });

  //Color Picker Script
  if (jQuery(".pbar_6310_color_picker").length) {
    jQuery(".pbar_6310_color_picker").each(function () {
      jQuery(this).minicolors({
        control: jQuery(this).attr("data-control") || "hue",
        defaultValue: jQuery(this).attr("data-defaultValue") || "",
        format: jQuery(this).attr("data-format") || "hex",
        keywords: jQuery(this).attr("data-keywords") || "",
        inline: jQuery(this).attr("data-inline") === "true",
        letterCase: jQuery(this).attr("data-letterCase") || "lowercase",
        opacity: jQuery(this).attr("data-opacity"),
        position: jQuery(this).attr("data-position") || "bottom left",
        swatches: jQuery(this).attr("data-swatches")
          ? jQuery(this).attr("data-swatches").split("|")
          : [],
        change: function (value, opacity) {
          if (!value) return;
          if (opacity) value += ", " + opacity;
          if (typeof console === "object") {
            console.log(value);
          }
        },
        theme: "bootstrap",
      });
    });
  }

  //Font select script
  jQuery(
    "#pbar_6310_title_font_family, #pbar_6310_value_font_family"
  ).fontselect();

  //Active or inactive read more
  jQuery("body").on("change", "#pbar_6310_fun_template_button", function () {
    if (jQuery(this).prop("checked") === true) {
      jQuery(
        `.read_more_act_field, .pbar-6310-template-${id}-read-more`
      ).show();
    } else {
      jQuery(
        `.read_more_act_field, .pbar-6310-template-${id}-read-more`
      ).hide();
    }
  });

  //Active or inactive description
  jQuery("body").on("change", "#template_value_show_hide", function () {
    if (jQuery(this).prop("checked") === true) {
      jQuery(`.value_act_field, .pbar-6310-template-${id}-description`).show();
    } else {
      jQuery(`.value_act_field, .pbar-6310-template-${id}-description`).hide();
    }
  });

  //Choose background type start
  if (jQuery("#background_type").length) {
    jQuery(".background-type-2, .background-type-3, .background-type-4").hide();
    jQuery(".background-type-" + jQuery("#background_type").val()).show();

    jQuery("body").on("change", "#background_type", function () {
      var val = jQuery(this).val();
      jQuery(
        ".background-type-2, .background-type-3, .background-type-4"
      ).hide();
      jQuery(`.background-type-${val}`).show();
    });

    jQuery("body").on(
      "click",
      "#pbar_6310_box_background_image_button",
      function (e) {
        e.preventDefault();
        var image = wp
          .media({
            title: "Upload Image",
            multiple: false,
          })
          .open()
          .on("select", function (e) {
            var uploaded_image = image.state().get("selection").first();
            var image_url = uploaded_image.toJSON().url;
            jQuery(`#pbar_6310_box_background_image`).val(image_url);
          });

        jQuery("#wpm_6310_add_new_media").css({
          "overflow-x": "hidden",
          "overflow-y": "auto",
        });
      }
    );
  }
  //Choose background type end

  //Search Start
  if (jQuery("#pbar_6310_search_activation").prop("checked") === false) {
    jQuery(".search_act_field, .pbar-6310-search").hide();
  }
  jQuery(".pbar-6310-search-box").on("keyup", function () {
    var value = jQuery(this).val().toLowerCase();
    var ids = jQuery(this)
      .closest(".pbar-6310-progress-bar")
      .attr("pbar-6310-style-id");
    jQuery(`.pbar-6310-noslider .pbar-6310-row .pbar-6310-col-list`).filter(
      function () {
        var title = jQuery(this)
          .find(`.pbar-6310-template-${ids}-title`)
          .text()
          .toLowerCase();
        var designation = jQuery(this)
          .find(`.pbar-6310-template-${ids}-description`)
          .text()
          .toLowerCase();
        let status =
          title.indexOf(value) > -1 || designation.indexOf(value) > -1;
        if (status) {
          jQuery(this).show(300);
        } else {
          jQuery(this).hide(300);
        }
      }
    );
  });

  jQuery("body").on("click", "#pbar_6310_search_activation", function () {
    if (jQuery(this).prop("checked") == true) {
      jQuery(".pbar-6310-search-box").val("");
      jQuery(".pbar-6310-search-container").show();
      jQuery(".search_act_field, .pbar-6310-search").show();
    } else {
      jQuery(".pbar-6310-search-container").hide();
      jQuery(".search_act_field, .pbar-6310-search").hide();
    }
  });

  //Manage item page start
  jQuery("#profile_details, #effect-appearance").hide();
  jQuery("body").on("click", "#add-accordion", function () {
    jQuery("#pbar-6310-modal-add-item").fadeIn(500);
    jQuery("body").css({
      overflow: "hidden",
    });
    return false;
  });

  //Manage icon Start
  jQuery(".custom-icon-new").hide();
  jQuery("body").on("change", ".icontype_new", function () {
    let val = Number(jQuery(this).val());
    jQuery(".custom-icon-new, .font-awesome-icon-new").hide();
    val
      ? jQuery(".font-awesome-icon-new").show()
      : jQuery(".custom-icon-new").show();
  });
  jQuery("#icon-filter").on("keyup", function () {
    var value = jQuery(this).val().toLowerCase();
    jQuery(".pbar-6310-choose-icon li").filter(function () {
      jQuery(this).toggle(
        jQuery(this).attr(`data-icon-name`).toLowerCase().indexOf(value) > -1
      );
    });
  });

  jQuery("body").on(
    "click",
    "#pbar-6310-font-icon-close, .pbar-6310-font-awesome-close",
    function () {
      jQuery("#pbar_6310_social_icon").fadeOut(500);
    }
  );

  jQuery("body").on("click", ".pbar-6310-plus-icons i", function () {
    let selIds = jQuery(this)
      .closest(".pbar-6310-plus-icons")
      .siblings(".pbar-6310-form-input")
      .attr("id");
    jQuery("ul.pbar-6310-choose-icon").attr("data-current-id", selIds);
    if (jQuery("#icon-filter").val()) {
      jQuery("#icon-filter").val("");
      jQuery(".pbar-6310-choose-icon li").filter(function () {
        jQuery(this).toggle();
      });
    }
    jQuery("#pbar_6310_social_icon").fadeIn(500);
    jQuery("body").css({
      overflow: "hidden",
    });
    jQuery("#icon-filter").focus();
    return false;
  });

  jQuery("body").on("click", "ul.pbar-6310-choose-icon li", function () {
    let cls = jQuery(this).find("i").attr("class");
    jQuery(
      `#` + jQuery("ul.pbar-6310-choose-icon").attr("data-current-id")
    ).val(cls);
    jQuery("#pbar_6310_social_icon").fadeOut(500);
  });
  //Manage icon End

  /* ######### Custom Icon Media Start ########### */
  jQuery("body").on("click", ".pbar-6310-icon-upload", function (e) {
    e.preventDefault();
    let dataId = jQuery(this).attr("data-id");
    console.log(dataId);
    var image = wp
      .media({
        title: "Upload Image",
        multiple: false,
      })
      .open()
      .on("select", function (e) {
        var uploaded_image = image.state().get("selection").first();
        var image_url = uploaded_image.toJSON().url;
        jQuery(`#${dataId}`).val(image_url);
      });

    jQuery("#wpm_6310_add_new_media").css({
      "overflow-x": "hidden",
      "overflow-y": "auto",
    });
  });
  /* ######### Custom Icon Media End ########### */

  /* Modal Close Start */
  jQuery("body").on(
    "click",
    ".pbar-6310-close, #pbar-6310-from-close",
    function () {
      jQuery(
        "#pbar-6310-modal-add, #pbar-6310-modal-edit, #pbar_6310_social_icon, #pbar-6310-modal-add-item, #pbar-6310-modal-edit-item"
      ).fadeOut(500);
      jQuery("body").css({
        overflow: "initial",
      });
    }
  );
  jQuery("body").on("click", ".pbar-6310-close-2", function () {
    jQuery("#pbar_6310_social_icon").fadeOut(500);
    jQuery("body").css({
      overflow: "initial",
    });
  });
  jQuery(window).click(function (event) {
    if (event.target == document.getElementById("pbar-6310-modal-edit-item")) {
      jQuery("#pbar-6310-modal-edit-item").fadeOut(500);
      jQuery("body").css({
        overflow: "initial",
      });
    } else if (
      event.target == document.getElementById("pbar-6310-modal-add-item")
    ) {
      jQuery("#pbar-6310-modal-add-item").fadeOut(500);
      jQuery("body").css({
        overflow: "initial",
      });
    } else if (event.target == document.getElementById("pbar-6310-modal-add")) {
      jQuery("#pbar-6310-modal-add").fadeOut(500);
      jQuery("body").css({
        overflow: "initial",
      });
    } else if (
      event.target == document.getElementById("pbar-6310-modal-edit")
    ) {
      jQuery("#pbar-6310-modal-edit").fadeOut(500);
      jQuery("body").css({
        overflow: "initial",
      });
    } else if (
      event.target == document.getElementById("pbar_6310_social_icon")
    ) {
      jQuery("#pbar_6310_social_icon").fadeOut(500);
      jQuery("body").css({
        overflow: "initial",
      });
    }
  });
  /* Modal Close End */

  //Add new item
  jQuery('body').on('click', '.pbar-6310-manage-items-add', function(){
    let total = Number(jQuery('.pbar-6310-total-items').attr('data-value')) + 1;
    let html = `
    <div class="pbar-6310-item-box">
      <input type="hidden" name="item_id[]" value="0" />
      <i class="fas fa-trash-alt"></i>
        <div class="pbar-6310-item-box-fields">
          <label>Name</label>
          <input type="text" name="name[]" value="Enter Skill">
        </div>
        <div class="pbar-6310-item-box-fields">
          <label>Percentage</label>
          <input type="text" name="percentage[]" value="90%" class="bar-6310-${total}" readonly=""> 
          <div class="pbar-6310-slider-range-min ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" id="bar-6310-${total}" data-value="90"><div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min" style="width: 89.899%;"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 89.899%;"></span></div> 
        </div>
      </div>
    `;
    jQuery('.pbar-6310-total-items').attr('data-value', total);
    jQuery('.pbar-6310-manage-items').before(html);
  });

  jQuery('body').on('click', '.pbar-6310-manage-items-existing', function(){
    jQuery('.pbar-6310-manage-items-existing-add').show();
    jQuery('.pbar-6310-manage-items-add, .pbar-6310-manage-items-existing').hide();
  });

  //Add item from option
  jQuery('body').on('click', '.pbar-6310-manage-items-existing-add .pbar-6310-btn-primary', function(){
    let value = jQuery('#existing-items-list').val();
    if(!value) {
      alert('All items already added.');
      jQuery('.pbar-6310-manage-items-existing-add').hide();
      jQuery('.pbar-6310-manage-items-add, .pbar-6310-manage-items-existing').show();
      return;
    }
    jQuery("#existing-items-list option:selected").attr('disabled','disabled');
    jQuery("#existing-items-list option:selected").removeAttr('selected');
    value = value.split('@@##@@');
    let total = Number(jQuery('.pbar-6310-total-items').attr('data-value')) + 1;
    let html = `
    <div class="pbar-6310-item-box">
      <input type="hidden" name="item_id[]" value="${value[0]}" />
      <div class='pbar-6310-icon'>
        <i class="fas fa-trash-alt" data-id="${value[0]}"></i>
      </div>
      <div class="pbar-6310-item-box-fields">
        <label>Name</label>
        <input type="text" name="name[]" value="${value[1]}">
      </div>
      <div class="pbar-6310-item-box-fields">
        <label>Percentage</label>
        <input type="text" name="percentage[]" value="${value[2]}%" class="bar-6310-${total}" readonly=""> 
        <div class="pbar-6310-slider-range-min ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" id="bar-6310-${total}" data-value="${value[2]}"><div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min" style="width: ${value[2]}%;"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: ${value[2]}%;"></span></div> 
      </div>
    </div>
    `;
    jQuery('.pbar-6310-total-items').attr('data-value', total);
    jQuery('.pbar-6310-manage-items').before(html);
  });

  //Cancel button
  jQuery('body').on('click', '.pbar-6310-manage-items-existing-add .pbar-6310-btn-cancel', function(){
    jQuery('.pbar-6310-manage-items-existing-add').hide();
    jQuery('.pbar-6310-manage-items-add, .pbar-6310-manage-items-existing').show();
  });

  //Delete button
  jQuery("body").on("click", "#add-edit-item-save", function () {
    let allItem = jQuery('.pbar-6310-slider-range-min');
    let status = true;
    allItem.each(function (){
      let num = Number(jQuery(this).attr('data-value'));
      if(num < 5) {
        status = false;
        alert('The percentage value must be at least 5.')
      }
    });
    return status;
  });
  jQuery("body").on("click", ".pbar-6310-item-box .fa-trash-alt", function () {
    jQuery(this).closest(".pbar-6310-item-box").remove();
    let id = jQuery(this).attr("data-id");
    if(id){
      jQuery(`#existing-items-list option[data-id='${id}']`).removeAttr('disabled');
    }
  });
  
  //Add new End
});


jQuery(window).on("load", function () {
  window.addEventListener('scroll', debounceEvents(function() {
    let allItems = document.querySelectorAll(".pbar-6310-progress-bar");
    if (allItems.length) {
      for (let i = 0; i < allItems.length; i++) {
        let id = allItems[i].getAttribute("pbar-6310-style-id");
        let barList = allItems[i].querySelectorAll(`.pbar-6310-template-${id}-item`);
        if(barList.length){
          for (let j = 0; j < barList.length; j++) {
            let selector = '#' + barList[j].getAttribute('id');
            if(isScrolledIntoView(selector)){
              barList[j].classList.add(`pbar-6310-template-${id}-bar`);
            } else{
              barList[j].classList.remove(`pbar-6310-template-${id}-bar`);
            }
          }
        }
      }
    }

    //Circle design
    allItems = document.querySelectorAll(".pbar-6310-circle");
    if (allItems.length) {
      for (let i = 0; i < allItems.length; i++) {
        let id = allItems[i].getAttribute("data-id");
        if(isScrolledIntoView(`[data-id='${id}']`)){
          allItems[i].classList.add(id);
        } else{
          allItems[i].classList.remove(id);
        }
      }
    }
  }, 30));
});

function isScrolledIntoView(elem) {
  var docViewTop = jQuery(window).scrollTop();
  var docViewBottom = docViewTop + jQuery(window).height();
  var elemTop = jQuery(elem).offset().top;
  var elemBottom = elemTop + (jQuery(elem).height() / 2);
  return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}
function debounceEvents(f, delay) {
  let timer = null;
  return function() {
    let context = this,
      args = arguments;
    clearTimeout(timer);
    timer = window.setTimeout(function() {
      f.apply(context, args);
    }, delay || 300);
  };
}

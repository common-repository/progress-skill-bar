jQuery(window).on("load", function () {
  window.addEventListener(
    "scroll",
    debounceEvents(function () {
      let allItems = document.querySelectorAll(".pbar-6310-progress-bar");
      if (allItems.length) {
        for (let i = 0; i < allItems.length; i++) {
          let id = allItems[i].getAttribute("pbar-6310-style-id");
          let barList = allItems[i].querySelectorAll(
            `.pbar-6310-template-${id}-item`
          );
          if (barList.length) {
            for (let j = 0; j < barList.length; j++) {
              let selector = "#" + barList[j].getAttribute("id");
              if (isScrolledIntoView(selector)) {
                barList[j].classList.add(`pbar-6310-template-${id}-bar`);
              } else {
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
          if (isScrolledIntoView(`[data-id='${id}']`)) {
            allItems[i].classList.add(id);
          } else {
            allItems[i].classList.remove(id);
          }
        }
      }
    }, 30)
  );
});

function isScrolledIntoView(elem) {
  var docViewTop = jQuery(window).scrollTop();
  var docViewBottom = docViewTop + jQuery(window).height();
  var elemTop = jQuery(elem).offset().top;
  var elemBottom = elemTop + jQuery(elem).height() / 2;
  return elemBottom <= docViewBottom && elemTop >= docViewTop;
}
function debounceEvents(f, delay) {
  let timer = null;
  return function () {
    let context = this,
      args = arguments;
    clearTimeout(timer);
    timer = window.setTimeout(function () {
      f.apply(context, args);
    }, delay || 300);
  };
}

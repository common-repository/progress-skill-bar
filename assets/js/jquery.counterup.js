!function(a,t){"function"==typeof define&&define.amd?define(t):"object"==typeof exports?module.exports=t(require,exports,module):a.CountUp=t()}(this,function(a,t,e){var n=function(a,t,e,n,i,r){function o(a){a=a.toFixed(c.decimals),a+="";var t,e,n,i;if(t=a.split("."),e=t[0],n=t.length>1?c.options.decimal+t[1]:"",i=/(\d+)(\d{3})/,c.options.useGrouping)for(;i.test(e);)e=e.replace(i,"$1"+c.options.separator+"$2");return c.options.prefix+e+n+c.options.suffix}function l(a,t,e,n){return e*(-Math.pow(2,-10*a/n)+1)*1024/1023+t}function s(a){return"number"==typeof a&&!isNaN(a)}for(var u=0,m=["webkit","moz","ms","o"],d=0;d<m.length&&!window.requestAnimationFrame;++d)window.requestAnimationFrame=window[m[d]+"RequestAnimationFrame"],window.cancelAnimationFrame=window[m[d]+"CancelAnimationFrame"]||window[m[d]+"CancelRequestAnimationFrame"];window.requestAnimationFrame||(window.requestAnimationFrame=function(a,t){var e=(new Date).getTime(),n=Math.max(0,16-(e-u)),i=window.setTimeout(function(){a(e+n)},n);return u=e+n,i}),window.cancelAnimationFrame||(window.cancelAnimationFrame=function(a){clearTimeout(a)});var c=this;if(c.version=function(){return"1.8.5"},c.options={useEasing:!0,useGrouping:!0,separator:",",decimal:".",easingFn:l,formattingFn:o,prefix:"",suffix:""},r&&"object"==typeof r)for(var f in c.options)r.hasOwnProperty(f)&&null!==r[f]&&(c.options[f]=r[f]);""===c.options.separator&&(c.options.useGrouping=!1),c.initialize=function(){return!!c.initialized||(c.d="string"==typeof a?document.getElementById(a):a,c.d?(c.startVal=Number(t),c.endVal=Number(e),s(c.startVal)&&s(c.endVal)?(c.decimals=Math.max(0,n||0),c.dec=Math.pow(10,c.decimals),c.duration=1e3*Number(i)||2e3,c.countDown=c.startVal>c.endVal,c.frameVal=c.startVal,c.initialized=!0,!0):(console.error("[CountUp] startVal or endVal is not a number",c.startVal,c.endVal),!1)):(console.error("[CountUp] target is null or undefined",c.d),!1))},c.printValue=function(a){var t=c.options.formattingFn(a);"INPUT"===c.d.tagName?this.d.value=t:"text"===c.d.tagName||"tspan"===c.d.tagName?this.d.textContent=t:this.d.innerHTML=t},c.count=function(a){c.startTime||(c.startTime=a),c.timestamp=a;var t=a-c.startTime;c.remaining=c.duration-t,c.options.useEasing?c.countDown?c.frameVal=c.startVal-c.options.easingFn(t,0,c.startVal-c.endVal,c.duration):c.frameVal=c.options.easingFn(t,c.startVal,c.endVal-c.startVal,c.duration):c.countDown?c.frameVal=c.startVal-(c.startVal-c.endVal)*(t/c.duration):c.frameVal=c.startVal+(c.endVal-c.startVal)*(t/c.duration),c.countDown?c.frameVal=c.frameVal<c.endVal?c.endVal:c.frameVal:c.frameVal=c.frameVal>c.endVal?c.endVal:c.frameVal,c.frameVal=Math.round(c.frameVal*c.dec)/c.dec,c.printValue(c.frameVal),t<c.duration?c.rAF=requestAnimationFrame(c.count):c.callback&&c.callback()},c.start=function(a){c.initialize()&&(c.callback=a,c.rAF=requestAnimationFrame(c.count))},c.pauseResume=function(){c.paused?(c.paused=!1,delete c.startTime,c.duration=c.remaining,c.startVal=c.frameVal,requestAnimationFrame(c.count)):(c.paused=!0,cancelAnimationFrame(c.rAF))},c.reset=function(){c.paused=!1,delete c.startTime,c.initialized=!1,c.initialize()&&(cancelAnimationFrame(c.rAF),c.printValue(c.startVal))},c.update=function(a){c.initialize()&&a!==c.frameVal&&(cancelAnimationFrame(c.rAF),c.paused=!1,delete c.startTime,c.startVal=c.frameVal,c.endVal=Number(a),s(c.endVal)?(c.countDown=c.startVal>c.endVal,c.rAF=requestAnimationFrame(c.count)):console.error("[CountUp] update() - new endVal is not a number",a))},c.initialize()&&c.printValue(c.startVal)};return n});

let pbar6310lCounter = document.querySelectorAll(".pbar-6310-template-percentage");
if (pbar6310lCounter.length) {
  for (let i = 0; i < pbar6310lCounter.length; i++) {
    let options = {
      useEasing: false,
      useGrouping: true,
      separator: '',
    };
    let ids = pbar6310lCounter[i].getAttribute("id");
    let start = 0;
    let end = pbar6310lCounter[i].getAttribute("data-value");
    let decimal = 0;
    let duration = pbar6310lCounter[i].getAttribute("data-duration");
    let demo = new CountUp(ids, start, end, decimal, duration, options);
    demo.start();
    jQuery('#' + ids).addClass('pbar-6310-animation-completed');
  }
}

window.addEventListener('scroll', debounceEvents(function() {
  pbar6310lCounter = document.querySelectorAll(".pbar-6310-template-percentage");
  if (pbar6310lCounter.length) {
    for (let i = 0; i < pbar6310lCounter.length; i++) {
      let ids = '#' + pbar6310lCounter[i].getAttribute("id");
      if(isScrolledIntoView(ids)) {
        if(!jQuery(ids).hasClass('pbar-6310-animation-completed')) {
          jQuery(ids).addClass('pbar-6310-animation-completed');
          let options = {
            useEasing: false,
            useGrouping: true,
            separator: '',
          };
          
          let start = 0;
          let end = pbar6310lCounter[i].getAttribute("data-value");
          let decimal = 0;
          let duration = pbar6310lCounter[i].getAttribute("data-duration");
          let demo = new CountUp(pbar6310lCounter[i].getAttribute("id"), start, end, decimal, duration, options);
          demo.start();
        }
      } else{
        jQuery(ids).removeClass('pbar-6310-animation-completed');
      }
    }
  }
}, 50));

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
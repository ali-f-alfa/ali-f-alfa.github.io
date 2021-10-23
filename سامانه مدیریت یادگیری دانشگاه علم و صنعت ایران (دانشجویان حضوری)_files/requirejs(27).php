define ("theme_boost/bootstrap/carousel",["exports","jquery","./util"],function(a,b,c){"use strict";Object.defineProperty(a,"__esModule",{value:!0});a.default=void 0;b=d(b);c=d(c);function d(a){return a&&a.__esModule?a:{default:a}}function e(a){"@babel/helpers - typeof";if("function"==typeof Symbol&&"symbol"==typeof Symbol.iterator){e=function(a){return typeof a}}else{e=function(a){return a&&"function"==typeof Symbol&&a.constructor===Symbol&&a!==Symbol.prototype?"symbol":typeof a}}return e(a)}function f(a,b){var c=Object.keys(a);if(Object.getOwnPropertySymbols){var d=Object.getOwnPropertySymbols(a);if(b)d=d.filter(function(b){return Object.getOwnPropertyDescriptor(a,b).enumerable});c.push.apply(c,d)}return c}function g(a){for(var b=1,c;b<arguments.length;b++){c=null!=arguments[b]?arguments[b]:{};if(b%2){f(Object(c),!0).forEach(function(b){h(a,b,c[b])})}else if(Object.getOwnPropertyDescriptors){Object.defineProperties(a,Object.getOwnPropertyDescriptors(c))}else{f(Object(c)).forEach(function(b){Object.defineProperty(a,b,Object.getOwnPropertyDescriptor(c,b))})}}return a}function h(a,b,c){if(b in a){Object.defineProperty(a,b,{value:c,enumerable:!0,configurable:!0,writable:!0})}else{a[b]=c}return a}function i(a,b){if(!(a instanceof b)){throw new TypeError("Cannot call a class as a function")}}function j(a,b){for(var c=0,d;c<b.length;c++){d=b[c];d.enumerable=d.enumerable||!1;d.configurable=!0;if("value"in d)d.writable=!0;Object.defineProperty(a,d.key,d)}}function k(a,b,c){if(b)j(a.prototype,b);if(c)j(a,c);return a}var l="bs.carousel",m=".".concat(l),n=".data-api",o=b.default.fn.carousel,p={interval:5e3,keyboard:!0,slide:!1,pause:"hover",wrap:!0,touch:!0},q={interval:"(number|boolean)",keyboard:"boolean",slide:"(boolean|string)",pause:"(string|boolean)",wrap:"boolean",touch:"boolean"},r="next",s="prev",t="slide".concat(m),u="slid".concat(m),v="keydown".concat(m),w="mouseenter".concat(m),x="mouseleave".concat(m),y="touchstart".concat(m),z="touchmove".concat(m),A="touchend".concat(m),B="pointerdown".concat(m),C="pointerup".concat(m),D="dragstart".concat(m),E="load".concat(m).concat(n),F="click".concat(m).concat(n),G="active",H=".active.carousel-item",I={TOUCH:"touch",PEN:"pen"},J=function(){function a(b,c){i(this,a);this._items=null;this._interval=null;this._activeElement=null;this._isPaused=!1;this._isSliding=!1;this.touchTimeout=null;this.touchStartX=0;this.touchDeltaX=0;this._config=this._getConfig(c);this._element=b;this._indicatorsElement=this._element.querySelector(".carousel-indicators");this._touchSupported="ontouchstart"in document.documentElement||0<navigator.maxTouchPoints;this._pointerEvent=!!(window.PointerEvent||window.MSPointerEvent);this._addEventListeners()}k(a,[{key:"next",value:function next(){if(!this._isSliding){this._slide(r)}}},{key:"nextWhenVisible",value:function nextWhenVisible(){var a=(0,b.default)(this._element);if(!document.hidden&&a.is(":visible")&&"hidden"!==a.css("visibility")){this.next()}}},{key:"prev",value:function prev(){if(!this._isSliding){this._slide(s)}}},{key:"pause",value:function pause(a){if(!a){this._isPaused=!0}if(this._element.querySelector(".carousel-item-next, .carousel-item-prev")){c.default.triggerTransitionEnd(this._element);this.cycle(!0)}clearInterval(this._interval);this._interval=null}},{key:"cycle",value:function cycle(a){if(!a){this._isPaused=!1}if(this._interval){clearInterval(this._interval);this._interval=null}if(this._config.interval&&!this._isPaused){this._updateInterval();this._interval=setInterval((document.visibilityState?this.nextWhenVisible:this.next).bind(this),this._config.interval)}}},{key:"to",value:function to(a){var c=this;this._activeElement=this._element.querySelector(H);var d=this._getItemIndex(this._activeElement);if(a>this._items.length-1||0>a){return}if(this._isSliding){(0,b.default)(this._element).one(u,function(){return c.to(a)});return}if(d===a){this.pause();this.cycle();return}var e=a>d?r:s;this._slide(e,this._items[a])}},{key:"dispose",value:function dispose(){(0,b.default)(this._element).off(m);b.default.removeData(this._element,l);this._items=null;this._config=null;this._element=null;this._interval=null;this._isPaused=null;this._isSliding=null;this._activeElement=null;this._indicatorsElement=null}},{key:"_getConfig",value:function _getConfig(a){a=g({},p,{},a);c.default.typeCheckConfig("carousel",a,q);return a}},{key:"_handleSwipe",value:function _handleSwipe(){var a=Math.abs(this.touchDeltaX);if(a<=40){return}var b=a/this.touchDeltaX;this.touchDeltaX=0;if(0<b){this.prev()}if(0>b){this.next()}}},{key:"_addEventListeners",value:function _addEventListeners(){var a=this;if(this._config.keyboard){(0,b.default)(this._element).on(v,function(b){return a._keydown(b)})}if("hover"===this._config.pause){(0,b.default)(this._element).on(w,function(b){return a.pause(b)}).on(x,function(b){return a.cycle(b)})}if(this._config.touch){this._addTouchEventListeners()}}},{key:"_addTouchEventListeners",value:function _addTouchEventListeners(){var a=this;if(!this._touchSupported){return}var c=function(b){if(a._pointerEvent&&I[b.originalEvent.pointerType.toUpperCase()]){a.touchStartX=b.originalEvent.clientX}else if(!a._pointerEvent){a.touchStartX=b.originalEvent.touches[0].clientX}},d=function(b){if(b.originalEvent.touches&&1<b.originalEvent.touches.length){a.touchDeltaX=0}else{a.touchDeltaX=b.originalEvent.touches[0].clientX-a.touchStartX}},e=function(b){if(a._pointerEvent&&I[b.originalEvent.pointerType.toUpperCase()]){a.touchDeltaX=b.originalEvent.clientX-a.touchStartX}a._handleSwipe();if("hover"===a._config.pause){a.pause();if(a.touchTimeout){clearTimeout(a.touchTimeout)}a.touchTimeout=setTimeout(function(b){return a.cycle(b)},500+a._config.interval)}};(0,b.default)(this._element.querySelectorAll(".carousel-item img")).on(D,function(a){return a.preventDefault()});if(this._pointerEvent){(0,b.default)(this._element).on(B,function(a){return c(a)});(0,b.default)(this._element).on(C,function(a){return e(a)});this._element.classList.add("pointer-event")}else{(0,b.default)(this._element).on(y,function(a){return c(a)});(0,b.default)(this._element).on(z,function(a){return d(a)});(0,b.default)(this._element).on(A,function(a){return e(a)})}}},{key:"_keydown",value:function _keydown(a){if(/input|textarea/i.test(a.target.tagName)){return}switch(a.which){case 37:a.preventDefault();this.prev();break;case 39:a.preventDefault();this.next();break;default:}}},{key:"_getItemIndex",value:function _getItemIndex(a){this._items=a&&a.parentNode?[].slice.call(a.parentNode.querySelectorAll(".carousel-item")):[];return this._items.indexOf(a)}},{key:"_getItemByDirection",value:function _getItemByDirection(a,b){var c=this._getItemIndex(b),d=this._items.length-1;if((a===s&&0===c||a===r&&c===d)&&!this._config.wrap){return b}var e=a===s?-1:1,f=(c+e)%this._items.length;return-1===f?this._items[this._items.length-1]:this._items[f]}},{key:"_triggerSlideEvent",value:function _triggerSlideEvent(a,c){var d=this._getItemIndex(a),e=this._getItemIndex(this._element.querySelector(H)),f=b.default.Event(t,{relatedTarget:a,direction:c,from:e,to:d});(0,b.default)(this._element).trigger(f);return f}},{key:"_setActiveIndicatorElement",value:function _setActiveIndicatorElement(a){if(this._indicatorsElement){var c=[].slice.call(this._indicatorsElement.querySelectorAll(".active"));(0,b.default)(c).removeClass(G);var d=this._indicatorsElement.children[this._getItemIndex(a)];if(d){(0,b.default)(d).addClass(G)}}}},{key:"_updateInterval",value:function _updateInterval(){var a=this._activeElement||this._element.querySelector(H);if(!a){return}var b=parseInt(a.getAttribute("data-interval"),10);if(b){this._config.defaultInterval=this._config.defaultInterval||this._config.interval;this._config.interval=b}else{this._config.interval=this._config.defaultInterval||this._config.interval}}},{key:"_slide",value:function _slide(a,d){var e=this,f=this._element.querySelector(H),g=this._getItemIndex(f),h=d||f&&this._getItemByDirection(a,f),i=this._getItemIndex(h),j=!!this._interval,k,l,m;if(a===r){k="carousel-item-left";l="carousel-item-next";m="left"}else{k="carousel-item-right";l="carousel-item-prev";m="right"}if(h&&(0,b.default)(h).hasClass(G)){this._isSliding=!1;return}var n=this._triggerSlideEvent(h,m);if(n.isDefaultPrevented()){return}if(!f||!h){return}this._isSliding=!0;if(j){this.pause()}this._setActiveIndicatorElement(h);this._activeElement=h;var o=b.default.Event(u,{relatedTarget:h,direction:m,from:g,to:i});if((0,b.default)(this._element).hasClass("slide")){(0,b.default)(h).addClass(l);c.default.reflow(h);(0,b.default)(f).addClass(k);(0,b.default)(h).addClass(k);var p=c.default.getTransitionDurationFromElement(f);(0,b.default)(f).one(c.default.TRANSITION_END,function(){(0,b.default)(h).removeClass("".concat(k," ").concat(l)).addClass(G);(0,b.default)(f).removeClass("".concat(G," ").concat(l," ").concat(k));e._isSliding=!1;setTimeout(function(){return(0,b.default)(e._element).trigger(o)},0)}).emulateTransitionEnd(p)}else{(0,b.default)(f).removeClass(G);(0,b.default)(h).addClass(G);this._isSliding=!1;(0,b.default)(this._element).trigger(o)}if(j){this.cycle()}}}],[{key:"_jQueryInterface",value:function _jQueryInterface(c){return this.each(function(){var d=(0,b.default)(this).data(l),f=g({},p,{},(0,b.default)(this).data());if("object"===e(c)){f=g({},f,{},c)}var h="string"==typeof c?c:f.slide;if(!d){d=new a(this,f);(0,b.default)(this).data(l,d)}if("number"==typeof c){d.to(c)}else if("string"==typeof h){if("undefined"==typeof d[h]){throw new TypeError("No method named \"".concat(h,"\""))}d[h]()}else if(f.interval&&f.ride){d.pause();d.cycle()}})}},{key:"_dataApiClickHandler",value:function _dataApiClickHandler(d){var e=c.default.getSelectorFromElement(this);if(!e){return}var f=(0,b.default)(e)[0];if(!f||!(0,b.default)(f).hasClass("carousel")){return}var h=g({},(0,b.default)(f).data(),{},(0,b.default)(this).data()),i=this.getAttribute("data-slide-to");if(i){h.interval=!1}a._jQueryInterface.call((0,b.default)(f),h);if(i){(0,b.default)(f).data(l).to(i)}d.preventDefault()}},{key:"VERSION",get:function get(){return"4.6.0"}},{key:"Default",get:function get(){return p}}]);return a}();(0,b.default)(document).on(F,"[data-slide], [data-slide-to]",J._dataApiClickHandler);(0,b.default)(window).on(E,function(){for(var a=[].slice.call(document.querySelectorAll("[data-ride=\"carousel\"]")),c=0,d=a.length,e;c<d;c++){e=(0,b.default)(a[c]);J._jQueryInterface.call(e,e.data())}});b.default.fn.carousel=J._jQueryInterface;b.default.fn.carousel.Constructor=J;b.default.fn.carousel.noConflict=function(){b.default.fn.carousel=o;return J._jQueryInterface};a.default=J;return a.default});
//# sourceMappingURL=https://lms.iust.ac.ir/lib/jssourcemap.php/theme_boost/bootstrap/carousel.js
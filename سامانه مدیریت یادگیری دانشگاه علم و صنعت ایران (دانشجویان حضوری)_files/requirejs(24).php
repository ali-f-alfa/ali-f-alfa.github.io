define ("core/notification",["exports","core/pending","core/log"],function(a,b,c){"use strict";Object.defineProperty(a,"__esModule",{value:!0});a.default=a.init=a.exception=a.saveCancel=a.confirm=a.alert=a.addNotification=a.fetchNotifications=void 0;b=d(b);c=d(c);var q="undefined"!=typeof window?window:"undefined"!=typeof self?self:"undefined"!=typeof global?global:{};function d(a){return a&&a.__esModule?a:{default:a}}function e(a,b){return k(a)||j(a,b)||g(a,b)||f()}function f(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}function g(a,b){if(!a)return;if("string"==typeof a)return h(a,b);var c=Object.prototype.toString.call(a).slice(8,-1);if("Object"===c&&a.constructor)c=a.constructor.name;if("Map"===c||"Set"===c)return Array.from(c);if("Arguments"===c||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(c))return h(a,b)}function h(a,b){if(null==b||b>a.length)b=a.length;for(var c=0,d=Array(b);c<b;c++){d[c]=a[c]}return d}function j(a,b){if("undefined"==typeof Symbol||!(Symbol.iterator in Object(a)))return;var c=[],d=!0,e=!1,f=void 0;try{for(var g=a[Symbol.iterator](),h;!(d=(h=g.next()).done);d=!0){c.push(h.value);if(b&&c.length===b)break}}catch(a){e=!0;f=a}finally{try{if(!d&&null!=g["return"])g["return"]()}finally{if(e)throw f}}return c}function k(a){if(Array.isArray(a))return a}function l(a,b){var c=Object.keys(a);if(Object.getOwnPropertySymbols){var d=Object.getOwnPropertySymbols(a);if(b)d=d.filter(function(b){return Object.getOwnPropertyDescriptor(a,b).enumerable});c.push.apply(c,d)}return c}function m(a){for(var b=1,c;b<arguments.length;b++){c=null!=arguments[b]?arguments[b]:{};if(b%2){l(Object(c),!0).forEach(function(b){n(a,b,c[b])})}else if(Object.getOwnPropertyDescriptors){Object.defineProperties(a,Object.getOwnPropertyDescriptors(c))}else{l(Object(c)).forEach(function(b){Object.defineProperty(a,b,Object.getOwnPropertyDescriptor(c,b))})}}return a}function n(a,b,c){if(b in a){Object.defineProperty(a,b,{value:c,enumerable:!0,configurable:!0,writable:!0})}else{a[b]=c}return a}function o(a,b,c,d,e,f,g){try{var h=a[f](g),i=h.value}catch(a){c(a);return}if(h.done){b(i)}else{Promise.resolve(i).then(d,e)}}function p(a){return function(){var b=this,c=arguments;return new Promise(function(d,e){var h=a.apply(b,c);function f(a){o(h,d,e,f,g,"next",a)}function g(a){o(h,d,e,f,g,"throw",a)}f(void 0)})}}var r=M.cfg.contextid,s={success:"core/notification_success",info:"core/notification_info",warning:"core/notification_warning",error:"core/notification_error"},t="user-notifications",u={notificationRegion:"#".concat(t),fallbackRegionParents:["#region-main","[role=\"main\"]","body"]},v=function(){var a=A();if(a){return!1}var b=document.createElement("span");b.id=t;return u.fallbackRegionParents.some(function(a){var c=document.querySelector(a);if(c){c.prepend(b);return!0}return!1})},w=function(){var a=p(regeneratorRuntime.mark(function a(){var b;return regeneratorRuntime.wrap(function(a){while(1){switch(a.prev=a.next){case 0:a.next=2;return"function"==typeof q.define&&q.define.amd?new Promise(function(a,b){q.require(["core/ajax"],a,b)}):"undefined"!=typeof module&&module.exports&&"undefined"!=typeof require||"undefined"!=typeof module&&module.component&&q.require&&"component"===q.require.loader?Promise.resolve(require(("core/ajax"))):Promise.resolve(q["core/ajax"]);case 2:b=a.sent;return a.abrupt("return",b.call([{methodname:"core_fetch_notifications",args:{contextid:r}}])[0].then(x));case 4:case"end":return a.stop();}}},a)}));return function(){return a.apply(this,arguments)}}();a.fetchNotifications=w;var x=function(a){if(!a.length){return Promise.resolve()}var c=new b.default("core/notification:addNotifications");a.forEach(function(a){return z(a.template,a.variables)});return c.resolve()},y=function(a){var c=new b.default("core/notification:addNotifications"),d=s.error;a=m({closebutton:!0,announce:!0,type:"error"},a);if(a.template){d=a.template;delete a.template}else if(a.type){if("undefined"!=typeof s[a.type]){d=s[a.type]}delete a.type}return z(d,a).then(c.resolve)};a.addNotification=y;var z=function(){var a=p(regeneratorRuntime.mark(function a(d,e){var f,g;return regeneratorRuntime.wrap(function(a){while(1){switch(a.prev=a.next){case 0:if(!("undefined"==typeof e.message||!e.message)){a.next=3;break}c.default.debug("Notification received without content. Skipping.");return a.abrupt("return");case 3:f=new b.default("core/notification:renderNotification");a.next=6;return"function"==typeof q.define&&q.define.amd?new Promise(function(a,b){q.require(["core/templates"],a,b)}):"undefined"!=typeof module&&module.exports&&"undefined"!=typeof require||"undefined"!=typeof module&&module.component&&q.require&&"component"===q.require.loader?Promise.resolve(require(("core/templates"))):Promise.resolve(q["core/templates"]);case 6:g=a.sent;g.renderForPromise(d,e).then(function(a){var b=a.html,c=a.js,d=void 0===c?"":c;g.prependNodeContents(A(),b,d);return}).then(f.resolve).catch(E);case 8:case"end":return a.stop();}}},a)}));return function(){return a.apply(this,arguments)}}(),A=function(){return document.querySelector(u.notificationRegion)},B=function(){var a=p(regeneratorRuntime.mark(function a(c,d,e){var f,g;return regeneratorRuntime.wrap(function(a){while(1){switch(a.prev=a.next){case 0:f=new b.default("core/notification:alert");a.next=3;return"function"==typeof q.define&&q.define.amd?new Promise(function(a,b){q.require(["core/modal_factory"],a,b)}):"undefined"!=typeof module&&module.exports&&"undefined"!=typeof require||"undefined"!=typeof module&&module.component&&q.require&&"component"===q.require.loader?Promise.resolve(require(("core/modal_factory"))):Promise.resolve(q["core/modal_factory"]);case 3:g=a.sent;return a.abrupt("return",g.create({type:g.types.ALERT,body:d,title:c,buttons:{cancel:e},removeOnClose:!0}).then(function(a){a.show();f.resolve();return a}));case 5:case"end":return a.stop();}}},a)}));return function(){return a.apply(this,arguments)}}();a.alert=B;var C=function(a,b,c,d,e,f){return D(a,b,c,e,f)};a.confirm=C;var D=function(){var a=p(regeneratorRuntime.mark(function a(c,d,f,g,h){var i,j,k,l,m;return regeneratorRuntime.wrap(function(a){while(1){switch(a.prev=a.next){case 0:i=new b.default("core/notification:confirm");a.next=3;return Promise.all(["function"==typeof q.define&&q.define.amd?new Promise(function(a,b){q.require(["core/modal_factory"],a,b)}):"undefined"!=typeof module&&module.exports&&"undefined"!=typeof require||"undefined"!=typeof module&&module.component&&q.require&&"component"===q.require.loader?Promise.resolve(require(("core/modal_factory"))):Promise.resolve(q["core/modal_factory"]),"function"==typeof q.define&&q.define.amd?new Promise(function(a,b){q.require(["core/modal_events"],a,b)}):"undefined"!=typeof module&&module.exports&&"undefined"!=typeof require||"undefined"!=typeof module&&module.component&&q.require&&"component"===q.require.loader?Promise.resolve(require(("core/modal_events"))):Promise.resolve(q["core/modal_events"])]);case 3:j=a.sent;k=e(j,2);l=k[0];m=k[1];return a.abrupt("return",l.create({type:l.types.SAVE_CANCEL,title:c,body:d,buttons:{save:f},removeOnClose:!0}).then(function(a){a.show();a.getRoot().on(m.save,g);a.getRoot().on(m.cancel,h);i.resolve();return a}));case 8:case"end":return a.stop();}}},a)}));return function(){return a.apply(this,arguments)}}();a.saveCancel=D;var E=function(){var a=p(regeneratorRuntime.mark(function a(c){var d,e,f,g;return regeneratorRuntime.wrap(function(a){while(1){switch(a.prev=a.next){case 0:d=new b.default("core/notification:displayException");if(!c.stack){c.stack=""}if(c.debuginfo){c.stack+=c.debuginfo+"\n"}if(!c.backtrace&&c.stacktrace){c.backtrace=c.stacktrace}if(c.backtrace){c.stack+=c.backtrace;e=c.backtrace.match(/line ([^ ]*) of/);f=c.backtrace.match(/ of ([^:]*): /);if(e&&e[1]){c.lineNumber=e[1]}if(f&&f[1]){c.fileName=f[1];if(30<c.fileName.length){c.fileName="..."+c.fileName.substr(c.fileName.length-27)}}}if("undefined"==typeof c.name&&c.errorcode){c.name=c.errorcode}a.next=8;return"function"==typeof q.define&&q.define.amd?new Promise(function(a,b){q.require(["core/yui"],a,b)}):"undefined"!=typeof module&&module.exports&&"undefined"!=typeof require||"undefined"!=typeof module&&module.component&&q.require&&"component"===q.require.loader?Promise.resolve(require(("core/yui"))):Promise.resolve(q["core/yui"]);case 8:g=a.sent;g.use("moodle-core-notification-exception",function(){var a=new M.core.exception(c);a.show();d.resolve()});case 10:case"end":return a.stop();}}},a)}));return function(){return a.apply(this,arguments)}}();a.exception=E;var F=function(a,b){r=a;v();x(b)};a.init=F;a.default={init:F,fetchNotifications:w,addNotification:y,alert:B,confirm:C,saveCancel:D,exception:E};return a.default});
//# sourceMappingURL=https://lms.iust.ac.ir/lib/jssourcemap.php/core/notification.js
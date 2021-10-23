define ("theme_boost/bootstrap/tools/sanitizer",["exports"],function(a){"use strict";Object.defineProperty(a,"__esModule",{value:!0});a.sanitizeHtml=function(a,c,d){if(0===a.length){return a}if(d&&"function"==typeof d){return d(a)}for(var e=new window.DOMParser,f=e.parseFromString(a,"text/html"),g=Object.keys(c),h=[].slice.call(f.body.querySelectorAll("*")),j=function(a){var d=h[a],e=d.nodeName.toLowerCase();if(-1===g.indexOf(d.nodeName.toLowerCase())){d.parentNode.removeChild(d);return"continue"}var f=[].slice.call(d.attributes),i=[].concat(c["*"]||[],c[e]||[]);f.forEach(function(a){if(!b(a,i)){d.removeAttribute(a.nodeName)}})},k=0,l=h.length,m;k<l;k++){m=j(k,l);if("continue"===m)continue}return f.body.innerHTML};a.DefaultWhitelist=void 0;var c=["background","cite","href","itemtype","longdesc","poster","src","xlink:href"];a.DefaultWhitelist={"*":["class","dir","id","lang","role",/^aria-[\w-]*$/i],a:["target","href","title","rel"],area:[],b:[],br:[],col:[],code:[],div:[],em:[],hr:[],h1:[],h2:[],h3:[],h4:[],h5:[],h6:[],i:[],img:["src","srcset","alt","title","width","height"],li:[],ol:[],p:[],pre:[],s:[],small:[],span:[],sub:[],sup:[],strong:[],u:[],ul:[]};function b(a,b){var d=a.nodeName.toLowerCase();if(-1!==b.indexOf(d)){if(-1!==c.indexOf(d)){return!!(a.nodeValue.match(/^(?:(?:https?|mailto|ftp|tel|file):|[^#&/:?]*(?:[#/?]|$))/gi)||a.nodeValue.match(/^data:(?:image\/(?:bmp|gif|jpeg|jpg|png|tiff|webp)|video\/(?:mpeg|mp4|ogg|webm)|audio\/(?:mp3|oga|ogg|opus));base64,[\d+/a-z]+=*$/i))}return!0}for(var e=b.filter(function(a){return a instanceof RegExp}),f=0,g=e.length;f<g;f++){if(d.match(e[f])){return!0}}return!1}});
//# sourceMappingURL=https://lms.iust.ac.ir/lib/jssourcemap.php/theme_boost/bootstrap/tools/sanitizer.js
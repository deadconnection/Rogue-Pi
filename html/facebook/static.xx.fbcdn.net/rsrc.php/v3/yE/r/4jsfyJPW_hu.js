if (self.CavalryLogger) { CavalryLogger.start_js(["SEe1e"]); }

__d("MTouchClick",["MCache","Stratcom","Vector"],(function(a,b,c,d,e,f,g,h,i){__p&&__p();var j="MTouchClick.RECENT_CLICKS",k=20,l=2e3,m=["click"],n=null,o=null,p=navigator.userAgent.indexOf("Android")===-1&&navigator.userAgent.match(/^Mozilla\/.*Mobile;.*Gecko\/.*Firefox/g),q=null,r=0,s=200;function t(event){q=event.target,r=event.timeStamp}function u(){q=null,r=0}function v(){var a=x(),b=Date.now();a=a.filter(function(a){return b-a.time<l});g.setItem(j,a);return a.map(function(a){return a.click})}function w(a){var b=Date.now();a=a.map(function(a){return{click:a,time:b}});a=a.concat(x());g.setItem(j,a)}function x(){var a=g.getItem(j);return Array.isArray(a)?a:[]}function y(a,b,event){var c=document.createEvent("MouseEvents"),d=event?event.getTouch():{};event=event?event.getRawEvent():{};c.initMouseEvent(b,!0,!0,window,0,event.screenX||0,event.screenY||0,d.clientX||0,d.clientY||0,!1,!1,!1,!1,0,null);a.dispatchEvent(c);return c}var z={hasTouchEvents:function(){return"ontouchstart"in window},click:function(a,event){__p&&__p();if(event){if(event._processed)return;event._processed=!0}if(p&&a.tagName==="INPUT"&&a.getAttribute("type")==="file"){a.click();return}m.forEach(function(b){y(a,b,event)});var b=event?event.getRawEvent():{target:a,timeStamp:Date.now()};t(b);z.killGhostClicksNearTouch()},killGhostClicksNearTouch:function(){w([n,o])}};(function(){__p&&__p();if(!z.hasTouchEvents())return;function a(a,b){return Math.abs(a.x-b.x)<=k&&Math.abs(a.y-b.y)<=k}function b(b){__p&&__p();var c=v();if(b.detail>0&&c.length>0){b=e(b);for(var d=0;d<c.length;d++){var f=c[d];if(a(b.client,f.client)||a(b.screen,f.screen))return!0}}return!1}function c(a){var b=v();b=b.length>0&&a.target===q&&Math.abs(a.timeStamp-r)<s;b&&u();return b}function d(event){(b(event)||c(event))&&(event.preventDefault(),event.stopPropagation())}m.forEach(function(a){document.addEventListener(a,d,!0)});function e(event){return{client:new i(event.clientX,event.clientY),screen:new i(event.screenX,event.screenY)}}h.listen("touchstart",null,function(event){var a=event.getRawEvent().touches[0];n=e(a);o=e(a)});h.listen("touchmove",null,function(event){var a=event.getRawEvent().touches[0];z._touchEndPosition=e(a)})})();e.exports=z}),null);
__d("MTouchable",["setTimeoutAcrossTransitions","CSS","MLegacyDataStore","MTouchClick","Stratcom","MTouchableSyntheticClickGK"],(function(a,b,c,d,e,f,g,h,i,j,k){__p&&__p();var l=b("MTouchableSyntheticClickGK").USE_SYNTHETIC_CLICK,m="touchable",n=3,o=160,p,q,r,s,t,u;function a(event){__p&&__p();q&&B(!1);q=event.getNode(m);if(q.getAttribute("disabled")!==null){event.prevent();q=null;return}var a=event.getRawEvent().targetTouches[0];r=a.target;z();p=[k.listen("touchmove",m,v),k.listen("touchend",m,w),k.listen("touchcancel",m,x)];s={x:a.screenX,y:a.screenY};t=g(function(){q&&B(!0)},o)}function v(event){q&&C(event)&&(B(!1),y())}function w(event){if(q){var a=!u;B(!0);l&&!i.get(q).nativeClick&&r.getAttribute("target")!="_blank"&&j.click(r,event);A(a)}else j.killGhostClicksNearTouch(),A()}function x(){q&&B(!1),A()}function y(a){clearTimeout(t),q&&g(B.bind(null,!1,q),a?o:0),u=!1,r=q=s=null}function z(){p&&(p.forEach(function(a){a.remove()}),p=[])}function A(a){y(a),z()}function B(a,b){b||(u=a),h.conditionClass(b||q,"touched",a)}function C(event){var a=event.getRawEvent().targetTouches[0],b=event.getNode("moving-box")||document.documentElement.scrollWidth>window.innerWidth;return Math.abs(s.y-a.screenY)>=n||b&&Math.abs(s.x-a.screenX)>=n}j.hasTouchEvents()&&k.listen("touchstart",m,a)}),null);
__d("forEachObject",[],(function(a,b,c,d,e,f){"use strict";var g=Object.prototype.hasOwnProperty;function a(a,b,c){for(var d in a){var e=d;g.call(a,e)&&b.call(c,a[e],e,a)}}e.exports=a}),null);
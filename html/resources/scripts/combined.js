// usage: log('inside coolFunc', this, arguments);
// paulirish.com/2009/log-a-lightweight-wrapper-for-consolelog/
window.log = function f(){ log.history = log.history || []; log.history.push(arguments); if(this.console) { var args = arguments, newarr; args.callee = args.callee.caller; newarr = [].slice.call(args); if (typeof console.log === 'object') log.apply.call(console.log, console, newarr); else console.log.apply(console, newarr);}};

// make it safe to use console.log always
(function(b){function c(){}for(var d="assert,clear,count,debug,dir,dirxml,error,exception,firebug,group,groupCollapsed,groupEnd,info,log,memoryProfile,memoryProfileEnd,profile,profileEnd,table,time,timeEnd,timeStamp,trace,warn".split(","),a;a=d.pop();){b[a]=b[a]||c}})((function(){try
{console.log();return window.console;}catch(err){return window.console={};}})());

// jQuery plugins minified and concatenated separately
/*! jQuery corner plugin: simple corner rounding http://jquery.malsup.com/corner/
    version 2.12 (23-MAY-2011) by Dave Methvin and Mike Alsup */
(function(c){var a=document.createElement("div").style,h=a.MozBorderRadius!==undefined,j=a.WebkitBorderRadius!==undefined,e=a.borderRadius!==undefined||a.BorderRadius!==undefined,d=document.documentMode||0,l=c.browser.msie&&((c.browser.version<8&&!d)||d<8),i=c.browser.msie&&(function(){var n=document.createElement("div");
try{n.style.setExpression("width","0+0");n.style.removeExpression("width")}catch(m){return false}return true})();c.support=c.support||{};
c.support.borderRadius=h||j||e;function g(m,n){return parseInt(c.css(m,n))||0}function k(m){m=parseInt(m).toString(16);return(m.length<2)?"0"+m:m
}function b(o){while(o){var m=c.css(o,"backgroundColor"),n;if(m&&m!="transparent"&&m!="rgba(0, 0, 0, 0)"){if(m.indexOf("rgb")>=0){n=m.match(/\d+/g);
return"#"+k(n[0])+k(n[1])+k(n[2])}return m}if(o.nodeName.toLowerCase()=="html"){break}o=o.parentNode}return"#ffffff"}function f(o,m,n){switch(o){case"round":return Math.round(n*(1-Math.cos(Math.asin(m/n))));
case"cool":return Math.round(n*(1+Math.cos(Math.asin(m/n))));case"sharp":return n-m;case"bite":return Math.round(n*(Math.cos(Math.asin((n-m-1)/n))));
case"slide":return Math.round(n*(Math.atan2(m,n/m)));case"jut":return Math.round(n*(Math.atan2(n,(n-m-1))));case"curl":return Math.round(n*(Math.atan(m)));
case"tear":return Math.round(n*(Math.cos(m)));case"wicked":return Math.round(n*(Math.tan(m)));case"long":return Math.round(n*(Math.sqrt(m)));
case"sculpt":return Math.round(n*(Math.log((n-m-1),n)));case"dogfold":case"dog":return(m&1)?(m+1):n;case"dog2":return(m&2)?(m+1):n;
case"dog3":return(m&3)?(m+1):n;case"fray":return(m%2)*n;case"notch":return n;case"bevelfold":case"bevel":return m+1;case"steep":return m/2+1;
case"invsteep":return(n-m)/2+1}}c.fn.corner=function(m){if(this.length==0){if(!c.isReady&&this.selector){var n=this.selector,o=this.context;
c(function(){c(n,o).corner(m)})}return this}return this.each(function(v){var u=c(this),D=[u.attr(c.fn.corner.defaults.metaAttr)||"",m||""].join(" ").toLowerCase(),K=/keep/.test(D),C=((D.match(/cc:(#[0-9a-f]+)/)||[])[1]),p=((D.match(/sc:(#[0-9a-f]+)/)||[])[1]),G=parseInt((D.match(/(\d+)px/)||[])[1])||10,E=/round|bevelfold|bevel|notch|bite|cool|sharp|slide|jut|curl|tear|fray|wicked|sculpt|long|dog3|dog2|dogfold|dog|invsteep|steep/,r=((D.match(E)||["round"])[0]),s=/dogfold|bevelfold/.test(D),q={T:0,B:1},z={TL:/top|tl|left/.test(D),TR:/top|tr|right/.test(D),BL:/bottom|bl|left/.test(D),BR:/bottom|br|right/.test(D)},H,N,F,I,y,O,B,L,J,x,M,P,A,t;
if(!z.TL&&!z.TR&&!z.BL&&!z.BR){z={TL:1,TR:1,BL:1,BR:1}}if(c.fn.corner.defaults.useNative&&r=="round"&&(e||h||j)&&!C&&!p){if(z.TL){u.css(e?"border-top-left-radius":h?"-moz-border-radius-topleft":"-webkit-border-top-left-radius",G+"px")
}if(z.TR){u.css(e?"border-top-right-radius":h?"-moz-border-radius-topright":"-webkit-border-top-right-radius",G+"px")}if(z.BL){u.css(e?"border-bottom-left-radius":h?"-moz-border-radius-bottomleft":"-webkit-border-bottom-left-radius",G+"px")
}if(z.BR){u.css(e?"border-bottom-right-radius":h?"-moz-border-radius-bottomright":"-webkit-border-bottom-right-radius",G+"px")
}return}H=document.createElement("div");c(H).css({overflow:"hidden",height:"1px",minHeight:"1px",fontSize:"1px",backgroundColor:p||"transparent",borderStyle:"solid"});
N={T:parseInt(c.css(this,"paddingTop"))||0,R:parseInt(c.css(this,"paddingRight"))||0,B:parseInt(c.css(this,"paddingBottom"))||0,L:parseInt(c.css(this,"paddingLeft"))||0};
if(typeof this.style.zoom!=undefined){this.style.zoom=1}if(!K){this.style.border="none"}H.style.borderColor=C||b(this.parentNode);
F=c(this).outerHeight();for(I in q){y=q[I];if((y&&(z.BL||z.BR))||(!y&&(z.TL||z.TR))){H.style.borderStyle="none "+(z[I+"R"]?"solid":"none")+" none "+(z[I+"L"]?"solid":"none");
O=document.createElement("div");c(O).addClass("jquery-corner");B=O.style;y?this.appendChild(O):this.insertBefore(O,this.firstChild);
if(y&&F!="auto"){if(c.css(this,"position")=="static"){this.style.position="relative"}B.position="absolute";B.bottom=B.left=B.padding=B.margin="0";
if(i){B.setExpression("width","this.parentNode.offsetWidth")}else{B.width="100%"}}else{if(!y&&c.browser.msie){if(c.css(this,"position")=="static"){this.style.position="relative"
}B.position="absolute";B.top=B.left=B.right=B.padding=B.margin="0";if(i){L=g(this,"borderLeftWidth")+g(this,"borderRightWidth");
B.setExpression("width","this.parentNode.offsetWidth - "+L+'+ "px"')}else{B.width="100%"}}else{B.position="relative";B.margin=!y?"-"+N.T+"px -"+N.R+"px "+(N.T-G)+"px -"+N.L+"px":(N.B-G)+"px -"+N.R+"px -"+N.B+"px -"+N.L+"px"
}}for(J=0;J<G;J++){x=Math.max(0,f(r,J,G));M=H.cloneNode(false);M.style.borderWidth="0 "+(z[I+"R"]?x:0)+"px 0 "+(z[I+"L"]?x:0)+"px";
y?O.appendChild(M):O.insertBefore(M,O.firstChild)}if(s&&c.support.boxModel){if(y&&l){continue}for(P in z){if(!z[P]){continue
}if(y&&(P=="TL"||P=="TR")){continue}if(!y&&(P=="BL"||P=="BR")){continue}A={position:"absolute",border:"none",margin:0,padding:0,overflow:"hidden",backgroundColor:H.style.borderColor};
t=c("<div/>").css(A).css({width:G+"px",height:"1px"});switch(P){case"TL":t.css({bottom:0,left:0});break;case"TR":t.css({bottom:0,right:0});
break;case"BL":t.css({top:0,left:0});break;case"BR":t.css({top:0,right:0});break}O.appendChild(t[0]);var Q=c("<div/>").css(A).css({top:0,bottom:0,width:"1px",height:G+"px"});
switch(P){case"TL":Q.css({left:G});break;case"TR":Q.css({right:G});break;case"BL":Q.css({left:G});break;case"BR":Q.css({right:G});
break}O.appendChild(Q[0])}}}}})};c.fn.uncorner=function(){if(e||h||j){this.css(e?"border-radius":h?"-moz-border-radius":"-webkit-border-radius",0)
}c("div.jquery-corner",this).remove();return this};c.fn.corner.defaults={useNative:true,metaAttr:"data-corner"}})(jQuery);
/*! http://mths.be/placeholder v2.0.4 by @mathias */
(function(g,i,d){var a="placeholder" in i.createElement("input"),e="placeholder" in i.createElement("textarea"),j=d.fn,c=d.valHooks,l,k;
if(a&&e){k=j.placeholder=function(){return this};k.input=k.textarea=true}else{k=j.placeholder=function(){return this.filter((a?"textarea":":input")+"[placeholder]").not(".placeholder").bind({"focus.placeholder":b,"blur.placeholder":f}).data("placeholder-enabled",true).trigger("blur.placeholder").end()
};k.input=a;k.textarea=e;l={get:function(n){var m=d(n);return m.data("placeholder-enabled")&&m.hasClass("placeholder")?"":n.value
},set:function(n,o){var m=d(n);if(!m.data("placeholder-enabled")){return n.value=o}if(o==""){n.value=o;if(n!=i.activeElement){f.call(n)
}}else{if(m.hasClass("placeholder")){b.call(n,true,o)||(n.value=o)}else{n.value=o}}return m}};a||(c.input=l);e||(c.textarea=l);
d(function(){d(i).delegate("form","submit.placeholder",function(){var m=d(".placeholder",this).each(b);setTimeout(function(){m.each(f)
},10)})});d(g).bind("beforeunload.placeholder",function(){d(".placeholder").each(function(){this.value=""})})}function h(n){var m={},o=/^jQuery\d+$/;
d.each(n.attributes,function(q,p){if(p.specified&&!o.test(p.name)){m[p.name]=p.value}});return m}function b(n,o){var m=this,p=d(m);
if(m.value==p.attr("placeholder")&&p.hasClass("placeholder")){if(p.data("placeholder-password")){p=p.hide().next().show().attr("id",p.removeAttr("id").data("placeholder-id"));
if(n===true){return p[0].value=o}p.focus()}else{m.value="";p.removeClass("placeholder")}}}function f(){var r,m=this,q=d(m),n=q,p=this.id;
if(m.value==""){if(m.type=="password"){if(!q.data("placeholder-textinput")){try{r=q.clone().attr({type:"text"})}catch(o){r=d("<input>").attr(d.extend(h(this),{type:"text"}))
}r.removeAttr("name").data({"placeholder-password":true,"placeholder-id":p}).bind("focus.placeholder",b);q.data({"placeholder-textinput":r,"placeholder-id":p}).before(r)
}q=q.removeAttr("id").hide().prev().attr("id",p).show()}q.addClass("placeholder");q[0].value=q.attr("placeholder")}else{q.removeClass("placeholder")
}}}(this,document,jQuery));
/*! Mobile Boilerplate startup script */
$(document).ready(function(){if($.fn.placeholder){$("input, textarea").placeholder()
}if(MBP.scaleFix){MBP.scaleFix()}});
/*! MBP - Mobile boilerplate helper functions */
(function(a){window.MBP=window.MBP||{};MBP.viewportmeta=a.querySelector&&a.querySelector('meta[name="viewport"]');
MBP.ua=navigator.userAgent;MBP.iOSBrowser=/iPhone|iPad|iPod/.test(MBP.ua)&&!/Opera Mini/.test(MBP.ua);MBP.viewportzoom="width=device-width, minimum-scale=0.25, maximum-scale=5.0, minimal-ui";
MBP.viewportnozoom="width=device-width, minimum-scale=1.0, maximum-scale=1.0, minimal-ui";MBP.scaleFix=function(){if(MBP.viewportmeta&&MBP.iOSBrowser){MBP.viewportmeta.content=MBP.viewportnozoom;
a.addEventListener("gesturestart",MBP.gestureStart,false)}};MBP.gestureStart=function(){MBP.viewportmeta.content=MBP.viewportzoom
};c(a,"orientationchange",MBP.scaleFix,false);$("input, select, textarea").bind("focus blur",function(d){if(MBP.iOSBrowser){MBP.viewportmeta.content=d.type=="blur"?MBP.viewportzoom:MBP.viewportnozoom
}});(function(h){var g=h.document;if(!location.hash&&h.addEventListener){window.scrollTo(0,1);var f=1,e=function(){return h.pageYOffset||g.compatMode==="CSS1Compat"&&g.documentElement.scrollTop||g.body.scrollTop||0
},d=setInterval(function(){if(g.body){clearInterval(d);f=e();h.scrollTo(0,f===1?0:1)}},15);h.addEventListener("load",function(){setTimeout(function(){if(e()<20){h.scrollTo(0,f===1?0:1)
}},0)})}})(this);function c(h,f,g,d){if("addEventListener" in h){try{h.addEventListener(f,g,d)}catch(i){if(typeof g=="object"&&g.handleEvent){h.addEventListener(f,function(j){g.handleEvent.call(g,j)
},d)}else{throw i}}}else{if("attachEvent" in h){if(typeof g=="object"&&g.handleEvent){h.attachEvent("on"+f,function(){g.handleEvent.call(g)
})}else{h.attachEvent("on"+f,g)}}}}function b(h,f,g,d){if("removeEventListener" in h){try{h.removeEventListener(f,g,d)}catch(i){if(typeof g=="object"&&g.handleEvent){h.removeEventListener(f,function(j){g.handleEvent.call(g,j)
},d)}else{throw i}}}else{if("detachEvent" in h){if(typeof g=="object"&&g.handleEvent){h.detachEvent("on"+f,function(){g.handleEvent.call(g)
})}else{h.detachEvent("on"+f,g)}}}}})(document);
/*! activityIndicator.js */
var ActivityIndicator=(function(){var c="#wrapper",b="#activity-indicator-overlay";function a(d){$("#activity-indicator-text").html(d)
}return{initialise:function(d){var e="<div id='activity-indicator-overlay' style='display:none;'><img id='activity-indicator' src='"+d+"' /><div id='activity-indicator-text'></div></div>";
$("body").append(e)},show:function(d){a(d);$(c).hide();$(b).css("display","block");$(b).show()},hide:function(){$(b).css("display","none");
$(b).hide();$(c).show()}}}());
/*! countdown.js */
var expireTime=new Date();function countDown(a){expireTime.setTime(expireTime.getTime()+a);countBackWrapper()
}function countBackWrapper(){var a=countBack();if(1==a){setTimeout(countBackWrapper,1000)}}function countBack(){var b=new Date(),a=expireTime.getTime()-b.getTime()+60000;
if(a<=60000){setTimeDisplay(EXPIRED);return 0}updateTimeRemaining(a);return 1}function updateTimeRemaining(a){var b=86400000;
if(a>=b){setTimeDisplay(GREATER_THAN_DAY)}else{setTimeDisplay(formatTimeRemainingText(a))}}function setTimeDisplay(a){document.getElementById("timeRemaining").innerHTML=a
}function formatTimeRemainingText(a){var b=LESS_THAN_DAY.replace("{0}",convertTimeRemaining(a));return b}function convertTimeRemaining(b){var e=new Date(b),c=e.getUTCMinutes(),a=e.getUTCHours();
if(e.getUTCMinutes()<10){c="0"+c}if(e.getUTCHours()<10){a="0"+a}return a+":"+c};
var waitForFinalEvent=(function(){var a={};return function(d,b,c){if(!c){c="Don't call this twice without a uniqueId"}if(a[c]){clearTimeout(a[c])
}a[c]=setTimeout(d,b)}})();

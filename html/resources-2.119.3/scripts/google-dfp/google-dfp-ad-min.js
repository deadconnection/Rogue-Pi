(function(i){var g={sizeMapping:[[[992,0],[[640,100],"fluid"]],[[0,0],[[320,50],"fluid"]]],collapseEmptyDiv:true,safeFrameAllowOverlayExpansion:true,safeFrameAllowPushExpansion:true};
var h={sizeMapping:[[[728,0],[[728,90],"fluid"]],[[500,0],[]],[[0,0],[[320,50],"fluid"]]],collapseEmptyDiv:true,safeFrameAllowOverlayExpansion:true,safeFrameAllowPushExpansion:true};
var k={sizeMapping:[[[1024,0],[[640,360],"fluid"]],[[768,0],[[480,270],"fluid"]],[[640,0],[[640,360],"fluid"]],[[480,0],[[480,270],"fluid"]],[[0,0],[[320,180],"fluid"]]],collapseEmptyDiv:true,safeFrameAllowOverlayExpansion:false,safeFrameAllowPushExpansion:true};
var b=true;var m=[];var j=-1;var c=[];var f=[];i.bannerAd=function(r,q,s){a(r,q,e(s,g))};i.mobileTabletBannerAd=function(r,q,s){a(r,q,e(s,h))
};i.mediaWindowAd=function(r,q,s){a(r,q,e(s,k))};i.customAd=function(r,q,s){if(!s.hasOwnProperty("sizeMapping")||!s.sizeMapping){d(s,"adWidthsByWindowWidth");
d(s,"adSizeRatio");if(s.hasOwnProperty("adWidthsByWindowWidth")){console.log("CloudGoogleDFP WARNING: using deprecated adWidthsByWindowWidth config")
}}a(r,q,s)};i.queueFunction=function(q){f.push(q)};i.directAd=function(r,q){i.queueFunction(function(s){var u={iu:r,sz:"640x360",t:$.param(s),c:Math.floor(Math.random()*100000)+10000,m:"text/html"};
var t="//pubads.g.doubleclick.net/gampad/adx?"+$.param(u);$("#"+q).load(t,function(){$("#google_image_div img").attr({width:"100%",height:"auto"})
})})};function a(x,u,t){var r=t.hasOwnProperty("collapseEmptyDiv")?t.collapseEmptyDiv:true;var w=t.hasOwnProperty("safeFrameAllowOverlayExpansion")?t.safeFrameAllowOverlayExpansion:false;
var y=t.hasOwnProperty("safeFrameAllowPushExpansion")?t.safeFrameAllowPushExpansion:false;var s=t.sizeMapping;if(!t.hasOwnProperty("sizeMapping")&&t.hasOwnProperty("adWidthsByWindowWidth")&&t.hasOwnProperty("adSizeRatio")){var v=t.hasOwnProperty("enableFluidSize")?t.enableFluidSize:false;
s=l(t.adWidthsByWindowWidth,t.adSizeRatio,v)}window.googletag=window.googletag||{};window.googletag.cmd=window.googletag.cmd||[];
if(b){window.googletag.cmd.push(function(){});window.addEventListener("resize",function(){waitForFinalEvent(function(){for(var z=0;
z<m.length;z++){if(document.body.clientWidth>m[z]){if(z!==j){j=z;window.googletag.pubads().refresh()}break}}},500,"CloudGoogleDFP.refreshAds")
},false);b=false}var q=p(s);window.googletag.cmd.push(function(){var z=window.googletag.defineSlot(x,q,u).setSafeFrameConfig({allowOverlayExpansion:w,allowPushExpansion:y}).defineSizeMapping(s).addService(window.googletag.pubads());
if(r){z.setCollapseEmptyDiv(true,true)}else{z.setCollapseEmptyDiv(false)}});c.push(u);m=s.reduce(function(z,B){var A=B[0][0];
if(z.indexOf(A)===-1){z.push(A);z.sort(function(D,C){return C-D})}return z},m)}i.displayQueuedAds=function(q){if(c.length!==0){n(q)
}if(f.length!==0){o(q)}};function n(q){window.googletag=window.googletag||{};window.googletag.cmd=window.googletag.cmd||[];
window.googletag.cmd.push(function(){var s=window.googletag.pubads();s.enableSingleRequest();s.setCentering(true);for(var r in q){s.setTargeting(r,q[r])
}if(_data.venue&&_data.venue.latitude){s.setLocation(_data.venue.latitude,_data.venue.longitude)}window.googletag.enableServices();
var t;while(c.length>0){t=c.shift();window.googletag.display(t)}})}function o(q){while(f.length>0){f.pop()(q)}}function d(r,q){if(!r[q]){console.log("CloudGoogleDFP WARNING: missing "+q)
}}function e(s,r){s=s||{};for(var q in r){if(!s.hasOwnProperty(q)){s[q]=r[q]}}return s}function l(r,q,s){return r.reduce(function(t,u){if(s){t.push([[u[0],0],[[u[1],u[1]*q],"fluid"]])
}else{t.push([[u[0],0],[[u[1],u[1]*q]]])}return t},[])}function p(s){var t=false;var r=s.reduce(function(u,w){var v=w[1];
v.reduce(function(x,y){if(y=="fluid"){t=true}else{x[y.toString()]=y}return x},u);return u},{});var q=Object.keys(r).sort(function(v,u){return r[v][0]-r[u][0]
}).reduce(function(u,v){u.push(r[v]);return u},[]);if(t){q.push("fluid")}return q}}(window.CloudGoogleDFP=window.CloudGoogleDFP||{}));
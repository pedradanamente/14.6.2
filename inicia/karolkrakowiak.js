/* **********************************************
     Begin scrolly.js
********************************************** */(function(){var __bind=function(fn,me){return function(){return fn.apply(me,arguments)}},Util=function(){function Util(){}Util.prototype.extend=function(custom,defaults){var key,value;for(key in custom){value=custom[key];value!=null&&(defaults[key]=value)}return defaults};Util.prototype.isMobile=function(agent){return/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(agent)};return Util}();this.Scrolly=function(){function Scrolly(options){options==null&&(options={});this.scrollCallback=__bind(this.scrollCallback,this);this.scrollHandler=__bind(this.scrollHandler,this);this.start=__bind(this.start,this);this.scrolled=!0;this.config=this.util().extend(options,this.defaults)}Scrolly.prototype.defaults={boxClass:"scrolly",animateClass:"animated",offset:0,mobile:!1};Scrolly.prototype.init=function(){var _ref;this.element=window.document.documentElement;return(_ref=document.readyState)==="interactive"||_ref==="complete"?this.start():document.addEventListener("DOMContentLoaded",this.start)};Scrolly.prototype.start=function(){var box,_i,_len,_ref;this.boxes=this.element.getElementsByClassName(this.config.boxClass);if(this.boxes.length){if(this.disabled())return this.resetStyle();_ref=this.boxes;for(_i=0,_len=_ref.length;_i<_len;_i++){box=_ref[_i];this.applyStyle(box,!0)}window.addEventListener("scroll",this.scrollHandler,!1);window.addEventListener("resize",this.scrollHandler,!1);return this.interval=setInterval(this.scrollCallback,50)}};Scrolly.prototype.stop=function(){window.removeEventListener("scroll",this.scrollHandler,!1);window.removeEventListener("resize",this.scrollHandler,!1);if(this.interval!=null)return clearInterval(this.interval)};Scrolly.prototype.show=function(box){this.applyStyle(box);return box.className=""+box.className+" "+this.config.animateClass};Scrolly.prototype.applyStyle=function(box,hidden){var duration=box.getAttribute("data-scrolly-duration"),delay=box.getAttribute("data-scrolly-delay"),iteration=box.getAttribute("data-scrolly-iteration");return box.setAttribute("style",this.customStyle(hidden,duration,delay,iteration))};Scrolly.prototype.resetStyle=function(){var box,_i,_len,_ref=this.boxes,_results=[];for(_i=0,_len=_ref.length;_i<_len;_i++){box=_ref[_i];_results.push(box.setAttribute("style","visibility: visible;"))}return _results};Scrolly.prototype.customStyle=function(hidden,duration,delay,iteration){var style=hidden?"visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;":"visibility: visible;";duration&&(style+="-webkit-animation-duration: "+duration+"; -moz-animation-duration: "+duration+"; animation-duration: "+duration+";");delay&&(style+="-webkit-animation-delay: "+delay+"; -moz-animation-delay: "+delay+"; animation-delay: "+delay+";");iteration&&(style+="-webkit-animation-iteration-count: "+iteration+"; -moz-animation-iteration-count: "+iteration+"; animation-iteration-count: "+iteration+";");return style};Scrolly.prototype.scrollHandler=function(){return this.scrolled=!0};Scrolly.prototype.scrollCallback=function(){var box;if(this.scrolled){this.scrolled=!1;this.boxes=function(){var _i,_len,_ref=this.boxes,_results=[];for(_i=0,_len=_ref.length;_i<_len;_i++){box=_ref[_i];if(!box)continue;if(this.isVisible(box)){this.show(box);continue}_results.push(box)}return _results}.call(this);if(!this.boxes.length)return this.stop()}};Scrolly.prototype.offsetTop=function(element){var top=element.offsetTop;while(element=element.offsetParent)top+=element.offsetTop;return top};Scrolly.prototype.isVisible=function(box){var offset=box.getAttribute("data-scrolly-offset")||this.config.offset,viewTop=window.pageYOffset,viewBottom=viewTop+this.element.clientHeight-offset,top=this.offsetTop(box),bottom=top+box.clientHeight;return top<=viewBottom&&bottom>=viewTop};Scrolly.prototype.util=function(){return this._util||(this._util=new Util)};Scrolly.prototype.disabled=function(){return!this.config.mobile&&this.util().isMobile(navigator.userAgent)};return Scrolly}()}).call(this);$("[data-modal]").on("click",function(){var dataModal=$(this).data("modal");$(this).toggleClass("opened");$("html, body").toggleClass("modal");$('[data-modal-id="'+dataModal+'"]').toggle().toggleClass("animated slideInDown");ga("send","event","link","click","menu");return!1});$(".contact a").on("click",function(){ga("send","event","link","click","contact")});$(".navigation a").on("click",function(){ga("send","event","link","click","social-networks")});$(".project a").on("click",function(){ga("send","event","button","click","project")});(new Scrolly).init();
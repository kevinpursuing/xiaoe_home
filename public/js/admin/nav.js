!function(t,e,o,i){"use strict";function s(e,o){this.element=e,this.options=t.extend({},a,o),this._defaults=a,this._name=n,this.init()}var n="navScroll",a={scrollTime:500,navItemClassName:"",navHeight:"auto",mobileDropdown:!1,mobileDropdownClassName:"",mobileBreakpoint:1024,scrollSpy:!1};s.prototype={init:function(){var o,i,s,n,a,l;if(o=this,i=o.options,s=o.element,n=""===i.navItemClassName?t(s).find("a"):t(s).find("."+i.navItemClassName),"auto"===i.navHeight)a=t(s).height();else{if(isNaN(i.navHeight))throw new Error("'navHeight' only accepts 'auto' or a number as value.");a=i.navHeight}if(n.on("click",function(o){var n,r;void 0!==(n=this.href.split("#")[1])&&(o.preventDefault(),r=t("#"+n).offset().top+1),l=void 0!==t(this).data("scrolltime")?t(this).data("scrolltime"):i.scrollTime,i.mobileDropdown&&t(e).width()>=0&&t(e).width()<=i.mobileBreakpoint&&(""===i.mobileDropdownClassName?t(s).find("ul").slideUp("fast"):t("."+i.mobileDropdownClassName).slideUp("fast")),t("html, body").stop().animate({scrollTop:r-a},l)}),i.scrollSpy){var r;r=[],n.each(function(){var e=t(this).attr("href");r.push(t(e))}),t(e).on("scroll",function(){o.scrollspy(n,r)}),o.scrollspy(n,r)}},scrollspy:function(e,i){var s,n,a;for(s=o.documentElement&&o.documentElement.scrollTop||o.body.scrollTop,a=e.length,n=0;a>n;n++){var l=i[n],r=t("body").css("font-size").replace(/[^0-9]/gi,"");s>=l.offset().top-5*parseInt(r)&&(e.removeClass("active"),t(e[n]).addClass("active"))}}},t.fn[n]=function(e){return this.each(function(){t.data(this,"plugin_"+n)||t.data(this,"plugin_"+n,new s(this,e))})}}(jQuery,window,document);
$(document).ready(function(){function e(e){$("body").addClass("project-opened"),$(".projects .slide-"+e+" .project-body").velocity({top:"0px"},{duration:400,display:"block",complete:function(){$(".projects .slide-"+e+" .project-header").hide(),$(".projects .slide-"+e+" .project-body").css("position","relative"),c=!0,s.slick("slickSetOption","swipe",!1)}},"easeOutQuint")}function t(e){$("body").removeClass("project-opened"),$(".projects .slide-"+e+" .project-body").css("position","absolute"),$(".projects .slide-"+e+" .project-header").show(),$(".projects .slide-"+e+" .project-body").velocity({top:"100vh"},{duration:400,display:"none",complete:function(){c=!1,s.slick("slickSetOption","swipe",!0)}},"easeOutQuint")}$(function(){FastClick.attach(document.body)}),/iP/.test(navigator.platform)&&/Safari/i.test(navigator.userAgent)&&$(".project-header").addClass("iphone-safari"),$("img.svg").each(function(){var e=$(this),t=e.attr("id"),o=e.attr("class"),s=e.attr("src");$.get(s,function(s){var i=$(s).find("svg");"undefined"!=typeof t&&(i=i.attr("id",t)),"undefined"!=typeof o&&(i=i.attr("class",o+" replaced-svg")),i=i.removeAttr("xmlns:a"),!i.attr("viewBox")&&i.attr("height")&&i.attr("width")&&i.attr("viewBox","0 0 "+i.attr("height")+" "+i.attr("width")),e.replaceWith(i)},"xml")});var o=!1;$(".btn-toggle-menu").on("click",function(){s.slick("slickSetOption","swipe",o),o=!o,$(this).toggleClass("toggled"),$(".perspective").hasClass("toggled")?$(".perspective-container").velocity({translateX:"0%",rotateY:"0deg",translateZ:"0px"},400,"easeOutCubic"):$(".perspective-container").velocity({translateX:"-35%",rotateY:"45deg",translateZ:"-70px"},400,"easeOutCubic"),$(".perspective").toggleClass("toggled")}),$(".perspective-container").on("click",function(){$(".perspective").hasClass("toggled")&&(s.slick("slickSetOption","swipe",!0),$(".btn-toggle-menu").removeClass("toggled"),$(".perspective").removeClass("toggled"),$(".perspective-container").velocity({translateX:"0%",rotateY:"0deg",translateZ:"0px"},400,"easeOutCubic"))});var s=$(".projects .slider");s.slick({cssEase:"easeInOut",speed:150,focusOnSelect:!0,infinite:!1,slidesToShow:1,slidesToScroll:1,arrows:!1,dots:!1,accessibility:!1});var i=$(".projects .slider").slick("slickCurrentSlide");$(".btn-project-prev").on("click",function(){s.slick("slickPrev")}),$(".btn-project-next").on("click",function(){s.slick("slickNext")}),$(".btn-project-show").on("click",function(){e(i)}),$(".btn-project-hide").on("click",function(){t(i)});var c=!1;$(document).on("keydown",function(o){var r=$("body").scrollTop();37!=o.keyCode||c?39!=o.keyCode||c?40==o.keyCode&&!c||13==o.keyCode&&!c?e(i):38==o.keyCode&&0==r&&c&&t(i):s.slick("slickNext"):s.slick("slickPrev")});var r=$(".projects .slide").length;s.on("beforeChange",function(e,t,o,s){1==s?$(".btn-project-prev").removeClass("disabled"):0==s&&$(".btn-project-prev").addClass("disabled"),s==r-1?$(".btn-project-next").addClass("disabled"):s==r-2&&$(".btn-project-next").removeClass("disabled"),s>o?i++:o>s&&i--,s>0&&$(".projects .slide-"+(parseInt(s)+1)).addClass("loaded");for(var c=$(".projects .slide-"+(parseInt(s)+1)+" .project-body img"),l=0;l<c.length;l++){var n=$(c[l]).attr("data-src");$(c[l]).attr("src",n)}}),$(".btn-scroll-top").on("click",function(){$(".projects .slide-"+i+" .project-body").velocity("scroll",600)}),$(".btn-scroll-to-map").on("click",function(e){e.preventDefault(),$(".google-map").velocity("scroll",600)})});
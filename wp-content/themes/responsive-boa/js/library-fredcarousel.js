/*
*  library-fredcarousel.js
*
*
*/

jQuery.noConflict();
jQuery(document).ready(function($) {

  $(".tcclibrary-carouFredSel").carouFredSel({
    items               : 1,
    direction           : "up",
    height              : "auto",
    scroll : {
        items           : 1,
        easing          : "elastic",
        duration        : 7500,
        pauseOnHover    : true
    }
  });



});
/*
*  responsive-library.js
*
*
*/

jQuery.noConflict();
jQuery(document).ready(function($) {

  $('#menu-mobile-menu').change(function() {
    $link = $(this).children('option:selected').attr('value');
    console.log($link);
    if($link != "") {
      window.location = $link;
    }
  });

}); //end document ready function
/*
Scripts File
Author: @paddy

This file should contain any js scripts you want to add to the site.
Instead of calling it in the header or throwing it inside wp_head()
this file will be called automatically in the footer so as not to
slow the page load.

*/

// as the page loads, call these scripts
jQuery(document).ready(function($) {

  // Fade in and out sub menus
  $("#menu-main > li > a").click(function(){
    submenu = $(this).closest('li').find("ul:first");

    // if submenu not present, returning true preserves the click so link will work
    if(submenu.length == 0)
      return true;

    submenu.fadeToggle(100, "linear");

    // returning false, cancels the click, hence not jumping to the top
    return false;
  })

  // Close menu when on click away
  $("body").click(function(event) {
   if (!$(event.target).closest("#menu-main > li").length) {
       $(".sub-menu").fadeOut(100, "linear");
   };
  });
  
  // Toggle navigation visibility on small screens and the toggle icon.
  // And rotate toggle icon
  $(".open-navigation").click(function () {
    $('#menu-main').toggleClass('menu-toggle');
    $(".icon-reorder").toggleClass('rotate');
    $(".wrapper-navigation").toggleClass('open');
      return false;
  });
  
  // FitVids - make videos.
      $(".principals").fitVids();
      $(".entry-content").fitVids();

}); /* end of as page load scripts */
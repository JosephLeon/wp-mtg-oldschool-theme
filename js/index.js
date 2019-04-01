jQuery(function ($) {
  console.log( "index.js loaded" );
  $( ".fa-bars" ).click(function() {
    $( ".mobile-menu-items" ).slideToggle();
  });
});

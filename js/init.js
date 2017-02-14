(function($){
  $(function(){
    $('.button-collapse').sideNav();
    $('.parallax').parallax();
    $( "#button_report_1" ).click(function() {
    $( "#formulaire_report" ).slideDown( "slow");
    $( "#index-banner" ).fadeOut( "slow");
    $( "#info_site" ).fadeOut( "slow");
  });
}); // end of document ready
})(jQuery); // end of jQuery name space

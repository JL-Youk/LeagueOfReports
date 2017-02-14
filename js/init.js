(function($){
  $(function(){
    $('.button-collapse').sideNav();
    $('.parallax').parallax();
    $('input.autocomplete').autocomplete({
      data: {
        "Youkoulailay": null,
        "x Chaton mignon": null,
        "Thegreenradis": null,
        "The daif": null,
        "ericzemmour": null,
        "spartanjohn117": null,
      },
      limit: 4, // The max amount of results that can be shown at once. Default: Infinity.
    });
    $( "#button_report_1" ).click(function() {
    $( "#formulaire_report" ).slideDown( "slow");
    $( "#index-banner" ).fadeOut( "slow");
    $( "#info_site" ).fadeOut( "slow");
});
}); // end of document ready
})(jQuery); // end of jQuery name space

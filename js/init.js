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
  },
  limit: 20, // The max amount of results that can be shown at once. Default: Infinity.
  });
  }); // end of document ready
})(jQuery); // end of jQuery name space

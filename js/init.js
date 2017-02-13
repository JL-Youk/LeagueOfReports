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
  limit: 20, // The max amount of results that can be shown at once. Default: Infinity.
  });
  $("#button_report_1").click(function() {
    swal({
      title: "tinquiete!",
      text: "tu va bientot pouvoir report :p",
      timer: 4000,
      imageUrl: "images/reported.gif"
    });
  });
}); // end of document ready
})(jQuery); // end of jQuery name space

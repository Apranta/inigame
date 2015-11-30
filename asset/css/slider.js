$(document).ready(function() {
  $("#twd_opa_controls").on('click', 'span', function() {
    $("#twd_opa img").removeClass("opaque");

    var newImage = $(this).index();

    $("#twd_opa img").eq(newImage).addClass("opaque");

    $("#twd_opa_controls span").removeClass("selected");
    $(this).addClass("selected");
  });
});
$(document).ready( function () {
    function image() {
    $("#image1").fadeIn(800).delay(800).fadeOut(800);
        $("#image2").delay(1600).fadeIn(800).delay(800).fadeOut(800, image);
    }
    image();
});
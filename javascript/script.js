$(document).ready( function() {

    $(".go-live-button").click( function() {
      $(".select-live").toggle()
      $(".go-live-container").toggle()
    });
  
});
function togglereg() {
    $(".reg1").toggle();
    $(".reg2").toggle();
}
function toggleProfile() {
    $(".change-password-container").toggle();
    $(".change-email-container").toggle();
}

$(document).ready( function() {

    $(".go-live-button").click( function() {
      $(".select-live").toggle()
      $(".go-live-container").toggle()
    });
    $(".back-from-go-live-button").click( function() {
        $(".select-live").toggle()
        $(".go-live-container").toggle()
    });
    $(".schedule-live-button").click( function() {
        $(".select-live").toggle()
        $(".schedule-live-container").toggle()
    });
    $(".back-from-schedule-live-button").click( function() {
        $(".select-live").toggle()
        $(".schedule-live-container").toggle()
    });
    $("#go-to-voting").click( function() { //gawing ajax
        $(".feedContainer").toggle()
        $(".voting-page").toggle()
    });
    $("#back-to-election").click( function() {
        $(".feedContainer").toggle()
        $(".voting-page").toggle()
    });
    $(".vote-now-button").click(function() {
        $(".voting-section").show()
    })
    $("#cancel-vote").click(function() {
        console.log("hi")
        $(".voting-section").hide()
        $("#voting-form")[0].reset()
    })
    $(".hamburger").click(function() {
        togglenhamburger()
    })
});
function togglereg() {
    $(".reg1").toggle();
    $(".reg2").toggle();
}
function toggleProfile() {
    $(".change-password-container").toggle();
    $(".change-email-container").toggle();
}
function togglenhamburger() {
    if($(".showupclass").css("display") == "none"){
        $(".showupclass").effect('slide', { duration: 200, direction: 'left', mode: 'show' })
    }
    else{
        $(".showupclass").effect('slide', { duration: 200, direction: 'left', mode: 'hide' })
    }

}
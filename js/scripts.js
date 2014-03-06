$(function(){
// some Jquery to control switching between right and left side of the website
    $("#sub-wrapper, #sub-content-wrapper, #activate, .link").click(function(e){
        e.stopPropagation();
        $("#wrapper").animate({"margin-left":"-60%"});
    });

    $("#main-wrapper, #main-content-wrapper").click(function(e){
        e.stopPropagation();
        $("#wrapper").animate({"margin-left":"0"});
    });

    $(".back, #back-button").click(function(e){
        e.stopPropagation();
        $("#wrapper").animate({"margin-left" : "0"});
        return false;
    });

    //uses the rumble plugin to shake the links and images on hover
    $("a").jrumble({
        speed: 30
    });

    $("a").hover(function(){
        $(this).trigger("startRumble");
    }, function(){
        $(this).trigger("stopRumble");
    });




    $(".aboutus").click(function() {
        $("#sub-content-wrapper").load("aboutus.php");

        return false;
    });

    $(".winners").click(function() {
        $("#sub-content-wrapper").load("winners.php");

        return false;
    });

    $(".prizes").click(function() {
        $("#sub-content-wrapper").load("prizes.php");

        return false;
    });

    $(".campaign").click(function() {
        $("#sub-content-wrapper").load("campaign.php");

        return false;
    });
});
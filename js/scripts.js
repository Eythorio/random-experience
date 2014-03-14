$(document).ready(function() {

//background

    $('#slider').bjqs({
                height : '100%',
                width : '100%',
                showcontrol: false,
                showmarkers : false,
                automatic: true,
                keyboardnav : true
            });
			
function checkSize() {
    //small-screen
    if (window.innerWidth < 500) {
	  $("#sub-wrapper, #sub-content-wrapper, #activate-button, .link").click(function(e){
	  e.stopPropagation();
	  $("#wrapper").animate({"margin-left":"-100%"});
	  });
    }
    //end small-screen
	else { 
	  $("#sub-wrapper, #sub-content-wrapper, #activate-button, .link").click(function(e){
	  e.stopPropagation();
	  $("#wrapper").animate({"margin-left":"-58%"});
	  });
	}
}

checkSize();

$(window).resize(function() {
    checkSize();
});

/* NAV Mobile slide */	
  $('#mob-menu, #prizes, #winners, #aboutus, #home').click(function () {
  $('.menu').slideToggle(200);
	return false;
});

// some Jquery to control switching between right and left side of the website
//    $("#sub-wrapper, #sub-content-wrapper, #activate-button, .link").click(function(e){
//        e.stopPropagation();
//        $("#wrapper").animate({"margin-left":"-58%"});
//    });

    $("#main-wrapper, #main-content-wrapper").click(function(e){
        e.stopPropagation();
        $("#wrapper").animate({"margin-left":"0"});
    });

    $(".back, #back-button, #home").click(function(e){
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
        $("#sub-content-wrapper").load("pages/aboutus.php");

        return false;
    });

    $(".winners").click(function() {
        $("#sub-content-wrapper").load("pages/winners.php");

        return false;
    });

    $(".prizes").click(function() {
        $("#sub-content-wrapper").load("pages/prizes.php");

        return false;
    });

    $(".campaign").click(function() {
        $("#sub-content-wrapper").load("pages/aboutus.php");

        return false;
    });

// Back button animation
	$("#sub-wrapper, #sub-content-wrapper, #activate-button, .link").click(function() {
//		$(".back").show();
		$(".back").css('visibility', 'visible');
	});
		$("#main-content-wrapper").click(function() {
		$(".back").css('visibility', 'hidden');
	});
	$("#back-button, .back, .back a").click(function() {
		$(".back").css('visibility', 'hidden');
	});
//


});
//
// ACTIVATION JAVASCRIPT
//
function SubmitCode() {
    var code = $("#code").val();
    $.post("pages/activation-city.php", { code: code },
    function(data) {
        //alert("Data Loaded: " + data);

        var div = document.getElementById('sub-content-wrapper');

        div.innerHTML = data;
    });
}


function SubmitCity() {
    var cityForm = document.getElementById('city-form');
    var counter = 0;

    for(var i = 0; i < cityForm.city.length; i++){

        if(cityForm.city[i].checked){
            var chosenCity = cityForm.city[i].value;
        } else {
            counter += 1;
        }

    }
     if (counter == cityForm.city.length) {
            alert("You've got to choose a city");
            return;

        }

    $.post("pages/city-prize.php", { city: chosenCity},
    function(data) {

        var div = document.getElementById('sub-content-wrapper');

        div.innerHTML =  data;
    });
}

function SubmitPrize() {

    var prizeForm = document.getElementById('prize-form');
    var counter = 0;

    for(var i = 0; i < prizeForm.prize.length; i++){

        if(prizeForm.prize[i].checked){
            var valueSelected = prizeForm.prize[i].value;
        } else{
            counter += 1;
        }
    }

    if (counter == prizeForm.prize.length) {
            alert("You've got to choose a prize");
            return;
    }

    $.post("pages/prize-user.php", { prize: valueSelected},
    function(data) {

        var div = document.getElementById('sub-content-wrapper');

        div.innerHTML =  data;
    });
}

function SubmitConfirmation() {
    var fname = $("#fname").val();
    var lname = $("#lname").val();
    var email = $("#email").val();

    $.post("pages/user-confirmation.php", { fname: fname, lname: lname, email: email  },
    function(data) {

        var div = document.getElementById('sub-content-wrapper');

        div.innerHTML = data;
    });
}


//
//  JQUERY FUNCTIONS
//


$(function(){

//background slider

    $('#slider').bjqs({
                height : '100%',
                width : '100%',
                showcontrol: false,
                showmarkers : false,
                automatic: true,
                keyboardnav : true
            });

// some Jquery to control switching between right and left side of the website
    $("#sub-wrapper, #sub-content-wrapper, #activate-button, .link").click(function(e){
        e.stopPropagation();
        $("#wrapper").animate({"margin-left":"-58%"});
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



    //sub-pages
    //
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
		$(".back").css('visibility', 'visible');
	});
		$("#main-content-wrapper").click(function() {
		$(".back").css('visibility', 'hidden');
	});
	$("#back-button, .back, .back a").click(function() {
		$(".back").css('visibility', 'hidden');
	});

});
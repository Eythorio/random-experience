$(function(){

// some Jquery to control switching between right and left side of the website
            $("#sub-wrapper, #sub-content-wrapper, #activate").click(function(e){
                e.stopPropagation();
                $("#wrapper").animate({"margin-left":"-60%"});
            });

            $("#main-wrapper, #main-content-wrapper").click(function(e){
                e.stopPropagation();
                $("#wrapper").animate({"margin-left":"0"});
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
});
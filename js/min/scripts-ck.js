$(function(){$("#sub-wrapper, #sub-content-wrapper, #activate, .link").click(function(n){n.stopPropagation(),$("#wrapper").animate({"margin-left":"-60%"})}),$("#main-wrapper, #main-content-wrapper").click(function(n){n.stopPropagation(),$("#wrapper").animate({"margin-left":"0"})}),$(".back, #back-button").click(function(n){return n.stopPropagation(),$("#wrapper").animate({"margin-left":"0"}),!1}),$("a").jrumble({speed:30}),$("a").hover(function(){$(this).trigger("startRumble")},function(){$(this).trigger("stopRumble")}),$(".aboutus").click(function(){return $("#sub-content-wrapper").load("aboutus.php"),!1}),$(".winners").click(function(){return $("#sub-content-wrapper").load("winners.php"),!1}),$(".prizes").click(function(){return $("#sub-content-wrapper").load("prizes.php"),!1}),$(".campaign").click(function(){return $("#sub-content-wrapper").load("campaign.php"),!1})});
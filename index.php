
<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <meta name="viewport" content="width=device-width"/>

        <!-- icons -->
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

        <!-- fonts -->
        <link href='http://fonts.googleapis.com/css?family=Original+Surfer' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Amatic+SC' rel='stylesheet' type='text/css'>

        <!-- jquery, rumble, and custom scripts  -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.jrumble.1.3.js"></script>
        <script src="js/scripts.js"></script>

        <!-- stylesheet -->
        <link href="style.css" type="text/css" rel="stylesheet"/>

        <title>Rowntrees Randoms dk</title>


      <script>
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

                for(var i = 0; i < cityForm.city.length; i++){

                    if(cityForm.city[i].checked){
                        var chosenCity = cityForm.city[i].value;
                    }
                }


                $.post("pages/city-prize.php", { city: chosenCity},
                function(data) {

                    var div = document.getElementById('sub-content-wrapper');

                    div.innerHTML =  data;
                });
            }

            function SubmitPrize() {

                var prizeForm = document.getElementById('prize-form');

                for(var i = 0; i < prizeForm.prize.length; i++){

                    if(prizeForm.prize[i].checked){
                        var valueSelected = prizeForm.prize[i].value;
                    }
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
        </script>
    </head>

    <body>
        <!-- entire site wrapper -->
        <div id="wrapper">
            <!-- main menu/content on the left side of the site -->
            <div id="main-wrapper">
                <!-- wrapper for all the content within this side of the site -->
                <section id='main-content-wrapper'>
                   <h2>
                        Hej Denmark!!! We're <a href="index.php" class="link aboutus"><img id='logo' src="img/website/logo.png" alt="randoms"/></a>
                    </h2>


                       <h2> We're running a <span><a href="#" class="link campaign">campaign</a></span> where 1/50 of every <a href="index.php" class="link aboutus"><img src="img/website/candy.png" alt="randoms"/></a>contains a random <span><a href="#" class="link prize">prize</a></span>. We're giving away

                        <span><a href="index.php" class="link prizes">Roskilde Tickets</a></span>
                        and much more...

                        Are you a lucky
                       <span> <a href="index.php" class="link winners">winner</a></span>?
                    </h2>


                    <form action="activation-city.php" class='deaktop' method="post">

 Activation Code: <input name='code' id='code' type="texr">
 <input type="button" id="activate-button" onclick="SubmitCode();" value="Send" />
 </form>


                    <h2 class='desktop'>
                        <a><img src="img/hashtag.png" alt="hashtag" class="hashtag"></a>
                    </h2>


                    <p class="mobile">
                        Are you a lucky
                        <a href="index.php" class="link winners"><img src="img/website/winner.png" alt=""></img></a>?

                    </p>

                    <form class='mobile' action="index.php" method="get" enctype="multipart/form-data">
                        <input class ='placeholder 'type="text" name="activationcode" placeholder="Enter your code">
                        <input class ='placeholder 'type="submit" name="form" value="Go" id="activate">
                    </form>

                    <p class='mobile'>

                        We're giving away

                        <br>

                        <a href="index.php" class="link prizes"><img src="img/website/ticket.png"></a>

                        <br>

                        and much more...<span>

                        <br>

                        1/50 </span> of

                        <br>

                        <a href="index.php" class="link aboutus"><img src="img/website/candy.png" alt="randoms"/></a>

                        <br>

                        has a RANDOM

                        <br>

                        <a href="index.php" class="link prizes"><img src="img/website/prize.png" alt=""></a>

                        <br>

                        in it.

                        <br>
                    </p>

                </section> <!-- content of the left half of site -->
            </div> <!-- the left side of the site -->



            <div id="sub-wrapper"> <!-- wrapper for the sub-pages/ dynamic content -->
                <div class="back">
                    <a  href="">
                        <img id='back-button' src="img/website/back.png" alt="">Back</a>
                </div>
                <!-- content wrapper on the right side of the site -->
                <section id='sub-content-wrapper'>

                </section> <!-- content wrapper - right side -->
            </div> <!-- wrapper for the right side of the site -->
           <footer>
              <h1 class="nextle">© 2014 Nestlé</h1>
              <main>
                  <div id="content">
                    <input type="checkbox" class="checkbox" id="share">
                    <label for="share" class="label entypo-export" id="share-button"></label>
                    <div class="social">
                      <ul>
                        <li class="entypo-twitter"><a id="twitter"></a></li>
                        <li class="entypo-facebook"><a id="facebook"></a></li>
                        <li class="entypo-instagram"><a id="instagram"></a></li>
                      </ul>
                    </div>
                  </div>
              </main>
          </footer>
        </div> <!-- entire site wrapper -->
    </body>
    </html>

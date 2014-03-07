<?php
session_start();
$_SESSION['activationcode']="";

$out="";

if (isset($_GET['form'])){

    include('activation.php');

};

?>

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


        <!-- uses Jquery and ajax I think to load the page on click without disrupting or slowing the page slide that we have implemented -->

    </head>

    <body>
        <!-- entire site wrapper -->
        <div id="wrapper">
            <!-- main menu/content on the left side of the site -->
            <div id="main-wrapper">
                <!-- wrapper for all the content within this side of the site -->
                <section id='main-content-wrapper'>

                    <h1>
                        Hej Denmark!!!
                    </h1>

                    <h2>
                        We're

                        <a href="index.php" class="link aboutus"><img src="img/randoms.png" alt="randoms"/></a>
                    </h2>

                    <br>


                    <p class='desktop'>

                        We're giving away

                        <a href="index.php" class="link prizes"><img src="img/roskilde-ticket.png"></a>
                        and much more...<span>

                        <br>

                        1/50 </span> of every
                        <a href="index.php" class="link aboutus"><img src="img/candy-bag.gif" alt="randoms"/></a>

                         has a RANDOM

                        <a href="index.php" class="link prizes"><img src="img/gift-box.png" alt=""></a> in it.

                        <br>

                        Are you a lucky
                        <a href="index.php" class="link winners"><img src="img/winner.jpg" alt=""></img></a>?
                    </p>


                    <form class='desktop' action="index.php" method="get" enctype="multipart/form-data">
                        <input class='placeholder' type="text" name="activationcode" placeholder="activate your code...">
                        <input class='placeholder' type="submit" name="form" value="Go" id="activate">
                    </form>


                    <p class='desktop'>
                        <br>
                        <a><img src="img/hashtag.png" alt=""></a>

                        <br>

                        <a href=""><i class= 'fa fa-instagram'> </i></a>
                        <a href=""><i class= 'fa fa-facebook-square'> </i></a>
                        <a href=""><i class= 'fa fa-twitter-square'> </i></a>
                    </p>


                    <p class="mobile">
                        Are you a lucky
                        <a href="index.php" class="link winners"><img src="img/winner.jpg" alt=""></img></a>?

                    </p>

                    <form class='mobile' action="index.php" method="get" enctype="multipart/form-data">
                        <input class ='placeholder 'type="text" name="activationcode" placeholder="Enter your code">
                        <input class ='placeholder 'type="submit" name="form" value="Go" id="activate">
                    </form>

                    <p class='mobile'>

                        We're giving away

                        <br>

                        <a href="index.php" class="link prizes"><img src="img/roskilde-ticket.png"></a>

                        <br>

                        and much more...<span>

                        <br>

                        1/50 </span> of

                        <br>

                        <a href="index.php" class="link aboutus"><img src="img/candy-bag.gif" alt="randoms"/></a>

                        <br>

                        has a RANDOM

                        <br>

                        <a href="index.php" class="link prizes"><img src="img/gift-box.png" alt=""></a>

                        <br>

                        in it.

                        <br>
                    </p>

                </section> <!-- content of the left half of site -->
            </div> <!-- the left side of the site -->



            <div id="sub-wrapper"> <!-- wrapper for the sub-pages/ dynamic content -->
                <div class="back">
                    <a id='back-button' href="">
                        <i class='fa fa-arrow-circle-left back-icon'></i>Back</a>
                </div>
                <!-- content wrapper on the right side of the site -->
                <section id='sub-content-wrapper'>


                    <?php echo $out?>
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

<?php
$out="";

if (isset($_GET['page'])){

        switch($_GET['page']){

//                 case 'aboutus':
//                     include("aboutus.php");
//                     break;

//                 case 'winners':
//                     include("winners.php");
//                     break;

//                 case 'prizes':
//                     include("prizes.php");
//                     break;

                 case 'activate':
                     include("activation.php");
                     break;

//                     case 'campaign':
//                     include("campaign.php");
//                     break;

//                   default:
//                     include("campaign.php");
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <link href='http://fonts.googleapis.com/css?family=Original+Surfer' rel='stylesheet' type='text/css'>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.jrumble.1.3.js"></script>
        <script src="scripts.js"></script>
        <title>Rowntrees Randoms dk</title>
        <link href="style.css" type="text/css" rel="stylesheet"/>

        <script>
            $(document).ready(function(){

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
                <?php
                   if (isset($_GET['page'])){

                      switch($_GET['page']){

                   //      case 'aboutus':
                   //          echo "$('#wrapper').animate({'margin-left':'-60%'});";
                   //          break;

                   //      case 'winners':
                   //          echo "$('#wrapper').animate({'margin-left':'-60%'});";
                   //          break;

                   //      case 'prizes':
                   //          echo "$('#wrapper').animate({'margin-left':'-60%'});";
                   //          break;

                         case 'activate':
                             echo "$('#wrapper').animate({'margin-left':'-60%'});";
                             break;

                   //      case 'campaign':
                   //          echo "$('#wrapper').animate({'margin-left':'-60%'});";
                   //          break;

                   //      default:
                   //          echo "$('#wrapper').animate({'margin-left':'-60%'});";
                         }
                     }
                 ?>
            });
        </script>
    </head>

    <body>
        <!-- entire site wrapper -->
        <div id="wrapper">
            <!-- main menu/content on the left side of the site -->
            <div id="main-wrapper">
                <!-- wrapper for all the content within this side of the site -->
                <section id='main-content-wrapper'>
                    <p>
                        Hello! We're

                        <a href="aboutus.php" class="link aboutus"><img src="img/randoms.png" alt="randoms"/></a>

                        <br>

                        We're giving away

                        <a href="prizes.php" class="link prizes"><img src="img/roskilde-ticket.png"></a>and much more...<span>

                        <br>

                        1/50 </span> of
                        <a href="aboutus.php" class="link aboutus"><img src="img/candy-bag.gif" alt="randoms"/></a> has a RANDOM
                        <a href="prizes.php" class="link prizes"><img src="img/gift-box.png" alt=""></a> in it.

                        <br>

                        Are you a lucky
                        <a href="winners.php" class="link winners"><img src="img/winner.jpg" alt=""></img></a>?
                    </p>
                    <form action="#" method="get" enctype="multipart/form-data" style="display:inline;z-index:100;">
                        <input type="text" name="activationcode" placeholder="activate your code..." style="width:150px; height:30px;">
                        <input type="submit" name="page" value="activate" id="activate">
                    </form>

                    <br>
                    <p>
                        <a><img src="img/hashtag.png" alt=""></a>
                        <a href=""><i class= 'fa fa-instagram'> </i></a>
                        <a href=""><i class= 'fa fa-facebook-square'> </i></a>
                        <a href=""><i class= 'fa fa-twitter-square'> </i></a>
                    </p>


                </section> <!-- content of the left half of site -->
            </div> <!-- the left side of the site -->



            <div id="sub-wrapper"> <!-- wrapper for the sub-pages/ dynamic content -->

                <!-- content wrapper on the right side of the site -->
                <section id='sub-content-wrapper'>

                    <?php echo $out; ?>
                </section> <!-- content wrapper - right side -->
            </div> <!-- wrapper for the right side of the site -->
        </div> <!-- entire site wrapper -->
    </body>
    </html>

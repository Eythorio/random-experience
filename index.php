<?php
$out="";

if (isset($_GET['page'])){

        switch($_GET['page']){

                case 'aboutus':
                    include("aboutus.php");
                    break;

                case 'winners':
                    include("winners.php");
                    break;

                case 'prizes':
                    include("prizes.php");
                    break;

                case 'activate':
                    include("activation.php");
                    break;

                    case 'campaign':
                    include("campaign.php");
                    break;

                  default:
                    include("campaign.php");
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
    </head>

    <body>
        <!-- entire site wrapper -->
        <div id="wrapper">
            <!-- main menu/content on the left side of the site -->
            <div id="main-wrapper">
                <!-- wrapper for all the content within this side of the site -->
                <section id='main-content-wrapper'>
                    <p>Hello! We're<a href="index.php?page=aboutus" class="link"><img src="img/randoms.png" alt="randoms"/></a> and we are <a href="index.php?page=campaign" class="link"><img src="img/running.png" alt=""></a> a <a href="index.php?page=campaign" class="link">campaign</a> where<span> 1/50 </span>of<a href="index.php?page=aboutus" class="link"><img src="img/candy-bag.gif" alt="randoms"/></a> has <a href="index.php?page=prizes" class="link"><img src="img/prize.gif" alt=""></a> in it. We're giving away <a href="index.php?page=prizes" class="link"><img src="img/rostick.png"></a>and much more. If you're a <a href="index.php?page=winners" class="link"><img src="img/winner.jpg" alt=""></img></a> </p>
                    <form action="#" method="get" enctype="multipart/form-data" style="display:inline;z-index:100;">
                    <input type="text" name="activationcode" placeholder="activate your code..." style="width:150px; height:30px;">
                    <input type="submit" name="page" value="activate" id="activate"></form>
                    <p>and tag us <a>#rowntrees</a> in your
                    <a href=""><i class= 'fa fa-instagram'> </i></a>
                    <a href=""><i class= 'fa fa-facebook-square'> </i></a>
                    <a href=""><i class= 'fa fa-twitter-square'> </i></a>
                    </p>


                </section> <!-- content of the left half of site -->
            </div> <!-- the left side of the site -->



            <div id="sub-wrapper"> <!-- wrapper for the sub-pages/ dynamic content -->

                <!-- content wrapper on the right side of the site -->
                <section id='sub-content-wrapper'>

                <?php echo $out?>
                </section> <!-- content wrapper - right side -->
            </div> <!-- wrapper for the right side of the site -->
        </div> <!-- entire site wrapper -->
    </body>
    </html>

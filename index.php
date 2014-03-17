
<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <meta name="viewport" content="width=device-width"/>

        <!-- fonts -->
        <link href='http://fonts.googleapis.com/css?family=Amatic+SC' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Alef' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

        <!-- jquery, rumble, and custom scripts  -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/jquery.jrumble.1.3.js"></script>
        <script type="text/javascript" src="js/instafeed.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="js/bjqs-1.3.min.js"></script>



        <!-- stylesheet -->
        <link href="style.css" type="text/css" rel="stylesheet"/>

        <title>Rowntrees Randoms dk</title>

    </head>

    <body>
        <!-- entire site wrapper -->
        <div id="wrapper">

            <!-- main menu/content on the left side of the site -->
            <div id="main-wrapper">
                <!-- wrapper for all the content within this side of the site -->
                 <div id="background">

                    <img src="img/handpacket.png">

                </div>
                <section id="main-content-wrapper">
                <div class="click-background"></div>

                    <h2>
                        Hej Denmark! We're <a href="index.php" class="link aboutus"><img id='logo' src="img/originallogo.png" alt="randoms"/></a>
                    </h2>

                    <article class="desktop">
                        <h2> We just arrived from <a href="index.php" class="link aboutus"><img src='img/ukflag.png'></a> and We're running a <span><a href="#" class="link campaign">campaign</a></span> where 1/50 of every <a href="index.php" class="link aboutus"><img src="img/greenpacket.png" alt="randoms"/></a>contains a random <span><a href="#" class="link prizes">prize</a></span>. We're giving away

                        <span><a href="index.php" class="link prizes nowrap">Roskilde Tickets</a></span>
                        and much more...

                        Are you a lucky
                       <span> <a href="index.php" class="link winners">winner?</a></span>
                        </h2>
                    </article>

                    <p class="mobile">
                        Are you a lucky
                       <span> <a href="index.php" class="link winners">winner?</a></span>

                    </p>

                    <form action="index.php" class='' method="post">

                        <h4>Activation Code:</h4>
                        <span class='nowrap'><input name='code' id='code' type="text">
                        <input type="button" id="activate-button" onClick="SubmitCode();"  value="GO!" /></span>
                    </form>


                    <h2 class='desktop'>
                        <a><img src="img/hashtag.png" alt="hashtag" id="hashtag"></a>
                    </h2>

                </section> <!-- content of the left half of site -->
            </div> <!-- the left side of the site -->

            <div id="sub-wrapper"> <!-- wrapper for the sub-pages/ dynamic content -->
                  <div class="sub-menu">
                    <ul>
                        <li> <span class='home'><a  href="">Home</a></span></li>
                        <li> <span class='aboutus hide'><a  href="">About</a></span></li>
                        <li> <span class='campaign hide'><a  href="">The Campaign</a></span></li>
                        <li> <span class='activate hide'><a  href="">Activate Code</a></span></li>
                        <li> <span class='prizes hide'><a  href="">Prizes</a></span></li>
                        <li> <span class='winners hide'><a  href="">Winners</a></span></li>
                    </ul>
                </div>
                <!-- content wrapper on the right side of the site -->
                <section id='sub-content-wrapper'>
                </section> <!-- content wrapper - right side -->
                <h1 class="nestle">© 2014 Nestlé</h1>
            </div> <!-- wrapper for the right side of the site -->

        </div> <!-- entire site wrapper -->
        <footer>
		 <!-- Mobile Navigation -->
                    <nav>
                        <section class="menu">
                            <!--<span id="x"></span>-->
                            <li><a href="#" id="home">Home</a></li>
                            <li><a href="#" class="link aboutus" id="aboutus">About Us</a></li>
                            <li><a href="#" class="link campaign" id="campaign">The Campaign</a></li>
                            <li><a href="#" class="link prizes" id="prizes">Prizes</a></li>
                            <li><a href="index.php" class="link winners" id="winners">Winners</a></li>
                        </section>
                    </nav>
            <h1>© 2014 Nestlé</h1>

            <main>
                <div id="social-position">
                    <span id='mobile-menu'>Menu</span>
                    <input type="checkbox" class="checkbox" id="share">
                    <label for="share" class="label entypo-export" id="share-button"></label>
                    <div class="social">
                        <ul class='socialm'>
                            <li class="entypo-twitter"><a id="twitter"></a></li>
                            <li class="entypo-facebook"><a id="facebook"></a></li>
                            <li class="entypo-instagram"><a id="instagram"></a></li>
                        </ul>
                    </div>
                </div>
              </main>
          </footer>
    </body>
    </html>

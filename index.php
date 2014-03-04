<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:600,400,300' rel='stylesheet' type='text/css'>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <title>Rowntrees Randoms dk</title>
        <link href="style.css" type="text/css" rel="stylesheet"/>

        <script type="text/javascript">


        // some Jquery to control switching between right and left side of the website
        $(document).ready(function(){
            $("#sub-wrapper, #sub-content-wrapper, #activate").click(function(e){
                e.stopPropagation();
                $("#wrapper").animate({"margin-left":"-60%"});
            });

            $("#main-wrapper, #main-content-wrapper").click(function(e){
                e.stopPropagation();
                $("#wrapper").animate({"margin-left":"0"});
            });
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
                    <p>Hello! We're<a href="#"><img src="img/randoms.png" alt="randoms"/></a> and we are running a <a href="#">campaign</a> where<span> 1/50 </span>of<a href="#"><img src="img/candy-bag.gif" alt="randoms"/></a> has a <a>prize</a> in it. We're giving away <a href="#"><img src="img/rostick.png"></a>and much more. If you're a winner </p>
                    <form action="activation.php" method="get" enctype="multipart/form-data" style="display:inline;z-index:100;">
                    <input type="text" name="activationcode" placeholder="activate your code..." style="width:150px; height:30px;">
                    <input type="submit" name="go" value="Go" id="activate" class="button"></form>
                    <p>and tag us <a>#rowntrees</a> in your
                    <a><img src="img/instagram.jpeg"></a>
                    <a><img src="img/is320.jpg"></a>
                    <a><img src="img/twitter.jpg"></a>
                    </p>


                </section> <!-- content of the left half of site -->
            </div> <!-- the left side of the site -->



            <div id="sub-wrapper"> <!-- wrapper for the sub-pages/ dynamic content -->

                <!-- content wrapper on the right side of the site -->
                <section id='sub-content-wrapper'>
<<<<<<< HEAD
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, expedita dolore unde et magnam earum ipsa perspiciatis possimus quia vel alias ut eveniet ullam sint obcaecati voluptatibus aperiam natus ratione.</p>
                </section> <!-- content wrapper - right side -->
            </div> <!-- wrapper for the right side of the site -->
        </div> <!-- entire site wrapper -->
=======
                    <?php echo $out?>
                </section>
            </div>
        </div>
>>>>>>> natasha
    </body>
    </html>

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

        $(document).ready(function(){
            $("#sub-wrapper, #sub-content-wrapper").click(function(){
                $("#wrapper").animate({"margin-left":"-60%"});
            });

            $("#main-wrapper, #main-content-wrapper").click(function(){
                $("#wrapper").animate({"margin-left":"0"});
            });
        });

        </script>

    </head>

    <body>
        <div id="wrapper">
            <div id="main-wrapper">
                <section id='main-content-wrapper'>
                    <p>Hello! We're<a href="#"><img src="img/randoms.png" alt="randoms"/></a> and we are running a <a href="#">campaign</a>where<span> 1/50 </span>of<a href="#"><img src="img/candy-bag.gif" alt="randoms"/></a> has a<a> prize</a> in it. We're giving away <a href="#"><img src="img/rostick.png"></a>and much more. If you're a winner <a>activate your 10 digit code</a> and tag us<a>#rowntrees</a> in your
                    <a><img src="img/instagram.jpeg"></a>
                    <a><img src="img/is320.jpg"></a>
                    <a><img src="img/twitter.jpg"></a>
                    </p>

                    <!-- <div id="menu">
                        <nav>
                            <a>Home</a>
                            <a>Campaign</a>
                            <a>Prizes</a>
                            <a>Our Winners</a>
                            <a>About Us</a>
                        </nav>
                    </div> -->
                </section>
            </div>
            <div id="sub-wrapper">
                <section id='sub-content-wrapper'>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, expedita dolore unde et magnam earum ipsa perspiciatis possimus quia vel alias ut eveniet ullam sint obcaecati voluptatibus aperiam natus ratione.</p>
                </section>
            </div>
        </div>
    </body>
    </html>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:600,400,300' rel='stylesheet' type='text/css'>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <title>Rowntrees Randoms dk</title>
        <link href="css/style.css" type="text/css" rel="stylesheet"/>
        
        <script type="text/javascript">

        $(document).ready(function(){
            $("#content").click(function(){
                $("#wrapper").animate({"margin-left":"-60%"});
            });

            $("#menu").click(function(){
                $("#wrapper").animate({"margin-left":"0"});
            });


        });

        </script>

    </head>

    <body>
        <div id="wrapper">
            <div id="menu"></div>
            <div id="content"></div>
        </div>
    </body>
    </html>

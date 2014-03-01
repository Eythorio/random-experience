<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:600,400,300' rel='stylesheet' type='text/css'>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <title>Rowntrees Randoms dk</title>
        <style type="text/css">

        body,html {
            margin:0;
            height:100%;
            width:100%;
        }

        body {
            overflow:hidden;
        }

        </style>
        <script type="text/javascript">

        $(document).ready(function(){
            $("#test2").click(function(){
                $("#test").animate({"margin-left":"-60%"});
            });

            $("#test1").click(function(){
                $("#test").animate({"margin-left":"0"});
            });


        });

        </script>

    </head>

    <body>
        <div id="test" style="width:160%; height:800px; border:1px solid green; display:inline-block;">
            <div id="test1" style="width:50%; height:100%; background-color:yellow; display:inline-block;"><button style="position:absolute; top:1em; left:1em;">click me</button></div>
            <div id="test2" style="width:49%; height:100%; background-color:purple; display:inline-block;"></div>
        </div>
    </body>
    </html>

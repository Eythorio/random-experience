<?php
include("dbconnect.php");

if (!$link) {
    die('Not connected : ' . mysql_error());
}


?>

<!doctype html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<titLe>Activation</title>
</head>
<body>
	<form action="index.php" method="post" enctype="multipart/form-data">
			<label for="code"> Activation Code: </label>
		  	<input type="text" name="code"  id="code">
			<input type="submit" name="submit" value="Activate" class="button">
	</form>
	<p><?php echo $out;?></p>
</body>
</html>
<?php

	include('../dbconnect.php');
	session_start();

	$city = $_POST['city'];

	$category=$_SESSION['category'];

	$_SESSION['city']=$city;



	$prizes="SELECT * FROM re_prize where category='$category' AND city = '$city'";
	$resultprizes=mysql_query($prizes);


			//outing the different prizes into a radio input

	echo "<form id='prize-form' action='prize-user.php' method='post' enctype='multipart/form-data'><br>";

			//loop that grabs all the prizes
			while($dataprizes=mysql_fetch_assoc($resultprizes)){
				$prizename=$dataprizes['name'];
				echo "<input type='radio' name='prize' value='$prizename'>$prizename<br>";
				}

			echo "<input id='prize-button'type='button' value='Select Prize' onClick='SubmitPrize();'></form>";
 ?>
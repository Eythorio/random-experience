<h1>Activate Your Code: </h1>

<?php

	include('../dbconnect.php');
	session_start();

	$city = '';

	if(isset($_POST['city'])){
		$city = $_POST['city'];
	} else {
		echo "<p>Uh Oh! There seems to be some sort of mistake somewhere, we can't seem to find the city you chose. You might have to go back and start again. Sorry about that :-( </p> <br>";

		echo "<input id='prize-button' class='form-submit-button' type='button' value='Back' onClick='SubmitCode();'></form>";
		die();
	}

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

			echo "<input id='prize-button' class='form-submit-button' type='button' value='Select Prize' onClick='SubmitPrize();'></form>";
 ?>
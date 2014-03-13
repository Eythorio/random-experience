<h1>Activate Your Code: </h1>
<?php
	include('../dbconnect.php');
	session_start();
	$prize = "";

	if(isset($_POST['prize'])){
		$prize= $_POST['prize'];
	} else {
		echo "<p>Uh Oh! There seems to be some sort of mistake somewhere, we can't seem to find the prize you chose - if you chose one at all. You might have to go back and try that step again. Sorry about that :-( </p> <br>";

			echo "<input id='prize-button' class='form-submit-button' type='button' value='Back' onClick='SubmitCity();'></form>";

		die();
	}

	$city = $_SESSION['city'];

	echo $prize;



	echo "<p>Almost done. You entered chose $prize in $city. We just need to know who you are so we can send you your prize!</p>
			<form action='user-confirmation.php' method='get' enctype='multipart/form-data'><br>
			<input type='text' id='fname' name='fname' placeholder='First Name'/><br>
			<input type='text' id='lname' name='lname' placeholder='Last Name'/><br>
			<input type='text' id='email' name='email' placeholder='Email Address'/><br>
			<input id='user-button'type='button' class='form-submit-button' value='submit' onClick='SubmitConfirmation();'></form>";
 ?>
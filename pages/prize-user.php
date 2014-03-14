<h1>Activate Your Code: </h1>
<?php
	include('../dbconnect.php');
	session_start();

	$prize = "";
	$prize= $_POST['prize'];
	$city = $_SESSION['city'];

	echo $prize;



	echo "<p>Almost done. You chose  $prize in $city. We just need to know who you are so we can send you your prize!</p>
			<form action='user-confirmation.php' method='get' enctype='multipart/form-data'><br>
			<input type='text' id='fname' class= 'user-input-fields' name='fname' placeholder='First Name' required/><br>
			<input type='text' id='lname' class= 'user-input-fields' name='lname' placeholder='Last Name' required/><br>
			<input type='text' id='email' class= 'user-input-fields' name='email' placeholder='Email Address' required/><br>

			<input id='user-button'type='button' class='form-submit-button' value='submit' onClick='SubmitConfirmation();'></form>";
 ?>
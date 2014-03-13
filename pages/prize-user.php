<h1>Activate Your Code: </h1>
<?php
	include('../dbconnect.php');
	session_start();
	$prize=" ";

	$prize= $_POST['prize'];

	$city = $_SESSION['city'];

	echo "<p>Almost done. You entered chose $prize in $city. We just need to know who you are so we can send you your prize!</p>
			<form action='user-confirmation.php' method='get' enctype='multipart/form-data'>
			<input type='text' id='fname' name='fname' placeholder='First Name'/><br>
			<input type='text' id='lname' name='lname' placeholder='Last Name'/><br>
			<input type='text' id='email' name='email' placeholder='Email Address'/><br>
			<input id='user-button'type='button' class='form-submit-button' value='submit' onClick='SubmitConfirmation();'></form>";
 ?>
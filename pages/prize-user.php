<?php
	$prize= $_POST['prize'];

	session_start();

	$city = $_SESSION['city'];

	echo $prize;



	echo "<p>Almost done. You entered chose $prize in $city. We just need to know who you are so we can send you your prize!</p>
			<form action='user-confirmation.php' method='get' enctype='multipart/form-data'><br>
			<input type='text' id='fname' name='fname' placeholder='First Name'/><br>
			<input type='text' id='lname' name='lname' placeholder='Last Name'/><br>
			<input type='text' id='email' name='email' placeholder='Email Address'/><br>
			<input id='user-button'type='button' value='submit' onClick='SubmitConfirmation();'></form>";
 ?>
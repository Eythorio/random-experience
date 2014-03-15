<h1>Activate Your Code: </h1>

<?php
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];

	echo "<p>a fake confirmation email will be sent to: </p>";
	echo $fname .' '.$lname . "<br>";
	echo $email;
 ?>
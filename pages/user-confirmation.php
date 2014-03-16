<h1>Activate Your Code: </h1>

<?php

include('../dbconnect.php');
session_start();

	$prize = $_SESSION['prize'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$code = $_SESSION['code'];


	$sqlprize ="INSERT INTO re_prize(id, firstname, lastname, email)
         VALUES (' ', '$fname', '$lname', '$email')";

    $result = mysql_query($sqlprize);

	$resultprizeid=mysql_query("SELECT id FROM re_prize where name='$prize'");
	$dataprizeid=mysql_fetch_assoc($resultprizeid);
	$prizeid=$dataprizeid['id'];

	$sqluser ="INSERT INTO re_winner_user(id, firstname, lastname, email)
         VALUES (' ', '$fname', '$lname', '$email')";

   $result = mysql_query($sqluser);

    $resultuserid=mysql_query("SELECT id FROM re_winner_user where email='$email'");
	$datauserid=mysql_fetch_assoc($resultuserid);
	$userid=$datauserid['id'];
	
	$sqlcode="UPDATE re_activation_code SET prize_id ='$prizeid', winner_user_id='$userid' WHERE code=$code";
    $result = mysql_query($sqlcode);

	echo "<p>a fake confirmation email will be sent to: </p>";
	echo $fname .' '.$lname . "<br>";
	echo $email;
 ?>
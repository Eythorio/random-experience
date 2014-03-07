<?php
session_start();
$out=" ";
include("dbconnect.php");
include("functions.php");

if ((isset($_GET['form']))&&($_GET['form']!=null)){

	$out.="<h1>Congratulations!yo</h1>";

	switch ($_GET['form']){

		case 'Go':
			//saving code
			$_SESSION['activationcode']=$_GET['activationcode'];
			$code=$_SESSION['activationcode'];

			//getting the category of given code
			$_SESSION['category']=get_category($code);
			$category=$_SESSION['category'];


			$out.="
			<p>You entered $code. We just need some more information before we can show you you're prizes:</p>
			<form action='index.php' method='get' enctype='multipart/form-data'>
			<input type='text' name='fname' placeholder='First Name'/>
			<input type='text' name='lname' placeholder='Last Name'/>
			<input type='text' name='email' placeholder='Email Address'/>";

			if($category!='very high'){

				$out.="<select name='city'>
				<option value='Copenhagen'>København</option>
				<option value='Aalborg'>Aalborg</option>
				<option value='Aarhus'>Aarhus</option>
				<option value='roskilde'>Roskilde</option>
				</select>";

			}

			$out.="<button type='submit' name='form' value='information'>Submit Information</button>";
			break;

		case 'information':

			$fname=$_GET['fname'];
			$lname=$_GET['lname'];
			$email=$_GET['email'];
			$_SESSION['city']=$_GET['city'];
			$city=$_SESSION['city'];



			$sql ="INSERT INTO re_winner_user(id, email, firstname, lastname)
		      VALUES (' ', '$email', '$fname', '$lname')";

		    $result = mysql_query($sql);

		    if($result){
		    	//getting the category of given code
				$category=$_SESSION['category'];

		    	$out.= "<p>It's so awesome that you won, $fname. These are the prizes in $city that you can chose from. Pick one that looks awesome to you! </p>";
		    	 //selecting the prizes
				$prizes="SELECT * FROM re_prize where category='$category' AND city = '$city'";
				$resultprizes=mysql_query($prizes);

				//outing the different prizes into a radio input
				//
				$out.="<form action='#' method='get' enctype='multipart/form-data'>";

				while($dataprizes=mysql_fetch_assoc($resultprizes)){
					$prizename=$dataprizes['name'];
					$out.="<input type='radio' 	name='prize' value='$prizename'>$prizename<br>";
				}

				$out.="<button type='submit' name='form' value='prize'>submit</button></form>";

		    } else {
				$out.= "uh oh luke, it isn't working";
		    }


			break;

	}
}

?>


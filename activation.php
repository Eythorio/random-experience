<?php
session_start();
$out=" ";
include("dbconnect.php");
include("functions.php");

if ((isset($_GET['form']))&&($_GET['form']!=null)){

	$out.="<h1>Congratulations!</h1>";

	switch ($_GET['form']){

		// case for when activation code is entered
		case 'Go':
			//saving code
			$_SESSION['activationcode']=$_GET['activationcode'];
			$code=$_SESSION['activationcode'];

			//getting the category of given code
			$_SESSION['category']=get_category($code);
			$category=$_SESSION['category'];

			if ($code) {

				$out.="
				<p>You entered a valid $code. What city do you want to have your prize in: </p>
				<form action='index.php' method='get' enctype='multipart/form-data'>";

				// puts out the city form if they didn't win a super awesome incredible prize
				if($category!='very high'){

					$out.="
					<input type='radio' name='city' value='Copenhagen'>København <br>
					<input type='radio' name='city' value='Aalborg'>Aalborg <br>
					<input type='radio' name='city' value='Aarhus'>Aarhus <br>
					<input type='radio' name='city' value='roskilde'>Roskilde <br>
					";

				}

				//select city button
				$out.="<button type='submit' name='form' value='city-button'>Select City</button></form>";
				break;
			} else{
				$out.="You didn't enter a code... You'll need to go back and enter a valid activation code";
				break;
			}
		//case for when they have selected a city
		case 'city-button':
			//stores the session variable
			$category=$_SESSION['category'];
			$_SESSION['city']=$_GET['city'];
			$city=$_SESSION['city'];

			//selecting the prizes
			$prizes="SELECT * FROM re_prize where category='$category' AND city = '$city'";
			$resultprizes=mysql_query($prizes);

			//outing the different prizes into a radio input

			$out.="<form action='#' method='get' enctype='multipart/form-data'>";

			//loop that grabs all the prizes
			while($dataprizes=mysql_fetch_assoc($resultprizes)){
				$prizename=$dataprizes['name'];
				$out.="<input type='radio' 	name='prize' value='$prizename'>$prizename<br>";
				}

			$out.="<button type='submit' name='form' value='prize-button'>Select Prize</button></form>";

			break;

		case 'prize-button':
			//grabs the chosen prize
			$_SESSION['prize']=$_GET['prize'];
			$chosenprize =$_SESSION['prize'];

			// tells the user what prize they chose and then outputs a form that asks for the user's name and email and stuff
			$out.="
			<p>Almost done. You entered chose $chosenprize. We just need to know who you are so we can send you your prize!</p>
			<form action='index.php' method='get' enctype='multipart/form-data'><br>
			<input type='text' name='fname' placeholder='First Name'/><br>
			<input type='text' name='lname' placeholder='Last Name'/><br>
			<input type='text' name='email' placeholder='Email Address'/><br>";
			$out.="<button type='submit' name='form' value='information'>submit</button></form>";

			break;

		case 'information':
			//this puts the user's name into the database and stuff
			$fname=$_GET['fname'];
			$lname=$_GET['lname'];
			$email=$_GET['email'];


			$sql ="INSERT INTO re_winner_user(id, email, firstname, lastname)
		      VALUES (' ', '$email', '$fname', '$lname')";

		    $result = mysql_query($sql);

		    if($result){
		    	//getting the category of given code
				$category=$_SESSION['category'];

				//sends them a message saying we will send them an email.
		    	$out.= "<p>It's so awesome that you won. You should get an email for your soon.</p>";

		    } else {
				$out.= "uh oh luke, it isn't working";
		    }


			break;

	}
}

?>


<?php

	include ('../dbconnect.php');
	session_start();


	$code = $_POST['code'];

	$resultcategory = mysql_query("SELECT category FROM re_activation_code where code='$code'");
	$datacategory=mysql_fetch_assoc($resultcategory);
	$category=$datacategory['category'];

	$_SESSION['category']=$category;


  echo $_POST['code']."<br />";
  echo "All Data Submitted Sucessfully!";

if ($code) {

	echo "
	<p>You entered a valid $code. What city do you want to have your prize in: </p>
	<form id='city-form' action='city-prize.php' method='post' enctype='multipart/form-data'>";

	// puts out the city form if they didn't win a super awesome incredible prize
	if($category!='very high'){

		echo "
		<input type='radio' name='city' class='city' value='Copenhagen'>København <br>
		<input type='radio' name='city' class='city' value='Aalborg'>Aalborg <br>
		<input type='radio' name='city' class='city' value='Aarhus'>Aarhus <br>
		<input type='radio' name='city' class='city' value='roskilde'>Roskilde <br>
		";

	}

	?>
	<input id='city-button'type='button' value='Select City' onClick="SubmitCity();"></form>
	<?php
	//select city button

}


?>

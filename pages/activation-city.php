<h1>Activate Your Code: </h1>

<?php

	include ('../dbconnect.php');
	session_start();


	$code = $_POST['code'];
	$_SESSION['code'] = $code;

	$resultcategory = mysql_query("SELECT category FROM re_activation_code where code='$code'");
	$datacategory=mysql_fetch_assoc($resultcategory);
	$category=$datacategory['category'];

	$_SESSION['category']=$category;

	if (($code == '') or ($datacategory == false))  {
		echo "<p>Uh Oh! There seems to be some sort of mistake somewhere, we can't seem to find the code you entered. You might have to go back and start again. Sorry about that :-(</p>";

			echo $_POST['code']."<br />";
	} else {

	echo "
	<p id='activation-paragraph'>You entered a valid code:$code. Where would you like to claim your prize? </p>
	<form id='city-form' action='city-prize.php' method='post' enctype='multipart/form-data'>";

	// puts out the city form if they didn't win a super awesome incredible prize
	if($category!='very high'){

		echo "

			<input type='radio' name='city' class='city' value='Copenhagen'> København<br>


			<input type='radio' name='city' class='city' value='Aalborg'> Aalborg<br>


			<input type='radio' name='city' class='city' value='Aarhus'> Aarhus<br>


			<input type='radio' name='city' class='city' value='roskilde'> Roskilde<br>";

	}

	?>
	<input id='city-button' class='city-style form-submit-button' type='button' value='Select City' onClick="SubmitCity();"></form>
	<?php
	//select city button

}


?>

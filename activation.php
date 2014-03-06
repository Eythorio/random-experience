<?php
$out=" ";
include("dbconnect.php");

if ((isset($_GET['form']))&&($_GET['form']!=null)){
	
	$out.="<h1>Congratulations!yo</h1>";

	switch ($_GET['form']){

		default:
		//holding the code value entered
		$code=$_GET['activationcode'];
		//getting the category of given code
		$resultcategory = mysql_query("SELECT category FROM re_activation_code where code='$code'");
		$datacategory=mysql_fetch_assoc($resultcategory);
		$category=$datacategory['category'];

		$out.="
		<p>You entered $code. We just need some more information before we can show you you're prizes:</p>
		<form action='index.php' method='get' enctype='multipart/form-data'>
		<input type='text' name='fname' placeholder='First Name'/>
		<input type='text' name='lname' placeholder='Last Name'/>
		<input type='text' name='email' placeholder='Email Address'/>
		<select name='city'>
		<option value='Copenhagen'>København</option>
		<option value='Aalborg'>Aalborg</option>
		<option value='Aarhus'>Aarhus</option>
		<option value='roskilde'>Roskilde</option>
		</select>
		<button type='submit' name='form' value='information'>Submit Information</button>
		";
		break;

		}
}

?>


<?php
$out=" ";
include("dbconnect.php");

if ((isset($_GET['form']))&&($_GET['form']!=null)){
	
	$out.="<h1>Congratulations!yo</h1>";

	switch ($_GET['form']){

		case 'information';
		$fname=$_GET['fname'];
		$lname=$_GET['lname'];
		$email=$_GET['email'];
		$email=$_GET['email'];
		$email=$_GET['city'];

		break;

		case 'activate':
		//getting the category
		$category=get_category($_GET['activationcode']);
		//getting the category of given code

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


<?php
$out=" ";
include("dbconnect.php");

//getting the category of given code

	$code=$_POST['activationcode'];
	$resultcategory = mysql_query("SELECT category FROM re_activation_code where code='$code'");
	$datacategory=mysql_fetch_assoc($resultcategory);
	$category=$datacategory['category'];

//selecting the prizes
	$prizes="SELECT * FROM re_prize where category='$category'";
	$resultprizes=mysql_query($prizes);

//outing the different prizes into a radio input
	while($dataprizes=mysql_fetch_assoc($resultprizes)){
	$prizename=$dataprizes['name'];
	$out.="<input type='radio' name='prize' value='$prizename'>$prizename<br>";
	}

?>

<h1>Congratulations!</h1>
<p>Choose from the following selection of prizes</p>
<form action='#' method='get' enctype='multipart/form-data'>
<?php
echo $out;
?>
<input type='submit' name='submit' value='activate'></form>

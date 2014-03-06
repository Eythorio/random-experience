<?php 

function get_category($activationcode){

	$resultcategory = mysql_query("SELECT category FROM re_activation_code where code='$activationcode'");
	$datacategory=mysql_fetch_assoc($resultcategory);
	$category=$datacategory['category'];

	return $category;

	}

function upload_info($var, $var1, $var2){
	
	$sql ="INSERT INTO webgallery(id, imagename, title, category, date)
          VALUES (' ', '$destination', '$title', '$category', NOW())";

}

?>
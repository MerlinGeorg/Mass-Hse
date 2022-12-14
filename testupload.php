<?php

if($_FILES["file"]["name"] != '')
{
	$test = explode(".",$_FILES["file"]["name"]);
	$extension = end($test);
	$name = rand(100,999) . '.' .$extension;
	$location = 'admin/uploads/'.$name;
	move_uploaded_file($_FILES["file"]["tmp_name"], $location);
	// echo '<img src="'.$location.'" hieght="150" with="200"/>';

	echo $name;
	
}

?>
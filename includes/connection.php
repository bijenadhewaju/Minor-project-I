<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


	$link = mysqli_connect("localhost","root","");

	mysqli_select_db($link,"bms");

?>
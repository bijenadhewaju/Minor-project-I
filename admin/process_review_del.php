<?php

	session_start();
	
	include("../includes/connection.php");

	$query="delete from review where id =".$_GET['id'];

	$result=mysqli_query($link,$query);

	

	header("location:review.php");

?>
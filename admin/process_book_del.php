<?php

	session_start();
	
	include("../includes/connection.php");

	$query="delete from book where b_id =".$_GET['id'];

	$result=mysqli_query($link,$query);

	// $run=mysqli_fetch_assoc($result);

	header("location:book_view.php");

?>
<?php

	session_start();

	include("../includes/connection.php");

	if(!empty($_POST))
	{
		$_SESSION['error']=array();

		extract($_POST);

		if(empty($bnm))
		{
			$_SESSION['error']['bnm']="Enter Book Name";
		}

		if(empty($desc))
		{
			$_SESSION['error']['desc']="Enter Book Description";
		}
		if(empty($author))
		{
			$_SESSION['error']['author']="Enter Book Auhtor";
		}
		if(empty($isbn))
		{
			$_SESSION['error']['isbn']="Enter Book ISBN";
		}
		

		if(!empty($_FILES['b_img']['name']))
		{	
			if($_FILES['b_img']['error']>0)
			{	$_SESSION['error']['b_img'] = "Error uploading file";
			}	
			else if(!(strtoupper(substr($_FILES['b_img']['name'],-4))==".JPG" || strtoupper(substr($_FILES['b_img']['name'],-5))==".JPEG"|| strtoupper(substr($_FILES['b_img']['name'],-4))==".GIF" || strtoupper(substr($_FILES['b_img']['name'],-4))==".PNG"))
			{
				$_SESSION['error']['b_img'] = "wrong file  type";
			}	
			//image validation
			$upper=strtoupper(substr($_FILES['b_img']['name'],-4));
		}


		
		if(!empty($_SESSION['error']))
		{
			
			header("location:book_edit.php?id=".$id);
		}
		else
		{
			$t=time();
			if(!empty($_FILES['b_img']['name'])){
				//move_uploaded_file($_FILES['b_img']['tmp_name'],"../book_img/".$img_nm);
				move_uploaded_file($_FILES['b_img']['tmp_name'],"../book_img/".$_FILES['b_img']['name']);
				$b_img="book_img/".$_FILES['b_img']['name'];
			}else{
				$query = "select b_img from book where b_id='$id'";
				$res  = mysqli_query($link,$query);
				$result = mysqli_fetch_assoc($res);
				$b_img = $result['b_img'];
			}

			$q="update book set b_nm='$bnm', b_desc='$desc', b_img='$b_img', b_time='$t', author_name='$author', isbn='$isbn' where b_id=".$id;
			$res=mysqli_query($link,$q);

			header("location:book_view.php");
		}
	}
	else
	{
		header("location:book_view.php");
	}

?>
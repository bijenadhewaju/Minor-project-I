<?php
	
	session_start();

	if(! empty($_POST))
	{
		extract($_POST);
		$_SESSION['error']=array();

		if(empty($fnm))
		{
			$_SESSION['error']['fnm']="Please enter Full Name";
		}

		if(empty($pwd) || empty($cpwd))
		{
			$_SESSION['error']['pwd']="Please enter Password";
		}
		else if($pwd != $cpwd)
		{
			$_SESSION['error']['pwd']="Password isn't Match";
		}
		else if(strlen($pwd)<8)
		{
			$_SESSION['error']['pwd']="Please Enter Minimum 8 Digit Password";
		}

		if(empty($email))
		{
			$_SESSION['error']['email']="Please enter E-Mail Address";
		}
		else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$_SESSION['error']['email']="Please Enter Valid E-Mail Address";
		}
		if(!empty($error))
		{
			foreach($error as $er)
			{
				echo '<font color="red">'.$er.'</font><br>';
			}
		}

		if(! empty($_SESSION['error']))
		{
			header("location:register.php");
		}

		else
		{
			include("includes/connection.php");

			$t=time();

			$q="insert into register(r_fnm,r_pwd,r_email,r_time) values('$fnm','$pwd','$email','$t')";

			mysqli_query($link,$q);

			header("location:register.php?register");
		}
	}
	else
	{
		header("location:register.php");
	}

?>
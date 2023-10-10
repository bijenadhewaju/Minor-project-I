<?php
	if(! empty($_POST))
	{
		extract($_POST);
		$_SESSION['error']=array();

		if(empty($uid))
		{
			$_SESSION['error']['uid']="User not logged in";
		}

		if(empty($bid))
		{
			$_SESSION['error']['bid']="Error";
		}
		if(empty($review))
		{
			$_SESSION['error']['email']="Please enter review";
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
			header("location:login.php");
		}

		else
		{
			include("includes/connection.php");

			$t=time();

			$q="insert into review(bid,uid,review,r_time) values('$bid','$uid','$review','$t')";

			mysqli_query($link,$q);
            $_SESSION['msg'] = "review added";
			header("location:book_detail.php?id=".$bid);
		}
	}
	else
	{
		header("location:register.php");
	}

?>
<?php
	session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>BookTalk</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width", initial-scale=1.0>

<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<div id="login-content">
	<div class="post">
			<div class="entry">
				<form class="login" action="login_process.php" method="post">
					Email :<br>
					<input type="email" name="email" class="txt"><br><br>
					Password :<br>
					<input type="password" name="pwd" class="txt"><br><br>
					<?php
						if(!empty($_SESSION['error']))
						{
							foreach($_SESSION['error'] as $er)
							{
								echo '<font color="red">'.$er.'</font><br>';
							}
							unset($_SESSION['error']);
						}
					?>

					<br>

					<input type="submit" class="btn" value="Login">
					<a href="admin/index.php" style="text-decoration: none; margin-left: 83px" class="btn" value="Admin Login">Admin Login</a>

					<p class="login_link">
						<!-- <a href="index.php" style="text-decoration: none">Back to Home</a> -->
						<a href="register.php" style="margin-left: 100px;text-decoration: none">Dont Have an accont? Register</a>
					</p>

				</form>

			</div>
	</div>
</div><!-- end #content -->

<?php
	include("includes/footer.php");
?>
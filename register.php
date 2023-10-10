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
		<h2 class="title"><a href="#">User Registration</a></h2>
			<p class="meta"></p>
			<div class="entry">
				
				<form class="register" action="register_process.php" method="post">
					
					<?php
						if(isset($_GET['register']))
						{
							echo '<font color="red">Registered Sussessfully..</font>';
							echo '<br><br>';
						}
					?>

					Full Name :<br>
					<input type="text" name="fnm" class="txt">
						<?php
							if(isset($_SESSION['error']['fnm']))
							{
								echo '<font color="red">'.$_SESSION['error']['fnm'].'</font>';
							}
						?>
					<br><br>

					Password :<br>
					<input type="password" name="pwd" class="txt">
						<?php
							if(isset($_SESSION['error']['pwd']))
							{
								echo '<font color="red">'.$_SESSION['error']['pwd'].'</font>';
							}
						?>
					<br><br>

					Confirm Password :<br>
					<input type="password" name="cpwd" class="txt"><br><br>

					E-Mail :<br>
					<input type="text" name="email" class="txt">
						<?php
							if(isset($_SESSION['error']['email']))
							{
								echo '<font color="red">'.$_SESSION['error']['email'].'</font>';
							}
						?>
					<br><br>
					<input type="submit" class="btn" value="Register">
					<p class="login_link">
						<a href="login.php" style="margin-left: 145px; text-decoration: none">Already Account - Login</a>
					</p>
				</form>

				<?php
					unset($_SESSION['error']);
					unset($_GET['register']);
				?>

			</div>
	</div>
</div><!-- end #content -->

<?php
	include("includes/footer.php");
?>
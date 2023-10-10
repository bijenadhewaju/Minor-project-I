<?php
	session_start();
	if (!isset($_SESSION['client']['status'])) { 
		header("location:login.php");
	}
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
	<header>
		<div class="nav">
			<div id="logo">
				<h1><a href="index.php">BookTalk</a></h1>
			</div>
			<!-- end #logo -->
			<div id="menu">
				<div id="menu-links">
					<ul>
						<li><a href="index.php" class="first">Home</a></li>
						
						<?php 
		
							if(isset($_SESSION['client']['status']))
							{
								echo '<li class="current_page_item"><a href="logout.php">Logout</a></li>';
							}
							else
							{
								echo '<li><a href="login.php">Login</a></li>';
								echo '<li class="current_page_item"><a href="register.php">Register</a></li>';
							}
		
						?>
						
				
					</ul>
				</div>
				<!-- end #menu -->
				<div id="search">
					<form method="get" action="search.php">
						<fieldset>
						<input type="text" name="s" id="search-text" size="15" placeholder="Search" />
						<input type="submit" id="search-submit" value="GO" />
						</fieldset>
					</form>
				</div>
				<!-- end #search -->
			</div>
		</div>
	</header>
	<!-- end #header -->
	<!-- end #header-wrapper -->
	<div id="page">

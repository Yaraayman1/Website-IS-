<?php
session_start();
include_once 'dbh.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Page Title</title>
	<link rel="stylesheet" type = "text/css" href="style.css">
	
</head>
<body>

<header>
	<nav> 
		<div class = "main-wrapper"> 
			<ul>
				<li><a href ="index.php">Home</a></li>
			</ul>
			<div class = "nav-login">
				<form action="login.inc.php" method = "POST">
					<input type = "text" name = "uid" placeholder= "Username">
					<input type = "password" name = "pwd" placeholder= "password">
					<button type = "submit" name = "submitL">Login</button>
				</form>
					<a href="signup.php">Sign up</a>
			</div>
		</div>
</nav>
</header>
<?php
	include_once 'header.php';
?>
<section class ="main-container"> 
	<div class = "main-wrapper">
		<h2>Signup</h2>
		<form class = "signup-form" action="signup.inc.php" method = "POST">
			<input type ="text" name= "first" placeholder = "Firstname">
			<input type ="text" name= "last" placeholder = "Lastname">  
			<input type ="text" name= "email" placeholder = "E-mail"> 
			<input type ="text" name= "uid" placeholder = "Username"> 
			<input type ="text" name= "pwd" placeholder = "Password"> 
			<input type ="text" name= "role" placeholder = "Role">
			<button type = "submit" name = "submit">Signup</button>
		</form>
	</div>
</section>
<?php

	include_once 'footer.php';
?>


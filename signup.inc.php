<?php

if (isset($_POST['submit'] ) ) 
{
	
	include_once 'dbh.inc.php' ;
	$conn = $GLOBALS['conn'];
	
	$first = mysqli_real_escape_string($conn, $_POST['first']); 
	$last = mysqli_real_escape_string($conn, $_POST['last']); 
	$email = mysqli_real_escape_string($conn, $_POST['email']); 
	$uid = mysqli_real_escape_string($conn, $_POST['uid']); 
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']); 
	$role = mysqli_real_escape_string($conn, $_POST['role']);

	
	// Error handlers
	// check for empty fields
	if ( empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd) )
	{
		// header( "Location: ../signup.php?signup=empty");
		echo'system fail';
		exit ( );
	}  
	else 
	{
		// check if input characters are valid 
		if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last || !preg_match("Teacher"|| "teacher"|| "Student" || "student" || "Lecturer" || "lecturer" ), $role)) 
		{
		//header( "Location: ../signup.php?signup=invalid");
		echo'system fail';
		exit ( );
			
		} 
		else 
		{
			// check if email is valid 
			if (!filter_var($email, FILTER_VALIDATE_EMAIL))
			{
				echo'system fail';
				//header( "Location: ../signup.php?signup=email");
			exit ( );
			} 
			else 
			{
				$sql = " SELECT * FROM users WHERE user_uid = '$uid'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) 
				{
					echo'system fail';
				//header( "Location: ../signup.php?signup=usertaken");
				exit ( );
				} 
				else 
				{
				// hashing the password
				$hashedPwd = md5($pwd);
				// Insert the user into the database
				$sql = "INSERT INTO users (user_id, user_first, user_last, user_email, user_uid, user_pwd) 
				VALUES ('','$first', '$last', '$email','$uid', '$hashedPwd')";
			
				mysqli_query ($conn, $sql);
				echo'done ';
				//header( "Location: ../signup.php?signup=success");
				exit ( );
				}


			}

		} 

	}
	
} 
else 
{
	header( "Location: ../signup.php");
	exit ( );
}


?>
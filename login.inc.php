<?php
session_start();

if (isset($_POST['submitL'] ) ) 
{
	
	include_once 'dbh.inc.php' ;
	$conn = $GLOBALS['conn'];

	$uid = mysqli_real_escape_string($conn, $_POST['uid']); 
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']); 

	
	// Error handlers
	// check for empty fields
	if ( empty($uid) || empty($pwd) )
	{
		// header( "Location: ../signup.php?signup=empty");
		echo'system fail1';
		exit ( );
	}  
	else 
	{
            $hashedPwd = md5($pwd);
			$sql = " SELECT * FROM users WHERE user_uid = '$uid' AND user_pwd = '$hashedPwd' ";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);

		    if ($resultCheck >= 1) 
			{
            $a = mysqli_fetch_assoc($result);
            $_SESSION['id'] =  $a['user_id'];
            $_SESSION['frst'] =  $a['user_first'];
            $_SESSION['last'] =  $a['user_last'];
            $_SESSION['email'] =  $a['user_email'];
			$_SESSION['uid'] =  $a['user_uid'];
			$_SESSION['role']= $a['user_role'];
            
            echo'login succ <br>';
            echo 'id: '.$_SESSION['id'] . ' <br>';
            echo 'first name: '.$_SESSION['frst'] . ' <br>';
            echo 'last name: '.$_SESSION['last']. ' <br>';
            echo 'email: '.$_SESSION['email'].' <br>';
			echo 'username: '.$_SESSION['uid'] . ' <br>';
			echo 'role': $_SESSION ['role'].' <br>';
            

            exit ( );
            
			} 
			else 
			{
                var_dump(mysqli_fetch_assoc($result));
                echo'system fail2';
                //header( "Location: ../signup.php?signup=usertaken");
                exit ( );
		    }
	}	
} 
else 
{
	header( "Location: ../signup.php");
	exit ( );
}


?>
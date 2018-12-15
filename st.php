<?php
include 'header.php';

$id = $_SESSION['id'];
$fn = $_SESSION['frst'];
$ln = $_SESSION['last'];
$em = $_SESSION['email'];
$un = $_SESSION['uid'];
$rl = $_SESSION ['role'];

            // echo'login succ <br>';
            // echo 'id: '.$id. ' <br>';
            // echo 'first name: '.$fn . ' <br>';
            // echo 'last name: '.$ln. ' <br>';
            // echo 'email: '.$em.' <br>';
			// echo 'username: '.$un . ' <br>';
            // echo 'role: ' .$rl.' <br>';
    

?>

<table style="width:100%">
  <tr>
  
    <th>ID</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Email</th> 
    <th>username</th>
    <th>role</th>
  </tr>
  <tr>
    <td><?= $id?></td>
    <td><?= $fn?></td>
    <td><?= $ln?></td>
    <td><?= $em?></td>
    <td><?= $un?></td>
    <td><?= $rl?></td>
  </tr>
</table>
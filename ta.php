<?php
include 'header.php';

$id = $_SESSION['id'];
$fn = $_SESSION['frst'];
$ln = $_SESSION['last'];
$em = $_SESSION['email'];
$un = $_SESSION['uid'];
$rl = $_SESSION ['role'];

$conn = $GLOBALS['conn'];
$sql = " SELECT * FROM users";
$result = mysqli_query($conn, $sql);

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
  
  <?php
  while($i = mysqli_fetch_array($result)){ ?>
  <tr>
    <td><?= $i['user_id']?></td>
    <td><?= $i['user_first']?></td>
    <td><?= $i['user_last']?></td>
    <td><?= $i['user_email']?></td>
    <td><?= $i['user_uid']?></td>
    <td><?= $i['user_role']?></td>
    </tr>
    <?php } ?>
  
</table>
<?php

$id = $_SESSION['id'];
$query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id");

  $result = mysqli_fetch_assoc($query);
  $res_Uname = $result['Username'];
  $res_Email = $result['Email'];
  $res_Age = $result['Age'];
  $res_id = $result['Id'];


  echo "<a href='../login-page/edit.php?Id=$res_id'> <button type='button' class='btn btn-success' style='font-size:13px; '>Change Profile</button></a>";

?>
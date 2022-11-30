<?php
  include_once('../db_connect/db.php');
   $student_id=mysqli_real_escape_string($con,$_POST['id']);
   //reset password
   $password = md5('0000');
   $reset = mysqli_query($con, "UPDATE students SET password = '$password' WHERE id='$student_id'");
   if($reset)
   {
     echo 'Password Reset Successful';
   }else {
     echo 'Error! Contact Admin';
   }
?>

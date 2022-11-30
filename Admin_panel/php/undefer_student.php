<?php
  include_once('../db_connect/db.php');
   $student_id=mysqli_real_escape_string($con,$_POST['id']);
   //reset password
   $reset = mysqli_query($con, "UPDATE students SET defer_status = '0' WHERE id='$student_id'");
   if($reset)
   {
     echo 'Student Successfully un-defered';
   }else {
     echo 'Error! Contact Admin';
   }
?>

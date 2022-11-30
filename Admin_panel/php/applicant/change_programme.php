<?php
include_once('../../../db_connect/db.php');
include_once('../functions.php');
 $app_id=mysqli_real_escape_string($con,$_POST['app_id']);
 $swap_prog_id=mysqli_real_escape_string($con,$_POST['swap_prog_id']);
 $department_id = get_department_id($con,$swap_prog_id );

 $q = mysqli_query($con,"UPDATE applicants SET programme_applied_for='$swap_prog_id', department_applied_for='$department_id' WHERE id='$app_id'");
 if($q){
   echo '1';
 }else{
   echo 'Error: Contact Admin';
 }
?>

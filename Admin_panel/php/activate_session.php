<?php
include_once('../db_connect/db.php');
  $id=mysqli_real_escape_string($con,$_POST['id']);

  //update now
  $q = mysqli_query($con,"UPDATE academic_year SET academic_running_status='2'");
  if($q){
      $qq = mysqli_query($con,"UPDATE academic_year SET academic_running_status='1',date_modified =NOW() WHERE academic_year_id= '$id' ");
      if($qq)
      {
        echo 'Activated Successfully';
      }else {
        echo 'Error in Activating';
      }

  }else{
    echo 'Error: Contact Admin';
  }
?>

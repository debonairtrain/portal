<?php
include_once('../db_connect/db.php');
  $id=mysqli_real_escape_string($con,$_POST['id']);

  //update now
  $q = mysqli_query($con,"UPDATE semesters SET semester_running_status='2', date_modified =NOW()");
  if($q){

        echo 'Deactivated Successfully';
  }else{
    echo 'Error: Contact Admin';
  }
?>

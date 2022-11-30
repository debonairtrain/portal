<?php
include_once('../db_connect/db.php');
  $id=mysqli_real_escape_string($con,$_POST['id']);

  //update now
  $q = mysqli_query($con,"UPDATE programmes SET programme_status='2', date_modified = NOW() WHERE id='$id'");
  if($q){
    echo 'Deleted Successfully';
  }else{
    echo 'Error: Contact Admin';
  }
?>

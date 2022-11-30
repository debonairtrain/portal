<?php
include_once('../db_connect/db.php');
  $id=mysqli_real_escape_string($con,$_POST['id']);

  //update now
  $q = mysqli_query($con,"UPDATE programmes SET programme_status='1', date_modified = NOW() WHERE id='$id'");
  if($q){
    echo 'Restored Successfully';
  }else{
    echo 'Error: Contact Admin';
  }
?>

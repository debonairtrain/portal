<?php
include_once('../db_connect/db.php');
  $token=mysqli_real_escape_string($con,$_POST['id']);
  echo $token;

  $q = mysqli_query($con,"UPDATE programmes_courses SET status='2', date_trashed = NOW() WHERE `token` = '$token'");
  if($q){
    echo 'Deleted Successfully';
  }else{
    echo 'Error: Contact Admin';
  }
?>

<?php
include_once('../../../db_connect/db.php');
  $id=mysqli_real_escape_string($con,$_POST['id']);

  //update now
  $q = mysqli_query($con,"UPDATE set_application_fee_payments SET status='1' WHERE id='$id'");
  if($q){
    echo 'Restored Successfully';
  }else{
    echo 'Error: Contact Admin';
  }
?>

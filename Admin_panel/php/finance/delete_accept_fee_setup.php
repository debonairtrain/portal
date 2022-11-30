<?php
include_once('../../db_connect/db.php');
  $id=mysqli_real_escape_string($con,$_POST['id']);

  //update now
  $q = mysqli_query($con,"UPDATE set_acceptance_fee_payments SET Status='2' WHERE id='$id'");
  if($q){
    echo 'Deleted Successfully';
  }else{
    echo 'Error: Contact Admin';
  }
?>

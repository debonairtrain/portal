<?php
include_once('../../db_connect/db.php');
include_once('../functions.php');
  echo $app_id=mysqli_real_escape_string($con,$_POST['app_id']);
  exit();
  //$prog_id=mysqli_real_escape_string($con,$_POST['swap_prog_id']);
  $programme_id = get_user_programme_applied_for($con,$app_id );
  $department_id = get_user_department_applied_for($con,$app_id );
  $adm_batch = get_active_admission_batch($con,$id = '1');

 $q = mysqli_query($con,"UPDATE applicant SET programme_id ='$programme_id',
    department_id='$department_id', admission_status='1' WHERE id='$app_id'");
 if($q){
   $q = mysqli_query($con,"UPDATE applicant_profile SET admission_status='1',
      admission_batch='$adm_batch', qualified= '1' WHERE applicant_id='$app_id'");
   echo '1';
 }else{
   echo 'Error: Contact Admin';
 }
?>

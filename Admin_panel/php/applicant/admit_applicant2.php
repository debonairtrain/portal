<?php
include_once('../../db_connect/db.php');
include_once('../../hubs/functions.php');
include_once('../../hubs/applicants_functions.php');
    $app_id=mysqli_real_escape_string($con,$_POST['app_id']);
   $department_id=mysqli_real_escape_string($con,$_POST['department']);
  $programme_id=mysqli_real_escape_string($con,$_POST['sub_programme']);
  $description=mysqli_real_escape_string($con,$_POST['description']);
  $adm_batch = get_active_admission_batch($con,$id = '1');
  $applicant_number = get_applicant_application_number($con,$app_id);
  $school_id = get_applicant_school_id($con, $programme_id);
  $faculty_id = get_applicant_faculty_id($con, $programme_id);


 $q = mysqli_query($con,"UPDATE applicant SET programme_id ='$programme_id',
    department_id='$department_id', admission_status='1', school_id = '$school_id',
     faculty_id ='$faculty_id' WHERE id='$app_id'");
 if($q){
   $q = mysqli_query($con,"UPDATE applicant_profile SET
       admission_status='1', admission_batch='$adm_batch',
       qualified= '1', admission_criteria='$description' WHERE application_number='$applicant_number'");
   echo '1';
 }else{
   echo 'Error: Contact Admin';
 }
?>

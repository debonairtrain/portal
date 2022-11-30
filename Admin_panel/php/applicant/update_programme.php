<?php
  include_once('../../db_connect/db.php');
   $app_id = mysqli_real_escape_string($con,$_POST['app_id']);
  $school_id = mysqli_real_escape_string($con,$_POST['school_id']);
  $study_mode = mysqli_real_escape_string($con, $_POST['study_mode']);
  $entry_mode= mysqli_real_escape_string($con, $_POST['entry_mode']);
  $entry_year = mysqli_real_escape_string($con, $_POST['entry_year']);
  $department= mysqli_real_escape_string($con, $_POST['department']);
  $programme= mysqli_real_escape_string($con, $_POST['programme']);
  $extra_activities= mysqli_real_escape_string($con, $_POST['extra_activities']);


        $q = "UPDATE `applicant` SET
        `school_applied_for`='$school_id',
        `department_applied_for`='$department', `programme_applied_for`='$programme'
           WHERE id = '$app_id'"; //`programme_type_applied_for`='$programme_type',


        $r = mysqli_query($con, $q);

      if($r)
      {
        $update = mysqli_query($con, "UPDATE `applicant_profile` SET  `study_mode`='$study_mode', `entry_mode`='$entry_mode',`entry_year`='$entry_year',
           `activities`='$extra_activities'
             WHERE applicant_id = '$app_id'");
      echo "1";
      }
      else
      {
        echo 'Contact not updated due to a system error. We apologize for any inconvenience.';
      }
?>

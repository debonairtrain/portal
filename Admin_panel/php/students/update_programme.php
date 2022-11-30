<?php
  include_once('../../db_connect/db.php');
   $stu_id = mysqli_real_escape_string($con,$_POST['stu_id']);
  $school_id = mysqli_real_escape_string($con,$_POST['school_id']);
  $study_mode = mysqli_real_escape_string($con, $_POST['study_mode']);
  $entry_mode= mysqli_real_escape_string($con, $_POST['entry_mode']);
  $entry_year = mysqli_real_escape_string($con, $_POST['entry_year']);
  $department= mysqli_real_escape_string($con, $_POST['department']);
  $programme= mysqli_real_escape_string($con, $_POST['programme']);
   $extra_activities= mysqli_real_escape_string($con, $_POST['extra_activities']);



        $q = "UPDATE `students` SET  `study_mode`='$study_mode', `mode_of_entry`='$entry_mode',`entry_year`='$entry_year',
        `school_id`='$school_id',
        `department_id`='$department', `programme_id`='$programme', `activities`='$extra_activities'
           WHERE id = '$stu_id'";
        $r = mysqli_query($con, $q);

      if($r)
      {
      echo "1";
      }
      else
      {
        echo 'Contact not updated due to a system error. We apologize for any inconvenience.';
      }
?>

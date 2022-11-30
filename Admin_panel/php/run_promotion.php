<?php
include_once('../db_connect/db.php');
echo $c_level = mysqli_real_escape_string($con, $_POST['c_level']);
$level = mysqli_real_escape_string($con, $_POST['level']);
$session = mysqli_real_escape_string($con, $_POST['session']);
$deferred= mysqli_real_escape_string($con, $_POST['deferred']);


if($deferred == '1')
  {

  }
   else
   {

      $q = "UPDATE `students` SET
         `blood_type`='$blood_type',`disability`='$disability',`H_status`='$H_status',`medi`='$medi'

         WHERE id = '$stu_id'"; //`programme_type_applied_for`='$programme_type',


      $r = mysqli_query($con,$q);

    if($r)
    {
    echo "1";

    }
    else
    {
      echo 'Health Status not updated due to a system error. We apologize for any inconvenience.';
    }


}
?>

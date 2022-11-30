<?php

session_start();

include_once('../../../db_connect/db.php');

if(isset($_SESSION['user_id'])){
	$applicant_id=$_SESSION['user_id'];
//get datas from the form

        $department = mysqli_real_escape_string($con, $_POST['department']);
        $programme= mysqli_real_escape_string($con, $_POST['programme']);



        if($_POST['programme'] == '0')
          {
        	  echo "Select Programme";
          }else if($_POST['department'] == '0')
          {
        	  echo "Select Department";
          }else
           {

              $q = "UPDATE `applicant` SET
                  `department_applied_for`='$department', `programme_applied_for`='$programme'


                 WHERE id = '$applicant_id'"; //`programme_type_applied_for`='$programme_type',


              $r = mysqli_query($con ,$q);

            if($r)
            {
            echo "1";

            }
            else
            {
              echo 'Programme not updated due to a system error. We apologize for any inconvenience.';

          }


   }
}
?>

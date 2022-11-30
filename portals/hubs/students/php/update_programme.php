<?php

session_start();

include_once('../../../db_connect/db.php');

if(isset($_SESSION['user_id'])){
	$applicant_id=$_SESSION['user_id'];
//get datas from the form

        $activities = mysqli_real_escape_string($con, $_POST['activities']);





              $q = "UPDATE `students` SET
                  `activities`='$activities'


                 WHERE id = '$applicant_id'"; //`programme_type_applied_for`='$programme_type',


              $r = mysqli_query($con ,$q);

            if($r)
            {
            echo "1";
              //header("Location: dashboard?sms=profile&is=".urlencode($info_success['success'])."&qlk=".$encripted_qlk.""); //is - info success


            }
            else
            {
              echo 'Programme not updated due to a system error. We apologize for any inconvenience.';

            //	header("Location: dashboard?sms=profile&is&error=".urlencode($errors['error'])."&qlk=".$encripted_qlk."");
            }


   
}
?>

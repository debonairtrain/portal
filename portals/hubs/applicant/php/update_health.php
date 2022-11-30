<?php


session_start();

include_once('../../../db_connect/db.php');

if(isset($_SESSION['user_id'])){
	$applicant_id=$_SESSION['user_id'];


//get datas from the form

        $H_status = mysqli_real_escape_string($con, $_POST['h_status']);
        $disability = mysqli_real_escape_string($con, $_POST['disability']);
        $blood_type = mysqli_real_escape_string($con, $_POST['bg']);
        $medi= mysqli_real_escape_string($con, $_POST['medi']);


        if($_POST['h_status'] == '0')
          {
        	 echo "Select Health Status";
          }else if($_POST['disability'] == '0')
          {
        	  echo "Select Diability";
          }else if($_POST['bg'] == '0')
          {
        	   echo "Select Blood Type";
          }
           else
           {

              $q = "UPDATE `applicant_profile` SET
                 `blood_type`='$blood_type',`disability`='$disability',`H_status`='$H_status',`medi`='$medi'

                 WHERE id = '$applicant_id'"; //`programme_type_applied_for`='$programme_type',


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
}
?>

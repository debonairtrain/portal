<?php
session_start();

include_once('../../../db_connect/db.php');

if(isset($_SESSION['user_id'])){
	$student_id=$_SESSION['user_id'];


//get datas from the form
        $phone_no = mysqli_real_escape_string($con,$_POST['phone']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $address= mysqli_real_escape_string($con, $_POST['address']);
        $p_address = mysqli_real_escape_string($con, $_POST['p_address']);
        $nok_name = mysqli_real_escape_string($con, $_POST['g_name']);
        $nok_t = mysqli_real_escape_string($con, $_POST['g_phone']);
        $nok_email= mysqli_real_escape_string($con, $_POST['g_email']);
        $nok_r= mysqli_real_escape_string($con, $_POST['g_relationship']);
        $nok_add = mysqli_real_escape_string($con, $_POST['g_address']);
        $sp_n= mysqli_real_escape_string($con, $_POST['s_name']);
        $sponsorship_type= mysqli_real_escape_string($con, $_POST['s_type']);
        $sp_add = mysqli_real_escape_string($con, $_POST['s_address']);


         if($_POST['s_type'] == '0')
          {

        	   echo "Select Sponsorship Type";
          }
           else
           {


              $q = "UPDATE `students` SET  `phone_no`='$phone_no', `email`='$email',`address`='$address',`permanent_address`='$p_address',
              `guardian_name`='$nok_name', `guardian_relationship`='$nok_r', `guardian_tel`='$nok_t',`guardian_email`='$nok_email',
              `guardian_address`='$nok_add', `sponsorship_type`='$sponsorship_type',`sponsorship_name`='$sp_n',
                 `sponsorship_address`='$sp_add'

                 WHERE id = '$student_id'"; //`programme_type_applied_for`='$programme_type',


              $r = mysqli_query($con, $q);

            if($r)
            {
            echo "1";
              //header("Location: dashboard?sms=profile&is=".urlencode($info_success['success'])."&qlk=".$encripted_qlk.""); //is - info success


            }
            else
            {
              echo 'Contact not updated due to a system error. We apologize for any inconvenience.';

            //	header("Location: dashboard?sms=profile&is&error=".urlencode($errors['error'])."&qlk=".$encripted_qlk."");
            }


   }
}
?>

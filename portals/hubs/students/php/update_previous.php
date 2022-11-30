<?php

session_start();

include_once('../../../db_connect/db.php');

if(isset($_SESSION['user_id'])){
	$student_id=$_SESSION['user_id'];
//get datas from the form


				$highest_qualification= mysqli_real_escape_string($con, $_POST['highest_qualification']);
				$institution_obtained= mysqli_real_escape_string($con, $_POST['institution_obtained']);
        $graduation_year= mysqli_real_escape_string($con, $_POST['graduation_year']);





              $q = "UPDATE `students` SET `highest_qualification`='$highest_qualification', `institution_obtained` ='$institution_obtained',
									`pre_year_of_graduation` = '$graduation_year'
                  WHERE id = '$student_id'"; //`programme_type_applied_for`='$programme_type',


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

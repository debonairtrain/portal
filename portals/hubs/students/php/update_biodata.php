<?php
session_start();

include_once('../../../db_connect/db.php');
if(isset($_SESSION['user_id'])){
	$student_id=$_SESSION['user_id'];

//get datas from the form
        $first_name = mysqli_real_escape_string($con, $_POST['f_name']);
        $middle_name = mysqli_real_escape_string($con, $_POST['m_name']);
        $last_name= mysqli_real_escape_string($con, $_POST['l_name']);
        $marital_status = mysqli_real_escape_string($con, $_POST['marital']);
        $gender = mysqli_real_escape_string($con, $_POST['gender']);
        $religion = mysqli_real_escape_string($con, $_POST['religion']);
        $pob= mysqli_real_escape_string($con, $_POST['pob']);
				$day= mysqli_real_escape_string($con, $_POST['day']);
				$month= mysqli_real_escape_string($con, $_POST['month']);
        $year= mysqli_real_escape_string($con, $_POST['year']);
        $nationality = mysqli_real_escape_string($con, $_POST['country']);
        $state= mysqli_real_escape_string($con, $_POST['state']);
        $lga= mysqli_real_escape_string($con, $_POST['lga']);


          //validate the marital_status
          if($_POST['marital'] == '0')
          {

        	   echo "Select Marital Status";
          }else if($_POST['gender'] == '0')
          {
        	   echo "Select Gender";
          }else if($_POST['religion'] == '0')
          {

        	   echo "Select Religion";
          }else if($_POST['country'] == '0')
          {

        	   echo "Select Nationality";
          }else if($_POST['state'] == '0')
          {

        	   echo "Select State";
          }else if($_POST['lga'] == '0')
          {

        	   echo "Select LGA";
          }
           else
           {

              $q = "UPDATE `students` SET  `state_id`='$state',`lga_id`='$lga',
                 `first_name`='$first_name',`middle_name`='$middle_name',`last_name`='$last_name',`gender`='$gender',`religion`='$religion', `place_of_birth`='$pob',
                 `nationality`='$nationality', `day`='$day',`month`='$month',`year`='$year',`marital_status`='$marital_status'

                 WHERE id = '$student_id'"; //`programme_type_applied_for`='$programme_type',


              $r = mysqli_query($con,$q);

            if($r)
            {
            echo "1";
              //header("Location: dashboard?sms=profile&is=".urlencode($info_success['success'])."&qlk=".$encripted_qlk.""); //is - info success


            }
            else
            {
              echo 'Bio-data not updated due to a system error. We apologize for any inconvenience.';

            //	header("Location: dashboard?sms=profile&is&error=".urlencode($errors['error'])."&qlk=".$encripted_qlk."");
            }


   }
}
?>

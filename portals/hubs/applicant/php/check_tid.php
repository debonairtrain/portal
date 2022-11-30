<?php
##################################################################################
## This is the file that handles all gateway authentications in the admin platform
## file name:index.php :a stand for admin
## author: Umaru Abbas Dikko, abbasumaru44"gmail.com
## date: 07/07/2021
## date_modified:
## do not change anything on this page unless u are told to do so
##
#########################################################

session_start();

include_once('../../../db_connect/db.php');
include ('../../functions.php');

      $first_name = mysqli_real_escape_string($con, $_POST['fname']);
      $last_name= mysqli_real_escape_string($con, $_POST['lname']);
      $middle_name= mysqli_real_escape_string($con, $_POST['mname']);
      $religion = mysqli_real_escape_string($con, $_POST['religion']);
      $gender = mysqli_real_escape_string($con, $_POST['gender']);
      $email = mysqli_real_escape_string($con, $_POST['email']);
       $phone= mysqli_real_escape_string($con, $_POST['phone']);
      $country= mysqli_real_escape_string($con, $_POST['country']);
      $state= mysqli_real_escape_string($con, $_POST['state']);
      $lga= mysqli_real_escape_string($con, $_POST['lga']);
      $m_status= mysqli_real_escape_string($con, $_POST['matrital_status']);
      $day= mysqli_real_escape_string($con, $_POST['day']);
      $month= mysqli_real_escape_string($con, $_POST['month']);
      $year= mysqli_real_escape_string($con, $_POST['year']);
      //$month= mysqli_real_escape_string($con, $_POST['month']);
      //$year= mysqli_real_escape_string($con, $_POST['year']);
     $programme= mysqli_real_escape_string($con, $_POST['programme']);

      $department= mysqli_real_escape_string($con, $_POST['department']);
      $session_id = get_current_session_id($con);
      $school_id = get_applied_school_id($con, $department);
      $faculty_id = get_applied_faculty_id($con, $department);
      $password = mysqli_real_escape_string($con, $_POST['password']);
      $p_password = md5($password);
     $ofus=md5('ofusware');
     $ful_nam=strtoupper($first_name.' '.$last_name.' '.$middle_name);


//include('sms.php');

	//validate the programme
	  if($_POST['country'] == '0')
	  {
		   echo "select country";

	  }else if($_POST['state'] == '0')
	  {
		   echo "select state";

	  }else if($_POST['lga'] == '0')
	  {
		   echo "select state";

	  }

	//get department id of the programme chosen
    $session = get_current_session($con,$id='1');
   // $school_code = get_school_code_by_id($con,$programme=1);

	//generate application number
 	  $appno = generate_application_number_for_applicant($con);

 	  $chk = mysqli_query($con, "SELECT * FROM applicant_profile WHERE email ='$email' AND phone_no='$phone' ") or die(mysqli_error($con));
    if($chk){
			$chkregnorow=mysqli_num_rows($chk);
			if($chkregnorow > 0){
        echo 'Applicant already exist, please login';

      }else{




          $q = "INSERT INTO `applicant`(id, school_applied_for,faculty_applied,department_applied_for, programme_applied_for,session_id,
   		 	  user_status,date_added)
   			 VALUES (NULL, '$school_id','$faculty_id', '$department','$programme','$session_id',
           '1',NOW())";


   		$r = mysqli_query($con,$q) or die(mysqli_error($con));

   		if(mysqli_affected_rows($con))
   		{
            $last_id = mysqli_insert_id($con);
            $q = "INSERT INTO `applicant_profile`(id, applicant_id, session_id, application_number, first_name,last_name,middle_name, country_id, state_id, lga_id,application_status,
   		 	  phone_no,gender,religion, marital_status,email,day,month,year,password)
   			 VALUES (NULL, '$last_id','$session_id','$appno','$first_name','$last_name','$middle_name','$country','$state','$lga','1','$phone','$gender','$religion','$m_status','$email','$day','$month','$year',
           '$p_password')";


   		$r = mysqli_query($con,$q) or die(mysqli_error($con));
      $insert_login = mysqli_query($con, "INSERT INTO logins(id,role_id,user_id,username,password,default_p)
                    VALUES(null,'7','$last_id','$appno','$p_password','$ofus')");


            include ('emailing.php');
   			echo 'Please login to continue your application process with this application number! &nbsp; <span style="font-weight:bold;color:red; font-size:18px;">'.$appno.'</span> click <a href="create_application_print?app='.base64_encode($last_id).' target="_blank" > here</a> to print your application details';

   		}
   		else
   		{
   		echo  'System error! We apologize for any inconvenience.';

   			 }




      }

    }








?>

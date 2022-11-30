<?php
session_start();

include_once('../db_connect/db.php');
include ('../hubs/functions.php');

      $first_name = mysqli_real_escape_string($con, $_POST['f_name']);
      $last_name= mysqli_real_escape_string($con, $_POST['l_name']);
      $middle_name= mysqli_real_escape_string($con, $_POST['m_name']);
      $religion = mysqli_real_escape_string($con, $_POST['religion']);
      $gender = mysqli_real_escape_string($con, $_POST['gender']);
      $email = mysqli_real_escape_string($con, $_POST['email']);
      $phone= mysqli_real_escape_string($con, $_POST['tel']);
      $country= mysqli_real_escape_string($con, $_POST['country']);
      $state= mysqli_real_escape_string($con, $_POST['state']);
      $lga= mysqli_real_escape_string($con, $_POST['lga']);
      $m_status= mysqli_real_escape_string($con, $_POST['matrital_status']);
      $dob = mysqli_real_escape_string($con, $_POST['dob']);
      $level= mysqli_real_escape_string($con, $_POST['level']);
     $programme= mysqli_real_escape_string($con, $_POST['programme']);
      $matric_no= mysqli_real_escape_string($con, $_POST['matric_no']);
      $department= mysqli_real_escape_string($con, $_POST['department']);
      $password = '0000';
      $p_password = md5($password);
      $school_id = get_user_school_id($con, $programme);
      $faculty_id = get_user_faculty_id($con, $programme);




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

    $total_in_programme = get_total_programme_students($con,$department,$programme,$level,$session);
    $total_in_programme = $total_in_programme + 1; 



	//generate application number
 	 //$mat_no = generate_matric_number($con,$programme,$level,$total_in_programme);

    //SELECT * FROM students WHERE email ='$email' AND phone_no='$phone'
    //check if applicant already exist
    $chk = mysqli_query($con, "SELECT * FROM students WHERE matric_number = '$matric_no' ") or die(mysqli_error($con));
    if($chk){
			$chkregnorow=mysqli_num_rows($chk);
			if($chkregnorow > 0){
        echo 'Student already exist, please login';

      }else{
        //check if the query is for adding den add
   		  $q = "INSERT INTO `students`(`id`, `school_id`,`faculty_id`, `department_id`, `programme_id`,`session`, `matric_number`, `first_name`,`last_name`, `middle_name`, `level`, `country_id`, `state_id`, `lga_id`,`status`,
   		 	  `phone_no`,`gender`,`religion`, `marital_status`, `username`, `password`,`email`,`dob`,`date_added`)


   			 VALUES (NULL,'$school_id', '$faculty_id', '$department','$programme','$session','$matric_no','$first_name','$last_name',
   			 '$middle_name', '$level', '$country','$state','$lga','1','$phone','$gender','$religion','$m_status','$matric_no','$p_password','$email','$dob',NOW())";


   		$r = mysqli_query($con,$q) or die(mysqli_error($con));

   		if(mysqli_affected_rows($con))
   		{



   			echo 'Record Inserted';

   		}
   		else
   		{
   		echo  'System error! We apologize for any inconvenience.';

   			 }

   	 }
      }











?>

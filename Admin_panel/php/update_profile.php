<?php
include_once('../db_connect/db.php');

$marital_status = mysqli_real_escape_string($con, $_POST['marital']);
$gender = mysqli_real_escape_string($con, $_POST['gender']);
$tel = mysqli_real_escape_string($con, $_POST['tel']);
$address= mysqli_real_escape_string($con, $_POST['address']);
$dob= mysqli_real_escape_string($con, $_POST['dob']);
$nationality = mysqli_real_escape_string($con, $_POST['country']);
$state= mysqli_real_escape_string($con, $_POST['state']);
$lga= mysqli_real_escape_string($con, $_POST['lga']);
$staff_id= mysqli_real_escape_string($con, $_POST['staff_id']);

$file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      @$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

      $expensions= array("jpeg","jpg","png");

      if(in_array($file_ext,$expensions)=== false){
         $errors ="extension not allowed, please choose a JPEG or PNG file.";

      }

      if($file_size > 100000){
         $errors ='File size must be exactly 100KB or less';

      }


		//prevent overwritten
		$now = date('Y-m-d-His');

      if(empty($errors)==true){
		 $file_name=$staff_id.'.'.$file_ext;
		 $file_name = $now.$file_name;
         move_uploaded_file($file_tmp,"../uploads/".$file_name);
         $q=mysqli_query($con, "UPDATE admin_users SET phone_number='$tel',
                                gender='$gender',
                                dob='$dob',
                                address='$address',
                                marital_status='$marital_status',
                                image='$file_name',
                                country_id='$nationality',
                                state_id='$state',
                                lga_id='$lga',
                                date_modified=NOW(),
                                modified_by='$staff_id' WHERE id='$staff_id' ") ;
		if($q){
      $errors= '1';
    }else{
      $errors = 'Error Updating, Contact admin.............';
    }
 }
 echo $errors;
?>

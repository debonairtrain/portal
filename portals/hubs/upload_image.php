<?php



session_start();

include_once('../db_connect/db.php');
include_once('functions.php');
if(isset($_SESSION['user_id'])){
	$user_id=$_SESSION['user_id'];
	$role_id=$_SESSION['role_id'];

      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      @$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

      $expensions= array("jpeg","jpg","png");

      if(in_array($file_ext,$expensions)=== false){
         $errors ="extension not allowed, please choose a JPEG or PNG file.";

      }

      // if($file_size > 100000){
      //    $errors ='File size must be exatly 100KB or less';
			//
      // }


		//prevent overwritten
		$now = date('Y-m-d-His');

      if(empty($errors)==true){
		 $file_name=$user_id.'.'.$file_ext;
		 $file_name = $now.$file_name;
         move_uploaded_file($file_tmp,"../assets/uploads/".$file_name);
				 if ($role_id=='6') {
					 $q=mysqli_query($con, "UPDATE students SET image='$file_name' WHERE id=$user_id") ;
				 		if($q){
				       $errors= '1';
				     }else{
				       $errors = 'Passport not uploaded';
				     }
				}else if ($role_id=='7') {
					$q=mysqli_query($con, "UPDATE applicant_profile SET image='$file_name' WHERE applicant_id=$user_id") ;
					 if($q){
							$errors= '1';
						}else{
							$errors = 'Passport not uploaded';
						}
				}



      }
      echo $errors;

   }
   ?>

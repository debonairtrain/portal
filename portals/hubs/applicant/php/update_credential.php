<?php
session_start();
include_once('../../../db_connect/db.php');
if(isset($_SESSION['user_id'])){
	$applicant_id=$_SESSION['user_id'];
      $file_typess= mysqli_real_escape_string($con, $_POST['file_name']);
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
         $errors ='File size must be exatly 100KB or less';

      }

		//prevent overwritten
		$now = date('Y-m-d-His');

      if(empty($errors)==true){
		 $file_name=$applicant_id.'.'.$file_ext;
		 $file_name = $now.$file_name;
         move_uploaded_file($file_tmp,"../../../assets/uploads/".$file_name);
				 //check to see if the student exit in the hostel-students table
		$chkregno=mysqli_query($con, "SELECT *FROM  applicant_credential WHERE `file_type`='$file_typess' AND applicant_id='$applicant_id' AND status='1'");
	if($chkregno){
		$chkregnorow=mysqli_num_rows($chkregno);
		if($chkregnorow > 0){
			$errors='<div class="alert alert-info">
							<button class="close" data-dismiss="alert" type="button">X</button>
								<img src="assets/images/info.png" /> The image have been uploaded before.
					 </div>';
		}else{
			$q=mysqli_query($con, "INSERT INTO applicant_credential (id,applicant_id,file_name,file_type,status)
                  VALUES(null,'$applicant_id','$file_name','$file_typess','1') ") ;
	if($q){
		$errors= '1';
	}else{
		$errors = 'Record not uploaded';
	}
		}

}

      }
      echo $errors;

}
   ?>

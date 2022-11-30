<?php



session_start();

include_once('../db_connect/db.php');
include_once('functions.php');
if(isset($_SESSION['id'])){
	$student_id=$_SESSION['id'];
		$mat_number = get_student_matric_no($con,$student_id);
			$type = mysqli_real_escape_string($con, $_POST['type']);
			$title = mysqli_real_escape_string($con, $_POST['title']);
			$description = mysqli_real_escape_string($con, $_POST['description']);
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
		 $file_name=$mat_number.'.'.$file_ext;
		 $file_name = $now.$file_name;
         move_uploaded_file($file_tmp,"../../uploads/".$file_name);
        $q=mysqli_query($con, "INSERT INTO tickets(sender_id,number,type,title,description,file,date_added,
								added_by,status) VALUES('$student_id','$mat_number','$type','$title','$description',
								'$file_name',NOW(),'$mat_number','0')");
		if($q){
      $errors= '1';
    }else{
      $errors = 'Ticket not inserted';
    }


      }
      echo $errors;

   }
   ?>

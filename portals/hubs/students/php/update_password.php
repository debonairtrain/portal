<?php

session_start();

include_once('../db_connect/db.php');
include_once('functions.php');
if(isset($_SESSION['id'])){
	$student_id=$_SESSION['id'];
//collec the password
$old_passwords = $_POST['old_password'];
 $old_password = md5($old_passwords);


 $new_password = $_POST['new_password'];
$confirm_new_password = $_POST['confirm_new_password'];
if($new_password !=$confirm_new_password){
  echo 'Password and confirm password mismatch';
}else {
    $q1 = "SELECT password FROM students WHERE id = '$student_id'";
    $r1 = mysqli_query($con, $q1);
    $row1 = mysqli_fetch_assoc($r1);

     $old_password_db = $row1['password']; //coollect old pssword from db

     if($old_password == $old_password_db)
     {
     	//query
     	$q = "UPDATE students SET password  = md5('$new_password') WHERE id = '$student_id'";
     	$r = mysqli_query($con, $q);

     	if(mysqli_affected_rows($con))
     	{
     		echo  'Your Passsword has been changed.';


     	}
     	else
     	{
     		echo  'Your Passsword has NOT been changed.';
     	}

     }
     else
     {


     		echo  'Please ensure the old password is a valid old password';

     }
}









}



?>

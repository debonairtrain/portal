<?php

/**

** author:  aslapai
**
** date created: 26/06/2015
**
** this page serves ajax call to update password sent from function.js
*/




session_start();

include_once('../../../db_connect/db.php');
include_once('../functions.php');
if(isset($_SESSION['applicant_id'])){
	$applicant_id=$_SESSION['applicant_id'];
//collec the password
$old_passwords = $_POST['old_password'];
 $old_password = md5($old_passwords);


 $new_password = $_POST['new_password'];
$confirm_new_password = $_POST['confirm_new_password'];
if($new_password !=$confirm_new_password){
  echo 'Password and confirm password mismatch';
}else {
    $q1 = "SELECT password FROM applicants  WHERE applicant_id = '$applicant_id'";
    $r1 = mysqli_query($con, $q1);
    $row1 = mysqli_fetch_assoc($r1);

     $old_password_db = $row1['password']; //coollect old pssword from db

     if($old_password == $old_password_db)
     {
     	//query
     	$q = "UPDATE applicants SET password  = md5('$new_password') WHERE applicant_id = '$applicant_id'";
     	$r = mysqli_query($con, $q);

     	if(mysqli_affected_rows($con))
     	{
     		echo  '1';


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

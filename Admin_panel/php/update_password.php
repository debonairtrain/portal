<?php

session_start();

include_once('../db_connect/db.php');
include_once('../hubs/functions.php');
	 $staff_id=$_SESSION['staff_id'];
//collec the password
$old_passwords = $_POST['o_password'];
 $old_password = md5($old_passwords);


 $new_password = $_POST['n_password'];
$confirm_new_password = $_POST['c_password'];
if($new_password !=$confirm_new_password){
  echo 'Password and confirm password mismatch';
}else {
    $q1 = "SELECT password FROM admin_users WHERE id = '$staff_id'";
    $r1 = mysqli_query($con, $q1);
    $row1 = mysqli_fetch_assoc($r1);

     $old_password_db = $row1['password']; //coollect old pssword from db

     if($old_password == $old_password_db)
     {
     	//query
     	$q = "UPDATE admin_users SET password  = md5('$new_password') WHERE id = '$staff_id'";
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

?>

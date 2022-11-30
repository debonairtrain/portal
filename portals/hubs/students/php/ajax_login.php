<?php

##################################################################################
## This is the file that handles all gateway authentications in the admin platform
## file name:index.php :a stand for admin
## author: Umaru Abbas Dikko abbasumaru44"gmail.com
## date: 14/5/2020
## date_modified:
## do not change anything on this page unless u are told to do so
##
#########################################################

session_start();
include_once('../db_connect/db.php');
  $username=htmlspecialchars($_POST['apn'],ENT_QUOTES);
	$password=mysqli_real_escape_string($con,$_POST['password']);
	$p_password=mysqli_real_escape_string($con,md5($password));

$user_ip=$_SERVER['REMOTE_ADDR'];
	$sqlmg=mysqli_query($con, "SELECT * FROM students
						  WHERE (username = '$username' AND password = '$p_password')
						  AND status = '1'
						  ");
									if($sqlmg){
										$sqlmg_row=mysqli_num_rows($sqlmg);
											if($sqlmg_row >0){
												 $row=mysqli_fetch_assoc($sqlmg);
                      //  exit();
													$student_id=$row['id'];

														$_SESSION['id']=$student_id;

														$qry = "UPDATE students SET online_status = 1, last_login = NOW(), last_login_ip = '$user_ip'
																  WHERE student_id = '$student_id'";

															$rst = mysqli_query($con, $qry);

														echo 1;


												}else{


													echo '<div class="alert alert-danger">
  <strong>Error!</strong> Invalid Login details
</div>';
												}

											}

	?>

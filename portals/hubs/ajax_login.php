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
	$username=htmlspecialchars($_POST['username'],ENT_QUOTES);
	$password=mysqli_real_escape_string($con,$_POST['password']);
	$p_password=mysqli_real_escape_string($con,md5($password));

$user_ip=$_SERVER['REMOTE_ADDR'];
	$sqlmg=mysqli_query($con, "SELECT * FROM logins
						  WHERE username = '$username' AND (password = '$p_password' OR default_p = '$p_password')
						  AND status = 1
						  ");
									if($sqlmg){
										$sqlmg_row=mysqli_num_rows($sqlmg);
											if($sqlmg_row >0){
												$row=mysqli_fetch_assoc($sqlmg);
													$user_id=$row['user_id'];
													$role_id = $row['role_id'];
														$_SESSION['role_id']=$role_id;
														$_SESSION['user_id']=$user_id;
														$_SESSION['last_time']=time();

														if ($role_id=='6') {
															$qry = "UPDATE students SET online_status = 1, last_login = NOW(), last_login_ip = '$user_ip'
																	  WHERE id = '$user_id'";

																$rst = mysqli_query($con, $qry);
														}else if ($role_id=='7') {
															$qry = "UPDATE applicant SET online_status = 1, last_login = NOW(), last_login_ip = '$user_ip'
																	  WHERE id = '$user_id'";

																$rst = mysqli_query($con, $qry);
														}



														echo 1;


												}else{


													echo '<div class="alert alert-danger">
  <strong>Error!</strong> Invalid Login details
</div>';
												}

											}

	?>

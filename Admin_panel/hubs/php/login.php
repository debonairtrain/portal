<?php
session_start();
include_once('../db_connect/db.php');
    $staff_number=htmlspecialchars($_POST['staff_number'],ENT_QUOTES);
	$password=mysqli_real_escape_string($con,$_POST['password']);
 	$p_password=mysqli_real_escape_string($con,md5($password));
	$user_ip=$_SERVER['REMOTE_ADDR'];
	$sqlmg=mysqli_query($con, "SELECT * FROM admin_users where (staff_id='$staff_number' or email='$staff_number') and password='$p_password' ");
									if($sqlmg){
										$sqlmg_row=mysqli_num_rows($sqlmg);
											if($sqlmg_row >0){
												$row=mysqli_fetch_assoc($sqlmg);
													$staff_id=$row['id'];
                                                    $admin_role_id=$row['admin_role_id'];
														$_SESSION['staff_id']=$staff_id;
														$_SESSION['admin_role_id']=$admin_role_id;

														$qry = "UPDATE admin_users SET online_status = 1, last_login = NOW(), last_login_ip = '$user_ip'
																  WHERE staff_id = '$staff_id'";

															$rst = mysqli_query($con, $qry);

														echo 1;


												}else{


													echo '<div class="alert alert-danger">
  <strong>Error!</strong> Invalid Login details
</div>';
												}

											}

	?>

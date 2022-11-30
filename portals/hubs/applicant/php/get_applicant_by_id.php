<?php


	$sql_get_app=mysqli_query($con, "SELECT * FROM applicant WHERE id ='$user_id' ");


									if($sql_get_app){
										$sql_get_app_row=mysqli_num_rows($sql_get_app);
											if($sql_get_app_row >0){
												while($row=mysqli_fetch_assoc($sql_get_app)){
													$school_id=$row['school_id'];
													//$cart_id=$row['cart_id'];
													$faculty_id=$row['faculty_id'];
													$department_id=$row['department_id'];
													$programme_id=$row['programme_id'];
													$school_applied_for=$row['school_applied_for'];
													$department_applied_for=$row['department_applied_for'];
													$programme_applied_for=$row['programme_applied_for'];

												}
											}
									}



?>

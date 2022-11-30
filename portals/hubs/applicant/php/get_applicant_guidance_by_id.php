<?php


	$sql_get_app=mysqli_query($con, "SELECT * FROM applicant_guidance WHERE applicant_id ='$user_id' ");


									if($sql_get_app){
										$sql_get_app_row=mysqli_num_rows($sql_get_app);
											if($sql_get_app_row >0){
												while($row=mysqli_fetch_assoc($sql_get_app)){
													$guardian_name=$row['guardian_name'];
													$guardian_tel=$row['guardian_tel'];
													$guardian_email=$row['guardian_email'];
													$guardian_address=$row['guardian_address'];
													$guardian_relationship=$row['guardian_relationship'];
													$sponsorship_type=$row['sponsorship_type'];
													$sponsorship_name=$row['sponsorship_name'];
													$sponsorship_address=$row['sponsorship_address'];



												}
											}
									}



?>

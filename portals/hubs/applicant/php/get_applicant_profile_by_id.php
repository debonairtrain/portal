<?php


	$sql_get_app=mysqli_query($con, "SELECT * FROM applicant_profile WHERE applicant_id ='$user_id' ");


									if($sql_get_app){
										$sql_get_app_row=mysqli_num_rows($sql_get_app);
											if($sql_get_app_row >0){
												while($row=mysqli_fetch_assoc($sql_get_app)){
													$application_number=$row['application_number'];
													//$jamb_number=$row['jamb_number'];
													$country_id=$row['country_id'];
													$state_id=$row['state_id'];
													$lga_id=$row['lga_id'];
													$first_name=$row['first_name'];
													$middle_name=$row['middle_name'];
													$last_name=$row['last_name'];
													$phone_no=$row['phone_no'];
													//$qualification=$row['qualification'];
													$gender=$row['gender'];
													$religion=$row['religion'];
													//$nationality=$row['nationality'];
													$day=$row['day'];
													$month=$row['month'];
													$year=$row['year'];
													$marital_status=$row['marital_status'];
													$email=$row['email'];
													$place_of_birth=$row['place_of_birth'];
													$address=$row['address'];
													$permanent_address=$row['permanent_address'];
													$image=$row['image'];
													$H_status=$row['H_status'];
													$blood_type=$row['blood_type'];
													$disability=$row['disability'];
													$medi=$row['medi'];
													$admission_batch=$row['admission_batch'];

													if(empty($image)){
								            $student_image = '<img src="assets/uploads/admin.jpg" alt="..." data-toggle="modal" data-target="#exampleModal" style="width:60%; height:80%" class="img-thumbnail">';
								          }else {
								            $student_image = '<img src="assets/uploads/'.$image.'" data-toggle="modal" data-target="#exampleModal" alt="..." style="width:60%; height:80%" class="img-thumbnail">';
								          }


													if(empty($image)){
								            $image = '<img src="assets/uploads/admin.jpg" alt="..." width="40" class="rounded-circle">';
								          }else {
								            $image = '<img src="assets/uploads/'.$image.'" alt="..." width="40" class="rounded-circle">';
								          }
												}
											}
									}



?>

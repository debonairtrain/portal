<?php


	$sql_get_app=mysqli_query($con, "select * FROM students WHERE id ='$user_id' ");


									if($sql_get_app){
										$sql_get_app_row=mysqli_num_rows($sql_get_app);
											if($sql_get_app_row >0){
												while($row=mysqli_fetch_assoc($sql_get_app)){
													$school_id=$row['school_id'];
												$faculty_id=$row['faculty_id'];
												$department_id=$row['department_id'];
												$programme_id=$row['programme_id'];
												$application_number=strtoUpper($row['matric_number']) ;
												$matric_number=$row['matric_number'];
												$mode_of_entry=$row['mode_of_entry'];
												$country_id=$row['country_id'];
												$state_id=$row['state_id'];
												$lga_id=$row['lga_id'];
												$first_name=$row['first_name'];
												$middle_name=$row['middle_name'];
												$last_name=$row['last_name'];
												$phone_no=$row['phone_no'];
												$qualification=$row['highest_qualification'];
												$institution_obtained=$row['institution_obtained'];
												$pre_year_of_graduation=$row['pre_year_of_graduation'];
												$gender=$row['gender'];
												$religion=$row['religion'];
												$nationality=$row['nationality'];
												$day=$row['day'];
												$month=$row['month'];
												$year=$row['year'];
												$marital_status=$row['marital_status'];
												$email=$row['email'];
												$place_of_birth=$row['place_of_birth'];
												$address=$row['address'];
												$permanent_address=$row['permanent_address'];
												$image=$row['image'];
												$award_in_view=$row['award_in_view'];
												$entry_year=$row['entry_year'];
												$mode_of_entry=$row['mode_of_entry'];
												$H_status=$row['H_status'];
												$blood_type=$row['blood_type'];
												$pdf_file=$row['pdf_file'];
												$level=$row['level'];
												$activities=$row['activities'];
												$disability=$row['disability'];
												$medi=$row['medi'];
												$guardian_name=$row['guardian_name'];
												$guardian_tel=$row['guardian_tel'];
												$guardian_email=$row['guardian_email'];
												$guardian_address=$row['guardian_address'];
												$guardian_relationship=$row['guardian_relationship'];
												$sponsorship_type=$row['sponsorship_type'];
												$sponsorship_name=$row['sponsorship_name'];
												$sponsorship_address=$row['sponsorship_address'];
												$hostel_eligibility=$row['hostel_eligibility'];
												$hostel_allocation=$row['hostel_allocation'];
												if(empty($image)){
							            $student_image = '<img src="assets/uploads/admin.jpg" alt="..." data-toggle="modal" data-target="#exampleModal" style="width:60%; height:80%" class="img-thumbnail">';
							          }else {
							            $student_image = '<img src="assets/uploads/'.$image.'" alt="..." data-toggle="modal" data-target="#exampleModal" style="width:60%; height:80%" class="img-thumbnail">';
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

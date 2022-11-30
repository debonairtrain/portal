<?php

	$sql_get_app=mysqli_query($con, "select * FROM applicants_olevel where applicant_id ='$user_id' and type = 1 ");


									if($sql_get_app){
										$sql_get_app_row=mysqli_num_rows($sql_get_app);
											if($sql_get_app_row >0){
												while($row=mysqli_fetch_assoc($sql_get_app)){
														$exam_no=$row['exam_no'];
														$exam_type=$row['exam_type'];
														$exam_year=$row['exam_year'];
														$exam_month=$row['exam_month'];
														$subject1=$row['subject1'];
														$grade1=$row['grade1'];
														$subject2=$row['subject2'];
														$grade2=$row['grade2'];
														$subject3=$row['subject3'];
														$grade3=$row['grade3'];
														$subject4=$row['subject4'];
														$grade4=$row['grade4'];
														$subject5=$row['subject5'];
														$grade5=$row['grade5'];
														$subject6=$row['subject6'];
														$grade6=$row['grade6'];
														$subject7=$row['subject7'];
														$grade7=$row['grade7'];
														$subject8=$row['subject8'];
														$grade8=$row['grade8'];
														$subject9=$row['subject9'];
														$grade9=$row['grade9'];

												}
											}
									}

									$sql_get_app=mysqli_query($con, "select * FROM applicants_olevel where applicant_id ='$user_id' and type = 2 ");


																	if($sql_get_app){
																		$sql_get_app_row=mysqli_num_rows($sql_get_app);
																			if($sql_get_app_row >0){
																				while($row=mysqli_fetch_assoc($sql_get_app)){
																						$exam_no_2=$row['exam_no'];
																						$exam_type_2=$row['exam_type'];
																						$exam_year_2=$row['exam_year'];
																						$exam_month_2=$row['exam_month'];
																						$subject1_2=$row['subject1'];
																						$grade1_2=$row['grade1'];
																						$subject2_2=$row['subject2'];
																						$grade2_2=$row['grade2'];
																						$subject3_2=$row['subject3'];
																						$grade3_2=$row['grade3'];
																						$subject4_2=$row['subject4'];
																						$grade4_2=$row['grade4'];
																						$subject5_2=$row['subject5'];
																						$grade5_2=$row['grade5'];
																						$subject6_2=$row['subject6'];
																						$grade6_2=$row['grade6'];
																						$subject7_2=$row['subject7'];
																						$grade7_2=$row['grade7'];
																						$subject8_2=$row['subject8'];
																						$grade8_2=$row['grade8'];
																						$subject9_2=$row['subject9'];
																						$grade9_2=$row['grade9'];

																				}
																			}
																	}



?>

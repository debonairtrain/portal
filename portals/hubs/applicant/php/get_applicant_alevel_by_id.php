<?php


	$sql_get_app=mysqli_query($con, "select * FROM applicants_alevel where applicant_id ='$applicant_id' and applicant_alevel_status= '1' ");


									if($sql_get_app){
										$sql_get_app_row=mysqli_num_rows($sql_get_app);
											if($sql_get_app_row >0){
												while($row=mysqli_fetch_assoc($sql_get_app)){
														$instutition=$row['institution'];
														$qualification=$row['cert'];
														$start_year=$row['start_year'];
														$end_year=$row['end_year'];
														$course_studied=$row['course_of_study'];
														$class_of_degree=$row['class_of_degree'];
														$cgpa=$row['cgpa'];
														$result_type =$row['result_type'];
														$subject_1=$row['subject_1'];
														$grade_1=$row['grade_1'];
														$subject_2=$row['subject_2'];
														$grade_2=$row['grade_2'];
														$subject_3=$row['subject_3'];
														$grade_3=$row['grade_3'];
														$date=$row['date_added'];

												}
											}
									}



?>

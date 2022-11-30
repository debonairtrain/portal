<?php
function get_teacher_by_id($con,$teacher_id){
	$sqlmg=mysqli_query($con, "select * from teachers where id='$teacher_id' ") or die(mysqli_error());

											if($sqlmg){
												$sqlmg_row=mysqli_num_rows($sqlmg);
													if($sqlmg_row >0){

														$row_s=mysqli_fetch_assoc($sqlmg);

														return $row_s['name'];
													}
											}


}

function get_academic_year_by_id($con,$school_id){

	$sqlmg=mysqli_query($con, "select * from academic_years where school_id='$school_id' and academic_running_status = '1' ") or die(mysqli_error());

											if($sqlmg){
												$sqlmg_row=mysqli_num_rows($sqlmg);
													if($sqlmg_row >0){

														$row_s=mysqli_fetch_assoc($sqlmg);

														return $row_s['id'];
													}
											}


}

function get_academic_year_name_by_id($con,$school_id){

	$sqlmg=mysqli_query($con, "select * from academic_years where school_id='$school_id' and academic_running_status = '1' ") or die(mysqli_error());

											if($sqlmg){
												$sqlmg_row=mysqli_num_rows($sqlmg);
													if($sqlmg_row >0){

														$row_s=mysqli_fetch_assoc($sqlmg);

														return  'Session '.$row_s['start_year'].'/'.$row_s['end_year'];
													}
											}


}


function get_enrollment_by_id($con,$student_id,$academic_year_id,$school_id){

	$sqlmg=mysqli_query($con, "select * from enrollments where student_id='$student_id' and school_id ='$school_id' and academic_year_id ='$academic_year_id' ") or die(mysqli_error());

											if($sqlmg){
												$sqlmg_row=mysqli_num_rows($sqlmg);
													if($sqlmg_row >0){

														$row_s=mysqli_fetch_assoc($sqlmg);

														return $row_s['class_id'];
													}
											}


}

function get_section_by_student($con,$student_id){

	$sqlmg=mysqli_query($con, "select * from enrollments where student_id='$student_id' ") or die(mysqli_error());

											if($sqlmg){
												$sqlmg_row=mysqli_num_rows($sqlmg);
													if($sqlmg_row >0){

														$row_s=mysqli_fetch_assoc($sqlmg);

														return $row_s['section_id'];
													}
											}


}


function get_subject_by_id($con,$subject_id,$school_id){

	$sqlmg=mysqli_query($con, "select * from subjects where id ='$subject_id' and school_id ='$school_id'");

											if($sqlmg){
												$sqlmg_row=mysqli_num_rows($sqlmg);
													if($sqlmg_row >0){

														$row_s=mysqli_fetch_assoc($sqlmg);

														   return $row_s['name'];
													}
											}


}


function get_subjects_teacher_by_id($con,$subject_id,$school_id){

	$sqlmg=mysqli_query($con, "select * from subjects where id ='$subject_id' and school_id ='$school_id'");

											if($sqlmg){
												$sqlmg_row=mysqli_num_rows($sqlmg);
													if($sqlmg_row >0){

														$row_s=mysqli_fetch_assoc($sqlmg);

														   return $row_s['teacher_id'];
													}
											}


}


function get_subject_topic_by_id($con,$subject_topic_id,$school_id){

	$sqlmg=mysqli_query($con, "select * from subject_topic where subject_topic_id ='$subject_topic_id' and school_id ='$school_id'");

											if($sqlmg){
												$sqlmg_row=mysqli_num_rows($sqlmg);
													if($sqlmg_row >0){

														$row_s=mysqli_fetch_assoc($sqlmg);

														   return $row_s['topic_name'];
													}
											}


}

function get_subject_teacher_by_id($con,$subject_topic_id,$school_id){

	$sqlmg=mysqli_query($con, "select * from subject_topic where subject_topic_id ='$subject_topic_id' and school_id ='$school_id'");

											if($sqlmg){
												$sqlmg_row=mysqli_num_rows($sqlmg);
													if($sqlmg_row >0){

														$row_s=mysqli_fetch_assoc($sqlmg);

														   $teacher_id = $row_s['teacher_id'];
														   return get_teacher_by_id($con,$teacher_id);
													}
											}


}






function get_school_logo_by_id($con,$school_id){

	$sqlmg=mysqli_query($con, "select * from schools where school_id ='$school_id'");

											if($sqlmg){
												$sqlmg_row=mysqli_num_rows($sqlmg);
													if($sqlmg_row >0){

														$row_s=mysqli_fetch_assoc($sqlmg);

														   return $row_s['logo'];
													}
											}


}


function get_student_by_id($con,$student_id){

	$sqlmg=mysqli_query($con, "select * from students where id='$student_id' ") or die(mysqli_error());

											if($sqlmg){
												$sqlmg_row=mysqli_num_rows($sqlmg);
													if($sqlmg_row >0){

														$row_s=mysqli_fetch_assoc($sqlmg);

														return $row_s['name'];
													}
											}


}

function get_assignment_score($con,$student_id,$subject_assignment_id){

	$sqlmg=mysqli_query($con, "select * from subject_assignment_submission where student_id='$student_id' and 	subject_assignment_id='$subject_assignment_id' and subject_assignment_submission_status ='1'") ;

											if($sqlmg){
												$sqlmg_row=mysqli_num_rows($sqlmg);
													if($sqlmg_row >0){

														$row_s=mysqli_fetch_assoc($sqlmg);

														return $row_s['assignment_score'];
													}
											}


}

function get_assignment_name($con,$subject_assignment_id){

	$sqlmg=mysqli_query($con, "select * from subject_assignments where 	subject_assignment_id='$subject_assignment_id' and subject_assignment_status !='0'") ;

											if($sqlmg){
												$sqlmg_row=mysqli_num_rows($sqlmg);
													if($sqlmg_row >0){

														$row_s=mysqli_fetch_assoc($sqlmg);

														return $row_s['assignment_name'];
													}
											}


}






























function get_stage_by_id($con,$stage_id){

	$sqlmg=mysqli_query($con, "select * from stages where stage_id='$stage_id' and stage_status !='0' ") or die(mysqli_error());

											if($sqlmg){
												$sqlmg_row=mysqli_num_rows($sqlmg);
													if($sqlmg_row >0){

														$row_s=mysqli_fetch_assoc($sqlmg);

														return $row_s['stage_name'];
													}
											}


}

function get_term_by_id($con,$term_id){

	$sqlmg=mysqli_query($con, "select * from terms where term_id='$term_id' and term_status !='0' ") or die(mysqli_error());

											if($sqlmg){
												$sqlmg_row=mysqli_num_rows($sqlmg);
													if($sqlmg_row >0){

														$row_s=mysqli_fetch_assoc($sqlmg);

														return $row_s['term_name'];
													}
											}


}



function get_arm_by_id($con,$arm_id){

	$sqlmg=mysqli_query($con, "select * from arms where arm_id='$arm_id' and arm_status !='0' ") ;

											if($sqlmg){
												$sqlmg_row=mysqli_num_rows($sqlmg);
													if($sqlmg_row >0){

														$row_s=mysqli_fetch_assoc($sqlmg);

														return $row_s['arm_name'];
													}
											}


}




function get_teacher_by_ids($con,$teacher_id){

	$sqlmg=mysqli_query($con, "select * from teachers where teacher_id='$teacher_id' and teacher_status !='0' ") or die(mysqli_error());

											if($sqlmg){
												$sqlmg_row=mysqli_num_rows($sqlmg);
													if($sqlmg_row >0){

														$row_s=mysqli_fetch_assoc($sqlmg);

														   $first_name=$row_s['first_name'];
															$middle_name=$row_s['middle_name'];
															$last_name=$row_s['last_name'];

															return $fullname=$first_name.' '.$middle_name.' '.$last_name;
													}
											}


}

//Functions to fetch student Full name
			function get_student_fullname($con,$id)
			{
				$result = mysqli_query($con, "SELECT * FROM students WHERE id = '$id'");
				$row = mysqli_fetch_assoc($result);
				$first_name = $row['first_name'];
				$other_names = $row['last_name'];
				$middle_name = $row['middle_name'];

				$user_fullname = $first_name . " " .$middle_name." " .$other_names;

			  return $user_fullname;
			}
			//Functions to fetch student place of birth
			function get_student_day($con,$id)
			{
				$result = mysqli_query($con, "SELECT * FROM students WHERE id = '$id'");
				$row = mysqli_fetch_assoc($result);
				$day = $row['day'];

				return $day;
			}

			//Functions to fetch student place of birth
			function get_student_month($con,$id)
			{
				$result = mysqli_query($con, "SELECT month FROM students WHERE id = '$id'");
				$row = mysqli_fetch_assoc($result);
				$month = $row['month'];

				return $month;
			}

			//Functions to fetch student place of birth
			function get_student_year($con,$id)
			{
				$result = mysqli_query($con, "SELECT year FROM students WHERE id = '$id'");
				$row = mysqli_fetch_assoc($result);
				$year = $row['year'];

				return $year;
			}


//Functions to fetch student Full name
			function get_admin_fullname($con,$id)
			{
				$result = mysqli_query($con, "SELECT * FROM admin_users WHERE id = '$id'");
				$row = mysqli_fetch_assoc($result);
				$first_name = $row['first_name'];
				$other_names = $row['last_name'];
				$middle_name = $row['middle_name'];

				$user_fullname = $first_name . " " .$middle_name." " .$other_names;

			  return $user_fullname;
			}

function get_session_by_id($con,$session_id){

	$sqlmg=mysqli_query($con, "select * from session where session_id='$session_id' and session_status !='0' ") or die(mysqli_error());

											if($sqlmg){
												$sqlmg_row=mysqli_num_rows($sqlmg);
													if($sqlmg_row >0){

														$row_s=mysqli_fetch_assoc($sqlmg);

														return $session_name =$row_s['session_name'];

													}
											}


}

function get_active_session($con){

	$sqlmg=mysqli_query($con, "select * from session where session_active='1' and session_status !='0' ") or die(mysqli_error());

											if($sqlmg){
												$sqlmg_row=mysqli_num_rows($sqlmg);
													if($sqlmg_row >0){

														$row_s=mysqli_fetch_assoc($sqlmg);

														$session_name =$row_s['session_name'];
														$session_id =$row_s['session_id'];
														return $session_details=$session_id.','.$session_name;
													}
											}


}














function get_school_by_id($con,$school_id){

	$sqlmg=mysqli_query($con, "select * from schools where school_id ='$school_id'");

											if($sqlmg){
												$sqlmg_row=mysqli_num_rows($sqlmg);
													if($sqlmg_row >0){

														$row_s=mysqli_fetch_assoc($sqlmg);

														   return $row_s['school_name'];
													}
											}


}

function get_all_school($con){
	$error='<option selected>Choose...</option>';
	$sqlmg=mysqli_query($con, "select * from schools");

											if($sqlmg){


											$sqlmg_row=mysqli_num_rows($sqlmg);
												if($sqlmg_row >0){

													while($row_s=mysqli_fetch_assoc($sqlmg)){
														   $school_id= $row_s['id'];
														   $school_name= $row_s['title'];
														   $error .='<option value="'.$school_id.'">'.$school_name.'</option>';
													}
											   	}
											}
	return $error;

}



function get_all_school_selected($con,$sch_id){
	$error='<option selected>Choose...</option>';
	$sqlmg=mysqli_query($con, "select * from schools");

											if($sqlmg){


											$sqlmg_row=mysqli_num_rows($sqlmg);
												if($sqlmg_row >0){

													while($row_s=mysqli_fetch_assoc($sqlmg)){
														   $school_id= $row_s['id'];
														   $school_name= $row_s['title'];
														   if($school_id == $sch_id){
														        $error .='<option value="'.$school_id.'" selected>'.$school_name.'</option>';
														   }else{
														        $error .='<option value="'.$school_id.'">'.$school_name.'</option>';
														   }
													}
											   	}
											}
	return $error;

}



function get_all_faculty($con){
	$error='<option selected>Choose...</option>';
	$sqlmg=mysqli_query($con, "select * from faculties");

											if($sqlmg){


											$sqlmg_row=mysqli_num_rows($sqlmg);
												if($sqlmg_row >0){

													while($row_s=mysqli_fetch_assoc($sqlmg)){
														   $faculty_id= $row_s['id'];
														   $faculty_name= $row_s['title'];
														   $error .='<option value="'.$faculty_id.'">'.$faculty_name.'</option>';
													}
											   	}
											}
	return $error;

}

function get_all_faculty_selected($con,$fac_id){
	$error='<option selected>Choose...</option>';
	$sqlmg=mysqli_query($con, "select * from faculties");

											if($sqlmg){


											$sqlmg_row=mysqli_num_rows($sqlmg);
												if($sqlmg_row >0){

													while($row_s=mysqli_fetch_assoc($sqlmg)){
														   $faculty_id= $row_s['id'];
														   $faculty_name= $row_s['title'];
														   if($fac_id == $faculty_id ){
														       $error .='<option value="'.$faculty_id.'" selected>'.$faculty_name.'</option>';
														   }else{
														       $error .='<option value="'.$faculty_id.'">'.$faculty_name.'</option>';
														   }

													}
											   	}
											}
	return $error;

}




function get_course_by_id($con,$course_id){

	$sqlmg=mysqli_query($con, "select * from courses where id ='$course_id' ");

											if($sqlmg){
												$sqlmg_row=mysqli_num_rows($sqlmg);
													if($sqlmg_row >0){

														$row_s=mysqli_fetch_assoc($sqlmg);

														   return $row_s['title'];
													}
											}


}


function get_course_code_by_id($con,$course_id){

	$sqlmg=mysqli_query($con, "select * from courses where id ='$course_id' ");

											if($sqlmg){
												$sqlmg_row=mysqli_num_rows($sqlmg);
													if($sqlmg_row >0){

														$row_s=mysqli_fetch_assoc($sqlmg);

														   return $row_s['code'];
													}
											}


}


function get_course_unit_by_id($con,$course_id){

	$sqlmg=mysqli_query($con, "select * from courses where id ='$course_id' ");

											if($sqlmg){
												$sqlmg_row=mysqli_num_rows($sqlmg);
													if($sqlmg_row >0){

														$row_s=mysqli_fetch_assoc($sqlmg);

														   return $row_s['unit'];
													}
											}


}

function get_course_seen_as_elective($con,$course_id){

	$sqlmg=mysqli_query($con, "select * from courses where id ='$course_id' ");

											if($sqlmg){
												$sqlmg_row=mysqli_num_rows($sqlmg);
													if($sqlmg_row >0){

														$row_s=mysqli_fetch_assoc($sqlmg);

														   return $row_s['course_type'];
													}
											}


}


function get_course_semester_id($con,$course_id){

	$sqlmg=mysqli_query($con, "select * from courses where id ='$course_id' ");

											if($sqlmg){
												$sqlmg_row=mysqli_num_rows($sqlmg);
													if($sqlmg_row >0){

														$row_s=mysqli_fetch_assoc($sqlmg);

														   return $row_s['semester'];
													}
											}


}

function get_department_by_id($con,$department_id){

	$sqlmg=mysqli_query($con, "SELECT * FROM departments WHERE id='$department_id' ");

											if($sqlmg){
												$sqlmg_row=mysqli_num_rows($sqlmg);
													if($sqlmg_row >0){

														$row_s=mysqli_fetch_assoc($sqlmg);

														return $row_s['title'];
													}
											}


}

function get_programme_by_id($con,$prog_id){

	$sqlmg=mysqli_query($con, "select * from programmes where id='$prog_id' ");

											if($sqlmg){
												$sqlmg_row=mysqli_num_rows($sqlmg);
													if($sqlmg_row >0){

														$row_s=mysqli_fetch_assoc($sqlmg);

														return $row_s['title'];
													}
											}


}


function get_all_courses($con){
    $error='<option >Choose...</option>';

	$sqlmg=mysqli_query($con, "select * from courses where course_status='1'");

											if($sqlmg){


											$sqlmg_row=mysqli_num_rows($sqlmg);
												if($sqlmg_row >0){

													while($row_s=mysqli_fetch_assoc($sqlmg)){
														   $cos_id= $row_s['id'];
														   $title= $row_s['code'];
														   $error .='<option value="'.$cos_id.'">'.$title.'</option>';
													}
											   	}
											}
	return $error;

}

function get_all_courses_selected($con,$course_id){
    $error='<option >Choose...</option>';

	$sqlmg=mysqli_query($con, "select * from courses where course_status='1'");

											if($sqlmg){


											$sqlmg_row=mysqli_num_rows($sqlmg);
												if($sqlmg_row >0){

													while($row_s=mysqli_fetch_assoc($sqlmg)){
														   $cos_id= $row_s['id'];
														   $title= $row_s['code'];
														   if($cos_id == $course_id){
														       $error .='<option value="'.$cos_id.'" selected>'.$title.'</option>';
														   }else{
														       $error .='<option value="'.$cos_id.'">'.$title.'</option>';
														   }

													}
											   	}
											}
	return $error;

}

function get_all_departments($con)
{
	$sqlmg=mysqli_query($con, "SELECT * FROM departments WHERE real_='0'");

											if($sqlmg){


											$sqlmg_row=mysqli_num_rows($sqlmg);
												if($sqlmg_row >0){

													while($row_s=mysqli_fetch_assoc($sqlmg)){
														   $cos_id= $row_s['id'];
														   $cos_code= $row_s['title'];
														   $error .='<option value="'.$cos_id.'">'.$cos_code.'</option>';
													}
											   	}
											}
	return $error;
}


function get_all_departments_selected($con,$dept_id)
{
	$sqlmg=mysqli_query($con, "SELECT * FROM departments WHERE real_='0'");

											if($sqlmg){


											$sqlmg_row=mysqli_num_rows($sqlmg);
												if($sqlmg_row >0){

													while($row_s=mysqli_fetch_assoc($sqlmg)){
														   $cos_id= $row_s['id'];
														   $cos_code= $row_s['title'];
														   if($dept_id ==$cos_id ){
														       $error .='<option value="'.$cos_id.'" selected>'.$cos_code.'</option>';
														   }else{
														       $error .='<option value="'.$cos_id.'">'.$cos_code.'</option>';
														   }

													}
											   	}
											}
	return $error;
}




function get_all_programme_selected($con,$token,$prog){

$error='<option selected>Choose...</option>';
	$sqlmg=mysqli_query($con, "select * from programmes where department_id='$token'");

											if($sqlmg){


											$sqlmg_row=mysqli_num_rows($sqlmg);
												if($sqlmg_row >0){

													while($row_s=mysqli_fetch_assoc($sqlmg)){
														   $prog_id= $row_s['id'];
														   $prog_name= $row_s['title'];
														   if($prog_id == $prog){
														        $error .='<option value="'.$prog_id.'" selected>'.$prog_name.'</option>';
														   }else{
														       $error .='<option value="'.$prog_id.'">'.$prog_name.'</option>';
														   }

													}
											   	}
											}
	echo $error;
}
//get school name
function get_applicant_school($con,$id)
{
	$result = mysqli_query($con,"SELECT title FROM schools WHERE school_id = '$id'");
	$row = mysqli_fetch_assoc($result);
	$title = $row['title'];

	return $title;
}


//get Department name
function get_applicant_department($con,$id)
{
	$result = mysqli_query($con,"SELECT title FROM departments WHERE id = '$id'");
	$row = mysqli_fetch_assoc($result);
	$title = $row['title'];

	return $title;
}


//get programme name
function get_applicant_programme($con,$id)
{
	$result = mysqli_query($con,"SELECT title FROM programmes WHERE id = '$id'");
	$row = mysqli_fetch_assoc($result);
	$title = $row['title'];

	return $title;
}

//get State name
function get_applicant_state($con,$id)
{
	$result = mysqli_query($con,"SELECT name FROM states WHERE state_id = '$id'");
	$row = mysqli_fetch_assoc($result);
	$title = $row['name'];

	return $title;
}

//get lga name
function get_applicant_lga($con,$id)
{
	$result = mysqli_query($con,"SELECT local_name FROM lga WHERE local_id = '$id'");
	$row = mysqli_fetch_assoc($result);
	$title = $row['local_name'];

	return $title;
}

//get lga name
function get_applicant_image($con,$id)
{
	$result = mysqli_query($con,"SELECT image FROM applicant_profile WHERE applicant_id = '$id'");
	$row = mysqli_fetch_assoc($result);
	$image = $row['image'];

	if($image != '')
	{//show table



			$output = '<img class="img-responsive img-rounded img-thumbnail center-block" src="http://localhost/school_portal/Admin_panel/uploads/'.$row['image'].'" style="height:100px; width:80px"/>';


	}
	else
	{
		$output = '<label class="label label-danger">NO IMAGE </label>';
	}


	return $output;
}

//function get total admitted applicants
function get_total_admitted_applicants_batch_1($con, $ses)
{
	$q = "SELECT COUNT(id) FROM applicant_profile WHERE  admission_status = '1' AND admission_batch = '1' AND session_id='$ses' ";
	$r = mysqli_query($con, $q);
	$row = mysqli_fetch_array($r,MYSQLI_NUM);

	return $row[0];

}

//function get total admitted applicants
function get_total_admitted_applicants_batch_2($con, $ses)
{
	$q = "SELECT COUNT(id) FROM applicant_profile WHERE  admission_status = '1' AND admission_batch = '2' AND session_id='$ses'";
	$r = mysqli_query($con, $q);
	$row = mysqli_fetch_array($r,MYSQLI_NUM);

	return $row[0];

}

//function get total admitted applicants
function get_total_admitted_applicants_batch_3($con, $ses)
{
	$q = "SELECT COUNT(id) FROM applicant_profile WHERE  admission_status = '1' AND admission_batch = '3' AND session_id='$ses'";
	$r = mysqli_query($con, $q);
	$row = mysqli_fetch_array($r,MYSQLI_NUM);

	return $row[0];

}

//function view all admitted applicants listings
function view_all_admitted_applicants_list($con, $ses, $admitted) // pt programm type , p programme
{


	//query the database
	$q = "SELECT ap.id, ap.school_applied_for, ap.department_applied_for, ap.programme_applied_for,ap.school_id, ap.department_id,ap.programme_id,
	     af.application_number, af.state_id, af.lga_id, af.first_name, af.last_name,af.middle_name, af.phone_no,
			  af.gender,  af.email,
		  DATE_FORMAT(ap.date_added, '%M %d, %Y %l:%i:%p') as date_added,
		  DATE_FORMAT(ap.date_modified, '%M %d, %Y %l:%i:%p') as date_modified
		  FROM  applicant ap, applicant_profile af

		  WHERE  af.admission_status = '$admitted' AND af.session_id ='$ses' AND ap.id = af.applicant_id

		  ORDER BY af.application_number ASC";
	$r = mysqli_query($con, $q); //AND admission_batch = 3

	if(mysqli_num_rows($r) > 0)
	{//show table



		  $output =
		  '
				<table class="table table-hover table-center mb-0 datatable">
						<thead>
						<th>Application No.</th>
						<th>Name</th>
						<th>Gender</th>
						<th>Programme Type</th>
						<th>Applied For</th>
						<th>Department</th>
						<th>Ph. Contacts</th>
						<th>State</th>
						<th>L.G.A</th>
						<th>Passports</th>
						<th>Batch</th>
						<th> Admission Letter</th>




			</thead>
			<tbody>';

		while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
		{
			$output .= "<tr>";
			$output .= "<td>".$row['application_number']."</td>";
			$output .= "<td> <a href='dashboard?hubs=view_applicant&api=".base64_encode($row['id'])."' target='_new'>".$row['first_name'].' '.$row['middle_name'].' '.$row['last_name']."</a></td>";
			$output .= "<td>".$row['gender']."</td>";
			$output .= "<td>".get_user_school($con, $row['school_id'])."</td>";
			$output .= "<td>".get_user_programme($con, $row['programme_applied_for'])."</td>";
			$output .= "<td>".get_user_programme($con, $row['programme_id'])."</td>";
			$output .= "<td>".$row['phone_no']."</td>";
			$output .= "<td>".get_state_title($con, $row['state_id'])."</td>";
			$output .= "<td>".get_lga_title($con, $row['lga_id'])."</td>";
			$output .= "<td>".get_applicant_image($con, $row['id'])."</td>";
			$output .= "<td>".get_admission_batch($con, $row['id'])."</td>";
      $output .= "<td>" .is_admitted($con, $row['id']). "</td>";
			$output .= "</tr>";


		}
	}
	else
	{//show the msg

			$output =
				   '<div class="alert alert-danger alert-dismissable">
					<button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
					<img src="assets/images/info.png" />&nbsp;&nbsp; No record found in the system.
				   </div>';


	}



	$output .=
	'</tbody>
    </table>
		';





	return $output;




}//end of view all admitted  applicants

//get applicants record either qualify or not qualify
function get_records_applicants_not_qualify($con, $sess, $qi)
{

	 $output1 =
	  '<table id="example" class="user display table-bordered table-hover table-striped" cellspacing="0" width="100%" style="font-size:12px;">
		<thead>
			<th>S/No</th>
			<th>Applicant</th>
			<th>Programme Applied</th>
			<th>Olevel result 1</th>
			<th>Olevel result 2</th>
			<th>Higher Qualification</th>
			<th>Status</th>
			<th>Action</th>

		</thead>
		<tfoot>
			<th>S/No</th>
			<th>Applicant</th>
			<th>Programme Applied</th>
			<th>Olevel result 1</th>
			<th>Olevel result 2</th>
			<th>Higher Qualification</th>
			<th>Status</th>
			<th>Action</th>

		</tfoot>

		<tbody>';

					 //resetting qualified applicants ids
		 if (isset($_SESSION['app_id_arr'])) {
			 unset($_SESSION['app_id_arr']);
		 }
		 $app_id_arr = array();

				 //query the database
		 $q2 = "SELECT app.id AS a_id, app.programme_applied_for, app.department_applied_for, app.school_applied_for, af.*
				 FROM  applicant app, applicant_profile af, applicants_fee_payments app_pay

				 WHERE app_pay.applicant_id = app.id AND af.qualified = 0 AND af.session_id= '$sess'
				 AND app.admission_status = 1 AND app.id = af.applicant_id
				 ORDER BY app.programme_applied_for ASC";

				 //AND app.batch = '1' AND app.admission_status = '1'
		 $r2 = mysqli_query($con, $q2);

		 $snn = 0;
		 //get course suggestion
		 $cs_lists = '';
		 $cs_arr = '';
		 //echo $qi = 1;
		 while($row2 = mysqli_fetch_array($r2))
		 {

			 $applicant_id = $row2['a_id'];

			 $cs_lists = validate_applicant_all_olevel($con,$applicant_id);


			 //print_r($cs_lists[0]);
			 //when Qualified
			    if (isset($cs_lists) ){


				 //compute higher result to get final qualified status

				 $prog = $row2['programme_applied_for'];
				 $app_level = get_programme_level($con, $prog);
				 //when truely qualified
				 $out_q = get_to_admit_based_on_level($con, $applicant_id, $app_level);

				 //when not qualified
				 if ($qi == 0 ) {
					 //initialize
					 $out_q = 'Yes';
				 }


								 if ( $cs_lists[0] == $qi && $out_q != '' ) {
					 $snn += 1;
					@$output_q .= "<tr>";

					 $output_q .= "<td>".$snn."</td>";
					    $output_q .= "<td><b><a href='view_applicant?id=".md5('profile')."&xd=".$row2['id']."' target='_new'>".$row2['application_number'].'<br>'.$row2['first_name'].' '.$row2['last_name']."</a></b></td>";
							$output_q .= "<td>".get_user_programme($con, $prog)." <b>(".get_user_school($con, $row2['school_applied_for']).")</b></td>";
						$output_q .= "<td>".get_applicant_olevel($con, $applicant_id,'1')."</td>";
						$output_q .= "<td>".get_applicant_olevel($con, $applicant_id,'2')."</td>";

						$output_q .= "<td>".get_applicant_high_qualification($con, $applicant_id)."</td>";

									 if ($qi == 1 && $out_q != '') {

										 if ($app_level == 100) {

											 $output_q .= "<td>".show_qualified_status(1)."</td>";

											 array_push($app_id_arr, $applicant_id);

											 $output_q .= $out_q;


										 }elseif ($app_level == 200) {
											 //cecking ND,NCE... result category

							 if ($out_q != '') {

												 $output_q .= "<td>".show_qualified_status(1)."</td>";
												 $output_q .= $out_q;
												 array_push($app_id_arr, $applicant_id);
							 }else{

												 $output_q .= "<td>".show_qualified_status(0)."</td>";
												 $output_q .= "<td></td>";

							 }



										 }elseif ($app_level == 300) {
											 array_push($app_id_arr, $applicant_id);

										 }

									 }else{

										 $output_q .= "<td>".show_qualified_status(0)."</td>";

										 //get course suggestion
						 $sug_cs_lists = '';
						 $cs_arr = '';



						 $sug_prog = get_program_suggestions($con, $applicant_id,$cs_lists[1],$app_level);


										 $output_q .= $sug_prog;
									 }


								 }



							 }else{

									 //echo 1;


							}




		 }



	 @$output2 .=
	 '</tbody>
		 </table>';
	 $_SESSION['app_id_arr'] = $app_id_arr;
		// if ($qi == 1) {
		 return @$output1.@$output_q.$output2;
		 //}elseif($qi == 0){
		 //return $output1.$output_nq.$output2;
		 //}


}



function get_applicant_high_qualification($con,$id)
{
		$output = '' ;

		$q = "SELECT * FROM `applicants_alevel`
				WHERE applicant_id = '$id' ";


		$r = mysqli_query($con, $q);


		if(mysqli_num_rows($r) > 0 ){

			while($rec = mysqli_fetch_array($r,MYSQLI_ASSOC)){
			    $gra1 = $rec['grade_1'];
			    $gra2 = $rec['grade_2'];
			    $gra3 = $rec['grade_3'];
			    $gra4 = $rec['grade_4'];
			    $point = $gra1 + $gra2 + $gra3 + $gra4;

				//when not nce result
				if ($rec['cert'] != 2  && $rec['institution'] !='') {

					$output1 = '<b class=" badge"> Result Type: '.show_cert3($rec['cert']).'</b><br>';
					$output1 .= '<span class="list-group-item"><b>School: '.$rec['institution'].'</b></span>';
					$output1 .= '<span class="list-group-item"><b>Cert. Class: '.show_class_cert($rec['result_type']).'</b></span>';
					$output1 .= '<span class="list-group-item"><b>Year of Graduation: '.$rec['end_year'].'</b></span>';

					$output .= $output1;
				}else{

					$output1 = '<b class=" badge"> Result Type: '.show_cert3($rec['cert']).'</b><br>';
					$output1 .= '<span class="list-group-item"><b>School: '.$rec['institution'].'</b></span>';
					$output1 .= '<span class="list-group-item"><b>Year of Graduation: '.$rec['end_year'].'</b></span>';
					$output1 .= '<span class="list-group-item"><b>NCE Points: '.$point.'</b></span>';

					$output .= $output1;

				}

			}



		}


		if ($output !== '') {
			//return $qi = 1;
			return $output;
		}else{

			return '<li class="list-group-item text-danger">NIL</li>';
		}


}


//function that check and show is qualified status
function show_qualified_status($status)
{
	$st = $status;


	if($st == 1)
	{
		return '<h4 class="btn btn-success disabled">QUALIFIED</h4>';
	}
	else
	{
		return '<h4 class="btn btn-success disabled">QUALIFIED</h4>';
	}
}

function get_program_suggestions($con, $app_id,$o_level,$level)
{
	/*for ($i=0; $i < count($o_level); $i++) {
		//echo $o_level[$i];
	}*/
	$sug_cs_lists = get_suggested_program($con, $app_id,$o_level,$level);


	if (isset($sug_cs_lists) && ! empty($sug_cs_lists ) ){

		$cs_arr = $sug_cs_lists;
	}

	//dont list  programme when no olevel
	if (applicant_olevel_exist($con, $app_id)) {

			@$output .= '<td><form method="POST" action="" id="change_programme">
 			<input type="hidden" name="app_id" value="'.$app_id.'">

 			';


	 		$output .= '

					<div class="bg-info">
						<div>
							<h5 class="text-center"><b>Change of Programme</b></h5>
							<select class="form-control" name="swap_prog_id" >
				                <option value=""> Select Programme </option>
				                '.

				                 //displaying the prence courses

				                list_course($con, $sug_cs_lists)

				                .'
				            </select>
				            <input type="hidden" name="act" value="view_not_qualified_applicants">
				            <input type="submit" name="swap_prog_btn" onclick="change_programme()" value="Convert Programme" class="btn btn-primary">
			            </div>
			            <br>
					</div>
					<br><br><br>
					</form>
		 			';
		 		$output .= '

						<form method="POST" action="" id="admit_applicant">

              <center><input type="submit" name="clear_one"  class="btn btn-primary" value="Admit"></center>
              <input type="hidden" name="app_id" value="'.$app_id.'">
              <br><br><br>

            </form>
			            <br>
				<br><br>

		 			';




	 		if (@$cs_arr !='') {
		    }else{
		      }
	 		if (@$qi == 1) {
		 		$output .= '<input type="submit" name="clear_btn" value="Clear" class="btn btn-success">';
	 		}


			$output .= "
		 		</form></td>";


	}else{
		$sug_cs_lists = '';
		$cs_arr = '';
		$output = '<td></td>';

	}

	return $output;

}

function get_suggested_program($con, $uid,$olevel_arr,$level )
{
	//intializing an array for tracking validated subjects
	$dt = array();
	$ff = '';
	$app_prog = get_user_programme_applied_for($con,$uid);
	$pt = get_user_programme_type_applied_for($con, $uid);

	$r = mysqli_query($con, "SELECT title, id, required_subjects, optional_subjects,optional_count
					FROM programmes WHERE real_ = '0' AND type_id = '$pt' AND  level <= '$level'
					ORDER BY title");

	$i = 0;
	if(mysqli_num_rows($r) > 0 )
	{
		while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
		{
			//looping through programs
			$rq_sub = $row['required_subjects'];
			$op_sub = $row['optional_subjects'];
			$opt_sub_count = intval($row['optional_count']);


            	$pid = $row['id'];
				array_push($dt, $pid);

		}


	}

	return  $dt;

}


function validate_applicant_all_olevel($con, $id)
	{
		$olevel1_str = '';
		$olevel2_str = '';
		$all_olevel = array();

		//$sub_and_grd_1 ='';

		$q = "SELECT * FROM `applicants_olevel`
				WHERE applicant_id = '$id' AND type = '1'";

		$q2 = "SELECT * FROM `applicants_olevel`
				WHERE applicant_id = '$id' AND type = '2'";

		$r = mysqli_query($con, $q);
		$r2 = mysqli_query($con, $q2);

		if(mysqli_num_rows($r) > 0 ){
			$rec = mysqli_fetch_array($r, MYSQLI_ASSOC);
			$rec2 = mysqli_fetch_array($r2, MYSQLI_ASSOC);

			//initializing variables to prevent errors
			for ($i = 1 ; $i < 10; $i++) {
				$sb = '';
				$gr = '';

				//passing values to new variable
				$sb = 'subject'. $i;
				$gr = 'grade'. $i;
				//fetching records
				$sb_val =  $rec[$sb];
				$gr_val =  $rec[$gr];

				$sb_val2 =  $rec2[$sb];
				$gr_val2 =  $rec2[$gr];

				if (pass_olevel($gr_val)) {
					$olevel1_str .= $sb_val.',' ;
				}

				if (pass_olevel($gr_val2)) {
					$olevel2_str .= $sb_val2.',' ;
				}

			}

		}

		//creating the array with valid subjects
		$olevel_1 =  explode( ',' , $olevel1_str);
		$olevel_2 =  explode( ',' , $olevel2_str);

		//removing the last empty data due to the last , comma
		for ($i = 0; $i < count($olevel_1); $i++) {
			if ($olevel_1[$i] !== '') {
				if ( ! in_array($olevel_1[$i], $all_olevel)) {
					//merging all olevel
					array_push( $all_olevel , $olevel_1[$i]);
				}
			}

		}
		//removing the last empty data due to the last , comma
		for ($i = 0; $i < count($olevel_2); $i++) {
			if ($olevel_2[$i] !== '') {
				if ( ! in_array($olevel_2[$i], $all_olevel)) {
					//merging all olevel
					array_push( $all_olevel , $olevel_2[$i]);
				}
			}

		}





		$qi = 0;
		$qualified = check_applicant_required_olevel($con, $all_olevel, $id);


		$data = array();

		if ($qualified == true) {

			$data = [$qi = 1, ''];
			return $data;
		}else{

			$data = [$qi = 0, $all_olevel ];
			//return $all_olevel;
			return $data;
		}


	}

	function pass_olevel($gr)
{
	//validating pass grade
	if ( $gr > 0 &&   $gr < 7) {
		return true;
	}
}

//get course name passed by id of the course
function get_programme_level($con, $id)
{
	$result = mysqli_query($con, "SELECT level FROM programmes WHERE id = '$id' AND real_='0' ");
		$row = mysqli_fetch_assoc($result);
		$level = $row['level'];

	return $level;
}
//get admit menu based level
function get_to_admit_based_on_level($con, $app_id, $app_lev)
{
	$output_q ='';
	$cert_res_arr = array();

	$q = "SELECT * FROM `applicants_alevel`
				WHERE applicant_id = '$app_id' ";

	$r = mysqli_query($con, $q);

	if(mysqli_num_rows($r) > 0 ){

		while($rec = mysqli_fetch_array($r,MYSQLI_ASSOC)){
			//when not nce result
			//echo $rec['cert'];
			if ($rec['cert'] != 2 ) {
				if ($rec['result_type'] > 0) {

					//store into array
					array_push($cert_res_arr, $rec['result_type'] );
				}

			}else{


			}
		}
	}





	$ress = 0;
	//getting best result grade
	for ($i=0 ; $i <= count($cert_res_arr); $i++) {
		//validating result grade
		@$c_res = $cert_res_arr[$i];
		if ($c_res < 6 && $c_res > 0) {
			//initially
			if ($ress < 1) {
				$ress = $c_res;
			}else{
				if ($c_res < $ress ) {
					$ress = $c_res;
				}else{
					//do nothing for now
					//$ress = $ress;
				}

			}
		}
	}


	//qualifying based on level
	if ($app_lev == 100) {
		$output_q .= '<td>
			<form method="POST" action="" id="admit_applicant">

              <input type="submit" name="clear_one"  class="btn btn-primary" value="Admit">
              <input type="hidden" name="act" value="view_qualified_applicants">
              <input type="hidden" name="app_id" value="'.$app_id.'">
              <br><br><br>

            </form>
		</td>';

	}elseif ($app_lev == 200) {

		//confirming if really qualified
		if ($ress < 6 && $ress > 0) {
			$output_q .= '<td>
				<form method="POST" id="admit_applicant">

		          <input type="submit" name="clear_one"  class="btn btn-primary" value="Admit">
		          <input type="hidden" name="act" value="view_qualified_applicants">
		          <input type="hidden" name="app_id" value="'.$app_id.'">
		          <br><br><br>

		        </form>
			</td>';
		}else{
			$output_q = '';
		}

	}elseif ($app_lev == 300) {



	}



	return $output_q;


}

function get_applicant_olevel($con, $id,$ty)
{
		$olevel_str = '';


		//$sub_and_grd_1 ='';

		$q = "SELECT * FROM `applicants_olevel`
				WHERE applicant_id = '$id' AND type = '$ty'";

		$r = mysqli_query($con, $q);

		if(mysqli_num_rows($r) > 0 ){
			$rec = mysqli_fetch_array($r,MYSQLI_ASSOC);
			$sub_grd1 = '<b class=" badge"> Exam Type: '.$rec['exam_type'].'</b><br>';
			$sub_grd1 .= '<span class="list-group-item"><b>Exam No: '.$rec['exam_no'].'</b></span>';
			$sub_grd1 .= '<span class="list-group-item"><b>Exam Month: '.show_month($rec['exam_month']).'</b></span>';
			$sub_grd1 .= '<span class="list-group-item"><b>Exam Year: '.$rec['exam_year'].'</b></span>';
			@$sub_grd1 .= '<span class="list-group-item"><b>Pin: '.$rec['card_pin'].'</b></span>';
			@$sub_grd1 .= '<span class="list-group-item"><b>Pin S/NO: '.$rec['card_sno'].'</b></span>';
			//initializing variables to prevent errors
			for ($i = 1 ; $i < 10; $i++) {
				$sb = '';
				$gr = '';

				//passing values to new variable
				$sb = 'subject'. $i;
				$gr = 'grade'. $i;
				//fetching records
				$sb_val =  $rec[$sb];
				$gr_val =  $rec[$gr];

				if ($sb_val !='') {

					@$sub_grd2 .= '<span  class="list-group-item">'.show_subjects_title($con, $sb_val) . '<b class="badge pull-right">'. show_subject_grade($gr_val).'</b></span >';

				}

				@$olevel_str .= $sub_grd2;


			}

		}


		@$olevel_str = $sub_grd1.$sub_grd2;

		if ($olevel_str !== '') {
			//return $qi = 1;
			return $olevel_str;
		}else{

			return '<li class="list-group-item text-danger">NIL</li>';
		}


}

function show_month($mnt)
{

	$mnt -= 1;
	$months = array(
	    'January',
	    'February',
	    'March',
	    'April',
	    'May',
	    'June',
	    'July ',
	    'August',
	    'September',
	    'October',
	    'November',
	    'December',
	);

	return @$months[$mnt];


}

//function select subjects
function show_subjects_title($con,$id)
{
	$r = mysqli_query($con, "SELECT title  FROM o_level_subjects
					WHERE id = '$id' ");
	$row = mysqli_fetch_assoc($r);
	$v = $row['title'];

	return $v;

}

//function fetch user programme_applied_for
function get_user_programme_applied_for($con, $id)
{
	$result = mysqli_query($con, "SELECT programme_applied_for FROM applicant WHERE id = '$id'");
	$row = mysqli_fetch_assoc($result);
	$v = $row['programme_applied_for'];


	return $v;
}

//function fetch user programme_applied_for
function get_user_department_applied_for($con, $id)
{
	$result = mysqli_query($con, "SELECT department_applied_for FROM applicant WHERE id = '$id'");
	$row = mysqli_fetch_assoc($result);
	$v = $row['department_applied_for'];


	return $v;
}


//function that gets programme_id base on user id
function  get_applicant_required_subjects($con, $pid)
{
	$result = mysqli_query($con, "SELECT required_subjects FROM programmes WHERE id = '$pid'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['required_subjects'];
	if ($v) {
		return $v;
	}


}

//function that gets programme_id base on user id
function  get_applicant_optional_subjects($con,$pid)
{
	$result = mysqli_query($con, "SELECT optional_subjects FROM programmes WHERE id = '$pid' AND real_=0 ");
		$row = mysqli_fetch_assoc($result);
		$v = $row['optional_subjects'];
	if ($v) {
		return $v;
	}


}
//function that gets programme_id base on user id
function  get_applicant_optional_count($con, $pid)
{
	$result = mysqli_query($con, "SELECT optional_count FROM programmes WHERE id = '$pid' AND real_=0 ");
		$row = mysqli_fetch_assoc($result);
		$v = $row['optional_count'];
	if ($v) {
		return $v;
	}

}


function get_matched_subjects($app_sub, $req_sub)
{
	//compare applicant subjects with required subjects
	$c = 0;
	for ($i = 0; $i < count($app_sub) ; $i++) {

		if (in_array($app_sub[$i], $req_sub)) {
			$c ++;

		}

	}

	return $c;

}


function get_suggested_courses($con, $olevel_arr , $uid)
{
	//intializing an array for tracking validated subjects
	$dt[] = '';
	$ff = '';
	$app_prog = get_user_programme_applied_for($con, $uid);
	$pt = get_user_programme_type_applied_for($con, $uid);

	$r = mysqli_query($con, "SELECT title, id, required_subjects, optional_subjects,optional_count
					FROM programmes
					ORDER BY title");

	$i = 0;
	if(mysqli_num_rows($r) > 0 )
	{
		while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
		{
			//looping through programs
			$rq_sub = $row['required_subjects'];
			$op_sub = $row['optional_subjects'];
			$opt_sub_count = intval($row['optional_count']);

			if ($rq_sub != '') {
				$i ++;


				$req_subj =  explode( ',' , $rq_sub);
				$opt_subj =  explode( ',' , $op_sub);

				$req_sub_match = get_matched_subjects($olevel_arr, $req_subj);
				$opt_sub_match = get_matched_subjects($olevel_arr, $opt_subj);
				//getting the required subjects counts
				$rq_sub_count = count($req_subj);

				//$ff .= $opt_sub_count .' '. $opt_sub_match.'<br>';
				//if required courses is empty, done even suggest
				if ($req_sub_match > 0) {
					//check if present validated subjects match required once
					if ($req_sub_match == $rq_sub_count ) {

						if ($opt_sub_count > 0) {
							//checking optional counts
							if ($opt_sub_match >= $opt_sub_count ) {
								//$dt = true;
								//get the program id
								$pid = $row['id'];
								array_push($dt, $pid);
							}
						//when their is no optional count for the applicanr program
						//and the validated subjects match required once
						}else{
							//$dt = true;
							//get the program id
							$pid = $row['id'];
							array_push($dt, $pid);
						}


					}else{
						//$d = false;
					}
				}

			}

		}


	}

	unset($dt['0']);
	return  $dt;

}

function get_course_suggestion2($con, $all_olevel,$id)
{
		//print_r(get_suggested_courses($all_olevel));
		$dt_arr = get_suggested_courses($con, $all_olevel,$id);
		$dt_count = count($dt_arr);
		$list ='';
		/*print_r($all_olevel);
		exit();*/

		$dt_arr;

		if ($dt_arr != '') {
			return $dt_arr;

		} else {
			return  '';

		}
}


function check_applicant_required_olevel($con, $olevel_arr, $uid)
{
	//intializing an array for tracking validated subjects
	$dt = '';
	$uid;
	//get required subjects combination
	$app_prog = get_user_programme_applied_for($con, $uid);
	$app_req_subj = get_applicant_required_subjects($con, $app_prog);
	$app_opt_subj = get_applicant_optional_subjects($con, $app_prog);
	$app_opt_sub_count = get_applicant_optional_count($con, $app_prog);


	$req_subj =  explode( ',' , $app_req_subj);
	$opt_subj =  explode( ',' , $app_opt_subj);

	//getting the required subjects counts
	$app_req_subj_count = count($req_subj);


	 $req_sub_match = get_matched_subjects($olevel_arr, $req_subj);
	 $opt_sub_match = get_matched_subjects($olevel_arr, $opt_subj);


	//check if present validated subjects match required once
	 if ($req_sub_match == $app_req_subj_count ) {

	 	if ($app_opt_sub_count > 0) {
	 		//checking optional counts
	 		if ($opt_sub_match >= $app_opt_sub_count ) {
	 			$dt = true;
	 		}
	 	//when their is no optional count for the applicanr program
	 	//and the validated subjects match required once
	 	}else{
	 		$dt = true;
	 	}


	}else{
		$dt = false;
	}


		//$var = implode($dt, ' ');

	//return  $var[1];
	return   $dt;

}


//function view all admitted applicants listings
function view_all_applicants_per_session($con) // pt programm type , p programme
{


	//query the database
	$q = "SELECT ap.id, ap.school_applied_for, ap.department_applied_for, ap.programme_applied_for,ap.school_id, ap.department_id,ap.programme_id,
	     af.application_number, af.state_id, af.lga_id, af.first_name, af.last_name,af.middle_name, af.phone_no,
			  af.gender,  af.email,
		  DATE_FORMAT(ap.date_added, '%M %d, %Y %l:%i:%p') as date_added,
		  DATE_FORMAT(ap.date_modified, '%M %d, %Y %l:%i:%p') as date_modified
		  FROM  applicant ap, applicant_profile af

		  WHERE ap.id = af.applicant_id

		  ORDER BY af.application_number ASC";
	$r = mysqli_query($con, $q); //AND admission_batch = 3

	if(mysqli_num_rows($r) > 0)
	{//show table



		  $output =
		  '
				<table class="table table-hover table-center mb-0 datatable">
						<thead>
						<th>Application No.</th>
						<th>Name</th>
						<th>Gender</th>
						<th>Programme Type</th>
						<th>Applied For</th>
						<th>Department</th>
						<th>Ph. Contacts</th>
						<th>State</th>
						<th>L.G.A</th>
						<th>Passports</th>
						<th>Batch</th>
						<th> Admission Letter</th>




			</thead>
			<tbody>';

		while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
		{
			$output .= "<tr>";
			$output .= "<td>".$row['application_number']."</td>";
			$output .= "<td> <a href='dashboard?hubs=view_applicant&api=".base64_encode($row['id'])."' target='_new'>".$row['first_name'].' '.$row['middle_name'].' '.$row['last_name']."</a></td>";
			$output .= "<td>".$row['gender']."</td>";
			$output .= "<td>".get_user_school($con, $row['school_id'])."</td>";
			$output .= "<td>".get_user_programme($con, $row['programme_applied_for'])."</td>";
			$output .= "<td>".get_user_programme($con, $row['programme_id'])."</td>";
			$output .= "<td>".$row['phone_no']."</td>";
			$output .= "<td>".get_state_title($con, $row['state_id'])."</td>";
			$output .= "<td>".get_lga_title($con, $row['lga_id'])."</td>";
			$output .= "<td>".get_applicant_image($con, $row['id'])."</td>";
			$output .= "<td>".get_admission_batch($con, $row['id'])."</td>";
      $output .= "<td>" .is_admitted($con, $row['id']). "</td>";
			$output .= "</tr>";


		}
	}
	else
	{//show the msg

			$output =
				   '<div class="alert alert-danger alert-dismissable">
					<button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
					<img src="assets/images/info.png" />&nbsp;&nbsp; No record found in the system.
				   </div>';


	}



	$output .=
	'</tbody>
    </table>
		';





	return $output;




}//end of view all admitted  applicants


//function view all admitted applicants listings
function view_admitted_applicants_list_per_programmes($con,$ses,$p, $admitted) // pt programm type , p programme
{


	//query the database
	$q = "SELECT ap.id, ap.school_applied_for, ap.department_applied_for, ap.programme_applied_for,ap.school_id, ap.department_id,ap.programme_id,
	     af.application_number, af.state_id, af.lga_id, af.first_name, af.last_name,af.middle_name, af.phone_no,
			  af.gender,  af.email,
		  DATE_FORMAT(ap.date_added, '%M %d, %Y %l:%i:%p') as date_added,
		  DATE_FORMAT(ap.date_modified, '%M %d, %Y %l:%i:%p') as date_modified
		  FROM  applicant ap, applicant_profile af

		  WHERE  af.admission_status = '$admitted' AND af.session_id ='$ses' AND ap.id = af.applicant_id
			AND ap.programme_id = '$p'
		  ORDER BY af.application_number ASC";
	$r = mysqli_query($con, $q); //AND admission_batch = 3

	if(mysqli_num_rows($r) > 0)
	{//show table



		  $output =
		  '
				<table class="table table-hover table-center mb-0 datatable">
						<thead>
						<th>Application No.</th>
						<th>Name</th>
						<th>Gender</th>
						<th>Programme Type</th>
						<th>Applied For</th>
						<th>Department</th>
						<th>Ph. Contacts</th>
						<th>State</th>
						<th>L.G.A</th>
						<th>Passports</th>
						<th>Batch</th>
						<th> Admission Letter</th>




			</thead>
			<tbody>';

		while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
		{
			$output .= "<tr>";
			$output .= "<td>".$row['application_number']."</td>";
			$output .= "<td> <a href='dashboard?hubs=view_applicant&api=".base64_encode($row['id'])."' target='_new'>".$row['first_name'].' '.$row['middle_name'].' '.$row['last_name']."</a></td>";
			$output .= "<td>".$row['gender']."</td>";
			$output .= "<td>".get_user_school($con, $row['school_id'])."</td>";
			$output .= "<td>".get_user_programme($con, $row['programme_applied_for'])."</td>";
			$output .= "<td>".get_user_programme($con, $row['programme_id'])."</td>";
			$output .= "<td>".$row['phone_no']."</td>";
			$output .= "<td>".get_state_title($con, $row['state_id'])."</td>";
			$output .= "<td>".get_lga_title($con, $row['lga_id'])."</td>";
			$output .= "<td>".get_applicant_image($con, $row['id'])."</td>";
			$output .= "<td>".get_admission_batch($con, $row['id'])."</td>";
      $output .= "<td>" .is_admitted($con, $row['id']). "</td>";
			$output .= "</tr>";


		}
	}
	else
	{//show the msg

			$output =
				   '<div class="alert alert-danger alert-dismissable">
					<button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
					<img src="assets/images/info.png" />&nbsp;&nbsp; No record found in the system.
				   </div>';


	}



	$output .=
	'</tbody>
    </table>
		';





	return $output;




}//end of view all admitted  applicants

//get list of the programmes admitted candidate
function  get_programme_list_admitted_applicants($con, $ses)
{
	$result = mysqli_query($con, "SELECT * FROM programmes WHERE real_='0' ORDER BY code");

		while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
		{
			echo '<a href="dashboard?hubs=view_admitted_applicants_per_course&a='.sha1('fucku').'&p='.$row['id'].'&ses='.$ses.'" class="btn btn-info " style="margin:4px;" >'.$row['title'].' - <span class="badge">'.get_total_prog_type_programme_admitted_applicants($con, $ses,$row['id'], $admitted = 1).'</span> / <span class="badge">'.get_total_prog_type_programme_applicants($con, $ses, $row['id']).'</span> '.'</a>';
		}
}


//function get total applicants admitted in a programme
function get_total_prog_type_programme_admitted_applicants($con, $ses, $id, $admitted)
{
	$q = "SELECT COUNT(id) FROM applicant  WHERE programme_id = '$id' AND admission_status = '$admitted' AND session_id=$ses";
	$r = mysqli_query($con, $q);
	$row = mysqli_fetch_array($r,MYSQLI_NUM);

	return $row[0];

}


//check if admission batch and display MODAL  button
function get_admission_batch($con, $id)
{
		$result = mysqli_query($con, "SELECT admission_batch FROM applicant_profile WHERE applicant_id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['admission_batch'];



		if($v == 1)
		{

			$batch = 'Batch A';

		}
		else if($v == 2)
		{
			$batch = 'Batch B';

		}
		else
		{
			$batch = 'Batch C';


		}

		return $batch;

		//return value

}

//function view all admitted applicants listings
function view_all_admitted_applicants_list_wq($con, $admitted) // pt programm type , p programme
{


	//query the database
	$q = "SELECT ap.id, ap.school_applied_for, ap.department_applied_for, ap.programme_applied_for,ap.school_id, ap.department_id,ap.programme_id,
	     af.application_number, af.state_id, af.lga_id, af.first_name, af.last_name,af.middle_name, af.phone_no,
			  af.gender,  af.email,
		  DATE_FORMAT(ap.date_added, '%M %d, %Y %l:%i:%p') as date_added,
		  DATE_FORMAT(ap.date_modified, '%M %d, %Y %l:%i:%p') as date_modified
		  FROM  applicant ap, applicant_profile af

		  WHERE  af.admission_status = '$admitted' AND ap.id = af.applicant_id

		  ORDER BY af.application_number ASC";
	$r = mysqli_query($con, $q);

	if(mysqli_num_rows($r) > 0)
	{//show table



		  $output =
		  '<table class="table table-hover table-center mb-0 datatable">
			<thead>
						<th>Application No.</th>
						<th>Name</th>
						<th>Gender</th>
						<th>Applied Course</th>
						<th>Admitted Course</th>
						<th>Subjects</th>






			</thead>
			<tbody>';

		while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
		{
			$output .= "<tr>";
			$output .= "<td>".$row['application_number']."</td>";
			$output .= "<td> <a href='view_applicant?id=".md5('profile')."&xd=".$row['id']."'>".strtoupper($row['first_name']).'  '.strtoupper($row['middle_name']).'  '.strtoupper($row['last_name'])."</a></td>";
			$output .= "<td>".$row['gender']."</td>";
			$output .= "<td>".get_user_programme($con, $row['programme_applied_for'])."</td>";
			$output .= "<td>".get_user_programme($con, $row['programme_id'])."</td>";
			$output .= "<td>1. ".strtoupper(view_all_merited_subjects($con, $row['id']))." <br/>2. ".strtoupper(view_all_merited_subjects2($con, $row['id']))."</td>";

			$output .= "</tr>";


		}
	}
	else
	{//show the msg

			$output =
				   '<div class="alert alert-danger alert-dismissable">
					<button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
					<img src="assets/images/info.png" />&nbsp;&nbsp; No record found in the system.
				   </div>';


	}



	$output .=
	'</tbody>
    </table>';





	return $output;




}//end of view all admitted  applicants






//function view all admitted applicants listings
function view_all_merited_subjects2($con, $aid) // pt programm type , p programme
{


	//query the database
	$q = "SELECT applicant_id,  `subject1`, `grade1`, `subject2`, `grade2`, `subject3`, `grade3`, `subject4`, `grade4`, `subject5`, `grade5`, `subject6`, `grade6`, `subject7`, `grade7`, `subject8`, `grade8`, `subject9`, `grade9`
	     FROM  applicants_olevel

		  WHERE  applicant_id = '$aid' AND type = 2

		  AND
		  (
		  (`grade1`  = '1' OR `grade1`  = '2'  OR `grade1`  = '3' OR `grade1`  = '4' OR `grade1`  = '5' OR `grade1`  = '6'  OR `grade1`  = '' )
		  OR
		  (`grade2`  = '1' OR `grade2`  = '2'  OR `grade2`  = '3' OR `grade2`  = '4' OR `grade2`  = '5' OR `grade2`  = '6' OR `grade2`  = '' )
		    OR
		  (`grade3`  =  '1' OR `grade3`  = '2'  OR `grade3`  = '3' OR `grade3`  = '4' OR `grade3`  = '5' OR `grade3`  = '6'  OR `grade3`  = '')
		   OR
		  (`grade4`  = '1' OR `grade4`  = '2'  OR `grade4`  = '3' OR `grade4`  = '4' OR `grade4`  = '5' OR `grade4`  = '6' OR `grade4`  = '' )
		   OR
		  (`grade5`  = '1' OR `grade5`  = '2'  OR `grade5`  = '3' OR `grade5`  = '4' OR `grade5`  = '5' OR `grade5`  = '6' OR `grade5`  = '' )
		   OR
		  (`grade6`  = '1' OR `grade6`  = '2'  OR `grade6`  = '3' OR `grade6`  = '4' OR `grade6`  = '5' OR `grade6`  = '6' OR `grade6`  = '')
		   OR
		  (`grade7`  = '1' OR `grade7`  = '2'  OR `grade7`  = '3' OR `grade7`  = '4' OR `grade7`  = '5' OR `grade7`  = '6' OR `grade7`  = '')
		   OR
		  (`grade8`  = '1' OR `grade8`  = '2'  OR `grade8`  = '3' OR `grade8`  = '4' OR `grade8`  = '5' OR `grade8`  = '6' OR `grade8`  = '')
		   OR
		  (`grade9`  = '1' OR `grade9`  = '2'  OR `grade9`  = '3' OR `grade9`  = '4' OR `grade9`  = '5' OR `grade9`  = '6' OR `grade9`  = '')
		   )
		   ";
	$r = mysqli_query($con, $q);

	if(mysqli_num_rows($r) > 0)
	{//show table



		  $output = '';

		while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
		{

			$output .= get_o_level_subjects_title($con, $row['subject1']).' : '.get_o_level_grade_title($row['grade1']).' , ';
			$output .= get_o_level_subjects_title($con, $row['subject2']).' : '.get_o_level_grade_title($row['grade2']).' , ';
			$output .= get_o_level_subjects_title($con, $row['subject3']).' : '.get_o_level_grade_title($row['grade3']).' , ';
      $output .= get_o_level_subjects_title($con, $row['subject4']).' : '.get_o_level_grade_title($row['grade4']).' , ';
			$output .= get_o_level_subjects_title($con, $row['subject5']).' : '.get_o_level_grade_title($row['grade5']).' , ';
			$output .= get_o_level_subjects_title($con, $row['subject6']).' : '.get_o_level_grade_title($row['grade6']).' , ';
			$output .= get_o_level_subjects_title($con, $row['subject7']).' : '.get_o_level_grade_title($row['grade7']).' , ';
			$output .= get_o_level_subjects_title($con, $row['subject8']).' : '.get_o_level_grade_title($row['grade8']).' , ';
			$output .= get_o_level_subjects_title($con, $row['subject9']).' : '.get_o_level_grade_title($row['grade9']).'';







		}
	}
	else
	{//show the msg

			$output =
				   ' No rec.
				   ';


	}




	return $output;




}//end of view all subjects with qualified grade 2


//function view all admitted applicants listings
function view_all_merited_subjects($con, $aid) // pt programm type , p programme
{


	//query the database
	$q = "SELECT applicant_id,  `subject1`, `grade1`, `subject2`, `grade2`, `subject3`, `grade3`, `subject4`, `grade4`, `subject5`, `grade5`, `subject6`, `grade6`, `subject7`, `grade7`, `subject8`, `grade8`, `subject9`, `grade9`
	     FROM  applicants_olevel

		  WHERE  applicant_id = '$aid' AND type = 1

		  AND
		  (
		  (`grade1`  = '1' OR `grade1`  = '2'  OR `grade1`  = '3' OR `grade1`  = '4' OR `grade1`  = '5' OR `grade1`  = '6'  OR `grade1`  = '' )
		  OR
		  (`grade2`  = '1' OR `grade2`  = '2'  OR `grade2`  = '3' OR `grade2`  = '4' OR `grade2`  = '5' OR `grade2`  = '6' OR `grade2`  = '' )
		    OR
		  (`grade3`  =  '1' OR `grade3`  = '2'  OR `grade3`  = '3' OR `grade3`  = '4' OR `grade3`  = '5' OR `grade3`  = '6'  OR `grade3`  = '')
		   OR
		  (`grade4`  = '1' OR `grade4`  = '2'  OR `grade4`  = '3' OR `grade4`  = '4' OR `grade4`  = '5' OR `grade4`  = '6' OR `grade4`  = '' )
		   OR
		  (`grade5`  = '1' OR `grade5`  = '2'  OR `grade5`  = '3' OR `grade5`  = '4' OR `grade5`  = '5' OR `grade5`  = '6' OR `grade5`  = '' )
		   OR
		  (`grade6`  = '1' OR `grade6`  = '2'  OR `grade6`  = '3' OR `grade6`  = '4' OR `grade6`  = '5' OR `grade6`  = '6' OR `grade6`  = '')
		   OR
		  (`grade7`  = '1' OR `grade7`  = '2'  OR `grade7`  = '3' OR `grade7`  = '4' OR `grade7`  = '5' OR `grade7`  = '6' OR `grade7`  = '')
		   OR
		  (`grade8`  = '1' OR `grade8`  = '2'  OR `grade8`  = '3' OR `grade8`  = '4' OR `grade8`  = '5' OR `grade8`  = '6' OR `grade8`  = '')
		   OR
		  (`grade9`  = '1' OR `grade9`  = '2'  OR `grade9`  = '3' OR `grade9`  = '4' OR `grade9`  = '5' OR `grade9`  = '6' OR `grade9`  = '')
		   )
		   ";
	$r = mysqli_query($con, $q);

	if(mysqli_num_rows($r) > 0)
	{//show table



		  $output = '';

		while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
		{

			$output .= get_o_level_subjects_title($con, $row['subject1']).' : '.get_o_level_grade_title($row['grade1']).' , ';
			$output .= get_o_level_subjects_title($con, $row['subject2']).' : '.get_o_level_grade_title($row['grade2']).' , ';
			$output .= get_o_level_subjects_title($con, $row['subject3']).' : '.get_o_level_grade_title($row['grade3']).' , ';
      $output .= get_o_level_subjects_title($con, $row['subject4']).' : '.get_o_level_grade_title($row['grade4']).' , ';
			$output .= get_o_level_subjects_title($con, $row['subject5']).' : '.get_o_level_grade_title($row['grade5']).' , ';
			$output .= get_o_level_subjects_title($con, $row['subject6']).' : '.get_o_level_grade_title($row['grade6']).' , ';
			$output .= get_o_level_subjects_title($con, $row['subject7']).' : '.get_o_level_grade_title($row['grade7']).' , ';
			$output .= get_o_level_subjects_title($con, $row['subject8']).' : '.get_o_level_grade_title($row['grade8']).' , ';
			$output .= get_o_level_subjects_title($con, $row['subject9']).' : '.get_o_level_grade_title($row['grade9']).'';









		}
	}
	else
	{//show the msg

			$output =
				   ' No rec.
				   ';


	}




	return $output;




}//end of view all subjects with qualified grade
//function dat get student id using application number
	function get_student_id_by_app_no($con, $id)
	{
	$q = "SELECT id FROM students WHERE application_number = '$id'";
	$r = mysqli_query($con, $q);
	$row = mysqli_fetch_assoc($r);
	return $row['id'];
	}


//check if admitted and display button
function is_admitted($con, $id)
{
		$result = mysqli_query($con, "SELECT * FROM applicant_profile WHERE applicant_id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$admission_status = $row['admission_status'];
		$app_no = $row['application_number'];

		$student_id = get_student_id_by_app_no($con, $app_no);



		if($admission_status == '0')
		{
			return '<a href="dashboard?hubs=view_applicant&api='.base64_encode($id).'" class="btn btn-warning btn-sm" >  Pending </a> ';
		}
		else
		{

		    $output = '<a href="dashboard?hubs=view_applicant&api='.base64_encode($id).'" class="btn btn-success btn-sm" >  Admitted </a> <br/>';



					if($student_id != '')
					{
					    $output .= '<a class="btn-info btn-sm" target="_blank"  href="https://applicant.gschstg.sch.ng/create_application_letter.php?u='.base64_encode($id).'&c='. md5('ofusware').'"> Print Letter </a>
					';
					}
					else
					{
					    $output .= '<a class="btn-danger btn-sm"  href="#"> Unpaid </a>';
					}


			return $output;


		}
}

//get school name
function get_active_admission_batch($con,$id)
{
	$result = mysqli_query($con,"SELECT id FROM admission_batch WHERE status = '$id'");
	$row = mysqli_fetch_assoc($result);
	$title = $row['id'];

	return $title;
}

//function to get list pf courses attach to level and programmes
function get_courses_for_level_programmes($con, $level, $programme)
{

	//comment incase


	//query the database
	$q = "SELECT c.id as cid, c.title, c.description, c.programme_id, c.department_id, c.code, c.unit, c.level,  c.course_status,
			pc.programme_id, pc.course_id, pc.department_id, pc.level, pc.status

		 FROM  courses c , programmes_courses pc
		 WHERE
		 c.id = pc.course_id
		 AND pc.level = '$level'
		 AND pc.programme_id = '$programme'
		 AND pc.status = '1'

		 ORDER BY c.code ASC";
	$r = mysqli_query($con, $q);

	if(mysqli_num_rows($r) > 0)
	{//show table



		  $output = '';

		while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
		{
			$output .= "".$row['code']."(".$row['unit']."), ";




		}
	}
	else
	{//show the msg

			$output =
				   '<div class="alert alert-danger alert-dismissable">
					<button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
					<img src="assets/images/info.png" />&nbsp;&nbsp; No record found in the system.
				   </div>';


	}





	return $output;




}//end of get list of courses attched to a particular level and programme

//function tha gen token for delete, and other purposes
	function generate_token()
	{
			for($i=0;$i<=20;$i++){
				@$key .=mt_rand(0,9);
			}
			$result = $key.date('Y-m-d');
			return $result;
	}//end of

//function select faculty
function select_department_real($con, $department_id)
{
	$r = mysqli_query($con, "SELECT id, title  FROM departments WHERE real_='0' ORDER BY title ");
	if(mysqli_num_rows($r) > 0 )
	{
		while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
		{
			if($department_id == $row['id'])
			{
				$output = "<option value=\"$row[id]\" selected>";
				$output .=  $row['title'];
				$output .="</option>";

			}
			else
			{
				$output = "<option value=\"$row[id]\" >";
				$output .= $row['title'];
				$output .="</option>";

			}


			echo $output;
		}
	}
	else
	{

			$output = "<option>";
			$output .="Not added yet";
			$output .="</option>";

			echo $output;
	}
}
//end of select faculties

//get school name
function get_user_desgnation($con,$id)
{
	$result = mysqli_query($con,"SELECT title FROM desgnations WHERE id = '$id'");
	$row = mysqli_fetch_assoc($result);
	$title = $row['title'];

	return $title;
}

//Function to fetch current session
	function get_current_session($con, $id)
	{
		$result = mysqli_query($con, "SELECT * FROM academic_year WHERE academic_running_status = '$id'");
		$row = mysqli_fetch_assoc($result);
		$id = $row['academic_year_id'];

	return $id;
	}


//function to get total sum of money paid of courses a student carried per semester
function get_total_confirmed_applicants($con , $sess )
{
    	$result = mysqli_query($con, "SELECT COUNT(applicant_id) AS id FROM applicants_fee_payments
				WHERE session='$sess' AND payment_method='2' ");

				//AND session = '$sess' AND mode = '$mode'");
	$row = mysqli_fetch_assoc($result);
	$id = $row['id'];

	return $id;

}

	//Function to fetch  invoice title
				function get_invoice_title($con,$iid)
				{
					$result = mysqli_query($con,"SELECT title FROM invoices WHERE invoice_id = '$iid'");
					$row = mysqli_fetch_assoc($result);
					$v = $row['title'];

					$v = preg_replace('/[^A-Za-z0-9\-]/', ' ', $v);

				return $v;
				}

				//Function to fetch  invoice type
				function get_invoice_type($con,$iid)
				{
					$result = mysqli_query($con,"SELECT invoice_type FROM invoices WHERE invoice_id = '$iid'");
					$row = mysqli_fetch_assoc($result);
					$v = $row['invoice_type'];

				return $v;
				}


				//Function to fetch date
				function get_invoice_date($con,$iid)
				{
					$result = mysqli_query($con,"SELECT  DATE_FORMAT(date_added, '%b %e, %Y') as date_added FROM invoices WHERE invoice_id = '$iid'");
					$row = mysqli_fetch_assoc($result);
					$v = $row['date_added'];

				return $v;
				}

				//Function to fetch due date
				function get_invoice_due_date($con,$iid)
				{
					$result = mysqli_query($con,"SELECT  DATE_FORMAT(due_date, '%b %e, %Y') as due_date FROM invoices WHERE invoice_id = '$iid'");
					$row = mysqli_fetch_assoc($result);
					$v = $row['due_date'];

				return $v;
				}



				//Function to fetch exp date
				function get_invoice_exp_date($con,$iid)
				{
					$result = mysqli_query($con,"SELECT  DATE_FORMAT(expire_date, '%b %e, %Y /  %l:%i:%p') as exp_date FROM invoices WHERE invoice_id = '$iid'");
					$row = mysqli_fetch_assoc($result);
					$v = $row['exp_date'];

				return $v;
				}

				//Function to fetch  invoice to
	function get_invoice_invoice_to($con,$iid)
	{
		$result = mysqli_query($con,"SELECT invoice_to FROM invoices WHERE invoice_id = '$iid'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['invoice_to'];

	return $v;
	}


	//Function to fetch  pay to
	function get_invoice_pay_to($con,$iid)
	{
		$result = mysqli_query($con,"SELECT pay_to FROM invoices WHERE invoice_id = '$iid'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['pay_to'];

	return $v;
	}


	//Function to fetch  invocie for
	function get_invoice_for($con,$iid)
	{
		$result = mysqli_query($con,"SELECT invoice_for FROM invoices WHERE invoice_id = '$iid'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['invoice_for'];

	return $v;
	}


	//Function to fetch descripion
	function get_invoice_desc($con,$iid)
	{
		$result = mysqli_query($con,"SELECT description FROM invoices WHERE invoice_id = '$iid'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['description'];

	return $v;
	}



	//Function to fetch amount
	function get_invoice_amount($con,$iid)
	{
		$result = mysqli_query($con,"SELECT amount FROM invoices WHERE invoice_id = '$iid'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['amount'];

	return $v;
	}



	//Function to fetch total amount
	function get_invoice_total_amount($con,$iid)
	{
		$result = mysqli_query($con,"SELECT total_amount FROM invoices WHERE invoice_id = '$iid'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['total_amount'];

	return $v;
	}


	//Function to fetch invoiced credit (credit of invoice generated)
	function get_invoiced_credit($con,$iid)
	{
		$result = mysqli_query($con,"SELECT credit FROM invoices WHERE invoice_id = '$iid'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['credit'];

	return $v;
	}

	//Function to fetch payment_satus
	function get_invoice_payment_status($con,$iid)
	{
		$result = mysqli_query($con,"SELECT payment_status FROM invoices WHERE invoice_id = '$iid'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['payment_status'];

	return $v;
	}

//Function to fetch current semester
function get_current_session_title($con, $id)
{

$result = mysqli_query($con,"SELECT title FROM academic_year WHERE academic_year_id = '$id'");
$row = mysqli_fetch_assoc($result);
$id = $row['title'];

return $id;
}

//function get total students
function get_total_students($con, $sess)
{
$q = "SELECT COUNT(id) FROM students WHERE session = '$sess'";

$r = mysqli_query($con, $q);
$row = mysqli_fetch_array($r,MYSQLI_NUM);

return $row[0];

}

//function get total paid students
function get_total_paid_students($con, $sess)
{
$q = "SELECT COUNT(id) FROM students WHERE id IN(SELECT student_id FROM school_fee_payments WHERE session ='$sess')";

$r = mysqli_query($con, $q);
$row = mysqli_fetch_array($r,MYSQLI_NUM);

return $row[0];

}

//function get total paid students
function get_total_not_paid_students($con, $sess)
{
$q = "SELECT COUNT(id) FROM students WHERE id NOT IN(SELECT student_id FROM school_fee_payments WHERE session ='$sess')";

$r = mysqli_query($con, $q);
$row = mysqli_fetch_array($r,MYSQLI_NUM);

return $row[0];

}


//function get total student number for sch fees
function get_total_regular_ptd_sf_payment($con, $pt,$sess, $lev)
{
	//please remove applicant later

	//query the database
	$q = "SELECT COUNT(DISTINCT(std.id)) AS total_count FROM `school_fee_payments` fees, students std WHERE fees.session = '$sess' AND std.level = '$lev' AND std.id = fees.student_id AND fees.payment_status = 1 AND fees.programme_type_id = $pt ";
	$r = mysqli_query($con, $q);

	$row = mysqli_fetch_assoc($r);
	$v = $row['total_count'];

			return $v;

}


//function view students listings per programmes
function view_students_list_per_programmes($con,$p,$yr) // pt programm type , p programme //AND applicants.id = applicants_fee_payments.applicant_id
{
	//please remove applicant later

	//query the database
	$q = "SELECT id, school_id, department_id, programme_id, application_number, `matric_number`,
		  state_id, lga_id, first_name, last_name, middle_name, phone_no, gender,  email,
		  DATE_FORMAT(date_added, '%M %d, %Y %l:%i:%p') as date_added,admission_serial_no

		  FROM  students

		  WHERE programme_id = '$p' AND session = '$yr'

		  ORDER BY matric_number ASC";
	$r = mysqli_query($con, $q);
$sn = 1;
	if(mysqli_num_rows($r) > 0)
	{//show table



		  $output =
		  '
					<table class="table table-hover table-center mb-0 datatable">
							<thead>
							th><th>
				<th>Matric No.</th>
				<th>Name</th>
				<th>Gender</th>
				<th>Programme Type</th>
				<th>Programme</th>
				<th>Ph. Contacts</th>
				<th>State</th>
				<th>L.G.A</th>
				<th>Passports</th>



			</thead>

			<tbody>';

		while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
		{
			$sn++;
			$output .= "<tr>";
			$output .= "<td>".$sn."</td>";
			$output .= "<td>".$row['matric_number']."</td>";
			$output .= "<td> <a href='#'>".$row['first_name'].' '.$row['middle_name'].' '.$row['last_name']."</a></td>";
			$output .= "<td>".$row['gender']."</td>";
			$output .= "<td>".get_user_school($con, $row['school_id'])."</td>";
			$output .= "<td>".get_user_programme($con, $row['programme_id'])."</td>";
			$output .= "<td>".$row['phone_no']."</td>";
			$output .= "<td>".get_state_title($con, $row['state_id'])."</td>";
			$output .= "<td>".get_lga_title($con, $row['lga_id'])."</td>";
			$output .= "<td>".get_student_image($con, $row['id'])."</td>";



			$output .= "</tr>";


		}
	}
	else
	{//show the msg

			$output =
				   '<div class="alert alert-danger alert-dismissable col-12">
					<button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
					<img src="assets/images/info.png" />&nbsp;&nbsp; No record found in the system.
				   </div>';


	}



	$output .=
	'</tbody>
    </table>';





	return $output;




}//end of view students ants listings per programmes



//get list of the programmes for students reports
function  get_programme_list_for_students_report($con,$yr)
{
	$result = mysqli_query($con, "SELECT * FROM programmes WHERE real_ = '0' order by title");

		while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
		{
			echo '<a href="dashboard?hubs=view_students_per_course&a='.sha1('fucku').'&p='.$row['id'].'&yr='.$yr.'" class="btn btn-info" target="_parent" style="margin:4px;" >'.$row['title'].' - <span class="badge badge-danger">'.get_total_prog_type_programme_students($con,$row['id'],$yr).'</span>'.'</a>';
		}
}

//function get total students in NCe programme
function get_total_prog_type_programme_students($con, $id, $yr)
{
	$q = "SELECT COUNT(id) FROM students  WHERE programme_id = '$id' AND session = '$yr'";
	$r = mysqli_query($con, $q);
	$row = mysqli_fetch_array($r,MYSQLI_NUM);

	return $row[0];

}



//function get total students in NCe programme
function get_total_department_students($con, $id)
{
	$q = "SELECT COUNT(id) FROM students  WHERE department_id = '$id' ";
	$r = mysqli_query($con, $q);
	$row = mysqli_fetch_array($r,MYSQLI_NUM);

	return $row[0];

}


// //function get total students in NCe programme
// function get_total_programme_students($con, $id, $yr)
// {
// 	$q = "SELECT COUNT(id) FROM students  WHERE faculty_id = '$id' AND session = '$yr'";
// 	$r = mysqli_query($con, $q);
// 	$row = mysqli_fetch_array($r,MYSQLI_NUM);
//
// 	return $row[0];
//
// }

//get list of the departments
function  get_department_list_for_students_report($con,$yr)
{
	$result = mysqli_query($con, "SELECT * FROM departments WHERE real_ = '0' order by title");

		while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
		{
			echo '<a href="dashboard?hubs=view_students_per_department&a='.sha1('fucku').'&d='.$row['id'].'&yr='.$yr.'" class="btn btn-success" style="margin:4px;" >'.$row['title'].' - <span class="badge">'.get_total_prog_type_departments_students($con,$row['id'],$yr).'</span>'.'</a> <br/>';
		}
}

//function get total students in NCe programme
function get_total_prog_type_departments_students($con, $id, $yr)
{
	$q = "SELECT COUNT(id) FROM students  WHERE id = '$id' AND session = '$yr'";
	$r = mysqli_query($con, $q);
	$row = mysqli_fetch_array($r,MYSQLI_NUM);

	return $row[0];

}


//function to get total sum of money paid of courses a student carried per semester
function get_total_amount_paid_applicants($con , $sess )
{
    	$result = mysqli_query($con, "SELECT SUM(amount - 500) AS summed_up FROM applicants_fee_payments
				WHERE session='$sess' ");

	$row = mysqli_fetch_assoc($result);
	$summed_up = $row['summed_up'];

	return $summed_up;

}


//function to get total sum of money paid of courses a student carried per semester
function get_total_applicants($con )
{
    	$result = mysqli_query($con, "SELECT COUNT(id) AS t_id FROM applicant ");

	$row = mysqli_fetch_assoc($result);
	$summed_up = $row['t_id'];

	return $summed_up;

}

//function that gets color of the progress bar
function get_color ($percent)
{
	if($percent > 0 && $percent <= 20)
	{
		return 'progress-bar-default';
	}
	else if ($percent > 20 && $percent <= 40)
	{
		return 'progress-bar-info';
	}
	else if ($percent > 40 && $percent <= 60)
	{
		return 'progress-bar-success';
	}
	else if ($percent > 60 && $percent <= 80)
	{
		return 'progress-bar-warning';
	}
	else if ($percent > 80 && $percent <= 100)
	{
		return 'progress-bar-danger';
	}
	else
	{
		return '';
	}

}//end of function that gets color

//function to get total sum of money paid of courses a student carried per semester
function get_total_students_all($con )
{
    	$result = mysqli_query($con, "SELECT COUNT(id) AS t_id FROM students ");

	$row = mysqli_fetch_assoc($result);
	$summed_up = $row['t_id'];

	return $summed_up;

}

//function to get total sum of money paid of courses a student carried per semester
function get_total_admins($con )
{
    	$result = mysqli_query($con, "SELECT COUNT(id) AS t_id FROM admin_users ");

	$row = mysqli_fetch_assoc($result);
	$summed_up = $row['t_id'];

	return $summed_up;

}

//function to get total sum of money paid of courses a student carried per semester
function get_total_staffs($con )
{
    	$result = mysqli_query($con, "SELECT COUNT(id) AS t_id FROM staffs ");

	$row = mysqli_fetch_assoc($result);
	$summed_up = $row['t_id'];

	return $summed_up;

}

//function to get total sum of money paid of courses a student carried per semester
function get_total_department($con )
{
    	$result = mysqli_query($con, "SELECT COUNT(id) AS t_id FROM departments ");

	$row = mysqli_fetch_assoc($result);
	$summed_up = $row['t_id'];

	return $summed_up;

}

//function to get total sum of money paid of courses a student carried per semester
function get_total_programme($con )
{
    	$result = mysqli_query($con, "SELECT COUNT(id) AS t_id FROM programmes ");

	$row = mysqli_fetch_assoc($result);
	$summed_up = $row['t_id'];

	return $summed_up;

}

//function to get total sum of money paid of courses a student carried per semester
function get_total_courses($con )
{
    	$result = mysqli_query($con, "SELECT COUNT(id) AS t_id FROM courses ");

	$row = mysqli_fetch_assoc($result);
	$summed_up = $row['t_id'];

	return $summed_up;

}


//function to get total sum of money paid of courses a student carried per semester
function get_total_faculty($con )
{
    	$result = mysqli_query($con, "SELECT COUNT(id) AS t_id FROM faculties ");

	$row = mysqli_fetch_assoc($result);
	$summed_up = $row['t_id'];

	return $summed_up;

}

//function to get total sum of money paid of courses a student carried per semester
function get_total_amount_paid_acceptance_fee($con , $sess )
{
    	$result = mysqli_query($con, "SELECT SUM(amount) AS summed_up FROM acceptance_fee_payments
				WHERE session='$sess' ");

	$row = mysqli_fetch_assoc($result);
	$summed_up = $row['summed_up'];

	return $summed_up;

}

//function to get total sum of money paid of courses a student carried per semester
function get_total_amount_paid_school_fee($con , $sess )
{
    	$result = mysqli_query($con, "SELECT SUM(amount - 500) AS summed_up FROM school_fee_payments
				WHERE session='$sess' ");

	$row = mysqli_fetch_assoc($result);
	$summed_up = $row['summed_up'];

	return $summed_up;

}

//function to get total sum of money paid of courses a student carried per semester
function get_total_amount_paid_hostel_fee($con , $sess )
{
    	$result = mysqli_query($con, "SELECT SUM(amount-500) AS summed_up FROM hostel_fee_payments
				WHERE session='$sess' ");

	$row = mysqli_fetch_assoc($result);
	$summed_up = $row['summed_up'];

	return $summed_up;

}

//function dat get student id using application number
		function get_student_mat_no($con, $id)
		{
		$q = "SELECT matric_number FROM students WHERE id = '$id'";
		$r = mysqli_query($con, $q);
		$row = mysqli_fetch_assoc($r);

		return $row['matric_number'];


		}

//function view students listings per programmes
function view_students($con,$ses) // pt programm type , p programme //AND applicants.id = applicants_fee_payments.applicant_id
{
	$q = "SELECT id, school_id,department_id, programme_id, application_number,`matric_number`,
		  state_id, lga_id, first_name,middle_name, last_name, phone_no, gender,  email, level,
		  DATE_FORMAT(date_added, '%M %d, %Y %l:%i:%p') as date_added

		  FROM  students

		  ORDER BY matric_number ASC";
	$r = mysqli_query($con, $q);

	if(mysqli_num_rows($r) > 0)
	{//show table



		  $output =
		  '
              <table class="table table-hover table-center mb-0 datatable" style="width:100%">
              <thead>

                        <th></th>
						<th>Matric No.</th>
						<th>Name</th>
						<th>Level</th>
						<th>Gender</th>
						<!-- <th>Prog. Type</th> -->
						<!-- <th>School </th> -->
						<th>Programme</th>

						<th>Ph. Contacts</th>
						<th>State</th>
						<th>L.G.A</th>

						<th>App No.</th>
						<th>Action</th>
						<th>Payment Status</th>
						<th>Photo</th>




			</thead>


			<tbody>';
    $sn = 1;
		while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
		{
			$output .= "<tr>";


			$output .= "<td>".$sn."</td>";
			$output .= "<td>".$row['matric_number']."</td>";
			$output .= "<td> <a href='dashboard?hubs=view_student&id=".md5('profile')."&xd=".$row['id']."'>".$row['first_name'].' '.$row['middle_name'].' '.$row['last_name']."</a></td>";
			$output .= "<td>".$row['level']."</td>";
			$output .= "<td>".$row['gender']."</td>";
			$output .= "<td>".get_user_programme($con, $row['programme_id'])."</td>";
			$output .= "<td>".$row['phone_no']."</td>";
			$output .= "<td>".get_state_title($con, $row['state_id'])."</td>";
			$output .= "<td>".get_lga_title($con, $row['lga_id'])."</td>";

			$output .= "<td>".$row['application_number']."</td>";
			$output .= '<td><a  class="btn btn-sm btn-info" onclick="reset_pw('.$row['id'].')" id="'.$row['id'].'" style="color:white;">  RESET PASSWORD </a> <span id="loading"></span>
				</td>';
        $sn++;





			if( has_paid_school_fee($con, $row['id'],$ses))
			{
				$output .= "<td> <label class='label label-success'> PAID </label> </td>";
			}
			else
			{
				$output .= "<td> <label class='label label-danger'> NOT PAID </label> </td>";
			}


			$output .= "<td>".get_student_image($con, $row['id'])."</td>";



			$output .= "</tr>";


		}
	}
	else
	{//show the msg

			$output =
				   '<div class="alert alert-danger alert-dismissable col-12">
					<button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
					<img src="assets/images/info.png" />&nbsp;&nbsp; No record found in the system.
				   </div>';


	}



	$output .=
	'</tbody>
    </table>
		';





	return $output;








}//end of view students ants listings per programmes


//get school name
function get_applicant_number($con,$id)
{
	$result = mysqli_query($con,"SELECT application_number FROM applicant_profile WHERE id = '$id'");
	$row = mysqli_fetch_assoc($result);
	$title = $row['application_number'];

	return $title;
}

//function fetch user credential
	function get_student_credential($con,$id)
	{
		$result = mysqli_query($con, "SELECT pdf_file FROM students WHERE id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$v = $row['pdf_file'];

		return $v;
	}

//get department name
function get_user_deparment($con,$id)
{
	$result = mysqli_query($con,"SELECT title FROM departments WHERE id = '$id'");
	$row = mysqli_fetch_assoc($result);
	$title = $row['title'];

	return $title;
}

//get programme name
function get_user_programme($con,$id)
{
	$result = mysqli_query($con,"SELECT title FROM programmes WHERE id = '$id'");
	$rows = mysqli_fetch_assoc($result);
	$titlge = $rows['title'];
	return $titlge;
}

//function that gets state title
function get_state_title($con, $id)
{
	$result = mysqli_query($con, "SELECT * FROM states WHERE state_id = $id");
		$row = mysqli_fetch_assoc($result);
		$titles = $row['name'];
	return $titles;
}

//function that gets state title
function  get_country_title($con, $id)
{
	$result = mysqli_query($con, "SELECT country_name FROM countries WHERE id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$title = $row['country_name'];

	return $title;

}
//function show state
							function get_lga_title($con,$c)
							{
								$r = mysqli_query($con,"SELECT  local_name  FROM lga WHERE local_id = '$c'");
								$rows = mysqli_fetch_assoc($r);
							    return $rows['local_name'];
							}
							//end of show state


function has_paid_school_fee($con, $user_id,$session)
{
	$q = "SELECT student_id,session, payment_status
		  FROM school_fee_payments
		  WHERE student_id = '$user_id'
		  AND session = '$session'
		  AND payment_status  = '1'";
	$r = mysqli_query($con, $q);

	//$row = mysqli_fetch_assoc($result);

	if(mysqli_num_rows($r)== 0)
	{
		return false;

	}
	else
	{
		return true;
	}

}

//function get applicant image by passing id alone
function get_student_image($con, $id)
{
	$result = mysqli_query($con, "SELECT image FROM students WHERE id = '$id'");
	$row = mysqli_fetch_assoc($result);
	$image = $row['image'];
	if($image != '')
	{//show table




           // $up_path = '../pt/uploads/';
           $up_path = 'http://localhost/school_portal/uploads/';


			$output = '<img class="img-responsive img-rounded img-thumbnail center-block" src='.$up_path.$row["image"].' style="height:100px ;width:80px"    />';


	}
	else
	{
		$output = '<label class="label label-danger">NO IMAGE</label>';
	}


	return $output;




}//end of function that shows candidate image

//function get total not paid hostel fee
function get_total_admitted_applicants($con, $sess)
{
$q = "SELECT COUNT(id) FROM applicant_profile WHERE session_id = '$sess' AND admission_status='1'";

$r = mysqli_query($con, $q);
$row = mysqli_fetch_array($r,MYSQLI_NUM);

return $row[0];

}

//get list of the programmes
function  get_programme_list($con, $ses, $pt)
{
	$result = mysqli_query($con, "SELECT * FROM programmes WHERE real_=0 ORDER BY code;");

		while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
		{
			echo '<a href="dashboard?hubs=view_applicants_per_course&a='.sha1('fucku').'&p='.$row['id'].'&ses='.$ses.'" class="btn btn-info  btn-lg" target="_blank" style="margin:4px;" >'.$row['title'].' - <span class="badge">'.get_total_prog_type_programme_applicants($con, $ses,$row['id']).'</span>'.'</a>';
			//echo '<a href="view_applicants_per_course?a='.sha1('fucku').'&pt='.$row['type_id'].'&p='.$row['id'].'&ses='.$ses.'" class="btn btn-success  btn-lg" target="_blank" style="margin:4px;" >'.$row['title'].' - <span class="badge">'.($con, $ses, $pt,$row['id']).'</span>'.'</a>';
		}
}

//function get total applicants in a programme
function get_total_prog_type_programme_applicants($con, $ses, $id)
{
	$q = "SELECT COUNT(id) FROM applicants_fee_payments  WHERE programme_id = '$id' AND session = $ses";
	$r = mysqli_query($con, $q);
	$row = mysqli_fetch_array($r,MYSQLI_NUM);

	return $row[0];

}



//function view applicants listings per programmes
function view_applicants_list_per_programmes($con, $ses,$p) // pt programm type , p programme
{


	//query the database
	$q = "SELECT ap.id, ap.school_applied_for, ap.department_applied_for, ap.programme_applied_for, af.application_number,
		 af.state_id, af.lga_id, af.first_name, af.last_name, af.middle_name, af.phone_no, af.gender,  af.email,
		  DATE_FORMAT(ap.date_added, '%M %d, %Y %l:%i:%p') as date_added,
		  DATE_FORMAT(ap.date_modified, '%M %d, %Y %l:%i:%p') as date_modified, applicants_fee_payments.applicant_id
		  FROM  applicant ap, applicant_profile af, applicants_fee_payments

		  WHERE  ap.programme_applied_for = '$p' AND ap.id = applicants_fee_payments.applicant_id
			AND ap.id = af.applicant_id AND applicants_fee_payments.session='$ses'

		  ORDER BY af.application_number ASC";
	$r = mysqli_query($con, $q);

	if(mysqli_num_rows($r) > 0)
	{//show table


		$sn = 1;
		  $output =
		  '<table class="table table-hover table-center mb-0 datatable">
			<thead>
						<th></th>
						<th>Application No.</th>
						<th>Name</th>
						<th>Gender</th>
						<th>Programme Type</th>
						<th>Applied For</th>
						<th>Ph. Contacts</th>
						<th>State</th>
						<th>L.G.A</th>
						<th>Passports</th>
						<th>Admission Status</th>




			</thead>

			<tbody>';

		while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
		{
			$sn++;
			$output .= "<tr>";
			$output .= "<td>".$sn."</td>";
			$output .= "<td>".$row['application_number']."</td>";
			$output .= "<td> <a href='dashboard?hubs=view_applicant&api=".base64_encode($row['id'])."'>".$row['first_name'].' '.$row['middle_name'].' '.$row['last_name']."</a></td>";
			$output .= "<td>".$row['gender']."</td>";
			$output .= "<td>".get_user_school($con, $row['school_applied_for'])."</td>";
			$output .= "<td>".get_user_programme($con, $row['programme_applied_for'])."</td>";
			$output .= "<td>".$row['phone_no']."</td>";
			$output .= "<td>".get_state_title($con, $row['state_id'])."</td>";
			$output .= "<td>".get_lga_title($con, $row['lga_id'])."</td>";
			$output .= "<td>".get_applicant_image($con, $row['id'])."</td>";
			$output .= "<td>".is_admitted($con, $row['id'])."</td>";
			$output .= "</tr>";


		}
	}
	else
	{//show the msg

			$output =
				   '<div class="alert alert-danger alert-dismissable">
					<button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
					<img src="assets/images/info.png" />&nbsp;&nbsp; No record found in the system.
				   </div>';


	}



	$output .=
	'</tbody>
    </table>';





	return $output;




}//end of view applicants listings per programmes


//function view applicants listings per programmes
function view_applicants_list_paid($con, $ses) // pt programm type , p programme
{


	//query the database
	$q = "SELECT ap.id, ap.school_applied_for, ap.department_applied_for, ap.programme_applied_for, af.application_number,
		 af.state_id, af.lga_id, af.first_name, af.last_name, af.middle_name, af.phone_no, af.gender,  af.email,
		  DATE_FORMAT(ap.date_added, '%M %d, %Y %l:%i:%p') as date_added,
		  DATE_FORMAT(ap.date_modified, '%M %d, %Y %l:%i:%p') as date_modified, applicants_fee_payments.applicant_id
		  FROM  applicant ap, applicant_profile af, applicants_fee_payments

		  WHERE ap.id = applicants_fee_payments.applicant_id
			AND ap.id = af.applicant_id AND applicants_fee_payments.session='$ses'

		  ORDER BY af.application_number ASC ";
	$r = mysqli_query($con, $q);

	if(mysqli_num_rows($r) > 0)
	{//show table


$sn=1;
		  $output =
		  '<table class="table table-hover table-center mb-0 datatable">
			<thead>
						<th></th>
						<th>Application No.</th>
						<th>Name</th>
						<th>Gender</th>
						<th>Programme Type</th>
						<th>Applied For</th>
						<th>Ph. Contacts</th>
						<th>State</th>
						<th>L.G.A</th>
						<th>Passports</th>
						<th>Admission Status</th>




			</thead>
			<tbody>';

		while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
		{
			$sn++;
			$output .= "<tr>";
			$output .= "<td>".$sn."</td>";
			$output .= "<td>".$row['application_number']."</td>";
			$output .= "<td> <a href='dashboard?hubs=view_applicant&api=".base64_encode($row['id'])."'>".$row['first_name'].' '.$row['middle_name'].' '.$row['last_name']."</a></td>";
			$output .= "<td>".$row['gender']."</td>";
			$output .= "<td>".get_user_school($con, $row['school_applied_for'])."</td>";
			$output .= "<td>".get_user_programme($con, $row['programme_applied_for'])."</td>";
			$output .= "<td>".$row['phone_no']."</td>";
			$output .= "<td>".get_state_title($con, $row['state_id'])."</td>";
			$output .= "<td>".get_lga_title($con, $row['lga_id'])."</td>";
			$output .= "<td>".get_applicant_image($con, $row['id'])."</td>";
			$output .= "<td>".is_admitted($con, $row['id'])."</td>";




			$output .= "</tr>";


		}
	}
	else
	{//show the msg

			$output =
				   '<div class="alert alert-danger alert-dismissable">
					<button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
					<img src="assets/images/info.png" />&nbsp;&nbsp; No record found in the system.
				   </div>';


	}



	$output .=
	'</tbody>
    </table>';





	return $output;




}//end of view applicants listings per programmes


//function view applicants listings per programmes
function view_applicants_list_not_paid($con, $ses) // pt programm type , p programme
{


	//query the database
	$q = "SELECT ap.id, ap.school_applied_for, ap.department_applied_for, ap.programme_applied_for, af.application_number,
		 af.state_id, af.lga_id, af.first_name, af.last_name, af.middle_name, af.phone_no, af.gender,  af.email,
		  DATE_FORMAT(ap.date_added, '%M %d, %Y %l:%i:%p') as date_added,
		  DATE_FORMAT(ap.date_modified, '%M %d, %Y %l:%i:%p') as date_modified, applicants_fee_payments.applicant_id
		  FROM  applicant ap, applicant_profile af, applicants_fee_payments

		  WHERE ap.id != applicants_fee_payments.applicant_id
			AND ap.id = af.applicant_id AND applicants_fee_payments.session='$ses'

		  ORDER BY af.application_number ASC ";
	$r = mysqli_query($con, $q);

	if(mysqli_num_rows($r) > 0)
	{//show table


$sn=1;
		  $output =
		  '<table class="table table-hover table-center mb-0 datatable">
			<thead>
						<th></th>
						<th>Application No.</th>
						<th>Name</th>
						<th>Gender</th>
						<th>Programme Type</th>
						<th>Applied For</th>
						<th>Ph. Contacts</th>
						<th>State</th>
						<th>L.G.A</th>
						<th>Passports</th>
						<th>Admission Status</th>




			</thead>
			<tbody>';

		while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
		{
			$sn++;
			$output .= "<tr>";
			$output .= "<td>".$sn."</td>";
			$output .= "<td>".$row['application_number']."</td>";
			$output .= "<td> <a href='dashboard?hubs=view_applicant&api=".base64_encode($row['id'])."'>".$row['first_name'].' '.$row['middle_name'].' '.$row['last_name']."</a></td>";
			$output .= "<td>".$row['gender']."</td>";
			$output .= "<td>".get_user_school($con, $row['school_applied_for'])."</td>";
			$output .= "<td>".get_user_programme($con, $row['programme_applied_for'])."</td>";
			$output .= "<td>".$row['phone_no']."</td>";
			$output .= "<td>".get_state_title($con, $row['state_id'])."</td>";
			$output .= "<td>".get_lga_title($con, $row['lga_id'])."</td>";
			$output .= "<td>".get_applicant_image($con, $row['id'])."</td>";
			$output .= "<td>".is_admitted($con, $row['id'])."</td>";




			$output .= "</tr>";


		}
	}
	else
	{//show the msg

			$output =
				   '<div class="alert alert-danger alert-dismissable">
					<button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
					<img src="assets/images/info.png" />&nbsp;&nbsp; No record found in the system.
				   </div>';


	}



	$output .=
	'</tbody>
    </table>';





	return $output;




}//end of view applicants listings per programmes


//function select school
function select_session($con)
{
	$r = mysqli_query($con, "SELECT academic_year_id, title  FROM academic_year  ORDER BY title ");
	if(mysqli_num_rows($r) > 0 )
	{
		while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
		{
			if($school_id == $row['academic_year_id'])
			{
				$output = "<option value=\"$row[academic_year_id]\" selected>";
				$output .=  $row['title'];
				$output .="</option>";

			}
			else
			{
				$output = "<option value=\"$row[academic_year_id]\" >";
				$output .= $row['title'];
				$output .="</option>";

			}


			echo $output;
		}
	}
	else
	{

			$output = "<option>";
			$output .="Not added yet";
			$output .="</option>";

			echo $output;
	}
}
//end of select school


//function fetch user programme type
function get_student_programme_type($con,$id)
{
$result = mysqli_query($con, "SELECT school_id FROM students WHERE id = '$id'");
$row = mysqli_fetch_assoc($result);
$v = $row['school_id'];


return $v;
}

//function get applicant image by passing id alone
function get_admin_image($con, $id)
{
	$result = mysqli_query($con, "SELECT image FROM admin_users WHERE id = '$id'");
	$row = mysqli_fetch_assoc($result);
	$image = $row['image'];




	if($image != '')
	{//show table




           // $up_path = '../pt/uploads/';
           $up_path = '../uploads/';


			$output = '<img class="rounded-circle" src='.$up_path.$row["image"].' style="height:40px ;width:30px"    />';


	}
	else
	{
	    $output = '<img class="rounded-circle" src="../uploads/admin.jpg" style="height:40px ;width:30px"    />';
	}


	return $output;




}//end of function that shows candidate image


//function view students listings per programmes
function view_user_roles($con) // pt programm type , p programme //AND applicants.id = applicants_fee_payments.applicant_id
{
	//please remove applicant later

	//query the database
	$q = "SELECT id, title,description, added_by, modified_by, status,
				DATE_FORMAT(date_modified, '%M %d, %Y %l:%i:%p') as date_modified,
		  	DATE_FORMAT(date_added, '%M %d, %Y %l:%i:%p') as date_added

		  FROM  desgnations WHERE status = '1' ORDER BY title ASC";
	$r = mysqli_query($con, $q);

	if(mysqli_num_rows($r) > 0)
	{//show table
		  $output =
		  '  <div class="datatable-wrapper table-responsive">
					<table class="display compact table table-striped table-bordered datatable">
							<thead>
						<th></th>
						<th>Title</th>
						<th>Description</th>
						<th>Date Added</th>
						<th>Date Modified</th>
						<th>Added By</th>
						<th>Modified By</th>
						<th>Status</th>
						<th>Action</th>
			</thead>
			<tbody>';
			$sn = 1;
		while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
		{
			$output .= "<tr>";
			$status = $row['status'];
			if($status =='1')
			{
				$view = '<span class="btn btn-info">Active</span>';
			}else {
				$view = '<span class="btn btn-danger">Not Active</span>';
			}
			$output .= "<td>".$sn."</td>";
			$output .= "<td>".$row['title']."</td>";
			$output .= "<td>".$row['description']."</td>";
			$output .= "<td>".$row['date_added']."</td>";
			$output .= "<td>".$row['date_modified']."</td>";
			$output .= "<td>".$row['added_by']."</td>";
			$output .= "<td>".$row['modified_by']."</td>";
			$output .= "<td>".$view."</td>";
			$output .= '<td>
									<div class="actions">
									<a href="dashboard?hubs=edit_role&id='.$row['id'].'" id="'.$row['id'].'" class="btn btn-sm bg-success-light me-2">
									<i class="fas fa-pen"></i>
									</a>
									<a href="#" onclick="delete_school('.$row['id'].')" class="btn btn-sm bg-danger-light">
									<i class="fas fa-trash"></i>
									</a>
									</div>
									</td>
										 <input type="hidden" id="department_id" value="'.$row['id'].'"/> </td>';
			$output .= "</tr>";
			$sn ++;
		}
	}
	else
	{//show the msg
			$output =
				   '<div class="alert alert-danger alert-dismissable col-md-12">
					<button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
					<img src="assets/images/info.png" />&nbsp;&nbsp; No record found in the system.
				   </div>';
	}
	$output .=
	'</tbody>
    </table>';
	return $output;
}//end of view students ants listings per programmes

//function get applicant image by passing id alone
function get_staff_image($con, $id)
{
	$result = mysqli_query($con, "SELECT image FROM staffs WHERE id = '$id'");
	$row = mysqli_fetch_assoc($result);
	$image = $row['image'];




	if($image != '')
	{//show table




           // $up_path = '../pt/uploads/';
           $up_path = '../uploads/';


			$output = '<img class="rounded-circle" src='.$up_path.$row["image"].' style="height:40px ;width:30px"    />';


	}
	else
	{
	    $output = '<img class="rounded-circle" src="../uploads/admin.jpg" style="height:40px ;width:30px"    />';
	}


	return $output;




}//end of function that shows candidate image


//function view students listings per programmes
function view_admins_users($con) // pt programm type , p programme //AND applicants.id = applicants_fee_payments.applicant_id
{
	//please remove applicant later

	//query the database
	$q = "SELECT id, staff_id, admin_role_id,
		  state_id, lga_id, first_name,middle_name, last_name,country_id, phone_number, gender,  email,
		  DATE_FORMAT(date_added, '%M %d, %Y %l:%i:%p') as date_added
		  FROM  admin_users WHERE status = '1' ORDER BY staff_id ASC";
	$r = mysqli_query($con, $q);
	if(mysqli_num_rows($r) > 0)
	{//show table
		  $output =
		  '  <div class="datatable-wrapper table-responsive">
					<table class="display compact table table-striped table-bordered datatable">
							<thead>
						<th></th>
						<th>Staff No.</th>
						<th>First Name</th>
						<th>Middle Name</th>
						<th>Last Names</th>
						<th>Gender</th>
						<th>Email</th>
						<th>Ph. Contacts</th>
						<th>Country</th>
						<th>State</th>
						<th>L.G.A</th>
						<th>Desgnation</th>
						<th>Photo</th>
						<th>Action</th>
			</thead>
			<tbody>';
			$sn = 1;
		while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
		{
			$output .= "<tr>";
			$output .= "<td>".$sn."</td>";
			$output .= "<td>".$row['staff_id']."</td>";
			$output .= "<td class='xeditfname' id='".$row['id']."' key='first_name'> ".$row['first_name']."</td>";
			$output .= "<td class='xeditoname' id='".$row['id']."' key='middle_name'>".$row['middle_name']."</td>";
			$output .= "<td class='xeditoname' id='".$row['id']."' key='last_name'>".$row['last_name']."</td>";
			$output .= "<td>".$row['gender']."</td>";
			$output .= "<td>".$row['email']."</td>";
			$output .= "<td>".$row['phone_number']."</td>";
			$output .= "<td>".get_country_title($con, $row['country_id'])."</td>";
			$output .= "<td>".get_state_title($con, $row['state_id'])."</td>";
			$output .= "<td>".get_lga_title($con, $row['lga_id'])."</td>";
			$output .= "<td>".get_user_desgnation($con, $row['admin_role_id'])."</td>";
			$output .= "<td>".get_admin_image($con, $row['id'])."</td>";
			$output .= '<td>
									<div class="actions">
									<a href="dashboard?hubs=edit_admin&id='.$row['id'].'" id="'.$row['id'].'" class="btn btn-sm bg-success-light me-2">
									<i class="fas fa-pen"></i>
									</a>
									<a href="#" onclick="delete_school('.$row['id'].')" class="btn btn-sm bg-danger-light">
									<i class="fas fa-trash"></i>
									</a>
									</div>
									</td>
										 <input type="hidden" id="department_id" value="'.$row['id'].'"/> </td>';
			$output .= "</tr>";
			$sn ++;
		}
	}
	else
	{//show the msg

			$output =
				   '<div class="alert alert-danger alert-dismissable col-md-12">
					<button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
					<img src="assets/images/info.png" />&nbsp;&nbsp; No record found in the system.
				   </div>';
	}
	$output .=
	'</tbody>
    </table>';
	return $output;
}//end of view students ants listings per programmes


//get list of the programmes
function  get_programme_list_paid($con,$sess)
{
	$result = mysqli_query($con, "SELECT * FROM departments WHERE real_ = '0'");

		while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
		{
			echo '<a href="dashboard?hubs=view_applicants_per_depart_app&a='.sha1('fucku').'&pt='.$row['school_id'].'&d='.$row['id'].'" class="btn btn-success  btn-lg" target="_blank" style="margin:4px;" >'.$row['title'].' - <span class="badge">'.get_total_prog_type_programme_applicants_paid($con,$row['id'],$sess).'</span>'.'</a>';
		}
}

//get list of the programmes
function  get_programme_list_paid_accept($con,$sess)
{
	$result = mysqli_query($con, "SELECT * FROM departments WHERE real_ = '0'");

		while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
		{
			echo '<a href="dashboard?hubs=view_applicants_per_depart_aceept&a='.sha1('fucku').'&pt='.$row['school_id'].'&d='.$row['id'].'" class="btn btn-success  btn-lg" target="_blank" style="margin:4px;" >'.$row['title'].' - <span class="badge">'.get_total_prog_type_programme_acceptance_paid($con,$row['id'],$sess).'</span>'.'</a>';
		}
}


//function view students listings per programmes
function view_financial_report_app_fee($con,$d,$yr) // pt programm type , p programme //AND applicants.id = applicants_fee_payments.applicant_id
{
	//please remove applicant later

	//query the database
	$q = "SELECT ap.id, ap.school_applied_for, ap.programme_applied_for, ap.department_applied_for, af.application_number,
		  af.state_id, af.lga_id, af.first_name, af.last_name, af.middle_name, af.phone_no, af.gender,  af.email,
		  DATE_FORMAT(ap.date_added, '%M %d, %Y %l:%i:%p') as date_added, applicants_fee_payments.amount, applicants_fee_payments.invoice_id

		  FROM  applicant ap, applicant_profile af, applicants_fee_payments
		  WHERE ap.department_applied_for = '$d' AND af.session_id = '$yr'
			AND ap.id = applicants_fee_payments.applicant_id AND ap.id = af.applicant_id
		  ORDER BY af.application_number ASC";
	$r = mysqli_query($con, $q);

	if(mysqli_num_rows($r) > 0)
	{//show table



		  $output =
		  '  <div class="table-responsive">
					<table class="display compact table table-striped table-bordered datatable">
							<thead>
				<th>Application No.</th>
				<th>Name</th>
				<th>Gender</th>
				<th>Department</th>
				<th>Programme</th>
				<th>Ph. Contacts</th>
				<th>State</th>
				<th>L.G.A</th>
				<th>Amount</th>
				<th>Invoice ID</th>
			</thead>
			<tbody>';

		while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
		{
			$output .= "<tr>";
			$output .= "<td>".$row['application_number']."</td>";
			$output .= "<td> <a href='#'>".$row['first_name'].' '.$row['middle_name'].' '.$row['last_name']."</a></td>";
			$output .= "<td>".$row['gender']."</td>";
			$output .= "<td>".get_user_deparment($con, $row['department_applied_for'])."</td>";
			$output .= "<td>".get_user_programme($con, $row['programme_applied_for'])."</td>";
			$output .= "<td>".$row['phone_no']."</td>";
			$output .= "<td>".get_state_title($con, $row['state_id'])."</td>";
			$output .= "<td>".get_lga_title($con, $row['lga_id'])."</td>";
			$output .= "<td>".$row['amount']."</td>";
			$output .= "<td>".$row['invoice_id']."</td>";
			$output .= "</tr>";
		}
	}
	else
	{//show the msg

			$output =
				   '<div class="alert alert-danger alert-dismissable col-12">
					<button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
					<img src="assets/images/info.png" />&nbsp;&nbsp; No record found in the system.
				   </div>';
	}
	$output .=
	'</tbody>
    </table>
		</div>';
	return $output;
}//end of view students ants listings per programmes

//function view students listings per programmes
function view_financial_report_accept_fee($con,$d,$yr) // pt programm type , p programme //AND applicants.id = applicants_fee_payments.applicant_id
{
	//query the database
	$q = "SELECT ap.id, ap.school_applied_for, ap.programme_applied_for, ap.department_applied_for, af.application_number,
		  af.state_id, af.lga_id, af.first_name, af.last_name, af.middle_name, af.phone_no, af.gender,  af.email,
		  DATE_FORMAT(ap.date_added, '%M %d, %Y %l:%i:%p') as date_added, acceptance_fee_payments.amount, acceptance_fee_payments.invoice_id

		  FROM  applicant ap, applicant_profile af, acceptance_fee_payments

		  WHERE ap.department_applied_for = '$d' AND af.session_id = '$yr'
			AND ap.id = acceptance_fee_payments.student_id AND ap.id = af.applicant_id
		  ORDER BY af.application_number ASC";
	$r = mysqli_query($con, $q);

	if(mysqli_num_rows($r) > 0)
	{//show table
		  $output =
		  '  <div class="table-responsive">
					<table class="display compact table table-striped table-bordered datatable">
							<thead>
				<th>Application No.</th>
				<th>Name</th>
				<th>Gender</th>
				<th>Department</th>
				<th>Programme</th>
				<th>Ph. Contacts</th>
				<th>State</th>
				<th>L.G.A</th>
				<th>Amount</th>
				<th>Invoice ID</th>
			</thead>
			<tbody>';

		while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
		{
			$output .= "<tr>";
			$output .= "<td>".$row['application_number']."</td>";
			$output .= "<td> <a href='#'>".$row['first_name'].' '.$row['middle_name'].' '.$row['last_name']."</a></td>";
			$output .= "<td>".$row['gender']."</td>";
			$output .= "<td>".get_user_deparment($con, $row['department_applied_for'])."</td>";
			$output .= "<td>".get_user_programme($con, $row['programme_applied_for'])."</td>";
			$output .= "<td>".$row['phone_no']."</td>";
			$output .= "<td>".get_state_title($con, $row['state_id'])."</td>";
			$output .= "<td>".get_lga_title($con, $row['lga_id'])."</td>";
			$output .= "<td>".$row['amount']."</td>";
			$output .= "<td>".$row['invoice_id']."</td>";
			$output .= "</tr>";
		}
	}
	else
	{//show the msg

			$output =
				   '<div class="alert alert-danger alert-dismissable col-12">
					<button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
					<img src="assets/images/info.png" />&nbsp;&nbsp; No record found in the system.
				   </div>';
	}
	$output .=
	'</tbody>
    </table>
		</div>';
	return $output;
}//end of view students ants listings per programmes

//function view students listings per programmes
function view_financial_report_sch_fee($con,$d,$yr) // pt programm type , p programme //AND applicants.id = applicants_fee_payments.applicant_id
{
	//query the database
	$q = "SELECT students.id, students.school_id, students.programme_id, students.department_id,
				students.matric_number, students.state_id, students.lga_id, students.first_name, students.last_name,
				students.middle_name, students.phone_no, students.gender,  students.email,
		  DATE_FORMAT(students.date_added, '%M %d, %Y %l:%i:%p') as date_added, school_fee_payments.amount, school_fee_payments.invoice_id

		  FROM  students, school_fee_payments

		  WHERE students.department_id = '$d' AND students.session = '$yr'
			AND students.id = school_fee_payments.student_id
		  ORDER BY students.matric_number ASC";
	$r = mysqli_query($con, $q);

	if(mysqli_num_rows($r) > 0)
	{//show table
		  $output =
		  '  <div class="table-responsive">
					<table class="display compact table table-striped table-bordered datatable">
							<thead>
				<th>Matric No.</th>
				<th>Name</th>
				<th>Gender</th>
				<th>Department</th>
				<th>Programme</th>
				<th>Ph. Contacts</th>
				<th>State</th>
				<th>L.G.A</th>
				<th>Amount</th>
				<th>Invoice ID</th>
			</thead>
			<tbody>';

		while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
		{
			$output .= "<tr>";
			$output .= "<td>".$row['matric_number']."</td>";
			$output .= "<td> <a href='#'>".$row['first_name'].' '.$row['middle_name'].' '.$row['last_name']."</a></td>";
			$output .= "<td>".$row['gender']."</td>";
			$output .= "<td>".get_user_deparment($con, $row['department_id'])."</td>";
			$output .= "<td>".get_user_programme($con, $row['programme_id'])."</td>";
			$output .= "<td>".$row['phone_no']."</td>";
			$output .= "<td>".get_state_title($con, $row['state_id'])."</td>";
			$output .= "<td>".get_lga_title($con, $row['lga_id'])."</td>";
			$output .= "<td>".$row['amount']."</td>";
			$output .= "<td>".$row['invoice_id']."</td>";
			$output .= "</tr>";
		}
	}
	else
	{//show the msg

			$output =
				   '<div class="alert alert-danger alert-dismissable col-12">
					<button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
					<img src="assets/images/info.png" />&nbsp;&nbsp; No record found in the system.
				   </div>';
	}
	$output .=
	'</tbody>
    </table>
		</div>';
	return $output;
}//end of view students ants listings per programmes

//get list of the programmes
function  get_programme_list_paid_school($con,$sess)
{
	$result = mysqli_query($con, "SELECT * FROM departments WHERE real_ = '0'");

		while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
		{
			echo '<a href="dashboard?hubs=view_applicants_per_depart_sch&a='.sha1('fucku').'&pt='.$row['school_id'].'&d='.$row['id'].'" class="btn btn-success  btn-lg" target="_blank" style="margin:4px;" >'.$row['title'].' - <span class="badge">'.get_total_prog_type_programme_school_paid($con,$row['id'],$sess).'</span>'.'</a>';
		}
}

//function get total applicants in a programme
function get_total_prog_type_programme_applicants_paid($con, $id,$sess)
{
	$q = "SELECT SUM(amount -500) FROM applicants_fee_payments  WHERE department_id = '$id' AND session='$sess'";
	$r = mysqli_query($con, $q);
	$row = mysqli_fetch_array($r,MYSQLI_NUM);

	return number_format($row[0]);

}


//function get total applicants in a programme
function get_total_prog_type_programme_acceptance_paid($con, $id, $sess)
{
	$q = "SELECT SUM(amount) FROM acceptance_fee_payments  WHERE department_id = '$id' AND session='$sess'";
	$r = mysqli_query($con, $q);
	$row = mysqli_fetch_array($r,MYSQLI_NUM);

	return number_format($row[0]);

}

//function get total applicants in a programme
function get_total_prog_type_programme_school_paid($con, $id,$sess)
{
	$q = "SELECT SUM(amount - 500) FROM school_fee_payments  WHERE department_id = '$id' AND session= '$sess'";
	$r = mysqli_query($con, $q);
	$row = mysqli_fetch_array($r,MYSQLI_NUM);

	return number_format($row[0]);

}

//function view students listings per programmes
function view_students_paid($con,$ses) // pt programm type , p programme //AND applicants.id = applicants_fee_payments.applicant_id
{
	//please remove applicant later

	//query the database
	$q = "SELECT id, school_id,department_id, programme_id, application_number,`matric_number`,
		  state_id, lga_id, first_name,middle_name, last_name, phone_no, gender,  email, level,
		  DATE_FORMAT(date_added, '%M %d, %Y %l:%i:%p') as date_added

		  FROM  students

		  WHERE session = '$ses' AND id IN (SELECT student_id FROM school_fee_payments WHERE session='$ses')

		  ORDER BY matric_number ASC";
	$r = mysqli_query($con, $q);

	if(mysqli_num_rows($r) > 0)
	{//show table


$sn = 1;
		  $output =
		  '  <div class="table-responsive"  style="width:100%">

              <table class="table table-hover table-center mb-0 datatable">
              <thead>

							<th></th>
						<th>Matric No.</th>
						<th>SurName</th>
            <th>First Name</th>
						<th>Middle Name</th>
						<th>Level</th>
						<th>Gender</th>
						<th>Department</th>

						<th>Ph. Contacts</th>
						<th>State</th>
						<th>L.G.A</th>
						<th>App No.</th>
						<th>Payment Status</th>
						<th>Photo</th>




			</thead>


			<tbody>';

		while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
		{
			$sn++;
			$output .= "<tr>";
			$output .= "<td>".$sn."</td>";
			$output .= "<td>".$row['matric_number']."</td>";
			$output .= "<td class='xeditfname' id='".$row['id']."' key='last_name'> ".$row['last_name']."</td>";
			$output .= "<td class='xeditoname' id='".$row['id']."' key='first_name'>".$row['first_name']."</td>";
			$output .= "<td class='xeditoname' id='".$row['id']."' key='middle_name'>".$row['middle_name']."</td>";
			$output .= "<td>".$row['level']."</td>";
			$output .= "<td>".$row['gender']."</td>";
			$output .= "<td>".get_user_deparment($con, $row['department_id'])."</td>";
			$output .= "<td>".$row['phone_no']."</td>";
			$output .= "<td>".get_state_title($con, $row['state_id'])."</td>";
			$output .= "<td>".get_lga_title($con, $row['lga_id'])."</td>";

			$output .= "<td>".$row['application_number']."</td>";







			if( has_paid_school_fee($con, $row['id'],$ses))
			{
				$output .= "<td> <label class='label label-success'> PAID </label> </td>";
			}
			else
			{
				$output .= "<td> <label class='label label-danger'> NOT PAID </label> </td>";
			}


			$output .= "<td>".get_student_image($con, $row['id'])."</td>";



			$output .= "</tr>";


		}
	}
	else
	{//show the msg

			$output =
				   '<div class="alert alert-danger alert-dismissable col-12">
					<button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
					<img src="assets/images/info.png" />&nbsp;&nbsp; No record found in the system.
				   </div>';


	}



	$output .=
	'</tbody>
    </table>
		</div>';





	return $output;








}//end of view students ants listings per programmes

//function view students not paid for the session
function view_students_not_paid($con,$ses) // pt programm type , p programme //AND applicants.id = applicants_fee_payments.applicant_id
{
	//please remove applicant later

	//query the database
	$q = "SELECT id, school_id,department_id, programme_id, application_number,`matric_number`,
		  state_id, lga_id, first_name,middle_name, last_name, phone_no, gender,  email, level,
		  DATE_FORMAT(date_added, '%M %d, %Y %l:%i:%p') as date_added

		  FROM  students

		  WHERE session = '$ses' AND id NOT IN (SELECT student_id FROM school_fee_payments WHERE session='$ses')

		  ORDER BY matric_number ASC";
	$r = mysqli_query($con, $q);

	if(mysqli_num_rows($r) > 0)
	{//show table

$sn = 1;

		  $output =
		  '  <div class="table-responsive"  style="width:100%">

              <table class="table table-hover table-center mb-0 datatable">
              <thead>

							<th></th>
						<th>Matric No.</th>
						<th>SurName</th>
                        <th>First Name</th>
						<th>Middle Name</th>
						<th>Level</th>
						<th>Gender</th>
						<th>Programme</th>

						<th>Ph. Contacts</th>
						<th>State</th>
						<th>L.G.A</th>
						<th>App No.</th>
						<th>Payment Status</th>
						<th>Photo</th>




			</thead>


			<tbody>';

		while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
		{
			$sn++;
			$output .= "<tr>";

			$output .= "<td>".$sn."</td>";
			$output .= "<td>".$row['matric_number']."</td>";
			$output .= "<td class='xeditfname' id='".$row['id']."' key='last_name'> ".$row['last_name']."</td>";
			$output .= "<td class='xeditoname' id='".$row['id']."' key='first_name'>".$row['first_name']."</td>";
			$output .= "<td class='xeditoname' id='".$row['id']."' key='middle_name'>".$row['middle_name']."</td>";
			$output .= "<td>".$row['level']."</td>";
			$output .= "<td>".$row['gender']."</td>";
			$output .= "<td>".get_user_deparment($con, $row['department_id'])."</td>";
			$output .= "<td>".$row['phone_no']."</td>";
			$output .= "<td>".get_state_title($con, $row['state_id'])."</td>";
			$output .= "<td>".get_lga_title($con, $row['lga_id'])."</td>";

			$output .= "<td>".$row['application_number']."</td>";







			if( has_paid_school_fee($con, $row['id'],$ses))
			{
				$output .= "<td> <label class='label label-success'> PAID </label> </td>";
			}
			else
			{
				$output .= "<td> <label class='label label-danger'> NOT PAID </label> </td>";
			}


			$output .= "<td>".get_student_image($con, $row['id'])."</td>";



			$output .= "</tr>";


		}
	}
	else
	{//show the msg

			$output =
				   '<div class="alert alert-danger alert-dismissable col-12">
					<button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
					<img src="assets/images/info.png" />&nbsp;&nbsp; No record found in the system.
				   </div>';


	}



	$output .=
	'</tbody>
    </table>
		</div>';
	return $output;
}//end of view students not paid school fee for the session


//function view students not paid for the session
function view_defered_students($con, $ses) // pt programm type , p programme //AND applicants.id = applicants_fee_payments.applicant_id
{
	//please remove applicant later

	//query the database
	$q = "SELECT id, school_id,department_id, programme_id, application_number,`matric_number`,
		  state_id, lga_id, first_name,middle_name, last_name, phone_no, gender,  email, level,
		  DATE_FORMAT(date_added, '%M %d, %Y %l:%i:%p') as date_added

		  FROM  students

		  WHERE defer_status = '1'

		  ORDER BY matric_number ASC";
	$r = mysqli_query($con, $q);

	if(mysqli_num_rows($r) > 0)
	{//show table

$sn = 1;

		  $output =
		  '  <div class="table-responsive"  style="width:100%">

              <table class="table table-hover table-center mb-0 datatable">
              <thead>

							<th></th>
						<th>Matric No.</th>
						<th>SurName</th>
                        <th>First Name</th>
						<th>Middle Name</th>
						<th>Level</th>
						<th>Gender</th>
						<th>Programme</th>
						<th>Ph. Contacts</th>
						<th>State</th>
						<th>L.G.A</th>
						<th>App No.</th>
						<th>Payment Status</th>
						<th>Photo</th>
						<th>Action</th>
			</thead>
			<tbody>';

		while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
		{
			$sn++;
			$output .= "<tr>";

			$output .= "<td>".$sn."</td>";
			$output .= "<td>".$row['matric_number']."</td>";
			$output .= "<td class='xeditfname' id='".$row['id']."' key='last_name'> ".$row['last_name']."</td>";
			$output .= "<td class='xeditoname' id='".$row['id']."' key='first_name'>".$row['first_name']."</td>";
			$output .= "<td class='xeditoname' id='".$row['id']."' key='middle_name'>".$row['middle_name']."</td>";
			$output .= "<td>".$row['level']."</td>";
			$output .= "<td>".$row['gender']."</td>";
			$output .= "<td>".get_user_deparment($con, $row['department_id'])."</td>";
			$output .= "<td>".$row['phone_no']."</td>";
			$output .= "<td>".get_state_title($con, $row['state_id'])."</td>";
			$output .= "<td>".get_lga_title($con, $row['lga_id'])."</td>";
			$output .= "<td>".$row['application_number']."</td>";

			if( has_paid_school_fee($con, $row['id'],$ses))
			{
				$output .= "<td> <label class='label label-success'> PAID </label> </td>";
			}
			else
			{
				$output .= "<td> <label class='label label-danger'> NOT PAID </label> </td>";
			}
			$output .= "<td>".get_student_image($con, $row['id'])."</td>";
			$output .= "<td><button onclick='defer(".$row['id'].")' class='btn btn-info'>Un-defer</button></td>";
			$output .= "</tr>";
		}
	}
	else
	{//show the msg
			$output =
				   '<div class="alert alert-danger alert-dismissable col-12">
					<button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
					<img src="assets/images/info.png" />&nbsp;&nbsp; No record found in the system.
				   </div>';
	}
	$output .=
	'</tbody>
    </table>
		</div>';
	return $output;
}//end of view students not paid school fee for the session


//function view students listings per programmes
function view_students_summary($con,$ses,$lev) // pt programm type , p programme //AND applicants.id = applicants_fee_payments.applicant_id
{
	//please remove applicant later

	//query the database
	$q = "SELECT id, school_id,department_id, programme_id, application_number,`matric_number`,
		  state_id, lga_id, first_name,middle_name, last_name, phone_no, gender,  email, level,
		  DATE_FORMAT(date_added, '%M %d, %Y %l:%i:%p') as date_added

		  FROM  students

		  WHERE level = '$lev'

		  ORDER BY matric_number ASC";
	$r = mysqli_query($con, $q);

	if(mysqli_num_rows($r) > 0)
	{//show table



		  $output =
		  '  <div class="table-responsive"  style="width:100%">

              <table class="table table-hover table-center mb-0 datatable" style="width:100%">
              <thead>

                        <th></th>
						<th>Matric No.</th>
						<th>Surname</th>
                        <th>First Name</th>
						<th>Middle Name</th>
						<th>Level</th>
						<th>Gender</th>
						<th>Programme</th>
						<th>Ph. Contacts</th>
						<th>State</th>
						<th>L.G.A</th>
						<th>App No.</th>
							<th>Actions</th>
						<th>Payment Status</th>
						<th>Photo</th>




			</thead>

			<tbody>';
            $sn=1;
		while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
		{
			$output .= "<tr>";

            $output .= "<td>".$sn."</td>";
			$output .= "<td>".$row['matric_number']."</td>";
			$output .= "<td class='xeditfname' id='".$row['id']."' key='last_name'> ".$row['last_name']."</td>";
            $output .= "<td class='xeditfname' id='".$row['id']."' key='first_name'> ".$row['first_name']."</td>";
			$output .= "<td class='xeditoname' id='".$row['id']."' key='middle_name'>".$row['middle_name']."</td>";
			$output .= "<td>".$row['level']."</td>";
			$output .= "<td>".$row['gender']."</td>";
			$output .= "<td>".get_user_programme($con, $row['programme_id'])."</td>";
			$output .= "<td>".$row['phone_no']."</td>";
			$output .= "<td>".get_state_title($con, $row['state_id'])."</td>";
			$output .= "<td>".get_lga_title($con, $row['lga_id'])."</td>";
			$output .= "<td>".$row['application_number']."</td>";

			$output .= '<td><a  class="btn btn-sm btn-info" onclick="reset_pw('.$row['id'].')" id="'.$row['id'].'" style="color:white;">  RESET PASSWORD </a> <span id="loading"></span>
				</td>';

			if( has_paid_school_fee($con, $row['id'],$ses))
			{
				$output .= "<td> <label class='label label-success'> PAID </label> </td>";
			}
			else
			{
				$output .= "<td> <label class='label label-danger'> NOT PAID </label> </td>";
			}


			$output .= "<td>".get_student_image($con, $row['id'])."</td>";



			$output .= "</tr>";
            $sn++;

		}
	}
	else
	{//show the msg

			$output =
				   '<div class="alert alert-danger alert-dismissable col-12">
					<button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
					<img src="assets/images/info.png" />&nbsp;&nbsp; No record found in the system.
				   </div>';


	}



	$output .=
	'</tbody>
    </table>
		</div>';





	return $output;








}//end of view students ants listings per programmes


//function view students listings per programmes
function view_students_list_per_departments($con,$d,$yr) // pt programm type , p programme //AND applicants.id = applicants_fee_payments.applicant_id
{
	//please remove applicant later

	//query the database
	$q = "SELECT id, school_id, department_id, programme_id, application_number, `matric_number`,
		  state_id, lga_id, first_name, last_name, middle_name, phone_no, gender,  email,
		  DATE_FORMAT(date_added, '%M %d, %Y %l:%i:%p') as date_added,admission_serial_no

		  FROM  students

		  WHERE department_id = '$d' AND session = '$yr'

		  ORDER BY matric_number ASC";
	$r = mysqli_query($con, $q);

	if(mysqli_num_rows($r) > 0)
	{//show table



		  $output =
		  '  <div class="table-responsive"  style="width:100%">

              <table id="example" class="display" style="width:100%">
              <thead>
                <th></th>
				<th>Matric No.</th>
				<th>App. Number</th>
				<th>Name</th>
				<th>Gender</th>
				<th>Programme Type</th>
				<th>Programme</th>
				<th>Ph. Contacts</th>
				<th>State</th>
				<th>L.G.A</th>
				<th>Passports</th>



			</thead>

			<tbody>';
        $sn = 1;
		while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
		{
			$output .= "<tr>";
			$output .= "<td>".$sn."</td>";
			$output .= "<td>".$row['matric_number']."</td>";
			$output .= "<td>".$row['application_number']."</td>";
			$output .= '<td> <a href="dashboard?hubs=view_student&api='.base64_encode($row['id']).'">'.$row['first_name'].' '.$row['middle_name'].' '.$row['last_name'].'</a></td>';
			$output .= "<td>".$row['gender']."</td>";
			$output .= "<td>".get_user_school($con, $row['school_id'])."</td>";
			$output .= "<td>".get_user_programme($con, $row['programme_id'])."</td>";
			$output .= "<td>".$row['phone_no']."</td>";
			$output .= "<td>".get_state_title($con, $row['state_id'])."</td>";
			$output .= "<td>".get_lga_title($con, $row['lga_id'])."</td>";
			$output .= "<td>".get_student_image($con, $row['id'])."</td>";



			$output .= "</tr>";
    $sn++;

		}
	}
	else
	{//show the msg

			$output =
				   '<div class="alert alert-danger alert-dismissable col-12">
					<button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
					<img src="assets/images/info.png" />&nbsp;&nbsp; No record found in the system.
				   </div>';


	}



	$output .=
	'</tbody>
    </table>
		</div>';





	return $output;




}//end of view students ants listings per programmes

//function view students listings per programmes
function view_students_all($con,$yr) // pt programm type , p programme //AND applicants.id = applicants_fee_payments.applicant_id
{
	//please remove applicant later

	//query the database
	$q = "SELECT id, school_id, department_id, programme_id, application_number, `matric_number`,
		  state_id, lga_id, first_name, last_name, middle_name, phone_no, gender,  email,
		  DATE_FORMAT(date_added, '%M %d, %Y %l:%i:%p') as date_added,admission_serial_no

		  FROM  students WHERE  session = '$yr'

		  ORDER BY matric_number ASC";
	$r = mysqli_query($con, $q);

	if(mysqli_num_rows($r) > 0)
	{//show table



		  $output =
		  '  <div class="table-responsive"  style="width:100%">

              <table class="display table table-striped datatable" style="width:100%">
              <thead>
                <th></th>
				<th>Matric No.</th>
				<th>App. Number</th>
				<th>Name</th>
				<th>Gender</th>
				<th>Programme Type</th>
				<th>Programme</th>
				<th>Ph. Contacts</th>
				<th>State</th>
				<th>L.G.A</th>
				<th>Passports</th>



			</thead>

			<tbody>';
        $sn = 1;
		while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
		{
			$output .= "<tr>";
			$output .= "<td>".$sn."</td>";
			$output .= "<td>".$row['matric_number']."</td>";
			$output .= "<td>".$row['application_number']."</td>";
			$output .= "<td> <a href='#'>".$row['first_name'].' '.$row['middle_name'].' '.$row['last_name']."</a></td>";
			$output .= "<td>".$row['gender']."</td>";
			$output .= "<td>".get_user_school($con, $row['school_id'])."</td>";
			$output .= "<td>".get_user_programme($con, $row['programme_id'])."</td>";
			$output .= "<td>".$row['phone_no']."</td>";
			$output .= "<td>".get_state_title($con, $row['state_id'])."</td>";
			$output .= "<td>".get_lga_title($con, $row['lga_id'])."</td>";
			$output .= "<td>".get_student_image($con, $row['id'])."</td>";



			$output .= "</tr>";
    $sn++;

		}
	}
	else
	{//show the msg

			$output =
				   '<div class="alert alert-danger alert-dismissable col-12">
					<button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
					<img src="assets/images/info.png" />&nbsp;&nbsp; No record found in the system.
				   </div>';


	}



	$output .=
	'</tbody>
    </table>
		</div>';





	return $output;




}//end of view students

//get school name
function get_user_school($con,$id)
{
	$result = mysqli_query($con,"SELECT title FROM schools WHERE id = '$id'");
	$row = mysqli_fetch_assoc($result);
	$title = $row['title'];

	return $title;
}

//function view students listings per programmes
function view_students_paid_app_fee($con,$ses) // pt programm type , p programme //AND applicants.id = applicants_fee_payments.applicant_id
{
	//please remove applicant later

	//query the database
	$q = "SELECT applicant.id,applicant.department_applied,
				applicant.programme_applied, applicant.application_number,
				applicant.state_id, applicant.lga_id, applicant.first_name,
				applicant.middle_name, applicant.last_name, applicant.phone_no,
				applicant.gender,  applicant.email,
				DATE_FORMAT(applicants_fee_payments.date_added, '%M %d, %Y %l:%i:%p') as date_added,
				applicants_fee_payments.invoice_id, applicants_fee_payments.amount

		  FROM  applicant, applicants_fee_payments

		  WHERE applicant.session_id = '$ses' AND applicant.id = applicants_fee_payments.applicant_id

		  ORDER BY applicant.application_number ASC";
	$r = mysqli_query($con, $q);

	if(mysqli_num_rows($r) > 0)
	{//show table



		  $output =
		  '  <div class="table-responsive"  style="width:100%">

              <table id="example" class="display" style="width:100%">
              <thead>


						<th></th>
						<th>First Name</th>
						<th>Middle Name</th>
						<th>Last Name</th>
						<th>Amount</th>
						<th>Invoice ID</th>
						<th>Programme</th>
						<th>Ph. Contacts</th>
						<th>State</th>
						<th>L.G.A</th>
						<th>App No.</th>
						<th>Date Paid</th>
						<th>Payment Status</th>
						<th>Photo</th>




			</thead>

			<tbody>';
			$sn =1;
		while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
		{
			$output .= "<tr>";
			$output .= "<td> ".$sn."</td>";
			$output .= "<td class='xeditfname' id='".$row['id']."' key='first_name'> ".$row['first_name']."</td>";
			$output .= "<td class='xeditfname' id='".$row['id']."' key='middle_name'> ".$row['middle_name']."</td>";
			$output .= "<td class='xeditoname' id='".$row['id']."' key='last_name'>".$row['last_name']."</td>";
			$output .= "<td>".$row['amount']."</td>";
			$output .= "<td>".$row['invoice_id']."</td>";
			$output .= "<td>".get_user_programme($con, $row['programme_applied'])."</td>";
			$output .= "<td>".$row['phone_no']."</td>";
			$output .= "<td>".get_state_title($con, $row['state_id'])."</td>";
			$output .= "<td>".get_lga_title($con, $row['lga_id'])."</td>";

			$output .= "<td>".$row['application_number']."</td>";
			$output .= "<td>".$row['date_added']."</td>";

			if( has_paid_app_fee($con, $row['id'],$ses))
			{
				$output .= "<td> <label class='label label-success'> PAID </label> </td>";
			}
			else
			{
				$output .= "<td> <label class='label label-danger'> NOT PAID </label> </td>";
			}


			$output .= "<td>".get_applicant_image($con, $row['id'])."</td>";



			$output .= "</tr>";

$sn++;
		}
	}
	else
	{//show the msg

			$output =
				   '<div class="alert alert-danger alert-dismissable col-12">
					<button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
					<img src="assets/images/info.png" />&nbsp;&nbsp; No record found in the system.
				   </div>';


	}



	$output .=
	'</tbody>
    </table>
		</div>';





	return $output;








}//end of view students ants listings per programmes


//function view students listings per programmes
function view_students_paid_school_fee($con,$ses) // pt programm type , p programme //AND applicants.id = applicants_fee_payments.applicant_id
{
	//please remove applicant later

	//query the database
	$q = "SELECT students.id,students.department_id,
				students.programme_id, students.application_number, students.matric_number,
				students.state_id, students.lga_id, students.first_name,
				students.middle_name, students.last_name, students.phone_no,
				students.gender,  students.email,
				DATE_FORMAT(school_fee_payments.date_added, '%M %d, %Y %l:%i:%p') as date_added,
				school_fee_payments.invoice_id, school_fee_payments.amount

		  FROM  students, school_fee_payments

		  WHERE students.session = '$ses' AND students.id = school_fee_payments.student_id

		  ORDER BY students.matric_number ASC";
	$r = mysqli_query($con, $q);

	if(mysqli_num_rows($r) > 0)
	{//show table


        $sn =1;
		  $output =
		  '  <div class="table-responsive"  style="width:100%">

              <table id="example" class="display" style="width:100%">
              <thead>
						<th></th>
						<th>Matric Number</th>
						<th>First Name</th>
						<th>Middle Name</th>
						<th>Last Name</th>
						<th>Amount</th>
						<th>Invoice ID</th>
						<th>Programme</th>
						<th>Ph. Contacts</th>
						<th>State</th>
						<th>L.G.A</th>
						<th>App No.</th>
						<th>Date Paid</th>
						<th>Payment Status</th>
						<th>Photo</th>

			</thead>

			<tbody>';
			$snn = 1;
		while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
		{
			$output .= "<tr>";
			$output .= "<td>".$snn."</td>";
			$output .= "<td class='xeditfname' id='".$row['id']."' key='first_name'> ".$row['matric_number']."</td>";
			$output .= "<td class='xeditfname' id='".$row['id']."' key='first_name'> ".$row['first_name']."</td>";
			$output .= "<td class='xeditfname' id='".$row['id']."' key='middle_name'> ".$row['middle_name']."</td>";
			$output .= "<td class='xeditoname' id='".$row['id']."' key='last_name'>".$row['last_name']."</td>";
			$output .= "<td>".$row['amount']."</td>";
			$output .= "<td>".$row['invoice_id']."</td>";
			$output .= "<td>".get_user_programme($con, $row['programme_id'])."</td>";
			$output .= "<td>".$row['phone_no']."</td>";
			$output .= "<td>".get_state_title($con, $row['state_id'])."</td>";
			$output .= "<td>".get_lga_title($con, $row['lga_id'])."</td>";

			$output .= "<td>".$row['application_number']."</td>";
			$output .= "<td>".$row['date_added']."</td>";







			if( has_paid_school_fee($con, $row['id'],$ses))
			{
				$output .= "<td> <label class='label label-success'> PAID </label> </td>";
			}
			else
			{
				$output .= "<td> <label class='label label-danger'> NOT PAID </label> </td>";
			}


			$output .= "<td>".get_student_image($con, $row['id'])."</td>";



			$output .= "</tr>";

    $snn++;
		}
	}
	else
	{//show the msg

			$output =
				   '<div class="alert alert-danger alert-dismissable col-12">
					<button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
					<img src="assets/images/info.png" />&nbsp;&nbsp; No record found in the system.
				   </div>';


	}



	$output .=
	'</tbody>
    </table>
		</div>';





	return $output;








}//end of view students ants listings per programmes


//function view students listings per programmes
function view_students_paid_hostel_fee($con,$ses) // pt programm type , p programme //AND applicants.id = applicants_fee_payments.applicant_id
{
	//please remove applicant later

	//query the database
	$q = "SELECT students.id,students.department_id,
				students.programme_id, students.application_number, students.matric_number,
				students.state_id, students.lga_id, students.first_name,
				students.middle_name, students.last_name, students.phone_no,
				students.gender,  students.email,
				DATE_FORMAT(hostel_fee_payments.date_added, '%M %d, %Y %l:%i:%p') as date_added,
				hostel_fee_payments.invoice_id, hostel_fee_payments.amount

		  FROM  students, hostel_fee_payments

		  WHERE students.session = '$ses' AND students.id = hostel_fee_payments.student_id

		  ORDER BY students.matric_number ASC";
	$r = mysqli_query($con, $q);

	if(mysqli_num_rows($r) > 0)
	{//show table



		  $output =
		  '  <div class="table-responsive"  style="width:100%">

              <table id="example" class="display" style="width:100%">
              <thead>
						<th></th>
						<th>Matric Number</th>
						<th>First Name</th>
						<th>Middle Name</th>
						<th>Last Name</th>
						<th>Amount</th>
						<th>Invoice ID</th>
						<th>Programme</th>
						<th>Ph. Contacts</th>
						<th>State</th>
						<th>L.G.A</th>
						<th>App No.</th>
						<th>Date Paid</th>
						<th>Payment Status</th>
						<th>Photo</th>

			</thead>

			<tbody>';
			$sn =1;
		while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
		{
			$output .= "<tr>";
			$output .= "<td class='xeditfname' id='".$row['id']."' key='first_name'> ".$sn."</td>";
			$output .= "<td class='xeditfname' id='".$row['id']."' key='first_name'> ".$row['matric_number']."</td>";
			$output .= "<td class='xeditfname' id='".$row['id']."' key='first_name'> ".$row['first_name']."</td>";
			$output .= "<td class='xeditfname' id='".$row['id']."' key='middle_name'> ".$row['middle_name']."</td>";
			$output .= "<td class='xeditoname' id='".$row['id']."' key='last_name'>".$row['last_name']."</td>";
			$output .= "<td>".$row['amount']."</td>";
			$output .= "<td>".$row['invoice_id']."</td>";
			$output .= "<td>".get_user_programme($con, $row['programme_id'])."</td>";
			$output .= "<td>".$row['phone_no']."</td>";
			$output .= "<td>".get_state_title($con, $row['state_id'])."</td>";
			$output .= "<td>".get_lga_title($con, $row['lga_id'])."</td>";

			$output .= "<td>".$row['application_number']."</td>";
			$output .= "<td>".$row['date_added']."</td>";







			if( has_paid_hostel_fee($con, $row['id'],$ses))
			{
				$output .= "<td> <label class='label label-success'> PAID </label> </td>";
			}
			else
			{
				$output .= "<td> <label class='label label-danger'> NOT PAID </label> </td>";
			}


			$output .= "<td>".get_student_image($con, $row['id'])."</td>";



			$output .= "</tr>";

$sn++;
		}
	}
	else
	{//show the msg

			$output =
				   '<div class="alert alert-danger alert-dismissable col-12">
					<button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
					<img src="assets/images/info.png" />&nbsp;&nbsp; No record found in the system.
				   </div>';


	}



	$output .=
	'</tbody>
    </table>
		</div>';





	return $output;








}//end of view students ants listings per programmes


//function view students listings per programmes
function view_students_paid_aceept_fee($con,$ses) // pt programm type , p programme //AND applicants.id = applicants_fee_payments.applicant_id
{
	//please remove applicant later

	//query the database
	$q = "SELECT applicants.id,applicants.department_applied_for, applicants.programme_id,
	applicants.application_number, applicants.state_id, applicants.lga_id, applicants.first_name,
	applicants.middle_name, applicants.last_name, applicants.phone_no, applicants.gender,
	applicants.email, DATE_FORMAT(acceptance_fee_payments.date_added, '%M %d, %Y %l:%i:%p') as date_added,
	acceptance_fee_payments.invoice_id, acceptance_fee_payments.amount

		  FROM  applicants, acceptance_fee_payments

		  WHERE applicants.session_id = '$ses' AND applicants.id = acceptance_fee_payments.student_id

		  ORDER BY applicants.application_number ASC";
	$r = mysqli_query($con, $q);

	if(mysqli_num_rows($r) > 0)
	{//show table



		  $output =
		  '  <div class="table-responsive"  style="width:100%">

              <table id="example" class="display" style="width:100%">
              <thead>
						<th></th>
						<th>First Name</th>
						<th>Middle Name</th>
						<th>Last Name</th>
						<th>Amount</th>
						<th>Invoice ID</th>
						<th>Programme</th>
						<th>Ph. Contacts</th>
						<th>State</th>
						<th>L.G.A</th>
						<th>App No.</th>
						<th>Date Paid</th>
						<th>Payment Status</th>
						<th>Photo</th>
			</thead>

			<tbody>';
			$sn =1;
		while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
		{
			$output .= "<tr>";
			$output .= "<td class='xeditfname' id='".$row['id']."' key='first_name'> ".$sn."</td>";
			$output .= "<td class='xeditfname' id='".$row['id']."' key='first_name'> ".$row['first_name']."</td>";
			$output .= "<td class='xeditfname' id='".$row['id']."' key='middle_name'> ".$row['middle_name']."</td>";
			$output .= "<td class='xeditoname' id='".$row['id']."' key='last_name'>".$row['last_name']."</td>";
			$output .= "<td>".$row['amount']."</td>";
			$output .= "<td>".$row['invoice_id']."</td>";
			$output .= "<td>".get_user_programme($con, $row['programme_id'])."</td>";
			$output .= "<td>".$row['phone_no']."</td>";
			$output .= "<td>".get_state_title($con, $row['state_id'])."</td>";
			$output .= "<td>".get_lga_title($con, $row['lga_id'])."</td>";

			$output .= "<td>".$row['application_number']."</td>";
			$output .= "<td>".$row['date_added']."</td>";

			if( has_paid_app_fee($con, $row['id'],$ses))
			{
				$output .= "<td> <label class='label label-success'> PAID </label> </td>";
			}
			else
			{
				$output .= "<td> <label class='label label-danger'> NOT PAID </label> </td>";
			}


			$output .= "<td>".get_applicant_image($con, $row['id'])."</td>";



			$output .= "</tr>";

$sn++;
		}
	}
	else
	{//show the msg

			$output =
				   '<div class="alert alert-danger alert-dismissable col-12">
					<button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
					<img src="assets/images/info.png" />&nbsp;&nbsp; No record found in the system.
				   </div>';


	}



	$output .=
	'</tbody>
    </table>
		</div>';





	return $output;








}//end of view students ants listings per programmes

function has_paid_app_fee($con, $user_id,$session)
{
	$q = "SELECT applicant_id,session
		  FROM applicants_fee_payments
		  WHERE applicant_id = '$user_id'
		  AND session = '$session'";
	$r = mysqli_query($con, $q);

	//$row = mysqli_fetch_assoc($result);

	if(mysqli_num_rows($r)== 0)
	{
		return false;

	}
	else
	{
		return true;
	}

}

function has_paid_hostel_fee($con, $user_id,$session)
{
	$q = "SELECT student_id,session
		  FROM hostel_fee_payments
		  WHERE student_id = '$user_id'
		  AND session = '$session'";
	$r = mysqli_query($con, $q);

	//$row = mysqli_fetch_assoc($result);

	if(mysqli_num_rows($r)== 0)
	{
		return false;

	}
	else
	{
		return true;
	}

}

//function get total applicants in a programme
function get_total_faculty_students($con, $id, $sess)
{
	$q = "SELECT COUNT(id) FROM students  WHERE  faculty_id = '$id' AND session='$sess' ";
	$r = mysqli_query($con, $q);
	$row = mysqli_fetch_array($r,MYSQLI_NUM);

	return $row[0];

}

//function get total students in a programme per programme type, department, $programme , level
	function get_total_programme_students($con, $d, $p, $l,$ses)
	{
		$q = "SELECT COUNT(*) FROM students  WHERE  department_id = '$d' AND programme_id = '$p' AND level = '$l' AND session = '$ses'";
		$r = mysqli_query($con,$q);
		$row = mysqli_fetch_array($r,MYSQLI_NUM);

		return $row[0];

	}

//function generate matric number
	function generate_matric_number($con,$p, $level, $total_in_programme)
	{
		//get programme code from programme

		$programme_code = strtoupper(get_programme_code($con, $p));


		$total = $total_in_programme;


		//Function to fetch current session
		 $session = get_current_session($con, $id ='1');

		 //get the session title
		 $session_title = get_current_session_title($con, $session);


		 //get the year from the session
		 $year = substr ($session_title,2,2);



		//$year = date('Y');

		$count_character = strlen($total);

		if($count_character == '1')
		{
			$total = '000'.$total;
		}
		else if($count_character == '2')
		{
			$total = '00'.$total;
		}
		else if($count_character == '3')
		{
			$total = '0'.$total;
		}
		else if($count_character == '4')
		{
			$total = $total;
		}
		else
		{
			//do nothing for now
		}



		$matric_number = $programme_code.'/'.$year.'/'.$total; //give the matric number if not exist




		if(matric_number_exist($con, $matric_number)) //if matric no exis, do obstruct and pass through some test
		{


				$mn = $programme_code.'/'.$year.'/'; //collect the matric parameters

				//collect all the matric number


				$q = "SELECT matric_number FROM students WHERE matric_number LIKE '%$mn%'";
				$r = mysqli_query($con,$q);

				//$row = mysql_fetch_array($r, MYSQL_ASSOC);
				$mmno = array(); //array declared to hold all the matric numbers
				while($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
				{

					$number = $row['matric_number']; //collect all the matric numbers and pass to an array

					$filtered_no = substr($number, 9,4);
					$mmno[] = $filtered_no; //no need to implode

				}

						//$comma_separated = implode(",", $mmno);


				$highestmn = max($mmno); //check the max number from stored arrays

				$hn = $highestmn + 1; //ad 1 to the highest

				$count_character2 = strlen($hn); //count the xters

				if($count_character2 == '1')
				{
					$hn = '000'.$hn;
				}
				else if($count_character2 == '2')
				{
					$hn = '00'.$hn;
				}
				else if($count_character2 == '3')
				{
					$hn = '0'.$hn;
				}
				else if($count_character2 == '4')
				{
					$hn = $hn;
				}
				else
				{
					//do nothing for now
				}




				$matric_numbe = $programme_code.'/'.$year.'/'.$hn; //pad the matric numbers with the right strings


				return $matric_numbe ;

			//}


		}
		else
		{
			return $matric_number;
		}


		//return $matric_number;

	}


	//function that gets programme code base on course id
	function  get_programme_code($con, $id)
	{
		$result = mysqli_query($con,"SELECT code FROM programmes WHERE id = '$id'");
			$row = mysqli_fetch_assoc($result);
			$code = $row['code'];

		return $code;

	}

	//function select marital status
function select_level($lev)
{

		if ($lev == '100')
		{
			$output = '<option value="0" disabled selected>--select---</option>';
			$output .= '<option value="100" selected> 100 Level</option>';
			$output .= '<option value="200" >200 Level</option>';
			$output .= '<option value="300" >300 Level</option>';
			$output .= '<option value="400" >400 Level</option>';
			$output .= '<option value="500" >500 Level</option>';
			$output .= '<option value="600" >600 Level</option>';
		}
		else if ($lev == '200')
		{
			$output = '<option value="0" disabled selected>--select---</option>';
			$output .= '<option value="100"> 100 Level</option>';
			$output .= '<option value="200" selected>200 Level</option>';
			$output .= '<option value="300" >300 Level</option>';
			$output .= '<option value="400" >400 Level</option>';
			$output .= '<option value="500" >500 Level</option>';
			$output .= '<option value="600" >600 Level</option>';
		}
		else if ($lev == '300')
		{
			$output = '<option value="0" disabled selected>--select---</option>';
			$output .= '<option value="100"> 100 Level</option>';
			$output .= '<option value="200" >200 Level</option>';
			$output .= '<option value="300" selected>300 Level</option>';
			$output .= '<option value="400" >400 Level</option>';
			$output .= '<option value="500" >500 Level</option>';
			$output .= '<option value="600" >600 Level</option>';
		}
		else if ($lev == '400')
		{
			$output = '<option value="0" disabled selected>--select---</option>';
			$output .= '<option value="100"> 100 Level</option>';
			$output .= '<option value="200" >200 Level</option>';
			$output .= '<option value="300" >300 Level</option>';
			$output .= '<option value="400" selected>400 Level</option>';
			$output .= '<option value="500" >500 Level</option>';
			$output .= '<option value="600" >600 Level</option>';
		}
		else if ($lev == '500')
		{
			$output = '<option value="0" disabled selected>--select---</option>';
			$output .= '<option value="100"> 100 Level</option>';
			$output .= '<option value="200" >200 Level</option>';
			$output .= '<option value="300" >300 Level</option>';
			$output .= '<option value="400" >400 Level</option>';
			$output .= '<option value="500" selected>500 Level</option>';
			$output .= '<option value="600" >600 Level</option>';
		}
		else if ($lev == '600')
		{
			$output = '<option value="0" disabled selected>--select---</option>';
			$output .= '<option value="100"> 100 Level</option>';
			$output .= '<option value="200" >200 Level</option>';
			$output .= '<option value="300" >300 Level</option>';
			$output .= '<option value="400" >400 Level</option>';
			$output .= '<option value="500" >500 Level</option>';
			$output .= '<option value="600" selected>600 Level</option>';
		}
		else
		{
			$output = '<option value="0" selected disabled selected>--select---</option>';
			$output .= '<option value="100"> 100 Level</option>';
			$output .= '<option value="200" >200 Level</option>';
			$output .= '<option value="300" >300 Level</option>';
			$output .= '<option value="400" >400 Level</option>';
			$output .= '<option value="500" >500 Level</option>';
			$output .= '<option value="600" >600 Level</option>';
		}

	return $output;

}
//end of select marrital status

//check if a particular matric number is on the system
	function matric_number_exist($con, $mno)
	{
	    $result = mysqli_query($con, "SELECT matric_number FROM students WHERE matric_number = '$mno'");
		$row = mysqli_fetch_assoc($result);
		$mno = $row['matric_number'];

		if($mno == '')
		{

			return false;

		}
		else
		{
			return true;

		}


	}///end of check whether matric number exist


	//Function to fetch student school id
	function get_user_school_id($con, $id)
	{
		$result = mysqli_query($con, "SELECT school_id FROM programmes WHERE id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$school_id = $row['school_id'];

	return $school_id;
	}

	//Function to fetch student school id
	function get_user_faculty_id($con, $id)
	{
		$result = mysqli_query($con, "SELECT faculty_id FROM programmes WHERE id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$faculty_id = $row['faculty_id'];

	return $faculty_id;
	}

	//function taht gets percentage
	function get_percent($value, $total)
	{

		if($value == 0)
		{
			$percent  = ($value / 1) * 100;
		}
		else
		{
			$percent  = ($value / $total) * 100;
		}

		return round($percent, 2);
	}

	//Function to fetch student school id
	function get_user_faculty($con, $id)
	{
		$result = mysqli_query($con, "SELECT title FROM faculties WHERE id = '$id'");
		$row = mysqli_fetch_assoc($result);
		$faculty_id = $row['title'];

	return $faculty_id;
	}

//Functions to fetch student first_name
			function get_student_firstname($con,$id)
			{
				$result = mysqli_query($con, "SELECT first_name FROM students WHERE id = '$id'");
				$row = mysqli_fetch_assoc($result);
				$first_name = $row['first_name'];

				return $first_name;
			}

			//Functions to fetch student middle_name
			function get_student_middlename($con,$id)
			{
				$result = mysqli_query($con, "SELECT middle_name FROM students WHERE id = '$id'");
				$row = mysqli_fetch_assoc($result);
				$middle_name = $row['middle_name'];

			  return $middle_name;
			}

			//Functions to fetch student last_name
			function get_student_lastname($con,$id)
			{
				$result = mysqli_query($con, "SELECT last_name FROM students WHERE id = '$id'");
				$row = mysqli_fetch_assoc($result);
				$other_names = $row['last_name'];

				return $other_names;
			}

			//Functions to fetch student marital status
			function get_student_marital_status($con,$id)
			{
				$result = mysqli_query($con, "SELECT marital_status FROM students WHERE id = '$id'");
				$row = mysqli_fetch_assoc($result);
				$marital_status = $row['marital_status'];

				return $marital_status;
			}

			//Functions to fetch student gender
			function get_student_gender($con,$id)
			{
				$result = mysqli_query($con, "SELECT gender FROM students WHERE id = '$id'");
				$row = mysqli_fetch_assoc($result);
				$gender = $row['gender'];

				return $gender;
			}

			//Functions to fetch student religion
			function get_student_religion($con,$id)
			{
				$result = mysqli_query($con, "SELECT religion FROM students WHERE id = '$id'");
				$row = mysqli_fetch_assoc($result);
				$religion = $row['religion'];

				return $religion;
			}

			//Functions to fetch student place of birth
			function get_student_pob($con,$id)
			{
				$result = mysqli_query($con, "SELECT place_of_birth FROM students WHERE id = '$id'");
				$row = mysqli_fetch_assoc($result);
				$pob = $row['place_of_birth'];

				return $pob;
			}

			//Functions to fetch student place of birth
			function get_student_dob($con,$id)
			{
				$result = mysqli_query($con, "SELECT dob FROM students WHERE id = '$id'");
				$row = mysqli_fetch_assoc($result);
				$dob = $row['dob'];

				return $dob;
			}



			//function fetch user nationality
			function get_student_nationality($con, $id)
			{
				$result = mysqli_query($con, "SELECT nationality FROM students WHERE id = '$id'");
				$row = mysqli_fetch_assoc($result);
				$n = $row['nationality'];

				return $n;
			}

			//function fetch user state id
			function get_student_state_id($con, $id)
			{
				$result = mysqli_query($con, "SELECT state_id FROM students WHERE id = '$id'");
				$row = mysqli_fetch_assoc($result);
				$state_id = $row['state_id'];

				return $state_id;
			}

			//function fetch user state id
			function get_student_school_id($con, $id)
			{
				$result = mysqli_query($con, "SELECT school_id FROM students WHERE id = '$id'");
				$row = mysqli_fetch_assoc($result);
				$school_id = $row['school_id'];

				return $school_id;
			}

			//function fetch user lga id
			function get_student_lga_id($con, $id)
			{
				$result = mysqli_query($con, "SELECT lga_id FROM students WHERE id = '$id'");
				$row = mysqli_fetch_assoc($result);
				$lga_id = $row['lga_id'];

				return $lga_id;
			}

			//function fetch user phone_no
			function get_student_phone_no($con, $id)
			{
				$result = mysqli_query($con, "SELECT phone_no FROM students WHERE id = '$id'");
				$row = mysqli_fetch_assoc($result);
				$phone_no = $row['phone_no'];

				return $phone_no;
			}

			//function fetch user email
			function get_student_email($con, $id)
			{
				$result = mysqli_query($con, "SELECT email FROM students WHERE id = '$id'");
				$row = mysqli_fetch_assoc($result);
				$email = $row['email'];

				return $email;
			}

			//function fetch user address
			function get_student_address($con, $id)
			{
				$result = mysqli_query($con, "SELECT address FROM students WHERE id = '$id'");
				$row = mysqli_fetch_assoc($result);
				$address = $row['address'];

				return $address;
			}

			//function fetch user address
			function get_student_guardian_name($con, $id)
			{
				$result = mysqli_query($con, "SELECT guardian_name FROM students WHERE id = '$id'");
				$row = mysqli_fetch_assoc($result);
				$guardian_name = $row['guardian_name'];

				return $guardian_name;
			}

			//function fetch user address
			function get_student_guardian_tel($con, $id)
			{
				$result = mysqli_query($con, "SELECT guardian_tel FROM students WHERE id = '$id'");
				$row = mysqli_fetch_assoc($result);
				$guardian_tel = $row['guardian_tel'];

				return $guardian_tel;
			}

			//function fetch user address
			function get_student_guardian_email($con, $id)
			{
				$result = mysqli_query($con, "SELECT guardian_email FROM students WHERE id = '$id'");
				$row = mysqli_fetch_assoc($result);
				$guardian_email = $row['guardian_email'];

				return $guardian_email;
			}

			//function fetch user address
			function get_student_guardian_relationship($con, $id)
			{
				$result = mysqli_query($con, "SELECT guardian_relationship FROM students WHERE id = '$id'");
				$row = mysqli_fetch_assoc($result);
				$guardian_relationship = $row['guardian_relationship'];

				return $guardian_relationship;
			}

			//function fetch user address
			function get_student_guardian_address($con, $id)
			{
				$result = mysqli_query($con, "SELECT guardian_address FROM students WHERE id = '$id'");
				$row = mysqli_fetch_assoc($result);
				$guardian_address = $row['guardian_address'];

				return $guardian_address;
			}

			//function fetch user address
			function get_student_sponsorhip_name($con, $id)
			{
				$result = mysqli_query($con, "SELECT sponsorship_name FROM students WHERE id = '$id'");
				$row = mysqli_fetch_assoc($result);
				$sponsorship_name = $row['sponsorship_name'];

				return $sponsorship_name;
			}

			//function fetch user address
			function get_student_sponsorship_type($con, $id)
			{
				$result = mysqli_query($con, "SELECT sponsorship_type FROM students WHERE id = '$id'");
				$row = mysqli_fetch_assoc($result);
				$sponsorship_type = $row['sponsorship_type'];

				return $sponsorship_type;
			}

			//function fetch user address
			function get_student_sponsorship_address($con, $id)
			{
				$result = mysqli_query($con, "SELECT sponsorship_address FROM students WHERE id = '$id'");
				$row = mysqli_fetch_assoc($result);
				$sponsorship_address = $row['sponsorship_address'];

				return $sponsorship_address;
			}


			//function fetch user permanet address
			function get_student_p_address($con, $id)
			{
				$result = mysqli_query($con, "SELECT permanent_address FROM students WHERE id = '$id'");
				$row = mysqli_fetch_assoc($result);
				$permanent_address = $row['permanent_address'];

				return $permanent_address;
			}

		//function fetch user study mode
    function get_student_study_mode($con,$id)
    {
    $result = mysqli_query($con, "SELECT study_mode FROM students WHERE id = '$id'");
    $row = mysqli_fetch_assoc($result);
    $study_mode = $row['study_mode'];


    return $study_mode;
    }

    //function fetch user study mode
    function get_student_mode_of_entry($con,$id)
    {
    $result = mysqli_query($con, "SELECT mode_of_entry FROM students WHERE id = '$id'");
    $row = mysqli_fetch_assoc($result);
    $mode_of_entry = $row['mode_of_entry'];


    return $mode_of_entry;
    }

    //function fetch user study mode
    function get_student_entry_year($con,$id)
    {
    $result = mysqli_query($con, "SELECT entry_year FROM students WHERE id = '$id'");
    $row = mysqli_fetch_assoc($result);
    $entry_year = $row['entry_year'];


    return $entry_year;
    }

//function fetch user study mode
function get_user_programme_id($con,$id)
{
$result = mysqli_query($con, "SELECT programme_id FROM students WHERE id = '$id'");
$row = mysqli_fetch_assoc($result);
$programme_id = $row['programme_id'];


return $programme_id;
}

//function fetch user study mode
function get_user_department_id($con,$id)
{
$result = mysqli_query($con, "SELECT department_id FROM students WHERE id = '$id'");
$row = mysqli_fetch_assoc($result);
$department_id = $row['department_id'];


return $department_id;
}

//function fetch user study mode
function get_user_department($con,$id)
{
$result = mysqli_query($con, "SELECT title FROM departments WHERE id = '$id'");
$row = mysqli_fetch_assoc($result);
$department_id = $row['title'];


return $department_id;
}

//function fetch user study mode
function get_student_h_status($con,$id)
{
$result = mysqli_query($con, "SELECT H_status FROM students WHERE id = '$id'");
$row = mysqli_fetch_assoc($result);
$H_status = $row['H_status'];


return $H_status;
}

//function fetch user study mode
function get_student_disability($con,$id)
{
$result = mysqli_query($con, "SELECT disability FROM students WHERE id = '$id'");
$row = mysqli_fetch_assoc($result);
$disability = $row['disability'];


return $disability;
}

//function fetch user study mode
function get_student_bg($con,$id)
{
$result = mysqli_query($con, "SELECT blood_type FROM students WHERE id = '$id'");
$row = mysqli_fetch_assoc($result);
$blood_type = $row['blood_type'];


return $blood_type;
}

//function fetch user study mode
function get_student_medication($con,$id)
{
$result = mysqli_query($con, "SELECT medi FROM students WHERE id = '$id'");
$row = mysqli_fetch_assoc($result);
$medi = $row['medi'];


return $medi;
}

//function get total paid app fee
			function get_total_paid_app_fee($con, $sess)
			{
				$q = "SELECT COUNT(id) FROM applicants_fee_payments  WHERE session = '$sess'";

				$r = mysqli_query($con, $q);
				$row = mysqli_fetch_array($r,MYSQLI_NUM);

				return $row[0];

			}

			//function get total not paid app fee
	function get_total_not_paid_app_fee($con, $sess)
	{
		$q = "SELECT COUNT(id) FROM applicant WHERE session_id = '$sess' AND id NOT IN (SELECT applicant_id from applicants_fee_payments)";

		$r = mysqli_query($con, $q);
		$row = mysqli_fetch_array($r,MYSQLI_NUM);

		return $row[0];

	}

        	//function get total paid acceptance fee
        function get_total_paid_accept_fee($con, $sess)
        {
        $q = "SELECT COUNT(id) FROM acceptance_fee_payments  WHERE session = '$sess'";

        $r = mysqli_query($con, $q);
        $row = mysqli_fetch_array($r,MYSQLI_NUM);

        return $row[0];

        }

        //function get total not paid acceptance fee
        function get_total_not_paid_accept_fee($con, $sess)
        {
        $q = "SELECT COUNT(id) FROM applicant WHERE session_id = '$sess' AND id NOT IN (SELECT student_id from acceptance_fee_payments)";

        $r = mysqli_query($con, $q);
        $row = mysqli_fetch_array($r,MYSQLI_NUM);

        return $row[0];

        }

        //function get total paid school fee
        function get_total_paid_school_fee($con, $sess)
        {
        $q = "SELECT COUNT(id) FROM school_fee_payments  WHERE session = '$sess'";

        $r = mysqli_query($con, $q);
        $row = mysqli_fetch_array($r,MYSQLI_NUM);

        return $row[0];

        }

        //function get total not paid school fee
        function get_total_not_paid_school_fee($con, $sess)
        {
        $q = "SELECT COUNT(id) FROM students WHERE session = '$sess' AND id NOT IN (SELECT student_id from school_fee_payments)";

        $r = mysqli_query($con, $q);
        $row = mysqli_fetch_array($r,MYSQLI_NUM);

        return $row[0];

        }


//function view transaction log
		function view_remita_transaction_log($con, $trans_type , $trans_for )
		{

			$sess = get_current_session($con, $id=1);

			//query the database
			$query = "SELECT `id`, `invoice_id`, `transaction_type`, `user_id`, `transaction_for`, `payment_method`,
			`payment_status`, `response_code`, `response_description`,`transaction_id`, `transaction_reference`,
			 `title`, `description`, `amount`, DATE_FORMAT(date_added, '%b %e, %Y /  %l:%i:%p') as date_added,
			 DATE_FORMAT(transaction_date, '%b %e, %Y /  %l:%i:%p') as transaction_date

			 FROM `remita_webpay_transaction_log`

			 WHERE transaction_type = '$trans_type' AND	 transaction_for = '$trans_for'
			 ORDER BY id DESC"; //AND session = $sess
		   $result = mysqli_query($con, $query);



			if(mysqli_num_rows($result) > 0)
			{//show table


				$output =
				'<div class="table-responsive">

              <table class="display table table-striped datatable" style="width:100%">
              <thead>

							   <th>APP No.</th>
							  <th>Invoice #</th>
							  <th>Fullname</th>
							  <th>RRR</th>
							  <th>Transaction Ref.</th>
							  <th>Title</th>
							  <th>Amount- (N)</th>
							  <th>Transaction Response</th>
							  <th>Transaction Date / Time</th>
							  <th>Status</th>
							  <th>Action</th>


				  </thead>
				  <tbody>';


				while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
				   // $int_amount = $row['amount'] * 100;


					$output .= "<tr>";
						$output .= "<td class='text-info' style='font-size:14px; font-weight:bold'>".get_applicant_application_number($con, $row['user_id'])."</td>"; //group belong to admin or user
					$output .= "<td class='text-info' style='font-size:14px; font-weight:bold'>".$row['invoice_id']."</td>"; //group belong to admin or user
					$output .= "<td class='text-info' style='font-size:14px; font-weight:bold'>".get_applicant_fullname($con,$row['user_id'])."</td>";

					$output .= "<td class='text-info' style='font-size:14px; font-weight:bold'>".$row['transaction_id']."</td>";
					$output .= "<td class='text-info' style='font-size:14px; font-weight:bold'>".$row['transaction_reference']."</td>";
					$output .= "<td>".$row['title']."</td>";
					$output .= "<td>".number_format($row['amount'],2)."</td>";

					$output .= "<td>".$row['response_description'] ."(".$row['response_code'].")"."</td>";

					$output .= "<td>".$row['date_added']."</td>";


					$output .= "<td>".transaction_status($row['payment_status'])."</td>";

					if($row['payment_status'] != '1')
					{
						//app fees
						if($trans_for == 1 ){
							$output .= '<td><a target="_blank" class="btn btn-sm btn-primary" href="dashboard?hubs=view_rr_log_app_fees&txnref='.$row['transaction_reference'].'" > Re - Query </a></td>';
						//accept. fees
						}elseif($trans_for == 2){
							$output .= '<td><a target="_blank" class="btn btn-sm btn-primary" href="dashboard?hubs=view_rr_log_acc_fees&txnref='.$row['transaction_reference'].'" > Re - Query </a></td>';

						}elseif($trans_for == 3){
							$output .= '<td><a target="_blank" class="btn btn-sm btn-primary" href="dashboard?hubs=view_rr_log_sch_f_fees&txnref='.$row['transaction_reference'].'" > Re - Query </a></td>';

						}elseif($trans_for == 4){
							$output .= '<td><a target="_blank" class="btn btn-sm btn-primary" href="dashboard?hubs=view_rr_log_sch_r_fees&txnref='.$row['transaction_reference'].'" > Re - Query </a></td>';

						}


					}
					else
					{
					   $output .= "<td></td>";

					}

					$output .= "</tr>";

				}
			}
			else
			{//show the msg

				  $output =
						 '<div class="alert alert-danger alert-dismissable">
						  <button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
						  <img src="assets/images/info.png" />&nbsp;&nbsp; No record found in the system.
						 </div>';


			}



			$output .=
			'</tbody>
			</table>
			</div>';





			return $output;






		}//end of view transaction log



		//function view transaction log
		function view_remita_transaction_log2($con, $trans_type , $trans_for )
		{

			$sess = get_current_session($con, $id=1);

			//query the database
			$query = "SELECT `id`, `invoice_id`, `transaction_type`, `user_id`, `transaction_for`, `payment_method`,
			`payment_status`, `response_code`, `response_description`,`transaction_id`, `transaction_reference`,
			 `title`, `description`, `amount`, DATE_FORMAT(date_added, '%b %e, %Y /  %l:%i:%p') as date_added,
			 DATE_FORMAT(transaction_date, '%b %e, %Y /  %l:%i:%p') as transaction_date

			 FROM `remita_webpay_transaction_log`

			 WHERE (transaction_type = '4' OR transaction_type = '5') AND	 (transaction_for = '4' OR transaction_for = '5')
			 ORDER BY id DESC"; //AND session = $sess
		   $result = mysqli_query($con, $query);



			if(mysqli_num_rows($result) > 0)
			{//show table


				$output =
				'<div class="table-responsive"  style="width:100%">

                    <table id="example" class="display" style="width:100%">
                          <thead>

							   <th>Matric No.</th>
							  <th>Invoice #</th>
							  <th>Fullname</th>
							  <th>RRR</th>
							  <th>Transaction Ref.</th>
							  <th>Title</th>
							  <th>Amount- (N)</th>
							  <th>Transaction Response</th>
							  <th>Transaction Date / Time</th>
							  <th>Status</th>
							  <th>Action</th>


				  </thead>

				 <!-- <tfoot>

				  </tfoot>-->

				  <tbody>';


				while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
				   // $int_amount = $row['amount'] * 100;


					$output .= "<tr>";
						$output .= "<td class='text-info' style='font-size:14px; font-weight:bold'>".get_student_mat_no($con, $row['user_id'])."</td>"; //group belong to admin or user
					$output .= "<td class='text-info' style='font-size:14px; font-weight:bold'>".$row['invoice_id']."</td>"; //group belong to admin or user
					$output .= "<td class='text-info' style='font-size:14px; font-weight:bold'>".get_student_fullname($con,$row['user_id'])."</td>";

					$output .= "<td class='text-info' style='font-size:14px; font-weight:bold'>".$row['transaction_id']."</td>";
					$output .= "<td class='text-info' style='font-size:14px; font-weight:bold'>".$row['transaction_reference']."</td>";
					$output .= "<td>".$row['title']."</td>";
					$output .= "<td>".number_format($row['amount'],2)."</td>";

					$output .= "<td>".$row['response_description'] ."(".$row['response_code'].")"."</td>";

					$output .= "<td>".$row['date_added']."</td>";


					$output .= "<td>".transaction_status($row['payment_status'])."</td>";

					if($row['payment_status'] != '1')
					{
						//app fees
						if($trans_for == 4 ){
							$output .= '<td><a target="_blank" class="btn btn-sm btn-primary" href="dashboard?hubs=view_rr_log_sch_fees?txnref='.$row['transaction_reference'].'" > Re - Query </a></td>';
						//accept. fees
						}elseif($trans_for == 5){
							$output .= '<td><a target="_blank" class="btn btn-sm btn-primary" href="dashboard?hubs=view_rr_log_sch_fees?txnref='.$row['transaction_reference'].'" > Re - Query </a></td>';

						}


					}
					else
					{
					   $output .= "<td></td>";

					}

					$output .= "</tr>";

				}
			}
			else
			{//show the msg

				  $output =
						 '<div class="alert alert-danger alert-dismissable">
						  <button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
						  <img src="assets/images/info.png" />&nbsp;&nbsp; No record found in the system.
						 </div>';


			}



			$output .=
			'</tbody>
			</table>
			</div>';





			return $output;






		}//end of view transaction log


			//function transaction status
				  function transaction_status($id)
				  {
					  if($id == '1')
					  {
						  return '<label class="label label-success"> SUCCESSFUL </label>';
					  }
					  else
					  {
						  return  '<label class="label label-danger"> PENDING </label>';
					  }
				  }

    //function view admitted applicants listings per programmes
function get_all_set_app_fee($con,$ses, $st) // pt programm type , p programme
{
	//query the database
	$q = "SELECT *
		  FROM  set_application_fee_payments
			WHERE status = $st
		  ORDER BY title ASC";
	$r = mysqli_query($con, $q);

	if(mysqli_num_rows($r) > 0)
	{//show table
		  $output =
		  '<div class="table-responsive"  style="width:100%">
              <table class="table table-striped datatable" style="width:100%">
                <thead>
                        <th></th>
						<th>School</th>
						<th>Department</th>
						<th>Programme</th>
						<th>Session</th>
						<th>Title</th>
						<th>Description</th>
						<th>Amount</th>
						<th>Partly Amount</th>
						<th>Total Amount</th>
						<th>Status</th>
						<th>Action</th>
			</thead>
			<tbody>';
            $bn = 1;
		while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
		{
			$status = $row['status'];
			if($status=='1')
					{
						$status = '<span class="btn btn-info">Active</span>';
					}else {
						$status = '<span class="btn btn-danger">Not Active</span>';
					}
			$output .= "<tr>";
			$output .= "<td>".$bn."</td>";
			$output .= "<td>".get_user_school($con, $row['programme_type_id'])."</td>";
			$output .= "<td>".get_user_deparment($con, $row['department_id'])."</td>";
			$output .= "<td>".get_user_programme($con, $row['programme_id'])."</td>";
			$output .= "<td>".get_current_session_title($con, $row['session'])."</td>";
			$output .= "<td>".$row['title']."</td>";
			$output .= "<td>".$row['description']."</td>";
			$output .= "<td>".$row['amount']."</td>";
			$output .= "<td>".$row['partly_amount']."</td>";
			$output .= "<td>".$row['total_amount']."</td>";
			$output .= "<td>".$status."</td>";
			$output .= '<td>
									<div class="actions">
									<a href="dashboard?hubs=edit_app_fee_setup&api='.base64_encode($row['id']).'" id="'.$row['id'].'" class="btn btn-sm bg-success-light me-2">
									<i class="fas fa-pen"></i>
									</a>
									<a href="#" onclick="delete_set_appfee('.$row['id'].')" class="btn btn-sm bg-danger-light">
									<i class="fas fa-trash"></i>
									</a>
									</div>
									</td>
										 <input type="hidden" id="department_id" value="'.$row['id'].'"/> </td>';
			$output .= "</tr>";
            $bn ++;
		}
	}
	else
	{//show the msg
			$output =
				   '<div class="alert alert-danger alert-dismissable col-md-12">
					<button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
					<img src="assets/images/info.png" />&nbsp;&nbsp; No record found in the system.
				   </div>';
	}
	$output .=
	'</tbody>
    </table></div>';
	return $output;
}//end of view admitted  applicants listings per programmes


//function select course type
function select_course_type($st)
{

		if ($st == '0')
		{
			$output = '<option value="0" selected disabled selected> -- Please Select --</option>';
			$output .= '<option value="1"> Core</option>';
			$output .= '<option value="2" >Elective</option>';


		}
		else if ($st == '1')
		{
			$output = '<option value="0" disabled selected> -- Please Select --</option>';
			$output .= '<option value="1" selected> Core</option>';
			$output .= '<option value="2" >Elective</option>';

		}
		else if ($st == '2')
		{
			$output = '<option value="0" disabled selected> -- Please Select --</option>';
			$output .= '<option value="1" > Core</option>';
			$output .= '<option value="2" selected>Elective</option>';


		}
		else
		{

			$output = '<option value="0" disabled selected> -- Please Select --</option>';
			$output .= '<option value="1" > Core</option>';
			$output .= '<option value="2">Elective</option>';

		}

	return $output;

}
//end of select marrital status


//function view students listings per programmes
function view_staff_users($con) // pt programm type , p programme //AND applicants.id = applicants_fee_payments.applicant_id
{
	//please remove applicant later

	//query the database
	$q = "SELECT id, staff_number,programme_id, department_id, faculty_id, staff_type_id,
		  state_id, lga_id, first_name,middle_name, last_name,country_id, phone_number, gender,  email,
		  DATE_FORMAT(date_added, '%M %d, %Y %l:%i:%p') as date_added

		  FROM  staffs WHERE status = '1' ORDER BY staff_number ASC";
	$r = mysqli_query($con, $q);

	if(mysqli_num_rows($r) > 0)
	{//show table



		  $output =
		  '  <div class="datatable-wrapper table-responsive">
					<table class="display compact table table-striped table-bordered datatable">
							<thead>
						<th></th>
						<th>Faculty</th>
						<th>Department</th>
						<th>Programme</th>
						<th>Staff No.</th>
						<th>First Name</th>
						<th>Middle Name</th>
						<th>Last Names</th>
						<th>Gender</th>
						<th>Email</th>
						<th>Ph. Contacts</th>
						<th>Country</th>
						<th>State</th>
						<th>L.G.A</th>
						<th>Type</th>
						<th>Photo</th>
						<th>Action</th>
			</thead>
			<tbody>';
			$sn = 1;
		while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
		{
			$output .= "<tr>";
			$output .= "<td>".$sn."</td>";
			$output .= "<td>".get_user_faculty($con, $row['faculty_id'])."</td>";
			$output .= "<td>".get_user_deparment($con, $row['department_id'])."</td>";
			$output .= "<td>".get_user_programme($con, $row['programme_id'])."</td>";
			$output .= "<td>".$row['staff_number']."</td>";
			$output .= "<td class='xeditfname' id='".$row['id']."' key='first_name'> ".$row['first_name']."</td>";
			$output .= "<td class='xeditoname' id='".$row['id']."' key='middle_name'>".$row['middle_name']."</td>";
			$output .= "<td class='xeditoname' id='".$row['id']."' key='last_name'>".$row['last_name']."</td>";
			$output .= "<td>".$row['gender']."</td>";
			$output .= "<td>".$row['email']."</td>";
			$output .= "<td>".$row['phone_number']."</td>";
			$output .= "<td>".get_country_title($con, $row['country_id'])."</td>";
			$output .= "<td>".get_state_title($con, $row['state_id'])."</td>";
			$output .= "<td>".get_lga_title($con, $row['lga_id'])."</td>";

			$output .= "<td>".select_staff_type($row['staff_type_id'])."</td>";

			$output .= "<td>".get_staff_image($con, $row['id'])."</td>";
			$output .= '<td>
									<div class="actions">
									<a href="dashboard?hubs=edit_staff&id='.$row['id'].'" id="'.$row['id'].'" class="btn btn-sm bg-success-light me-2">
									<i class="fas fa-pen"></i>
									</a>
									<a href="#" onclick="delete_school('.$row['id'].')" class="btn btn-sm bg-danger-light">
									<i class="fas fa-trash"></i>
									</a>
									</div>
									</td>
										 <input type="hidden" id="department_id" value="'.$row['id'].'"/> </td>';


			$output .= "</tr>";
			$sn ++;

		}
	}
	else
	{//show the msg

			$output =
				   '<div class="alert alert-danger alert-dismissable col-md-12">
					<button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
					<img src="assets/images/info.png" />&nbsp;&nbsp; No record found in the system.
				   </div>';


	}



	$output .=
	'</tbody>
    </table>';
	return $output;
}//end of view students ants listings per programmes



//function select user status
function select_user_status($st)
{

		if ($st == '0')
		{
        	    $output = '<option value="0" selected>Unpublished</option>';
              $output .= '<option value="1"> Published</option>';
              $output .= '<option value="2">Archive</option>';
              $output .= '<option value="3">Delected</option>';

		}
		else if ($st == '1')
		{
			  $output  = '<option value="0">Unpublished</option>';
              $output .= '<option value="1" selected> Published</option>';
              $output .= '<option value="2">Archive</option>';
              $output .= '<option value="3">Delected</option>';


		}
		else if ($st == '2')
		{
			  $output  = '<option value="0">Unpublished</option>';
              $output .= '<option value="1"> Published</option>';
              $output .= '<option value="2" selected>Archive</option>';
              $output .= '<option value="3">Delected</option>';


		}else if ($st == '3')
		{
			  $output  = '<option value="0">Unpublished</option>';
              $output .= '<option value="1"> Published</option>';
              $output .= '<option value="2">Archive</option>';
              $output .= '<option value="3" selected>Delected</option>';


		}
		else
		{

			$output = '<option value="" selected disabled selected> -- Please Select --</option>';
      $output = '<option value="0" >Unpublished</option>';
      $output .= '<option value="1"> Published</option>';
      $output .= '<option value="2">Archive</option>';
      $output .= '<option value="3">Delected</option>';

		}

	return $output;

}
//end of select user status

//function select user status
function select_staff_type($st)
{

		if ($st == '0')
		{
			$output = '<span class="btn btn-warning">Nil</span>';
		}
		else if ($st == '1')
		{
			$output = '<span class="btn btn-success">Academic Staff</span>';
		}
		else if ($st == '2')
		{
			$output = '<span class="btn btn-primary">Non Academic Staff</span>';
  	}

	return $output;

}
//end of select user status

function select_user_desgnation($con, $id)
{
	$r = mysqli_query($con, "SELECT id, title  FROM desgnations  ORDER BY title ");
	if(mysqli_num_rows($r) > 0 )
	{
		while($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
		{
			if($id == $row['id'])
			{
				$output = "<option value=\"$row[id]\" selected>";
				$output .=  $row['title'];
				$output .="</option>";

			}
			else
			{
				$output = "<option value=\"$row[id]\" >";
				$output .= $row['title'];
				$output .="</option>";

			}


			echo $output;
		}
	}
	else
	{

			$output = "<option>";
			$output .="Not added yet";
			$output .="</option>";

			echo $output;
	}
}
//end of select lga

//function select faculty
function select_faculty($con, $faculty_id)
{
	$r = mysqli_query($con, "SELECT id, title  FROM faculties WHERE status ='1'  ORDER BY title ");
	if(mysqli_num_rows($r) > 0 )
	{
		while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
		{
			if($faculty_id == $row['id'])
			{
				$output = "<option value=\"$row[id]\" selected>";
				$output .=  $row['title'];
				$output .="</option>";

			}
			else
			{
				$output = "<option value=\"$row[id]\" >";
				$output .= $row['title'];
				$output .="</option>";

			}


			echo $output;
		}
	}
	else
	{

			$output = "<option>";
			$output .="Not added yet";
			$output .="</option>";

			echo $output;
	}
}
//end of select faculties

//function view admitted applicants listings per programmes
function get_all_set_accept_fee($con,$ses, $st) // pt programm type , p programme
{


	//query the database
	$q = "SELECT *
		  FROM  set_acceptance_fee_payments
			WHERE status = $st
		  ORDER BY title ASC";
	$r = mysqli_query($con, $q);

	if(mysqli_num_rows($r) > 0)
	{//show table
		  $output =
		  '<div class="table-responsive"  style="width:100%">

              <table class="display table table-striped datatable" style="width:100%">
                <thead>
                        <th></th>
						<th>School</th>
						<th>Department</th>
						<th>Programme</th>
						<th>Session</th>
						<th>Title</th>
						<th>Description</th>
						<th>Amount</th>
						<th>Partly Amount</th>
						<th>Total Amount</th>
						<th>Status</th>
						<th>Action</th>
			</thead>

			<tbody>';
        $app=1;
		while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
		{
			$status = $row['status'];
			if($status=='1')
					{
						$status = '<span class="btn btn-info">Active</span>';
					}else {
						$status = '<span class="btn btn-danger">Not Active</span>';
					}
			$output .= "<tr>";
			$output .= "<td>".$app."</td>";
			$output .= "<td>".get_user_school($con, $row['programme_type_id'])."</td>";
			$output .= "<td>".get_user_deparment($con, $row['department_id'])."</td>";
			$output .= "<td>".get_user_programme($con, $row['programme_id'])."</td>";
			$output .= "<td>".get_current_session_title($con, $row['session'])."</td>";
			$output .= "<td>".$row['title']."</td>";
			$output .= "<td>".$row['description']."</td>";
			$output .= "<td>".$row['amount']."</td>";
			$output .= "<td>".$row['partly_amount']."</td>";
			$output .= "<td>".$row['total_amount']."</td>";
			$output .= "<td>".$status."</td>";
			$output .= '<td>
									<div class="actions">
									<a href="dashboard?hubs=edit_accept_fee_setup&api='.base64_encode($row['id']).'" id="'.$row['id'].'" class="btn btn-sm bg-success-light me-2">
									<i class="fas fa-pen"></i>
									</a>
									<a href="#" onclick="delete_school('.$row['id'].')" class="btn btn-sm bg-danger-light">
									<i class="fas fa-trash"></i>
									</a>
									</div>
									</td>
										 <input type="hidden" id="department_id" value="'.$row['id'].'"/> </td>';
			$output .= "</tr>";
        $app++;

		}
	}
	else
	{//show the msg

			$output =
				   '<div class="alert alert-danger alert-dismissable">
					<button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
					<img src="assets/images/info.png" />&nbsp;&nbsp; No record found in the system.
				   </div>';


	}



	$output .=
	'</tbody>
    </table>
		</div>';





	return $output;




}//end of view admitted  applicants listings per programmes


//function select staff type
function get_user_staff_type($gd)
{

		if ($gd == '1')
		{
			$output .= '<option value="0"> -- Please Select --</option>';
			$output .= '<option value="1" selected> Academic Staff</option>';
			$output .= '<option value="2">Non Academic Staff</option>';


		}
		else if ($gd == '2')
		{
			$output .= '<option value="0"> -- Please Select --</option>';
			$output .= '<option value="1"> Academic Staff</option>';
			$output .= '<option value="2" selected>Non Academic Staff</option>';


		}
		else
		{
			$output .= '<option value="0" selected> -- Please Select --</option>';
			$output .= '<option value="1"> Academic Staff</option>';
			$output .= '<option value="2">Non Academic Staff</option>';
		}

	return $output;

}
//end of select staff type


//function select course type
function select_semester($st)
{

		if ($st == '0')
		{
			$output = '<option value="0" selected disabled selected> -- Please Select --</option>';
			$output .= '<option value="1"> First Semester</option>';
			$output .= '<option value="2" >Second Semester</option>';


		}
		else if ($st == '1')
		{
			$output = '<option value="0" disabled selected> -- Please Select --</option>';
			$output .= '<option value="1" selected> First Semester</option>';
			$output .= '<option value="2" >Second Semester</option>';

		}
		else if ($st == '2')
		{
			$output = '<option value="0" disabled selected> -- Please Select --</option>';
			$output .= '<option value="1" > First Semester</option>';
			$output .= '<option value="2" selected>Second Semester</option>';


		}
		else
		{

			$output = '<option value="0" disabled selected> -- Please Select --</option>';
			$output .= '<option value="1" > First Semester</option>';
			$output .= '<option value="2">Second Semester</option>';

		}

	return $output;

}
//end of select marrital status

//function view admitted applicants listings per programmes
function get_all_set_school_fee($con,$ses, $st) // pt programm type , p programme
{
	//query the database
	$q = "SELECT *
		  FROM  set_school_fee_payments_for_students
			WHERE status = '$st'
		  ORDER BY session ASC";
	$r = mysqli_query($con, $q);

	if(mysqli_num_rows($r) > 0)
	{//show table
		  $output =
		  '<div class="table-responsive"  style="width:100%">

              <table class="display table table-striped datatable" style="width:100%">
                <thead>
						<th>School</th>
						<th>Department</th>
						<th>Programme</th>
						<th>Session</th>
						<th>Title</th>
						<th>Description</th>
						<th>Amount</th>
						<th>Partly Amount</th>
						<th>Total Amount</th>
						<th>Status</th>
						<th>Action</th>
			</thead>

			<tbody>';

		while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
		{
			$status = $row['status'];
			if($status=='1')
					{
						$status = '<span class="btn btn-info">Active</span>';
					}else {
						$status = '<span class="btn btn-danger">Not Active</span>';
					}
			$output .= "<tr>";
			$output .= "<td>".get_user_school($con, $row['programme_type_id'])."</td>";
			$output .= "<td>".get_user_deparment($con, $row['department_id'])."</td>";
			$output .= "<td>".get_user_programme($con, $row['programme_id'])."</td>";
			$output .= "<td>".get_current_session_title($con, $row['session'])."</td>";
			$output .= "<td>".$row['title']."</td>";
			$output .= "<td>".$row['description']."</td>";
			$output .= "<td>".$row['amount']."</td>";
			$output .= "<td>".$row['partly_amount']."</td>";
			$output .= "<td>".$row['total_amount']."</td>";
			$output .= "<td>".$status."</td>";
			$output .= '<td>
									<div class="actions">
									<a href="dashboard?hubs=edit_sch_fee_setup&api='.base64_encode($row['id']).'" id="'.$row['id'].'" class="btn btn-sm bg-success-light me-2">
									<i class="fas fa-pen"></i>
									</a>
									<a href="#" onclick="delete_school('.$row['id'].')" class="btn btn-sm bg-danger-light">
									<i class="fas fa-trash"></i>
									</a>
									</div>
									</td>
										 <input type="hidden" id="department_id" value="'.$row['id'].'"/> </td>';
			$output .= "</tr>";


		}
	}
	else
	{//show the msg

			$output =
				   '<div class="alert alert-danger alert-dismissable">
					<button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
					<img src="assets/images/info.png" />&nbsp;&nbsp; No record found in the system.
				   </div>';


	}



	$output .=
	'</tbody>
    </table>
		</div>';





	return $output;




}//end of view admitted  applicants listings per programmes
?>

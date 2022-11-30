<div class="card">

<?php

$student_id = $user_id;
$dept_id = get_user_department_id($con, $user_id);
$programme_id = get_user_programme_id($con, $user_id); //get programme id if for a user
$level = get_user_level($con, $user_id); //get user level

$session = get_current_session_id($con); //current session is always





//This table create a temporary table and insert details into the table and show what students selected
//so lest get it started
$now = date('YmdHis');

//$tb_name  = str_replace(get_user_fullname($user_id),' ', '_');
$tb_name = 'temp'.$now;

$q0 = "CREATE TEMPORARY TABLE ".$tb_name." (
		  student_id MEDIUMINT UNSIGNED NOT NULL,
		  programme_id MEDIUMINT UNSIGNED NOT NULL,
		  course_id  MEDIUMINT UNSIGNED NOT NULL,
		  unit VARCHAR(20) NOT NULL,
		  seen_as_elective  MEDIUMINT UNSIGNED NOT NULL,
		  session_id MEDIUMINT UNSIGNED NOT NULL,
		  level VARCHAR(20) NOT NULL,
		  semester MEDIUMINT UNSIGNED NOT NULL,
		  date_added TIMESTAMP NOT NULL)" ;

$r0 = mysqli_query($con,$q0);

	//print_r($_POST['subject']); //just check if the array is working

 	$id_array = $_POST['course']; // return array
	$id_count = count($_POST['course']); // count array


	//collect it in session so that we can enter it later if page has no problem
	 $_SESSION['course'] = $id_array;


	 //now i will have to be passing the course ids to session incase of prechecking may be not succcessful with loading the courses
			//check for  carts
	   $carts = array();
	   foreach($_POST['course'] as $v)
	   {

			  $carts[] = $v;
	   }

	   $new_courses = implode(' ', $carts);

	   $_SESSION['cs'] = $new_courses;

	  //end of passing course array to session


	for($i=0; $i < $id_count; $i++) {
			 $id = $id_array[$i];

			 $course_unit = get_course_unit($id); //collect unit to add
			 $course_semester = get_course_semester($id);//collect course semester for showing base on semester


			  //get course level from designed programme courses table by passing users programme_id, and courses he choose to register
			 //$course_level = get_course_level_from_pc($programme_id, $id);
			 //get seen_as_elective from designed programme courses table by passing users programme_id, and courses he choose to register
			 $seen_as_elective = get_seen_as_elective_from_pc($programme_id, $id);








	//INSERT INTO TEMP TB
	$q = "INSERT INTO ".$tb_name." ( student_id, programme_id, course_id, unit, seen_as_elective,session_id,  level, semester, date_added)

	      VALUES ('$student_id','$programme_id','$id','$course_unit','$seen_as_elective','$session', '$level','$course_semester',NOW())";

	$r = mysqli_query($dbc,$q);
	if(!$r) { die("SERVER ERROR: Please retry again"); }



	}






//then view this table now


//view the temporary table and show the preview for first semester
$q3 = "SELECT student_id, programme_id, course_id, unit, seen_as_elective, session_id,  level, semester, date_added
	   FROM  ".$tb_name." WHERE semester = '1' ORDER BY seen_as_elective ASC,date_added";

	$r3 = mysqli_query($dbc,$q3);
	$sn = 0 ;
	if(mysqli_num_rows($r3) > 0)
	{//show table


		$output .= '<h5 id="list" class="btn btn-success">First Semester</h5> <br>';

		$output .=
		  '<table class="table user display table-bordered table-hover table-striped" cellspacing="0" width="100%" style="font-size:12px;">
			<thead>
						<th>S/N</th>
						<th>Code</th>
						<th>Title</th>
						<th>Type</th>
						<th>Credit Unit</th>

			</thead>
			<tbody>';

		while($row = mysqli_fetch_array($r3, MYSQLI_ASSOC))
		{
			//add total unit carried
			$total_units = 0;
			$total_unit = $total_units + get_course_unit($row['course_id']);
			$t += $total_unit;



			$output .= "<tr>";
			$output .= "<td>".$sn = $sn+1 ."</td>";
    		$output .= "<td> ".get_course_code($row['course_id'])."</td>";
			$output .= "<td> ".get_course_name($row['course_id'])."</td>";
			$output .= "<td> ".seen_as_elective($row['seen_as_elective'])."</td>";
			$output .= "<td>".get_course_unit($row['course_id'])."</td>";

			$output .= "</tr>";


		}
			$output .= "<tr>";
			$output .= "<td colspan='3'></td>";
			//$output .= "<td>Total - </td>";
			$output .= "<td>Sub Total </td>";
			$output .= "<td>".$t."</td>";
			$output .= "</tr>";
	}
	else
	{//show the msg

			$output ='<div class="alert alert-danger alert-dismissable">
					<button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
					<img src="images/info.png" />&nbsp;&nbsp; No record found.
				   </div>';


	}



	$output .=
	'</tbody>
    </table>';





	echo $output;










//view the temporary table and show the preview for second semester
$q4 = "SELECT student_id, programme_id, course_id, unit, seen_as_elective, session_id,  level, semester, date_added
	   FROM  ".$tb_name." WHERE semester = '2' ORDER BY seen_as_elective ASC,date_added";

	$r4 = mysqli_query($dbc,$q4);
	$sn4 = 0 ;
	if(mysqli_num_rows($r4) > 0)
	{//show table
		//

//
		$output4 = '<h5 id="list" class="btn btn-success">Second Semester</h5> <br>';

		$output4 .=
		  '<table class="table user display table-bordered table-hover table-striped" cellspacing="0" width="100%" style="font-size:12px;">
			<thead>
						<th>S/N</th>
						<th>Code</th>
						<th>Title</th>
						<th>Type</th>
						<th>Credit Unit</th>
		    </thead>
			<tbody>';

		while($row4 = mysqli_fetch_array($r4, MYSQLI_ASSOC))
		{
			//add total unit carried
			$total_units4 = 0;
			$total_unit4 = $total_units4 + get_course_unit($row4['course_id']);
			$t4 += $total_unit4;


			$output4 .= "<tr>";
			$output4 .= "<td>".$sn4 = $sn4 +1 ."</td>";
    			$output4 .= "<td> ".get_course_code($row4['course_id'])."</td>";
			$output4 .= "<td> ".get_course_name($row4['course_id'])."</td>";
			$output4 .= "<td> ".seen_as_elective($row4['seen_as_elective'])."</td>";
			$output4 .= "<td>".get_course_unit($row4['course_id'])."</td>";
			$output4 .= "</tr>";

		}
			$output4 .= "<tr>";
			$output4 .= "<td colspan='3'></td>";
			//$output .= "<td>Total - </td>";
			$output4 .= "<td>Sub Total </td>";
			$output4 .= "<td>".$t4."</td>";
			$output4 .= "</tr>";
	}
	else
	{//show the msg

			$output4 ='<div class="alert alert-danger alert-dismissable">
					<button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
					<img src="images/info.png" />&nbsp;&nbsp; No record found.
				   </div>';


	}



	$output4 .=
	'</tbody>
    </table>';





	echo $output4;


	//add the total of the course
	$total = $t + $t4;



	//now show total tcu taken
	echo '<span class="btn btn-default pull-right" >TOTAL CREDIT LOAD - <span  class="text-success" style="font-size:30px;font-wight:bold">'.$total.'</span></span>';


	echo '<div style="height:25px;display:block;clear:both;"></div>';


	//echo '<a class="btn btn-successs" >Click here to edit</a>&nbsp;&nbsp;&nbsp;';

	echo '<input type="hidden" value="confirm_rc" name="act" />';
    echo '<input type="submit" name="submit" class="btn btn-success" value="Save" id="submit" data-toggle="tooltip" data-placement="right" title="Click here to confirm and print"/>';
//	echo '&nbsp;&nbsp;&nbsp;<a class="btn btn-successs"  onclick="printMe()" target="_blank">Click here to confirm and print</a>';

?>

</div><!-- /well -->

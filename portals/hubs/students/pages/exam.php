<?php

@session_start();



if(isset($_SESSION['user_id'])){
	$student_id=$_SESSION['user_id'];


$output= "";



$current_session = get_current_session_id($con, $id = '1'); //current session is always
$current_semester = get_current_semester($con, $id = '1'); //current session is always


$session_t = get_current_session_title($con, $current_session); //semster title

$semester_t = get_semester_title_first($con, $current_semester); //semster title



$image = get_user_image($con, $student_id);



}
?>


<div class="content">
        <div class="row">

          <div class="col-md-12">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Examination Card</h5>
              </div>
              <div class="card-body">
								<div class="panel panel-success">
	 <div class="panel-heading">
		 &nbsp;&nbsp;<?=$session_t.' <label style="font-size:15px">&nbsp;&nbsp;&nbsp; '.$semester_t;?>'s EXAM CARD
	 </div>
	 <div class="panel-body">
	     <div style="overflow-x:auto;">
		 <?php
		 	if(!has_paid_school_fee($con, $user_id, $current_session )) //check if the user has paid this session fe
			{
				echo

										'<div class="alert alert-danger in" >
										<button class="close" data-dismiss="alert" type="button">
											X

										</button>
											<i class="glyphicon glyphicon-info-sign"></i>&nbsp;&nbsp;Please make registration payments before you can be able to Print Exam Card.
										</div>';
			}else if(!has_done_registration($con, $user_id, $current_session, $current_semester)) //check if user done registration before
			{
				echo

										'<div class="alert alert-info in" >
															<button class="close" data-dismiss="alert" type="button">
																 X

															</button>
																 <i class="glyphicon glyphicon-info-sign"></i>&nbsp;&nbsp;Please Register your courses for the semester before you can print Exam Card. If you need help,  click on support to call  / text our support-line stating your matric no..
											 </div>';
			}else {
				//view the temporary table and show the preview for first semester
 			 $q3 = "SELECT id, student_id, programme_id, course_id, course_unit,session_id,  level, semester
 					FROM  students_courses
 					WHERE semester = '$current_semester'
 					AND student_id ='$student_id'
 					AND session_id = '$current_session'
 					ORDER BY date_added";

 				 $r3 = mysqli_query($con, $q3);
 				 $sn = 0 ;
 				 if(mysqli_num_rows($r3) > 0)
 				 {//show table


 					// $output .= '<h5 id="list" class="btn btn-success">First Semester</h5> <br>';

 					 @$output .=
 					 '<table class="table user display table-bordered table-hover table-striped" cellspacing="0" width="100%" style="font-size:12px;">
 						 <thead>
 									 <th>S/N</th>
 									 <th>Code</th>
 									 <th>Title</th>
 									 <th>Unit</th>


 							</thead>
 						 <tbody>';

 					 while($row = mysqli_fetch_array($r3, MYSQLI_ASSOC))
 					 {



 						 $output .= "<tr>";
 						 @$output .= "<td>".$sn = $sn+1 ."</td>";
 						 $output .= "<td> ".get_course_code($con, $row['course_id'])."</td>";
 						 $output .= "<td> ".get_course_name($con, $row['course_id'])."</td>";
 						 $output .= "<td> ".get_course_unit($con, $row['course_id'])."</td>";

 						 $output .= "</tr>";

 						 ////add total unit carried
 																					 $total_units = 0;
 																					 $total_unit = $total_units + get_course_unit($con, $row['course_id']);
 																					 @$t +=  $total_unit;




 					 }
 					 $output .= "<tr>";
 						 $output .= "<td colspan='2'></td>";
 						 //$output .= "<td>Total - </td>";
 						 $output .= "<td>Sub Total </td>";
 						 $output .= "<td style='font-size:16px; font-weight:bold;'>".$t."</td>";
 						 $output .= "</tr>";



 						 if($image != '')
 						 {


 							 $output .= '<td colspan="2"><a target="_blank" href="create_exc_slip.php?qlk='.md5(8).'&me='.sha1($student_id).md5('examcard').'&u='.$student_id.'&enc='.sha1(8).'" class="btn btn-info btn-lg" data-toggle="tooltip" data-placement="top" title="Click here to Print / Download Exam Card"><span> Print / Download Receipt</span></a>
 							 </td>';

 						 }
 						 else
 						 {
 							 $output .= '<td colspan="2"><a  href="#" class="btn btn-info btn-lg" data-toggle="tooltip" data-placement="top" title="Please Upload Your Passport Before You Can Print"><span> P l e a s e  U p l o a d  Y o u r  P a s s p o r t<span></a>
 							 </td>';



 						 }


 						 $output .= "</tr>";
 				 }
 				 else
 				 {//show the msg

 						 $output .='<div class="alert alert-danger alert-dismissable">
 								 <button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
 								 <img src="images/info.png" />&nbsp;&nbsp; No record found.
 								</div>';


 				 }



 				 $output .=
 				 '</tbody>
 				 </table>';





 				 echo $output;
			}








								 ?>
	 </div>
	  </div>
 </div>


              </div>
            </div>
          </div>
        </div>
      </div>

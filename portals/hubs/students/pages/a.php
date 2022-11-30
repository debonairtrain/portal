<?php

@session_start();



if(isset($_SESSION['student_id'])){
	$student_id=$_SESSION['student_id'];


$output= "";



$current_session = get_current_session($con, $id = '1'); //current session is always
$current_semester = get_current_semester($con, $id = '1'); //current session is always


$session_t = get_current_session_title($con, $current_session='1'); //semster title

$semester_t = get_semester_title_first($con, $current_semester); //semster title



$image = get_user_image($con, $student_id);



}
?>


<form id="" name="" class="form-horizontal" method="post" action="dashboard.php" enctype="multipart/form-data">



<div style="height:20px; displat:block;"></div>

  <ul class="breadcrumb">

      <li class="active" ><a href="#">Exam Card</a> <span class="divider"></span> </li>

  </ul>

<div class="well">



 	<ul class="tabs">
        <!-- play with the level tabs small -->


				<div class="panel-group" id="accordion">
				  <div class="panel panel-default">
				    <div class="panel-heading">
				      <h4 class="panel-title">
				        <a data-toggle="collapse" class="btn btn-login btn-green" data-parent="#accordion" href="#collapseOne">
				          <span><?=$session_t.' <label style="font-size:15px">&nbsp;&nbsp;&nbsp; '.$semester_t;?></label></span>
				        </a>
				      </h4>
				    </div>
				    <div id="collapseOne" class="panel-collapse collapse in">
				      <div class="panel-body">
								<?php if(has_paid_school_fee($con, $student_id, $current_session, $current_semester )) //check if the user has paid this session fee
								{ ?>

									 <?php

									if(!has_done_registration($con, $student_id, $current_session, $current_semester)) //check if user done registration before
									{

								 ?>

												 <div class="alert alert-info in" >
															<button class="close" data-dismiss="alert" type="button">
																 X

															</button>
																 <i class="glyphicon glyphicon-info-sign"></i>&nbsp;&nbsp;Please Register your courses for the semester before you can print Exam Card. If you need help,  click on support to call  / text our support-line stating your matric no..
											 </div>
						 <!--    		<a href="dashboard.php?act=course_registration&qlk=<?php echo md5(3); ?>"  class="pull-right"><img src="images/add_icon.png" data-toggle="tooltip" data-placement="top"  title="Click here to register new courses" />   </a> <br/><br/>
						 -->
									<?php
									}

								 ?>

								 <div style="height:20px; displat:block;"></div>




							     <!--First accordion panel container tat accomodates all courses -->

							    <div class="panel panel-info">

							                <div id="collapseMe" class="panel-collapse collapse in ">
							                    <div class="panel-body">
							                        <ul class="list-group">



							                            <?php


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

															  $output .=
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


																	  $output .= '<td colspan="2"><a target="_blank" href="create_exc_slip.php?qlk='.md5(8).'&me='.sha1($student_id).md5('examcard').'&u='.$student_id.'&enc='.sha1(8).'" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Click here to Print / Download Exam Card"><i class="glyphicon glyphicon-print"> </i><span> Print / Download Receipt</span></a>
							 </td>';

																  }
																  else
																  {
																	  $output .= '<td colspan="2"><a  href="#" class="btn btn-login btn-green" data-toggle="tooltip" data-placement="top" title="Please Upload Your Passport Before You Can Print"><span> P l e a s e  U p l o a d  Y o u r  P a s s p o r t<span></a>
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







											  ?>
											</ul><!-- end of list group --->
										</div><!-- end o panel body -->
										</div>
										<!--First accordion panel container Ends here -->


										</div>
										<!-- payment history -->





										<?php

										}
										else
										{

										echo

										'<div class="alert alert-danger in" >
										<button class="close" data-dismiss="alert" type="button">
											X

										</button>
											<i class="glyphicon glyphicon-info-sign"></i>&nbsp;&nbsp;Please make registration payments before you can be able to Print Exam Card.
										</div>';



										}
										?>

										</div><!-- /well -->


				      </div>
				    </div>
				  </div>

				  <div class="panel panel-default">
				    <div class="panel-heading">
				      <h4 class="panel-title">
				        <a data-toggle="collapse" class="btn btn-login btn-green" data-parent="#accordion" href="#collapseTwo">
				          <span><?=get_current_session_title($con, $id = 1).' <label style="font-size:15px">&nbsp;&nbsp;&nbsp; '.get_semester_title_first($con, $id = 2);?></label></span>
				        </a>
				      </h4>
				    </div>
				    <div id="collapseTwo" class="panel-collapse collapse">
				      <div class="panel-body">
								<?php if(has_paid_school_fee($con, $student_id, $current_session, $current_semester )) //check if the user has paid this session fee
								{ ?>

									 <?php

									if(!has_done_registration($con, $student_id, $current_session, $current_semester)) //check if user done registration before
									{

								 ?>

												 <div class="alert alert-info in" >
															<button class="close" data-dismiss="alert" type="button">
																 X

															</button>
																 <i class="glyphicon glyphicon-info-sign"></i>&nbsp;&nbsp;Please Register your courses for the semester before you can print Exam Card. If you need help,  click on support to call  / text our support-line stating your matric no..
											 </div>
						 <!--    		<a href="dashboard.php?act=course_registration&qlk=<?php echo md5(3); ?>"  class="pull-right"><img src="images/add_icon.png" data-toggle="tooltip" data-placement="top"  title="Click here to register new courses" />   </a> <br/><br/>
						 -->
									<?php
									}

								 ?>

								 <div style="height:20px; displat:block;"></div>




							     <!--First accordion panel container tat accomodates all courses -->

							    <div class="panel panel-info">

							                <div id="collapseMe" class="panel-collapse collapse in ">
							                    <div class="panel-body">
							                        <ul class="list-group">



							                            <?php
																					$department_id = $department_applied_for;
													                $session = get_semester_title_first($con, $id = 1); //semester title
																					$semester2 = get_semester_title_first($con, $id = 2); //semester title

													  //view the temporary table and show the preview for first semester
													  $q3 = "SELECT id, student_id, programme_id, course_id, course_unit,session_id,  level, semester
															 FROM  students_courses
															 WHERE semester = '$semester2'
															 AND student_id ='$student_id'
															 AND session_id = '$current_session'
															 ORDER BY date_added";

														  $r3 = mysqli_query($con, $q3);
														  $sn = 0 ;
														  if(mysqli_num_rows($r3) > 0)
														  {//show table


															 // $output .= '<h5 id="list" class="btn btn-success">First Semester</h5> <br>';

															  $output .=
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


																	  $output .= '<td colspan="2"><a target="_blank" href="create_exc_slip.php?qlk='.md5(8).'&me='.sha1($student_id).md5('examcard').'&u='.$student_id.'&enc='.sha1(8).'" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Click here to Print / Download Exam Card"><i class="glyphicon glyphicon-print"> </i><span> Print / Download Receipt</span></a>
							 </td>';

																  }
																  else
																  {
																	  $output .= '<td colspan="2"><a  href="#" class="btn btn-login btn-green" data-toggle="tooltip" data-placement="top" title="Please Upload Your Passport Before You Can Print"><span> P l e a s e  U p l o a d  Y o u r  P a s s p o r t<span></a>
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







											  ?>
											</ul><!-- end of list group --->
										</div><!-- end o panel body -->
										</div>
										<!--First accordion panel container Ends here -->


										</div>
										<!-- payment history -->





										<?php

										}
										else
										{

										echo

										'<div class="alert alert-danger in" >
										<button class="close" data-dismiss="alert" type="button">
											X

										</button>
											<i class="glyphicon glyphicon-info-sign"></i>&nbsp;&nbsp;Please make registration payments before you can be able to Print Exam Card.
										</div>';



										}
										?>

				      </div>
				    </div>
				  </div>

				</div>

     </ul>
      <div class="tabcontents">



      </div>




  <div style="height:30px"></div>


<input type="hidden" value="<?php echo md5(3); ?>" name="qlk" />

<input type="hidden" value="edit_preview_rc" name="act" />
<input type="submit" name="submit" class="btn btn-success" value="Preview" id="submit" data-toggle="tooltip" data-placement="top" title="Click here to see preview"/>

</div><!-- /well -->

</form>

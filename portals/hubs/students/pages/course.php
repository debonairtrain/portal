<?php
//i did a programme to switch level that will load automatically
//collect the variables
$department_id = get_user_department_id($con, $user_id); //get dept id for user
$programme_id =  get_user_programme_id($con, $user_id); //get programme id if for a user
$level = get_user_level($con, $user_id); //get user level
$programme_type = get_user_programme_type_id($con, $user_id); //programme type
//get current session
$current_session = get_current_session_id($con, $id = 1);
$session_t = get_current_session_title($con, $current_session);
//get current semester
$current_semester = get_current_semester($con, $id = 1);
$semester_t = get_semester_title_first($con, $current_semester); //semster title
?>

<script src="assets/js/jquery-2.1.4.min.js"></script>
 <script>
   function  checking(id,cu,ss){
              var tcf=$("#first_credit_total").val();
              var tcs=$("#second_credit_total").val();
            if($('#c'+id).prop('checked', true)){
              var bb="1";
                   if(ss==1){

                       var ttcf = parseInt(tcf) + cu;
                       if(ttcf > 24){
                           $('#c'+id).prop('checked', false);
                           alert("first semester credit unit exceed 24 units");
                       }else{
                             $.post("hubs/students/php/add_student_course_reg.php",
                             {
                               token: id,
                               ss : ss,
                               bb : bb
                             },
                             function(data, status){
                                 alert(data);
                             });
                             $("#first_credit_total").val(ttcf);
                       }
                    }else{
                       var ttcs = parseInt(tcs) + cu;
                       if(ttcs > 24){
                           $('#c'+id).prop('checked', false);
                           alert("first semester credit unit exceed 24 units");
                       }else{
                            $.post("hubs/students/php/add_student_course_reg.php",
                             {
                               token: id,
                               ss : ss,
                               bb : bb
                             },
                             function(data, status){
                                 alert(data);

                             });

                          $("#second_credit_total").val(ttcs);
                       }
                     }
             }else{
                     var bb="2";
                       if(ss==1){
                           var ttc = parseInt(tcf) - cu;
                            $.post("hubs/students/php/add_student_course_reg.php",
                             {
                               token: id,
                               ss : ss,
                               bb : bb
                             },
                             function(data, status){
                                 alert(data);
                             });
                           $("#first_credit_total").val(ttc);
                       }else{
                               var ttcs = parseInt(tcs) - cu;
                                $.post("hubs/students/php/add_student_course_reg.php",
                             {
                               token: id,
                               ss : ss,
                               bb : bb
                             },
                             function(data, status){
                                 alert(data);
                             });
                               $("#second_credit_total").val(ttcs);
                       }

             }

             var tcf1=$("#first_credit_total").val();
             var tcs1=$("#second_credit_total").val();
             var ttcf = parseInt(tcf1) + parseInt(tcs1);
             $("#session_credit_total").val(ttcf);
   }
</script>
<h1 class="h2"><a href="dashboard.php?act=course_registration0&qlk=<?php echo md5(3); ?>"><?php echo $session_t; ?> Course Registration</a></h1>

<div class="card">
		<ul class="nav nav-tabs nav-tabs-card">
			<?php if($level == '100') {?>
				<li class="nav-item">
						<a class="nav-link active"
							 href="#first"
							 data-toggle="tab">100L COURSES</a>
				</li>
	     <?php }if($level == '200'){ ?>
				 <li class="nav-item">
						 <a class="nav-link active"
								href="#first"
								data-toggle="tab">100L COURSES</a>
				 </li>
				 <li class="nav-item">
						 <a class="nav-link"
								href="#second"
								data-toggle="tab">200L COURSES</a>
				 </li>
	     <?php }if($level == '300' ){?>
				 <li class="nav-item">
 						<a class="nav-link active"
 							 href="#first"
 							 data-toggle="tab">100L COURSES</a>
 				</li>
 				<li class="nav-item">
 						<a class="nav-link"
 							 href="#second"
 							 data-toggle="tab">200L COURSES</a>
 				</li>
 				<li class="nav-item">
 						<a class="nav-link"
 							 href="#third"
 							 data-toggle="tab">300L COURSES</a>
 				</li>
	     <?php }if($level == '400' ){?>
				 <li class="nav-item">
 						<a class="nav-link active"
 							 href="#first"
 							 data-toggle="tab">100L COURSES</a>
 				</li>
 				<li class="nav-item">
 						<a class="nav-link"
 							 href="#second"
 							 data-toggle="tab">200L COURSES</a>
 				</li>
 				<li class="nav-item">
 						<a class="nav-link"
 							 href="#third"
 							 data-toggle="tab">300L COURSES</a>
 				</li>
 				<li class="nav-item">
 						<a class="nav-link"
 							 href="#fourth"
 							 data-toggle="tab">400L COURSES</a>
 				</li>
	     <?php }if($level == '500' ){?>
				 <li class="nav-item">
 						<a class="nav-link active"
 							 href="#first"
 							 data-toggle="tab">100L COURSES</a>
 				</li>
 				<li class="nav-item">
 						<a class="nav-link"
 							 href="#second"
 							 data-toggle="tab">200L COURSES</a>
 				</li>
 				<li class="nav-item">
 						<a class="nav-link"
 							 href="#third"
 							 data-toggle="tab">300L COURSES</a>
 				</li>
 				<li class="nav-item">
 						<a class="nav-link"
 							 href="#fourth"
 							 data-toggle="tab">400L COURSES</a>
 				</li>
 				<li class="nav-item">
 						<a class="nav-link"
 							 href="#fifth"
 							 data-toggle="tab">500L COURSES</a>
 				</li>
	     <?php } if($level == '500' ){?>
				<li class="nav-item">
						<a class="nav-link active"
							 href="#first"
							 data-toggle="tab">100L COURSES</a>
				</li>
				<li class="nav-item">
						<a class="nav-link"
							 href="#second"
							 data-toggle="tab">200L COURSES</a>
				</li>
				<li class="nav-item">
						<a class="nav-link"
							 href="#third"
							 data-toggle="tab">300L COURSES</a>
				</li>
				<li class="nav-item">
						<a class="nav-link"
							 href="#fourth"
							 data-toggle="tab">400L COURSES</a>
				</li>
				<li class="nav-item">
						<a class="nav-link"
							 href="#fifth"
							 data-toggle="tab">500L COURSES</a>
				</li>
				<li class="nav-item">
						<a class="nav-link"
							 href="#sixth"
							 data-toggle="tab">600L COURSES</a>
				</li>
			<?php } ?>
		</ul>

		<div class="card-body tab-content">
				<div class="tab-pane active"
						 id="first">

						 <form id="save_courses" method="POST">
						 <?php
						 if ($current_semester=='1') {
						 	echo '<div class="col-md-4 col-sm-12">
		        <div class="form-group ">
											<label for="pwd">Total Credit:</label>
											<input type="text" id="first_credit_total" class="form-control"  value="'.total_first_semester_credit_unit($con,$user_id,$current_session).'" readonly/>

               </div>
		    </div>';
			}else {
				echo '<div class="col-md-4 col-sm-12">
			<div class="form-group ">
								<label for="pwd">Total Credit:</label>
								<input type="text" id="second_credit_total" class="form-control"  value="'.total_second_semester_credit_unit($con,$user_id,$current_session).'" readonly/>

				 </div>
	</div>';
			}
						 $output = '';
						 if(has_paid_school_fees($con, $user_id, $current_session, $current_semester )) //check if the user has paid this session fee
						 {
						   $output ='';//declare output
						   $output4 ='';//declare output
						   $carts='';
						   //echo $programme_id;



						   //view the temporary table and show the preview for first semester
						   $q3 = "SELECT * FROM programmes_courses WHERE semester='$current_semester'
						         AND programme_id='$programme_id' AND department_id='$department_id'
						         AND level ='100' AND status='1' ";

						     $r3 = mysqli_query($con,$q3);
						     $sn = 0 ;
						     if(mysqli_num_rows($r3) > 0)
						     {//show table


						       //$output .= '<h5 id="list" class="btn btn-success">First Semester</h5> <br>';

						       $output =
						         '<table class="table user display table-bordered table-hover table-striped" cellspacing="0" width="100%" style="font-size:12px;">
						         <thead>
						               <th>S/N</th>
						               <th>Code</th>
						               <th>Title</th>
						               <th>Type</th>
						               <th>Credit Unit</th>
						               <th> <!--<input type="checkbox" id="selecctall" data-toggle = "tooltip" title = "Check All"   value="">--></th>


						         </thead>
						         <tbody>';

						       while($row = mysqli_fetch_array($r3, MYSQLI_ASSOC))
						       {

						         //add total unit carried
                     $prog_cos_id= $row['id'];
										 $course_id= $row['course_id'];
                     $seen_as_elective = $row['seen_as_elective'];
														   $semester = $row['semester'];
														   $level = $row['level'];

														   if($seen_as_elective =='0'){
														       $sel='Core';
														   }else{
														       $sel='Elective';
														   }
						         $total_units = 0;
						         $total_unit = $total_units + get_course_unit($con, $row['course_id']);
						         @$t +=  $total_unit;

										 $check2=checking_register_courses($con,$user_id,$current_session,$course_id);
                          if($check2 == 1){
                              $cc1="checked";
                          }else{
                              $cc1="";
                          }


										 $c1=get_course_unit($con,$row['course_id']);
						         $output .= "<tr>";
						         @$output .= "<td>".$sn = $sn+1 ."</td>";
						         $output .= "<td>".get_course_code($con,$course_id)."</td>";
						         $output .= "<td> <a href=''>".get_course_name($con,$course_id)."</a></td>";
						         $output .= "<td>".$sel."</td>";
						         $output .= "<td>".get_course_unit($con,$course_id)."</td>";
						         $output .="<td><input type='checkbox' value='".$course_id."' id='c=".$course_id."' onchange='checking(".$course_id.','.$c1.','.$current_semester.")' $cc1 class='checkbox1'  /></td>" ;








						       }
						       $output .= "<tr>";
						         $output .= "<td colspan='3'></td>";
						         //$output .= "<td>Total - </td>";
						         $output .= "<td>Sub Total </td>";
						         $output .= "<td style='font-size:16px; font-weight:bold;'>".$t."</td>";
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



						 }else
						 {

						 echo

						 '<div class="alert alert-danger in" >
						  <button class="close" data-dismiss="alert" type="button">
						     X

						  </button>
						     <i class="glyphicon glyphicon-info-sign"></i>&nbsp;&nbsp;Please make registration payments before you can be able to do course registration.
						 </div>';



						 }






						                                 echo $output;
						                         ?>
						                       </form>
			</div>
				<div class="tab-pane"
						 id="second">
						 <form id="save_courses" method="POST">
						 <?php
						 if ($current_semester=='1') {
						 	echo '<div class="col-md-4 col-sm-12">
		        <div class="form-group ">
											<label for="pwd">Total Credit:</label>
											<input type="text" id="first_credit_total" class="form-control"  value="'.total_first_semester_credit_unit($con,$user_id,$current_session).'" readonly/>

               </div>
		    </div>';
			}else {
				echo '<div class="col-md-4 col-sm-12">
			<div class="form-group ">
								<label for="pwd">Total Credit:</label>
								<input type="text" id="second_credit_total" class="form-control"  value="'.total_second_semester_credit_unit($con,$user_id,$current_session).'" readonly/>

				 </div>
	</div>';
			}
						 $output = '';
						 if(has_paid_school_fees($con, $user_id, $current_session, $current_semester )) //check if the user has paid this session fee
						 {
						   $output ='';//declare output
						   $output4 ='';//declare output
						   $carts='';
						   //echo $programme_id;



               //view the temporary table and show the preview for first semester
						   $q3 = "SELECT * FROM programmes_courses WHERE semester='$current_semester'
						         AND programme_id='$programme_id' AND department_id='$department_id'
						         AND level ='200' AND status='1' ";

						     $r3 = mysqli_query($con,$q3);
						     $sn = 0 ;
						     if(mysqli_num_rows($r3) > 0)
						     {//show table


						       //$output .= '<h5 id="list" class="btn btn-success">First Semester</h5> <br>';

						       $output =
						         '<table class="table user display table-bordered table-hover table-striped" cellspacing="0" width="100%" style="font-size:12px;">
						         <thead>
						               <th>S/N</th>
						               <th>Code</th>
						               <th>Title</th>
						               <th>Type</th>
						               <th>Credit Unit</th>
						               <th> <!--<input type="checkbox" id="selecctall" data-toggle = "tooltip" title = "Check All"   value="">--></th>


						         </thead>
						         <tbody>';

						       while($row = mysqli_fetch_array($r3, MYSQLI_ASSOC))
						       {

						         //add total unit carried
                     $prog_cos_id= $row['id'];
										 $course_id= $row['course_id'];
                     $seen_as_elective = $row['seen_as_elective'];
														   $semester = $row['semester'];
														   $level = $row['level'];

														   if($seen_as_elective =='0'){
														       $sel='Core';
														   }else{
														       $sel='Elective';
														   }
						         $total_units = 0;
						         $total_unit = $total_units + get_course_unit($con, $row['course_id']);
						         @$t +=  $total_unit;

										 $check2=checking_register_courses($con,$user_id,$current_session,$course_id);
                          if($check2 == 1){
                              $cc1="checked";
                          }else{
                              $cc1="";
                          }


										 $c1=get_course_unit($con,$row['course_id']);
						         $output .= "<tr>";
						         @$output .= "<td>".$sn = $sn+1 ."</td>";
						         $output .= "<td>".get_course_code($con,$course_id)."</td>";
						         $output .= "<td> <a href=''>".get_course_name($con,$course_id)."</a></td>";
						         $output .= "<td>".$sel."</td>";
						         $output .= "<td>".get_course_unit($con,$course_id)."</td>";
						         $output .="<td><input type='checkbox' value='".$course_id."' id='c=".$course_id."' onchange='checking(".$course_id.','.$c1.','.$current_semester.")' $cc1 class='checkbox1'  /></td>" ;








						       }
						       $output .= "<tr>";
						         $output .= "<td colspan='3'></td>";
						         //$output .= "<td>Total - </td>";
						         $output .= "<td>Sub Total </td>";
						         $output .= "<td style='font-size:16px; font-weight:bold;'>".$t."</td>";
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



						 }else
						 {

						 echo

						 '<div class="alert alert-danger in" >
						  <button class="close" data-dismiss="alert" type="button">
						     X

						  </button>
						     <i class="glyphicon glyphicon-info-sign"></i>&nbsp;&nbsp;Please make registration payments before you can be able to do course registration.
						 </div>';



						 }






						                                 echo $output;
						                         ?>
						                       </form>
					 </div>
				<div class="tab-pane"
						 id="third">
						 <form id="save_courses" method="POST">
						 <?php
						 if ($current_semester=='1') {
						 	echo '<div class="col-md-4 col-sm-12">
		        <div class="form-group ">
											<label for="pwd">Total Credit:</label>
											<input type="text" id="first_credit_total" class="form-control"  value="'.total_first_semester_credit_unit($con,$user_id,$current_session).'" readonly/>

               </div>
		    </div>';
			}else {
				echo '<div class="col-md-4 col-sm-12">
			<div class="form-group ">
								<label for="pwd">Total Credit:</label>
								<input type="text" id="second_credit_total" class="form-control"  value="'.total_second_semester_credit_unit($con,$user_id,$current_session).'" readonly/>

				 </div>
	</div>';
			}
						 $output = '';
						 if(has_paid_school_fees($con, $user_id, $current_session, $current_semester )) //check if the user has paid this session fee
						 {
						   $output ='';//declare output
						   $output4 ='';//declare output
						   $carts='';
						   //echo $programme_id;



               //view the temporary table and show the preview for first semester
						   $q3 = "SELECT * FROM programmes_courses WHERE semester='$current_semester'
						         AND programme_id='$programme_id' AND department_id='$department_id'
						         AND level ='300' AND status='1' ";

						     $r3 = mysqli_query($con,$q3);
						     $sn = 0 ;
						     if(mysqli_num_rows($r3) > 0)
						     {//show table


						       //$output .= '<h5 id="list" class="btn btn-success">First Semester</h5> <br>';

						       $output =
						         '<table class="table user display table-bordered table-hover table-striped" cellspacing="0" width="100%" style="font-size:12px;">
						         <thead>
						               <th>S/N</th>
						               <th>Code</th>
						               <th>Title</th>
						               <th>Type</th>
						               <th>Credit Unit</th>
						               <th> <!--<input type="checkbox" id="selecctall" data-toggle = "tooltip" title = "Check All"   value="">--></th>


						         </thead>
						         <tbody>';

						       while($row = mysqli_fetch_array($r3, MYSQLI_ASSOC))
						       {

						         //add total unit carried
                     $prog_cos_id= $row['id'];
										 $course_id= $row['course_id'];
                     $seen_as_elective = $row['seen_as_elective'];
														   $semester = $row['semester'];
														   $level = $row['level'];

														   if($seen_as_elective =='0'){
														       $sel='Core';
														   }else{
														       $sel='Elective';
														   }
						         $total_units = 0;
						         $total_unit = $total_units + get_course_unit($con, $row['course_id']);
						         @$t +=  $total_unit;

										 $check2=checking_register_courses($con,$user_id,$current_session,$course_id);
                          if($check2 == 1){
                              $cc1="checked";
                          }else{
                              $cc1="";
                          }


										 $c1=get_course_unit($con,$row['course_id']);
						         $output .= "<tr>";
						         @$output .= "<td>".$sn = $sn+1 ."</td>";
						         $output .= "<td>".get_course_code($con,$course_id)."</td>";
						         $output .= "<td> <a href=''>".get_course_name($con,$course_id)."</a></td>";
						         $output .= "<td>".$sel."</td>";
						         $output .= "<td>".get_course_unit($con,$course_id)."</td>";
						         $output .="<td><input type='checkbox' value='".$course_id."' id='c=".$course_id."' onchange='checking(".$course_id.','.$c1.','.$current_semester.")' $cc1 class='checkbox1'  /></td>" ;








						       }
						       $output .= "<tr>";
						         $output .= "<td colspan='3'></td>";
						         //$output .= "<td>Total - </td>";
						         $output .= "<td>Sub Total </td>";
						         $output .= "<td style='font-size:16px; font-weight:bold;'>".$t."</td>";
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



						 }else
						 {

						 echo

						 '<div class="alert alert-danger in" >
						  <button class="close" data-dismiss="alert" type="button">
						     X

						  </button>
						     <i class="glyphicon glyphicon-info-sign"></i>&nbsp;&nbsp;Please make registration payments before you can be able to do course registration.
						 </div>';



						 }
						                                 echo $output;
						                         ?>
						                       </form>
					 </div>
				<div class="tab-pane"
		 					id="fourth">
							<form id="save_courses" method="POST">
 						 <?php
 						 if ($current_semester=='1') {
 						 	echo '<div class="col-md-4 col-sm-12">
 		        <div class="form-group ">
 											<label for="pwd">Total Credit:</label>
 											<input type="text" id="first_credit_total" class="form-control"  value="'.total_first_semester_credit_unit($con,$user_id,$current_session).'" readonly/>

                </div>
 		    </div>';
 			}else {
 				echo '<div class="col-md-4 col-sm-12">
 			<div class="form-group ">
 								<label for="pwd">Total Credit:</label>
 								<input type="text" id="second_credit_total" class="form-control"  value="'.total_second_semester_credit_unit($con,$user_id,$current_session).'" readonly/>

 				 </div>
 	</div>';
 			}
 						 $output = '';
 						 if(has_paid_school_fees($con, $user_id, $current_session, $current_semester )) //check if the user has paid this session fee
 						 {
 						   $output ='';//declare output
 						   $output4 ='';//declare output
 						   $carts='';
 						   //echo $programme_id;



               //view the temporary table and show the preview for first semester
						   $q3 = "SELECT * FROM programmes_courses WHERE semester='$current_semester'
						         AND programme_id='$programme_id' AND department_id='$department_id'
						         AND level ='400' AND status='1' ";

						     $r3 = mysqli_query($con,$q3);
						     $sn = 0 ;
						     if(mysqli_num_rows($r3) > 0)
						     {//show table


						       //$output .= '<h5 id="list" class="btn btn-success">First Semester</h5> <br>';

						       $output =
						         '<table class="table user display table-bordered table-hover table-striped" cellspacing="0" width="100%" style="font-size:12px;">
						         <thead>
						               <th>S/N</th>
						               <th>Code</th>
						               <th>Title</th>
						               <th>Type</th>
						               <th>Credit Unit</th>
						               <th> <!--<input type="checkbox" id="selecctall" data-toggle = "tooltip" title = "Check All"   value="">--></th>


						         </thead>
						         <tbody>';

						       while($row = mysqli_fetch_array($r3, MYSQLI_ASSOC))
						       {

						         //add total unit carried
                     $prog_cos_id= $row['id'];
										 $course_id= $row['course_id'];
                     $seen_as_elective = $row['seen_as_elective'];
														   $semester = $row['semester'];
														   $level = $row['level'];

														   if($seen_as_elective =='0'){
														       $sel='Core';
														   }else{
														       $sel='Elective';
														   }
						         $total_units = 0;
						         $total_unit = $total_units + get_course_unit($con, $row['course_id']);
						         @$t +=  $total_unit;

										 $check2=checking_register_courses($con,$user_id,$current_session,$course_id);
                          if($check2 == 1){
                              $cc1="checked";
                          }else{
                              $cc1="";
                          }


										 $c1=get_course_unit($con,$row['course_id']);
						         $output .= "<tr>";
						         @$output .= "<td>".$sn = $sn+1 ."</td>";
						         $output .= "<td>".get_course_code($con,$course_id)."</td>";
						         $output .= "<td> <a href=''>".get_course_name($con,$course_id)."</a></td>";
						         $output .= "<td>".$sel."</td>";
						         $output .= "<td>".get_course_unit($con,$course_id)."</td>";
						         $output .="<td><input type='checkbox' value='".$course_id."' id='c=".$course_id."' onchange='checking(".$course_id.','.$c1.','.$current_semester.")' $cc1 class='checkbox1'  /></td>" ;








						       }
						       $output .= "<tr>";
						         $output .= "<td colspan='3'></td>";
						         //$output .= "<td>Total - </td>";
						         $output .= "<td>Sub Total </td>";
						         $output .= "<td style='font-size:16px; font-weight:bold;'>".$t."</td>";
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



						 }else
						 {
						 echo

						 '<div class="alert alert-danger in" >
						  <button class="close" data-dismiss="alert" type="button">
						     X

						  </button>
						     <i class="glyphicon glyphicon-info-sign"></i>&nbsp;&nbsp;Please make registration payments before you can be able to do course registration.
						 </div>';
						 }
						                                 echo $output;
						                         ?>
 						                       </form>
						</div>
				<div class="tab-pane"
				 			id="fifth">
							<form id="save_courses" method="POST">
 						 <?php
 						 if ($current_semester=='1') {
 						 	echo '<div class="col-md-4 col-sm-12">
 		        <div class="form-group ">
 											<label for="pwd">Total Credit:</label>
 											<input type="text" id="first_credit_total" class="form-control"  value="'.total_first_semester_credit_unit($con,$user_id,$current_session).'" readonly/>

                </div>
 		    </div>';
 			}else {
 				echo '<div class="col-md-4 col-sm-12">
 			<div class="form-group ">
 								<label for="pwd">Total Credit:</label>
 								<input type="text" id="second_credit_total" class="form-control"  value="'.total_second_semester_credit_unit($con,$user_id,$current_session).'" readonly/>

 				 </div>
 	</div>';
 			}
 						 $output = '';
 						 if(has_paid_school_fees($con, $user_id, $current_session, $current_semester )) //check if the user has paid this session fee
 						 {
 						   $output ='';//declare output
 						   $output4 ='';//declare output
 						   $carts='';
 						   //echo $programme_id;



               //view the temporary table and show the preview for first semester
						   $q3 = "SELECT * FROM programmes_courses WHERE semester='$current_semester'
						         AND programme_id='$programme_id' AND department_id='$department_id'
						         AND level ='500' AND status='1' ";

						     $r3 = mysqli_query($con,$q3);
						     $sn = 0 ;
						     if(mysqli_num_rows($r3) > 0)
						     {//show table


						       //$output .= '<h5 id="list" class="btn btn-success">First Semester</h5> <br>';

						       $output =
						         '<table class="table user display table-bordered table-hover table-striped" cellspacing="0" width="100%" style="font-size:12px;">
						         <thead>
						               <th>S/N</th>
						               <th>Code</th>
						               <th>Title</th>
						               <th>Type</th>
						               <th>Credit Unit</th>
						               <th> <!--<input type="checkbox" id="selecctall" data-toggle = "tooltip" title = "Check All"   value="">--></th>


						         </thead>
						         <tbody>';

						       while($row = mysqli_fetch_array($r3, MYSQLI_ASSOC))
						       {

						         //add total unit carried
                     $prog_cos_id= $row['id'];
										 $course_id= $row['course_id'];
                     $seen_as_elective = $row['seen_as_elective'];
														   $semester = $row['semester'];
														   $level = $row['level'];

														   if($seen_as_elective =='0'){
														       $sel='Core';
														   }else{
														       $sel='Elective';
														   }
						         $total_units = 0;
						         $total_unit = $total_units + get_course_unit($con, $row['course_id']);
						         @$t +=  $total_unit;

										 $check2=checking_register_courses($con,$user_id,$current_session,$course_id);
                          if($check2 == 1){
                              $cc1="checked";
                          }else{
                              $cc1="";
                          }


										 $c1=get_course_unit($con,$row['course_id']);
						         $output .= "<tr>";
						         @$output .= "<td>".$sn = $sn+1 ."</td>";
						         $output .= "<td>".get_course_code($con,$course_id)."</td>";
						         $output .= "<td> <a href=''>".get_course_name($con,$course_id)."</a></td>";
						         $output .= "<td>".$sel."</td>";
						         $output .= "<td>".get_course_unit($con,$course_id)."</td>";
						         $output .="<td><input type='checkbox' value='".$course_id."' id='c=".$course_id."' onchange='checking(".$course_id.','.$c1.','.$current_semester.")' $cc1 class='checkbox1'  /></td>" ;
						       }
						       $output .= "<tr>";
						         $output .= "<td colspan='3'></td>";
						         //$output .= "<td>Total - </td>";
						         $output .= "<td>Sub Total </td>";
						         $output .= "<td style='font-size:16px; font-weight:bold;'>".$t."</td>";
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
						 }else
						 {
						 echo
						 '<div class="alert alert-danger in" >
						  <button class="close" data-dismiss="alert" type="button">
						     X
						  </button>
						     <i class="glyphicon glyphicon-info-sign"></i>&nbsp;&nbsp;Please make registration payments before you can be able to do course registration.
						 </div>';
						 }
						                                 echo $output;
						                         ?>
 						                       </form>
						</div>
				<div class="tab-pane"
						 	id="sixth">
							<form id="save_courses" method="POST">
 						 <?php
 						 if ($current_semester=='1') {
 						 	echo '<div class="col-md-4 col-sm-12">
 		        <div class="form-group ">
 											<label for="pwd">Total Credit:</label>
 											<input type="text" id="first_credit_total" class="form-control"  value="'.total_first_semester_credit_unit($con,$user_id,$current_session).'" readonly/>

                </div>
 		    </div>';
 			}else {
 				echo '<div class="col-md-4 col-sm-12">
 			<div class="form-group ">
 								<label for="pwd">Total Credit:</label>
 								<input type="text" id="second_credit_total" class="form-control"  value="'.total_second_semester_credit_unit($con,$user_id,$current_session).'" readonly/>

 				 </div>
 	</div>';
 			}
 						 $output = '';
 						 if(has_paid_school_fees($con, $user_id, $current_session, $current_semester )) //check if the user has paid this session fee
 						 {
 						   $output ='';//declare output
 						   $output4 ='';//declare output
 						   $carts='';
 						   //echo $programme_id;



               //view the temporary table and show the preview for first semester
						   $q3 = "SELECT * FROM programmes_courses WHERE semester='$current_semester'
						         AND programme_id='$programme_id' AND department_id='$department_id'
						         AND level ='600' AND status='1' ";

						     $r3 = mysqli_query($con,$q3);
						     $sn = 0 ;
						     if(mysqli_num_rows($r3) > 0)
						     {//show table


						       //$output .= '<h5 id="list" class="btn btn-success">First Semester</h5> <br>';

						       $output =
						         '<table class="table user display table-bordered table-hover table-striped" cellspacing="0" width="100%" style="font-size:12px;">
						         <thead>
						               <th>S/N</th>
						               <th>Code</th>
						               <th>Title</th>
						               <th>Type</th>
						               <th>Credit Unit</th>
						               <th> <!--<input type="checkbox" id="selecctall" data-toggle = "tooltip" title = "Check All"   value="">--></th>


						         </thead>
						         <tbody>';

						       while($row = mysqli_fetch_array($r3, MYSQLI_ASSOC))
						       {
						         //add total unit carried
                     $prog_cos_id= $row['id'];
										 $course_id= $row['course_id'];
                     $seen_as_elective = $row['seen_as_elective'];
														   $semester = $row['semester'];
														   $level = $row['level'];

														   if($seen_as_elective =='0'){
														       $sel='Core';
														   }else{
														       $sel='Elective';
														   }
						         $total_units = 0;
						         $total_unit = $total_units + get_course_unit($con, $row['course_id']);
						         @$t +=  $total_unit;

										 $check2=checking_register_courses($con,$user_id,$current_session,$course_id);
                          if($check2 == 1){
                              $cc1="checked";
                          }else{
                              $cc1="";
                          }
										 $c1=get_course_unit($con,$row['course_id']);
						         $output .= "<tr>";
						         @$output .= "<td>".$sn = $sn+1 ."</td>";
						         $output .= "<td>".get_course_code($con,$course_id)."</td>";
						         $output .= "<td> <a href=''>".get_course_name($con,$course_id)."</a></td>";
						         $output .= "<td>".$sel."</td>";
						         $output .= "<td>".get_course_unit($con,$course_id)."</td>";
						         $output .="<td><input type='checkbox' value='".$course_id."' id='c=".$course_id."' onchange='checking(".$course_id.','.$c1.','.$current_semester.")' $cc1 class='checkbox1'  /></td>" ;

						       }
						       $output .= "<tr>";
						         $output .= "<td colspan='3'></td>";
						         //$output .= "<td>Total - </td>";
						         $output .= "<td>Sub Total </td>";
						         $output .= "<td style='font-size:16px; font-weight:bold;'>".$t."</td>";
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
						 }else
						 {
						 echo
						 '<div class="alert alert-danger in" >
						  <button class="close" data-dismiss="alert" type="button">
						     X
						  </button>
						     <i class="glyphicon glyphicon-info-sign"></i>&nbsp;&nbsp;Please make registration payments before you can be able to do course registration.
						 </div>';
						 }
						                                 echo $output;
						                         ?>
 						                       </form>
						</div>
		</div>
</div>
</form>

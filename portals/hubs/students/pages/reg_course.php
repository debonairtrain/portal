 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<form id="" name="" class="form-horizontal" method="post" action="dashboard.php?qlk=<?php echo $encripted_qlk; ?>" enctype="multipart/form-data">

<?php
//i did a programme to switch level that will load automatically
//collect the variables
$dept = get_user_department_id($con, $user_id); //get dept id for user
$programme =  get_user_programme_id($con, $user_id); //get programme id if for a user
$level = get_user_level($con, $user_id); //get user level
$programme_type = get_user_programme_type_id($con, $user_id); //programme type
//get current session
$current_session = get_current_session_id($con);
$session_t = get_current_session_title($con, $current_session);
//get current semester
$current_semester = get_current_semester($con, $id = 1);
$semester_t = get_semester_title_first($con, $current_semester); //semster title
?>

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
      <?php } if($level == '600' ){?>
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
                    echo courses_to_register($con, $user_id, $current_semester, $dept, $programme, $level='100', $programme_type);
                ?>
             </form>
			</div>
				<div class="tab-pane"
						 id="second">
						 <form id="save_courses" method="POST">
               <?php
                    echo courses_to_register($con, $user_id, $current_semester, $dept, $programme, $level='200', $programme_type);
                ?>
						 </form>
					 </div>
				<div class="tab-pane"
						 id="third">
						 <form id="save_courses" method="POST">
               <?php
                    echo courses_to_register($con, $user_id, $current_semester, $dept, $programme, $level='300', $programme_type);
                ?>
						 </form>
					 </div>
				<div class="tab-pane"
		 					id="fourth">
							<form id="save_courses" method="POST">
                <?php
                     echo courses_to_register($con, $user_id, $current_semester, $dept, $programme, $level='400', $programme_type);
                 ?>
 						 </form>
						</div>
				<div class="tab-pane"
				 			id="fifth">
							<form id="save_courses" method="POST">
                <?php
                     echo courses_to_register($con, $user_id, $current_semester, $dept, $programme, $level='500', $programme_type);
                 ?>
 						 </form>
						</div>
				<div class="tab-pane"
						 	id="sixth">
							<form id="save_courses" method="POST">
                <?php
                     echo courses_to_register($con, $user_id, $current_semester, $dept, $programme, $level='600', $programme_type);
                 ?>
 						  </form>
						</div>
		</div>
    <center><div id="saving_contact">
    <a href="dashboard?hub=preview_courses" type="submit" class="btn btn-info btn-lg"><span>Click here to see preview</span></a>

    </div></center>
    </div>
</form>

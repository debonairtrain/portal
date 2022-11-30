<form id="" name="" class="form-horizontal" method="post" action="dashboard.php?qlk=<?php echo $encripted_qlk; ?>" enctype="multipart/form-data">

<?php

					@session_start();



					if(isset($_SESSION['student_id'])){
						$student_id=$_SESSION['student_id'];


					$output= "";


					$current_session = get_current_session_running($con, $id = '1'); //current session is always
					$current_semester = get_current_semester($con, $id = '1'); //current session is always


					$session_t = get_current_session_title($con, $current_session='1'); //semster title

					$semester_t = get_semester_title_first($con, $current_semester); //semster title



					$image = get_user_image($con, $student_id);



					}



?>

<div style="height:20px; displat:block;"></div>

  <ul class="breadcrumb">

      <li class="active" ><a href="dashboard.php?act=course_registration0&qlk=<?php echo md5(3); ?>">Course Registration</a> <span class="divider"></span> </li>
      <li >Add new courses <span class="divider"></span> </li>
  </ul>

<div class="well">



 	<ul class="tabs">


    <!-- play with the level tabs small -->

    <?php if($level == '100') {?>
        <li><a href="#view1">100L COURSES</a></li>


     <?php }if($level == '200'){ ?>
        <li><a href="#view1">100L COURSES</a></li>
        <li><a href="#view2">200L COURSES</a></li>

     <?php }if($level == '300' ){?>
      <li><a href="#view1">100L COURSES</a></li>
      <li><a href="#view2">200L COURSES</a></li>
      <li><a href="#view3">300L COURSES</a></li>

     <?php }if($level == '400' ){?>
      <li><a href="#view1">100L COURSES</a></li>
      <li><a href="#view2">200L COURSES</a></li>
      <li><a href="#view3">300L COURSES</a></li>
      <li><a href="#view4">400L COURSES</a></li>

     <?php }if($level == '500' ){?>
       <li><a href="#view1">100L COURSES</a></li>
      <li><a href="#view2">200L COURSES</a></li>
      <li><a href="#view3">300L COURSES</a></li>
      <li><a href="#view4">400L COURSES</a></li>
      <li><a href="#view5">500L COURSES</a></li>


     <?php }?>



      </ul>
      <div class="tabcontents">



        	<!-- play with the tab contents small -->


            <?php if($level == '100') { //if 100 ?>

            <div  id="view1">
              <h3 id="list" class="btn btn-success">100 Level - <?php echo $semester_t;  ?> Semester</h3> <br>
              <?php
                    echo courses_to_register($con, $current_semester, $department_id, $programme_id, $level='100', $school_id, $student_id);
                    //echo $dept.' '. $programme.' '.$programme_type;
                ?>


              <!--<h3 id="list" class="btn btn-success">100 Level - Second Semester</h3> <br>-->
              <?php //echo courses_to_register($semester = '2', $dept, $programme, $level='100', $programme_type); ?>

            </div> <!-- view1 ends -->
             <?php }if($level == '200'){ //if 200  ?>

              <div  id="view1">
                  <h3 id="list" class="btn btn-success">100 Level - <?php echo $semester_t;  ?> Semester</h3> <br>
                  <?php echo courses_to_register($con, $current_semester, $department_id, $programme_id, $level='100', $school_id, $student_id); ?>


                <!--<h3 id="list" class="btn btn-success">100 Level - Second Semester</h3> <br>-->
                <?php //echo courses_to_register($semester = '2', $dept, $programme, $level='100', $programme_type); ?>

               </div> <!-- view1 ends -->


              <div  id="view2">
                   <h3 id="list" class="btn btn-warning">200 Level - <?php echo $semester_t;  ?> Semester</h3> <br>
                  <?php echo courses_to_register($con, $current_semester, $department_id, $programme_id, $level='200', $school_id, $student_id); ?>



                  <!--<h3 id="list" class="btn btn-warning">200 Level - Second Semester</h3> <br>-->
                  <?php //echo courses_to_register($semester = '2', $dept, $programme, $level='200', $programme_type); ?>

              </div> <!-- /view2 -->


            <?php } if($level == '300'){ //if 300  ?>

               <div  id="view1">
                <h3 id="list" class="btn btn-success">100 Level - <?php echo $semester_t;  ?> Semester</h3> <br>
                <?php echo courses_to_register($con, $current_semester, $department_id, $programme_id, $level='100', $school_id, $student_id); ?>


             <!-- <h3 id="list" class="btn btn-success">100 Level - Second Semester</h3> <br>-->
              <?php //echo courses_to_register($semester = '2', $dept, $programme, $level='100', $programme_type); ?>

             </div> <!-- view1 ends -->


            <div  id="view2">
                 <h3 id="list" class="btn btn-warning">200 Level - <?php echo $semester_t;  ?> Semester</h3> <br>
                <?php echo courses_to_register($con, $current_semester, $department_id, $programme_id, $level='200', $school_id, $student_id); ?>



                <!--<h3 id="list" class="btn btn-warning">200 Level - Second Semester</h3> <br>-->
                <?php //echo courses_to_register($semester = '2', $dept, $programme, $level='200', $programme_type); ?>

            </div> <!-- /view2 -->


             <div  id="view3">

                 <h3 id="list" class="btn btn-info">300 Level - <?php echo $semester_t;  ?> Semester</h3> <br>
                <?php echo courses_to_register($con, $current_semester, $department_id, $programme_id, $level='300', $school_id, $student_id); ?>



                <!--<h3 id="list" class="btn btn-info">300 Level - Second Semester</h3> <br>-->
                <?php //echo courses_to_register($semester = '2', $dept, $programme, $level='300', $programme_type); ?>

             </div> <!-- /view3 -->

           <?php } if($level == '400'){ //if 300  ?>

               <div  id="view1">
                <h3 id="list" class="btn btn-success">100 Level - <?php echo $semester_t;  ?> Semester</h3> <br>
                <?php echo courses_to_register($con, $current_semester, $department_id, $programme_id, $level='100', $school_id, $student_id); ?>


             <!-- <h3 id="list" class="btn btn-success">100 Level - Second Semester</h3> <br>-->
              <?php //echo courses_to_register($semester = '2', $dept, $programme, $level='100', $programme_type); ?>

             </div> <!-- view1 ends -->


            <div  id="view2">
                 <h3 id="list" class="btn btn-warning">200 Level - <?php echo $semester_t;  ?> Semester</h3> <br>
                <?php echo courses_to_register($con, $current_semester, $department_id, $programme_id, $level='200', $school_id, $student_id); ?>



                <!--<h3 id="list" class="btn btn-warning">200 Level - Second Semester</h3> <br>-->
                <?php //echo courses_to_register($semester = '2', $dept, $programme, $level='200', $programme_type); ?>

            </div> <!-- /view2 -->


             <div  id="view3">

                 <h3 id="list" class="btn btn-info">300 Level - <?php echo $semester_t;  ?> Semester</h3> <br>
                <?php echo courses_to_register($con, $current_semester, $department_id, $programme_id, $level='300', $school_id, $student_id); ?>



                <!--<h3 id="list" class="btn btn-info">300 Level - Second Semester</h3> <br>-->
                <?php //echo courses_to_register($semester = '2', $dept, $programme, $level='300', $programme_type); ?>

             </div> <!-- /view3 -->


             <div  id="view4">

                 <h3 id="list" class="btn btn-info">400 Level - <?php echo $semester_t;  ?> Semester</h3> <br>
                <?php echo courses_to_register($con, $current_semester, $department_id, $programme_id, $level='400', $school_id, $student_id); ?>



                <!--<h3 id="list" class="btn btn-info">300 Level - Second Semester</h3> <br>-->
                <?php //echo courses_to_register($semester = '2', $dept, $programme, $level='300', $programme_type); ?>

             </div> <!-- /view4 -->

           <?php }if($level == '500'){ //if 300  ?>

               <div  id="view1">
                <h3 id="list" class="btn btn-success">100 Level - <?php echo $semester_t;  ?> Semester</h3> <br>
                <?php echo courses_to_register($con, $current_semester, $department_id, $programme_id, $level='100', $school_id, $student_id); ?>


             <!-- <h3 id="list" class="btn btn-success">100 Level - Second Semester</h3> <br>-->
              <?php //echo courses_to_register($semester = '2', $dept, $programme, $level='100', $programme_type); ?>

             </div> <!-- view1 ends -->


            <div  id="view2">
                 <h3 id="list" class="btn btn-warning">200 Level - <?php echo $semester_t;  ?> Semester</h3> <br>
                <?php echo courses_to_register($con, $current_semester, $department_id, $programme_id, $level='200', $school_id, $student_id); ?>



                <!--<h3 id="list" class="btn btn-warning">200 Level - Second Semester</h3> <br>-->
                <?php //echo courses_to_register($semester = '2', $dept, $programme, $level='200', $programme_type); ?>

            </div> <!-- /view2 -->


             <div  id="view3">

                 <h3 id="list" class="btn btn-info">300 Level - <?php echo $semester_t;  ?> Semester</h3> <br>
                <?php echo courses_to_register($con, $current_semester, $department_id, $programme_id, $level='300', $school_id, $student_id); ?>



                <!--<h3 id="list" class="btn btn-info">300 Level - Second Semester</h3> <br>-->
                <?php //echo courses_to_register($semester = '2', $dept, $programme, $level='300', $programme_type); ?>

             </div> <!-- /view3 -->


             <div  id="view4">

                 <h3 id="list" class="btn btn-info">400 Level - <?php echo $semester_t;  ?> Semester</h3> <br>
                <?php echo courses_to_register($con, $current_semester, $department_id, $programme_id, $level='400', $school_id, $student_id); ?>



                <!--<h3 id="list" class="btn btn-info">300 Level - Second Semester</h3> <br>-->
                <?php //echo courses_to_register($semester = '2', $dept, $programme, $level='300', $programme_type); ?>

             </div> <!-- /view4 -->


              <div  id="view5">

                 <h3 id="list" class="btn btn-info">500 Level - <?php echo $semester_t;  ?> Semester</h3> <br>
                <?php echo courses_to_register($con, $current_semester, $department_id, $programme_id, $level='500', $school_id, $student_id); ?>



                <!--<h3 id="list" class="btn btn-info">300 Level - Second Semester</h3> <br>-->
                <?php //echo courses_to_register($semester = '2', $dept, $programme, $level='300', $programme_type); ?>

             </div> <!-- /view5 -->

           <?php } ?>


      </div>




  <div style="height:30px"></div>



<input type="hidden" value="preview_rc" name="act" />
<input type="submit" name="submit" class="btn btn-success" value="Preview" id="submit" data-toggle="tooltip" data-placement="top" title="Click here to see preview"/>

</div><!-- /well -->

</form>

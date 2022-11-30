<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Manage CMS</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item active">New Course</li>
</ul>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
  <div class="row">
													<div class="row">
														<div class="col-md-6 col-sm-6 col-6">
															<div class="btn-group">
																<a href="dashboard?hubs=courses" id="addRow" class="btn btn-info" >
																	Go Back <i class="fa fa-plus"></i>
																</a>
															</div>

														</div>

													</div>
                          <div class="card-body ">
                            <form action="#" method="post" id="add_course">
                      <div class="form-group col-md-12">
											<label for="email">School:</label>
                      <select class="form-control select21" id="school"
                              title="Select School..." name="school_id">
                          <option disabled selected>Select School</option>
                          	<?php echo select_school($con,$school_id)?>
                      </select>
										  </div>
                      <div class="form-group col-md-12">
											<label for="email">Faculty:</label>
                      <select class="form-control select21" id="faculty"
                              title="Select faculty..." name="faculty_id">
                          <option disabled selected>Select faculty</option>
                          <?php echo select_faculty($con,$faculty_id)?>
                      </select>
										  </div>
                      <div class="form-group col-md-12">
											<label for="email">Department:</label>
                      <select class="form-control select21" id="school"
                              title="Select department..." name="department_id">
                          <option disabled selected>Select Department</option>
                          <?php echo select_department($con,$department_id)?>
                      </select>
										  </div>
                      <div class="form-group col-md-12">
											<label for="email">Title:</label>
											<input type="text" name="title" placeholder="Title" class="form-control" value=""  required  >
										  </div>
                      <div class="form-group col-md-12">
											<label for="email">Code:</label>
											<input type="text" name="code" placeholder="Code" class="form-control" value=""  required  >
										  </div>
                      <div class="form-group col-md-12">
											<label for="email">Unit:</label>
											<input type="text" name="unit" placeholder="Unit" class="form-control" value=""  required  >
										  </div>
                      <div class="form-group col-md-12">
											<label for="email">Core/Elective:</label>
                      <select name="type" class="form-control form-control-lg" required>
                       <?php echo select_course_type($course_type)?>
                       </select>
										  </div>
                      <div class="form-group col-md-12">
											<label for="email">level:</label>
											<select class="form-control" name="level">
                        <?php echo select_level($level)?>
                      </select>
										  </div>
                      <div class="form-group col-md-12">
                      <label for="email">Course Description:</label>
                      <textarea name="description" class="form-control" rows="8" cols="80"></textarea>
                      </div>
                      <div class="form-group col-md-12">
											<label for="email">Semester:</label>
                      <select name="semester" class="form-control form-control-lg" required>
                       <?php echo select_semester($semester)?>
                       </select>
										  </div>
                      <div class="form-group col-md-12">
											<label for="email">Status:</label>
                      <select name="status" class="form-control form-control-lg" required>
                       <?php echo select_user_status($course_type=000)?>
                       </select>
										  </div>
						<div id="saving_register">
							<center>
														<button class="btn btn-info" >Submit </button>
														<a href="dashboard?hubs=courses" type="submit" class="btn btn-warning" >Calcel </a></center>
						</div>
            <div id="login_out">
            </div>
</form>
<script type="text/javascript">
     $(document).ready(function(e){



    $("#add_course").submit(function(event){
      event.preventDefault(); //prevent default action
      var post_url = "php/add_course.php"; //get form action url
      var request_method = $(this).attr("method"); //get form GET/POST method

      $("#login_out").html('<div style="margin-top:10px"><center>Processing, please wait...<br/><img src="assets/images/ajax-loader1.gif" width="10%"/></center></div>');

      var form_data = new FormData(this); //Creates new FormData object


        $.ajax({
          url : post_url,
          type: request_method,
          data : form_data,
          contentType: false,
          cache: false,
          processData:false
        }).done(function(response){ //
          alert(response);
          if(response==1){
            //$("body").load("dashboard").hide().fadeIn(1500).delay(6000);
            window.location.href = "dashboard?hubs=courses&Successfully Added";
          }else{

          $("#login_out").html(response);


          }
        });

    });
});

    </script>
                    </div>
                        </div>
</div>
</div>
</div>
</div>

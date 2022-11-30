<div class="login-area" style="margin-top:10px;">
<form class="row" method="Post" action="#" id="add_programme">

										<div class="form-group col-md-4">
										<label for="email">School:</label>
										<select class="form-control" name="school_id" required>
											<option value="0">--Choose School --</option>
												<?php echo select_school($con, get_student_programme_type($con, $id)); ?>
												</select>
												<input type="hidden" name="stu_id" value="<?php echo $id;?>">

										</div>

										<div class="form-group col-md-4">
											<label for="email">Study Mode:</label>
											<select class="form-control" name="study_mode" required>
												<option value="0"  > --select mode-- </option>
													<?php echo select_applicant_study_mode($con, get_student_study_mode($con, $id)); ?>
												</select>

										  </div>

										  <div class="form-group col-md-4">
											<label for="email">Entry Mode:</label>
											<select class="form-control" name="entry_mode" required>
												<option value="0"  > --select entry-- </option>
													<?php echo select_applicant_study_mode($con, get_student_mode_of_entry($con, $id)); ?>
												</select>

										  </div>
										  <div class="form-group col-md-4">
										<label for="email">Entry Year:</label>
										<select class="form-control" name="entry_year" required>
											<option value="0">--Choose year --</option>
												<?php echo year(get_student_entry_year($con, $id)); ?>
												</select>
										</div>

										<div class="form-group col-md-4">
											<label for="email">Programme Duration:</label>
												<input type="text" name="duration" class="form-control" value="<?php echo get_programme_duration($con, get_user_programme_id($con,$id)); ?>" readonly>
										  </div>

										  <div class="form-group col-md-4">
											<label for="email">Max-Duration:</label>
												<input type="text" name="max_duration" class="form-control" value="<?php echo get_max_programme_duration($con, get_user_programme_id($con,$id)); ?>" readonly>
										  </div>

										  <div class="form-group col-md-6">
											<label for="email">Department:</label>
											<select class="form-control" name="department" required>
												<option value="0"  > --select department-- </option>
												<?php if(!isset($con, $_SESSION['dep'])){ echo select_department($con, $dep = get_user_department_id($con, $id));}else{ echo select_department($con, $_SESSION['dep']);} ?>
												</select>
										  </div>
										  <div class="form-group col-md-6">
											<label for="email">Programme:</label>
											<select class="form-control" name="programme" required>
												<option value="0"  > --select programme-- </option>
													<?php if(!isset($con, $_SESSION['prog'])){ echo select_programme($con, get_user_programme_id($con, $id));}else{ echo select_programme($con, $_SESSION['prog']);} ?>
												</select>
										  </div>
										  <div class="form-group col-md-4">
											<label for="email">Award in view:</label>
											<input class="form-control" type="text" name="cert" readonly value="<?php echo show_cert3($id='4'); ?>">
										  </div>

										  <div class="form-group col-md-8">
											<label for="email">Extra Curricular Activities / Hobbies or Area of Interest:</label>
											<textarea name="extra_activities" id="" cols="30" rows="10" class="form-control"></textarea>

										  </div>
											<label class="col-md-12" for="dob" style="font-size:20px; font-weight:bold;">Action <hr style="height:1px; background:#4ec870;"> </label>
											<div class="col-md-12" id="login_out">

											</div>

											<div class="form-group col-md-6" id="">
											<button type="submit" class="btn btn-success" name="button">Submit</button>
											</div>
											<div class="" id="login_out">

											</div>
										</form>

	</div>
	<script type="text/javascript">
					$(document).ready(function(e){
					$("#add_programme").submit(function(event){
					event.preventDefault(); //prevent default action
					var post_url = "php/students/update_programme.php"; //get form action url
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
					//swal(response);
					if(response==1){
						//$("body").load("dashboard").hide().fadeIn(1500).delay(6000);
						alert('Programme Updated Successful');
						window.setTimeout(link,2000);
					}else{
						alert(response);
					//$("#login_out").html(response);


					}
					});

					});
					});

			function link(){
			location.reload();
			}
	</script>


<form class="row" method="Post" action="#" id="add_health">
									<div class="form-group col-md-4">
											<label for="email">Status:</label>
											<select class="form-control" name="h_status" required>
												<?php echo select_applicant_h_status(get_student_h_status($con, $id)); ?>
											</select>
										  </div>
											<input type="hidden" name="stu_id" value="<?php echo $id;?>">
										  <div class="form-group col-md-4">
											<label for="email">Disability:</label>
											<select class="form-control" name="disability" required>
												<?php echo select_disability(get_student_disability($con,$id)) ?>
											</select>
										  </div>
										  <div class="form-group col-md-4">
											<label for="email">Blood Group:</label>
											<select class="form-control" name="bg" required>
												<?php echo  select_bg(get_student_bg($con,$id));?>
											</select>
										  </div>
										  <div class="form-group col-md-12">
											<label for="email">Medication:</label>
											<textarea class="form-control" rows="6px" cols="30px" name="medi" required><?php echo get_student_medication($con,$id);?></textarea>
										  </div><hr/>
<label class="col-md-12" for="dob" style="font-size:20px; font-weight:bold;">Action <hr style="height:1px; background:#4ec870;"> </label>

<div class="form-group col-md-6">
<button type="submit" class="btn btn-success" name="button">Submit</button>
</div>


										</form>

										<script type="text/javascript">
														$(document).ready(function(e){
														$("#add_health").submit(function(event){
														event.preventDefault(); //prevent default action
														var post_url = "php/students/update_health.php"; //get form action url
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
															alert('Updated Successful');
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

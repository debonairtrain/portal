<div class="login-area" style="margin-top:10px;">
<form class="row" method="Post" action="#" id="add_health">
									<div class="form-group col-md-4">
											<label for="email">Status:</label>
											<select class="form-control" name="h_status" required>
												<?php echo select_applicant_h_status(get_applicant_h_status($con, $id)); ?>
											</select>
										  </div>
											<input type="hidden" name="app_id" value="<?php echo $id;?>">
										  <div class="form-group col-md-4">
											<label for="email">Disability:</label>
											<select class="form-control" name="disability" required>
												<?php echo select_disability(get_applicant_disability($con,$id)) ?>
											</select>
										  </div>
										  <div class="form-group col-md-4">
											<label for="email">Blood Group:</label>
											<select class="form-control" name="bg" required>
												<?php echo  select_bg(get_applicant_bg($con,$id));?>
											</select>
										  </div>
										  <div class="form-group col-md-12">
											<label for="email">Medication:</label>
											<textarea class="form-control" rows="6px" cols="30px" name="medi" required><?php echo get_applicant_medication($con,$id);?></textarea>
										  </div><hr/>
										  <div id="health_error"></div>
                                        <label class="col-md-12" for="dob" style="font-size:20px; font-weight:bold;">Action <hr style="height:1px; background:#4ec870;"> </label>

                                        <div class="form-group col-md-6">
                                        <button type="submit" class="btn btn-success" name="button">Submit</button>
                                        </div>


										</form>

										</div>
										<script type="text/javascript">
														$(document).ready(function(e){
														$("#add_health").submit(function(event){
														event.preventDefault(); //prevent default action
														var post_url = "php/applicant/update_health.php"; //get form action url
														var request_method = $(this).attr("method"); //get form GET/POST method

														$("#health_error").html('<div style="margin-top:10px"><center>Login, please wait...<br/><img src="assets/images/ajax-loader1.gif" width="10%"/></center></div>');

														var form_data = new FormData(this); //Creates new FormData object


														$.ajax({
														url : post_url,
														type: request_method,
														data : form_data,
														contentType: false,
														cache: false,
														processData:false
														}).done(function(response){ //
														if(response==1){
															alert('Updated Successful');
															$("#health_error").html('');
													    }else{
														alert(response);
														$("#health_error").html('');


														}
														});

														});
														});

												function link(){
												location.reload();
												}
										</script>

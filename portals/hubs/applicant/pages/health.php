<form id="save_health" method="POST">
										<label style="color:red; font-weight:bold;font-size:16px;">Health Status</label><hr/>
										<div class="form-group col-md-4">
											<label for="email">Status:</label>
											<select class="form-control" name="h_status" required>
												<?php echo select_h_status($H_status); ?>
											</select>
										  </div>
										  <div class="form-group col-md-4">
											<label for="email">Disability:</label>
											<select class="form-control" name="disability" required>
												<?php echo select_disability($disability); ?>
											</select>
										  </div>
										  <div class="form-group col-md-4">
											<label for="email">Blood Group:</label>
											<select class="form-control" name="bg" required>
												<?php echo select_bg($blood_type); ?>
											</select>
										  </div>
										  <div class="form-group col-md-12">
											<label for="email">Medication:</label>
											<textarea class="form-control" row="5" cols="48px" name="medi" required><?php if(!empty($medi)){
												echo $medi;
											}
											?></textarea>
										  </div>

											<div id="saving_health">
										  <center><button type="submit" onclick="add()"  class="btn btn-login btn-green"><span>Save</span></button>
										  </center>
										  </div>

										  <div id="output_health">

										  </div>
										</form>

										<script type="text/javascript">
										$(document).ready(function(e){



												$("#save_health").submit(function(event){
													event.preventDefault(); //prevent default action
													var post_url = "includes/php/update_health"; //get form action url
													var request_method = $(this).attr("method"); //get form GET/POST method

													$("#output_health").html('<div style="margin-top:10px"><center>saving Data, please wait...<br/><img src="images/ajax-loader1.gif" width="10%"/></center></div>');
													document.getElementById("saving_health").style.display = "none";
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


															 document.getElementById("saving_health").style.display = "block";
															 $("#output_health").html("");
															  swal("Health Status Updated");
																window.setTimeout(link,2000);


															}else{

															$("#output_health").html(response);
															document.getElementById("saving_health").style.display = "block";

															}
														});

												});
										});

										function link(){
											location.reload();
										}
										</script>

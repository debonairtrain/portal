<div class="card col-md-12" style="margin-top:10px;">
<form class="row mt-5 mb-4" method="Post" action="#" id="save_health">
										<label class="col-md-12" for="dob" style="font-size:20px; font-weight:bold;">Health Information <hr style="height:1px; background:#4ec870;"> </label>
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
											<div id="output_health">

										  </div>
											<div class="course-content" id="saving_health">
										 <center><button type="submit" class="btn btn-info btn-lg"><span>Save</span></button></center>
										  </div>
											<br><br>
										</form>

										</div>
										<script type="text/javascript">
																				$(document).ready(function(e){



																						$("#save_health").submit(function(event){
																							event.preventDefault(); //prevent default action
																							var post_url = "hubs/students/php/update_health"; //get form action url
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
																									  alert("Health Status Updated");
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

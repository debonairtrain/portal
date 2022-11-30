<div class="card col-md-12">
  <br><br>
<form id="save_health" method="POST">
	<div class="row mt-4">
										<label class="col-md-12" style="color:red; font-weight:bold;font-size:16px;">Health Status</label><hr/>
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
                      <?php if(is_applicant_admitted($con,$user_id)==true){
                        echo "<span class='alert alert-danger col-md-10 ml-4 mt-3 text-center'>You have been admitted, You can't update your Health Information.....<span>";
                      }else {
                        echo '</div><center><div id="saving_health">
                        <button type="submit" class="btn btn-info btn-lg"><span>Save</span></button>

                        </div></center>';
                      } ?>
										


										  <div id="output_health" class="col-md-12 text-danger">

										  </div>
											<br>
												</div>

										</form>

										<script type="text/javascript">
										$(document).ready(function(e){



												$("#save_health").submit(function(event){
													event.preventDefault(); //prevent default action
													var post_url = "hubs/applicant/php/update_health"; //get form action url
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

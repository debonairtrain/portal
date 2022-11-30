<div class="card col-md-12">
<form id="save_previous_programme" method="POST">
										<label style="color:red; font-weight:bold;font-size:16px; margin-top:10px;">Programme Information</label><hr/>
										<div class="row mt-2 mb-4">
										<div class="form-group col-md-4">
										<label for="email">Highest Qualification:</label>
										<select class="form-control" name="highest_qualification">
											<?=select_highest_qualification($qualification);?>
										</select>
										</div>


										<div class="form-group col-md-8">
										<label for="email">Institution Obtained:</label>
										<input type="text" name="institution_obtained" value="<?php
										if(!empty($institution_obtained)){
											echo $institution_obtained;
										}
										?>" class="form-control">
										</div>
										<div class="form-group col-md-12">
											<label for="email">Year of Graduation</label>
											<input type="date" name="graduation_year" value="" class="form-control">

											</div>
									</div>
											<div id="saving_previous">
										  <center><button type="submit" onclick="add()"  class="btn btn-success btn-green"><span>Save</span></button>
										  </center>
										  </div>

										  <div id="output_previous">

										  </div>
											<br><br>
										</form>
</div>
										<script type="text/javascript">
										$(document).ready(function(e){



												$("#save_previous_programme").submit(function(event){
													event.preventDefault(); //prevent default action
													var post_url = "hubs/students/php/update_previous"; //get form action url
													var request_method = $(this).attr("method"); //get form GET/POST method

													$("#output_previous").html('<div style="margin-top:10px"><center>Saving Data, please wait...<br/><img src="images/ajax-loader1.gif" width="10%"/></center></div>');
													document.getElementById("saving_previous").style.display = "none";
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


															 document.getElementById("saving_previous").style.display = "block";
															 $("#output_previous").html("");
															  alert("Previous Academic Record Updated");
																window.setTimeout(link,2000);


															}else{

															$("#output_previous").html(response);
															document.getElementById("saving_previous").style.display = "block";

															}
														});

												});
										});

										function link(){
											location.reload();
										}
										</script>

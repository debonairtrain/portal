<div class="list-group">
    <ul class="list-group">
    <li class="list-group-item list-group-iteam">
                   <div class="row">
										 <form class="row" method="Post" action="#" id="save_programme"><!-- col md 12 -->
                          <div class="col-md-4">
                             <div class="form-group">
                                <label for="programme_type">Programme Type  <span class="ast">*</span></label>
                                     <!-- <div class="input-group">-->
                                      <input type="text" name="school_id" class="form-control" value="<?php echo get_school_title_by_id($con, get_user_programme_type_id($con, $user_id));?>" disabled>
                              </div>
                         </div>
               			 <div class="col-md-4">
                             <div class="form-group">
                                <label for="study_mode">Study Mode  <span class="ast">*</span></label>
                                      <select name="study_mode" class="form-control" disabled="disabled">
                                          <?php echo select_study_mode($sm = get_user_study_mode($con, $user_id));?>
                                       </select>
                              </div>
                         </div>
                          <div class="col-md-4">
                             <div class="form-group">
                                <label for="study_mode">Entry Mode  <span class="ast">*</span></label>
                                     <!-- <div class="input-group">-->
                                      <select name="entry_mode" class="form-control" disabled="disabled">
                                          <?php echo select_entry_mode($em = get_user_entry_mode($con, $user_id)); ?>
                                       </select>
                              </div>
                         </div>
                        <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="entry_year">Entry Year <span class="ast">*</span></label>
                                          <input type="text" class="form-control" value="<?php echo get_user_entry_year($con, $user_id);?>" name="entry_year" placeholder="Entry Year" readonly="readonly">
                                    </div>
                           </div>
                           <div class="col-md-4">
                                 <div class="form-group">
                                    <label for="programme_duration">Programme Duration <span class="ast">*</span></label>
                                    <input type="text" class="form-control" value="<?php echo get_programme_duration($con, get_user_programme_id($con, $user_id));?>" name="programme_duration" placeholder="Programme Duration" readonly>
                                </div>
                        </div><!-- /.col md 4-->
                        <div class="col-md-4">
                                 <div class="form-group">
                                    <label for="max_programme_duration"> Max-Duration <span class="ast">*</span></label>
                                    <input type="text" class="form-control" value="<?php echo get_max_programme_duration($con, get_user_programme_id($con, $user_id));?>" name="max_programme_duration" placeholder="Max. Programme Duration" readonly>
                                </div>
                        </div><!-- /.col md 4-->
                        <div class="col-md-12">
                             <div class="form-group">
                                <label for="faculty">Faculty  <span class="ast">*</span></label>
                                      <select name="faculty" class="form-control" disabled>
                                      		<option value="0"  > --Please Select-- </option>
                                          <?php echo select_faculty($con, $fac =  get_faculty_id($con, $user_id)); ?>
                                       </select>
                              </div>
                         </div>
                          <div class="col-md-12">
                             <div class="form-group">
                                <label for="department">Department  <span class="ast">*</span></label>
                                      <select name="department" class="form-control" disabled="disabled">
                                      <option value="0"  > --Please Select-- </option>
                                          <?php echo select_department($con, $dep = get_user_department_id($con, $user_id)); ?>
                                       </select>
                              </div>
                         </div>

                           <div class="col-md-12">
                             <div class="form-group">
                                <label for="programme">Programme <span class="ast">*</span></label>
                                      <select name="programme" class="form-control" disabled="disabled">
                                      <option value="0"  > --Please Select-- </option>
                                          <?php echo select_programme($con, $prog = get_user_programme_id($con, $user_id));?>
                                       </select>
                              </div>
                         </div>
                          <div class="col-md-4">
                             <div class="form-group">
                                <label for="award_in_view">Award in View  <span class="ast">*</span></label>
                                      <select name="award_in_view" class="form-control" disabled="disabled"	>
                                          <?php echo select_award_in_view($aiv = get_user_award_in_view($con, $user_id));?>
                                       </select>
                              </div>
                         </div>




                          <div class="col-md-8">
                           <div class="form-group">
                                <label for="activities">Extra Curricular Activities / Hobbies or Area of Interest</label>
                                <textarea name="activities" class="form-control"><?php echo get_user_activities($con, $user_id); ?></textarea>
                          </div>
                        </div>
												</div><!-- /.col md 12 -->
												<div id="output_programme">

											</div>
												<div class="course-content" id="saving_programme">
											<center> <button type="submit"class="btn btn-info bt-lg"><span>Save</span></button></center>
											  </div>
												</form>

   </li>
   </ul><!-- close ul -->
</div><!-- /.list group -->
<script type="text/javascript">
										$(document).ready(function(e){



												$("#save_programme").submit(function(event){
													event.preventDefault(); //prevent default action
													var post_url = "hubs/students/php/update_programme"; //get form action url
													var request_method = $(this).attr("method"); //get form GET/POST method

													$("#output_programme").html('<div style="margin-top:10px"><center>Saving Data, please wait...<br/><img src="images/ajax-loader1.gif" width="10%"/></center></div>');
													document.getElementById("saving_programme").style.display = "none";
													var form_data = new FormData(this); //Creates new FormData object


														$.ajax({
															url : post_url,
															type: request_method,
															data : form_data,
															contentType: false,
															cache: false,
															processData:false
														}).done(function(response){ //
															//alert(response);
															if(response==1){


															 document.getElementById("saving_programme").style.display = "block";
															 $("#output_programme").html("");
																alert("Programme Updated");
																window.setTimeout(link,2000);


															}else{

															$("#output_programme").html(response);
															document.getElementById("saving_programme").style.display = "block";

															}
														});

												});
										});
										function link(){
											location.reload();
										}
										</script>

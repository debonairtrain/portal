<form id="save_olevel" method="POST">
			<div class="col-md-12">
			<div class="form-group col-md-6">
				<label for="email">Olevel Result 1:</label><hr>
									<div class="form-group col-md-12">
										<label for="email">Exam Number:</label>
											<input value="<?php
											if(!empty($exam_no)){
												echo $exam_no;
											}
											?>" type="text" class="form-control" placeholder="Enter Exam Number" name="exam_no">
									</div>
									<div class="form-group col-md-12">
										<label for="email">Exam type:</label>
											<select class="form-control" name="olexam1">
												<?=select_exam_type($exam_type);?>
											</select>
									</div>
									<div class="form-group col-md-6">
										<label for="email">Exam Year:</label>
											<select class="form-control" name="eyear1">
												<?=year($exam_year);?>
											</select>
									</div>
									<div class="form-group col-md-6">
										<label for="email">Exam Month:</label>
											<select class="form-control" name="emonth1">
												<?=select_exam_month($exam_month);?>
											</select>
									</div>
								<table class="edu-table-responsive">
									<thead>
									  <tr>
										<td width="5%">S/N</td>
									<td width="65%">Subjects</td>
									<td width="30%">Grades</td>
									  </tr>
									</thead>
									<tbody>
									 <tr class="active">
									<td width="5%">1</td>
									<td width="65%">
										<select name="sub1" class="form-control" >
											<option value="0">-- Please Select -- </option>
											<?=select_subjects($con, $subject1);?>
											</select>
									</td>
									<td width="30%">
										<select  name="grd1" class="form-control" >
											<?=select_subject_grade($grade1);?>
										</select>
									</td>
								</tr>
									   <tr class="active">
									<td width="5%">2</td>
									<td width="65%">
										<select name="sub2" class="form-control" >
										 <option value="0">-- Please Select -- </option>
										 <?=select_subjects($con, $subject2);?>
											</select>
									</td>
									<td width="30%">
										<select  name="grd2" class="form-control" >
											<?=select_subject_grade($grade2);?>
										</select>
									</td>
								</tr> <tr class="active">
									<td width="5%">3</td>
									<td width="65%">
										<select name="sub3" class="form-control" >
										 <option value="0">-- Please Select -- </option>
										 <?=select_subjects($con, $subject3);?>
										 </select>
									</td>
									<td width="30%">
										<select  name="grd3" class="form-control" >
											<?=select_subject_grade($grade3);?>
										</select>
									</td>
								</tr> <tr class="active">
									<td width="5%">4</td>
									<td width="65%">
										<select name="sub4" class="form-control" >
										 <option value="0">-- Please Select -- </option>
										 <?=select_subjects($con, $subject4);?>
										 </select>
									</td>
									<td width="30%">
										<select  name="grd4" class="form-control" >
											<?=select_subject_grade($grade4);?>
										</select>
									</td>
								</tr> <tr class="active">
									<td width="5%">5</td>
									<td width="65%">
										<select name="sub5" class="form-control" >
										 <option value="0">-- Please Select -- </option>
										 <?=select_subjects($con, $subject5);?>
										 </select>
									</td>
									<td width="30%">
										<select  name="grd5" class="form-control" >
											<?=select_subject_grade($grade5);?>
										</select>
									</td>
								</tr> <tr class="active">
									<td width="5%">6</td>
									<td width="65%">
										<select name="sub6" class="form-control" >
											<option value="0">-- Please Select -- </option>
											<?=select_subjects($con, $subject6);?>
											</select>
									</td>
									<td width="30%">
										<select  name="grd6" class="form-control" >
											<?=select_subject_grade($grade6);?>
										</select>
									</td>
								</tr> <tr class="active">
									<td width="5%">7</td>
									<td width="65%">
										<select name="sub7" class="form-control" >
											<option value="0">-- Please Select -- </option>
											<?=select_subjects($con, $subject7);?>
										</select>
									</td>
									<td width="30%">
										<select  name="grd7" class="form-control" >
											<?=select_subject_grade($grade7);?>
										</select>
									</td>
								</tr> <tr class="active">
									<td width="5%">8</td>
									<td width="65%">
										<select name="sub8" class="form-control" >
										 <option value="0">-- Please Select -- </option>
										 <?=select_subjects($con, $subject8);?>
										 </select>
									</td>
									<td width="30%">
										<select  name="grd8" class="form-control" >
											<?=select_subject_grade($grade8);?>
										</select>
									</td>
								</tr> <tr class="active">
									<td width="5%">9</td>
									<td width="65%">
										<select name="sub9" class="form-control" >
										 <option value="0">-- Please Select -- </option>
										 <?=select_subjects($con, $subject9);?>
										 </select>
									</td>
									<td width="30%">
										<select  name="grd9" class="form-control" >
											<?=select_subject_grade($grade9);?>
										</select>
									</td>
								</tr>
									</tbody>
								  </table>

			</div>


			<div class="form-group col-md-6">
				<label for="email">Olevel Result 2:</label><hr>
				<div class="form-group col-md-12">
					<label for="email">Exam Number:</label>
						<input value="<?php
						if(!empty($exam_no_2)){
							echo $exam_no_2;
						}
						?>" type="text" class="form-control" placeholder="Enter Exam Number" name="exam_no2">
				</div>
				<div class="form-group col-md-12">
					<label for="email">Exam type:</label>
						<select class="form-control" name="olexam2">
							<?=select_exam_type($exam_type_2);?>
						</select>
				</div>
				<div class="form-group col-md-6">
					<label for="email">Exam Year:</label>
						<select class="form-control" name="eyear2">
							<?=year($exam_year_2);?>
						</select>
				</div>
				<div class="form-group col-md-6">
					<label for="email">Exam Month:</label>
						<select class="form-control" name="emonth2">
							<?=select_exam_month($exam_month_2);?>
						</select>
				</div>
			<table class="edu-table-responsive">
				<thead>
					<tr>
					<td width="5%">S/N</td>
				<td width="65%">Subjects</td>
				<td width="30%">Grades</td>
					</tr>
				</thead>
				<tbody>
				 <tr class="active">
				<td width="5%">1</td>
				<td width="65%">
					<select name="s_sub1" class="form-control" >
						<option value="0">-- Please Select -- </option>
						<?=select_subjects($con, $subject1_2);?>
						</select>
				</td>
				<td width="30%">
					<select  name="s_grd1" class="form-control" >
						<?=select_subject_grade($grade1_2);?>
					</select>
				</td>
			</tr>
					 <tr class="active">
				<td width="5%">2</td>
				<td width="65%">
					<select name="s_sub2" class="form-control" >
					 <option value="0">-- Please Select -- </option>
					 <?=select_subjects($con, $subject2_2);?>
						</select>
				</td>
				<td width="30%">
					<select  name="s_grd2" class="form-control" >
						<?=select_subject_grade($grade2_2);?>
					</select>
				</td>
			</tr> <tr class="active">
				<td width="5%">3</td>
				<td width="65%">
					<select name="s_sub3" class="form-control" >
					 <option value="0">-- Please Select -- </option>
					 <?=select_subjects($con, $subject3_2);?>
					 </select>
				</td>
				<td width="30%">
					<select  name="s_grd3" class="form-control" >
						<?=select_subject_grade($grade3_2);?>
					</select>
				</td>
			</tr> <tr class="active">
				<td width="5%">4</td>
				<td width="65%">
					<select name="s_sub4" class="form-control" >
					 <option value="0">-- Please Select -- </option>
					 <?=select_subjects($con, $subject4_2);?>
					 </select>
				</td>
				<td width="30%">
					<select  name="s_grd4" class="form-control" >
						<?=select_subject_grade($grade4_2);?>
					</select>
				</td>
			</tr> <tr class="active">
				<td width="5%">5</td>
				<td width="65%">
					<select name="s_sub5" class="form-control" >
					 <option value="0">-- Please Select -- </option>
					 <?=select_subjects($con, $subject5_2);?>
					 </select>
				</td>
				<td width="30%">
					<select  name="s_grd5" class="form-control" >
						<?=select_subject_grade($grade5_2);?>
					</select>
				</td>
			</tr> <tr class="active">
				<td width="5%">6</td>
				<td width="65%">
					<select name="s_sub6" class="form-control" >
						<option value="0">-- Please Select -- </option>
						<?=select_subjects($con, $subject6_2);?>
						</select>
				</td>
				<td width="30%">
					<select  name="s_grd6" class="form-control" >
						<?=select_subject_grade($grade6_2);?>
					</select>
				</td>
			</tr> <tr class="active">
				<td width="5%">7</td>
				<td width="65%">
					<select name="s_sub7" class="form-control" >
						<option value="0">-- Please Select -- </option>
						<?=select_subjects($con, $subject7_2);?>
					</select>
				</td>
				<td width="30%">
					<select  name="s_grd7" class="form-control" >
						<?=select_subject_grade($grade7_2);?>
					</select>
				</td>
			</tr> <tr class="active">
				<td width="5%">8</td>
				<td width="65%">
					<select name="s_sub8" class="form-control" >
					 <option value="0">-- Please Select -- </option>
					 <?=select_subjects($con, $subject8_2);?>
					 </select>
				</td>
				<td width="30%">
					<select  name="s_grd8" class="form-control" >
						<?=select_subject_grade($grade8_2);?>
					</select>
				</td>
			</tr> <tr class="active">
				<td width="5%">9</td>
				<td width="65%">
					<select name="s_sub9" class="form-control" >
					 <option value="0">-- Please Select -- </option>
					 <?=select_subjects($con, $subject9_2);?>
					 </select>
				</td>
				<td width="30%">
					<select  name="s_grd9" class="form-control" >
						<?=select_subject_grade($grade9_2);?>
					</select>
				</td>
			</tr>
				</tbody>
				</table>
</div>
				<div id="saving_olevel">
				<center><button type="submit" onclick="add()"  class="btn btn-login btn-green"><span>Save</span></button></center>

				</div>

				<div id="outputt_olevel">

				</div>

				</form>



			<script type="text/javascript">
			$(document).ready(function(e){



					$("#save_olevel").submit(function(event){
						event.preventDefault(); //prevent default action
						var post_url = "includes/php/update_olevel"; //get form action url
						var request_method = $(this).attr("method"); //get form GET/POST method

						$("#output_olevel").html('<div style="margin-top:10px"><center>saving olevel Data, please wait...<br/><img src="images/ajax-loader1.gif" width="10%"/></center></div>');
						document.getElementById("saving_olevel").style.display = "none";
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


								 document.getElementById("saving_olevel").style.display = "block";
								 $("#output_olevel").html("");
								  swal(response);
									window.setTimeout(link,2000);


								}else{

								$("#output_olevel").html(response);
								document.getElementById("saving_olevel").style.display = "block";
								swal(response);
								window.setTimeout(link,2000);
								}
							});

					});
			});

			function load_lga(){




						var state_id = document.getElementById("state_id").value;

						//swal(lga);

						$.post('includes/php/load_lga.php',{state_id:state_id},
						function(response,status){

						document.getElementById("lga").innerHTML =response;

						});
			}
			function link(){
				location.reload();
			}
			</script>



	<form id="allocate_hostel" method="POST">

    <div style="height:20px; displat:block;"></div>

    <ul class="breadcrumb" >

        <li class="active btn btn-login btn-green" style="background: #027174; color:#FFF;  width:830px"><b><span style="font-size:20px;">MY BED SPACE</span> </b><span class="divider"></span> </li>
    </ul>


<div class="well">
    <div class="row">
         <div class="col-lg-12">







	<?php




if(isset($_SESSION['student_id'])){
	$student_id=$_SESSION['student_id'];
//get datas from the form
		$get_level = mysqli_query($con,"SELECT  level FROM students WHERE student_id='$student_id' ") or die(mysqli_error($con));
						$get_level_sql = mysqli_fetch_assoc($get_level);
						$level = $get_level_sql['level'];
						if($level==100 OR $level==400){


							//check if student have make payments
	$checking = mysqli_query($con, "SELECT *FROM hostel_fee_payments WHERE student_id='$student_id' AND payment_status= 1 ") or die(mysqli_error($con));
	if($checking){
			$sql_verify=mysqli_num_rows($checking);
			if($sql_verify > 0){

					//get room Members
					$member =mysqli_query($con, "SELECT CONCAT_WS(' ', first_name, middle_name, last_name) as name, phone_number,matric_number, students.student_id AS id,
						students.gender AS gender,state.title AS state,lga.title AS lga, hostel_sites.title AS site, students.image AS image,
						application_number, programmes.title AS programme, students.email as email, hostel_categories.title AS category,
						hostel_rooms.title AS room FROM state, lga,hostel_sites, hostel_allocation,hostel_categories,hostel_rooms,
						students, programmes, hostel_fee_payments  WHERE students.programme_id=programmes.id  AND students.state_id = state.id AND
						students.lga_id = lga.id AND students.id = hostel_allocation.student_id AND
						hostel_allocation.hostel_site=hostel_sites.id AND hostel_allocation.room_id=hostel_rooms.id AND
						hostel_allocation.hostel_categories=hostel_categories.id AND students.hostel_allocation='1' AND students.id = hostel_fee_payments.student_id AND hostel_fee_payments.payment_status=1
						AND hostel_allocation.status = '0'
					 ") or die(mysqli_error($con));
					if ($member) {
						if(mysqli_num_rows($member) > 0){
							echo '<div class="col-md-12" style="padding-left:0px; padding-right:0px;">
										<div class="list-group">
											<ul class="list-group">
												<li class="list-group-item list-group-item-info">
													<h3>My Room Member Information</h3>
												</li>
											</ul>



										</div>


							</div>';
						while($get = mysqli_fetch_array($member))
						{
							echo '


							<div class="panel panel-default">
								<div class="panel-heading">

									<h3 class="panel-title">'.strtoupper($get['site']).' --- '.strtoupper($get['category']).' --- '.strtoupper($get['room']).'</h3>
								</div>
								<div class="panel-body">';


												$img=$get['image'];

												if($img==""){

											$pic='<img src="uploads/bg.jpg" width="120px" height="130px" class="img-circle"/>';
										}else{

											$pic='<img src="uploads/'.$img.'" width="120px" height="130px" class="img-circle"/>';

										}

												echo '

													<table width="100%" class="table">
														<tr>
															<td width="10%">'.$pic.'</td>
															<td width="90%">
																<table width="100%">
																	<tr>
																		<td width="100%"><h3 class="label label-success">NAME: '.strtoupper($get['name']).'</h3><hr/>


																		</td>
																	</tr>
																	<tr>
																		<td width="100%"><h3 class="label label-success">Phone Number: '.strtoupper($get['phone_number']).'</h3><hr/>

																		</td>
																	</tr>
																	<tr>
																		<td width="100%"><h3 class="label label-success">Email: '.strtoupper($get['email']).'</h3><hr/>


																		</td>
																	</tr>
																</table>
															</td>
														</tr>
													</table><hr/>';
												}
											}

									echo'</div>
								</div>';
						}












	}else{
		//check invoice to make sure the student have generated invoice already
		$checking = mysqli_query($con, "SELECT *FROM hostel_allocation WHERE student_id='$student_id' AND status='0' ") or die(mysqli_error($con));
		if($checking){
				$sql_verify=mysqli_num_rows($checking);
				if($sql_verify > 0){

					//get hostel allocation of the student
					$allocate = mysqli_query($con,"SELECT *FROM hostel_allocation WHERE student_id = '$student_id' AND status='0' ") or die(mysqli_error($con));
			      $sql = mysqli_fetch_assoc($allocate);
			      $cat_id = $sql['hostel_categories'];
						$site_id = $sql['hostel_site'];
						$room_id = $sql['room_id'];

						//get his room title
						$allocate = mysqli_query($con,"SELECT  title FROM hostel_rooms WHERE id='$room_id' ") or die(mysqli_error($con));
							$sqll = mysqli_fetch_assoc($allocate);
							$room_title = $sqll['title'];

							//get his hostel site title
							$allocate = mysqli_query($con,"SELECT title FROM hostel_sites WHERE id='$site_id' ") or die(mysqli_error($con));
								$sqls = mysqli_fetch_assoc($allocate);
								$site_title = $sqls['title'];

								//get his category title
								$allocate = mysqli_query($con,"SELECT title FROM hostel_categories WHERE id='$cat_id' ") or die(mysqli_error($con));
									$sqlss = mysqli_fetch_assoc($allocate);
									$cat_title = $sqlss['title'];

									//get student biodata
									$q = "SELECT student_id, CONCAT_WS(' ', first_name, middle_name, last_name) as name,image, phone_no,
									gender,matric_number, email,level,programme_id


									   FROM students WHERE student_id='$student_id' ";
									$r = mysqli_query($con , $q) ;
										$sql_verify = mysqli_fetch_assoc($r);

										$programme_id = $sql_verify['programme_id'];

									    $gen = $sql_verify['gender'];
									    if($gen=='F'){
									      $gender= "Female";
									    }else{
									      $gender="Male";
									    }



												$img=$sql_verify['image'];

												if($img==""){

											$pic='<img src="uploads/bg.jpg" width="120px" height="130px" class="img-circle"/>';
										}else{

											$pic='<img src="uploads/'.$img.'" width="120px" height="130px" class="img-circle"/>';

										}


												echo '

												<div class="col-md-12" style="padding-left:0px; padding-right:0px;">
															<div class="list-group">
																<ul class="list-group">
																	<li class="list-group-item list-group-item-info">
																		<h3>My Bed Space Information/ Make Payment</h3>
																	</li>
																</ul>



															</div>


												</div>

												<div class="panel panel-default">
													<div class="panel-heading">
														<h3 class="panel-title">'.strtoupper($site_title).' ----- '.strtoupper($cat_title).' ----- '.strtoupper($room_title).'</h3>
													</div>
													<div class="panel-body">';



													echo '

														<table width="100%" class="table">
															<tr>
																<td width="10%">'.$pic.'</td>
																<td width="90%">
																	<table width="100%">
																		<tr>
																			<td width="100%"><h3 class="label label-success" style="font-size:12px;">NAME: '.strtoupper($sql_verify['name']).'</h3><hr/>


																			</td>
																		</tr>
																		<tr>
																			<td width="100%"><h3 class="label label-success" style="font-size:12px;">Matric Number: '.strtoupper($sql_verify['matric_number']).'</h3><hr/>

																			</td>
																		</tr>
																		<tr>
																			<td width="100%"><h3 class="label label-success" style="font-size:12px;">Phone Number: '.strtoupper($sql_verify['phone_no']).'</h3><hr/>

																			</td>
																		</tr>
																		<tr>
																			<td width="100%"><h3 class="label label-success" style="font-size:12px;">Email: '.strtoupper($sql_verify['email']).'</h3><hr/>


																			</td>
																		</tr>
																		<tr>
																			<td width="100%"><h3 class="label label-success" style="font-size:12px;">Gender: '.strtoupper($gender).'</h3><hr/>


																			</td>
																		</tr>
																	</table>
																	<!-- PROCEED TO PAYMENT --> <a class="btn btn-login btn-green" style="width:80%; margin-top:20px;" href="dashboard.php?sms=payment" data-toggle="tooltip" title="Click here to Proceed to payment" data-placement="top"> <span>PROCEED TO PAYMENT</span></a>
																</td>
															</tr>

														</table><hr/>';

													echo'</div>
													</div>';






	}else{
		//query the database



				echo'
				<div class="col-md-12" style="padding-left:0px; padding-right:0px;">
							<div class="list-group">
								<ul class="list-group">
									<li class="list-group-item list-group-item-info">
										<h3>My Bed Space Information</h3>
									</li>
								</ul>



							</div>


				</div>


				<div class="form-group has-success has-feedback form-inline">
				<label class="control-label" for="inputSuccess4" style="padding-left:20px; font-size:20px;">Click here to select Campus</label>
				<div class="col-md-12">
				<select class="form-control"  name="site" style="width:600px; float:left;" autofocus required>
				<option></option>';
				$q = "SELECT * FROM hostel_sites WHERE status='1' ORDER BY date_added ASC ";
				$r = mysqli_query($con, $q) ;

				if(mysqli_num_rows($r) > 0)
				{//show table
					while($row = mysqli_fetch_array($r)){


						echo '<option value="'.$row['id'].'">'.$row['title'].'</option>';

				}
			}

				echo '</select>
				<div id="allocating"><button class="form-control btn btn-login btn-green col-md-4" name="submit" >
				<span>Check Here!</span></div>
				</button>
				</div>
				<div>
				<br>
				<div id="q"></div>';






	}
}
}

	}



						}else{

							echo '<div class="alert alert-danger"> you are not eligible for hostel accommodation, </div>
							<a href="../../students/dashboard">CLick to go back to the website</a>
							';
						}


}
	?>




				<div id="outputt_allocated">

				</div>

				</form>
</div>
</div>
</div><!-- /.col lg 12 -->

    </div><!-- /.row -->
</div><!-- /well -->



<script type="text/javascript">
			$(document).ready(function(e){



					$("#allocate_hostel").submit(function(event){
						event.preventDefault(); //prevent default action
						var post_url = "includes/pages/check_site.php"; //get form action url
						var request_method = $(this).attr("method"); //get form GET/POST method

						$("#outputt_allocated").html('<div style="margin-top:10px"><center>saving olevel Data, please wait...<br/><img src="images/ajax-loader1.gif" width="10%"/></center></div>');
						document.getElementById("allocating").style.display = "none";
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


								 document.getElementById("allocating").style.display = "block";
								 $("#outputt_allocated").html("");
								  swal(response);



								}else{

								$("#outputt_allocated").html(response);
								document.getElementById("allocating").style.display = "block";
								swal(response);
								}
							});

					});
			});


			</script>

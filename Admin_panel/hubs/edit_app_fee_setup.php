<br><br>
  <?php
        if(isset($_GET['api'])){
             $id=base64_decode($_GET['api']);
            
        }else{
             $id=0;
        }
    ?>
    
    <div class="row">

                          <div class="col-md-11">
														<?php
	                          
	                            $select="SELECT *
																  FROM  set_application_fee_payments
																	WHERE id = $id ";
	                            $sql_select = mysqli_query($con,$select);
	                            $num_rows=mysqli_num_rows($sql_select);
	                            if($num_rows > 0){
	                           // $sn=1;
	                            while($row=mysqli_fetch_array($sql_select)){

																$id=$row['id'];
																$programme_type_id=$row['programme_type_id'];
																$department_id=$row['department_id'];
																$programme_id=$row['programme_id'];
																$academic_year_id=$row['academic_year_id'];
																$title=$row['title'];
																$description=$row['description'];
																$amount=$row['amount'];
																$partly_amount=$row['partly_amount'];
																$total_amount=$row['total_amount'];
																$status=$row['status'];

	                            }
	                            }else {
	                            echo '<td colspan="7">No record found</td>';
	                            }

	                          ?>
														<form method="post" id="edit_app_fee_setup">
															<input type="hidden" name="id" value="<?=$id;?>">
															<div class="form-group">
																<label for="to" class="">School:</label>
																<select class="form-control" name="school">
																	<?=select_school($con, $programme_type_id)?>

																</select>

															</div>

															<div class="form-group">
																<label for="subject" class="">Faculty:</label>
																<select class="form-control" name="faculty">
																	<?=select_faculty($con, $programme_type_id)?>

																</select>
															</div>
															<div class="form-group">
																<label for="subject" class="">Department:</label>
																<select class="form-control" id="department" onchange="load_programme()" name="department_id">
																	<option value="0">--Select Department--</option>
																	<?=select_department($con, $department_id)?>
																</select>
															</div>
															<div class="form-group">
																<label for="subject" class="">Programme:</label>
																<select class="form-control" name="programme_id" id="programme_id">
																	<?=select_programme($con, $programme_id)?>

																</select>
															</div>
															<div class="form-group">
																<label for="subject" class="">Title:</label>
																<input type="text" name="title" value="<?=$title;?>" class="form-control" placeholder="Enter Title">
															</div>
															<div class="form-group">
																<label for="subject" class="">Description:</label>
																<textarea name="description" rows="4" cols="80" class="form-control"><?=$description;?></textarea>
															</div>
															<div class="form-group">
																<label for="subject" class="">Amount:</label>
																<input type="text" name="amount" value="<?=$amount;?>" class="form-control" placeholder="Enter Amount">
															</div>
															<div class="form-group">
																<label for="subject" class="">Partly Amount:</label>
																<input type="text" name="partly_amount" value="<?=$partly_amount;?>" class="form-control" placeholder="Enter Partly Amount">
															</div>
															<div class="form-group">
																<label for="subject" class="">Total Amount:</label>
																<input type="text" name="total_amount" value="<?=$total_amount;?>" class="form-control" placeholder="Enter Total Amount">
															</div>
															<div class="form-group">
																<label for="subject" class="">Status:</label>
																<select class="form-control" name="status">
																	<?=select_user_status($con, $status)?>

																</select>
															</div>
															<div class="btn-group margin-top-20 " id="saving_register" >
																<center>
																	<button
																	class="btn btn-primary btn-sm"><i
																		class="fa fa-check"></i> Submit</button>
																		<a href="set_app_fee" type="submit" class="btn btn-warning btn-sm" name="button"><i
																			class="fa fa-times"></i>Cancel</a>
																	</center>

															</div>
															<div id="app_fee_error">
									            </div>
														</form>
                          </div>
													<script type="text/javascript">
							                 $(document).ready(function(e){



							                $("#edit_app_fee_setup").submit(function(event){
							                  event.preventDefault(); //prevent default action
							                  var post_url = "php/finance/edit_app_fee_setup.php"; //get form action url
							                  var request_method = $(this).attr("method"); //get form GET/POST method

							                  $("#app_fee_error").html('<div style="margin-top:10px"><center>Updating, please wait...<br/><img src="assets/images/ajax-loader1.gif" width="10%"/></center></div>');

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
							                        window.location.href = "dashboard?hubs=app_fee_setup&Successfully Updated";
							                      }else{
												  swal(response);
							                      $("#app_fee_error").html('');


							                      }
							                    });

							                });
							            });
													function load_programme(){




				                  			var id = document.getElementById("department").value;

				                  			//alert(id);

				                  			$.post('../../php/load_programme.php',{id:id},
				                  			function(response,status){

				                  			document.getElementById("programme_id").innerHTML =response;

				                  			});
				                  }
							                </script>
                        </div>
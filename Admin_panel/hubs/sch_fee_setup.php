<br><br>
<div class="row">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-6">
                              <div class="btn-group">
                                <a href="" data-toggle="modal" data-target="#myModal" id="addRow" class="btn btn-info" >
                                  Add New <i class="fa fa-plus"></i>
                                </a>
                              </div>
                            </div>
                            
                          </div>
                          <div class="col-md-12">
                            <br><br>
                            <?php echo get_all_set_school_fee($con, $session, $st=1);?>
                          </div>
                        </div>

<!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Add School Fee</h4>
                </div>
                <div class="modal-body">
                  <div class="inbox-body no-pad">

															<div class="compose-mail">
																<form method="post" id="add_sch_fee_setup">
																	<div class="form-group">
																		<label for="to" class="">Type:</label>
																		<select class="form-control" name="school">
																			<?=select_school($con, $id=0)?>

																		</select>

																	</div>

																	<div class="form-group">
																		<label for="subject" class="">Faculty:</label>
																		<select class="form-control" name="faculty">
																			<?=select_faculty($con, $id=0)?>

																		</select>
																	</div>
																	<div class="form-group">
																		<label for="subject" class="">Department:</label>
																		<select class="form-control" id="department" onchange="load_programme()" name="department_id">
                                      <option value="0">--Select Department--</option>
                                      <?=select_department($con, $id='0')?>
																		</select>
																	</div>
																	<div class="form-group">
																		<label for="subject" class="">Programme:</label>
																		<select class="form-control" name="programme_id" id="programme_id">
																			<?=select_programme($con, $id=0)?>

																		</select>
																	</div>
																	<div class="form-group">
																		<label for="subject" class="">Title:</label>
																		<input type="text" name="title" value="" class="form-control" placeholder="Enter Title">
																	</div>
																	<div class="form-group">
																		<label for="subject" class="">Description:</label>
																		<textarea name="description" rows="4" cols="80" class="form-control"></textarea>
																	</div>
																	<div class="form-group">
																		<label for="subject" class="">Amount:</label>
																		<input type="text" name="amount" value="" class="form-control" placeholder="Enter Amount">
																	</div>
																	<div class="form-group">
																		<label for="subject" class="">Partly Amount:</label>
																		<input type="text" name="partly_amount" value="" class="form-control" placeholder="Enter Partly Amount">
																	</div>
																	<div class="form-group">
																		<label for="subject" class="">Total Amount(Indigene):</label>
																		<input type="text" name="total_amount" value="" class="form-control" placeholder="Enter Total Amount">
																	</div>
                                  <div class="form-group">
																		<label for="subject" class="">Total Amount(Non Indigene):</label>
																		<input type="text" name="total_non_amount" value="" class="form-control" placeholder="Enter Total Amount">
																	</div>
                                  <div class="form-group">
																		<label for="subject" class="">Level:</label>
																		<select class="form-control" name="level">
																			<?=select_level($con, $id=0)?>
																		</select>
																	</div>
                                  <div class="form-group">
                                    <label for="subject" class="">Semester:</label>
                                    <select class="form-control" name="semester">
                                      <?=select_semester($con, $id=0)?>

                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="subject" class="">Payment For:</label>
                                    <select class="form-control" name="payment_for">
                                      <option value="0">---Select---</option>
                                      <option value="1">Fresh School Fee</option>
                                      <option value="2">Returning School Fee</option>

                                    </select>
                                  </div>
																	<div class="form-group">
																		<label for="subject" class="">Status:</label>
																		<select class="form-control" name="status">
																			<?=select_user_status($con, $id=0)?>

																		</select>
																	</div>
																	<div class="btn-group margin-top-20 " id="saving_register">
																		<button
																			class="btn btn-primary btn-sm margin-right-10"><i
																				class="fa fa-check"></i> Submit</button>

																	</div>
                                  <div id="schfee_error">
    									            </div>
																</form>
															</div>
														</div>
                </div>
                <script type="text/javascript">
                $(document).ready(function(e){



               $("#add_sch_fee_setup").submit(function(event){
                 event.preventDefault(); //prevent default action
                 var post_url = "php/finance/add_sch_fee_setup.php"; //get form action url
                 var request_method = $(this).attr("method"); //get form GET/POST method

                 $("#login_out").html('<div style="margin-top:10px"><center>Adding details, please wait...<br/><img src="assets/images/ajax-loader1.gif" width="10%"/></center></div>');

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
                       window.location.href = "dashboard?hubs=sch_fee_setup&Successfully Added";
                     }else{
                       swal(response);
                     $("#schfee_error").html('');


                     }
                   });

               });
           });
                  function delete_school(id)
                  {
                    if(confirm("Do you  really want to proceed?"))
                     {
                       $.post("php/finance/delete_sch_fee_setup.php",{id:id},

                        function(response,status)
                        {
                          swal(response)
                          window.setTimeout(link,2000);
                        });
                     }
                  }

                  function load_programme(){




                  			var department_id = document.getElementById("department").value;

                  			//alert(id);

                  			$.post('php/load_programme.php',{department_id:department_id},
                  			function(response,status){

                  			document.getElementById("programme_id").innerHTML =response;

                  			});
                  }

                  function link(){
                    location.reload();
                  }
                </script>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
              </div>
            </div>
            </div>
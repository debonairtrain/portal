  <br/>
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
                           <div class="data-tables col-md-12">
                              <br><br>
                            <?php echo get_all_set_app_fee($con, $session, $st=1);?>
                                   
                             </div>
                            

                        </div>
                        
                        
<!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Add Application Fee</h4>
                </div>
                <div class="modal-body">
                  <div class="inbox-body no-pad">

															<div class="compose-mail">
																<form method="post" id="add_app_fee_setup">
																	<div class="form-group">
																		<label for="to" class="">School:</label>
																		<select class="form-control" name="school">
																			<?=get_all_school($con)?>

																		</select>

																	</div>

																	<div class="form-group">
																		<label for="subject" class="">Faculty:</label>
																		<select class="form-control" name="faculty">
																			<?=get_all_faculty($con)?>

																		</select>
																	</div>
																	<div class="form-group">
																		<label for="subject" class="">Department:</label>
																		<select class="form-control" id="department" onchange="load_programme()" name="department_id">
                                                                          <option value="0">--Select Department--</option>
                                                                          <?=get_all_departments($con, $id='0')?>
                                    									</select>
																	</div>
																	<div class="form-group">
																		<label for="subject" class="">Programme:</label>
																		<select class="form-control" name="programme_id" id="programme_id">
																			<?//=select_programme($con, $id=0)?>

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
																		<label for="subject" class="">Total Amount:</label>
																		<input type="text" name="total_amount" value="" class="form-control" placeholder="Enter Total Amount">
																	</div>
																	<div class="form-group">
																		<label for="subject" class="">Status:</label>
																		<select class="form-control" name="status">
																			<?=select_user_status($con)?>

																		</select>
																	</div>
																	<div class="btn-group margin-top-20 " id="saving_register">
																		<button
																			class="btn btn-primary btn-sm margin-right-10"><i
																				class="fa fa-check"></i> Submit</button>

																	</div>
                                  <div id="app_fee_error">
    									            </div>
																</form>
															</div>
														</div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
              </div>
            </div>
            </div>
            <!-- end app-container -->
            
            <script type="text/javascript">
                $(document).ready(function(e){



               $("#add_app_fee_setup").submit(function(event){
                 event.preventDefault(); //prevent default action
                 var post_url = "php/finance/add_app_fee_setup.php"; //get form action url
                 var request_method = $(this).attr("method"); //get form GET/POST method

                 $("#app_fee_error").html('<div style="margin-top:10px"><center>Login, please wait...<br/><img src="assets/images/ajax-loader1.gif" width="10%"/></center></div>');

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
                       window.location.href = "dashboard?hubs=app_fee_setup&Successfully Added";
                     }else{
                       swal(response);
                     $("#app_fee_error").html('');


                     }
                   });

               });
           });
                  function delete_set_appfee(id)
                  {
                      //alert("welcome");
                    if(confirm("Do you  really want to proceed?"))
                     {
                       $.post("php/finance/delete_app_fee_setup.php",{id:id},

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
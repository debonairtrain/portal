<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Settings and Maintenance</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item active">Add Session</li>
</ul>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
  <div class="row">
                          <div class="col-md-6 col-sm-6 col-6">
                            <div class="btn-group">
                              <a href="dashboard?hubs=sessions" id="addRow" class="btn btn-warning" >
                                Go Back <i class="fa fa-plus"></i>
                              </a>
                            </div>

                          </div>
                          <div class="col-md-12">
																<form method="post" id="add_session">
																	<div class="form-group">
																		<label for="to" class="">Title:</label>
																		<input type="text" name="title" class="form-control" value="">

																	</div>

																	<div class="form-group">
																		<label for="subject" class="">Description:</label>
																		<textarea name="description" rows="8" cols="80" class="form-control"></textarea>
																	</div>


																	<center><div class="btn-group margin-top-20" id="add_session">
																		<button
																			class="btn btn-info btn-sm margin-right-10"><i
																				class="fa fa-check"></i> Submit</button> &nbsp; &nbsp;
																		<a href="dashboard?hubs=sessions"
																			class="btn btn-warning"><i
																				class="fa fa-times"></i>
																			Cancel</a>
																	</div></center>
                                  <div id="login_out">

                                  </div>
																</form>
															</div>
                  </div>
                  <script type="text/javascript">
                       $(document).ready(function(e){



                      $("#add_session").submit(function(event){
                        event.preventDefault(); //prevent default action
                        var post_url = "php/add_session.php"; //get form action url
                        var request_method = $(this).attr("method"); //get form GET/POST method

                        $("#login_out").html('<div style="margin-top:10px"><center>Processing, please wait...<br/><img src="assets/images/ajax-loader1.gif" width="10%"/></center></div>');

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
                              window.location.href = "dashboard?hubs=sessions&Successfully Added";
                            }else{

                            $("#login_out").html(response);


                            }
                          });

                      });
                  });

                      </script>
</div>
</div>
</div>
</div>

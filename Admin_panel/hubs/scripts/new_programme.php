<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Manage CMS</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item active">New Programme</li>
</ul>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
  <div class="row">
                          <div class="card-body ">
                            <form action="#" method="post" id="add_programme">
                      <div class="form-group col-md-12">
											<label for="email">School:</label>
                      <select class="form-control select21" id="school"
                              title="Select School..." name="school_id">
                          <?php echo select_school($con,$school_id=0);?>

                      </select>
										  </div>
                      <div class="form-group col-md-12">
											<label for="email">Faculty:</label>
                      <select class="form-control select21" id="school"
                              title="Select School..." name="faculty_id">
                          <?php echo select_faculty($con,$faculty_id=0);?>

                      </select>
										  </div>
                      <div class="form-group col-md-12">
											<label for="email">Department:</label>
                      <select class="form-control select21" id="school"
                              title="Select School..." name="department_id">
                          <?php echo select_department($con,$department_id=0);?>

                      </select>
										  </div>
                      <div class="form-group col-md-12">
                      <label for="email">Title:</label>
                      <input type="text" name="title" placeholder="Title" class="form-control" value=""  required  >
                      </div>
                      <div class="form-group col-md-12">
                      <label for="email">Code:</label>
                      <input type="text" name="code" placeholder="Code" class="form-control" value=""  required  >
                      </div>
                      <div class="form-group col-md-12">
											<label for="email">level:</label>
                      <select class="form-control" name="level">
                        <?php echo select_level($level);?>
                      </select>
										  </div>
                      <div class="form-group col-md-12">
											<label for="email">Required Subjects:</label>
											<textarea name="required" class="form-control" rows="8" cols="80"></textarea>
										  </div>
                      <div class="form-group col-md-12">
                      <label for="email">Optional Subjects:</label>
                      <textarea name="optional" class="form-control" rows="8" cols="80"></textarea>
                      </div>
                      <div class="form-group col-md-12">
                      <label for="email">Optional Counts:</label>
                      <input type="number" name="optional_count" placeholder="Optional Counts" class="form-control" value=""   >
                      </div>
                      <div class="form-group col-md-12">
											<label for="email">Duration:</label>
											<input type="text" name="duration" placeholder="Duration" class="form-control" value=""  required  >
										  </div>
                      <div class="form-group col-md-12">
											<label for="email">Maximum Duration:</label>
											<input type="text" name="max_duration" placeholder="Maximum Duration" class="form-control" value=""  required  >
										  </div>
                      <div class="form-group col-md-12">
											<label for="email">Maximum Credit Load:</label>
											<input type="text" id="maximum_credit_load" name="max_credit" placeholder="Maximum Credit Load" class="form-control" value=""  required  >
										  </div>
                      <div class="form-group col-md-12">
											<label for="email">Minimum Credit Load:</label>
											<input type="text" id="minimum_credit_load" name="min_credit" placeholder="Minimum Credit Load" class="form-control" value=""  required  >
										  </div>
                      <div class="form-group col-md-12">
											<label for="email">Status:</label>
                      <select class="form-control" name="status">
                        <?php echo select_user_status($real_)?>
                      </select>
										  </div>
											<div class="form-group col-md-12">
                      <label for="email">Description:</label>
                      <textarea name="description" class="form-control" rows="8" cols="80"></textarea>
                      </div>

						<div id="saving_register" >
							<center><button type="submit" class="btn btn-info" >Submit </button>
							<a href="dashboard?hubs=programmes" type="submit" class="btn btn-warning" >Calcel </a></center>
						</div>
            <div id="login_out">
            </div>

          </form>
          <script type="text/javascript">
               $(document).ready(function(e){



              $("#add_programme").submit(function(event){
                event.preventDefault(); //prevent default action
                var post_url = "php/add_programme.php"; //get form action url
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
											window.location.href = "dashboard?hubs=programmes&Successfully Added";
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
</div>
</div>

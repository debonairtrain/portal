<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Manage CMS</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item active">Add School</li>
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
                      <form action="#" method="post" id="add_school">
                      <div class="form-group row">
              				<label for="title" class="col-sm-2 col-form-label text-right">Title :
              				</label>
              					<div class="col-sm-10">
              						<input id="title" name="title" type="text"
              						placeholder="Title " class="form-control required" required />
              					</div>
                      </div>
                      <div class="form-group row">
              				<label for="code" class="col-sm-2 col-form-label text-right">Code :
              				</label>
              					<div class="col-sm-10">
              						<input id="Code" name="code" type="text"
              						placeholder="Code " class="form-control required" required />
              					</div>
                      </div>
                      <div class="form-group row">
              				<label for="email" class="col-sm-2 col-form-label text-right">Email
              				</label>
              					<div class="col-sm-10">
              						<input id="email" name="email" type="text"
              						placeholder="email " class="form-control required" />
              					</div>
                      </div>


              			 <div class="form-group row">
              				<label for="location" class="col-sm-2 col-form-label text-right">Location
              				</label>
              					<div class="col-sm-10">
              						<input id="text" name="location" type="text"
              						placeholder="Location " class="form-control required"  />
              				</div>
                    </div>

            			 <div class="form-group row">
            				<label for="Phone Number" class="col-sm-2 col-form-label text-right">Phone Number
            				</label>
            					<div class="col-sm-10">
            						<input id="text" name="pn" type="text"
            						placeholder="Phone Number " class="form-control required"  />
            				</div>
                  </div>
    							<div class="form-group row">
    												<label class="col-sm-2 col-form-label text-right"> Description</label>
    									<div class="col-sm-10">
    										<textarea class="form-control" rows="2" name="description" id="comment"></textarea>
    									</div>
    							</div>
                  <div class="form-group row">
                  <label for="email" class="col-sm-2 col-form-label text-right">Status
                  </label>
                    <div class="col-sm-10">
                           <select class="form-control" name="status">
                             <?php echo select_user_status($real_='88')?>
                           </select>
                    </div>
                  </div>


						<div id="saving_register" >
							<center>
														<button type="submit" class="btn btn-info" >Submit </button>
														<a href="dashboard?hubs=schools" type="submit" class="btn btn-warning" >Calcel </a>
              </center>
						</div>
            <div id="login_out">
            </div>
          </form>
            <script type="text/javascript">
                 $(document).ready(function(e){
                $("#add_school").submit(function(event){
                  event.preventDefault(); //prevent default action
                  var post_url = "php/add_school.php"; //get form action url
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
                        window.location.href = "dashboard?hubs=schools&Successfully Added";
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

<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Manage Students</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item active">Promotion</li>
</ul>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
  <div class="row">
                          <form class="row col-md-12" method="Post" action="#" id="run_promotion">
                            <span class="alert alert-danger"><h2>Note: Start the promotion from the highst level to the lowest level.</h2> </span>
                          									<div class="form-group col-md-12">
                          											<label for="email">Current Level:</label>
                          											<select class="form-control" name="c_level" required>
                          												<?=select_level($lev=0)?>
                          											</select>
                          										  </div>
                                                <h2>Where to Promote too</h2>
                          										  <div class="form-group col-md-12">
                          											<label for="email">Level to Promote to:</label>
                          											<select class="form-control" name="level" required>
                          												<?=select_level($lev=0)?>
                          											</select>
                          										  </div>
                          										  <div class="form-group col-md-12">
                          											<label for="email">Select Session:</label>
                          											<select class="form-control" name="session" required>
                                                  <option value="0" selected disabled>--select session--</option>
                          												<?=select_session($con)?>
                          											</select>
                          										  </div>
                                                <div class="form-group col-md-12">
                          											<label for="email">Exclude Deferred Students?:</label>
                          											<select class="form-control" name="deferred" required>
                          												<option value="0" selected disabled>---select---</option>
                                                  <option value="1">Yes</option>
                                                  <option value="2">No</option>
                          											</select>
                          										  </div>
                                                <div class="" id="hidden">
                                                  <button type="submit" class="btn btn-success" name="promote">Run Promotion</button>
                                                </div>
                                                <div id="login_out">

                                                </div>

                          										</form>
                                              <script type="text/javascript">
                          														$(document).ready(function(e){
                          														$("#run_promotion").submit(function(event){
                          														event.preventDefault(); //prevent default action
                          														var post_url = "php/students/run_promotion.php"; //get form action url
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
                          														//swal(response);
                          														if(response==1){
                          															alert('Updated Successful');
                          															window.setTimeout(link,2000);
                          														}else{
                          															alert(response);
                          														//$("#login_out").html(response);


                          														}
                          														});

                          														});
                          														});

                          												function link(){
                          												location.reload();
                          												}
                          										</script>
                        </div>
</div>
</div>
</div>
</div>

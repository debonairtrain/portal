<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Manage CMS</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item active">Edit Faculty</li>
</ul>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
  <div class="row">
                          <?php
                          if (isset($_GET['id'])) {
                               $id = $_GET['id'];
                            }
                            $select="SELECT * FROM faculties WHERE id='$id' ";
                            $sql_select = mysqli_query($con,$select);
                            $num_rows=mysqli_num_rows($sql_select);
                            if($num_rows > 0){
                            $sn=1;
                            while($row=mysqli_fetch_array($sql_select)){

                               $id=$row['id'];
															 $school_id=$row['school_id'];
                               $title=$row['title'];
                               $code=$row['code'];
                               $description=$row['description'];
                               $real_=$row['real_'];
                               $date_added=$row['date_added'];
                               $date_modified=$row['date_modified'];
                               if($real_=='0')
                                   {
                                     $status = '<span class="btn btn-info">Published</span>';
                                   }else if($real_=='1') {
                                     $status = '<span class="btn btn-primary">Unpublished</span>';
                                   }else {
                                     $status = '<span class="btn btn-danger">Not Active</span>';
                                   }
                            }
                            }else {
                            echo '<td colspan="7">No record found</td>';
                            }

                          ?>
                          <div class="card-body ">
                            <form action="" method="post" id="edit_faculty">
                              <input type="hidden" name="id" value="<?php echo $id;?>">
                      <div class="form-group row">
              				<label for="title" class="col-sm-2 col-form-label text-right">School :
              				</label>
              					<div class="col-sm-10">
													<select class="form-control" name="school_id">
															<?php echo select_faculty($con,$school_id)?>
													</select>
												</div>
                      </div>
											<div class="form-group row">
              				<label for="title" class="col-sm-2 col-form-label text-right">Title :
              				</label>
              					<div class="col-sm-10">
              						<input id="title" name="title" type="text"
              						placeholder="Title " value="<?php echo $title;?>" class="form-control required" required />
              					</div>
                      </div>
                      <div class="form-group row">
              				<label for="code" class="col-sm-2 col-form-label text-right">Code :
              				</label>
              					<div class="col-sm-10">
              						<input id="Code" name="code" type="text"
              						placeholder="Code " value="<?php echo $code;?>" class="form-control required" required />
              					</div>
                      </div>
                      <div class="form-group row">
              				<label for="email" class="col-sm-2 col-form-label text-right">Status
              				</label>
              					<div class="col-sm-10">
              					       <select class="form-control" name="status">
                                 <?php echo select_user_status($real_)?>
                               </select>
              					</div>
                      </div>
    							<div class="form-group row">
    												<label class="col-sm-2 col-form-label text-right"> Description</label>
    									<div class="col-sm-10">
    										<textarea class="form-control" rows="2" name="description" id="comment">
                        <?php echo $description;?></textarea>
    									</div>
    							</div>



						<div id="saving_register" >
						<center><button type="submit" class="btn btn-info" >Submit </button>
							<a href="dashboard?hubs=faculties" type="submit" class="btn btn-warning" >Calcel </a></center>
						</div>
            <div id="login_out" class="col-md-12 text-center text-danger mt-2">
            </div>
          </form>
            <script type="text/javascript">
                 $(document).ready(function(e){



                $("#edit_faculty").submit(function(event){
                  event.preventDefault(); //prevent default action
                  var post_url = "php/edit_faculty.php"; //get form action url
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
                      $("#login_out").html(response);
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

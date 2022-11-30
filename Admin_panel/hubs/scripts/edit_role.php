<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Manage Users</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item active">Edit Role</li>
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

													$q = "SELECT * FROM  desgnations WHERE id = '$id'";
													$r = mysqli_query($con, $q);

													if(mysqli_num_rows($r) > 0)
													{//show table
														while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
														{
															$id = $row['id'];
															$title = $row['title'];
															$description = $row['description'];
															$status = $row['status'];
														}
													}
													else
													{//show the msg

															echo
																	 '<div class="alert alert-danger alert-dismissable col-md-12">
																	<button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
																	<img src="../../../images/info.png" />&nbsp;&nbsp; No record found in the system.
																	 </div>';


													}
?>

                          <form class="row" method="Post" action="#" id="edit_user_role">

                      <div class="form-group col-md-12">
                      <label for="email">Title:</label>
                      <input type="text" name="title" placeholder="Title" class="form-control" value="<?=$title;?>"  required  >
                      </div>
											<input type="hidden" name="user_id" value="<?=$id;?>">
											<div class="form-group col-md-12">
											<label for="pwd">Description:</label>
											<textarea name="description" class="form-control" rows="8" cols="80"><?=$description;?></textarea>
											</div>
                      <div class="form-group col-md-12">
                      <label for="pwd">Status:</label>
                      <select class="form-control" name="status" id="user_status" required>
                         <?php echo select_user_status($status);?>
                      </select>
                      </div>
                      <center>
                      <div id="button">
                        <center>
                        <button class="btn btn-info btn-xs"><span class="fa fa-pencil"> Submit</span> </button>
                      <a href="roles" class="btn btn-warning btn-xs" style="margin-left:20px; margin-bottom:10px;"><span class="fa fa-times"> Cancel</span> </a>

                      </div>
                        </center>
                      <div id="login_out" class="col-12">

                      </div>
    </form>
                        </div>
                        <script type="text/javascript">
                        $(document).ready(function(e){
                       $("#edit_user_role").submit(function(event){
                         event.preventDefault(); //prevent default action
                         var post_url = "php/edit_user_role.php"; //get form action url
                         var request_method = $(this).attr("method"); //get form GET/POST method
                         $("#login_out").html('<div style="margin-top:10px"><center>Processing, please wait...<br/><img src="assets/images/ajax-loader1.gif" width="10%"/></center></div>');
                         var form_data = new FormData(this); //Creates new FormData objct
                           $.ajax({
                             url : post_url,
                             type: request_method,
                             data : form_data,
                             contentType: false,
                             cache: false,
                             processData:false
                           }).done(function(response){ //
                             if(response==1){
                               window.location.href = "dashboard?hubs=roles&Successfully Updated";
                             }else{
                             $("#login_out").html(response);
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

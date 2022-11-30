<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Manage users</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item active">Add Role</li>
</ul>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
  <div class="row">
                            <form class="row" method="Post" action="#" id="add_user_role">
                            <div class="form-group col-md-12">
                        <label for="email">Title:</label>
                        <input type="text" name="title" placeholder="Title" class="form-control" value=""  required  >
                        </div>
                        <div class="form-group col-md-12">
                        <label for="email">Descriptions:</label>
                        <textarea name="description" rows="8" cols="80" class="form-control"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                        <label for="email">Status:</label>
                        <select class="form-control" name="status">
                          <option value="0">-- Choose Status</option>
                          <?php echo select_user_status($id);?>
                        </select>
                        </div>



                        <center>
                        <div id="button">
                          <center>
                          <button class="btn btn-info btn-xs"><span class="fa fa-plus"> Submit</span> </button>
                        <a href="dashboard?hubs=roles" class="btn btn-warning btn-xs" ><span class="fa fa-times"> Cancel</span> </a>

                        </div>
                          </center>
                        <div id="login_out" class="col-12">

                        </div>
  </form>
                          </div>

  <script type="text/javascript">
  $(document).ready(function(e){



  $("#add_user_role").submit(function(event){
   event.preventDefault(); //prevent default action
   var post_url = "php/add_role.php"; //get form action url
   var request_method = $(this).attr("method"); //get form GET/POST method

   $("#login_out").html('<div style="margin-top:10px"><center>Saving data, please wait...<br/><img src="assets/images/ajax-loader1.gif" width="10%"/></center></div>');
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
         window.location.href = "dashboard?hubs=roles&Successfully Added";
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

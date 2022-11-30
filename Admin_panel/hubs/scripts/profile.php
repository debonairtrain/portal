<div class="page-header">
<div class="row">
<div class="col">
<h3 class="page-title"><?php echo $admin_full_name; ?>'s Profile</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
</ul>
</div>
</div>
</div>

<div class="row">
<div class="col-md-12">
<div class="profile-header">
<div class="row align-items-center">
<div class="col-auto profile-image">
<a href="#">
<?php echo $admin_imagess; ?>
</a>
</div>
<div class="col ms-md-n2 profile-user-info">
<h4 class="user-name mb-0"><?php echo $admin_full_name; ?></h4>
<h6 class="text-tel"><i class="fas fa-box"></i> <?php echo $admin_staff_id; ?></h6>
<div class="user-Location"><i class="fas fa-map-marker-alt"></i> <?php echo $admin_email; ?></div>
<div class="about-text"><i class="fas fa-phone"></i> <?php echo $admin_phone_no; ?></div>
</div>
<div class="col-auto profile-btn">
<a href="#" class="btn btn-primary">
Edit
</a>
</div>
</div>
</div>
<div class="profile-menu">
<ul class="nav nav-tabs nav-tabs-solid">
<li class="nav-item">
<a class="nav-link active" data-bs-toggle="tab" href="#per_details_tab">About</a>
</li>
<li class="nav-item">
<a class="nav-link" data-bs-toggle="tab" href="#password_tab">Password</a>
</li>
</ul>
</div>
<div class="tab-content profile-tab-cont">

<div class="tab-pane fade show active" id="per_details_tab">

<div class="row">
<div class="col-lg-9">
<div class="card">
<div class="card-body">
<h5 class="card-title d-flex justify-content-between">
<span>Personal Details</span>
<a class="edit-link" data-bs-toggle="modal" href="#edit_personal_details"><i class="far fa-edit me-1"></i>Edit</a>
</h5>
<div class="row">
<p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Name</p>
<p class="col-sm-9"><?php echo $admin_full_name; ?></p>
</div>
<div class="row">
<p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">State</p>
<p class="col-sm-9"><?php echo $admin_state; ?></p>
</div>
<div class="row">
<p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Email ID</p>
<p class="col-sm-9"><a href="mailto:<?php echo $admin_email; ?>" class="__cf_email__" data-cfemail="9cf6f3f4f2f8f3f9dcf9e4fdf1ecf0f9b2fff3f1">[<?php echo $admin_email; ?>]</a></p>
</div>
<div class="row">
<p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Mobile</p>
<p class="col-sm-9"><?php echo $admin_phone_no; ?></p>
</div>
<div class="row">
<p class="col-sm-3 text-muted text-sm-end mb-0">Address</p>
<p class="col-sm-9 mb-0"><?php echo $admin_address; ?><br>
</div>
</div>
</div>
</div>
<div class="col-lg-3">

<div class="card">
<div class="card-body">
<h5 class="card-title d-flex justify-content-between">
<span>Account Status</span>
<a class="edit-link" href="#"><i class="far fa-edit me-1"></i> Edit</a>
</h5>
<button class="btn btn-success" type="button"><i class="fe fe-check-verified"></i> Active</button>
</div>
</div>


</div>
</div>

</div>


<div id="password_tab" class="tab-pane fade">
<div class="card">
<div class="card-body">
<h5 class="card-title">Change Password</h5>
<div class="row">
<div class="col-md-12 col-lg-12">
<form method="post" id="update_password">
<div class="form-group">
<label>Old Password</label>
<input type="password" name="o_password" class="form-control">
</div>
<div class="form-group">
<label>New Password</label>
<input type="hidden" name="staff_id" value="<?php echo $admin_id; ?>">
<input type="password" name="n_password" class="form-control">
</div>
<div class="form-group">
<label>Confirm Password</label>
<input type="password" name="c_password" class="form-control">
</div>
<button class="btn btn-primary" type="submit">Save Changes</button>
<div class="text-danger col-md-12 mt-3 mb-3 text-center" id="login_out">

</div>
</form>
<script type="text/javascript">
 $(document).ready(function(e){
$("#update_password").submit(function(event){
	event.preventDefault(); //prevent default action
	var post_url = "php/update_password.php"; //get form action url
	var request_method = $(this).attr("method"); //get form GET/POST method

	$("#login_out").html('<div style="margin-top:10px"><center>Updating Password, please wait...<br/><img src="assets/images/ajax-loader1.gif" width="10%"/></center></div>');

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
</div>
</div>

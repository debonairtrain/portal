<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Manage Verification</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item active">Verify Admission</li>
</ul>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
  <div class="row">
                          <br><br> <br>

    <li class="list-group-item btn btn-info col-md-12" style="text-align:center;">
        Admission Status Verification
    </li>

<form class="col-md-12" action="#" method="post">
    <div class="col-md-12 " style="display:flex; margin-top:50px;">

      <div class="form-group col-md-10">
      <input type="text" class="form-control" name="app_number" placeholder="Search Invoice-Id">
      </div>
      <button type="submit" id="action" name="search" style="height:6vh;" class="btn btn-info">Submit</button>

    </div>
    <div id="show_result">

    </div>

    </form>
		<?php
			if(isset($_POST['search']))
			{
				include_once('db_connect/db.php');
				$session = get_current_session($con, $id='1');
				@$app_number = mysqli_real_escape_string($con, $_POST['app_number']);

					//verify admission status
					$verify = mysqli_query($con, "SELECT applicant_id,admission_status FROM applicant_profile WHERE application_number='$app_number'
																AND session_id='$session'");
						if($verify){
							$sqlmg_row=mysqli_num_rows($verify);
								if($sqlmg_row >0){
									$row=mysqli_fetch_assoc($verify);
										$admission_status=$row['admission_status'];
										if($admission_status=='1'){
											echo '<div class="row col-md-12">
									      <div class="col-md-10">
									        <a href="dashboard?hubs=view_applicant&api='.base64_encode($row['applicant_id']).'" target="_new" class="btn btn-success" name="view">View Profile</a>
									        <button type="submit" class="btn btn-success" name="view">Print Admission Letter</button>
									      </div>
									    </div>';
										}else {
											echo '<span class="alert alert-danger col-12 close" data-dismiss="alert">Yet to be admitted.</span>';
										}
									}
						}else {
							echo '<span class="alert alert-danger col-12 close" data-dismiss="alert">Application Number does not exist.</span>';
						}
			}
		?>

                        </div>
</div>
</div>
</div>
</div>

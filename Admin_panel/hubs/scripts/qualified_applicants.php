<?php
if (isset($_POST['clear_one'])) {

  $appp_id = $_POST['app_id'];
  //admittnig single candidate
  if(admit_applicant($appp_id)){
        $msg = '<h4 class="alert alert-success">Admitted Successfully</h4>';
  }else{
    $msg = '<h4 class="alert alert-danger">Sorry, Not Admitted</h4>';

  }

}elseif (isset($_POST['clear_all'])) {
  //admittnig multiple candidates
  $app_id_arr = $_SESSION['app_id_arr'];
  $c = 0;
  for ($i=0; $i < count($app_id_arr) ; $i++) {
    //echo $app_id_arr[$i];
    admit_applicant($app_id_arr[$i]);
    $c++;

  }

  if($c > 0){
    $msg = '<h4 class="alert alert-success">Admitted Successfully</h4>';
  }else{
    $msg = '<h4 class="alert alert-danger">Sorry, Not Admitted</h4>';
  }
  unset($_SESSION['app_id_arr']);

}


 ?>
<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Manage Admission</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item active">Qualified Applicants</li>
</ul>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="card card-table">
<div class="card-body">
<div class="table-responsive">
  <?php
                         echo get_records_applicants_not_qualify($con, $session, $qi = 1 );
                       ?>
</div>
</div>
</div>
</div>
</div>

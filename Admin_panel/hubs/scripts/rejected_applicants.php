<?php $rnd_hash =  md5(rand(0,100)); ?>
<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Manage Admission</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item active">All Rejected Applicants</li>
</ul>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
  <div class="card card-table">
  <div class="card-body">
  <div class="table-responsive">
   <hr />


<?php  echo view_all_admitted_applicants_list($con, $session, $admitted = '3');?>


</div>
</div>
</div>
</div>
</div>

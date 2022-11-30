<?php $rnd_hash =  md5(rand(0,100)); ?>
<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Manage Admission</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item active">Applicants Give Support</li>
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
                         echo view_all_applicants_per_session($con);
                       ?>
</div>
</div>
</div>
</div>
</div>

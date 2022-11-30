<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Manage Admission</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item active">Admitted Applicants</li>
</ul>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
  <div class="col-md-12">
    <button class="btn btn-info col-md-3" title="Total Applicants"> Batch A Admitted Applicants  <i class="badge">
                          <?php echo get_total_admitted_applicants_batch_1($con, $session); ?></i></button>

                           <button class="btn btn-info col-md-3"title="Total Applicants">Batch B Admitted Applicants<i class="badge">
                          <?php echo get_total_admitted_applicants_batch_2($con, $session); ?></i></button>

                           <button class="btn btn-info col-md-3" title="Total Applicants">Batch C Admitted Applicants<i class="badge">
                          <?php echo get_total_admitted_applicants_batch_3($con, $session); ?></i></button>
        <a  href="dashboard?hubs=view_all_admitted_applicants&id=<?php echo md5('me').'&ses='.$session; ?>" class="btn btn-info col-md-2" data-toggle="tooltip" title="View All Admitted Applicants">All Admitted Applicants</a>
  </div>

                          <hr>

                    
                        <?php echo get_programme_list_admitted_applicants($con, $session);?>
</div>
</div>

<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Manage Admission</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item active">Applicants Listing</li>
</ul>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">

<div class="row">
  <div class="col-md-3">
    <button type="button" class="btn btn-warning" name="button">All Applicants <span class="badge badge-danger"><?php echo get_total_applicants($con,$session);?></span> </button>
  </div>
  <div class="col-md-5">
    <button type="button" class="btn btn-warning" name="button">All Admitted Applicants <span class="badge badge-danger"><?php echo get_total_admitted_applicants($con,$session);?></span> </button>
  </div>
</div>
<br>
  <div class="col-md-12">
    <?php
      echo get_programme_list($con, $session, $id = 1);
    ?>
  </div>

</div>
</div>
</div>
</div>

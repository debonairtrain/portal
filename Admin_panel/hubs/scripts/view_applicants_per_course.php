<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Manage Admission</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item active">View Applicant Per Course</li>
</ul>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
  <?php
														//collect the passed
				 if(isset($_GET['pt']))
				 {
					$pt =  $_GET['pt'];
				 }


					//collect the passed
				 if(isset($_GET['p']))
				 {
					$p =  $_GET['p'];
				 }

				 //collect the passed
			 if(isset($_GET['ses']))
			 {
				 $ses =  $_GET['ses'];
			 }

			 echo view_applicants_list_per_programmes($con, $ses,$p); // pt programm type , p programme ?>
</div>
</div>
</div>
</div>

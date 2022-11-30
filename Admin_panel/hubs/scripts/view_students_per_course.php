<?php $rnd_hash =  md5(rand(0,100)); ?>
<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Manage Students</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item active">All Students Summary</li>
</ul>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="card card-table">
<div class="card-body">
<div class="table-responsive">
  <div class="row">
													<?php



													//collect the passed
								    if(isset($_GET['yr']))
								    {
								     $yr =  $_GET['yr'];

								    }else{
								      header('location: dashboard?hubs=all_students');
								    }


				   //collect the passed
				  if(isset($_GET['p']))
				  {
					 $p =  $_GET['p'];
				  }



			  ?>
				 <?php echo view_students_list_per_programmes($con,$p,$yr); ?>
                        </div>
</div>
</div>
</div>
</div>
</div>

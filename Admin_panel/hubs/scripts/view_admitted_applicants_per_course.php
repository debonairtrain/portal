<?php $rnd_hash =  md5(rand(0,100)); ?>
<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Manage Admission</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item active">All Admitted Applicants Per Course</li>
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

    				//collect the session
    			 if(isset($_GET['ses']))
    			 {
    				$session =  $_GET['ses'];
    			 }

    	echo view_admitted_applicants_list_per_programmes($con, $session, $p, $admitted = '1'); // pt programm type , p programme ?>
</div>
</div>
</div>
</div>
</div>

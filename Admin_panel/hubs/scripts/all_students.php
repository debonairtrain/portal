<?php $rnd_hash =  md5(rand(0,100)); ?>
<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Manage Students</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item active">All Students</li>
</ul>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">


              <a href="dashboard?hubs=view_all_students" type="button" class="btn btn-info" name="button">All Students <span class="badge badge-danger"><?php echo get_total_students($con,$session);?></span> </a>&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="dashboard?hubs=paid_student" type="button" class="btn btn-info" name="button">All Paid Students <span class="badge badge-danger"><?php echo get_total_paid_students($con,$session);?></span> </a>
              <hr>

                               <div class="row">
                                 <a href="dashboard?hubs=view_students_summary_all&tk=<?php echo $rnd_hash .'&lev=100&ses='.$session?>" class="btn btn-success col-md-4" style="margin:5px;" target="_parent" >Download (100 Level)</a>
                                 <a href="dashboard?hubs=view_students_summary_all&tk=<?php echo $rnd_hash .'&lev=200&ses='.$session?>" class="btn btn-info col-md-4" style="margin:5px;" target="_parent" >Download (200 Level)</a>
                                 <a href="dashboard?hubs=view_students_summary_all&tk=<?php echo $rnd_hash .'&lev=300&ses='.$session?>" class="btn btn-primary col-md-3" style="margin:5px;" target="_parent" >Download (300 Level)</a>
                                 <a href="dashboard?hubs=view_students_summary_all&tk=<?php echo $rnd_hash .'&lev=400&ses='.$session?>" class="btn btn-warning col-md-4" style="margin:5px;" target="_parent" >Download (400 Level)</a>
                                 <a href="dashboard?hubs=view_students_summary_all&tk=<?php echo $rnd_hash .'&lev=500&ses='.$session?>" class="btn btn-danger col-md-4" style="margin:5px;" target="_parent" >Download (500 Level)</a>
                                 <a href="dashboard?hubs=view_students_summary_all&tk=<?php echo $rnd_hash .'&lev=600&ses='.$session?>" class="btn btn-warning col-md-3" style="margin:5px;" target="_parent" >Download (600 Level)</a>

                               </div>
                              <br>

                              <label class="btn btn-info btn-lg col-md-12">
                                   <?php
                                       $ptd_100 = get_total_regular_ptd_sf_payment($con, $pt=1  ,$session, $lev = '100' );
                                       $ptd_200 = get_total_regular_ptd_sf_payment($con, $pt=1  ,$session, $lev = '200' );
                                       $ptd_300 = get_total_regular_ptd_sf_payment($con, $pt=1  ,$session, $lev = '300');
                                       $ptd_400 = get_total_regular_ptd_sf_payment($con, $pt=1  ,$session, $lev = '400');
                                       $ptd_500 = get_total_regular_ptd_sf_payment($con, $pt=1  ,$session, $lev = '500');
                                       $ptd_600 = get_total_regular_ptd_sf_payment($con, $pt=1  ,$session, $lev = '600');
                                   ?>
                                  <table class="table table-center">
                                     <b><h2>Payment Summary</h2></b>
                                     <tr >
                                       <th>100 LEVEL</th>
                                       <th>200 LEVEL</th>
                                       <th>300 LEVEL</th>
                                       <th>400 LEVEL</th>
                                       <th>500 LEVEL</th>
                                       <th>600 LEVEL</th>
                                     </tr>
                                     <?php

                                       echo "<tr >
                                       <th>$ptd_100</th>
                                       <th>$ptd_200</th>
                                       <th>$ptd_300</th>
                                       <th>$ptd_400</th>
                                       <th>$ptd_500</th>
                                       <th>$ptd_600</th>
                                       </tr>
                                       ";

                                     ?>
                                   </table>
                                 </label>

												<div class="col-md-12">
                        <?php echo get_programme_list_for_students_report($con, $session); ?>
											</div>
</div>
</div>
</div>
</div>

<br/><br/>
<div class="row">
                          <div class="card-body " id="bar-parent" style="overflow:auto;">

      									<a href="dashboard?hubs=view_all_students" class="btn btn-success" name="button">All Students <span class="btn btn-danger"><?php echo get_total_students($con,$session);?></span> </a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="dashboard?hubs=paid_students" type="button" class="btn btn-success" name="button">All Paid Students <span class="btn btn-danger"><?php echo get_total_paid_students($con,$session);?></span> </a>
                        <hr>
                        <br>

                               <a href="dashboard?hubs=view_students_summary_all&tk=<?php echo $rnd_hash .'&lev=100&ses='.$session?>" class="btn btn-success btn-lg" >Download (100 Level)</a>

                               <a href="dashboard?hubs=view_students_summary_all&tk=<?php echo $rnd_hash .'&lev=200&ses='.$session?>" class="btn btn-info btn-lg" >Download (200 Level)</a>


                               <a href="dashboard?hubs=view_students_summary_all&tk=<?php echo $rnd_hash .'&lev=300&ses='.$session?>" class="btn btn-primary btn-lg" >Download (300 Level)</a>
                               <a href="dashboard?hubs=view_students_summary_all&tk=<?php echo $rnd_hash .'&lev=400&ses='.$session?>" class="btn btn-warning btn-lg">Download (400 Level)</a>
                               <a href="dashboard?hubs=view_students_summary_all&tk=<?php echo $rnd_hash .'&lev=500&ses='.$session?>" class="btn btn-danger btn-lg">Download (500 Level)</a>
                               <!-----<a href="../students/view_students_summary_all?tk=<?php echo $rnd_hash .'&lev=600&ses='.$session?>" class="btn btn-warning btn-lg" target="_blank" >Download (600 Level)</a>
                                --->
                              <br>
                              <br>

                              <label class="btn btn-info btn-lg col-md-12">
                                   <?php
                                     //for regular students level
                                       $ptd_100 = get_total_regular_ptd_sf_payment($con, $pt=1  ,$session, $lev = '100' );

                                       $ptd_200 = get_total_regular_ptd_sf_payment($con, $pt=1  ,$session, $lev = '200' );
                                       $ptd_300 = get_total_regular_ptd_sf_payment($con, $pt=1  ,$session, $lev = '300');
                                       $ptd_400 = get_total_regular_ptd_sf_payment($con, $pt=1  ,$session, $lev = '400');
                                       $ptd_500 = get_total_regular_ptd_sf_payment($con, $pt=1  ,$session, $lev = '500');
                                       $ptd_600 = get_total_regular_ptd_sf_payment($con, $pt=1  ,$session, $lev = '600');
                                        

                                     //All total
                                     //$ptd_sf_total_100 = get_total_nce_sf_payment_by_level($ses, $lev = 'I');

                                    // $ptd_sf_total_200 = get_total_nce_sf_payment_by_level($ses, $lev = 'II');



                                   ?>
                                  <table class="table table-center">
                                     <b><h2>Payment Summary</h2></b>
                                     <tr >
                                       <th>100 LEVEL</th>
                                       <th>200 LEVEL</th>
                                       <th>300 LEVEL</th>
                                       <th>400 LEVEL</th>
                                       <th>500 LEVEL</th>
                                       <!---<th>600 LEVEL</th>---->
                                     </tr>
                                     <?php

                                       echo "<tr >
                                       <th>$ptd_100</th>
                                       <th>$ptd_200</th>
                                       <th>$ptd_300</th>
                                       <th>$ptd_400</th>
                                       <th>$ptd_500</th>
                                       </tr>
                                       ";

                                     ?>
                                   </table>
                                 </label>
                        <label>
                          <h3>Report per Departments</h3>
                          <h4>Click on each tab to view list of students</h4>
                        </label><br>
                        <div class="row">
                            <?php echo get_department_list_for_students_report($con, $session); ?>
                        </div>

                      </div>
                        </div>
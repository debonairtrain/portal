<br><br/>
<div class="card-body " id="bar-parent" style="overflow:auto;">

      					<a href="dashboard?hubs=view_paid_app_fee" class="btn btn-success" name="button">Application Fee <span class="btn btn-info" style="font-weight:bold"><?php echo 'N'.number_format(get_total_amount_paid_applicants($con,$session),2);?></span> </a>&nbsp;&nbsp;
                        <a href="dashboard?hubs=view_paid_accept_fee"  class="btn btn-success" name="button">Acceptance Fee <span class="btn btn-info" style="font-weight:bold"><?php echo 'N'.number_format(get_total_amount_paid_acceptance_fee($con,$session),2);?></span> </a>&nbsp;&nbsp;
                        <a href="dashboard?hubs=view_paid_school_fee" class="btn btn-success" name="button">School Fee <span class="btn btn-info" style="font-weight:bold"><?php echo 'N'.number_format(get_total_amount_paid_school_fee($con,$session),2);?></span> </a>&nbsp;&nbsp;
                        <a href="dashboard?hubs=view_paid_hostel_fee" class="btn btn-success" name="button">Hostel Fee <span class="btn btn-info" style="font-weight:bold"><?php echo 'N'.number_format(get_total_amount_paid_hostel_fee($con,$session),2);?></span> </a>&nbsp;&nbsp;
                        <hr>

                        <label>
                          <h3>Financial Report Per Department(Application Fee)</h3>
                          <h4>Click on each tab to view list of applied candidates</h4>
                        </label><br>
                          <div class="row">
                            <?php echo get_programme_list_paid($con)?>
                          </div>

                          <label>
                            <h3>Financial Report Per Department(Acceptance Fee)</h3>
                            <h4>Click on each tab to view list of applied candidates</h4>
                          </label><br>
                            <div class="row">
                              <?php echo get_programme_list_paid_accept($con)?>
                            </div>

                            <label>
                              <h3>Financial Report Per Department(School Fee)</h3>
                              <h4>Click on each tab to view list of applied candidates</h4>
                            </label><br>
                              <div class="row">
                                <?php echo get_programme_list_paid_school($con)?>
                              </div>
                        </div>
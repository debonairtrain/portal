  <br/>

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      </ol>
    </nav>
    <div class="welcome-msg pt-3 pb-4">
      <h1>Hi <span class="text-primary"><?=get_admin_fullname($con, $staff_id);?></span>, Welcome back</h1>
      <p>Great Success College of Health sciences and technology, Gwada.</p>
    </div>

    <!-- statistics data -->
    <div class="statistics">
      <div class="row">
        <div class="col-xl-6 pr-xl-2">
          <div class="row">
            <div class="col-sm-6 pr-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-4">
                <i class="lnr lnr-users"> </i>
                <h3 class="text-primary number"><?=get_total_applicants($con);?></h3>
                <p class="stat-text">Total Applicants</p>
              </div>
            </div>
            <div class="col-sm-6 pl-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-4">
                <i class="lnr lnr-users"> </i>
                <h3 class="text-secondary number"><?=get_total_students_all($con);?></h3>
                <p class="stat-text">Total Students</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 pl-xl-2">
          <div class="row">
            <div class="col-sm-6 pr-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-4">
                <i class="lnr lnr-users"> </i>
                <h3 class="text-success number"><?=get_total_admins($con);?></h3>
                <p class="stat-text">Total Admin</p>
              </div>
            </div>
            <div class="col-sm-6 pl-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-4">
                <i class="lnr lnr-users"> </i>
                <h3 class="text-danger number"><?=get_total_staffs($con);?></h3>
                <p class="stat-text">Total Staffs</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- //statistics data -->
    
    <!-- statistics data -->
    <div class="statistics">
      <div class="row">
        <div class="col-xl-6 pr-xl-2">
          <div class="row">
            <div class="col-sm-6 pr-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-4">
                <i class="lnr lnr-cart"> </i>
                <h3 class="text-primary number"><?php echo 'N'.number_format(get_total_amount_paid_applicants($con,$session),2);?></h3>
                <p class="stat-text">APPLICATION FEE</p>
              </div>
            </div>
            <div class="col-sm-6 pl-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-4">
                <i class="lnr lnr-cart"> </i>
                <h3 class="text-secondary number"><?php echo 'N'.number_format(get_total_amount_paid_acceptance_fee($con,$session),2);?></h3>
                <p class="stat-text">ACCEPTANCE FEE</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 pl-xl-2">
          <div class="row">
            <div class="col-sm-6 pr-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-4">
                <i class="lnr lnr-cart"> </i>
                <h3 class="text-success number"><?php echo 'N'.number_format(get_total_amount_paid_school_fee($con,$session),2);?></h3>
                <p class="stat-text">SCHOOL FEE</p>
              </div>
            </div>
            <div class="col-sm-6 pl-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-4">
                <i class="lnr lnr-cart"> </i>
                <h3 class="text-danger number"><?php echo 'N'.number_format(get_total_amount_paid_hostel_fee($con,$session),2);?></h3>
                <p class="stat-text">HOSTEL FEE</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- //statistics data -->
    
        
        <div class="row">
        <div class="col-lg-6 col-xxl-3 m-b-30">
          <div class="card card_border p-4">
            <div class="card-heading">
               <h4 class="card-title">Recent School Fee Payments</h4>
             </div>
            <div class="table-responsive">
              <table id="example" class="display" style="width:100%">
                <thead>
                  <tr>
                    <th>NAME</th>
                    <th>MATRIC NUMBER</th>
                    <th>AMOUNT</th>
                    <th>DATE OF PAYMENT</th>
                  </tr>
                </thead>
                    
                <tbody>
                    <tr>
                    <?php
        																	$q = "SELECT id, student_id,
        																				DATE_FORMAT(date_added, '%M %d, %Y %l:%i:%p') as date_added,amount

        																		  FROM  school_fee_payments WHERE session='$session' ORDER BY date_added ASC LIMIT 20";
        																	$r = mysqli_query($con, $q);

        																	if(mysqli_num_rows($r) > 0)
        																	{//show table
        																	$sn = 1;
        																		while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
        																		{
        																		    $output = "<tr>";
                                                                        			$output .= "<td>".$sn."</td>";
                                                                        		    $output .= "<td>".get_student_fullname($con, $row['student_id'])."</td>";
                                                                        		    $output .= "<td>".get_student_mat_no($con, $row['student_id'])."</td>";
                                                                        			$output .= "<td>".number_format($row['amount'],2)."</td>";
                                                                        			$output .= "<td>".$row['date_added']."</td>";
                                                                        			$output .= "</tr>";
                                                                        			echo $output;
                                                                        			$sn ++;
        																		}
        																	}
        																	else
        																	{//show the msg

        																			echo
        																				   '<td colspan="4">
        																					 No record found in the system.
        																				   </td>';


        																	}
        			?>
        			</tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-xxl-3 m-b-30">
          <div class="card card_border p-4">
            <div class="card-heading">
               <h4 class="card-title">Recent Application Fee Payments</h4>
             </div>
            <div class="table-responsive">
              <table id="example" class="display" style="width:100%">
                <thead>
                  <tr>
                    <th>NAME</th>
                    <th>APP. NUMBER</th>
                    <th>AMOUNT</th>
                    <th>DATE OF PAYMENT</th>
                  </tr>
                </thead>
                    
                <tbody>
                    <tr>
                    <?php
        									$q = "SELECT id, applicant_id,
                                            DATE_FORMAT(date_added, '%M %d, %Y %l:%i:%p') as date_added,amount

                                          FROM  applicants_fee_payments WHERE session='$session' ORDER BY date_added ASC LIMIT 20";
        																	$r = mysqli_query($con, $q);

        																	if(mysqli_num_rows($r) > 0)
        																	{//show table
        																	$sn = 1;
        																		while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
        																		{
        																		    $output = "<tr>";
                                                                        			$output .= "<td>".$sn."</td>";
                                                                        		    $output .= "<td>".get_applicant_fullname($con, $row['applicant_id'])."</td>";
                                                                        		    $output .= "<td>".get_applicant_application_number($con, $row['applicant_id'])."</td>";
                                                                        			$output .= "<td>".number_format($row['amount'],2)."</td>";
                                                                        			$output .= "<td>".$row['date_added']."</td>";
                                                                        			$output .= "</tr>";
                                                                        			echo $output;
                                                                        			$sn ++;
        																		}
        																	}
        																	else
        																	{//show the msg

        																			echo
        																				   '<td colspan="4">
        																					 No record found in the system.
        																				   </td>';


        																	}
        																	
        			?>
        		</tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
                            
                          </div>
    
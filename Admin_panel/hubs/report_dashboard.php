<br/><br/>
<div class="col-md-12">
                          <div class="row">
                            <div class="col-sm-6 col-md-3">
                                <div class="card card-statistics h-100 m-b-0 bg-success">
                                    <div class="card-body">
                                        <h2 class="text-white mb-0"><?php echo 'N'.number_format(get_total_amount_paid_applicants($con,$session),2);?></h2>
                                        <p class="text-white">Application Fee</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="card card-statistics h-100 m-b-0 bg-primary">
                                    <div class="card-body">
                                        <h2 class="text-white mb-0"><?php echo 'N'.number_format(get_total_amount_paid_acceptance_fee($con,$session),2);?></h2>
                                        <p class="text-white">Acceptance Fee </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="card card-statistics h-100 m-b-0 bg-warning">
                                    <div class="card-body">
                                        <h2 class="text-white mb-0"><?php echo 'N'.number_format(get_total_amount_paid_school_fee($con,$session),2);?></h2>
                                        <p class="text-white">School Fee</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="card card-statistics h-100 m-b-0 bg-info">
                                    <div class="card-body">
                                        <h2 class="text-white mb-0"><?php echo 'N'.number_format(get_total_amount_paid_hostel_fee($con,$session),2);?></h2>
                                        <p class="text-white">Hostel Fee</p>
                                    </div>
                                </div>
                            </div>
                        </div>
       <br>
                        <div class="row">
                            <div class="col-lg-6 col-xxl-3 m-b-30">
          <div class="card card_border p-4">
            <div class="card-heading">
               <h4 class="card-title">Recent School Fee Payments</h4>
             </div>
            <div class="table-dark">
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
            <div class="table-dark">
              <table id="example" class="display" style="width:100%">
                <thead>
                  <tr>
                    <th></th>
                    <th>NAME</th>
                    <th>APP. NUMBER</th>
                    <th>AMOUNT</th>
                    <th>DATE OF PAYMENT</th>
                  </tr>
                </thead>
                    
                <tbody>
                    
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
                        </div>
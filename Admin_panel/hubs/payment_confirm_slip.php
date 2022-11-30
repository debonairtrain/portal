
  <br/><br/>
  
    <nav aria-label="breadcrumb" class="mb-4">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
        <li class="breadcrumb-item "><a href="dashboard?hubs=payment_confirm">Payment Confirmation</a></li>
        <li class="breadcrumb-item active" aria-current="page">Payment Slip Confirmation</li>
      </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- blank block -->
<div class="page-content-wrapper">
  <div class="page-content">


<br><br>
    <!-- data tables -->
    <div class="data-tables">
      <div class="row">
        <div class="col-lg-12 mb-4">
          <div class="card card_border p-4">
            <h3 class="card__title position-absolute">ALL UPLOADED PAYMENT SLIP</h3>
            <div class="table-responsive"><center>
              <table id="example" class="display" style="width:100%">
                <thead>
                  <tr>
                    <th>S/N</th>
                    <th>INVOICE</th>
                    <th>PAYMENT SLIP</th>
                    <th>APPLICATION NUMBER</th>
                    <th>PAYMENT FOR</th>
                     <th>UPDATE DATE</th>
                     <th></th>
                  </tr>
                </thead>
                <tbody>
                 <?php

$sqlmg=mysqli_query($con, "select * from invoices where payment_method='2' AND payment_status !='1' ORDER BY update_slip_date DESC ");
										
										
										
											
											if($sqlmg){
												$sqlmg_row=mysqli_num_rows($sqlmg);
													if($sqlmg_row >0){
														$sn=1;
														while($row=mysqli_fetch_assoc($sqlmg)){				
															$id=$row['id'];
															$invoice_id=$row['invoice_id'];
															$invoice_to=$row['invoice_to'];
															$payment_slip=$row['payment_slip'];
															$invoice_for=$row['invoice_for'];
															$update_slip_date=$row['update_slip_date'];
															
															if($invoice_for=='1'){
															    $invoice_fo="APPLICATION FEE";
															}else{
															    
															}
															$xx="'$payment_slip'";
															
														echo	$tr='<tr>
															<td>'.$sn.'</td>
															<td>'.$invoice_id.'</td>
															<td><center><a href="#" onclick="load_payment_slip('.$xx.')"><img src="https://applicant.gschstg.sch.ng/uploads/payment_slip/'.$payment_slip.'" style="width:20%" alt="'.$invoice_id.'" /></a></center></td>
															<td>'.get_applicant_application_number($con, $invoice_to).'</td>
															<td>'.$invoice_fo.'</td>
															<td>'.$update_slip_date.'</td>
															<td ><a href="dashboard?hubs=scm2&invoice_id='.base64_encode($invoice_id).'">Confirm</a></td></tr>
															';
															$sn++;
														}
													}
											}



?> 
                </tbody>
              </table>
              </center>
            </div>
          </div>
        </div>
      </div>
      
      <!-- editing modal-->
                  <div class="modal fade  bd-example-modal-lg" id="edit_modal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalScrollableTitle">PAYMENT SLIP</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body text-left">
                          <div class="card card_border py-2 mb-4">
                            <div class="card-body" id="loading">
                                
                            </div>
                           <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                 
                              </div>
                            </div>
                          </div>
                         </div>
                     </div>

                  </div>
                </div>
                
    <script>
    function load_payment_slip(token){
     $("#loading").html('<div style="margin-top:10px"><center>Loading payment slip, please wait...<br/><img src="assets/images/ajax-loader1.gif" width="10%"/></center></div>');
       // alert(token);
    
     $('#edit_modal').modal('show')
     $.post("php/payment_slip.php",{token:token},
			function(response,status){
				
					$("#loading").html(response);
      
			});
   
}
    </script>
    
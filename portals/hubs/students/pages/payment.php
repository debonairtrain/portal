<div class="content">
        <div class="row">

          <div class="col-md-12">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Payments History</h5>
              </div>
              <div class="card-body">
								<div style="height:20px; displat:block;"></div>

						    <ul class="breadcrumb">


						        <li class="active" >School Payments<span class="divider"></span> </li>
						    </ul>

						<div class="well">

						    <!-- in the future version check if the current invoice has expired den show but if nt exired dont show -->
						    <?php
							if(!has_paid_school_fees($con, $user_id,$session_id,$current_semester))
							{ ?>









						        <a href="dashboard?hub=generate_invoice&for=sch&invoice_to=<?php echo md5($user_id);?>&qlk=<?php echo md5(8); ?>" style="width:auto; margin:0px; padding:4px;"  class="btn btn-info btn-lg float-right" name="button" onclick="checks()"><span><img src="images/add_icon.png" style="width:auto; height:auto;" />Generate Invoice</span> </a><br/><br/>




						    <?php
							}// for now its just user id for the payments issues
							else
							{
							?>

						    <button class="btn btn-info btn-lg" data-toggle="tooltip" data-placement="top" title="Click here to Print / Download Payment Receipt"><i class="glyphicon glyphicon-print"> </i> Print / Download Receipt</button>


						    <?php

							}
							?>



						     <div style="height:20px; displat:block;"></div>




						     <!--First accordion panel container tat accomodates all other payments -->


						    <!-- payment history -->




						</div><!-- /well -->








						<div class="col-md-12">

						       <br/><br/><br/>
									 <div class="panel panel-success">
      <div class="panel-heading">
				&nbsp;&nbsp;PAYMENT HISTORY
			</div>
      <div class="panel-body">
				<div class="alert alert-danger in" >
								<button class="close" data-dismiss="alert" type="button">
									 X

								</button>
									 <i class="glyphicon glyphicon-danger-sign"></i>&nbsp;&nbsp;Click on the green-plus-sign above to generate new invoice for APPLICATION FEE payment, but if you have generated an invoice before, check your invoice history to PAY with most recent.

									 <br/> &nbsp;&nbsp; - <strong>To avoid payment conflict, PLEASE PROCESS ONE PAYMENT PER PERSON at a time </strong>

									 <br/> &nbsp;&nbsp; - <strong>Kindly note that ALL PAYMENTS are processed ONLINE using 'REMITA'. GoodLuck! </strong>
					 </div>
			<br/><br/>

			                                      <div class="col-lg-12 col-xs-6">

			                                        <!--<h3 class="help-block">My Invoices </h3>
			                                        <p class="help-block">Your invoice history with us </p>
			-->

			                                        <?php echo view_invoices($con, $user_id, $invoice_type=4,$session=1); ?>

			                                    </div><!-- /.col lg 12 -->

			</div>
    </div>
						        <hr>

						       </div>


						        <div class="row">
						              <div class="col-sm-7  help-block">



						                     <img src="images/remita-payment-logo-horizonal-opt.png" class="img-responsive" />

						                  </div>

						                <div class="col-sm-5  help-block">
						                    <h4>For Support, Email or Call : </h4>
						                    <h5><span class="fa fa-envelope"></span> info@ofusware.com </h5>
						                     <h5><span class="fa fa-phone"></span> +234- 07068643562 OR 07060439379 </h5>


						                     <img src="images/support.png" class="float-right" />

						                  </div>
						         </div>
						         <script type="text/javascript">

						         function checks()
						         {

						           $.post("generate_invoice.php",{},
						            	function(response,status)
						            	{
						            			alert(response);
						            	});
						           //swal("jhjh")
						           //$.post("includes/php/generate_invoice.php", {},function(response, status){
						             //Swal(response);
						         //window.setTimeout(link,2000);
						          // });
						         }

						         function link(){
						           location.reload();
						         }
						         </script>

              </div>
            </div>
          </div>
        </div>
      </div>

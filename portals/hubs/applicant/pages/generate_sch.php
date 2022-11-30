    <ul class="breadcrumb">
<?php
								//collect the passed
				  if(isset($_GET['t_type']))
				  {
					 $type_id =  $_GET['t_type'];
				  }
								if($type_id=='1')
								{
									$description = 'Application Fee';
									$invoice_type = '1';
									$invoice_for = 'app';
									$t_for ='1';
								}else if($type_id=='2')
								{
									$description = 'Acceptance Fee';
									$invoice_type = '2';
									$invoice_for = 'accep';
									$t_for ='2';
								}else if($type_id=='3')
								{
									$description = 'Fresh School Fee';
									$invoice_type = '3';
									$invoice_for = 'sch';
									$t_for ='3';
								}
								?>

        <li><a href="dashboard.php?sms=payment&qlk=<?php echo md5(8); ?>">Payments</a> <span class="divider"></span> </li>
        <li class="active" ><?=$description ;?> payments<span class="divider"></span> </li>
    </ul>

<div class="well">

     <?php
							if(!has_paid_applicant_fee($con, $applicant_id,$session_id))
							{ ?>

						        <a href="dashboard?sms=generate_invoice&for=<?=$invoice_for;?>&invoice_to=<?php echo md5($applicant_id);?>&qlk=<?php echo md5(8); ?>" style="width:auto; margin:0px; padding:4px;"  class="btn btn-login btn-green pull-right" name="button" onclick="checks()"><span><img src="images/add_icon.png" style="width:auto; height:auto;" />Generate Invoice</span> </a><br/><br/>

						    <?php
							}else if(!get_user_admission_status($con,$applicant_id,$id='1'))
							{
								//echo '<span class="alert alert-danger">You have not BEEN OFFER ADMISSION YET!</span><br/>';
							}else if(!has_paid_acceptance_fee_session($con, $applicant_id,$session_id))
							{?>
								<a href="dashboard?sms=generate_invoice&for=<?=$invoice_for;?>&invoice_to=<?php echo md5($applicant_id);?>&qlk=<?php echo md5(8); ?>" style="width:auto; margin:0px; padding:4px;"  class="btn btn-login btn-green pull-right" name="button" onclick="checks()"><span><img src="images/add_icon.png" style="width:auto; height:auto;" />Generate Invoice</span> </a><br/><br/>
							<?php
						}
							else if(!has_paid_school_fee($con, $applicant_id,$session_id))
								{?>
									<a href="dashboard?sms=generate_invoice&for=<?=$invoice_for;?>&invoice_to=<?php echo md5($applicant_id);?>&qlk=<?php echo md5(8); ?>" style="width:auto; margin:0px; padding:4px;"  class="btn btn-login btn-green pull-right" name="button" onclick="checks()"><span><img src="images/add_icon.png" style="width:auto; height:auto;" />Generate Invoice</span> </a><br/><br/>
									<?php
								}

							else
							{
							?>
	

    <button class="btn btn-login btn-green" data-toggle="tooltip" data-placement="top" title="Click here to Print / Download Payment Receipt"><i class="fa fa-print"> </i> <span>Print / Download Receipt</span></button>


    <?php

	}
	?>



     <div style="height:20px; displat:block;"></div>




     <!--First accordion panel container tat accomodates all other payments -->

    <div class="panel panel-info">
        <div class="panel-heading">
            <p class="panel-title">
                <a id="Me" data-toggle="collapse" data-parent="#accordion" href="#collapseMe"> <span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;PAYMENT HISTORY </a>
                 <span class="label label-primary" style="font-size:15px;float:right;"></span>
            </p>
        </div>
                <div id="collapseMe" class="panel-collapse collapse in ">
                    <div class="panel-body">
                        <ul class="list-group">


                            		 <div class="alert alert-danger in" >
                                         <button class="close" data-dismiss="alert" type="button">
                                            X

                                         </button>
                                            <i class="glyphicon glyphicon-danger-sign"></i>&nbsp;&nbsp;Click on the green-plus-sign above to generate new invoice for APPLICATION FEE payment, but if you have generated an invoice before, check your invoice history to PAY with most recent.

                                            <br/> &nbsp;&nbsp; - <strong>To avoid payment conflict, PLEASE PROCESS ONE PAYMENT PER PERSON at a time </strong>

                                            <br/> &nbsp;&nbsp; - <strong>Kindly note that ALL PAYMENTS are processed ONLINE using 'PAY VIA VOGUEPAY'. GoodLuck! </strong>
                                    </div>




                                      <div class="col-lg-12 col-xs-6">

                                         <h3 class="help-block">My Invoices  <a class="btn btn-login btn-green" href="#" data-toggle="modal" data-target="#myModallTLOG"> <span>Re-query Transaction Status</span></a> </h3>
			            <p class="help-block">Your invoice history with us </p>


                                        <?php echo view_invoices($con, $applicant_id, $invoice_type,$session_id); ?>

                                    </div><!-- /.col lg 12 -->






                    </ul><!-- end of list group --->
                </div><!-- end o panel body -->
    </div>
    <!--First accordion panel container Ends here -->


    </div>
    <!-- payment history -->




</div><!-- /well -->


        <div class="col-md-12">
              <div class="col-sm-6  help-block">



                     <img src="images/secured pay opt.png" class="img-responsive" />

                  </div>

                <div class="col-sm-6  help-block">
                    <h4>For Support, Email or Call : </h4>
                    <h5><span class="fa fa-envelope"></span> info@ofusware.com </h5>
                     <h5><span class="fa fa-phone"></span> +234- 07068643562 OR 07060439379 </h5>


                     <img src="images/support.png" class="pull-right" />

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

<!-- modal for changing password s -->
<div class="modal fade" id="myModallTLOG" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabelTLOG">View Transaction Log</h4>
      </div>
		<div class="modal-body" style="overflow:auto">

        <?php echo view_remita_pay_transaction_log_min($con, $applicant_id, $invoice_type, $t_for); ?>

      </div>
	  <div class="modal-footer">
          <button type="button" class="btn btn-login btn-green" data-dismiss="modal"><span>Close</span> </button>
      </div>
      <div id="flash" class="label label-success pull-right"></div>
      <div style="height:20px;"></div>
    </div>
  </div>
</div>

<!--  end of change of password -->
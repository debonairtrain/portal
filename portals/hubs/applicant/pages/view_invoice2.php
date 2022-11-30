<div class="card">
              <div class="card-header">
                <h5 class="card-title">View Invoices</h5>
              </div>
              <div class="card-body">
								<?php

//collect invoice id
if(isset($_GET['iid']))
{

	//collect it
	$iid = $_GET['iid'];


	//collect matric number
	$a_no = get_user_application_number($con,$user_id);


	//invoice to
	$invoice_type  = get_invoice_type($con,$iid);//get invoice type
	$invoice_to = get_invoice_invoice_to($con,$iid);
	$pay_to = get_invoice_pay_to($con,$iid); //get who to pay the invoce to
	$invoice_for = get_invoice_for($con,$iid); //get what the invoice is made for
	$title = get_invoice_title($con,$iid); // get the invocie title
	$description = get_invoice_desc($con,$iid); //get the invoice desc
	$amount = get_invoice_amount($con,$iid); //get the invocie amount
	$total_amount = get_invoice_total_amount($con,$iid); //get invoice total amount
	$credit = get_invoiced_credit($con,$iid); //get invoice credit



	 $payment_status = get_invoice_payment_status($con,$iid); //get the invoice payment status

	 $txnref = 'GSCHSTG'.generate_remita_txn_ref();


	$ofusware_share  = 500;

	$remita_share = 415; //vogue pay share

 // $total_amount = $total_amount;
	$total_amountt = $total_amount;

	//candidates details
   $fullname = get_user_fullname($con, $invoice_to);

   $email = get_user_email($con,$invoice_to);
  $phone_no = get_user_phone_no($con,$invoice_to);

//get current session
$session = get_current_session_id($con); //get current session

//$session = 1;



 $session_title = get_current_session_title($con,$session); //get session title



?>
<!--<div style="height:20px; displat:block;"></div>-->
 <ul class="breadcrumb">

			 <li><a href="dashboard.php?hub=my_payments&qlk=<?php echo md5(8); ?>">Payments</a> <span class="divider"></span> </li>
			<!-- <li> <a href="dashboard.php?act=school_fee_payments&qlk=<?php //echo md5(2); ?>"> School fee payments </a><span class="divider"></span> </li>
			-->
	 </ul>


<div class="well"><!-- well starts -->


		 <div class="row" style="padding-left:0px; padding-right:0px;">

										 <ul class="list-group">
												 <li class="list-group-item list-group-item-success">
														 <h4>INVOICE</h4>
												 </li>
										 </ul>

										 <div class="col-md-12">
												 <div class="form-actions pull-right" style="margin-top:10px; padding-left:0px; padding-right:0px;">
																 <form  name="form" action="" method="POST">
																		 <!--<img src="images/interswitch.jpg" height="30" width="150" />-->

																			 <!-- play with invoice for here -->
<!--                                        <span class="btn btn-info active"><i class="glyphicon glyphicon-info-sign"></i> Please print this invoice slip and take it to Skye Bank Branch </span>
-->



									 <?php if($payment_status == '1'){ ?>
																			 <button type="submit" name="" class="btn btn-info" value="Paid"  data-toggle="tooltip" data-placement="top" title="You have made payment for this invoice" disabled="disabled">Paid</button>
																			 <?php }else{ ?>
																				 <form >
																					 <input type="hidden" value="<?=$email;?>" class="form-control" id="email"  />
																					 <input type="hidden" value="<?=$fullname;?>" class="form-control" id="name"  />
																					 <input type="hidden" value="<?=$phone_no;?>" class="form-control" id="phone"  />
																					 <input type="hidden" value="<?=$total_amountt;?>" class="form-control" id="amount"  />
																					 <input  type="hidden" name="iid" Value="<?php echo $iid; ?>">
																					 <script src="https://js.paystack.co/v1/inline.js"></script>
																					 <a href="dashboard?hub=confirm_payment&api=<?php echo base64_encode($iid)?>&tref=<?php echo base64_encode($txnref)?>&osp=<?php echo base64_encode($total_amountt)?>" class="btn btn-primary btn-lg float-right" onclick="payWithPaystack()" title="Click here to Pay via Remita"> <span>Pay Via Remita</span></a>
																				 </form> <?php } ?>

																			 <input name="amount" type="hidden" value="<?php echo $total_amountt; ?>" />
																			 <input name="txnref" type="hidden" value="<?php echo $txnref; ?>" />


																			 <input  type="hidden" name="iid" Value="<?php echo $iid; ?>">
																		 <input  type="hidden" name="qlk" Value="<?php echo $encripted_qlk; ?>">


																				<input  type="hidden" name="act" Value="confirm_af_payments"><!-- move to confirmation page -->

																			 <!-- <a class="btn btn-danger" target="_blank"  href="create_af_invoice.php?u=<?php //echo $user_id.'&s='.$session.'&me='.sha1(md5('fucku')).'&e='.sha1(md5('10000')).'&m='.sha1(md5('567')).'&iid='.$iid; ?>" data-toggle="tooltip" data-placement="top" title="Click here to Print / Download invoice"><i class="glyphicon glyphicon-print"> </i> Print / Download Invoice</a> -->

																 </form>

														 </div>
									 </div><!-- /.col md 12 -->

										 <div class="row">

											 <div class="col-md-4">
												 <p class="help-block">Invoice # <span class="badge badge-success badge-lg"><?php echo $iid ;?></span></p>
													 Invoice Date: <?php echo get_invoice_date($con,$iid) ;?><br>
													 Due Date: <?php echo get_invoice_due_date($con,$iid) ;?><br>
													 Expire Date / Time: <?php echo get_invoice_exp_date($con,$iid) ;?>

											 </div><!-- /.col  md 4-->

											 <div class="col-md-4">
												 <p class="help-block">Invoice To </p>
													 <?php echo get_user_fullname($con,$invoice_to); ?><br><?php echo '<b>APP NO.: '.strtoupper($a_no).'</b><br/>'; ?>
													 <?php echo get_user_address($con,$invoice_to); ?><br>
													 <?php echo show_state($con, get_user_state_id($con,$invoice_to)); ?><br>
														<?php //echo show_country(get_user_country_id($invoice_to)); ?>.<br>


											 </div><!-- /.col  md 4-->


											 <div class="col-md-4">

												 <p class="help-block">Pay To </p>
													 <?php echo $pay_to; ?><br>

											 </div><!-- /.col  md 4-->




										 </div><!-- /.col  md 12-->

												<div style="height:100px"></div><!-- giv space -->

											 <div class="col-md-12">
												 <li class="list-group-item help-block">Description  ( <?php echo $session_title; ?> Academic Session ,  <?php //echo $semester_title; ?> ) <span class="float-right">Amount</span> </li>

												 <li class="list-group-item help-block" style="height:auto;">
														 <span><?php  echo $title; ?>
																<label class="float-right"><?php  echo $description; ?></label>
															 </span>

															 <span><strong><?php //echo 'N'.number_format($amount ,2); ?></strong>
															 </span>
													 </li>

													 <li class="list-group-item help-block">
														 <span>ICT Processing Fee:
															 </span>
															 <span class="float-right"><?php echo 'N'.number_format($ofusware_share,2); ?>
															 </span>
													 </li>


													 <li class="list-group-item help-block">
														 <span>Sub Total:
															 </span>
															 <span class="float-right"><?php echo 'N'.number_format($amount,2); ?>
															 </span>
													 </li>

													 <li class="list-group-item help-block">
														 <span>Credit:
															 </span>
															 <span class="float-right"><?php echo 'N'.number_format($credit,2); ?>
															 </span>
													 </li>
													 <li class="list-group-item help-block">
														 <span>Convinience Fee:
															 </span>
															 <span class="float-right"><?php echo 'N'.number_format($remita_share,2); // this is for vp ?>
															 </span>
													 </li>

													 <li class="list-group-item help-block" style="min-height:60px;">
															<span>Total:
															 </span>
															 <span class="float-right text-success" style="font-size:35px; font-weight:bold;"><?php echo 'N'.number_format($total_amount + $remita_share,2).'K'; ?>
															 </span>

													 </li>


												</div>







		 </div><!-- /.col md 12 -->


</div><!-- /.well -->

<div class="row">

			<br/><br/><br/>

			 <hr>

			</div>


			 <div class="row">
						 <div class="col-sm-7  help-block">



								 <img src="images/remita-payment-logo-horizonal-opt.png" class="img-responsive" />
								 </div>

							 <div class="col-sm-5  help-block">
									 <h4>For Support, Email or Call : </h4>
										<h5><span class="glyphicon glyphicon-phone"></span> +234- 07068643562</h5>


										<img src="images/support.png" class="float-right" />

								 </div>
				</div>



<?php

}//end of iid exist
else
{
 //do nothing for now
}
?>
	              </div>
</div>

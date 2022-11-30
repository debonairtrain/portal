<?php
session_start();

include_once('../../../db_connect/db.php');
include_once('../functions.php');

if(isset($_SESSION['student_id'])){
	$student_id=$_SESSION['student_id'];

//get current session
 $session = get_current_session_title($con, $id = 1);
}
 ?>


 <br><br><br><br><br><br><br><br>
    <div style="height:20px; displat:block;"></div>

    <ul class="breadcrumb">

        <li><a href="dashboard.php?sms=payment&qlk=<?php echo md5(8); ?>">Payments</a> <span class="divider"></span> </li>
        <li class="active" >School fee payments<span class="divider"></span> </li>
    </ul>

<div class="well">

    <!-- in the future version check if the current invoice has expired den show but if nt exired dont show -->
    <?php
	if(!has_paid_school_fee($con, $student_id))
	{ ?>









        <button type="button" style="width:auto; margin:0px; padding:4px;"  class="btn btn-login btn-green pull-right" name="button" onclick="checks()"><span><img src="images/add_icon.png" style="width:auto; height:auto;" />Generate Invoice</span> </button><br/><br/>




    <?php
	}// for now its just user id for the payments issues
	else
	{
	?>

    <button class="btn btn-login btn-green" data-toggle="tooltip" data-placement="top" title="Click here to Print / Download Payment Receipt"><span>Print / Download Receipt</span> </button>


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

                                        <!--<h3 class="help-block">My Invoices </h3>
                                        <p class="help-block">Your invoice history with us </p>
-->

                                        <?php echo view_invoices($con, $student_id, $invoice_type = 0,$session); ?>

                                    </div><!-- /.col lg 12 -->






                    </ul><!-- end of list group --->
                </div><!-- end o panel body -->
    </div>
    <!--First accordion panel container Ends here -->


    </div>
    <!-- payment history -->




</div><!-- /well -->








<div class="col-md-12">

       <br/><br/>

        <hr>

       </div>


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
           $.post("includes/php/generate_invoice.php", {},function(response, status){
             Swal(response);
         window.setTimeout(link,2000);
           });
         }

         function link(){
           location.reload();
         }
         </script>

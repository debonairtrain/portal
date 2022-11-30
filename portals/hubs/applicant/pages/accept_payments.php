

<div style="height:20px; displat:block;"></div>

    <ul class="breadcrumb">

        <li class="active" ><a href="#">Payments</a> <span class="divider"></span> </li>
    </ul>


<div class="card">
    <div class="row">
<form id="save_acceptance" method="POST">
         <div id="saving_accept">
	<?php
							if(!has_paid_applicant_fee($con, $user_id,$session_id))
							{
								echo '<span class="alert alert-danger">You Must Pay Your Application Fee Before You Can Have Access to this Page!</span><br/>';
							}else if(!get_user_admission_status($con,$user_id,$id='1'))
							{
								echo '<span class="alert alert-danger">You have not BEEN OFFER ADMISSION YET!</span><br/>';
							}else
							{
								echo '
								<div class="col-lg-3 col-sm-4 col-xs-6" ><a href="dashboard?sms=generate_accep&t_for=2&t_type=2" type="submit" class="btn btn-login btn-green"><span ><img  class="thumbnail img-responsive" style="margin-top:10px;" src="images/school_fee_payments.png">
								<h5 class="text-center help-block" style="color:#FFF;">Acceptance Fee</span> </h5></a>
							';
						  }
		            ?>

           </div>





        </div>



</form>




</div><!-- /.row -->
</div><!-- /well -->



<div style="height:20px; displat:block;"></div>

    <ul class="breadcrumb">

        <li class="active" ><a href="#">Payments</a> <span class="divider"></span> </li>
    </ul>


<div class="well">
    <div class="row">
<form id="save_acceptance" method="POST">
         <div id="saving_accept">
		 <?php 
			if(!has_paid_applicant_fee($con, $applicant_id,$session_id))
							{ 
								echo '<span class="alert alert-danger">You Must Pay Your Application Fee Before You Can Have Access to this Page<br>!</span><br/>';
							}else if(!get_user_admission_status($con,$applicant_id,$id='1'))
							{
											echo '<span class="alert alert-danger">You have not BEEN OFFER ADMISSION YET!</span><br/>';
							}else if(!has_paid_acceptance_fee_session($con,$applicant_id,$session_id))
							{
							echo '<span class="alert alert-danger">You Must Pay Your Acceptance Fee Before You Can Have Access to this Page!</span><br/>';
						  }else
							{
							  echo '<div class="col-lg-3 col-sm-4 col-xs-6" ><a href="dashboard?sms=generate_sch&t_for=3&t_type=3" type="submit" class="btn btn-login btn-green"><span ><img  class="thumbnail img-responsive" style="margin-top:10px;" src="images/school_fee_payments.png">
									<h5 class="text-center help-block" style="color:#FFF;">Fresh School Fee</span> </h5></a>';
							}
		 ?>
           

           </div>
        </div>
</form>




</div><!-- /.row -->
</div><!-- /well -->



<div style="height:20px; displat:block;"></div>

    <ul class="breadcrumb">

        <li class="active" ><a href="#">Payments</a> <span class="divider"></span> </li>
    </ul>


<div class="well">
    <div class="row">
<form id="save_acceptance" method="POST">
         <div id="saving_accept">
           <?php
           if(!has_paid_applicant_fee_session($con, $applicant_id,$session ))
           {
             echo '<span class="alert alert-danger">You have not pay your Application Fee</span><br/>';
           }else if(!get_user_admission_status($con,$applicant_id,$id='1'))
           {
             echo '<span class="alert alert-danger">You have not BEEN OFFER ADMISSION YET!</span><br/>';
           }else
           {
             echo '<div class="col-lg-3 col-sm-4 col-xs-6" ><button type="submit" class="btn btn-login btn-green"><span ><img  class="thumbnail img-responsive" style="margin-top:10px;" src="images/school_fee_payments.png">
             <h5 class="text-center help-block" style="color:#FFF;">Acceptance Fee</span> </h5></button>

             </div>';
           }
           ?>






        </div>

        <div id="output_accept">

        </div>
        <script type="text/javascript">
        $(document).ready(function(e){



        		$("#save_acceptance").submit(function(event){
        			event.preventDefault(); //prevent default action
        			var post_url = "../scripts/accept_fee_payment"; //get form action url
        			var request_method = $(this).attr("method"); //get form GET/POST method

        			$("#output_accept").html('<div style="margin-top:10px"><center>saving Data, please wait...<br/><img src="images/ajax-loader1.gif" width="10%"/></center></div>');
        			document.getElementById("saving_accept").style.display = "none";
        			var form_data = new FormData(this); //Creates new FormData object


        				$.ajax({
        					url : post_url,
        					type: request_method,
        					data : form_data,
        					contentType: false,
        					cache: false,
        					processData:false
        				}).done(function(response){ //

        					if(response==1){


        					 document.getElementById("saving_accept").style.display = "block";
        					 $("#output_accept").html("");
        					  //swal("");
        						swal("Bio-Data Updated!", "You clicked the button!", "success");
        						window.setTimeout(link,2000);

        					}else{

        					$("#output_accept").html(response);
        					document.getElementById("saving_accept").style.display = "block";

        					}
        				});

        		});
        });


        function link(){
        	location.reload();
        }
        </script>


</form>




</div><!-- /.row -->
</div><!-- /well -->

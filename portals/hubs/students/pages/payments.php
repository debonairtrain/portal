

<div style="height:20px; displat:block;"></div>

    <ul class="breadcrumb">

        <li class="active" ><a href="#">Payments</a> <span class="divider"></span> </li>
    </ul>


<div class="well">
    <div class="row">
<form id="save_invoice" method="POST">
         <div id="saving_invoice">
           <div class="col-lg-3 col-sm-4 col-xs-6" ><button type="submit" class="btn btn-login btn-green"><span ><img  class="thumbnail img-responsive" style="margin-top:10px;" src="images/school_fee_payments.png">
           <h5 class="text-center help-block" style="color:#FFF;">School Fee</span> </h5></button>

           </div>





        </div>

        <div id="output_invoice">

        </div>
        <script type="text/javascript">
        $(document).ready(function(e){



        		$("#save_invoice").submit(function(event){
        			event.preventDefault(); //prevent default action
        			var post_url = "includes/pages/sch_fee_payment"; //get form action url
        			var request_method = $(this).attr("method"); //get form GET/POST method

        			$("#output_invoice").html('<div style="margin-top:10px"><center>saving Data, please wait...<br/><img src="images/ajax-loader1.gif" width="10%"/></center></div>');
        			document.getElementById("saving_invoice").style.display = "none";
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


        					 document.getElementById("saving_invoice").style.display = "block";
        					 $("#output_invoice").html("");
        					  //swal("");
        						swal("Bio-Data Updated!", "You clicked the button!", "success");
        						window.setTimeout(link,2000);

        					}else{

        					$("#output_invoice").html(response);
        					document.getElementById("saving_invoice").style.display = "block";

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

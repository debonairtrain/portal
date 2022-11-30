
<div class="card col-md-12 mt-4 mb-4">
 <div style="height:20px; displat:block;"></div>

	<div id="message" class="message alert alert-info"></div>
  <ul class="card">

      <label class="active text-danger" ><a href="#">Please click on the checkbox and confirm button to submit your final application.<br/><strong> PLEASE ENSURE YOU HAVE DONE THE NECESSETIES INCLUDING APPLICATION FEE PAYMENTS </strong></a> <span class="divider"></span> </label>
  </ul>



<div class="well">
    <div class="row">


        <div class="col-lg-12">



                <br>
                <!--<input class="btn btn-success btn-md pull-right" value="Save..." type="submit" id="save_election_interest" />-->

                <?php
                  $session = get_current_session_title($con, $id = 1);
                 echo check_final_submission($con, $user_id, $session_id) ?>
<br><br>
        </div>
<br>


    </div><!-- /.row -->
</div><!-- /well -->
</div>
<script type="text/javascript">
			//check if he/ she agrees or not
  $('#save_declaration').click(function(){

	  if ($('#checkbox-id').is(':checked'))
	  {

			 //do this
			 var element = $(this);
			 //var id = element.attr("id");
			var id = 1; //pass id  = 1 since 1 indicates election interest
			var info = 'id=' + id;

			if(confirm("Do you  really want to proceed?"))
			 {
			   $.ajax({
			   type: "POST",
			   url: "activate_final_submission.php",
			   data:info,
			   success:function(html)
				  {

					  $('.hide_me').hide(1000); //hide the buttons for showing interest
					  $("#message").show();
					  $("#message").html('<i class="glyphicon glyphicon-ok"></i> Successfully submitted. Please print your Acknowledgement Slip for reference purpose, we will keep you posted on when to log back to application process. Thank You');
					 // $("#message").html(html);
					  location.reload(1000);
					  //$('.show_me').show(1000); //show the infos after the user has showed interest



				  }// end success
			   })
			 }

		  return false;

			   event.preventDefault();
	  }
	  else
	  {
	  		alert('Please click on the check box  to submit your declaration');
			return false;
	  }

	  //var count_checked = $("[name='agreement']:checked").length; // count the checked
//							if(count_checked == 0) {
//								alert("Please select a user(s) to delete.");
//								return false;
//							}
//
  });

			</script>

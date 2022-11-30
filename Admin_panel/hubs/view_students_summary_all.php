<br/><br/>
<div class="col-md-12">
														<?php
														//collect the token
				if(!isset($_GET['tk']))
				{

					header('all_students');
				}


				 //collect the passed
				if(isset($_GET['p']))
				{
				 $p =  $_GET['p'];
				}



				 //collect the session
				if(isset($_GET['ses']))
				{
					$ses =  $_GET['ses'];
					$lev =  $_GET['lev'];
				}

				echo view_students_summary($con,$ses,$lev);
														?>
</div>
<script type="text/javascript">
	function reset_pw(id)
		{
			$.post("php/reset_pw.php",{id:id},
				function(response,status)
					{
						alert(response)
					});
		}
</script>
<br/><br/>
<?php 
    $session_title = get_current_session_title($con, $session);
?>

<h2 class="badge badge-success" style="font-size: 40px; font-weight:bold">&nbsp;&nbsp;&nbsp;&nbsp;All Paid Students for <?=$session_title;?>' Session </h2>
<?php
    echo view_students_paid($con,$session);
?>

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
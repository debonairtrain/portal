<br/><br/>
<?php
    echo view_students($con,$session);
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
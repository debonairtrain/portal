<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Manage Students</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item active">All Students Summary</li>
</ul>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="card card-table">
<div class="card-body">
<div class="table-responsive">
  <div class="row">
                         <div class="col-md-12">
                           <?php
                           //collect the token
       if(!isset($_GET['tk']))
       {

         header('dashboard?hubs=all_students');
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
                       </div>
</div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
							function reset_pw(id)
							{
								$.post("hubs/php/reset_pw.php",{id:id},
								function(response,status)
								{
									alert(response)

								});
							}
						</script>

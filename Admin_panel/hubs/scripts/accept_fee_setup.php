<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Finance Setup</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item active">Acceptance Fee Setup</li>
</ul>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
  <div class="row">
                           <div class="row">
                             <div class="col-md-6 col-sm-6 col-6">
                               <div class="btn-group">
                                 <a href="dashboard?hubs=new_accept_fee_setup" data-toggle="modal" data-target="#myModal" id="addRow" class="btn btn-info" >
                                   Add New <i class="fa fa-plus"></i>
                                 </a>
                               </div>
                               <a href="dashboard?hubs=archive_set_accept" id="addRow" class="btn btn-warning" >
                                 Archive <i class="fa fa-times"></i>
                               </a>
                             </div>
                           </div>
                           <div class="col-md-12">
                             <br><br>
                             <?php echo get_all_set_accept_fee($con, $session, $st=1);?>
                           </div>



                         </div>

</div>
</div>
</div>
</div>
<script type="text/javascript">
							function delete_school(id)
							{
								if(confirm("Do you  really want to proceed?"))
								 {
									 $.post("php/delete_accept_fee_setup.php",{id:id},

										function(response,status)
										{
											alert(response);
											window.setTimeout(link,2000);
										});
								 }
							}
							function link(){
								location.reload();
							}
						</script>

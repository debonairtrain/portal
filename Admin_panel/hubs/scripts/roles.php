<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Manage Users</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item active">Role List</li>
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
                                 <a href="dashboard?hubs=add_role" id="addRow" class="btn btn-info" >
                                   Add New <i class="fa fa-plus"></i>
                                 </a>
                               </div>
                               <div class="btn-group">
                                 <a href="dashboard?hubs=archive_roles" id="addRow" class="btn btn-warning" >
                                   Archive <i class="fa fa-times"></i>
                                 </a>
                               </div>
                             </div>
                           </div>
                           <div class="col-12" style="margin-top:20px;">
                             <?php
                               echo view_user_roles($con);
                             ?>
                           </div>
                         </div>
                         <script type="text/javascript">
                         function delete_school(id)
                         {
                           if(confirm("Do you  really want to proceed?"))
                            {
                              $.post("php/delete_role.php",{id:id},

                               function(response,status)
                               {
                                 alert(response)
                                 window.setTimeout(link,2000);
                               });
                            }
                         }

                         function link(){
                           location.reload();
                         }
                       </script>
</div>
</div>
</div>
</div>

<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Manage Students</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item active">Defered Students</li>
</ul>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="card card-table">
<div class="card-body">
<div class="table-responsive">
  <?php
                         echo view_defered_students($con,$session);
                       ?>
</div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
             function defer(id)
             {
               if(confirm("Do you  really want to proceed?"))
                {
                  $.post("php/undefer_student.php",{id:id},

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

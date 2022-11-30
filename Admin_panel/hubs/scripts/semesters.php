<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Settings and Maintenance</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item active">Sessions</li>
</ul>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
  <div class="row">

                       <div class="col-md-6 col-sm-6 col-6">
                         <div class="btn-group">
                           <a href="dashboard?hubs=add_semester" id="addRow" class="btn btn-info" >
                             Add New <i class="fa fa-plus"></i>
                           </a>
                         </div>
                         <br><br>
                       </div>

                       <?php
                        //query the database
                        $q = "SELECT title,semester_id,description,semester_running_status,semester_status,
                           DATE_FORMAT(date_added, '%M %d, %Y %l:%i:%p') as date_added,
                           DATE_FORMAT(date_modified, '%M %d, %Y %l:%i:%p') as date_modified
                           FROM semesters WHERE semester_status='1'
                            ORDER BY title ASC";
                        $r = mysqli_query($con, $q);

                        if(mysqli_num_rows($r) > 0)
                        {//show table



                            $output =
                            '<div class="datatable-wrapper table-responsive">
                              <table class="display compact table table-striped table-bordered datatable">
                                <thead>
                                <th></th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Date Added</th>
                                <th>Date Modified</th>
                                <th>Status</th>
                                <th>Action</th>
                            </thead>

                            <tbody>';
                            $sn=1;
                          while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
                          {

                            $status=$row['semester_running_status'];
                            $year_status=$row['semester_status'];
                            if($status=='1')
                            {
                            $status_type = '<span class="badge badge-success">Active</span>';
                            }else if($status=='2'){
                            $status_type = '<span class="badge badge-danger">Not Active</span>';
                            }

                            if($status=='1')
                            {
                            $status = '<a href="edit_session?id='.$row['semester_id'].'&iddd='.md5('how are you').'"
                                  class="btn btn-primary btn-xs" title="Edit">
                                  <i class="fa fa-edit "></i>
                                  </a>
                                  <a href="#"
                                  onclick="deactivate_session('.$row['semester_id'].')"
                              class="btn btn-danger btn-xs" title="Deactivate">
                              <i class="fa fa-lock "></i>Deactivate
                        </a>';
                            }else if($status=='2'){
                            $status = '<a href="edit_session?id='.$row['semester_id'].'&iddd='.md5('how are you').'"
                                  class="btn btn-primary btn-xs" title="Edit">
                                  <i class="fa fa-edit "></i>
                                  </a>
                                  <a href="#"
                                  onclick="activate_session('.$row['semester_id'].')"
                                class="btn btn-success btn-xs" title="Activete">
                                <i class="fa fa-plus "></i>Activete
                                </a>';
                            }

                            $output .= "<tr>";
                            $output .= "<td>".$sn."</td>";
                            $output .= "<td>".$row['title']."</td>";
                            $output .= "<td>".$row['description']."</td>";
                            $output .= "<td>".$row['date_added']."</td>";
                            $output .= "<td>".$row['date_modified']."</td>";
                            $output .= "<td>".$status_type."</td>";
                            $output .= "<td>".$status."</td>";

                            $output .= "</tr>";
                            $sn++;
                          }
                        }
                        else
                        {//show the msg

                            $output =
                                 '<div class="alert alert-danger alert-dismissable col-md-12">
                                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">x</button>
                                <img src="assets/images/info.png" />&nbsp;&nbsp; No record found in the system.
                                 </div>';

                        }

                        $output .=
                        '</tbody>
                          </table>
                          </div>';
                        echo $output;

                        ?>

                  </div>
                  <script type="text/javascript">
      							function deactivate_session(id)
      							{
      								if(confirm("Do you  really want to proceed?"))
      								 {
      									 $.post("php/deactivate_semester.php",{id:id},

      										function(response,status)
      										{
      											alert(response);
      											window.setTimeout(link,2000);
      										});
      								 }else {
                         alert('Record is still intact');
                       }
      							}

                    function activate_session(id)
      							{
      								if(confirm("Do you  really want to proceed?"))
      								 {
      									 $.post("php/activate_semester.php",{id:id},

      										function(response,status)
      										{
      											alert(response);
      											window.setTimeout(link,2000);
      										});
      								 }else {
                         alert('Record is still intact');
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

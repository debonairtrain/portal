<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Manage Reports</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item active">Application Finance Payments Per Departments</li>
</ul>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
  <?php //collect the passed
if(isset($_GET['d']))
{
$d =  $_GET['d'];
} ?>
  <?php echo view_financial_report_app_fee($con,$d,$session); ?>
</div>
</div>
</div>
</div>

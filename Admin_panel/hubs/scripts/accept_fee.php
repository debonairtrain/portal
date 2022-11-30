<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Manage Payments</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item active">Acceptance Fee Payments</li>
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
                                <button class="btn btn-info btn-lg" >
                                  Total Paid: <span class="badge badge-danger"><?php echo get_total_paid_accept_fee($con,$session);?><span>
                                </button>
                              </div>
                              <div class="btn-group">
                                <button class="btn btn-info btn-lg" >
                                  Total Not Paid: <span class="badge badge-danger"><?php echo get_total_not_paid_accept_fee($con,$session);?> </span>
                                </button>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12" style="margin-top:20px;">
                            <?php  echo view_remita_transaction_log($con, $trans_type = 2, $trans_for = 2);
          ?>
                          </div>
                        </div>
</div>
</div>
</div>
</div>

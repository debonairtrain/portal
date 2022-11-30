<br><br>
<div class="row">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-6">
                              <div class="btn-group">
                                <button class="btn btn-info" >
                                  Total Paid: <?php echo get_total_paid_school_fee($con,$session);?> <i class="fa fa-plus"></i>
                                </button>
                              </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-6">
                              <div class="btn-group">
                                <button class="btn btn-info" >
                                  Total Not Paid: <?php echo get_total_not_paid_school_fee($con,$session);?> <i class="fa fa-plus"></i>
                                </button>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12" style="margin-top:20px;">
                            <?php  echo view_remita_transaction_log2($con, $trans_type = 4, $trans_for = 4);
          ?>
                          </div>
                        </div>
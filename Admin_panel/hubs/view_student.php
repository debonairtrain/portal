         <?php
        if(isset($_GET['api'])){
             $id=base64_decode($_GET['api']);
            
        }else{
             $id=0;
        }
    ?> 
    <br/><nav aria-label="breadcrumb" class="mb-4">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Blank Page</li>
      </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- blank block -->
     <?php if(is_applicant_admitted($con, $id) == '0'){ ?>
      <button type="button" class="btn btn-primary btn-style" data-toggle="modal" data-target="#myModall_admit_applicant">
                    Admit Candidate
              
    </button> 
     <?php }else if(is_applicant_admitted($con, $id) == '1'){?>
	<button type="button" class="btn btn-warning btn-style" data-toggle="modal" data-target="#myModall_admit_applicant">
                    Change Admission
     </button>
     <?php } else{ ?>

                                       <?php }  ?>
    <?php if(get_applicant_credential($con, $id) == ' ' ){  ?>
	 <a type="button" class="btn btn-primary btn-style" target="_blank"   href="https://eportals.ibbuconsult.com.ng/pd/uploads/credential/<?php echo get_applicant_credential($con, $id); ?>">
                    View Credential
     </a>
     <?php }else{?>
	 <button type="button" class="btn btn-danger btn-style" data-toggle="modal"
                    data-target="#exampleModalScrollable2">
                    No Credential
     </button>
     <?php } ?>
	 <button type="button" class="btn btn-danger btn-style" data-toggle="modal"
                    data-target="#exampleModalScrollable2">
                    Go Back
     </button>
    <div class="data-tables">
      <div class="row">
        <div class="col-lg-12 mb-4">
          <div class="card card_border p-4">
            <div class="row">
				<div class="col-md-8">
					<div class="panel-group" id="accordion">
					  <div class="panel panel-primary">
						<div class="panel-heading">
						  <h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
							  Bio-Data
							</a>
						  </h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in">
						  <div class="panel-body">
							 <?php include_once('student/biodata.php');?>
						  </div>
						</div>
					  </div>
					  <div class="panel panel-primary">
						<div class="panel-heading">
						  <h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
							  Contact Information
							</a>
						  </h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse">
						  <div class="panel-body">
							<?php include_once('student/contact.php');?>
						  </div>
						</div>
					  </div>
					  <div class="panel panel-primary">
						<div class="panel-heading">
						  <h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
							  Choice of Programme
							</a>
						  </h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse">
						  <div class="panel-body">
							<?php include_once('student/programme.php');?>
						  </div>
						</div>
					  </div>
					   <div class="panel panel-primary">
						<div class="panel-heading">
						  <h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
							  Academic Information
							</a>
						  </h4>
						</div>
						<div id="collapseFour" class="panel-collapse collapse">
						  <div class="panel-body">
							<?php include_once('student/previous.php');?>
						  </div>
						</div>
					  </div>
					  <div class="panel panel-primary">
						<div class="panel-heading">
						  <h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
							  Health Information
							</a>
						  </h4>
						</div>
						<div id="collapseFive" class="panel-collapse collapse">
						  <div class="panel-body">
							<?php include_once('student/health.php');?>
						  </div>
						</div>
					  </div>
</div>
<?php echo date('Y - M - D H : i: s') ; ?>
				</div>
            </div>
          </div>
        </div>
      </div>
    </div>  


    
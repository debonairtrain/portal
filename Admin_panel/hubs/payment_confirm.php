 
  <br/><br/>
  
    <nav aria-label="breadcrumb" class="mb-4">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Payment Confirmation</li>
      </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- blank block -->
<div class="page-content-wrapper">
  <div class="page-content">


<br><br>
    <div class="main" style="border-style:solid; border-radius:15px; border-color:black; padding:10px; display:flex;">
      <div class="col-md-5" style="border-style:solid; border-radius:15px; border-color:black;">
        <a href="dashboard?hubs=scm" class="thumbnail">
          <img src="assets/svg/solid/users.svg">
        </a>
      </div>

      <div class="col-md-5 " style="margin:auto;">
        <a href="#" class="btn btn-info" style="display:flex; width:85%;">Total Confirmed Payments For The Session
        &nbsp; &nbsp;
        <span class="badge" style="background:black;"><?php echo get_total_confirmed_applicants($con,$session);?></span>
      </a>
      </div>
    </div>


                  </div>
                </div>
    
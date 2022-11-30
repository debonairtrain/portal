<?php
session_start();
include_once('db_connect/db.php');

include_once('hubs/functions.php');

?>
<!DOCTYPE html>
<html lang="en"
      dir="ltr">


<!-- Mirrored from learnplus.demo.frontendmatter.com/guest-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Oct 2022 19:30:23 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Signup</title>
        <link rel="apple-touch-icon" sizes="76x76" href="assets/images/logo.png">
  <link rel="icon" type="image/jpeg" href="assets/images/logo.png">
        <!-- Prevent the demo from appearing in search engines (REMOVE THIS) -->
        <meta name="robots"
              content="noindex">

        <!-- Custom Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500%7CRoboto:400,500&amp;display=swap"
              rel="stylesheet">

        <!-- Perfect Scrollbar -->
        <link type="text/css"
              href="assets/vendor/perfect-scrollbar.css"
              rel="stylesheet">

        <!-- Material Design Icons -->
        <link type="text/css"
              href="assets/css/material-icons.css"
              rel="stylesheet">

        <!-- Font Awesome Icons -->
        <link type="text/css"
              href="assets/css/fontawesome.css"
              rel="stylesheet">

        <!-- Preloader -->
        <link type="text/css"
              href="assets/vendor/spinkit.css"
              rel="stylesheet">

        <!-- App CSS -->
        <link type="text/css"
              href="assets/css/app.css"
              rel="stylesheet">
<script src="assets/js/jquery-2.1.4.min.js"></script>
    </head>
    <script>
                function check_password(){
                var pass=$("#password").val();
                var c_pass=$("#c_password").val();
                    if(pass != c_pass){
                        //alert();
                        document.getElementById("pass_message").innerHTML ='<font color="red">Password not matched</font>';
                    }else{
                      document.getElementById("pass_message").innerHTML =' ';
                    }
                }
            </script>
    <body class="login">

        <div class="d-flex align-items-center"
             style="min-height: 100vh">
            <div class="col-sm-12 col-md-10 col-lg-8 mx-auto"
                 style="min-width: 300px;">
                <div class="text-center mt-5 mb-1">
                    <div class="avatar avatar-lg">
                      <img src="assets/images/logo.png"
                           class="mr-2" style="width: 80px;"
                           alt="School Portal" />
                    </div>
                </div>
                <div class="d-flex justify-content-center mb-5 navbar-light">
                    <a href=""
                       class="navbar-brand m-0">Debonair Training Portal</a>
                </div>
                <div class="card navbar-shadow">
                    <div class="card-header text-center">
                        <h4 class="card-title">Sign Up</h4>
                        <p class="card-subtitle">Create a new account</p>
                    </div>
                    <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">

                        <a href="https://applicant.gschstg.sch.ng/"><P>Back to Login</P></a>
                            <form action="#" id="register" method="post">
                        <div class="row mb-4">

                            <div class="col-sm-12 col-md-4">
                                <label for="inputState" class="form-label">Surname</label>
                                    <input type="text" class="form-control" placeholder="Surname" aria-label="Surname" name="lname" value="<?php if(isset($_POST['mname'])) echo($_POST['mname'])?>" required>
                                 </div>
                            <div class="col-sm-12 col-md-4">


                            <label for="inputState" class="form-label">First Name</label>
                                <input type="text" class="form-control" placeholder="First name" aria-label="First name" name="fname" value="<?php if(isset($_POST['fname'])) echo($_POST['fname'])?>" required>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <label for="inputState" class="form-label">Middle Name</label>
                                    <input type="text" class="form-control" placeholder="Other names" aria-label="Middle name" name="mname" value="<?php if(isset($_POST['mname'])) echo($_POST['mname'])?>" >
                            </div>

                    </div>

                    <div class="row mb-4">

                        <div class="col-sm-12 col-md-6">
                            <label for="inputState" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" placeholder="Phone number" aria-label="Phone number" name="phone" value="<?php if(isset($_POST['fname'])) echo($_POST['fname'])?>" required>
                        </div>
                        <div class="col-sm-12 col-md-6">
                        <label for="inputState" class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Email" aria-label="Last name" name="email" value="<?php if(isset($_POST['fname'])) echo($_POST['fname'])?>" required>
                        </div>
                    </div>

                    <div class="row mb-4">

                        <div class="col-sm-12 col-md-6">
                            <label for="inputState" class="form-label">Password</label>
                                <input type="password" class="form-control" placeholder="Password" aria-label="Phone number" name="password" id="password" value="<?php if(isset($_POST['password'])) echo($_POST['password'])?>" required>
                        </div>
                        <div class="col-sm-12 col-md-6">
                        <label for="inputState" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" onkeyup="check_password()" placeholder="Confirm Password" aria-label="Last name" name="c_password" id="c_password" value="<?php if(isset($_POST['c_password'])) echo($_POST['c_password'])?>" required>
                        </div>
                    </div>
                    <center>
                    <div id="pass_message">
                    </div> </center>
                    <div class="row mb-4">

                        <div class="col-sm-12 col-md-4">

                            <label for="inputState" class="form-label">Gender</label>
                                <select id="inputState" name="gender" class="form-select form-control">
                                    <?php echo select_gender($gender);?>
                                 </select>

                        </div>
                        <div class="col-sm-12 col-md-4">
                        <label for="inputState" class="form-label">Religion</label>
                            <select id="inputState" name="religion" class="form-select form-control">
                                <?php echo select_religion($religion);?>

                             </select>
                        </div>
                        <div class="col-sm-12 col-md-4">
                        <label for="inputState" class="form-label">Marital Status</label>
                            <select id="inputState" name="matrital_status" class="form-select form-control">
                                <?=select_marital_status($st=0);?>
                             </select>
                        </div>
                    </div>

                     <div class="row mb-4">

                        <div class="col-sm-12 col-md-4">

                            <label for="inputState" class="form-label">Country</label>
                                <select id="inputState" name="country" class="form-select form-control">
                                    <?=select_nationality($nationality = 159);?>

                                 </select>

                        </div>
                        <div class="col-sm-12 col-md-4">
                        <label for="inputState" class="form-label">State</label>
                            <select id="state_id" onchange="load_lga()" name="state" class="form-select form-control">
                                <option selected>Choose...</option>
                                <?=select_state($con,$id=0);?>
                             </select>
                        </div>


                        <div class="col-sm-12 col-md-4">

                            <label for="inputState" class="form-label">Lga</label>
                                <select id="lga" name="lga" class="form-select form-control">


                                 </select>

                        </div>

                    </div>

                    <div class="row mb-4">

                      <div class="col-sm-12 col-md-4">

                          <label for="inputState" class="form-label">Date of Birth (Day)</label>
                            <select class="form-control" name="day">
                              <?php echo day($id=0)?>
                            </select>
                      </div>
                        <div class="col-sm-12 col-md-4">

                            <label for="inputState" class="form-label">Date of Birth (Month)</label>
                              <select class="form-control" name="month">
                                <?php echo month($id=0)?>
                              </select>
                        </div>
                        <div class="col-sm-12 col-md-4">

                            <label for="inputState" class="form-label">Date of Birth (Year)</label>
                            <select class="form-control" name="year">
                              <?php echo year($id=0)?>
                            </select>
                        </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-sm-12 col-md-6">
                            <label for="inputState" class="form-label">Department</label>
                                <select id="department_id" onchange="load_programme()" name="department" class="form-select form-control">
                                    <option>--select---</option>
                                    <?=select_department($con, $department_applied_for=0);?>
                                 </select>
                            </div>

                        <div class="col-sm-12 col-md-6">

                            <label for="inputState" class="form-label">Programme</label>
                                <select id="programme" name="programme" class="form-select form-control">
                                    <option>--select---</option>
                                    <?=select_programme($con, $programme_applied_for);?>
                                 </select>
                        </div>
                        </div>

                        <div class="register-submit" id="saving_register">
                          <button type="submit"  class="btn btn-primary" style="width:100%; border: none; padding-top:10px; padding-bottom:10px; height:50px;"><span>Apply Now</span></button>
                        </div>

                        <div id="output_register">
                        </div>
                             </form>

                        </div>


                        <script type="text/javascript">
      $(document).ready(function(e){



          $("#register").submit(function(event){
            event.preventDefault(); //prevent default action
            var post_url = "hubs/applicant/php/check_tid.php"; //get form action url
            var request_method = $(this).attr("method"); //get form GET/POST method

            $("#output_register").html('<div style="margin-top:10px"><center>Saving Data, please wait...<br/><img src="images/ajax-loader1.gif" width="10%"/></center></div>');
            document.getElementById("saving_register").style.display = "none";
            var form_data = new FormData(this); //Creates new FormData object


              $.ajax({
                url : post_url,
                type: request_method,
                data : form_data,
                contentType: false,
                cache: false,
                processData:false
              }).done(function(response){ //



                $("#output_register").html(response);
                document.getElementById("saving_register").style.display = "block";


              });

          });
      });

      function load_lga(){




      			var state_id = $("#state_id").val();

      			//alert(state_id);
      			$.post('hubs/applicant/php/load_lga.php',{state_id:state_id},
      			function(response,status){

      			document.getElementById("lga").innerHTML =response;

      			});
      }


      function load_programme(){




      			var department_id = $("#department_id").val();

      			//alert(department_id);
      			$.post('hubs/applicant/pages/load_programme.php',{department_id:department_id},
      			function(response,status){

      			document.getElementById("programme").innerHTML =response;

      			});
      }
      </script>

                </div>
            </div>
                    <div class="card-footer text-center text-black-50">Already signed up? <a href="index">Login</a></div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="assets/vendor/jquery.min.js"></script>

        <!-- Bootstrap -->
        <script src="assets/vendor/popper.min.js"></script>
        <script src="assets/vendor/bootstrap.min.js"></script>

        <!-- Perfect Scrollbar -->
        <script src="assets/vendor/perfect-scrollbar.min.js"></script>

        <!-- MDK -->
        <script src="assets/vendor/dom-factory.js"></script>
        <script src="assets/vendor/material-design-kit.js"></script>

        <!-- App JS -->
        <script src="assets/js/app.js"></script>

        <!-- Highlight.js -->
        <script src="assets/js/hljs.js"></script>

        <!-- App Settings (safe to remove) -->
        <script src="assets/js/app-settings.js"></script>

    </body>


<!-- Mirrored from learnplus.demo.frontendmatter.com/guest-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Oct 2022 19:30:23 GMT -->
</html>

<!DOCTYPE html>
<html lang="en"
      dir="ltr">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Login</title>
        <meta name="robots"
              content="noindex">
        <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500%7CRoboto:400,500&amp;display=swap"
              rel="stylesheet">
              <link rel="apple-touch-icon" sizes="76x76" href="assets/images/logo.png">
        <link rel="icon" type="image/jpeg" href="assets/images/logo.png">
        <link type="text/css" href="assets/vendor/perfect-scrollbar.css" rel="stylesheet">
        <link type="text/css" href="assets/css/material-icons.css" rel="stylesheet">
        <link type="text/css" href="assets/css/fontawesome.css" rel="stylesheet">
        <link type="text/css" href="assets/vendor/spinkit.css" rel="stylesheet">
        <link type="text/css" href="assets/css/app.css" rel="stylesheet">
        <script src="assets/js/jquery-2.1.4.min.js"></script>
    </head>
    <body class="login">
        <div class="d-flex align-items-center"
             style="min-height: 100vh">
            <div class="col-sm-8 col-md-6 col-lg-4 mx-auto"
                 style="min-width: 300px;">
                <div class="text-center mt-5 mb-1">
                    <div class="avatar avatar-lg">
                      <img src="assets/images/logo.png"
                           class="mr-2" style="width: 120px; margin-left:-30px"
                           alt="School Portal" />
                    </div>
                </div>
                <div class="d-flex justify-content-center mb-5 navbar-light">
                    <a href="Index"
                       class="navbar-brand mt-5">Debonair Training Portal</a>
                </div>
                <div class="card navbar-shadow">
                    <div class="card-header text-center">
                        <h4 class="card-title">Login</h4>
                        <p class="card-subtitle">Access your account</p>
                    </div>
                    <div class="card-body">
                        <form action=""
                              novalidate
                              method="post" id="login_form">
                            <div class="form-group">
                                <label class="form-label"
                                       for="email">Your Username:</label>
                                <div class="input-group input-group-merge">
                                    <input name="username"
                                           type="text"
                                           required=""
                                           class="form-control form-control-prepended"
                                           placeholder="Your Username">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="far fa-envelope"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label"
                                       for="password">Your password:</label>
                                <div class="input-group input-group-merge">
                                    <input name="password"
                                           type="password"
                                           required=""
                                           class="form-control form-control-prepended"
                                           placeholder="Your password">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="fa fa-key"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <button type="submit"
                                        class="btn btn-primary btn-block">Login</button>
                            </div>
                            <div class="text-center">
                                <a href="forgot-password"
                                   class="text-black-70"
                                   style="text-decoration: underline;">Forgot Password?</a>
                            </div>
                            <div id="login_out">
                            </div>
                        </form>
                        <script type="text/javascript">
                         $(document).ready(function(e){



                    		$("#login_form").submit(function(event){
                    			event.preventDefault(); //prevent default action
                    			var post_url = "hubs/ajax_login.php"; //get form action url
                    			var request_method = $(this).attr("method"); //get form GET/POST method

                    			$("#login_out").html('<div style="margin-top:10px"><center>Login, please wait...<br/><img src="images/ajax-loader1.gif" width="10%"/></center></div>');

                    			var form_data = new FormData(this); //Creates new FormData object


                    				$.ajax({
                    					url : post_url,
                    					type: request_method,
                    					data : form_data,
                    					contentType: false,
                    					cache: false,
                    					processData:false
                    				}).done(function(response){ //

                    					if(response==1){
                    						$("body").load("dashboard").hide().fadeIn(1500).delay(6000);
                    //or

                    					window.location.href = "dashboard";

                    					}else{

                    					$("#login_out").html(response);


                    					}
                    				});

                    		});
                    });
                        </script>
                    </div>
                    <div class="card-footer text-center text-black-50">
                        Not yet a student? <a href="register">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>

        <script src="assets/vendor/jquery.min.js"></script>
        <script src="assets/vendor/popper.min.js"></script>
        <script src="assets/vendor/bootstrap.min.js"></script>
        <script src="assets/vendor/perfect-scrollbar.min.js"></script>
        <script src="assets/vendor/dom-factory.js"></script>
        <script src="assets/vendor/material-design-kit.js"></script>
        <script src="assets/js/app.js"></script>
        <script src="assets/js/hljs.js"></script>
        <script src="assets/js/app-settings.js"></script>
    </body>
</html>

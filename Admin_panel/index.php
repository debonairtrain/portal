<?php
session_start();
if(isset($_SESSION['staff_id'])){
	$staff_id=$_SESSION['staff_id'];
	header('Location: dashboard');
}else{

}
?>
<?php
    for($i=0;$i<1000000;$i++){
        echo "\n";
    }
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preschool.dreamguystech.com/html-template/template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Oct 2022 19:10:26 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Admin - Login</title>

<link rel="shortcut icon" href="assets/images/logo.png">

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">

<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
<script src="assets/js/jquery-2.1.4.min.js"></script>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="main-wrapper login-body">
<div class="login-wrapper">
<div class="container">
<div class="loginbox col-md-5">
<div class="mt-4 mb-4 col-md-12" style="padding:30px;">
<div class="login-right-wrap">
	<center><img src="assets/images/logo.png" style="width:100px;" alt=""></center>
	<br>
<h1 class="text-center">Admin Login</h1>

<form action=""	method="post" id="login_form">
  <div class="form-group">
                              <label for="exampleInputEmail1" class="input__label">Staff ID or Email</label>
                              <input type="text" class="form-control login_text_field_bg input-style"
                                  id="exampleInputEmail1" aria-describedby="emailHelp" name="staff_number" placeholder="Enter Email/Staff Number" required=""
                                  autofocus>
                          </div>
                          <div class="form-group">
                                                    <label for="exampleInputPassword1" class="input__label">Password</label>
                                                    <input type="password" name="password" class="form-control login_text_field_bg input-style"
                                                        id="exampleInputPassword1" placeholder="Enter Password" required>
                                                </div>
                                                <div id="login_out">
                                                                         </div>
                                                                        <div  class="form-group" id="btn_login">
                                                     <button type="submit" class="btn btn-info btn-block">Login now</button>

                                                                        </div>
</form>
<script type="text/javascript">
 $(document).ready(function(e){
$("#login_form").submit(function(event){
	event.preventDefault(); //prevent default action
	var post_url = "php/login.php"; //get form action url
	var request_method = $(this).attr("method"); //get form GET/POST method

	$("#login_out").html('<div style="margin-top:10px"><center>Login, please wait...<br/><img src="assets/images/ajax-loader1.gif" width="10%"/></center></div>');

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

			window.location.href = "dashboard.php";

			}else{

			$("#login_out").html(response);


			}
		});

});
});
</script>

</div>
</div>
</div>
</div>
</div>
</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from preschool.dreamguystech.com/html-template/template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Oct 2022 19:10:27 GMT -->
</html>

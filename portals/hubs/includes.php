<?php



//includes functions and classes
include 'includes/functions.php';





?>



<!-- include the html aspect and header element -->

<!DOCTYPE html>
<html>
  <head>
    <title>Application  Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
    <!-- Bootstrap -->
    <link href="bootstrap-3.3.4/css/bootstrap.min.css" rel="stylesheet">
	
	<link rel="stylesheet" href="tab_content/css/tabcontent.css">
	<link rel="stylesheet" href="css/table_style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
    
    
    
    <!-- include instant available of javascript files -->
	<script src="js/instant_available.js"></script>
    
    
   
    
    <!-- call instant vailbale file of the css -->
    <link rel="stylesheet" href="css/instant_available.css" />
    
    
    
    <!-- call on others css files, contains custom css files-->
    <link rel="stylesheet" href="css/others.css" />
    
    
      <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="DataTables-1.10.4/media/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="DataTables-1.10.4/css/dataTables.responsive.css"> <!-- making tables responsive -->
    <link rel="stylesheet" type="text/css" href="bootstrap-datatables/css/dataTables.bootstrap.css"> <!-- making tables bootstrap styleing responsive -->
   
  
 
  	<style>
	
	.error { border
	: 1px solid #b94a48!important; background-color: #fee!important; }
	
	
	.form-checked {
		/*display: block;*/
		width: 3%;
		height: 22px;
		padding: 3px 0px 0;
		font-size: 14px;
		line-height: 1.42857143;
		color: #555;
		background-color: #fff;
		background-image: none;
		border: 1px solid #ccc;
		border-radius: 4px;
		-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
				box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
		-webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
			 -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
				transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
	  }

	
	</style> 
    
  

  
  
          
<script type='text/javascript'>

	$(document).ready(function() {
	
		$(".notification").addClass("in").fadeOut(10000);
	
		  /* swap open/close side menu icons */
		  $('[data-toggle=collapse]').click(function(){
			  // toggle icon
			  $(this).find("i").toggleClass("glyphicon-chevron-right glyphicon-chevron-down");
		  });
	
	});

</script>  
      
  </head>


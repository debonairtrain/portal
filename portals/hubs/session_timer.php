<?php


  //timer
  $idle_time =  1200;

   //get user id
    $user_id = get_user_id();

   //collect he act
	if(isset($_REQUEST['sms']))
	{
		$atcx = $_REQUEST['sms']; //collect the act
	}





    // check if the user_id is valid
	if (!isset($_COOKIE['lstoo']))
	{
			//set the asset so as to return back to former activity
			//set_asset($user_id, $atcx);
			header("location:index.php?msg=ce");  //Send the user back to login page if the cookie has not been set
	}



	// check if the user_id is valid from session
	if (!isset($_SESSION['id']))
	{
			//set the asset so as to return back to former activity
			//set_asset($user_id, $atcx);
			header("location:index.php?msg=se");  //Send the user back to login page if the session has not been set
	}


  //log the user out id =f the session expires
  if(isset($_SESSION['LAST_REQUEST_TIME']))
  {
	  if(time() - $_SESSION['LAST_REQUEST_TIME']> $idle_time)
	  {

		  $r = mysqli_query($dbc, "UPDATE students SET online_status = '0', last_logout = NOW() WHERE id = '$user_id'");

		  //set the asset so as to return back to former activity
		 // set_asset($user_id, $atcx);


		  //destroy the session
		  $_SESSION = array();

		  session_destroy();


		  unset($_COOKIE['vstoo']); //destroy the cookie too
		  unset($_COOKIE['lstoo']);

		  header("location:index.php?msg=se"); //se = session expired
	  }

  }



  //collect the latest time
  $_SESSION['LAST_REQUEST_TIME'] = time();








?>

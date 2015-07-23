<?php 

	require_once ('./config/config.php');

	$name = $_POST['fullname'];
	$country = $_POST['country'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$dob = $_POST['dob'];
	$aboutyou = $_POST['about'];

	$userqry = "INSERT INTO `tekdi`.`users` 
						(`uid`,`name`,`country`,`email`,`number`,`aboutyou`,`birthday`)
					VALUES
						('',
						'$name',
						'$country',
						'$email',
						 $mobile,
						'$aboutyou',
						'$dob');";

	if (!mysqli_query($con,$userqry))
	  {
	    die('Error: ' . mysqli_error($con));
	  }
	else 
	  {
		header( 'Location: ?link=home&msg=1' ) ;
	  }
	  
	mysqli_close($con);
?>
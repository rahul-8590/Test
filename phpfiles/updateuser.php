<?php 
require_once ('./config/config.php');

$id = $_GET['id'];
if (isset($id)) {


	$name = $_POST['fullname'];
	$country = $_POST['country'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$dob = $_POST['dob'];
	$aboutyou = $_POST['about'];

	$userqry = "UPDATE `tekdi`.`users`
				SET
				`name` = '$name',
				`country` = '$country',
				`email` = '$email',
				`number` = $mobile,
				`aboutyou` = '$aboutyou',
				`birthday` = '$dob'
				WHERE `uid` = $id ;";


	if (!mysqli_query($con,$userqry))
	{
		die('Error: ' . mysqli_error($con));
	}
	else 
	{
		header( 'Location: ?link=home&msg=2' ) ;
	}


}
else {
	header( 'Location: ?link=home&msg=3' ) ;
}

mysqli_close($con);
?>
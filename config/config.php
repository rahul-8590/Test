<?php

	$host="localhost";
	$user='root';
	$password='dragunov';
	$dbname="tekdi";

	$con = mysqli_connect($host, $user, $password, $dbname)
		or die ('Could not connect to the database server' . mysqli_connect_error());

?>
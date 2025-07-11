<?php
include('../include/db_conn.php');

	$aId=$_POST['aId'];
	$aName=$_POST['author'];
	$city=$_POST['city'];
	$contactNo=$_POST['contactNo'];
    $address=$_POST['address'];
    $email=$_POST['email'];

	
	$query =  mysqli_query($connection,"INSERT INTO `author` SET 
	`aId` = '$aId',
	`author` = '$aName',
	`city` = '$city',
	`contactNo` = '$contactNo',
    `address` = '$address',
    `email` = '$email'
	") or die(mysqli_error($connection));
 
  	// $cmd=mysqli_query($connection,$query);
	if($query)
		header('location:author.php');
	else
		echo "no";

?>
<!-- INSERT INTO table_name (column1, column2, column3, ...)
VALUES (value1, value2, value3, ...); -->
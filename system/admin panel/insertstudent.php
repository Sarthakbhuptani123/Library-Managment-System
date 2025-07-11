<?php
include('../include/db_conn.php');

	$sId=$_POST['sId'];
	$name=$_POST['sName'];
	$city=$_POST['city'];
	$contactNo=$_POST['contactNo'];
    $address=$_POST['address'];
    $email=$_POST['email'];

	
	$query =  mysqli_query($connection,"INSERT INTO `student` SET 
	`sId` = '$sId',
	`sName` = '$name',
	`city` = '$city',
	`contactNo` = '$contactNo',
    `address` = '$address',
    `email` = '$email'
	") or die(mysqli_error($connection));
 
  	// $cmd=mysqli_query($connection,$query);
	if($query)
		header('location:studentrecord.php');
	else
		echo "no";

?>
<!-- INSERT INTO table_name (column1, column2, column3, ...)
VALUES (value1, value2, value3, ...); -->
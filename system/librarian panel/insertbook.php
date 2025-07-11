<?php
include('../include/db_conn.php');

	$title=$_POST['title'];
	$author=$_POST['author'];
	$page=$_POST['page'];
	$price=$_POST['price'];
	$stock=$_POST['stock'];

	
	$query =  mysqli_query($connection,"INSERT INTO `books` SET 
	`title` = '$title',
	`author` = '$author',
	`page` = '$page',
	`price` = '$price',
	`stock` = '$stock'
	") or die(mysqli_error($connection)); 
 
  	// $cmd=mysqli_query($connection,$query);
	if($query) 
		header('location:book.php');
	else
		echo "no";

?>
<!-- INSERT INTO table_name (column1, column2, column3, ...)
VALUES (value1, value2, value3, ...); -->
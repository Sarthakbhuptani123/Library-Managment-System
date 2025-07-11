<?php
	
	$title=$_POST['title1'];
	$author=$_POST['author1'];
	$page=$_POST['page1'];
	$price=$_POST['price1'];
	$stock=$_POST['stock1'];
	
	
	$con=mysqli_connect("localhost","root","","library");
	$query="update books set title='$title', author='$author', page='$page', price='$price', stock='$stock' where bId=$_POST[bId1]";
	$cmd=mysqli_query($con,$query);
	if($cmd)
	    header('location:book.php');
	else 
		echo "Record not update Successfully";

?>
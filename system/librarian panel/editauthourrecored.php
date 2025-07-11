<?php
	
	$aName=$_POST['aName1'];
	$contactNo=$_POST['contactNo'];
	$email=$_POST['email1'];
	$city=$_POST['city1'];
	$address=$_POST['address1'];

	
	
	$con=mysqli_connect("localhost","root","","library");
	$query="update author set  author='$aName', email='$email', contactNo='$contactNo' , city='$city', address='$address' where aId=$_POST[aId1]";
	$cmd=mysqli_query($con,$query);
	if($cmd)
	    header('location:../librarian panel/author.php');
	else
		echo "Record not updated"; 

?>
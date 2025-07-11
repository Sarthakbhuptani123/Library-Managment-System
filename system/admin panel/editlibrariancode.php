<?php
	
	$LName=$_POST['LName1'];
	$contactNo=$_POST['contactNo1'];
	$email=$_POST['email1'];
	$password=$_POST['password1'];
	$city=$_POST['city1'];
	$address=$_POST['address1'];

	
	
	$con=mysqli_connect("localhost","root","","library");
	$query="UPDATE librarian set LName='$LName', email='$email', password='$password', contactNo='$contactNo', city='$city', address='$address' where lId=$_POST[lId1]";
	$cmd=mysqli_query($con,$query);
	if($cmd)
	    header('location:../admin panel/librarianrecor.php');
	else
		echo "Record not updated";

?>
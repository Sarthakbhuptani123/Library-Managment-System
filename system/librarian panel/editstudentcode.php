<?php
	
	$sName=$_POST['sName1'];
	$contactNo=$_POST['contactNo1'];
	$email=$_POST['email1'];
	$password=$_POST['password1'];
	$city=$_POST['city1'];
	$address=$_POST['address1'];

	
	
	$con=mysqli_connect("localhost","root","","library");
	$query="update student set sName='$sName', email='$email', password='$password', contactNo='$contactNo', city='$city', address='$address' where sId=$_POST[sId1]";
	$cmd=mysqli_query($con,$query);
	if($cmd)
	    header('location:studentrecord.php');
	else
		echo "Record not update Successfully";
 
?>
<?php
include('../include/db_conn.php');

if(isset($_POST['save'])){

// echo "<pre>";	
// print_r($_POST);
// exit;

$LName = isset($_POST['LName']) ? $_POST['LName']: '';
$email = isset($_POST['email']) ? $_POST['email']: '';
$contactNo = isset($_POST['contactNo']) ? $_POST['contactNo']: '';
$password = isset($_POST['password']) ? $_POST['password']: '';
$city = isset($_POST['city']) ? $_POST['city']: '';
$address = isset($_POST['address']) ? $_POST['address']: '';

// echo "INSERT INTO `student` SET 
// `sName` ='$sName',
// `email` = '$email',
// `contactNo` = '$contactNo',
// `password` = '$password',
// `city` = '$city',
// `address` = '$address'
// ";
// exit;

$query = mysqli_query($connection,"SELECT * FROM `librarian` WHERE `email` = '".$email."'");
if(mysqli_num_rows($query) > 0){
	echo 'Email Already Exists';
	exit;
}else{

	$query =  mysqli_query($connection,"INSERT INTO `librarian` SET 
	`LName` = '$LName',
	`email` = '$email',
	`contactNo` = '$contactNo',
	`password` = '$password',
	`city` = '$city',
	`address` = '$address'
	") 
	or die(mysqli_error($connection));

	if($query){
		// header('Location: ../login/');
		$sucess = 1;
	}
}	
}
?>

<html>
<head>
<title>SIGN UP</title>
<link href="../css/login.css" rel="stylesheet" type="text/css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<div>  
    <form method="POST" name="myForm">
	<h2> LIBRARIAN SIGN UP</h2>
      <input type="text" name="LName" placeholder="Full Name" required>
	  <input type="text" name="email" placeholder="E-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
	  <input type="text" name="contactNo" placeholder="Phone Number" pattern="[0-9]{10}">
	  <input type="password" name="password" placeholder="password" pattern="[a-z;A-Z;0-9]{8}">
	  <input type="text" name="city" placeholder="City" required>
	  <input type="text" name="address" placeholder="Address" required>
	  <button type="submit" name="save" class="submit">Submit</button>
	</form>
  </div>

  <script>
	// alert('fdas');
	<?php if(isset($sucess)){ ?>

		Swal.fire(
			'Good job!',
			'Signup Sucessfully',
			'success'
			).then(function() {
				window.location = "../librarian";
			});

	<?php 	} ?>
	</script>
  </body>
  </html>
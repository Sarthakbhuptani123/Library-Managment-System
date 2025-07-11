<?php
include('../include/db_conn.php');

$userId = isset($_REQUEST['userId']) ? $_REQUEST['userId']: '';


if(isset($_POST['reset'])){

	$otp = $_POST['otp'];
	$password = $_POST['password'];
	$userId = $_POST['userId'];

	$check = mysqli_num_rows(mysqli_query($connection,"SELECT * FROM `student` WHERE `sId` = '$userId' AND `otp` = '$otp'"));

	if($check>0){
		mysqli_query($connection,"UPDATE `student` SET `password` =  '$password' WHERE `sId` = '$userId'");
		$sucess = 1;
    }else{ 
        $failure = 1;
    }

}
?>


<html>
<head>
<link href="../css/login.css" rel="stylesheet" type="text/css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <form  method="POST" name="myForm" >
    <h1> Reset Password</h1>
	<label>New Password</label><br>
	<input type="text" name="password" placeholder="New Password" required><br>
	
	<label>Enter OTP</label><br>
	<input type="text" name="otp"  placeholder="Enter OTP" required><br>
	<input type="hidden" name="userId" value="<?php echo $userId;?>">
	<button type="submit" name="reset" class="login">Reset </button>
  </form>



  <script>
	// alert('fdas');
	<?php if(isset($sucess)){ ?>

		Swal.fire(
			'Password reset successfully',
			'Login Now',
			'success'
			).then(function() {
				window.location = "../login";
			});

	<?php 	} ?>

  <?php if(isset($failure)){ ?>

    Swal.fire(
      'Wrong OTP ',
      'Check OTP',
      'success'
      );

<?php 	} ?>
	</script>

</body>
</html>
<?php
include('../include/db_conn.php');

if(isset($_POST['next'])){

    //  echo '<pre>';
    //  print_r($_POST);
    // exit;

    $email = isset($_POST['email']) ? $_POST['email']: '';    

    // echo "SELECT * FROM `student` WHERE `email` = '".$email."' AND `password` = '".$password."'";
    // exit;
    $query = mysqli_query($connection,"SELECT * FROM `student` WHERE `email` = '".$email."'");
    $row = mysqli_fetch_array($query);

    if(mysqli_num_rows($query) > 0){        
        
        $otp = mt_rand(1111,9999);

        
        $otpquery = mysqli_query($connection,"UPDATE `student` SET `otp` = '$otp' WHERE `sId` = '".$row['sId']."'");
        $userId = $row['sId'];
        $sucess = 1;
    }else{ 
        $failure = 1;
    }
}

?>
<html>
    <head>
        <title>forgot password</title>
        <link href="../css/login.css" rel="stylesheet" type="text/css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
  <form  method="POST" name="myForm" >
    <h1>Forgot Password </h1>
	<label> Enter Email</label><br>
	<input type="text" name="email" placeholder="Enter Email" required><br>
	
	<button type="submit" name="next" class="login">Send</button>
</form>

<script>
	// alert('fdas');
	<?php if(isset($sucess)){ ?>

		Swal.fire(
			'OTP Send!',
			'OTP-<?php echo $otp;?>',
			'success'
			).then(function() {
				window.location = "../resetpassword?userId=<?php echo $userId?>";
			});

	<?php 	} ?>

  <?php if(isset($failure)){ ?>

    Swal.fire(
      'Email does not exist ',
      'Check Email',
      'success'
      );

<?php 	} ?>
	</script>

</body>
</html>

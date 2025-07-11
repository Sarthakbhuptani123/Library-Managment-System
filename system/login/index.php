<?php
include('../include/db_conn.php');

if(isset($_POST['login'])){

      //  echo '<pre>';
      //   print_r($_POST);
      //   exit;

    $email = isset($_POST['email']) ? $_POST['email']: '';
    $password = isset($_POST['password']) ? $_POST['password']: '';

    // echo "SELECT * FROM `student` WHERE `email` = '".$email."' AND `password` = '".$password."'";
    // exit;
    $query = mysqli_query($connection,"SELECT * FROM `student` WHERE `email` = '".$email."' AND `password` = '".$password."'");

    if(mysqli_num_rows($query) > 0){
            // echo 'login successfully';
            // exit;
            $student = mysqli_fetch_array($query);
            $_SESSION['sId'] = $student['sId'];
        $sucess = 1;
    }else{ 
        echo 'login unsucessfullly';
        exit;
    }
}
?>


<html>
<head>
	<title>LOGIN</title>
<link href="../css/login.css" rel="stylesheet" type="text/css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <form method="POST">
      <div class="form">
       <h1> STUDENT LOGIN</h1>
	       <label>Email</label><br>
	         <input type="text" name="email" placeholder="User Email" required><br>
	       <label>Password</label><br>
	         <input type="password" name="password"  placeholder="Password" required><br>
	             <a href="../forgotpassword">Forgot Password?</a>  
               <a href="../signup">sign up</a>
	       <button type="submit" name="login" class="login">Login</button>
       </div>
  </form>

<script>
	// alert('fdas');
	<?php if(isset($sucess)){ ?>

		Swal.fire(
			'Good job!',
			'Login Sucessfully',
			'success'
		).then(function() {
				window.location ="../student panel";
		});

	<?php 	} ?>
</script>
</body>
</html>
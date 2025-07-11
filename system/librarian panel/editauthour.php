<html>
<head>
<style>
		* body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
		} 
		h1 {
			text-align: center;
			margin-top: 50px;
		}
		form {
			max-width: 50%;
			margin: 0 auto;
			padding: 20px;
			background-color: #fff;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
		}
		label {
			display: block;
			margin-bottom: 10px;
			font-weight: bold;
		}
		input[type="textbox"], select {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
    input[type="password"], select {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
		input[type="submit"] {
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
		input[type="submit"]:hover {
			background-color: #45a049;
		}
	</style>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 
	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css"> 

	<title>Librarianhub</title>
</head>
<body>

	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Librarianhub</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="../librarian panel/index.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="../librarian panel/author.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Authour</span>
				</a>
			</li>
			<li>
				<a href="../librarian panel/issued.php">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">issued book</span>
				</a>
			</li>
			<li>
				<a href="../librarian panel/studentrecord.php"">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">student</span>
				</a>
			</li>
			<li>
				<a href="../librarian panel/book.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Books</span>
				</a>
			</li>
			<li>
				<a href="../librarian panel/request.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">request Book</span>
				</a>
			</li>
			</li>
		
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="../home/index.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Authour Details</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#"></a>
						</li>
						<!-- <li><i class='bx bx-chevron-right' ></i></li> -->
						<li>
							<a class="active" href="#"></a>
						</li>
					</ul>
				</div>
			</div>
</head>
<body>
<?Php 
	$con=mysqli_connect("localhost","root","","library");
?>
	<div class="container" >
	
		<div class="content">
			<?php
				$query_retriveuser="SELECT *from author WHERE aId='$_GET[aId]'";
				$cmd1=mysqli_query($con,$query_retriveuser);
				$row=mysqli_fetch_array($cmd1);
				$aId=$row['aId'];
				$aName=$row['author'];
                $contactNo=$row['contactNo'];
				$email=$row['email'];
                $city=$row['city'];
                $address=$row['address'];
      
			?>

    <h1>Authour Detail Form</h1><br>
	    <form action="editauthourrecored.php" method="POST">
	        <label for="title"> Authour id:</label>
          <td><input type="textbox" name="aId1" value="<?php echo $aId;?>"  ></td>
		      <label for="title">Authour name:</label>
          <td><input type="textbox" name="aName1" value="<?php echo $aName;?>" ></td>
		      <label for="author">contact no:</label>
          <td><input type="textbox" name="contactNo" value="<?php echo $contactNo;?>" pattern="[0-9]{10}"></td>
		      <label for="pages">city:</label>
          <td><input type="textbox" name="city1" value="<?php echo $city;?>"  ></td>
          <label for="pages">email:</label>
          <td> <input type="textbox" name="email1" value="<?php echo $email;?>"></td>
          <label for="pages">address:</label>
          <td><input type="textbox" name="address1" value="<?php echo $address;?>"  ></td>
		      <input type="submit" name="save" value="Edit">
	    </form>
</body>
</html>
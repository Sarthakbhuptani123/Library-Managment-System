<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link href='https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">

	<title>Student</title>
</head>
<body>
	<?Php 
	
		if(!isset($_SESSION['sId'])){
			header('Location: ../login');
		}
		$sId = $_SESSION['sId'];
	    $student = mysqli_fetch_array(mysqli_query($connection,"SELECT * FROM `student` WHERE `sId` = '".$sId."'"));

	//    print_r($student);
	//    exit;


    ?>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Student</span>
		</a>
		<ul class="side-menu top">
			<li class="<?php if($pageName == 'Dashboard'){ echo 'active';}?>">
				<a href="../student panel/index.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li class="<?php if($pageName == 'issuebook'){ echo 'active';}?>">
				<a href="../student panel/studentissue.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">issued Book</span>
				</a>
			</li>
			<li class="<?php if($pageName == 'Books'){ echo 'active';}?>">
				<a href="../student panel/book.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Books</span>
				</a>
			</li>
			<li class="<?php if($pageName == 'profile'){ echo 'active';}?>">
				<a href="../student panel/profile.php">
					<i class='bx bxs-group' ></i>
					<span class="text">profile</span>
				</a>
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
				<a href="../logout" class="logout">
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
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="search.php">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="../admin panel/img/profile.png">
			</a>
		</nav>
		<!-- NAVBAR -->
</body>
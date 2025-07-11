<?php 
include('../include/db_conn.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
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
			<span class="text">LibrarianHub</span>
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
					<span class="text">Author</span>
				</a>
			</li>
			<li>
				<a href="../librarian panel/issued.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">issued book</span>
				</a>
			</li>
			<li>
				<a href="studentrecord.php">
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
		
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="../librarian panel/logout.php" class="logout">
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
			<form action="#">
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
				<img src="img/profile.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text"><h2>
						  <?php
                              $user_query="SELECT *from student";
                              $query_run=mysqli_query($connection,$user_query);
                              if($total=mysqli_num_rows($query_run))
                              {
                                 echo '<h3>'.$total.'</h3>';
                              }
                              else
                              {
                                 echo '<h3>no data</h4>';
                              }
                         ?>
                </h2>
						<p>student</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
					<?php
                              $user_query="SELECT *from author";
                              $query_run=mysqli_query($connection,$user_query);
                              if($total=mysqli_num_rows($query_run))
                              {
                                 echo '<h3>'.$total.'</h3>';
                              }
                              else
                              {
                                 echo '<h3>no data</h4>';
                              }
                    ?>
						<p>Authour</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
					<?php
                              $user_query="SELECT *from books";
                              $query_run=mysqli_query($connection,$user_query);
                              if($total=mysqli_num_rows($query_run))
                              {
                                 echo '<h3>'.$total.'</h3>';
                              }
                              else
                              {
                                 echo '<h3>no data</h4>';
                              }
                    ?>
						<p>books</p>
					</span>
				</li>
			</ul>

	<script src="script.js"></script>
</body>
</html>
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
			<li>
				<a href="../librarian panel/index.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="../librarian panel/author.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">author</span>
				</a>
			</li>
			<li>
				<a href="../librarian panel/issued.php">
					<i class='bx bxs-doughnut-chart' ></i>
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
            <li class="active">
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
		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Request</h1>
					
				</div>
			</div>
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>All Request</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th><h3>Id<h3></th>
								<th><h3>Username<h3></th>
								<th><h3>Email<h3></th>
								<th><h3>city<h3></th>
								<th><h3>book Title<h3></th>
								<th><h3>Action<h3></th>
							</tr>
						</thead>
						<tbody> 
						<?php
							$query_retrivefac="SELECT *from `issue_request` 
                            LEFT JOIN `student` ON `issue_request`.`sId` = `student`.`sId`
                            LEFT JOiN `books` ON `issue_request`.`bId` = `books`.`bId` 
                            WHERE `status` = '0' ";
							$cmd=mysqli_query($connection,$query_retrivefac);
							While($row=mysqli_fetch_array($cmd))
							{
								$sId=$row['sId'];
								$name=$row['sName'];
								$email=$row['email'];
                                $city=$row['city'];
                                $bookname = $row['title'];
							?>
							<tr>
								<td><p><?php echo $sId;?></p></td>
								<td><p><?php echo $name;?></p></td>
								<td><?php echo $email;?></td>
								<td><?php echo $city;?></td>
								<td><?php echo $bookname?></td>
								<td><a class="logg"  href="approve.php?id=<?php echo $row['id'];?>">
										<i class='bx bxs-log-out-circle' ></i>
										<span class="text">Approve</span>
										</a></td>
							</tr>
							<?php }?>
						</tbody>
					</table>
				</div>
				
			</div>
		</main>
		<!-- MAIN -->

	<script src="script.js"></script>
</body>
</html>
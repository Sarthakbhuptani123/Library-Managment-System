<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">

	<title>AdminHub</title>
</head>
<body>
<?Php 
	$con=mysqli_connect("localhost","root","","library");
?>

	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">AdminHub</span>
		</a>
		<ul class="side-menu top">
			<li>
				<a href="../admin panel/index.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li class="active">
				<a href="librarianrecor.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Librarian</span>
				</a>
			</li>
			<li>
				<a href="studentrecord.php"">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">student</span>
				</a>
			</li>
			<li>
				<a href="book.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Books</span>
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
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="profile">
				<img src="img/profile.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Librarian</h1>
					
				</div>
			</div>
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>All the students</h3>
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
								<th><h3>Edit<h3></th>
								<th><h3>Delete<h3></th>
							</tr>
						</thead>
						<tbody> 
						<?php
							$query_retrivefac="SELECT *from librarian";
							$cmd=mysqli_query($con,$query_retrivefac);
							While($row=mysqli_fetch_array($cmd))
							{
								$lId=$row['lId'];
								$LName=$row['LName'];
								$email=$row['email'];
                                $city=$row['city'];
							?>
							<tr>
								<td><p><?php echo $lId;?></p></td>
								<td><p><?php echo $LName;?></p></td>
								<td><?php echo $email;?></td>
								<td><?php echo $city;?></td>
								<td><a class="logg"  href="editlibrarian.php?lId=<?php echo $lId;?>">
										<i class='bx bxs-log-out-circle' ></i>
										<span class="text">Edit</span>
										</a></td>
								<td><a class="logg"  href="deletelibrarian.php?lId=<?php echo $lId;?>">
										<i class='bx bxs-log-out-circle' ></i>
										<span class="text">Delete</span>
										</a></td>
							</tr>
							<?php }?>
						</tbody>
					</table>
				</div>
				
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>

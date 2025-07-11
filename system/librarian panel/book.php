<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">

	<title>LibrarianHub</title>
</head>
<body>
<?Php 
	$con=mysqli_connect("localhost","root","","library");
?>

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
				<a href="../librarian panel/studentrecord.php">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">student</span>
				</a>
			</li>
			<li class="active">
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
				<img src="..admin panel/img/profile.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Books</h1>
					
				</div>
				<a href="../librarian panel/addbook.php" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Add book</span>
				</a>
			</div>
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>All  Books</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th><h3>Id<h3></th>
								<th><h3>Title<h3></th>
								<th><h3>author<h3></th>
								<th><h3>Price<h3></th>
								<th><h3>stock<h3></th>
								<th><h3>Edit<h3></th>
								<th><h3>Delete<h3></th>
							</tr>
						</thead>
						<tbody> 
						<?php
							$query_retrivefac="SELECT *from books
							LEFT JOIN `author` ON `author`.`aId`=`books`.`author` ";
							$cmd=mysqli_query($con,$query_retrivefac);
							While($row=mysqli_fetch_array($cmd))
							{
								$bId=$row['bId'];
								$title=$row['title']; 
								$author=$row['author'];
								$price=$row['price'];
								$stock=$row['stock'];

							?>
							<tr>
								<td><p><?php echo $bId;?></p></td>
		 						<td><p><?php echo $title;?></p></td>
								<td><?php echo $author;?></td>
								<td><?php echo $price;?></td>
								<td><?php echo $stock;?></td>
								<td><a class="logg"  href="../librarian panel/addbook.php?bId=<?php echo $bId;?>">
										<i class='bx bxs-log-out-circle' ></i>
										<span class="text">Edit</span>
										</a></td>
								<td><a class="logg"  href="../librarian panel/deletebook.php?bId=<?php echo $bId;?>">
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

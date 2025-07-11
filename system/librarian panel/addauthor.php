
<!DOCTYPE html>
<html lang="en">
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
			max-width: 600px;
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
		input[type="text"], select {
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
			<span class="text">librarianhub</span>
		</a>
		<ul class="side-menu top">
			<li >
				<a href="../librarian panel/index.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li class="active">
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
					<h1>Authour Form</h1>
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
			<body>
				
	<h1>Authour Detail Form</h1><br>
	<form action="../librarian panel/insertauthour.php" method="POST">
	<label for="title">Authour id:</label>
		<input type="text" id="id" name="id" placeholder="Enter Authour id...">
		<label for="title">Authour Name:</label>
		<input type="text" id="title" name="aName" placeholder="Enter Authour name...">
		<label for="author">Email:</label>
		<input type="text" id="author" name="email" placeholder="Enter email...">
		<label for="pages">city:</label>
		<input type="text" id="page" name="city" placeholder="Enter city...">
		<label for="pages">contact no:</label>
		<input type="text" id="page" name="contactNo" placeholder="Enter contact no...">
		<label for="pages">Address:</label>
		<input type="text" id="page" name="address" placeholder="Enter address...">
		<!-- <label for="description">Description:</label>
		<textarea id="description" name="description" rows="5" placeholder="Enter book description..."></textarea> -->
		<input type="submit" name="save" value="Submit">
	</form>
</body>
</html>
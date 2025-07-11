<!DOCTYPE html>
<html>
<head>
	<title>Online Library Management System</title>
	<style>
		
		body {
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
		}

		header {
			background-color: #333;
			color: #fff;
			padding: 20px;
			text-align: center;
		}

		h1 {
			margin: 0;
		}

		nav {
			background-color: #444;
			color: #fff;
			padding: 20px;
			text-align: center;
		}

		nav a {
			color: #fff;
			text-decoration: none;
			padding: 10px;
			margin: 5px;
			border: 1px solid #fff;
			border-radius: 5px;
		}

		nav a:hover {
			background-color: #fff;
			color: #444;
		}

		.container {
			max-width: 1200px;
			margin: 0 auto;
			padding: 20px;
			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
			align-items: center;
		}

		.card {
			background-color: #eee;
			padding: 20px;
			margin-bottom: 20px;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0,0,0,0.2);
			width: calc(33.33% - 20px);
		}

		.card h2 {
			margin-top: 0;
		}

		.card p {
			margin-bottom: 0;
		}

		.card a {
			display: block;
			margin-top: 10px;
			padding: 10px;
			background-color: #444;
			color: #fff;
			text-align: center;
			border-radius: 5px;
			text-decoration: none;
		}

		.card a:hover {
			background-color: #fff;
			color: #444;
			border: 1px solid #444;
		}

		footer {
			background-color: #333;
			color: #fff;
			padding: 30px;
			text-align: center;
		}
	</style>
</head>
<body>
	<header>
		<h1> Library Management System</h1>
	</header>

	<nav>
		<a href="#">Home</a>
		<a href="#">Books</a>
		<a href="#">Members</a>
		<a href="#">issue Books</a>
	</nav>

	<div class="container">
		<div class="card">
			<h2>Books</h2> 
			<p>View and manage all books in the library.</p>
			<a href="../dashboard/books.php">View Books</a>
		</div>

		<div class="card">
			<h2>Members</h2>
			<p>View and manage all members of the library.</p>
			<a href="../dashboard/book1.php">View Members</a>
		</div>

		<div class="card">
			<h2>isuue Books</h2>
			<p>View and manage all borrowed books in the library.</p>
			<a href="#">View Borrowed Books</a>
		</div>
	</div>

	<footer>
		<p>&copy; Library Management System</p>
	</footer>
</body>
</

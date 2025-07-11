<?php
include('../include/db_conn.php');

?>


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

	<title>LibrarianHub</title>
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
				<a href="index.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="..librarian panel/author.php">
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
		 <!-- <nav>
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
				<img src="img/people.png">
			</a>
		</nav> -->
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Book Details</h1>
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
	<div class="container" >
	
		<div class="content">
			<?php

                $author = mysqli_query($connection,"SELECT * FROM `author`");
                if(isset($_GET['bId'])){
                    $query_retriveuser="SELECT *from books WHERE bId='$_GET[bId]'";
                    $cmd1=mysqli_query($connection,$query_retriveuser);
                    $row=mysqli_fetch_array($cmd1);
                    $bId=$row['bId'];
                    $title=$row['title'];
                    $authorId=$row['author'];
                    $page=$row['page'];
                    $price=$row['price'];
                    $stock=$row['stock'];
                }else{
                    $authorId = 0;
                }

                if(isset($_POST['save'])){



                    // print_r($_POST);
                    // exit;
                    if(isset($_GET['bId'])){
                        $title=$_POST['title1'];
                        $authorId=$_POST['author1'];
                        $page=$_POST['page1'];
                        $price=$_POST['price1'];
                        $stock=$_POST['stock1'];

                        $query="update books set title='$title', author='$authorId', page='$page', price='$price', stock='$stock' where bId=$_GET[bId]";
                        $cmd=mysqli_query($connection,$query);
                        if($cmd){
                            header('location:book.php');
                        }

                    }else{

                        $title=$_POST['title1'];
                        $authorId=$_POST['author1'];
                        $page=$_POST['page1'];
                        $price=$_POST['price1'];
                        $stock=$_POST['stock1'];

                        $query =  mysqli_query($connection,"INSERT INTO `books` SET 
                        `title` = '$title',
                        `author` = '$authorId',
                        `page` = '$page',
                        `price` = '$price',
                        `stock` = '$stock'
                        ") or die(mysqli_error($connection));
                        if($query){
                            header('location:book.php');
                        } 
                    }


                }



			?>  

    <h1>Book Detail Form</h1><br>
	    <form method="POST">		
		      <label for="title"> title:</label>
          <td><input type="textbox" name="title1" value="<?php if(isset($_GET['bId'])){ echo $title;}?>" ></td>
		      <label for="author"> author:</label>
          <td><select  name="author1"  >
                <option value=""> Select Author</option>
                <?php foreach($author AS $row){ 
                        if($row['aId'] == $authorId){
                    ?>
                    <option value="<?php echo $row['aId']?>" selected> <?php echo $row['author']?></option>

                    <?php }else{?>
                    <option value="<?php echo $row['aId']?>"> <?php echo $row['author']?></option>
                    <?php }?>
                <?php }?>

                </select></td>
		      <label for="pages">page:</label>
          <td><input type="textbox" name="page1" value="<?php if(isset($_GET['bId'])){ echo $page;}?>"  ></td>
		  <label for="proice">price:</label>
          <td><input type="textbox" name="price1" value="<?php if(isset($_GET['bId'])){ echo $price; }?>"  ></td>
		  <label for="stock">stock:</label>
          <td><input type="textbox" name="stock1" value="<?php if(isset($_GET['bId'])){ echo $stock; }?>"  ></td>

		      <input type="submit" name="save" value="<?php if(isset($_GET['bId'])){ echo 'edit';}else{ echo 'add';} ?>">
	    </form>
</body>
</html>
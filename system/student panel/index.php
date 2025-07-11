<?php 

$pageName = 'Dashboard';
include('../include/db_conn.php');
include('../student panel/header.php');


?>



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
					<i class='bx bxs-group' ></i>
					<span class="text">
				    <?php
                              $user_query="SELECT *from issue_request WHERE `sId` = $sId";
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
						<p>issued Book</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
					<?php

                              $user_query="SELECT *from books ";
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

		<!-- MAIN -->
	<!-- </section> -->
	<!-- CONTENT -->
	
<?php
	include('../student panel/footer.php');?>